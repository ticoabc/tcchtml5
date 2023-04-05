<?php
include_once "conexao3.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SpotUp - Simulador</title>
  <meta name="description" content="Material educativo e informativo sobre energia solar residencial
            em um site moderno e responsivo.">
  <link rel="icon" href="img/ico/icone_location.ico">
  <!--<link rel="stylesheet" href="css/style.css">-->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
  <script src="js/calcular.js"></script>
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  background-color: rgb(24, 26, 27);
  color: #ffff;
}

/* Style the button */
.btn-primary {
    background-color: #0088cc;
    color: #fff;
    padding: 5px 8px;
    border: 1px solid #0088cc;
    border-radius: 4px;
    cursor: pointer;
    font-size: 15px;
    transition: all .3s ease;
}

.btn-primary:hover {
    background-color: #fff;
    color: #0088cc;
}

/* Style the header */
.header {
  background-color: rgb(24, 26, 27);
  color: #ffff;
  padding: 20px;
  text-align: center;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create three unequal columns that floats next to each other */
.column {
  float: left;
  padding: 10px;
}

/* column side1 - Labels */
.column.side1 {
  width: 20%;
}

/* column side2 - Inputs */
.column.side2 {
  width: 25%;
}

/* Middle column */
.column.middle {
  width: 5%;
}

/* Clear floats after the columns */
.row::after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column.side1,.column.side2, .column.middle {
    width: 100%;
  }
}
</style>
</head>
<body>
<script type='text/javascript'>
    $(document).ready(function (){
        $("input[name='nome']").blur(function () {
            var $media = $("input[name='media']");
            $.getJSON('function.php', {
                nome: $(this).val()
            }, function (json) {
                $media.val(json.media);
                $rg.val(json.rg);
            });
        });
    });
</script>
<div class="header">
  <h1>SpotUp</h1>
  <p>Simulador do Sistema FV</p>
</div>

<div class="topnav">
  <a href="index.html">Home</a>
  <a href="financiamento.php">Sim.Financiamento</a>
</div>

<div class="row">
  <div class="column side1">
    <h2>Entrada</h2>
    <label>Gasto (R$)</label>
  </div>
  <div class="column side2">
    <h2>----------</h2>
     <input type="text" class="gasto" placeholder="Gasto..." required>
  </div>
  <div class="column middle">
    <h2></h2>
    <label></label>
  </div>
  <div class="column side1">
    <h2>Saida</h2>
    <label>Pot. Nec.(kWp)</label>
  </div>
  <div class="column side2">
    <h2>----------</h2>
     <input type="text" id="potencianecess" name="potencianecess" placeholder="Pot. Nec.(kWp)" readonly>
  </div> 
</div>

<div class="row">
  <div class="column side1">
    <label>Município</label>
  </div>
  <div class="column side2">
     <input type="text" class="nome" name="nome" placeholder="Choose Your Município" required>
  </div>
  <div class="column middle">
    <h2></h2>
    <label></label>
  </div>
  <div class="column side1">
    <label>Área Coberta (m2)</label>
  </div>
  <div class="column side2">
    <input type="text" id="areacobrt" name="areacobrt" placeholder="Área Coberta (m2)" readonly>
  </div>
</div>

<div class="row">
  <div class="column side1">
       <label>Média</label>
    </div>
  <div class="column side2">
       <input type="text" class="media" name="media" placeholder="Text Your Média" readonly>
  </div>
  <div class="column middle">
      <h2></h2>
      <label></label>
  </div>
  <div class="column side1">
    <label>G.Est.(kWh/mês)</label>
    </div>
  <div class="column side2">
      <input type="text" id="geracaomediaestim" name="geracaomediaestim" placeholder="G.Est.(kWh/mês)" readonly>
  </div>    
</div>

<div class="row">
  <div class="column side1">
        <label></label>
        <button class="btn-primary" onclick="clicar()">Resultado</button>
  </div>
  <div class="column side2">
  
  </div>
  <div class="column middle">
      <h2></h2>
      <label></label>
  </div>
  <div class="column side1">
    <label>Retorno 1ºA (R$)</label>
  </div>
  <div class="column side2">
    <input type="text" id="retorno1ano" name="retorno1ano" placeholder= "Retorno 1ºA (R$)" readonly>
  </div>
</div>

<div class="row">
  <div class="column side1">
      <label></label>
    </div>
  <div class="column side2">
  </div>
  <div class="column middle">
      <h2></h2>
      <label></label>
  </div>
  <div class="column side1">
    <label>Cst.Min. Prjt.(R$)</label>
  </div>
  <div class="column side2">
    <input type="text" id="custominprojeto" name="custominprojeto" placeholder="Custo Mínimo Projeto (R$)" readonly>
  </div>

    <input type="hidden" id="consumo" name="consumo" placeholder="" size="10" readonly><br><br>
    <input type="hidden" id="corrigeconsumo" name="corrigeconsumo" placeholder="" size="10" readonly><br><br>
    <input type="hidden" id="quantmod" name="quantmod" placeholder="" size="10" dir="rtl" readonly><br><br>
    <input type="hidden" id="potenciagerador" name="potenciagerador" placeholder="" size="10" dir="rtl" readonly><br><br>
    <input type="hidden" id="invrsorpotmin" name="invrsorpotmin" placeholder="" size="10" dir="rtl" readonly><br><br>
    <input type="hidden" id="corrigeconsumoanual" name="corrigeconsumoanual" placeholder="" size="10" readonly><br><br>
    <input type="hidden" id="gerestimano" name="gerestimano" placeholder="" size="10" dir="rtl" readonly><br><br>
    <input type="hidden" id="gasto" name="gasto" placeholder="" size="10" dir="rtl" readonly><br><br>
    <input type="hidden" id="valorenergianovo" name="valorenergianovo" placeholder="" size="10" dir="rtl" readonly><br><br>
    <input type="hidden" id="valorenergiaconc" name="valorenergiaconc" placeholder="" size="10" dir="rtl" readonly><br><br>
</div>

</body>
</html>