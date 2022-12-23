<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscrição - Simposio</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Inscrição</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="telefone"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="number" name="telefone" id="name" placeholder="9xxxxxxxx"/>
                            </div>

                            <div class="form-group">
                                <label for="instituicao"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="Instituicao" id="instituicao" placeholder="instituicao"/>
                            </div>
                            <div class="form-group">
                                <label for="pais"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="pais" id="pais" placeholder="pais"/>
                            </div>
                            <div class="form-group">
                                <label for="provincia"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="provincia" id="provincia" placeholder="provincia"/>
                            </div>
                            <div class="form-group">
                                <label for="municipio"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="municipio" id="municipio" placeholder="municipio"/>
                            </div>
                            <div class="form-group">
                                <p for="InfoExame">Já ouviu falar dos Exames Nacionais?, Por quais meios?</p>
<table>
    <tr>
                               <td> Rádio <input type="radio" name="InfoExame" value="Radio" id=""></td>
                               <td>Televisão <input type="radio" name="InfoExame" value="televisao" id=""></td>
                               <td>Redes Sociais <input type="radio" name="InfoExame" value="redes sociais" id=""></td>
                        <td> Outros <input type="radio" name="InfoExame" value="outros" id=""></td>
                    </tr>
                    </table>
                            </div>
                            <div class="form-group">
                                <p for="tipoParticpacao">Como pretende participar?</p>
                                <table>
                                    <tr>
                                                               <td> Presencial <input type="radio" name="tipoParticpacao" value="Presencial" id=""></td>
                                                               <td>Distância <input type="radio" name="tipoParticpacao" value="Distância" id=""></td>

                                                    </tr>
                                                    </table>

                            </div>

                            <div class="form-group">


                            </div>

                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Inscrever-se"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <p >Participou dos Exames Nacionais do ano lectivo 2021-2022 ?</p>
                                <table>
                                    <tr>
                                                               <td> Sim <input type="radio" name="PartipacaoExame" value="sim" id=""></td>
                                                               <td>Não <input type="radio" name="PartipacaoExame" value="não" id=""></td>

                                                    </tr>
                                                    </table>
                    </div>
                </div>
            </div>
        </section>


    </div>

    <!-- JS -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
