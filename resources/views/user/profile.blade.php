@extends('layouts.user')
@section('content')
    <div class="slice">
        <div class="container">
            <div class="row mt-n5">
                <div class="col-md-4 bg-white mb-3 rounded-lg shadow-lg">
                    <div class="nav mt-md-3 mt-0 flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link py-2 active" id="v-pills-myProfile-tab" data-toggle="pill" href="#v-pills-myProfile" role="tab" aria-controls="v-pills-myProfile" aria-selected="true">Profil</a>
                        <a class="nav-link py-2" id="v-pills-identity-tab" data-toggle="pill" href="#v-pills-identity" role="tab" aria-controls="v-pills-identity" aria-selected="false">Data Diri @if ($msg = Session::get('messageUser')) <span class="text-info ml-auto"><small>{{ $msg }}</small></span> @endif</a>
                        <a class="nav-link py-2" id="v-pills-document-tab" data-toggle="pill" href="#v-pills-document" role="tab" aria-controls="v-pills-document" aria-selected="false">Dokumen @if ($msg = Session::get('messageDocument')) <span class="text-info ml-auto"><small>{{ $msg }}</small></span> @endif</a>
                        <a class="nav-link py-2" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Pengaturan Akun</a>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-myProfile" role="tabpanel" aria-labelledby="v-pills-myProfile-tab">
                            <div class="card bg-section-dark border-2 rounded-lg" style="max-width: 100%;">
                                <div class="card-body px-5">
                                    <div class="row">
                                        <div class="col-md-5 col-sm-12 bg-gradient-dark p-5">
                                            <div class="mb-3">
                                                <div>
                                                    <div class="icon icon-xl icon-shape bg-warning rounded-circle">
                                                        @php
                                                            Auth::user()->gambar == null ? ($path = asset('image/1.jfif')) : ($path = Auth::user()->gambar);
                                                        @endphp
                                                        <img alt="avatar" src="{{ $path }}"
                                                            class="svg-inject rounded-circle" style="height: 70px; width: 70px;">
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="h5 text-white mb-1">
                                                {{ Auth::user()->nama }}
                                            </span>
                                            <h5 class="h6 text-white mb-1">
                                                {{ Auth::user()->email }}
                                            </h5>
                                            <h5 class="h5 text-white mb-1">
                                                {{ Auth::user()->nomor_hp }}
                                            </h5>

                                            @isset(Auth::user()->jenis_kelamin)
                                                @php
                                                    Auth::user()->jenis_kelamin == 'L' ? ($gender = 'Laki-Laki') : ($gender = 'Prempuan');
                                                @endphp
                                            @else
                                                @php
                                                    $gender = 'Unknown Gender!';
                                                @endphp
                                            @endisset
                                            <h6 class="text-white pt-3">{{ $gender }}</h6>
                                            @if (Auth::user()->latitude == null && Auth::user()->longitude == null)
                                                <span class="badge badge-danger badge-pill text-dark py-0">
                                                    Alamat tidak diketahui!
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-md-7 mt-3 mt-md-0">
                                            <div id="address" style="min-height: 50vh; max-height:100%; width: 100%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-identity" role="tabpanel" aria-labelledby="v-pills-identity-tab">
                            <div class="card hover-translate-y-n10 hover-shadow-lg">
                                <div class="card-body">
                                    @if ($message = Session::get('messageUser'))
                                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                            <strong>Notif! </strong>{{ $message }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif
                                    <form action="{{ route('user.profile.update', Auth::user()->id) }}" method="post"
                                        class="form-group" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control form-control-sm" name="nama" required
                                            value="{{ Auth::user()->nama }}" placeholder="Nama">
                                        @error('nama')
                                            <span class="text-danger">{{ $message }}</span><br>
                                        @enderror
                                        <label for="image">Gambar</label>
                                        <input type="file" class="form-control form-control-sm" name="gambar"
                                            value="{{ Auth::user()->gambar }}" placeholder="Gambar Profil">
                                        @error('gambar')
                                            <span class="text-danger">{{ $message }}</span><br>
                                        @enderror
                                        <label for="gender">Jenis Kelamin</label>
                                        <select name="jenis_kelamin" id="gender"
                                            class="custom-select custom-select-sm form-control-sm">
                                            <option value="L" {{ Auth::user()->jenis_kelamin == 'L' ? 'selected': '' }}>Laki-laki</option>
                                            <option value="P">{{ Auth::user()->jenis_kelamin == 'P' ? 'selected': '' }}</option>
                                        </select>
                                        @error('jenis_kelamin')
                                            <span class="text-danger">{{ $message }}</span><br>
                                        @enderror
                                        <label for="phone">No HP</label>
                                        <input type="number" class="form-control form-control-sm" name="nomor_hp" required
                                            value="{{ Auth::user()->nomor_hp }}" placeholder="Nomor">
                                        @error('nomor_hp')
                                            <span class="text-danger">{{ $message }}</span><br>
                                        @enderror
                                        <label for="alamat">Alamat</label>
                                        <div class="row">
                                            <div class="col-md-6 mb-2">
                                                <input type="text" class="form-control form-control-sm" id="latitude"
                                                    name="latitude" placeholder="Latitude" value="{{ Auth::user()->latitude }}">
                                            </div>
                                            @error('latitude')
                                                <span class="text-danger">{{ $message }}</span><br>
                                            @enderror
                                            <div class="col-md-6 mb-2">
                                                <input type="text" class="form-control form-control-sm" id="longitude"
                                                    name="longitude" placeholder="Longitude"
                                                    value="{{ Auth::user()->longitude }}">
                                            </div>
                                            @error('longitude')
                                                <span class="text-danger">{{ $message }}</span><br>
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
                        <div class="tab-pane fade" id="v-pills-document" role="tabpanel" aria-labelledby="v-pills-document-tab">
                            <div class="card hover-translate-y-n10 hover-shadow-lg">
                                <div class="card-body">
                                    @if ($message = Session::get('messageDocument'))
                                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                            <strong>Notif! </strong>{{ $message }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif
                                    <form action="{{ route('user.document.update', Auth::user()->id) }}" method="post"
                                        class="form-group" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <label for="nik">NIK</label>
                                        <input type="number" class="form-control form-control-sm" name="nik" required
                                            value="{{ Auth::user()->nik }}" placeholder="NIK">
                                        @error('nik')
                                            <span class="text-danger">{{ $message }}</span><br>
                                        @enderror
                                        <label for="ktp">Foto KTP</label>
                                        <input type="file" class="form-control form-control-sm" name="foto_ktp"
                                            value="{{ Auth::user()->foto_ktp }}" placeholder="Foto KTP">
                                        @error('foto_ktp')
                                            <span class="text-danger">{{ $message }}</span><br>
                                        @enderror
                                        <label for="ktp">Foto Pelanggan Bersama KTP</label>
                                        <input type="file" class="form-control form-control-sm" name="foto_user_ktp"
                                            value="{{ Auth::user()->foto_ktp }}" placeholder="Foto KTP">
                                        @error('foto_user_ktp')
                                            <span class="text-danger">{{ $message }}</span><br>
                                        @enderror
                                        <button type="submit" class="btn btn-dark btn-block mt-2">Update Profile</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                            <div class="card hover-translate-y-n10 hover-shadow-lg">
                                <div class="card-body">
                                    @if ($message = Session::get('messageUser'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong>Notif! </strong>{{ $message }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif
                                    <form action="{{ route('user.profile.update', Auth::user()->id) }}" method="post"
                                        class="form-group">
                                        @csrf
                                        @method('PUT')
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control form-control-sm" name="nama" required
                                            value="{{ Auth::user()->nama }}" placeholder="Nama">
                                        @error('nama')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <button type="submit" class="btn btn-dark btn-block">Update Profile</button>
                                    </form>
                                </div>
                            </div>
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
        // console.log({{ Auth::user()->latitude }})
        const userLat = {{ Auth::user()->latitude == null ? '-7.756928' : Auth::user()->latitude }};
        const userLng = {{ Auth::user()->longitude == null ? '113.211502' : Auth::user()->longitude }};
        let map;

        function initMap() {
            // Show MAP
            map = new google.maps.Map(document.getElementById("map"), {
                center: {
                    lat: userLat,
                    lng: userLng
                },
                zoom: 8,
                scrollwheel: true,
            });
            // Make marker use drag
            const uluru = {
                lat: userLat,
                lng: userLng
            };
            let marker = new google.maps.Marker({
                position: uluru,
                map: map,
                draggable: true
            });
            // Make marker use click
            google.maps.event.addListener(map, 'click', function(event) {
                pos = event.latLng
                marker.setPosition(pos);
            })
            // Add to form
            google.maps.event.addListener(marker, 'position_changed', function() {
                let lat = marker.position.lat();
                let lng = marker.position.lng();
                $('#latitude').val(lat);
                $('#longitude').val(lng);
            });
            // Set User Address
            address = new google.maps.Map(document.getElementById("address"), {
                center: {
                    lat: userLat,
                    lng: userLng
                },
                zoom: 16,
                scrollwheel: true,
            });
            let addressMark = new google.maps.Marker({
                position: {
                    lat: userLat,
                    lng: userLng
                },
                map: address,
                draggable: false
            });
        }
    </script>
    <script async
        src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyCWY-q7-nQ4ESJpVa1Jx4ErwzDCoJ73cAo&callback=initMap&libraries=&v=weekly">
    </script>
@endpush
