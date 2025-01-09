
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


    <title>Estadísticas del {{$anoCelebracion}}</title>
    
</head>
@foreach ($parroquia as $parroquia  )
<body style="border-top: 6px double black;
    border-right: 6px double black;
    border-left: 6px double black;
    border-bottom: 6px double black;
    !important
    min-height: 100%;">
    <div 
    style="
    margin-left:2%;
    margin-right:2%;">
    
        <h1 class=" text-uppercase text-center fw-bold fs-5">{{$parroquia->diocesis}}</h1>
        <h2 class="text-sm-center text-capitalize fw-bold  fs-6">Obispado</h2>

        <p>
            <img class="rounded-circle" src="{{ global_asset('storage/img/' . $parroquia->logo_obispado) }}" alt="{{'Logo de la diocesis'}}" width="100px" height="100px">
        </p>
        
        <h2 class=" text-center text-uppercase font-bold mb-4 fs-6">{{$parroquia->parroquia}}</h2>
        <h3 class=" text-center text-uppercase mb-4 fs-6">Estadísticas del {{$anoCelebracion}}</h3>


        <p>BAUTIZADOS DE 0 A 1 AÑOS DE EDAD = {{$bautizadosMenordeUno}}</p>
        <p>BAUTIZADOS DE 1 A 7 AÑOS DE EDAD = {{$bautizadosUnoaSiete}}</p>
        <p>BAUTIZADOS MAYORES A 7 AÑOS DE EDAD = {{$bautizadosMayorDeSiete}}</p>
        <p>TOTAL DE BAUTIZADOS EN EL AÑO = {{$totalBautizados}}</p>
        <p>TOTAL DE MATRIMONIOS EN EL AÑO = {{$totalMatrimonios}}</p>

       <style>
        p.linea{
            display: inline-block;
            position: relative;
            text-align: center;
            font-size: 15px;
        }

        p.linea::after,p.linea::before{
            content: "";
            position: absolute;
            width: 90%;
            height: 1px;
            background-color: black;
            top: 0.6em;
        }
        p.linea::before{
            right: 100%;
        }
        p.linea::after{
            left: 100%;
        }
        
      
       </style>

       <div class="flex text-center">
       <p class="linea">No más información debajo de esta línea</p>
       </div>

       

      
    @endforeach

    <footer style="position: fixed; 
    bottom: 87px; 
    left: 10px; 
    right: 0px;
    height: 87px;
    font-size: 12px;
    " class="text-center">

       @foreach ($diocesi as $diocesi)
           
       
    <p style="margin-top: 5%">{{$diocesi->calle. ', ' . $diocesi->ciudad.', 
    República Dominicana'}} <br> 
    <span class="d-flex justify-content-center">
    RNC.: {{$diocesi->rnc}}, Tel.: {{$diocesi->telefonop}}, Correo.: {{$diocesi->correo}}</span></p>
    @endforeach
</footer>
</div>



</body>
</html>
