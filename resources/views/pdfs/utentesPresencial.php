<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">

    <title>Participantes a Distância</title>
    <style>
        <?php echo $bootstrap;
        echo $css;
        ?>
    </style>
</head>

<body>

    <img class="logotipo" src="images/logo.png" alt="" srcset="">
    <div style="margin-top:-15%; margin-left:53%;">
    <p style="text-align:center;padding-top:20px;">O Director Geral<br>______________________________</p>
    <p style="text-align:center;">Diasala Jacinto André</p>
    </div>
    <p class=" republica text-center">REPÚBLICA DE ANGOLA <br> MINISTÉRIO DA EDUCAÇÃO <br>INSTITUTO NACIONAL DE AVALIAÇÃO E DESENVOLVIMENTO DA EDUCAÇÃO</p>
    <div class="text-center">
        <h1 class="text-primary" style="margin-top: 50px; margin-bottom: 50px;" > LISTA DE PARTICIPANTES PRESENCIAIS</h1>
    </div>
    <table  class=" table">
        <thead >
            <tr >
                <th style="height:30px; width:20px;"  class="text-center" >Nº</th>
                <th  class="text-center" >Nome</th>
                <th class="text-center">Email</th>
                <th class="text-center">Telefone</th>
                <th class="text-center">instituição</th>
                <th class="text-center">País</th>
                <th class="text-center">Província</th>


            </tr>
        </thead>
        <tbody>

            <?php $contador = 1; ?>
            <?php foreach ($presencial as $test) : ?>

                <tr >
                    <td style="height:25px" class="text-center"><?php echo $contador++; ?></td>
                    <td  ><?php echo $test->nome; ?></td>
                    <td  ><?php echo $test->email; ?></td>
                    <td  ><?php echo $test->telefone; ?></td>
                    <td  ><?php echo $test->Instituicao; ?></td>
                    <td  ><?php echo $test->pais; ?></td>
                    <td  ><?php echo $test->provincia; ?></td>
                </tr>

            <?php endforeach; ?>

            <br>
        </tbody>
    </table>


    <p style="text-align:center;margin-top:5%;">Luanda <?php
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Sao_Paulo');
    echo strftime(' %d de %B de %Y', strtotime('today')); ?></p>
</body>

</html>

