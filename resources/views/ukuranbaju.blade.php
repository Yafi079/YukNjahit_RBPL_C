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
        body {
            background-color: #FFAAAA;
            overflow: hidden;
        }

        .circle {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background-color: red;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 20px;
        }

        .letter {
            font-size: 20px;
            color: white;
            padding: 15px;
            font-weight: bold;
        }

        .container-badge {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 90px;
            margin-left: -170px;
        }

        .badge-item {
            display: flex;
            align-items: center;
            margin-bottom: 40px;
        }

        .badge-item .badge {
            padding-left: 50px;
            padding-right: 50px;
            font-size: 40px;
            font-weight: normal;
        }







        .order-container img {
            margin-top: 70px;
            margin-left: 220px;
            width: 400px;
            heigh t: 400px;
        }

        .jumbotron {
            padding: 2px;
            background-color: #E01515;
            font-size: 5px;
            color: white;
            text-align: center;


        }

        .jumbotron h3 {
            padding: 10px;
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





        #checkout-button {
            position: relative;
            bottom: 10%;
            margin-left: 50%;
            transform: translate(-50%, 50%);
        }

        #checkout-button button {
            font-size: 24px;
            padding: 8px 8px;
            padding-right: 120px;
            padding-left: 120px;
        }
    </style>

</head>

<body>
    <header>
        @foreach ($gambar as $g)
            <div class="jumbotron">
                <a href="/viewbaju/{{ $g->idBaju }}"> <i class="fa-solid fa-arrow-left fa-2xl"
                        style="float:left;height:80px;padding:20px"></i></a>
                <h3>Measurement</h3>
            </div>
        @endforeach

    </header>
    <!-- bagian judul halaman blog -->


    <!-- bagian konten blog -->

    <form action="/ukuran/proses" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="order-container">
            <div class="row">
                <div class="col-xl">
                    <img src="{{ asset('image/measurement.png') }}" alt="measurement">
                </div>
                <div class="col-xl">
                    <div class="container-badge">
                        <div class="badge-item">
                            <div class="circle">
                                <span class="letter">A</span>
                            </div>
                            <span><input type="text" class="form-control" name="A" placeholder="60 cm"
                                    style="height: 50px"></span>
                        </div>
                        <div class="badge-item">
                            <div class="circle">
                                <span class="letter">B</span>
                            </div>
                            <span><input type="text" class="form-control" name="B" placeholder="77 cm"
                                    style="height: 50px"></span>
                        </div>
                        <div class="badge-item">
                            <div class="circle">
                                <span class="letter">C</span>
                            </div>
                            <span><input type="text" class="form-control" name="C" placeholder="20 cm"
                                    style="height: 50px"></span>
                        </div>
                        <div class="badge-item">
                            <div class="circle">
                                <span class="letter">D</span>
                            </div>
                            <span><input type="text" class="form-control" name="D" placeholder="20 cm"
                                    style="height: 50px"></span>
                        </div>
                        <input type="text" value="{{ $g->idBaju }}" name="idBaju" hidden>

                    </div>
                </div>
            </div>
            <div id="checkout-button" class="text-center">
                <button type="submit" value="upload" class="btn btn-danger" >Confirm</button>
            </div>
        </div>
    </form>
    <!-- bagian footer -->

</body>


</html>
