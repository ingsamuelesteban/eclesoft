
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


    <title>Impresión</title>
    
</head>
@foreach ($parroquia as $parroquia )
<body style="border-top: 6px double {{$parroquia->color_borde}};
border-right: 6px double {{$parroquia->color_borde}};
border-left: 6px double {{$parroquia->color_borde}};
border-bottom: 6px double {{$parroquia->color_borde}};
!important
min-height: 100%;">
    <div 
    style="
    margin-left:2%;
    margin-right:2%;">

        <h1 class=" text-uppercase text-center fw-bold fs-5">{{$parroquia->parroquia}}</h1>
        <h2 class="text-sm-center text-uppercase fw-bold  fs-6">{{ $parroquia->diocesis}}</h2>

        <p>
            <img class="rounded-circle" src="{{ global_asset('storage/img/' . $parroquia->logo) }}" alt="{{'Logo de la Parroquia'}}" width="100px" height="100px">
        </p>
        
        <h2 class=" text-center text-uppercase fw-bold mb-4 fs-6">Certificado de Matrimonio</h2>

        <div class="fs-6 mb-2">
            <p> Quien Suscribe:
            <span class="text-decoration-underline">&nbsp;&nbsp;{{$parroquia->parroco}}&nbsp;&nbsp;</span> </p>
        </div>

        <p><span class="text-uppercase fw-bold"> Certifica: </span> Que en los registros de esta Parroquia, se encuentra inscrito en el Libro No.<span class="text-decoration-underline fw-bold ">&nbsp;&nbsp;{{$matrimonio->libro_matrimonio}}&nbsp;&nbsp;</span> de registros de <span class="text-uppercase fw-bold">matrimonio </span>, Folio No. <span class="text-decoration-underline fw-bold">&nbsp;&nbsp;{{ $matrimonio->folio_matrimonio }}&nbsp;&nbsp;</span>, Acta No. <span class="text-decoration-underline fw-bold">&nbsp;&nbsp;{{ $matrimonio->no_matrimonio }}&nbsp;&nbsp;</span>, el matrimonio celebrado en fecha 
          @if ($fechac == '11/11/1111')
          <span class="text-decoration-underline fw-bold">&nbsp;&nbsp;(----)&nbsp;&nbsp;</span>, 
          @else
          <span class="text-decoration-underline fw-bold">&nbsp;&nbsp;({{Carbon\Carbon::parse($matrimonio->fecha_celebracion)->isoFormat('L')}})&nbsp;&nbsp;</span>, 
          @endif
          por el <span class="text-decoration-underline text-uppercase fw-bold">&nbsp;&nbsp; {{$matrimonio->celebrante_name}}&nbsp;&nbsp;</span>  
        </p>
        <p class="text-uppercase fw-bold">
            Entre:
        </p>
        

        <p class="text-center">
             <span class="text-uppercase fw-bold text-decoration-underline">&nbsp;&nbsp;{{$matrimonio->nombre_esposo}}&nbsp;&nbsp;</span>, documento de identidad.: 
            <span class="text-decoration-underline fw-bold">&nbsp;&nbsp;
                {{$matrimonio->documento_esposo}}&nbsp;&nbsp;</span>
        </p>

        <p class="text-center text-uppercase fw-bold">
            Y 
        </p>

        <p class="text-center">
         <span class="text-uppercase fw-bold text-decoration-underline">&nbsp;&nbsp;{{$matrimonio->nombre_esposa}}&nbsp;&nbsp;</span>,
            documento de identidad.:
            <span class="text-decoration-underline fw-bold">&nbsp;&nbsp;{{$matrimonio->documento_esposa}}&nbsp;&nbsp;</span>
        </p>

        <p>
            Siendo sus testigos:
            <br><br>
            Padrino:
            <span class="text-decoration-underline text-uppercase fw-bold">&nbsp;&nbsp;{{$matrimonio->nombre_padrino}}&nbsp;&nbsp;</span>, documento de identidad.:
            <span class="text-decoration-underline fw-bold">&nbsp;&nbsp;{{$matrimonio->documento_padrino}}</span>&nbsp;&nbsp;<br>
            Madrina:
            <span class="text-decoration-underline text-uppercase fw-bold">&nbsp;&nbsp;{{$matrimonio->nombre_madrina}}&nbsp;&nbsp;</span>,
            documento de identidad.:
            <span class="text-decoration-underline fw-bold">&nbsp;&nbsp;{{$matrimonio->documento_madrina}}</span>&nbsp;&nbsp;<br><br>


            Transcrita el Acta en los Registros del Estado Civil de la {{$parroquia->circunscripcion}}, el dia
            @if ($fechat == '11/11/1111')
            <span class="text-decoration-underline">&nbsp;&nbsp;--&nbsp;&nbsp;</span> del mes de <span class="text-decoration-underline">&nbsp;&nbsp;--&nbsp;&nbsp;</span> del año <span class="text-decoration-underline">&nbsp;&nbsp;--&nbsp;&nbsp;</span> <span class="fw-bold">(----)</span>  
            @else
            <span class="text-decoration-underline">&nbsp;&nbsp;{{Carbon\Carbon::parse($matrimonio->fecha_transcripcion)->isoFormat('DD')}}&nbsp;&nbsp;</span> del mes de <span class="text-decoration-underline">&nbsp;&nbsp;{{Carbon\Carbon::parse($matrimonio->fecha_transcripcion)->isoFormat('MMMM')}}&nbsp;&nbsp;</span> del año <span class="text-decoration-underline">&nbsp;&nbsp;{{Carbon\Carbon::parse($matrimonio->fecha_transcripcion)->isoFormat('Y')}}&nbsp;&nbsp;</span> <span class="fw-bold">({{Carbon\Carbon::parse($matrimonio->fecha_transcripcion)->isoFormat('L')}})</span> 
            @endif
            , Libro <span class="text-decoration-underline fw-bold">&nbsp;&nbsp;{{$matrimonio->no_libro}}<&nbsp;&nbsp;</span>, Folio <span class="text-decoration-underline fw-bold">&nbsp;&nbsp;{{$matrimonio->folio}}&nbsp;&nbsp;</span>, Acta No. <span class="text-decoration-underline fw-bold">&nbsp;&nbsp;{{$matrimonio->no_transcripcion}}&nbsp;&nbsp;</span>
        </p>
        <p>
            Notas al margen: 
            <span class="text-decoration-underline">
                &nbsp;&nbsp;{{$matrimonio->notas}}&nbsp;&nbsp;

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

      
    @endforeach

    <footer style="position: fixed; 
    bottom: 87px; 
    left: 10px; 
    right: 0px;
    height: 87px;
    font-size: 12px;
    " class="text-center">

<span class="text-start" style="font-size: 14px">
<p style="margin-bottom: 10%;" >El presente documento se expide a petición de la parte interesada en
    <span>{{$parroquia->ciudad}}</span>,
    <span>{{$parroquia->provincia}}</span>,
    a los 
    <span class="text-decoration-underline fw-bold">&nbsp;&nbsp;{{$diac}}&nbsp;&nbsp;</span>
    dias del Mes de 
    <span class="text-decoration-underline fw-bold text-capitalize">&nbsp;&nbsp;{{$mesc}}&nbsp;&nbsp;</span>
    del Año 
    <span class="text-decoration-underline fw-bold">&nbsp;&nbsp;{{$anoc}}&nbsp;&nbsp;</span>.
    </p>
</span>

    <p style="text-decoration: overline; text-transform:uppercase; color: black; font-size:14px; margin-bottom: 15px">
        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Párroco o Vicario Parroquial&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
    </p>
    <p>{{$parroquia->calle. ', ' . $parroquia->ciudad.', 
    República Dominicana'}} <br> 
    <span class="d-flex justify-content-center">
    RNC.: {{$parroquia->rnc}}, Tel.: {{$parroquia->telefonop}}, Correo.: {{$parroquia->correo}}</span></p>
</footer>
</div>



</body>
</html>
