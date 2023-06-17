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

        .order-item .order-id {
            font-size: 25px;
            font-weight: semi-bold;
            margin-bottom: 5px;
        }

        .order-container .order-harga {
            font-size: 15px;
            font-weight: bold;
            margin-bottom: 2px;
            color: red;
        }

        .detail-container {
            text-align: left;
        }

        .badge-container h6 {
            font-style: bold;
            font-size: 18px;
        }

        .badge-container span {
            font-style: semi-bold;
            font-size: 15px;

            padding: 8px;
            width: 15%;

        }








        #checkout-button {
            position: fixed;
            bottom: 27px;
            left: 50%;
            transform: translate(-50%, 50%);
        }

        #checkout-button button {
            font-size: 15px;
            padding: 1px 1px;
            padding-right: 120px;
            padding-left: 120px;
        }


        .footer {
            padding-top: 12px;
            padding-bottom: 12px;
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 7%;
            background-color: #f2ebeb;
            text-align: center;

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
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }} <br />
            @endforeach
        </div>
    @endif
    <header>

        <div class="jumbotron">
            <a href="/dashboardpenjahit"> <i class="fa-solid fa-arrow-left fa-2xl"
                    style="float:left;height:80px;padding:20px"></i></a>
            <h3>Yuk Njahit Store</h3>
            <h6>
            </h6>
        </div>



    </header>
    <!-- bagian judul halaman blog -->


    <!-- bagian konten blog -->
    <form action="/cart/proses" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        @foreach ($gambar as $g)
            <div class="order-container" style="height:35%;margin-top:-2%">
                <div class="order-item">
                    <div class="container">
                        <div class="text-center">
                            <img src="{{ url('/data_file/' . $g->file) }}" class="rounded" class="img-fluid"
                                style="float:left">
                        </div>
                    </div>
                </div>
            </div>

            <div class="order-container" style="height:65%;margin-botttom:4%">
                <div class="order-item">
                    <div class="detail-container">
                        <div class="order-id">{{ $g->namaBaju }}
                        </div>
                        <div class="order-harga">Rp.{{ $g->hargaBaju }}</div>
                        <br>
                        <h6>Description : {{ $g->deskripsiBaju }} </h6>

                        <div class="badge-container">
                            <h6>Tailor Location <span style="margin-left:1%"> : </span><span
                                    class="badge badge-secondary">{{ $g->alamat}}</span>
                            </h6>
                            <h6>Tailor Shop <span style="margin-left:2.9%"> : </span><span
                                    class="badge badge-secondary">{{ $g->name }}</span></h6>
                            <h6>Fabric <span style="margin-left:5.8%"> : </span> <span
                                    class="badge badge-secondary">{{ $g->kainBaju }}</span>
                            </h6>
                            <h6>Color <span style="margin-left:6%"> : </span><span
                                    class="badge badge-secondary">{{ $g->warnaBaju }}</span>
                            </h6>
                            <div class="form-group row">
                                <textarea class="form-control" rows="3" name="message" style="width:50%"
                                    placeholder="leave message and request in detail" disabled>
                                </textarea>
                            </div>
                            <br>

                            <a href="/ukuranbaju/{{ $g->idBaju }}"><button type="button" class="btn btn-primary"
                                    style="margin-top:1%;padding: 0.5% 6.5% 0.5% 6.5%;" disabled>Detail
                                    Ukuran</button></a>
                            <br>
                            <input type="text" name="idBaju" value="{{ $g->idBaju }}" hidden>
                            <input type="text" name="idUser" value="{{ $g->idUser }}" hidden>
                            <br>
                            <a class="btn btn-danger" href="/upload/hapus/{{ $g->idBaju }}">HAPUS</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach


        <!-- bagian footer -->




        </div>
    </form>
</body>

</html>
