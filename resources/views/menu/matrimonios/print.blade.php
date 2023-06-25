
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
        
        <h2 class=" text-center text-uppercase fw-bold mb-4 fs-6">Certficado de Matrimonio</h2>

        <div class="fs-6 mb-2">
            <p> Quien Suscribe:
            <span class="text-decoration-underline">{{$parroquia->parroco}}</span> </p>
        </div>

        <p><span class="text-uppercase fw-bold"> Certifica: </span> Que en los registros de esta Parroquia, se encuentra inscrito en el Libro No.<span class="text-decoration-underline fw-bold ">{{$matrimonio->libro_matrimonio}}</span> de registros de <span class="text-uppercase fw-bold">matrimonio </span>, Folio No. <span class="text-decoration-underline fw-bold">{{ $matrimonio->folio_matrimonio }}</span>, Acta No. <span class="text-decoration-underline fw-bold">{{ $matrimonio->no_matrimonio }}</span>, el matrimonio celebrado en fecha <span class="text-decoration-underline fw-bold">({{Carbon\Carbon::parse($matrimonio->fecha_celebracion)->isoFormat('L')}})</span>, por el <span class="text-decoration-underline text-uppercase fw-bold"> {{$matrimonio->celebrante_name}}</span>
        </p>

        <p class="text-uppercase fw-bold">
            Entre:
        </p>
        

        <p class="text-center">
             <span class="text-uppercase fw-bold text-decoration-underline">{{$matrimonio->nombre_esposo}}</span>, documento de identidad.: 
            <span class="text-decoration-underline fw-bold">
                {{$matrimonio->documento_esposo}}</span>
        </p>

        <p class="text-center text-uppercase fw-bold">
            Y 
        </p>

        <p class="text-center">
         <span class="text-uppercase fw-bold text-decoration-underline">{{$matrimonio->nombre_esposa}}</span>,
            documento de identidad.:
            <span class="text-decoration-underline fw-bold">{{$matrimonio->documento_esposa}}</span>
        </p>

        <p>
            Siendo sus testigos:
            <br><br>
            Padrino:
            <span class="text-decoration-underline text-uppercase fw-bold">{{$matrimonio->nombre_padrino}}</span>, documento de identidad.:
            <span class="text-decoration-underline fw-bold">{{$matrimonio->documento_padrino}}</span><br>
            Madrina:
            <span class="text-decoration-underline text-uppercase fw-bold">{{$matrimonio->nombre_madrina}}</span>,
            documento de identidad.:
            <span class="text-decoration-underline fw-bold">{{$matrimonio->documento_madrina}}</span><br><br>


            Transcrita el Acta en los Registros del Estado Civil de la Circunscripción de {{$parroquia->ciudad}} el dia
            <span class="text-decoration-underline">{{Carbon\Carbon::parse($matrimonio->fecha_transcripcion)->isoFormat('DD')}}</span> del mes de <span class="text-decoration-underline">{{Carbon\Carbon::parse($matrimonio->fecha_transcripcion)->isoFormat('MMMM')}}</span> del año <span class="text-decoration-underline">{{Carbon\Carbon::parse($matrimonio->fecha_transcripcion)->isoFormat('Y')}}</span> <span class="fw-bold">({{Carbon\Carbon::parse($matrimonio->fecha_transcripcion)->isoFormat('L')}})</span>, Libro <span class="text-decoration-underline fw-bold">{{$matrimonio->no_libro}}</span>, Folio <span class="text-decoration-underline fw-bold">{{$matrimonio->folio}}</span>, Acta No. <span class="text-decoration-underline fw-bold">{{$matrimonio->no_transcripcion}}</span>
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
