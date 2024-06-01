
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


    <title>{{$confirmacion->nombre}} {{$confirmacion->apellidos}}</title>
    
</head>
@foreach ($diocesis as $diocesi  )
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
    
        <h1 class=" text-uppercase text-center fw-bold fs-5">{{$diocesi->nombre}}</h1>
        <h2 class="text-sm-center text-capitalize fw-bold  fs-6">Obispado</h2>

        <p>
            <img class="rounded-circle" src="{{ global_asset('storage/img/' . $diocesi->logo) }}" alt="{{'Logo de la diocesi'}}" width="100px" height="100px">
        </p>
        
        <h2 class=" text-center text-uppercase font-bold mb-4 fs-6">Certficado de Confirmación</h2>

        <div class="fs-6 mb-2">

            @if ($diocesi->firma == 1)
            <p> Quien Suscribe:
                <span class="text-decoration-underline">&nbsp;&nbsp;{{$diocesi->obispo}}&nbsp;&nbsp;</span> </p>
            @elseif ($diocesi->firma == 2)
            <p> Quien Suscribe:
                <span class="text-decoration-underline">&nbsp;&nbsp;{{$diocesi->vicario_general}}&nbsp;&nbsp;</span> </p>
            @else
            <p> Quien Suscribe:
                <span class="text-decoration-underline">&nbsp;&nbsp;{{$diocesi->canciller}}&nbsp;&nbsp;</span> </p>
            @endif
            
        </div>

        <p class="text-center text-base">Certifica que:</p>

        <p class="text-base text-center text-uppercase fw-bold">**** {{ $confirmacion->nombre }} ****</p>
        @if ($confirmacion->sexo==1)
        <p class="text-base text-center ">Hijo de  <span class="text-base text-capitalize">{{$confirmacion->nombre_padre}}</span> y <span class="text-base text-capitalize">{{$confirmacion->nombre_madre}}</span></p> 
        @else
        <p class="text-base text-center ">Hija de  <span class="text-base text-capitalize">{{$confirmacion->nombre_padre}}</span> y <span class="text-base text-capitalize">{{$confirmacion->nombre_madre}}</span></p>  
        @endif
        
        <p class="text-base text-center ">Recibió el sacramento de la <span class="text-base text-uppercase fw-bold">confirmación.</span> </p>
    
        <p>El día <span class="text-decoration-underline">&nbsp;&nbsp;{{ $dia }}&nbsp;&nbsp;</span> del mes de <span class="text-decoration-underline" style="text-transform: capitalize">
            &nbsp;&nbsp;{{$mes}}&nbsp;&nbsp;</span>
        del año
        <span class="text-decoration-underline text-uppercase">
            &nbsp;&nbsp; {{$ano}} &nbsp;&nbsp;</span>.
        </p>
        <p>
        Siendo ministro del Sacramento 
        <span class=" text-capitalize">
             {{$confirmacion->celebrante}}</span>.
        </p>
        <p>
            Siendo su {{$confirmacion->sexo_padrinos}}: {{$confirmacion->padrinos}}.
        
        </p>
        <P>
            La administración de este sacramento tuvo lugar en la Parroquia {{$confirmacion->parroquia->parroquia}}, {{$confirmacion->parroquia->ciudad}}, {{$confirmacion->parroquia->provincia}}, República Dominicana.
        </P>

        <P>
            Según consta en el Libro de Confirmaciones No. {{$confirmacion->libro_confirmacion}} Folio {{$confirmacion->folio_confirmacion}} Acta No. {{$confirmacion->no_confirmacion}}.
        </P>
        @if ($confirmacion->notas )
            
        <p>Notas al margen: {{$confirmacion->notas}}</p>
            
        @endif
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

<span class="text-start" style="font-size: 14px">
<p style="margin-bottom: 5%;" >Certificación expedida a petición de la parte interesada en
    <span>{{$diocesi->ciudad}}</span>,
    <span>{{$diocesi->provincia}}</span>,
    a los 
    <span class="text-decoration-underline fw-bold">&nbsp;&nbsp;{{$diac}}&nbsp;&nbsp;</span>
    dias del Mes de 
    <span class="text-decoration-underline fw-bold text-capitalize">&nbsp;&nbsp;{{$mesc}}&nbsp;&nbsp;</span>
    del Año 
    <span class="text-decoration-underline fw-bold">&nbsp;&nbsp;{{$anoc}}&nbsp;&nbsp;</span>.
    </p>
</span>

    @if ($diocesi->firma == 1)
    <p style=" text-transform:uppercase; color: black; font-size:14px; margin-bottom: 25px; margin-top:2%">
        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;{{$diocesi->obispo}}&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <br>
        <span class="d-flex justify-content-center">{{$diocesi->titulo}} DE LA {{$diocesi->nombre}}</span>
    </p>  
    @elseif ($diocesi->firma == 2)
    <p style=" text-transform:uppercase; color: black; font-size:14px; margin-bottom: 25px; margin-top:2%">
        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;{{$diocesi->vicario_general}}&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <br>
        <span class="d-flex justify-content-center">VICARIO GENERAL DE LA {{$diocesi->nombre}}</span>
    </p>
    @else
    <p style=" text-transform:uppercase; color: black; font-size:14px; margin-bottom: 5%; margin-top:2%">
        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;{{$diocesi->canciller}}&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <br>
        <span class="d-flex justify-content-center" style="text-decoration: none;">CANCILLER DE LA {{$diocesi->nombre}}</span>
    </p>
    @endif
    
    <p style="margin-top: 5%">{{$diocesi->calle. ', ' . $diocesi->ciudad.', 
    República Dominicana'}} <br> 
    <span class="d-flex justify-content-center">
    RNC.: {{$diocesi->rnc}}, Tel.: {{$diocesi->telefonop}}, Correo.: {{$diocesi->correo}}</span></p>
</footer>
</div>



</body>
</html>
