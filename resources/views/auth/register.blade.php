<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up / Sign In</title>
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- CSS Custom -->
     <!-- Validation Errors -->
     <x-auth-validation-errors class="mb-4" :errors="$errors" />
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
        }

        .row {
            margin-bottom: 30px;
            text-align: center;
            width: 100%;

        }

        h3 {
            color: #E88888;
            padding: 10px;
            padding-left: 190px;

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
        <img src="{{ asset('image/mesin jahit.png') }}" style="background-color: transparent ">
    </div>







    <div class="container">

        <div class="row">
            <div class="col-xl" style="background-color: #F9DEDE">
                <ul class="nav nav-pills nav-justified">
                    <li class="active"><a href="{{ route('login') }}">
                            <h3 class="text-center-h3">Sign In</h3>
                        </a></li>

                </ul>
            </div>
            <div class="col-xl">
                <ul class="nav nav-pills nav-justified">
                    <li class="active"><a href="#">
                            <h3>Sign Up</h3>
                        </a></li>

                </ul>
            </div>

        </div>

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group row">
                <label for="name" class="col-md-2 col-form-label" :value="__('Name')">
                    <img src="{{ asset('image/orang.png') }}" class="rounded" class="img-fluid" style="float:left">
                </label>
                <div class="col-md-10">
                    <input id="name" type="text" name="name" :value="old('name')" required autofocus placeholder="Name">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" :value="__('Email')" class="col-md-2 col-form-label">
                    <img src="{{ asset('image/email.png') }}" class="rounded" class="img-fluid" style="float:left">
                </label>
                <div class="col-md-10">
                    <input id="email" type="email" name="email" :value="old('email')" required placeholder="Email">
                </div>
            </div>
            <div class="form-group row">
                <label for="password" :value="__('Password')" class="col-md-2 col-form-label">
                    <img src="{{ asset('image/kunci.png') }}" class="rounded" class="img-fluid" style="float:left">
                </label>
                <div class="col-md-10">
                    <input id="password" type="password"
                    name="password"
                    required autocomplete="new-password" placeholder="Password">
                </div>
            </div>
            <div class="form-group row">
                <label for="password_confirmation" :value="__('Confirm Password')" class="col-md-2 col-form-label">
                    <img src="{{ asset('image/kunci.png') }}" class="rounded" class="img-fluid" style="float:left">
                </label>
                <div class="col-md-10">
                    <input id="password_confirmation" type="password"
                    type="password"
                    name="password_confirmation" placeholder="Confirmation Password" required>
                </div>
            </div>
            <div id="confirm-button">
                <button class="btn "> {{ __('Register') }}</button>

            </div>

        </form>

    </div>

</body>

</html>
