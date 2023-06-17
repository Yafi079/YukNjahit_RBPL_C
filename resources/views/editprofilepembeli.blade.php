<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Order - Online Store</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZEZv3v1qz7r2KLrGJw7O8" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e40f85b6c6.js" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        /* Custom CSS */


        .container .text-center {
            margin: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            height: 100vh;
            /* Mengatur tinggi div agar gambar berada di tengah vertikal */
        }

        .text-center img {
            margin-top: 20px;
            height: 180px;
        }




        .form-container {
            width: 50%;
            background-color: #f2ebeb;
            margin-top: -520px;
            margin-left: 25%;
            height: 350px;
            /* Mengatur padding atas untuk mendekatkan form dengan gambar */
        }

        .form-container label {
            font-weight: bold;
        }

        .form-container .form-group {
            padding: 20px;
            padding-bottom: 2px;
        }



        .footer {
            padding-top: 5px;

            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 8%;
            background-color: #f2ebeb;
            text-align: center;

        }

        .footer .row img {
            height: 25px;
            width: auto;
        }



        .jumbotron {
            padding: 10px;
            background-color: #E01515;
            font-size: 5px;
            color: white;
            text-align: center;
            margin-bottom: 0px;
        }

        .jumbotron h6 {
            float: right;
            margin-top: -35px;
            margin-right: 20px;
        }

        #confirm-button {
            margin-right: 20px;
        }

        #confirm-button button {
            font-size: 15px;
            padding: 2px 25px 2px 25px;
        }
    </style>
</head>

<body>
    <header>

        <div class="jumbotron">
            <h3>Confirm Edit Profile</h3>
            <h6>
                <i class="fa-solid fa-right-from-bracket"></i>
                Sign Out
            </h6>

        </div>
        <div class="container">
            <div class="text-center">
                <img src="{{ asset('image/account.png') }}">
            </div>
        </div>
        <div class="form-container rounded">
    @foreach ($pembeli as $p)
	<form action="/profilepembeli/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->id }}">
                <div class="form-group row">
                    <label for="name" class="col-md-2 col-form-label">Nama</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="name" required="required" name="nama" value="{{ $p->name }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-md-2 col-form-label">Email</label>
                    <div class="col-md-10">
                        <input type="email" class="form-control" id="email"
                        required="required" name="jabatan" value="{{ $p->email}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="phone" class="col-md-2 col-form-label">No. Telepon</label>
                    <div class="col-md-10">
                        <input type="tel" class="form-control" id="phone" required="required" name="umur" value="{{ $p->notelp }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="address" class="col-md-2 col-form-label">Alamat</label>
                    <div class="col-md-10">
                        <input class="form-control" id="address" rows="3"
                        required="required" name="alamat" value="{{ $p->alamat }}">
                    </div>
                </div>
                <div id="confirm-button">
                    <button type="submit" class="btn btn-danger btn-lg" style="float:right" value="Simpan Data"> <i
                            class="fa-regular fa-pen-to-square"></i> Confirm</button>
                </div>

            </form>
            @endforeach
        </div>




    </header>
    <!-- bagian judul halaman blog -->


    <!-- bagian konten blog -->


    <div class="order-container">






    </div>



    <!-- bagian footer -->


    <div class="footer">



        <div class="row">
            <div class="col-md">
                <i class="fas fa-home"></i>
                <br>
                <span>Home</span>
            </div>
            <div class="col-md">
                <i class="fas fa-shopping-cart"></i>
                <br>
                <span>Cart</span>
            </div>
            <div class="col-md">
                <i class="fas fa-sharp fa-regular fa-receipt"></i>
                <br>
                <span>My Order</span>
            </div>
            <div class="col-md">
                <img src="{{ asset('image/account.png') }}" alt="My Account">
                <br>
                <span>My Account</span>
            </div>
        </div>
    </div>


    </div>
</body>

</html>
