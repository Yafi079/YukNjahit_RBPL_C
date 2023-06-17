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

        .order-item .order-id {
            font-size: 35px;
            font-weight: semi-bold;
            margin-bottom: 5px;
        }

        .order-item img {
            max-width: 100%;
            max-height: 200px;
            object-fit: contain;
            height: 100px;

        }


        .order-item .order-total {
            font-size: 25px;
            font-weight: normal;
            margin-bottom: 10px;
        }

        .keterangan {
            margin: 1em;
        }



        #checkout-button {
            position: fixed;
            bottom: 7%;
            right: 0;
            margin: 20px;

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

        }
    </style>
</head>

<body>
    <header>

        <div class="jumbotron">
            <h3>Customer Order</h3>
        </div>


    </header>
    <!-- bagian judul halaman blog -->


    <!-- bagian konten blog -->


    <div class="order-container">
        <h5>Customer Order Items</h5>
        @foreach ($customerorder as $o)
            <div class="order-item" name="order">
                <div id="image" class="card bg-light">
                <div class="row">
                    <div class="media p-3">
                        <img src="{{ url('/data_file/' . $o->file) }}" class="rounded" class="img-fluid"
                            style="float:left">
                        <div class="media-body" style="margin-left: 10%">
                            <h4>{{ $o->namaBaju }}</h4>
                            <h6>{{ $o->hargaBaju }}</h6>
                            <h6> Status : {{ $o->statusPesanan }}</h6>
                            <a href="/customerorders/{{ $o->idCustomerOrder }}" class="stretched-link" name="link"></a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        @endforeach
    </div>


    <!-- bagian footer -->


    <div class="footer">



        <div class="row">
            <div class="col-md">
                <a href="/dashboardpenjahit"><i class="fas fa-home"></i>
                <br>
                <span>Home</span></a>
            </div>
            <div class="col-md">
                <a href="/uploadproduct"><i class="fas fa-shopping-cart"></i>
                <br>
                <span>Upload Product</span></a>
            </div>
            <div class="col-md">
                <a href="/customerorder"> <i class="fas fa-sharp fa-regular fa-receipt"></i>
                <br>
                <span>Customer Order</span></a>
            </div>
            <div class="col-md">
                <a href="/profilepenjahit">
                <img src="{{ asset('image/account.png') }}" alt="My Account">
                <br>
                <span>My Account</span></a>

            </div>
        </div>
    </div>


    </div>
</body>

</html>
