<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Sistema - Thakhi Pedidos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A premium admin dashboard template by Mannatthemes" name="description" />
    <meta content="Mannatthemes" name="author" />

    <!-- starability calificacion de estrellas -->
    <link rel="stylesheet" type="text/css" href="public/starability/starability-minified/starability-all.min.css" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="public/images/favicon-thakhi.png">
    <link href="public/plugins/dropify/css/dropify.min.css" rel="stylesheet">

    <!-- App css -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="public/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="public/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
    <link href="public/css/style.css" rel="stylesheet" type="text/css" />

    <!-- DataTables -->
    <link href="public/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="public/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="public/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!--Sweetalert2 para alertas-->
    <link rel="stylesheet" href="public/alertifyjs/css/alertify.min.css" />
    <link rel="stylesheet" href="public/alertifyjs/css/themes/default.min.css" />
    <script src="public/alertifyjs/alertify.min.js"></script>

    <!--Sweetalert2 para alertas-->
    <script src="public/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="public/sweetalert2/dist/sweetalert2.min.js"></script>
    <link href="public/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet" type="text/css" />

    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>

</head>

<body>

    <div class="topbar">
        <!-- LOGO -->
        <div class="topbar-left">
            <a href="index.php" class="logo">
                <span>
                    <img src="public/images/logo-thakhi-sm.png" alt="logo-small" class="logo-sm">
                </span>
                <span>
                    <img src="public/images/logo-letra.png" alt="logo-large" class="logo-lg">
                </span>
            </a>
        </div>
        <!--end logo-->
        <!-- Navbar -->
        <nav class="navbar-custom">
            <ul class="list-unstyled topbar-nav float-right mb-0">
                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown"
                        href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="dripicons-bell noti-icon"></i>
                        <span class="badge badge-danger badge-pill noti-icon-badge">2</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-lg">
                        <!-- item-->
                        <h6 class="dropdown-item-text">
                            Notificaciones (18)
                        </h6>
                        <div class="slimscroll notification-list">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                <p class="notify-details">La orden Nº 0023 fue entregado con éxito.<small
                                        class="text-muted">Dummy text of the printing and typesetting industry.</small>
                                </p>
                            </a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                                <p class="notify-details">Nuevo mensaje recibido<small class="text-muted">You have 87
                                        unread messages</small></p>
                            </a>
                        </div>
                        <!-- All-->
                        <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                            Ver todo <i class="fi-arrow-right"></i>
                        </a>
                    </div>
                </li>

                <li class="dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown"
                        href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="public/images/users/user-1.jpg" alt="profile-user" class="rounded-circle" />
                        <span class="ml-1 nav-user-name hidden-sm">Usuario <i class="mdi mdi-chevron-down"></i> </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i class="dripicons-user text-muted mr-2"></i> Perfil</a>
                        <a class="dropdown-item" href="#"><i class="dripicons-gear text-muted mr-2"></i>
                            Configuraciones</a>
                        <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted mr-2"></i> Bloquear
                            pantalla</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../../Models/admUSUtUsuario/CerrarSesion.php"><i
                                class="dripicons-exit text-muted mr-2"></i> Cerrar sesión</a>
                    </div>
                </li>
            </ul>
            <!--end topbar-nav-->

            <ul class="list-unstyled topbar-nav mb-0">
                <li>
                    <button class="button-menu-mobile nav-link waves-effect waves-light">
                        <i class="dripicons-menu nav-icon"></i>
                    </button>
                </li>

            </ul>
        </nav>
        <!-- end navbar-->
    </div>