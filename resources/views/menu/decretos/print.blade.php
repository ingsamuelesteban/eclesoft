
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


    <title>Impresión</title>
    
</head>
@foreach ($parroquia as $parroquia  )
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
            <img class="rounded-circle" src="{{ public_path('storage/img/' . $parroquia->logo) }}" alt="{{'Logo de la Parroquia'}}" width="100px" height="100px">
        </p>
        
        <h2 class=" text-center text-uppercase font-bold mb-4 fs-6">solicitud de corrección de acta de bautismo</h2>

        <div class="fs-6 mb-2">
            <p> Su Excelencia, por medio de este oficio solicitamos tenga a bien conceder DECRETO DE CORRECCIÓN a favor del interesado, debido a los errores que contiene su ACTA DE BAUTISMO con relación a su DOCUMENTO CIVIL. </p>
        </div>

        <p class="text-base">Los errores a los que hacemos referencia son:</p>

        <div style="align-items: center">
        <table style="text-align: center; table-layout:fixed; width:100%; border-collapse:collapse; border: 3px solid black;" >
            <tr>
                <th></th>
                <th style="width: 30%; border-collapse:collapse; border: 1px solid black">IGLESIA</th>
                <th style="width: 30%; border-collapse:collapse; border: 1px solid black">CIVIL</th>
            </tr>
            @if ($decreto->nombre_civil)
                <tr>
                    <th style="width: 30%; border-collapse:collapse; border: 1px solid black" class="text-uppercase">Nombre del bautizado</th>
                    <td style=" border-collapse:collapse; border: 1px solid black">{{ $decreto->nombre}}</td>
                    <td style=" border-collapse:collapse; border: 1px solid black" class="text-uppercase">{{$decreto->nombre_civil}}</td>
                </tr> 
            @endif
            @if ($decreto->genero_civil)
            <tr>
                <th style="width: 30%; border-collapse:collapse; border: 1px solid black" class="text-uppercase">Sexo</th>
                @if ($decreto->genero==1)
                <td style=" border-collapse:collapse; border: 1px solid black" class="text-uppercase">MASCULINO</td> 
                @else
                <td style=" border-collapse:collapse; border: 1px solid black" class="text-uppercase">FEMENINO</td> 
                @endif

                @if ($decreto->genero_civil==1)
                <td style=" border-collapse:collapse; border: 1px solid black" class="text-uppercase">MASCULINO</td> 
                @else
                <td style=" border-collapse:collapse; border: 1px solid black" class="text-uppercase">FEMENINO</td> 
                @endif
            </tr> 
        @endif
        @if ($decreto->fecha_nacimiento_civil)
        <tr>
            <th style="width: 30%; border-collapse:collapse; border: 1px solid black" class="text-uppercase">fecha de nacimiento</th>
            <td style=" border-collapse:collapse; border: 1px solid black" class="text-uppercase">{{Carbon\Carbon::parse($decreto->fecha_nacimiento)->isoFormat('L')}}</td>
            <td  style=" border-collapse:collapse; border: 1px solid black" class="text-uppercase">{{Carbon\Carbon::parse($decreto->fecha_nacimiento_civil)->isoFormat('L')}}</td>
        </tr> 
    @endif
    @if ($decreto->nombre_madre_civil)
    <tr>
        <th style="width: 30%; border-collapse:collapse; border: 1px solid black" class="text-uppercase">Nombre de la Madre</th>
        <td  style=" border-collapse:collapse; border: 1px solid black"class="text-uppercase">{{ $decreto->nombre_madre}}</td>
        <td style=" border-collapse:collapse; border: 1px solid black" class="text-uppercase">{{$decreto->nombre_madre_civil}}</td>
    </tr> 
@endif
@if ($decreto->cedula_madre_civil)
<tr>
    <th style="width: 30%; border-collapse:collapse; border: 1px solid black" class="text-uppercase">cédula de la madre</th>
    <td style=" border-collapse:collapse; border: 1px solid black" class="text-uppercase">{{ $decreto->cedula_madre}}</td>
    <td style=" border-collapse:collapse; border: 1px solid black" class="text-uppercase">{{$decreto->cedula_madre_civil}}</td>
</tr> 
@endif
@if ($decreto->nombre_padre_civil)
<tr>
    <th style="width: 30%; border-collapse:collapse; border: 1px solid black" class="text-uppercase">Nombre del Padre</th>
    <td style=" border-collapse:collapse; border: 1px solid black" class="text-uppercase">{{ $decreto->nombre_padre}}</td>
    <td style=" border-collapse:collapse; border: 1px solid black" class="text-uppercase">{{$decreto->nombre_padre_civil}}</td>
</tr> 
@endif
@if ($decreto->cedula_padre_civil)
<tr>
    <th style="width: 30%; border-collapse:collapse; border: 1px solid black" class="text-uppercase">cédula del padre</th>
    <td style=" border-collapse:collapse; border: 1px solid black" class="text-uppercase">{{ $decreto->cedula_padre}}</td>
    <td style=" border-collapse:collapse; border: 1px solid black" class="text-uppercase">{{$decreto->cedula_padre_civil}}</td>
</tr> 
@endif
@if ($decreto->nombre_madrina_civil)
<tr>
    <th style="width: 30%; border-collapse:collapse; border: 1px solid black" class="text-uppercase">Nombre de la Madrina</th>
    <td style=" border-collapse:collapse; border: 1px solid black" class="text-uppercase">{{ $decreto->nombre_madrina}}</td>
    <td style=" border-collapse:collapse; border: 1px solid black" class="text-uppercase">{{$decreto->nombre_madrina_civil}}</td>
</tr> 
@endif
@if ($decreto->nombre_padrino_civil)
<tr>
    <th style="width: 30%; border-collapse:collapse; border: 1px solid black" class="text-uppercase">Nombre del Padrino</th>
    <td style=" border-collapse:collapse; border: 1px solid black" class="text-uppercase">{{ $decreto->nombre_padrino}}</td>
    <td style=" border-collapse:collapse; border: 1px solid black" class="text-uppercase">{{$decreto->nombre_padrino_civil}}</td>
</tr> 
@endif

        </table>
        </div>

       
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
