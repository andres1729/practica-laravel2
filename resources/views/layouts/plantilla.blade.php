<!DOCTYPE html>
<html>
    <head>


        <title></title>


        <style>

        .imagenCabecera{
          float:right;
          padding-right:150px;
          width:150px;
        }

        .cabecera{
          text-align:center;
          font-size:x-large;
          font-family:Tahoma, Geneva, sans-serif;
          margin-bottom: 100px;
          color:#DB4437
        }

        .contenido form, table{
          width:500px;
          margin:0 auto;
        }

        .pie{
          position:fixed;
          bottom:0px;
          width:100%;
          font-size:0.7em;
          margin-bottom:15px;
        }


        </style>
    </head>
    <body>
        <div class="cabecera">
          @yield("cabecera")
          <img src="/images/2016.jpg" class="imagenCabecera">
        </div>

        <div class="contenido">
          @yield("contenido")
        </div>

        <div class="pie">
          @yield("pie")

          "Sombrio cual cilantro doliente "

        </div>

    </body>
</html>
