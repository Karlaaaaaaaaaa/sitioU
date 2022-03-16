<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>INSTITUTO UCAP</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

     <!-- Header Top ==== -->
     <?php
     include ('templates/header.html');
     ?>
     <!-- Header Top END ==== -->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1 style="color: #7B241C ;">Inicio</h1>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">

            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Bienvenido a la página Adminitrativa UCAP</h5>
                    <p class="card-text">En el Insituto UCAP fomentamos tu porvenir!!!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <center>
                            <h5 class="card-title" style="color:#7B241C;">Alumnos</h5>
                            <p class="card-text">Registrar nuevos alumnos a la base de datos</p>
                            <a href="registroAlu.php" class="btn btn-primary" style="background-color:#D4AC0D; border-color: #D4AC0D;">REGISTRAR ALUMNO</a>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <center>
                            <h5 class="card-title" style="color:#7B241C;">Formatos</h5>
                            <p class="card-text">Generar formato (cardex, carta pasante etc.) del alumno. </p>
                            <a href="#" class="btn btn-primary" style="background-color:#D4AC0D; border-color: #D4AC0D;">GENERAR FORMATO</a>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <!-- End #main -->

   <!-- Footer Top ==== -->
   <?php
        include ('templates/footer.html');
     ?>
    <!-- Footer END ==== -->


</body>

</html>