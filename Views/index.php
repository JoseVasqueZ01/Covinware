<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciar Sesión</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url; ?>Assets/css/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url; ?>Assets/css/adminlte.min.css">
    <link rel="shortcut icon" href="<?php echo base_url; ?>Assets/img/zorro.png" type="image/x-icon">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <img class="img-thumbnail" src="<?php echo base_url; ?>Assets/img/logo.jpg" width="150">
                <a href="#" class="h1"><b>CovinWare</b></a>
                <p>Sistema de Control de Ventas e Inventario</p>
            </div>
            <div class="card-body">
                <form id="frmLogin" onsubmit="frmLogin(event)">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Usuario" name="usuario" id="usuario">
                        <div class=" input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        <div class="invalid-feedback">
                            El usuario es requerido, sin espacios.
                        </div>
                        <div class="valid-feedback">
                            Todo Correcto.
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Contraseña" name="clave" id="clave">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        <div class="invalid-feedback">
                            El contraseña es requerido, mínimo 5 caracter.
                        </div>
                        <div class="valid-feedback">
                            Todo Correcto.
                        </div>
                    </div>
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="recordar">
                        <label class="form-check-label" for="recordar">Recuérdame</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" id="btnAccion">Ingresar al Sistema</button>
                </form>
                <div class="mt-3 text-center">
                    <a href="#">¿Olvidaste tu contraseña?</a>
                    <br>
                    <a href="#">Ponte en contacto</a>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?php echo base_url; ?>Assets/js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url; ?>Assets/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url; ?>Assets/js/adminlte.min.js"></script>
    <script src="<?php echo base_url; ?>Assets/js/sweetalert2.all.min.js"></script>
    <script src="<?php echo base_url; ?>Assets/js/all.min.js"></script>
    <script>
        const base_url = '<?php echo base_url; ?>';
    </script>
    <script src="<?php echo base_url; ?>Assets/js/login.js"></script>
</body>

</html>
