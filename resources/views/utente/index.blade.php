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
    <link href="/images/Logo Simposio.png" rel="icon">
    <link href="/images/Logo Simposio.png" rel="apple-touch-icon">
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

                    @if (isset($errors) && count($errors) > 0)
                    <div style="color: red" class="text-center mt-4 mb-4 alert-danger">
                        @foreach ($errors->all() as $erro)
                        <h5>* {{ $erro }}</h5>
                        @endforeach
                    </div>
                    @endif
                    <form method="POST" action="{{ route('confirm_insc') }}">
                    @csrf


                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input  value="{{ old('nome') }}" class="input--style-2 " type="text" placeholder="Nome Completo" name="nome">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <input class="input--style-2"  value="{{ old('email') }}" type="email" placeholder="email@gmail.com" name="email">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input   value="{{ old('telefone') }}" class="input--style-2 " type="number" placeholder="9xxxxx" name="telefone">

                                </div>
                            </div>
                            <div class="col-2">

                                <div class="input-group">
                                    <div class="rs-select2 ">
                                        <input   value="{{ old('Instituicao') }}" class="input--style-2 " type="text" placeholder="Instituicao" name="Instituicao">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">

                                <div class="input-group">
                                    <input   value="{{ old('pais') }}" class="input--style-2 " type="text" placeholder="País" name="pais">

                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">

                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <input   value="{{ old('municipio') }}" class="input--style-2 " type="text" placeholder="Município" name="municipio">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">

                                <div class="input-group">
                                    <input   value="{{ old('provincia') }}" class="input--style-2 " type="text" placeholder="Província" name="provincia">

                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">

                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select value="{{ old('tipoParticpacao') }}" name="tipoParticpacao">
                                            <option  disabled="disabled" selected="selected">Participação</option>
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
                                        <select  value="{{ old('InfoExame') }}" name="InfoExame">
                                            <option    disabled="disabled" selected="selected">Como ficou a saber dos exames Nacionais</option>
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
                                        <select  value="{{ old('PartipacaoExame') }}" name="PartipacaoExame">
                                            <option   disabled="disabled" selected="selected">Participou dos exames nacios no ano lectivo 2021-2022?</option>
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
                    <br>
                    @if ($errors->any())
                            <div id="messagem_erro">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li style="color:#fff">{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
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
    <script src="/src/plugins/sweetalert2/sweetalert2.all.js"></script>
    <script src="/src/plugins/sweetalert2/sweet-alert.init.js"></script>
    @if (session('utenteadd'))
        <script>
            swal('Bom trabalho!', 'Inscrição feita com sucesso', 'success', {
                button: 'Ok'
            })
        </script>
    @endif
    @if (session('presencial'))
    <script>
        swal('Lamentamos!', 'Todos os lugares estão preenchido para a participação presencial,Tente a participação à distância' , 'error', {
            button: 'Ok'
        })
    </script>
    @endif

</body>

</html>
<!-- end document-->
