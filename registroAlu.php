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

            <section class="section dashboard">

            <div class="pagetitle">
                <h1 style="color: #7B241C ;">REGISTRO DE ALUMNOS </h1>
            </div>
            <br>
            <!-- End Page Title -->

                <form id="form">

                <div class="card">
                    <h5 class="card-header" style="background-color: #F1C40F; color: #7B241C; font-weight: bold;">DATOS PERSONALES</h5>
                </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="nombres" class="form-label">Nombre(s)</label>
                            <input type="text" class="form-control" id="nombres" onKeyUp="this.value = this.value.toUpperCase();" placeholder="Nombre(s)">
                        </div>
                        <div class="col-md-6">
                            <label for="apellidos" class="form-label">Apellido(s)</label>
                            <input type="text" class="form-control" id="apellidos" onKeyUp="this.value = this.value.toUpperCase();" placeholder="Apellido(s)">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                        <label for="curp" class="form-label">CURP</label>
                        <input type="text" class="form-control" id="curp" placeholder="CURP"onKeyUp="this.value = this.value.toUpperCase();">
                        </div>
                        <div class="col-md-6">
                        <label for="Genero" class="form-label">Género:</label>
                        <select class="form-select" id="genero">
                        <option value="">Seleccione un Género</option>
                        <option value="Hombre">Hombre</option>
                        <option value="Mujer">Mujer</option>
                        </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                        <label for="fecha" class="form-label">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" id="fecha">
                        </div>
                        <div class="col-md-6">
                        <label for="edad" class="form-label">Edad</label>
                        <input type="text" class="form-control" id="edad" placeholder="18" onKeyUp="this.value = this.value.toUpperCase();">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                        <label for="cp" class="form-label">CP</label>
                        <input type="text" class="form-control" id="cp" onblur="upperCase()">
                        </div>
                        <div class="col-md-6">
                        <label for="estado" class="form-label">Estado</label>
                        <input type="text" class="form-control" id="estado" onKeyUp="this.value = this.value.toUpperCase();">
                        </div>
                    </div>

                        <div class="col-12">
                        <label for="inputAddress" class="form-label">Dirección</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="Av. Grajea #12" onKeyUp="this.value = this.value.toUpperCase();">
                        </div>
                        <br>
                        
                    <div class="row mb-3">
                        <div class="col-md-6">
                        <label for="inputCity" class="form-label">Municipio</label>
                            <input type="text" class="form-control" id="inputCity" onKeyUp="this.value = this.value.toUpperCase();">
                        </div>
                        <div class="col-md-6">
                        <label for="nacion" class="form-label">Nacionalidad</label>
                        <input type="text" class="form-control" id="nacion" onKeyUp="this.value = this.value.toUpperCase();">
                        </div>
                    </div>
    
                    <div class="row mb-3">
                        <div class="col-md-6">
                        <label for="fijo" class="form-label">Teléfono Fijo</label>
                        <input type="text" class="form-control" id="fijo">
                        </div>
                        <div class="col-md-6">
                        <label for="cel" class="form-label">Celular</label>
                        <input type="text" class="form-control" id="cel" >
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-6">
                        <label for="face" class="form-label">Facebook</label>
                        <input type="text" class="form-control" id="face" >
                    </div>

            
                    <br><br> <br><br> <br>
                        <button type="submit" class="btn btn-primary mb-4">REGISTRAR</button>
                    </form>

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