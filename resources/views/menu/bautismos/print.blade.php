
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


    <title>{{$bautismo->nombre}}</title>
    
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
        
        <h2 class=" text-center text-uppercase font-bold mb-4 fs-6">Certficado de Bautismo</h2>

        <div class="fs-6 mb-2">
            <p> Quien Suscribe:
            <span class="text-decoration-underline">&nbsp;&nbsp;{{$parroquia->parroco}}&nbsp;&nbsp;</span> </p>
        </div>

        <p class="text-center text-base">Certifica que:</p>

        <p class="text-base text-center text-uppercase fw-bold ">**** {{$bautismo->nombre}} ****</p>
       
        @if ($fechan == '11/11/1111')

        <p>Que nació en <span class="text-decoration-underline text-uppercase ">&nbsp;&nbsp;{{$bautismo->lugar_nacimiento}}&nbsp;&nbsp;</span> 
            el día <span class="text-decoration-underline">&nbsp;&nbsp;--&nbsp;&nbsp;</span> del mes de <span class="text-decoration-underline text-capitalize">
        &nbsp;&nbsp;--&nbsp;&nbsp;</span>
        del año
        <span class="text-decoration-underline text-uppercase">&nbsp;&nbsp;
            ----&nbsp;&nbsp;</span>
        @else
        <p>Que nació en <span class="text-decoration-underline text-uppercase ">&nbsp;&nbsp;{{$bautismo->lugar_nacimiento}}&nbsp;&nbsp;</span> 
            el día <span class="text-decoration-underline">&nbsp;&nbsp;{{ $dian }}&nbsp;&nbsp;</span> del mes de <span class="text-decoration-underline text-capitalize">
        &nbsp;&nbsp;{{$mesn}}&nbsp;&nbsp;</span>
        del año<span class="text-decoration-underline text-uppercase">&nbsp;&nbsp;
            {{$anon}}&nbsp;&nbsp;</span>
        @endif


        @if ($bautismo->genero==1)
           hijo 
        @else
         hija   
        @endif
        del señor
        <span class="text-decoration-underline text-uppercase fw-bold">&nbsp;&nbsp;
            {{$bautismo->nombre_padre}}&nbsp;&nbsp;</span>
        y de la señora
        <span class="text-decoration-underline text-uppercase fw-bold">&nbsp;&nbsp;{{$bautismo->nombre_madre}}&nbsp;&nbsp;</span>
        según consta en el Libro de Registro de Nacimiento No.
        <span class="text-decoration-underline">&nbsp;&nbsp;{{$bautismo->no_libro}}&nbsp;&nbsp;</span>
        Folio
        <span class="text-decoration-underline">&nbsp;&nbsp;{{$bautismo->folio}}&nbsp;&nbsp;</span>
        Declaración No.
        <span class="text-decoration-underline">&nbsp;&nbsp;{{$bautismo->no_declaracion}}&nbsp;&nbsp;</span>
        del año
        <span class="text-decoration-underline">&nbsp;&nbsp;{{$bautismo->año}}&nbsp;&nbsp;</span>
        de la
        <span class="text-decoration-underline text-uppercase">&nbsp;&nbsp;{{$bautismo->circunscripcion}}&nbsp;&nbsp;</span>
        Circunscripción del Estado Civil de 
        <span class="text-decoration-underline text-uppercase">&nbsp;&nbsp;{{$bautismo->oficialia}}.&nbsp;&nbsp;</span>
        </p>

        <p>
            Fue         
            @if ($bautismo->genero==1)
                <span class="text-uppercase font-weight-bold">bautizado</span>
            @else
                <span class="text-uppercase font-weight-bold">bautizada</span> 
            @endif

            @if ($fechac == '11/11/1111')
            el día 
            <span class="text-decoration-underline">&nbsp;&nbsp;--&nbsp;&nbsp;</span>
            del mes de 
            <span class="text-decoration-underline text-capitalize">&nbsp;&nbsp;--&nbsp;&nbsp;</span>
            del año
            <span class="text-decoration-underline">&nbsp;&nbsp;----&nbsp;&nbsp;</span>
            @else
            el día 
            <span class="text-decoration-underline">&nbsp;&nbsp;{{$diab}}&nbsp;&nbsp;</span>
            del mes de 
            <span class="text-decoration-underline text-capitalize">&nbsp;&nbsp;{{$mesb}}&nbsp;&nbsp;</span>
            del año
            <span class="text-decoration-underline">&nbsp;&nbsp;{{$anob}}&nbsp;&nbsp;</span>
            @endif
            
            siendo ministro del Sacramento: <br>
            <span class="text-decoration-underline text-uppercase fw-bold">&nbsp;&nbsp;{{$bautismo->celebrante}}&nbsp;&nbsp;</span>.<br><br>
            Padrino:
            <span class="text-decoration-underline text-uppercase fw-bold">&nbsp;&nbsp;{{$bautismo->nombre_padrino}}&nbsp;&nbsp;</span><br>
            Madrina:
            <span class="text-decoration-underline text-uppercase fw-bold">&nbsp;&nbsp;{{$bautismo->nombre_madrina}}&nbsp;&nbsp;</span><br><br>
            Según consta en el Libro de Bautismo No.
            <span class="text-decoration-underline">&nbsp;&nbsp;{{$bautismo->libro_bautismo}}&nbsp;&nbsp;</span> 
            Folio
            <span class="text-decoration-underline">&nbsp;&nbsp;{{$bautismo->folio_bautismo}}&nbsp;&nbsp;</span> 
            acta No.
            <span class="text-decoration-underline">&nbsp;&nbsp;{{$bautismo->no_bautismo}}&nbsp;&nbsp;</span>
        </p>
        <p>
            Notas al margen: 
            <span class="text-decoration-underline">&nbsp;&nbsp;
                {{$bautismo->notas}}&nbsp;&nbsp;

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

       <span class="text-end">
        <div >
        
            <img  src="data:image/png;base64,{{ $codigoQr }}" alt="">
        </div>
    </span>
      
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
