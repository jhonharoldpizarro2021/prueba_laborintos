<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Prueba Laborintos</title>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style>
    button.back {
        margin-top: 50px;
        float: left;
    }

    button a {
        color: white;
        display: block
    }

    button a:hover {
        color: #ffffff80;
    }
    .has-animation {
        position: relative;
    }

    .has-animation p,
    .has-animation img {
        opacity: 0;
    }

    .has-animation.animate-in p,
    .has-animation.animate-in img {
        animation: textHidden 0.1s 1.1s forwards;
    }

    .has-animation.animate-in:before,
    .has-animation.animate-in:after {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        height: 100%;
        z-index: 10;
    }

    .has-animation.animate-in:before {
        background-color: teal;
    }

    .has-animation.animate-in:after {
        background-color: yellowgreen;
        animation-delay: .5s;
    }

    .has-animation.animation-ltr.animate-in:before {
        animation: revealLTR 1.8s ease;
    }

    .has-animation.animation-ltr.animate-in:after {
        animation: revealLTR 1s .6s ease;
    }

    .has-animation.animation-rtl.animate-in:before {
        animation: revealRTL 1.8s ease;
    }

    .has-animation.animation-rtl.animate-in:after {
        animation: revealRTL 1s .6s ease;
    }

    @keyframes revealRTL {
        0% {
            width: 0;
            right: 0;
        }

        65% {
            width: 100%;
            right: 0;
        }

        100% {
            width: 0;
            right: 100%;
        }
    }

    @keyframes revealLTR {
        0% {
            width: 0;
            left: 0;
        }

        65% {
            width: 100%;
            left: 0;
        }

        100% {
            width: 0;
            left: 100%;
        }
    }

    @keyframes textHidden {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

</style>
<!-- Custom styles for this template -->
{{-- <link href="/css/styles.css" rel="stylesheet"> --}}
