<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Makanan Diet</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="{{ url('/') }}/assets-web/img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets-web/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets-web/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets-web/lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="{{ url('/') }}/assets-web/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="{{ url('/') }}/assets-web/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- header Start -->
    @include ('template.web.header')
    <!-- header end -->
    <br>
    <br>
    <!-- Carousel Start -->
    <div class="carousel">
        <div class="container-fluid">
            <div class="owl-carousel">
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="{{ url('/') }}/assets-web/img/carousel-3.jpg" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <div class="button-group mt-4 float-right">
                            <button type="submit" class="btn btn-sm btn-success float-right"><i class="fa fa-left" href="{{url('login')}}"></i> Login</button>
                        </div>
                        <div class="form-body">
                            <div class="row">
                                <div class="form-holder">
                                    <div class="form-content">
                                        <div class="form-items">
                                            <h3>Form</h3>
                                            <form action="{{url('beranda')}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="col-md-12">
                                                    <select class="form-select mt-3" id="positionSelect" name="jenis_kelamin" required>
                                                        <option selected value="">Jenis Kelamin</option>
                                                        <option value="laki-laki">Laki-Laki</option>
                                                        <option value="perempuan">Perempuan</option>
                                                    </select>
                                                    <div class="valid-feedback">You selected a position!</div>
                                                    <div class="invalid-feedback">Please select a position!</div>
                                                </div>
                                                <div class="col-md-12">
                                                    <input class="form-control" type="text" name="berat_badan" placeholder="Berat Badan" required>
                                                    <div class="valid-feedback">Berat Badan field is valid!</div>
                                                    <div class="invalid-feedback">Berat Badan field cannot be blank!</div>
                                                </div>

                                                <div class="col-md-12">
                                                    <input class="form-control" type="text" name="tinggi_badan" placeholder="Tinggi Badan" required>
                                                    <div class="valid-feedback">Tinggi badan field is valid!</div>
                                                    <div class="invalid-feedback">Tinggi badan field cannot be blank!</div>
                                                </div>
                                                <div class="col-md-12">
                                                    <input class="form-control" type="text" name="umur" placeholder="Umur" required>
                                                    <div class="valid-feedback">Umur field is valid!</div>
                                                    <div class="invalid-feedback">Umur field cannot be blank!</div>
                                                </div>
                                                <div class="col-md-12">
                                                    <select class="form-select mt-3" id="positionSelect" name="tingkat_aktivitas" required>
                                                        <option selected value="">Tingkat Aktivitas</option>
                                                        <option value="ringan">Ringan</option>
                                                        <option value="rendah">Rendah</option>
                                                        <option value="aktif">Aktif</option>
                                                        <option value="sangat_aktif">Sangat Aktif</option>
                                                    </select>
                                                    <div class="valid-feedback">You selected a position!</div>
                                                    <div class="invalid-feedback">Please select a position!</div>
                                                </div>
                                                <div class="button-group py-3 px-3 float-right">
                                                    <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-search"></i> Analyze</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('/') }}/assets-web/lib/easing/easing.min.js"></script>
    <script src="{{ url('/') }}/assets-web/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{ url('/') }}/assets-web/lib/tempusdominus/js/moment.min.js"></script>
    <script src="{{ url('/') }}/assets-web/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="{{ url('/') }}/assets-web/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="{{ url('/') }}/assets-web/mail/jqBootstrapValidation.min.js"></script>
    <script src="{{ url('/') }}/assets-web/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="{{ url('/') }}/assets-web/js/main.js"></script>

</body>
<!-- footer Start -->
@include ('template.web.footer')
<!-- footer end -->
<style>
    .form-holder {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        min-height: 100vh;
    }

    .form-holder .form-content {
        position: relative;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 60px;
    }

    .form-content .form-items {
        border: 3px solid #fff;
        padding: 40px;
        display: inline-block;
        width: 100%;
        min-width: 540px;
        border-radius: 10px;
        text-align: left;
        transition: all 0.4s ease;
    }

    .form-content h3 {
        color: #fff;
        text-align: left;
        font-size: 28px;
        font-weight: 600;
        margin-bottom: 5px;
    }

    .form-content h3.form-title {
        margin-bottom: 30px;
    }

    .form-content p {
        color: #fff;
        text-align: left;
        font-size: 17px;
        font-weight: 300;
        line-height: 20px;
        margin-bottom: 30px;
    }

    .form-content label,
    .was-validated .form-check-input:invalid~.form-check-label,
    .was-validated .form-check-input:valid~.form-check-label {
        color: #fff;
    }

    .form-content input[type=text],
    .form-content input[type=password],
    .form-content input[type=email],
    .form-content select {
        width: 100%;
        padding: 9px 20px;
        text-align: left;
        border: 0;
        outline: 0;
        border-radius: 6px;
        background-color: #fff;
        font-size: 15px;
        font-weight: 300;
        color: #8D8D8D;
        transition: all 0.3s ease;
        margin-top: 16px;
    }

    .btn-primary {
        background-color: #6C757D;
        outline: none;
        border: 0px;
        box-shadow: none;
    }

    .btn-primary:hover,
    .btn-primary:focus,
    .btn-primary:active {
        background-color: #495056;
        outline: none !important;
        border: none !important;
        box-shadow: none;
    }

    .form-content textarea {
        position: static !important;
        width: 100%;
        padding: 8px 20px;
        border-radius: 6px;
        text-align: left;
        background-color: #fff;
        border: 0;
        font-size: 15px;
        font-weight: 300;
        color: #8D8D8D;
        outline: none;
        resize: none;
        height: 120px;
        margin-bottom: 14px;
    }

    .form-content textarea:hover,
    .form-content textarea:focus {
        border: 0;
        background-color: #ebeff8;
        color: #8D8D8D;
    }

    .mv-up {
        margin-top: -9px !important;
        margin-bottom: 8px !important;
    }

    .invalid-feedback {
        color: #ff606e;
    }

    .valid-feedback {
        color: #2acc80;
    }
</style>

</html>