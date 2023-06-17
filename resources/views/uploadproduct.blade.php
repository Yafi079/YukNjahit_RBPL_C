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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
            max-height: 45%;
            margin-top: -15px;
            padding: 10px;
        }

        .container .text-center {
            margin: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            text-align: left;

            /* Mengatur tinggi div agar gambar berada di tengah vertikal */
        }

        .text-center img {
            margin-top: -25px;
            height: 250px;
        }



        .order-item {
            width: 100%;
            height: 30%;
            padding: 20px;
            border: 2px solid #ddd;
            border-radius: 5px;
        }




        .detail-container {
            text-align: left;
        }



        .footer {
            padding-top: 12px;
            padding-bottom: 12px;
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
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }} <br />
            @endforeach
        </div>
    @endif
    <header>

        <div class="jumbotron">

            <h3>Add Product</h3>
            <h6>


            </h6>
        </div>



    </header>
    <!-- bagian judul halaman blog -->


    <!-- bagian konten blog -->

    <form action="/upload/proses" method="POST" enctype="multipart/form-data">
        <div class="order-container">
            <div class="order-item" style="height:10%;width:40%;margin:0% 30% 0.5% 30%">
                <div class="container">
                    {{ csrf_field() }}
                    <div class="text-center">
                        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#myModal">
                            <input type="file" name="file">
                        </button>
                        <span style="margin-lefft:2%;margin-top:20px"><i class="fa-solid fa-upload "></i></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="order-container">
            <div class="order-item" style="height:80%;width:80%;margin:3% 10% 5% 10%">
                <div class="row">
                    <div class="col">

                            <div class="form-group row">
                                <label for="name" class="col-md-2 col-form-label" style="white-space: nowrap;">Name
                                    of
                                    Product</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="namaBaju"
                                        placeholder="Name" style="width:90%;margin-left:10%">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-2 col-form-label"
                                    style="white-space: nowrap;">Description</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" rows="5" name="deskripsiBaju" style="width:90%;margin-left:10%"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-2 col-form-label"
                                    style="white-space: nowrap;">Consumer</label>

                                <div class="col-md-10">
                                    <input type="radio" id="html" name="idGender" value="1" style="margin-left:10%;margin-top:3%">
                                    <label for="html">Pria</label>
                                    <input type="radio" id="css" name="idGender" value="2" >
                                    <label for="css">Wanita</label><br>
                                </div>
                            </div>
                            @foreach ($pembeli as $p)
                            <div class="form-group row">
                                <label for="name" class="col-md-2 col-form-label"
                                    style="white-space: nowrap;">Tailor Location</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" placeholder="{{ $p->alamat }}"
                                        style="width:90%;margin-left:10%" disabled>
                                </div>
                            </div>

                    </div>
                    <div class="col">

                            <div class="form-group row">
                                <label for="name" class="col-md-2 col-form-label"
                                    style="white-space: nowrap;">Tailor Shop</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="name"
                                        placeholder="{{ $p->name }}" disabled>
                                </div>
                            </div>
                            @endforeach
                            <div class="form-group row">
                                <label for="name" class="col-md-2 col-form-label"
                                    style="white-space: nowrap;">Fabric</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" class="form-control" name="kainBaju"
                                        placeholder="Katun">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-2 col-form-label"
                                    style="white-space: nowrap;">Color</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="warnaBaju"
                                        placeholder="color">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-2 col-form-label"
                                    style="white-space: nowrap;">Price</label>
                                <div class="col-md-10">
                                    <input type="number" class="form-control" name="hargaBaju"
                                        placeholder="harga">
                                </div>
                            </div>
                            @foreach ($pembeli as $p)
                            <div class="form-group row" hidden>
                                <label for="name" class="col-md-2 col-form-label"
                                    style="white-space: nowrap;">idUser</label>
                                <div class="col-md-10">
                                    <input type="text" name="idUser" class="form-control" placeholder="{{ $p->id }}"
                                        style="width:90%;margin-left:10%" value="{{ $p->id }}">
                                </div>
                            </div>
                            @endforeach

                        <br>
                        <br>
                        <br>
                        <div id="confirm-button">
                            <button type="submit" value="Upload" class="btn btn-danger btn-lg" style="float:right">
                                <i class="fa-regular fa-pen-to-square"></i> Confirm</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- bagian footer -->


    <div class="footer">



        <div class="row">
            <div class="col-md">
                <a href="/dashboardpenjahit"><i class="fas fa-home"></i>
                <br>
                <span>Home</span></a>
            </div>
            <div class="col-md">
                <i class="fas fa-shopping-cart"></i>
                <br>
                <span>Upload Product</span>
            </div>
            <div class="col-md">
                <a href="customerorder"> <i class="fas fa-sharp fa-regular fa-receipt"></i>
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
