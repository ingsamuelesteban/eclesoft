
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


    <title>Impresión</title>
    
</head>
<body style="border-top: 4px double black;
border-right: 4px double black;
border-left: 4px double black;
border-bottom: 4px double black;
!important
min-height: 100%;">
    <div 
    style="
    margin-left:2%;
    margin-right:2%;">
    @foreach ($parroquia as $parroquia )
        <h1 class=" text-uppercase text-center fw-bold fs-5">{{$parroquia->parroquia}}</h1>
        <h2 class="text-sm-center text-uppercase fw-bold  fs-6">{{ $parroquia->diocesis}}</h2>

        <p>
            <img class="rounded-circle" src="{{ global_asset('storage/img/' . $parroquia->logo) }}" alt="{{'Logo de la Parroquia'}}" width="100px" height="100px">
        </p>
        
        <h2 class=" text-center text-uppercase font-bold mb-4 fs-6">Certficado de Bautismo</h2>

        <div class="fs-6 mb-2">
            <p> Quien Suscribe:
            <span class="text-decoration-underline">{{$parroquia->parroco}}</span> </p>
        </div>

        <p class="text-center text-base">Certifica que:</p>

        <p class="text-base text-center text-uppercase fw-bold ">{{$bautismo->nombre}}</p>
        <hr>
        <p>Que nació en <span class="text-decoration-underline text-capitalize ">{{$bautismo->lugar_nacimiento}}</span> 
            el día <span class="text-decoration-underline">{{ $dian }}</span> del mes de <span class="text-decoration-underline text-capitalize">
        {{$mesn}}</span>
        del año
        <span class="text-decoration-underline text-uppercase">
            {{$anon}}</span>
        @if ($bautismo->genero==1)
           hijo 
        @else
         hija   
        @endif
        del señor
        <span class="text-decoration-underline text-uppercase fw-bold">
            {{$bautismo->nombre_padre}}</span>
        y de la señora
        <span class="text-decoration-underline text-uppercase fw-bold">{{$bautismo->nombre_madre}}</span>
        según consta en el Libro de Registro de Nacimiento No.
        <span class="text-decoration-underline">{{$bautismo->no_libro}}</span>
        Folio
        <span class="text-decoration-underline">{{$bautismo->folio}}</span>
        Declaración No.
        <span class="text-decoration-underline">{{$bautismo->no_declaracion}}</span>
        del año
        <span class="text-decoration-underline">{{$bautismo->año}}</span>
        de la
        <span class="text-decoration-underline text-capitalize">{{$bautismo->circunscripcion}}</span>
        Circunscripción del Estado Civil de 
        <span class="text-decoration-underline text-capitalize">{{$bautismo->oficialia}}.</span>
        </p>

        <p>
            Fue <span class="text-uppercase font-weight-bold">bautizado</span> el día 
            <span class="text-decoration-underline">
                {{$diab}}</span>
            del mes de 
            <span class="text-decoration-underline text-capitalize">{{$mesb}}</span>
            del año
            <span class="text-decoration-underline">{{$anob}}</span>
            siendo ministro del Sacramento: <br>
            <span class="text-decoration-underline text-uppercase fw-bold">{{$bautismo->celebrante}}</span>.<br><br>
            Padrino:
            <span class="text-decoration-underline text-uppercase fw-bold">{{$bautismo->nombre_padrino}}</span><br>
            Madrina:
            <span class="text-decoration-underline text-uppercase fw-bold">{{$bautismo->nombre_madrina}}</span><br><br>
            Según consta en el Libro de Bautismo No.
            <span class="text-decoration-underline">{{$bautismo->libro_bautismo}}</span> 
            Folio
            <span class="text-decoration-underline">{{$bautismo->folio_bautismo}}</span> 
            acta No.
            <span class="text-decoration-underline">{{$bautismo->no_bautismo}}</span>
        </p>
        <p>
            Notas al margen: 
            <span class="text-decoration-underline">
                {{$bautismo->notas}}

            </span>
        </p>
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
       <p class="linea">No más información debajo de esta linea</p>
       </div>

        <p style="margin-top: 10%;">El presente documento se expide a petición de la parte interesada en
            <span>{{$parroquia->ciudad}}</span>,
            <span>{{$parroquia->provincia}}</span>,
            a los 
            <span class="text-decoration-underline fw-bold">{{$diac}}</span>
            dias del Mes de 
            <span class="text-decoration-underline fw-bold text-capitalize">{{$mesc}}</span>
            del Año 
            <span class="text-decoration-underline fw-bold">{{$anoc}}</span>.
        </p>

       
    <div style="margin-top: 10%;
    margin-bottom:5%;
     text-align: center;">
        
            <p style="text-decoration: overline; text-transform:uppercase; color:black" >
            
                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Párroco o Vicario Parroquial&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
            </p>
       
    </div> 
      
    @endforeach

    <footer style="position: fixed; 
bottom: 0px; 
left: 0px; 
right: 0px;
height: 50px;
font-size: 10px;
" class="text-center">
    <p>{{$parroquia->calle. ', ' . $parroquia->ciudad.', 
    República Dominicana'}} <br> 
    <span class="d-flex justify-content-center">
    RNC.: {{$parroquia->rnc}}, Tel.: {{$parroquia->telefonop}}, Correo.: {{$parroquia->correo}}</span></p>
</footer>
</div>



</body>
</html>
