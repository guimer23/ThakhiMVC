<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Sistema - Thakhi Pedidos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A premium admin dashboard template by Mannatthemes" name="description" />
    <meta content="Mannatthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="public/images/favicon-thakhi.png">

    <!-- App css -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="public/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="public/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
    <link href="public/css/style.css" rel="stylesheet" type="text/css" />

</head>

<body style="background:#32508C" class="account-body">

    <!-- Log In page -->
    <div class="row vh-100">
        <div class="col-12 align-self-center">
            <div class="auth-page">
                <div class="card auth-card shadow">
                    <div class="card-body">
                        <div class="px-3">
                            <div class="auth-logo-box">
                                <a href="#" class="logo logo-admin"><img src="public/images/thakhi.png" height="100"
                                        alt="logo" class="auth-logo"></a>
                            </div>
                            <!--end auth-logo-box-->
                            <br>
                            <div class="text-center auth-logo-text">
                                <h4 class="mt-0 mb-3 mt-5">Inicio de Sesión</h4>
                                <p class="text-muted mb-0">Sistema - Thakhi Delivery.</p>
                            </div>
                            <!--end auth-logo-text-->
                            <form action="?c=login&a=logear" method="post" id="formulariologin"
                                class="form-horizontal auth-form my-4">
                                <div class="form-group">
                                    <label for="username">Usuario</label>
                                    <div class="input-group mb-3">
                                        <span class="auth-form-icon">
                                            <i class="dripicons-user"></i>
                                        </span>
                                        <input type="text" id="USUemail" name="USUemail" class="form-control input-sm">
                                    </div>
                                </div>
                                <!--end form-group-->

                                <div class="form-group">
                                    <label for="userpassword">Clave</label>
                                    <div class="input-group mb-3">
                                        <span class="auth-form-icon">
                                            <i class="dripicons-lock"></i>
                                        </span>
                                        <input type="password" name="userpassword" id="userpassword"
                                            class="form-control input-sm">
                                    </div>
                                </div>
                                <!--end form-group-->
                                <div class="form-group mb-0 row">
                                    <div class="col-12 mt-2">
                                        <button type="submit" id="entrarsistema"
                                            class="btn btn-dark btn-round btn-block waves-effect waves-light">Ingresar
                                            <i class="fas fa-sign-in-alt ml-1"></i></button>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end form-group-->
                            </form>
                            <!--end form-->
                        </div>
                        <!--end /div-->
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
            <!--end auth-page-->
        </div>
        <!--end col-->
    </div>
    <!--end row-->
    <!-- End Log In page -->


    <!-- jQuery  -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="public/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="public/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
    <link href="public/css/style.css" rel="stylesheet" type="text/css" />

    <!-- App js -->
    <script src="Assets/js/app.js"></script>

</body>
</html>