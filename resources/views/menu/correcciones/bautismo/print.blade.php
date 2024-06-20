
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


    <title>{{$correccionb->bautizado}}</title>
    
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
        
        <p class="text-md text-black text-center my-5 font-serif">Vistos los siguientes documentos:</p>

        <ol class="list-decimal list-inside">
            <li class="text-md text-black text-justify font-serif my-2">Solicitud del Párroco de la Parroquia {{$correccionb->parroquia->parroquia}}, fechada el {{Carbon\Carbon::parse($correccionb->fecha_solicitud)->isoFormat('LL')}}.</li>

            <li class="text-md text-black text-justify font-serif my-2">Certificado de Bautismo de <span class="text-uppercase fw-bold">{{$correccionb->bautizado}}</span> Libro {{$correccionb->libro_bautismo}} Folio {{$correccionb->folio_bautismo}} No. {{$correccionb->acta_bautismo}}.</li>

            @foreach ($documentos as $documento )

            <li class="text-md text-black text-justify font-serif my-2">{{$documento->documento}} de <span class="text-uppercase fw-bold">{{$documento->titular_documento}}</span> {{$documento->referencias_documento}}</li>
        
            @endforeach
        </ol>

        <p class="text-md text-black text-center my-5 font-serif">Por el presente DECRETAMOS que:</p>

        <p class="text-md text-black text-justify my-2 font-serif">El Párroco de la Parroquia {{$correccionb->parroquia->parroquia}} en el Libro {{$correccionb->libro_bautismo}} folio{{$correccionb->folio_bautismo}} No. {{$correccionb->acta_bautismo}} coloque una nota que diga: </p>

        <p class="text-md text-black text-justify my-2 font-serif">{{$correccionb->notas}}</p>

        <P>
            Según consta en el Libro de Decretos No. {{$correccionb->libro_decreto}} Folio {{$correccionb->folio_decreto}} Acta No. {{$correccionb->no_decreto}}.
        </P>
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
        <span class="d-flex justify-content-center">{{$diocesi->titulo}}</span>
    </p>  
    @elseif ($diocesi->firma == 2)
    <p style=" text-transform:uppercase; color: black; font-size:14px; margin-bottom: 25px; margin-top:2%">
        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;{{$diocesi->vicario_general}}&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <br>
        <span class="d-flex justify-content-center">VICARIO GENERAL</span>
    </p>
    @else
    <p style=" text-transform:uppercase; color: black; font-size:14px; margin-bottom: 5%; margin-top:2%">
        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;{{$diocesi->canciller}}&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <br>
        <span class="d-flex justify-content-center" style="text-decoration: none;">CANCILLER</span>
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
