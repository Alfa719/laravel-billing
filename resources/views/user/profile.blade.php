@extends('layouts.user')
@section('content')
    <div class="slice py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card hover-translate-y-n10 hover-shadow-lg">
                        <div class="card-body">
                            <div class="pb-2">
                                <img alt="Profile Image" src="{{ asset('image/1.jfif') }}" class="svg-inject rounded-circle" style="height: 50px; width: 50px;">
                            </div>
                            <div class="pt-2 pb-3">
                                <h5>{{ Auth::user()->nama }}</h5>
                                <p class="text-muted mb-0">
                                    All components are built to be used in any combination.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card hover-translate-y-n10 hover-shadow-lg">
                        <div class="card-body">
                            @if ($message = Session::get('message'))
                                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                    <strong>Notif! </strong>{{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <form action="{{ route('user.profile.update', Auth::user()->id) }}" method="post" class="form-group">
                                @csrf
                                @method('PUT')
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control form-control-sm" name="nama" required value="{{ Auth::user()->nama }}" placeholder="Nama">
                                @error('nama')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <label for="gender">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="gender" class="custom-select custom-select-sm form-control-sm">
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                                @error('jenis_kelamin')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <label for="alamat">Alamat</label>
                                <div class="row">
                                    <div class="col-md-6 mb-2">
                                        <input type="text" class="form-control form-control-sm" id="latitude" name="latitude" placeholder="Latitude" value="{{ Auth::user()->latitude }}">
                                    </div>
                                    @error('latitude')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="col-md-6 mb-2">
                                        <input type="text" class="form-control form-control-sm" id="longitude" name="longitude" placeholder="Longitude" value="{{ Auth::user()->longitude }}">
                                    </div>
                                    @error('longitude')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="col-md-12 mb-2">
                                        <div id="map" style="height: 300px; width: 100%"></div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-dark btn-block">Update Profile</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('title', 'Profile')
@push('scripts')
    <script>
        let map;
        function initMap() {
            // Show MAP
            map = new google.maps.Map(document.getElementById("map"), {
                center: {lat: -7.756928, lng: 113.211502},
                zoom:8,
                scrollwheel:true
            });
            // Make marker use drag
            const uluru = {lat: -7.756928, lng: 113.211502};
            let marker = new google.maps.Marker({
                position: uluru,
                map:map,
                draggable:true
            });
            // Make marker use click
            google.maps.event.addListener(map, 'click', function(event) {
                pos = event.latLng
                marker.setPosition(pos);
            })
            // Add to form
            google.maps.event.addListener(marker, 'position_changed', function(){
                let lat = marker.position.lat();
                let lng = marker.position.lng();
                $('#latitude').val(lat);
                $('#longitude').val(lng);
            });
        }
    </script>
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1OpMKcHCHGl3PZvEcUMAjlCzSWkh85TY&callback=initMap&libraries=&v=weekly"></script>
@endpush
