<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Simposio - inscrição</title>

    <!-- Icons font CSS-->
    <link href="/inscrever/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="/inscrever/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- /inscrever/Vendor CSS-->
    <link href="/inscrever/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/inscrever/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="/inscrever/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    @include('sweetalert::alert')
    <div style="margin-top:2%" style="padding: 0%" class="page-wrapper font-robo">
        <div class="wrapper wrapper--w960" style="padding: 0%">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Informações para a Inscrição</h2>
                    <form method="POST">

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2 " type="text" placeholder="Nome" name="nome">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <input class="input--style-2 " type="email" placeholder="email@gmail.com" name="email">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2 " type="number" placeholder="9xxxxx" name="telefone">

                                </div>
                            </div>
                            <div class="col-2">

                                <div class="input-group">
                                    <div class="rs-select2 ">
                                        <input class="input--style-2 " type="text" placeholder="Instituicao" name="Instituicao">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">

                                <div class="input-group">
                                    <input class="input--style-2 " type="text" placeholder="pais" name="pais">

                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">

                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <input class="input--style-2 " type="text" placeholder="municipio" name="municipio">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">

                                <div class="input-group">
                                    <input class="input--style-2 " type="text" placeholder="provincia" name="provincia">

                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">

                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="tipoParticpacao">
                                            <option disabled="disabled" selected="selected">Participação</option>
                                            <option>Presencial</option>
                                            <option>Distância</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">

                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="InfoExame">
                                            <option disabled="disabled" selected="selected">Como ficou a saber dos exames Nacionais</option>
                                            <option>Rádio</option>
                                            <option>Televisão</option>
                                            <option>Redes Sociais</option>
                                            <option>Outros</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="PartipacaoExame">
                                            <option disabled="disabled" selected="selected">Participou dos exames nacios no ano lectivo 2021-2022?</option>
                                            <option>Sim</option>
                                            <option>Não</option>

                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="p-t-30">
                            <button class="btn btn--radius btn--green" type="submit">Inscrever</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="/inscrever/vendor/jquery/jquery.min.js"></script>
    <!-- /inscrever/Vendor JS-->
    <script src="/inscrever/vendor/select2/select2.min.js"></script>
    <script src="/inscrever/vendor/datepicker/moment.min.js"></script>
    <script src="/inscrever/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="/inscrever/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
