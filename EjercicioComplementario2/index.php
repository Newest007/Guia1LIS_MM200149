<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculadora de Divisas</title>
    <link rel="stylesheet" href="css/card_main.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  </head>

  <body> 
    <header>
      <nav class="navbar navbar-expand-lg bg-dark">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">              
                <li class="nav-item">
                <a class="navbar-brand"><img src="img/logo_universidaddonbosco_dark.png" style="width: 40px; height: 50px;"></a>
                </li>              
            </ul>
        </nav>
    </header>
    <div class="container-flex px-20" style="background-color: #212529; color: white;">
      <div class="col-sm text-center">
        <div class="row p-4">
          <h2>Convertidor de dolares a Euros</h2>          
        </div>
      </div>
    </div>
      
    <div style="padding:30px;"></div>
      <main>
        <div class="container-xxl p-30 rounded-4" style="background-color: white;">


          <div class="row">
            <form class="formulario" id="formulario" method ="POST">
              <label for="dollar" class="formulario_label">Ingrese la cantidad a transformar</label>
              <input type="text" class="formulario_input" name="dollar" id="dollar" >

              <hr style="color:white">

              <div class="row">
                  <div class="d-grid gap-2 ">
                    <input  type="submit" name="convertir" value="Convertir" class="btn btn-primary btn-lg"></input>
                  </div>
              </div>
              
 
            </form>
          </div>
          <hr style="color:white">
          
          <?php
          if(isset($_POST['convertir'])){
            if(empty($_POST['dollar'])||!is_numeric($_POST['dollar'])){
              echo "<div class='alert alert-danger'>Debes ingresar un numero</div>";
              echo "<hr>";
            }
            else{
              
              $dollar = $_POST['dollar'];
              $euro = 0.92;
              $convertido = $dollar * $euro;
              
              $arrayMonedaOrigen = [$dollar];
              $arrayMonedaFinal = [$convertido];
              
              echo "<table class='table'>";
              echo "<thead>";
              echo "<tr>";
              echo "<th scope='col'>#</th>";
              echo "<th scope='col'>Valor</th>";
              echo "<th scope='col'>Conversión</th>";
              echo "</tr>";
              echo "</thead>";
              echo "</tbody>";

              echo "<tr>";
              echo "<td scope='row' style='font-weight: bold;'></td>";
              echo "<td>$dollar</td>";
              echo "<td>$convertido</td>";
              echo "</tr>";

              echo "</tbody>";
              echo "</table>";
            }
              
            }
          
          ?>


        </div>

      </main>
    </div>
  </body>
</html>