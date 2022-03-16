<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INSTITUTO UCAP</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
        <div class="container">
            <div class="card login-card" style="width: 1200px;">
                <div class="row no-gutters">
                    <div class="col-md-5">
                        <img src="https://scontent.fgdl5-1.fna.fbcdn.net/v/t1.6435-9/69884349_2225954184180467_2082640804450402304_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=174925&_nc_eui2=AeHYFHFCSdyazpeiXli6AdGrVhg3qDOkw0xWGDeoM6TDTNcXzV52lTrISkUv8aqbYgeuIBQRj2Molkds75s1lYzx&_nc_ohc=iXA4ee3DXj4AX-RkLRd&_nc_ht=scontent.fgdl5-1.fna&oh=00_AT90YIknxZcjEBkoTvy-mcRBr0INXdX4Q60dOv7bMyaXuw&oe=625073A2"
                            alt="login" class="login-card-img">
                    </div>
                    <div style="background-color: white;  flex: 1; ">
                        <div class="card-body">
                            <div class="brand-wrapper" style="margin-left: 20%;">
                                <img src="../assets/images/logo.svg" alt="logo" class="logo">
                                <p class="login-card-description">Ingresa Usuario y Contraseña</p>
                                <form id="formLogin" class="contact-bx" action="" method="post">
                                    <div class="form-group">
                                        <label for="usuario" class="sr-only">Usuario</label>
                                        <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuario">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="password" class="sr-only">Contraseña</label>
                                        <input type="password" name="password" id="password" class="form-control" placeholder="*****">
                                    </div>
                                    <input name="submit"  class="btn btn-block login-btn mb-4" type="button" value="Conectar">
                                    
                                </form>
                                <a href="#!" class="forgot-password-link">Olvidaste tu Contraseña ?</a>
                                <nav class="login-card-footer-nav">
                                    <a href="#!">Terminos de uso.</a>
                                    <a href="#!">Politicas de Privacidad.</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>