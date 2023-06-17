<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up / Sign In</title>
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- CSS Custom -->
    <style>
        body {
            background-color: #FFB1B1;
            padding: 20px;
            overflow: hidden;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 65%;
            max-height: 45%;
            margin-top: -3%;

            background-color: #ffffff;

            padding-top: 0;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            height: 430px;

        }

        .form-group {
            margin-bottom: 20px;
            width: 60%;


        }



        .form-group label {
            font-weight: bold;
            display: block;
            margin-left: -3%;
        }

        .form-group input {
            width: 60%;
            padding: 8px;
            border: 1px outset #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-left: -60%;
        }





        .text-center {
            margin-top: -39%;
        }

        .text-center h1 {
            margin-bottom: -50px;
            color: #E01515;
            font-size: 55px;
            font-style: bold;
        }

        .text-center img {
            height: 300px;
            font-family: Open Sans;

        }

        .form-group {
            margin-left: 20%;
            margin-top: 15%;
        }

        .row {
            margin-bottom: 30px;



        }

        h3 {
            color: #E88888;
            padding: 10px;
            padding-left: 340px;

        }

        ul {
            text-align: center;
        }

        .form-group img {
            height: 25px;
            width: auto;

        }

        #confirm-button {
            position: relative;

            left: 50%;
            transform: translate(-50%, 50%);
            color: #E88888;
            margin-left: 20%;
            margin-top: -3.5%;
        }

        .btn {
            background-color: #E88888;
        }

        #confirm-button button {
            font-size: 22px;
            padding: 2px 2px;
            padding-right: 120px;
            padding-left: 120px;
            color: #ffffff;
        }

        #confirm-button button {
            font-size: 22px;
            padding: 2px 2px;
            padding-right: 120px;
            padding-left: 120px;
            color: #ffffff;
        }
    </style>
</head>

<body>


    <section>
        <svg viewBox="0 0 500 200">
            <path d="M 0 50 C 150 150 300 0 500 80 L 500 0 L 0 0" fill="#fff"></path>

            <path d="M 0 50 C 150 150 330 -30 500 50 L 500 0 L 0 0" fill="#fff" opacity="0.8"></path>

            <path d="M 0 50 C 215 150 250 0 500 100 L 500 0 L 0 0" fill="#fff" opacity="0.5"></path>
        </svg>
    </section>

    <div class="text-center">
        <h1>Yuk Njahit</h1>
        <form method="POST" action="{{ route('logout') }}" style="margin-left: 90%;">
            @csrf

            <button type="submit" class="btn" style="color: #ffffff">
                {{ __('Log Out') }}
            </button>
        </form>
        <img src="{{ asset('image/mesin jahit.png') }}" style="background-color: transparent ">
    </div>







    <div class="container">

        <div class="row">
            <div class="col" style="background-color: #F9DEDE"  >
                <ul class="nav nav-pills nav-justified">
                            <h3 class="text-center-h3">Verification Your Email</h3>
                </ul>
            </div>
        </div>

            <i><b>
            <div class="mb-4 text-sm text-gray-600" style="margin-left: 20%;margin-right:20%;margin-top:7%" >
                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
            </div></i></b>
            @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
            @endif
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <div id="confirm-button" style="margin-left: 23%;margin-top:2%">
                        <x-button style="background-color: #FFB1B1">
                            {{ __('Resend Verification Email') }}
                        </x-button>
                    </div>
                </div>
            </form>





    </div>

</body>

</html>
