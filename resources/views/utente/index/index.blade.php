
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Simposio - @yield('title')</title>
    <link href="/images/Logo Simposio.png" rel="icon">
    <link href="/images/Logo Simposio.png" rel="apple-touch-icon">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Codedthemes" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="/dashboard/assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="/dashboard/assets/css/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="/dashboard/assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="/dashboard/assets/icon/themify-icons/themify-icons.css">
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="/dashboard/assets/css/font-awesome-n.min.css">
    <link rel="stylesheet" type="text/css" href="/dashboard/assets/css/font-awesome.min.css">
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="/dashboard/assets/css/jquery.mCustomScrollbar.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="/dashboard/assets/css/style.css">
</head>
<script>
    function exportTasks(_this) {
       let _url = $(_this).data('href');
       window.location.href = _url;
    }
 </script>
<body>

<div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-body start -->
            <div class="page-body">

                <div class="col-xl-12 col-md-12">
                    <div class="card table-card">
                        <div class="card-header">
                            <h5>Dados do Usuário Com nome de: {{ $utentes->nome }} </h5>
                            <div class="card-header-right">
                                <ul class="list-unstyled card-option">
                                    <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                    <li><i class="fa fa-window-maximize full-card"></i></li>
                                    <li><i class="fa fa-minus minimize-card"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-block">
                            <div class="table-responsive">
                                <table class="table table-hover m-b-0 without-header">
                                    <tbody>

                                        <tr>
                                            <td>
                                                <div class="d-inline-block align-middle">
                                                    <h6>Email</h6>
                                                        <p class="text-muted m-b-0">{{ $utentes->email }}</p>

                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <h6>Telefone</h6>
                                                <p class="text-muted m-b-0">{{ $utentes->telefone }}</p>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-inline-block align-middle">

                                                    <div class="d-inline-block">
                                                        <h6>País</h6>
                                                        <p class="text-muted m-b-0">{{ $utentes->pais }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <h6>Província</h6>
                                                <p class="text-muted m-b-0">{{ $utentes->provincia }}</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-inline-block align-middle">

                                                    <div class="d-inline-block">
                                                        <h6>Município</h6>
                                                        <p class="text-muted m-b-0">{{ $utentes->municipio }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <h6>Instituição a que pertence</h6>
                                                <p class="text-muted m-b-0">{{ $utentes->Instituicao }}</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-inline-block align-middle">

                                                    <div class="d-inline-block">
                                                        <h6>Como pretende Participar da actividade ?</h6>
                                                        <p class="text-muted m-b-0">{{ $utentes->tipoParticpacao }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <h6>Por que via ficou a saber dos exames nacionais ?</h6>
                                                        <p class="text-muted m-b-0">{{ $utentes->InfoExame }}</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-inline-block align-middle">
                                                    <div class="d-inline-block">
                                                        <h6>Participou dos exames nacionais no ano lectivo 2021-2022 ?</h6>
                                                        <p class="text-muted m-b-0">{{ $utentes->PartipacaoExame }}</p>
                                                    </div>

                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <h6></h6>
                                                <p class="text-muted m-b-0"></p>
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page-body end -->
        </div>
        <div id="styleSelector"> </div>
    </div>
</div>


<script type="text/javascript" src="/dashboard/assets/js/jquery/jquery.min.js "></script>
<script type="text/javascript" src="/dashboard/assets/js/jquery-ui/jquery-ui.min.js "></script>
<script type="text/javascript" src="/dashboard/assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="/dashboard/assets/js/bootstrap/js/bootstrap.min.js "></script>
<!-- waves js -->
<script src="/dashboard/assets/pages/waves/js/waves.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="/dashboard/assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- slimscroll js -->
<script src="/dashboard/assets/js/jquery.mCustomScrollbar.concat.min.js "></script>

<!-- menu js -->
<script src="/dashboard/assets/js/pcoded.min.js"></script>
<script src="/dashboard/assets/js/vertical/vertical-layout.min.js "></script>

<script type="text/javascript" src="/dashboard/assets/js/script.js "></script>
</body>

</html>
