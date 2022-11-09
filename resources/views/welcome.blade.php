


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Fashion Dog</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <link rel="stylesheet" href="css/custom.css">

<body class="antialiased" style="background-color: #ffffff">
    <nav class="navbar navbar-expand-md navbar-light" style="background-color: #084e63">

        <div style="height: 50px; background-color: #ffffff"></div>
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">
                    {{-- <img src="images/logo_FashionDog.png" alt="" width="60" height="60" --}}
                     <!--class="d-inline-block align-text-top"> -->
                </ul>
            </div>
        </div>
    </nav>


    <div class="container">
        <div class="jumbotron jumbotron">
            <h1 class="display-4">
                <h1 style="color:#104a64" ;>Restaurante </h1>
                <h3 style="color:#5a5656" ;> El ambiente idóneo para degustar la interpretación contemporánea de la cocina.</h3>

                <br>
                <p class="lead">
                    <center>
                        <h2 style="color:#dd683a" ;>𝔼𝕊𝕋𝔸𝕄𝕆𝕊 𝔸 𝕊𝕌 𝕊𝔼ℝ𝕍𝕀ℂ𝕀𝕆</h2>
                    </center>
                </p>


                <style>
                    #fecha {
                    line-height: 5em;
                    margin: 0 auto;
                    text-align: center;
                    font-size: 250%;
                    color: #020202;
                  }
                  </style>
                  <div onLoad="mostrar_hora()">
                    <div id="fecha">

                        <span id="minuto"></span> minutos,  <span id="segundo"></span> segundos
                    </div>
                  </div>
                  <script>
                    // Variables Globales
                  var tiempo = {};
                                      //"2016-06-11 5:00:00 PM" version anterior
                  var clock = new Date("2022-10-09 5:30:00 PM"); // Obtener la fecha y almacenar en clock
                  var intervalo = window.setInterval(mostrar_hora, 1); // Frecuencia de actualización
                  var i = 0; // Esta variable me ayudará a definir los estados de intervalo

                  function mostrar_hora(){
                    var now = new Date();
                    // Inserta la hora almacenada en clock en el span con id hora
                    //tiempo.horas = document.getElementById('hora');
                    //tiempo.horas.innerHTML = clock.getHours() - now.getHours();

                    // Inserta los minutos almacenados en clock en el span con id minuto
                    tiempo.minuto = document.getElementById('minuto');
                    tiempo.minuto.innerHTML = clock.getMinutes()+60 - now.getMinutes();

                    // Inserta los segundos almacenados en clock en el span con id segundo
                    tiempo.segundos = document.getElementById('segundo')
                    tiempo.segundos.innerHTML = "0" + clock.getSeconds()+60 - now.getSeconds();



                  }
                  </script>
        </div>
    </div>
    </div>
    </div>

</body>

</html>
