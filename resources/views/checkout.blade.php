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
            max-width: 100%;


            margin: auto;
            padding: 20px;
            margin-bottom: 0px;


        }

        .pay-container {
            max-width: 100%;
            margin-top: auto;
            padding: 20px;

        }





        .order-item {
            margin-bottom: 10px;
            padding: 20px;
            border: 2px solid #ddd;
            border-radius: 5px;
            position: relative;
            height: 135px;
        }

        .order-item h6 {
            margin-top: -15px;
        }

        .order-item .fa-x {
            float: right;
            margin-top: -20px;
        }


        .order-item .order-produk {
            font-size: 35px;
            font-weight: semi-bold;
            margin-bottom: -10px;
        }

        .order-item img {
            max-width: 100%;
            max-height: 200px;
            object-fit: contain;
            height: 80px;

        }


        .order-item .order-status {
            font-size: 15px;
            font-weight: normal;
            margin-bottom: 15px;
            font-style: normal;
            margin-top: 5px;

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

        .jumbotron i {
            float: left;
            height: 80px;
            padding: 20px;

        }

        .order-harga {

            font-size: 15px;
            font-weight: normal;
            margin-bottom: 2px;
            color: white;
        }





        . #confirm-button {
            position: absolute;
            bottom: 0;
            right: 0;



        }

        #confirm-button button {
            font-size: 15px;
            padding: 2px 25px 2px 25px;
        }

        .card img {
            height: 25px;
            width: auto;
            float: left;
            margin-left: 10px;
            margin-right: auto;
        }



        .card .custom-control {
            float: right;
            margin-top: -30px;
            margin-right: -10px;
        }

        .card-body {
            margin-left: -40px;


        }

        .card {
            height: 70px;
        }

        .card .tombol {
            float: right;
            margin-top: -37px;
        }

        .card .qris img {
            margin-right: 20px;
            margin-left: 20px;
        }

        .order-item span {
            float: right;
        }

        .transfer {
            height: 120%;
            width: auto;
        }

        #barcode {
            margin-left: 38%;
            height: 80%;

        }

        #itemtransfer {
            height: 10%;
        }

        #image {
            height: 100%
        }
        #name {
            margin-top: 2%
        }
    </style>
</head>

<body>
    <header>

        <div class="jumbotron">
            <a href="/cart"><i class="fa-solid fa-arrow-left fa-2xl"></i></a>
            <h3>Payment</h3>

        </div>




    </header>
    <!-- bagian judul halaman blog -->


    <!-- bagian konten blog -->


    @foreach ($cart as $c)
    <form action="/checkout/proses" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="order-container">

            <div class="order-item">
                <h6><i class="fa-solid fa-receipt"></i> Purchased Items</h6>
                <i class="fa-solid fa-x"></i>

                    <div class="row">
                        <div class="media p-3">
                            <img id="order" src="{{ url('/data_file/' . $c->file) }}" class="rounded"
                                class="img-fluid" style="float:left">
                            <div class="media-body" style="margin-left: 10%">
                                <input type="text" name="idBaju" value="{{ $c->idBaju }}" hidden>
                                <h4>{{ $c->namaBaju }}</h4>
                                <h6>Rp.{{ $c->hargaBaju }}</h6>
                                <input type="text" name="totalHarga" value="{{ $c->hargaBaju }}" hidden>
                            </div>
                        </div>
                    </div>

            </div>

            <div class="order-item">
                <h6><i class="fa-sharp fa-solid fa-truck"></i> Shipping Address</h6>
                <textarea class="form-control" rows="3" name="alamatPengiriman" id="comment">Shipping Address</textarea>
            </div>
            <div class="order-item">
                <h6></i> Reference</h6>
                <input id="name" type="file" name="file" required>
            </div>


            <div class="order-item">

                <h6><i class="fa-regular fa-credit-card"></i> Payment Method</h6>
                <div class="row">
                    <div class="col-lg">
                        <div class="row">
                            <div class="col-lg">
                                <div class="card bg-light">
                                    <div class="card-body text-center">

                                        <div class="form-check">

                                            <img src="{{ asset('image/cod.png') }}" alt="cod">
                                            <p class="card-text"> Cash On Delivery(COD) </p>
                                            <div class="tombol">
                                                <input class="form-check-input" type="radio" name="idPayment"
                                                    id="codRadio" value="1" required>
                                                <label class="form-check-label" for="codRadio">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="card bg-light">
                                    <div class="card-body text-center">
                                        <div class="form-check">
                                            <div class="qris">
                                                <img id="dana" src="{{ asset('image/dana.png') }}" alt="dana">
                                                <img id="shopee"src="{{ asset('image/shoppepay.png') }}"
                                                    alt="shoppepay">
                                                <img id="gopay" src="{{ asset('image/gopay.png') }}" alt="gopay">
                                            </div>
                                            <input class="form-check-input" type="radio" name="idPayment"
                                                id="codRadio" value="2" required>
                                            <label class="form-check-label" for="codRadio">
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg"></div>
                </div>
            </div>


            <div class="order-item" id="itemtransfer" style="height:30%;">
                <h6><i class="fa-regular fa-credit-card"></i> Payment Method Via Tranfer</h6>
                <div class="row">
                    <div class="col-lg">
                        <div id="image" class="card bg-light" style="width:50%;margin-left:25%;">
                            <div class=" ">
                                <div class="form-check">
                                    <div class="transfer">
                                        <img id="dana" src="{{ asset('image/dana.png') }}" alt="dana">
                                        <img id="shopee" src="{{ asset('image/shoppepay.png') }}" alt="shoppepay">
                                        <img id="gopay" src="{{ asset('image/gopay.png') }}" alt="gopay">
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <img id="barcode" src="{{ asset('image/barcode.png') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="order-item">
                <h6>Payment Details</h6>
                <p>Produk <span></span></p>
                <p>Total Price <span>Rp.{{ $c->hargaBaju }}</span></p>
            </div>

            <input type="text" name="idUkuran" value="{{ $c->ukuran }}" id="ukuran" hidden required>
            <input type="text" name="message" value="{{ $c->message }}" hidden>
            <input type="text" name="idPenjahit" value="{{ $c->idPenjahit }}" hidden>

        </div>





        </div>

        <div class="pay-container">
            <div id="confirm-button">
                <button type="submit" value="upload" class="btn btn-danger btn-lg" style="float:right"><i
                        class="fa-sharp fa-regular fa-circle-check"> Beli {{ $c->namaBaju }}</i>
                    </button>
            </div>

        </div>



        <!-- bagian footer -->

        </div>
    </form>
    @endforeach
</body>

</html>
