
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
        
        <h2 class=" text-center text-uppercase font-bold mb-4 fs-6">Certificado de No Bautizado</h2>

        <div class="fs-6 mb-2">
            <p> Quien Suscribe:
            <span class="text-decoration-underline">&nbsp;&nbsp;{{$parroquia->parroco}}&nbsp;&nbsp;</span> </p>
        </div>

        <p class="text-center text-base">Certifica que:</p>

        <p class="text-base text-center text-uppercase fw-bold text-decoration-underline ">&nbsp;&nbsp;&nbsp;&nbsp;{{ $noBautizado->nombre }}&nbsp;&nbsp;&nbsp;&nbsp;</p>
    
        <p>Que nació el día <span class="text-decoration-underline ">&nbsp;&nbsp;{{ $dian }}&nbsp;&nbsp;</span> del mes de <span class="text-decoration-underline text-capitalize">
            &nbsp;&nbsp;{{$mesn}}&nbsp;&nbsp;</span>
        del año
        <span class="text-decoration-underline text-uppercase">
            &nbsp;&nbsp;{{$anon}}&nbsp;&nbsp;</span>
        @if ($noBautizado->genero==1)
           hijo 
        @else
         hija   
        @endif
        del señor
        <span class="text-decoration-underline text-uppercase fw-bold">
            &nbsp;&nbsp; {{$noBautizado->nombre_padre}}&nbsp;&nbsp;</span> documento de identidad No. <span class="text-decoration-underline text-uppercase fw-bold">&nbsp;&nbsp;{{$noBautizado->cedula_padre}}&nbsp;&nbsp;</span>
        y de la señora
        <span class="text-decoration-underline text-uppercase fw-bold">&nbsp;&nbsp;{{$noBautizado->nombre_madre}}&nbsp;&nbsp; </span> documento de identidad No. <span class="text-decoration-underline text-uppercase fw-bold">&nbsp;&nbsp; {{$noBautizado->cedula_madre}}&nbsp;&nbsp;</span>.<br><br>
        
        <span class="text-center aling-items-center fw-bold">** No se encuentra @if ($noBautizado->genero==1)
            registrado 
         @else
         registrada   
         @endif
         en ninguno de los Libros de Bautismos de esta Parroquia. **
         </span>
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

        <p style="margin-top: 30%;">El presente documento se expide a petición de la parte interesada en
       {{$parroquia->ciudad}}</span>,
            {{$parroquia->provincia}}</span>,
            a los 
            <span class="text-decoration-underline fw-bold">&nbsp;&nbsp;{{$diac}}&nbsp;&nbsp;</span>
            dias del Mes de 
            <span class="text-decoration-underline fw-bold text-capitalize">&nbsp;&nbsp;{{$mesc}}&nbsp;&nbsp;</span>
            del Año 
            <span class="text-decoration-underline fw-bold">&nbsp;&nbsp;{{$anoc}}&nbsp;&nbsp;</span>.
        </p>

       
    <div style="margin-top: 20%;
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
