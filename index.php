<?php
    include('conexao.php');
    $query = mysqli_query($conexao,"SELECT * FROM arduino ORDER BY id DESC");
    $exibe = mysqli_fetch_array($query);
        $varDistancia = $exibe[1]; 
        $varDistanciaUm = $exibe[2]; 
        $varQuantidade =$exibe[3];
        

        $num1 = $varDistancia;
        $num2 = 10;
        $res = $num1 / $num2;
        $new = str_replace(".", ",", $res);
        $num3 = $varDistanciaUm;
        $num4 = 10;
        $resUm = $num3 / $num4;
        $newUm = str_replace(".", ",", $res);
?>

<html>  
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="2">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/style.css" type="text/css">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <title> EVA </title>
    </head>

    <body>
    <body>

<div id="caixa" class="container-fluid p-5 text-white text-center">
  <h1>EVA</h1>
</div>
  
    <div class="quadradopreto">
        <div class="pessoapreto"><h4>DISTANCIAMENTO OK</h4></div>
    </div>

    <div class="quadradovermelho">
        <div class="pessoavermelho"><h4>INFRINGINDO DISTANCIAMENTO</h4></div>
    </div>

    <div class="vazio">
        <h4>VAGA VAZIA</h4>
    </div>


<div class="people">
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">

      <?php
      $varDistancia = $varDistancia;
      $black = '<img src="img/blackcircle.png">';
      $red = '<img src="img/redcircle.png">';

      if($varDistancia >= 15){
        echo ($black);}

      if($varDistancia < 15){
        echo ($red);
      };


      ?>
        
    </div>


    <div class="col-sm-4">

      <?php
      $varDistancia = $varDistancia;
      $varDistanciaUm = $varDistanciaUm;
      $black = '<img src="img/blackcircle.png">';
      $red = '<img src="img/redcircle.png">';
      
      if($varDistancia >= 15){
        echo ($black);}

      if($varDistancia < 15){
        echo($red);}

      ?>
      <h5>Distância em Metros: <?php echo($res); ?></h5>


    </div>

    <div class="col-sm-4">

      <?php
      $varDistanciaUm = $varDistanciaUm;
      $black = '<img src="img/blackcircle.png">';
      $red = '<img src="img/redcircle.png">';

      if($varDistanciaUm > 14 AND $varDistanciaUm < 19 ){
        echo ($black);}

      if($varDistanciaUm < 15){
        echo($red);
        ?>
              <h5>Distância em Metros: <?php echo($resUm); ?></h5>
              <?php
    }

    
      if($varDistanciaUm > 20){
        echo("");
        };
        ?>

  

    </div>
  </div>
</div>
</div>
</body>
</html>
    </body>
</html>