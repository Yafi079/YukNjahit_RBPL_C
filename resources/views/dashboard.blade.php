<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Order - Online Store</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZEZv3v1qz7r2KLrGJw7O8" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e40f85b6c6.js" crossorigin="anonymous"></script>
    <script>
        // Menggunakan jQuery
        $(document).ready(function() {
            $('.rating i').click(function() {
                $(this).removeClass('far').addClass('fas');
                $(this).prevAll().removeClass('far').addClass('fas');
                $(this).nextAll().removeClass('fas').addClass('far');
            });
        });
    </script>


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


        .order-container {

            height: 20%;


            margin: auto;
            padding: 20px;
        }

        .order-container .row {

            margin: 0px;
            width: ;
        }

        .order-container .row .col {
            margin: 10px;
        }

        .order-container img {
            max-width: 288px;
            max-height: 403px;
            object-fit: contain;
            height: 200px;
            width: 145px;


        }

        .order-container .order-harga {
            font-size: 15px;
            font-weight: bold;
            margin-bottom: 2px;
            color: red;
        }



        .order-item {
            margin-bottom: 20px;
            padding: 20px;
            border: 2px solid #ddd;
            border-radius: 5px;
        }

        .order-item .order-id {
            font-size: 35px;
            font-weight: semi-bold;
            margin-bottom: 5px;
        }





        .keterangan {
            margin: 1em;
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
            padding: 2px;
            background-color: #E01515;
            font-size: 5px;
            color: white;
            text-align: center;
            margin: 5px;

        }

        .jumbotron .input {
            width: 90%;
            padding: 8px;

            margin: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 10px;
            background-color: #e9dada;
            border: solid #ffffff;
            color: #000000;
        }

        .nav-container {
            font-size: 15px;
            text-align: center;
            right: 20%;

            margin: 10px 10px 6px 70px;
        }



        .nav-container ul li a {
            padding: 7px;
            border: 1px #ccc solid;
            color: white;
            font-weight: semi-bold;
            /* Menambahkan jarak dengan properti margin */
        }

        .rating {
            color: #f2b01e;
            /* Warna bintang aktif */
            font-size: 24px;
            /* Ukuran bintang */
        }

        .rating i {
            cursor: pointer;
        }

        .rating i:hover,
        .rating i:hover~i {
            color: #f2b01e;
            /* Warna bintang saat dihover */
        }
    </style>

</head>

<body>

    <header>
        <div class="jumbotron">

            <input class="input" type="text" id="seacrh" action="/action_page.php" placeholder="Search Product"
                required>
            <div class="nav-container">
                <ul class="nav nav-pills nav-justified">
                    <li class="active"><a href="#">Men</a></li>
                    <li><a href="#">Women</a></li>

                </ul>
            </div>
        </div>


    </header>
    <!-- bagian judul halaman blog -->


    <!-- bagian konten blog -->


    <div class="order-container">
        <div class="row">
            <div class="col">
                <div class="card" style="width:100%">
                    <img class="card-img-top" src="{{ asset('image/batik.jpg') }}" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <div class="order-harga">Rp. 100.000</div>
                        <div class="rating">
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="location">
                            <i class="fas fa-solid fa-location-dot"></i>
                            <span>Kota Surabaya</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width:100%">
                    <img class="card-img-top" src="{{ asset('image/batik2.jpg') }}" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <div class="order-harga">Rp. 100.000</div>
                        <div class="rating">
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="location">
                            <i class="fas fa-solid fa-location-dot"></i>
                            <span>Kota Surabaya</span>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width:100%">
                    <img class="card-img-top" src="{{ asset('image/batik2.jpg') }}" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <div class="order-harga">Rp. 100.000</div>
                        <div class="rating">
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="location">
                            <i class="fas fa-solid fa-location-dot"></i>
                            <span>Kota Surabaya</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width:100%">
                    <img class="card-img-top" src="{{ asset('image/batik2.jpg') }}" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <div class="order-harga">Rp. 100.000</div>
                        <div class="rating">
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="location">
                            <i class="fas fa-solid fa-location-dot"></i>
                            <span>Kota Surabaya</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                <a href="/cart">
                    <i class="fas fa-shopping-cart"></i>
                    <br>
                    <span>Cart</span></a>
            </div>
            <div class="col-md">
                <a href="/myorder"><i class="fas fa-sharp fa-regular fa-receipt"></i>
                <br>
                <span>My Order</span></a>
            </div>
            <div class="col-md">
                <a href="/profilepembeli">
                    <img src="{{ asset('image/account.png') }}" alt="My Account">
                    <br>
                    <span>My Account</span>
                </a>
            </div>
        </div>
    </div>
</body>


</html>
