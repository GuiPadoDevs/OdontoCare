<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>OdontoCare - Clinica Dentária</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="OdontoCare" name="keywords">
    <meta content="OdontoCare" name="description">

    <!-- Favicon -->
    <link href="Odontocare/assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="Odontocare/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="Odontocare/assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="Odontocare/assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="Odontocare/assets/lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="Odontocare/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="Odontocare/assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-secondary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light ps-5 pe-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <small class="py-2"><i class="far fa-clock text-primary me-2"></i>Funcionamento: Seg - Sex : 08:00 - 17:00</small>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-end">
                <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-5">
                    <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0"><i class="fa fa-envelope-open me-2"></i>odontocare@odontocare.com</p>
                    </div>
                    <div class="py-2">
                        <p class="m-0"><i class="fa fa-phone-alt me-2"></i>(14) 99999-9999</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="/" class="navbar-brand p-0">
            <h1 class="m-0 text-primary"><i class="fa fa-tooth me-2"></i>OdontoCare</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="/" class=" navegacao nav-item nav-link active">Início</a>
                <a href="/sobre" class="navegacao nav-item nav-link">Sobre</a>
                <a href="/servicos" class="navegacao nav-item nav-link">Serviços</a>
                <a href="/contato" class="navegacao nav-item nav-link">Contato</a>
                <a href="/feedback" class=" navegacao nav-item nav-link">Feedback</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
    <div id="main">
    @yield('content')
    </div>

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light py-5 wow fadeInUp" data-wow-delay="0.3s" style="margin-top: -75px;">
        <div class="container pt-5">
            <div class="row g-5 pt-4">
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Links Rápidos</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="/"><i class="bi bi-arrow-right text-primary me-2"></i>Início</a>
                        <a class="text-light mb-2" href="/sobre"><i class="bi bi-arrow-right text-primary me-2"></i>Sobre Nós</a>
                        <a class="text-light mb-2" href="/servicos"><i class="bi bi-arrow-right text-primary me-2"></i>Serviços</a>
                        <a class="text-light mb-2" href="/contato"><i class="bi bi-arrow-right text-primary me-2"></i>Contato</a>
                        <a class="text-light mb-2" href="/feedback"><i class="bi bi-arrow-right text-primary me-2"></i>Feedback</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Links Populares</h3>
                    <div class="d-flex flex-column justify-content-start">
                    <a class="text-light mb-2" href="/"><i class="bi bi-arrow-right text-primary me-2"></i>Início</a>
                        <a class="text-light mb-2" href="/sobre"><i class="bi bi-arrow-right text-primary me-2"></i>Sobre Nós</a>
                        <a class="text-light mb-2" href="/servicos"><i class="bi bi-arrow-right text-primary me-2"></i>Serviços</a>
                        <a class="text-light mb-2" href="/contato"><i class="bi bi-arrow-right text-primary me-2"></i>Contato</a>
                        <a class="text-light mb-2" href="/feedback"><i class="bi bi-arrow-right text-primary me-2"></i>Feedback</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Endereço</h3>
                    <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>Rua Bernardino de Campos, 377 - Vila Falcao, Bauru - SP, 17050-040 </p>
                    <p class="mb-2 email"><i class="bi bi-envelope-open text-primary me-2"></i>odontocare@odontocare.com</p>
                    <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>(14) 99999-9999</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Siga nos</h3>
                    <div class="d-flex">
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-light py-4" style="background: #051225;">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-white">OdontoCare</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Designed by <a class="text-white border-bottom" href="#">Pedro Agostini</a> & <a class="text-white border-bottom" href="#">Guilherme Padovine</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="Odontocare/assets/lib/wow/wow.min.js"></script>
    <script src="Odontocare/assets/lib/easing/easing.min.js"></script>
    <script src="Odontocare/assets/lib/waypoints/waypoints.min.js"></script>
    <script src="Odontocare/assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="Odontocare/assets/lib/tempusdominus/js/moment.min.js"></script>
    <script src="Odontocare/assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="Odontocare/assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="Odontocare/assets/lib/twentytwenty/jquery.event.move.js"></script>
    <script src="Odontocare/assets/lib/twentytwenty/jquery.twentytwenty.js"></script>

    <!-- Template Javascript -->
    <script src="Odontocare/assets/js/main.js"></script>
    <script>
    $(document).ready(function(){
      var url = window.location.pathname

      var links = $('.navegacao')

      links.map(function(){
        var item = $(this).attr('href')
        $(this).removeClass('active')
        if(url == item)
          $(this).addClass('active')
      })
    })
  </script>
</body>

</html>
