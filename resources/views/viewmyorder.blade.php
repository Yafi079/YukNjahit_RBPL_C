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


        .order-container {
            max-width: 100%;


            margin: auto;
            padding: 20px;
        }





        .order-item {
            margin-bottom: 20px;
            padding: 20px;
            border: 2px solid #ddd;
            border-radius: 5px;
        }

        .order-item .fa-x {
            float: right;
        }


        .order-item .order-produk {
            font-size: 35px;
            font-weight: semi-bold;
            margin-bottom: 2px;
        }

        .order-item img {
            max-width: 100%;
            max-height: 200px;
            object-fit: contain;
            height: 100px;

        }


        .order-item .order-status {
            font-size: 15px;
            font-weight: normal;
            margin-bottom: 10px;
            font-style: italic;
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
            padding: 5px;
            background-color: #E01515;
            font-size: 5px;
            color: white;
            text-align: center;
            margin-bottom: 0px;
        }

        .order-harga {

            font-size: 15px;
            font-weight: normal;
            margin-bottom: 2px;
            color: white;
        }

        .order-total {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 2px;
            background-color: #e28b8b;
            color: black;
            margin-top: 0px;
        }

        .order-total h6 {
            margin: 0;
            margin-left: 20px;
            color: black;

        }

        .order-total .order-harga {
            margin: 0;
            margin-right: 20px;
            color: black;
            font-weight: semi-bold;
        }
    </style>
</head>

<body>
    <header>

        <div class="jumbotron">
            <h3>My Order</h3>

        </div>
        <div class="order-total">
            <h6>Total Price </h6>
            <div class="order-harga"></div>
        </div>


    </header>
    <!-- bagian judul halaman blog -->


    <!-- bagian konten blog -->


    <div class="order-container">


        <h5>My Order</h5>



        @foreach ($customerorder as $o)

            <div class="order-item">
                <div class="row">
                    <div class="media p-3">
                        <img src="{{ url('/data_file/' . $o->file) }}" class="rounded" class="img-fluid"
                            style="float:left">
                        <div class="media-body" style="margin-left: 10%">
                            <h4 style="width:200%">{{ $o->namaBaju }}</h4>
                            <h6>{{ $o->hargaBaju }}</h6>
                            <i><h6>Status : {{ $o->statusPesanan }} </h6></i>
                        </div>
                    </div>

                </div>
            </div>

        @endforeach

        </div>


    </div>



    <!-- bagian footer -->


    <div class="footer">



        <div class="row">
            <div class="col-md">
                <a href="/dashboard"> <i class="fas fa-home"></i>
                <br>
                <span>Home</span></a>
            </div>
            <div class="col-md">
                <a href="/cart"> <i class="fas fa-shopping-cart"></i>
                <br>
                <span>Cart</span></a>
            </div>
            <div class="col-md">
                <i class="fas fa-sharp fa-regular fa-receipt"></i>
                <br>
                <span>My Order</span>
            </div>
            <div class="col-md">
                <a href="/profilepembeli">
                    <img src="{{ asset('image/account.png') }}" alt="My Account">
                <br>
                <span>My Account</span></a>
            </div>
        </div>
    </div>


    </div>
</body>

</html>
