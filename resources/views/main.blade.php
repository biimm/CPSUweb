<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Cache-Control" content="public">

    @yield('meta')

    <!-- Specific content -->
    @yield('head')


    <title>{{ config('app.name', 'CPSU') }}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="100">

    <img src="{{ URL::asset('image/black_ribbon_bottom_left.png') }}" class="black-ribbon stick-bottom stick-left"/>

    <button onclick="topFunction()" id="goTopBtn" title="Go to top">
        <i class="material-icons">arrow_upward</i>
    </button>

    <div id="page">
        <div id="page-head">
            @include('_nav')
        </div>
        <div id="page-body">
            @yield('content')
        </div>
        <div id="page-footer">
            @include('_footer')
        </div>
    </div>

    <!-- Script content -->
    <script src="{{ URL::asset('js/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script async src="{{ URL::asset('js/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    {{-- StyleSheet --}}
    <link rel="stylesheet" href="{{ URL::asset('js/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ URL::asset('js/bower_components/Croppie/croppie.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">

    <script src="{{URL::asset('js/bower_components/Croppie/croppie.min.js')}}"></script>
    @yield('script')
    <script>

        var $uploadCrop;

        function readFile(input) {
            if (input.files && input.files[0]) {
                console.log(input.files[0]);
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.upload-demo').addClass('ready');
                    $uploadCrop.croppie('bind', {
                        url: e.target.result
                    }).then(function(){
                        console.log('jQuery bind complete');
                    });

                }

                reader.readAsDataURL(input.files[0]);
            }
            else {
                swal("Sorry - you're browser doesn't support the FileReader API");
            }
        }

        $uploadCrop = $('#upload-demo').croppie({
            viewport: { width: 100, height: 100 },
            boundary: { width: 300, height: 300 },
            //showZoomer: false,
            //enableResize: true,
            //enableOrientation: true,
            format: 'jpeg',
        });

        $('#upload').on('change', function () {
            readFile(this);
        });
        $('.upload-result-teacher-update').on('click', function (ev) {
            var data = $("#teacher_edit").serialize();
            $uploadCrop.croppie('result', {
                type: 'canvas',
                size: 'viewport'
            }).then(function (resp) {
                var teacher_id = document.getElementById('teacher_id').value;
                $.ajax({
                    url: "../../teacher/" + teacher_id,
                    type: "PATCH",
                    data: data ,
                    success: function (data) {//alert(data);
                        html = '<img src="' + resp + '" />';
                        $("#upload-demo-i").html(html);
                        console.log(data);
                    }
                });
            });
        });

    </script>

    <script>
        // Trigger when the user scrolls down 500px from the top of the document
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 800 || document.documentElement.scrollTop > 800) {
                document.getElementById("goTopBtn").style.display = "block";
            } else {
                document.getElementById("goTopBtn").style.display = "none";
            }
        }

        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
</body>
</html>