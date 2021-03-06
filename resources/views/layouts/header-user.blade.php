<style>
    @keyframes hidePreloader {
        0% {
            width: 100%;
            height: 100%;
        }

        100% {
            width: 0;
            height: 0;
        }
    }

    body>div.preloader {
        position: fixed;
        background: white;
        width: 100%;
        height: 100%;
        z-index: 1071;
        opacity: 0;
        transition: opacity .5s ease;
        overflow: hidden;
        pointer-events: none;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    body:not(.loaded)>div.preloader {
        opacity: 1;
    }

    body:not(.loaded) {
        overflow: hidden;
    }

    body.loaded>div.preloader {
        animation: hidePreloader .5s linear .5s forwards;
    }
    @stack('styles')
</style>
<script>
    window.addEventListener("load", function() {
        setTimeout(function() {
            document.querySelector('body').classList.add('loaded');
        }, 300);
    });
</script>
<!-- Favicon -->
<link rel="icon" href="{{ asset('assets/img/brand/favicon.png') }}" type="image/png">
<link rel="stylesheet" href="{{ asset('assets/libs/@fortawesome/fontawesome-free/css/all.min.css') }}">
<!-- Quick CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/quick-website.css') }}" id="stylesheet">
