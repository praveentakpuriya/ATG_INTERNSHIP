<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
            top: 100px
        }

        .title {
            font-size: 84px;
            top: 100px
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="content ">
            <div class="title m-b-md">
                Praveen's Project

            </div>

            <div class="row">
                <div class="col-md-8 pt-5 px-5">
                    <img src="https://res.cloudinary.com/dertnrv97/image/upload/v1619962445/DSC05393_l1xowq.jpg" class="img-thumbnail " style="width:40% "
                        alt="Praveen Takpuriya">
                </div>
                <div class="col-md-4 pt-4 px-4">
                    <h2 class="font-weight-bold">Contact Me</h2>
                    <hr class="headding-border-alt">
                    <address>
                        <strong style="font-family: bold">Praveen Takpuriya</strong><br>
                        <strong style="font-family: bold">Codechef 4<span class="fa fa-star checked"></span></strong>Coder (Highest Rating 1806)<br>
                        <strong style="font-family: bold">Vijay Nagar </strong><br>
                        <strong style="font-family: bold">Indore</strong>
                        <br>
                    </address>
                    <address style="font-family: bold">
                        <abbr title="Phone">Mobile:</abbr>
                        +91-7999778298
                        <br>
                        <abbr title="Email" style="font-family: bold">Email:</abbr>
                        <a class="text-break" href="mailto:#" style="font-family: bold">praveenyadavtak@gmail.com</a> <br>
                        <abbr title="Linkedin" style="font-family: bold">Linkedin:</abbr>
                        <a class="text-break" href="https://www.linkedin.com/in/praveen-takpuriya-5b822a196/" style="font-family: bold">https://www.linkedin.com/in/praveen-takpuriya-5b822a196/</a>
                    </address>

                </div>
            </div>
        </div>
    </div>
</body>

</html>
