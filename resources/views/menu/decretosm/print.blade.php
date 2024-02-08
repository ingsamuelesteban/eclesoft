
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


    <title>Impresión Decreto</title>
    
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
            <img class="rounded-circle" src="{{ global_asset('storage/img/' . $parroquia->logo) }}" alt="{{'Logo de la Parroquia'}}" width="100px" height="100px">
        </p>
        
        <h2 class=" text-center text-uppercase font-bold mb-2 fs-6">solicitud de corrección de acta de matrimonio</h2>

        <div class="fs-6 mb-2">
            <p> Su Excelencia, por medio de este oficio solicitamos tenga a bien conceder decreto DE CORRECCIÓN a favor del matrimonio entre
           @if ($decretom->nombre_esposa_civil && $decretom->nombre_esposo_civil)
           <span style="text-transform: uppercase; font-weight:bold">{{$decretom->nombre_esposa_civil}}</span> y <span style="text-transform: uppercase; font-weight:bold">{{$decretom->nombre_esposo_civil}}</span>,
           @elseif ($decretom->nombre_esposa_civil)
           <span style="text-transform: uppercase; font-weight:bold">{{$decretom->nombre_esposa_civil}}</span> y <span style="text-transform: uppercase; font-weight:bold">{{$decretom->nombre_esposo}}</span>,
           @elseif ($decretom->nombre_esposo_civil)
           <span style="text-transform: uppercase; font-weight:bold">{{$decretom->nombre_esposa}}</span> y <span style="text-transform: uppercase; font-weight:bold">{{$decretom->nombre_esposo_civil}}</span>,
           @else
           <span style="text-transform: uppercase; font-weight:bold">{{$decretom->nombre_esposa}}</span> y <span style="text-transform: uppercase; font-weight:bold">{{$decretom->nombre_esposo}}</span>,
           @endif debido a los errores que contiene su ACTA DE MATRIMONIO con relación a sus DOCUMENTOS CIVILES. </p>
        </div>

        <p class="text-base">Los errores a los que hacemos referencia son:</p>

        <div style="align-items: center">
            <table style="text-align: center; table-layout:fixed; width:100%; border-collapse:collapse; border: 3px solid  black; font-size:14px;" >
                <tr>
                    <th></th>
                    <th style="width: 30%; border-collapse:collapse; border: 1px solid  black; font-size:14px">IGLESIA</th>
                    <th style="width: 30%; border-collapse:collapse; border: 1px solid  black; font-size:14px">CIVIL</th>
                </tr>
                @if ($decretom->nombre_esposa_civil)
                <tr>
                    <th style="width: 30%; border-collapse:collapse; border: 1px solid  black; font-size:14px" class="uppercase">Nombre de la Esposa</th>
                    <td  style=" border-collapse:collapse; border: 1px solid  black; font-size:14px"class="uppercase">{{ $decretom->nombre_esposa}}</td>
                    <td style=" border-collapse:collapse; border: 1px solid  black; font-size:14px" class="uppercase">{{$decretom->nombre_esposa_civil}}</td>
                </tr> 
                @endif
                @if ($decretom->cedula_esposa_civil)
                <tr>
                    <th style="width: 30%; border-collapse:collapse; border: 1px solid  black; font-size:14px" class="uppercase">Cédula de la Esposa</th>
                    <td  style=" border-collapse:collapse; border: 1px solid  black; font-size:14px"class="uppercase">{{ $decretom->cedula_esposa}}</td>
                    <td style=" border-collapse:collapse; border: 1px solid  black; font-size:14px" class="uppercase">{{$decretom->cedula_esposa_civil}}</td>
                </tr> 
                @endif
                @if ($decretom->fecha_nacimiento_esposa_civil)
                <tr>
                    <th style="width: 30%; border-collapse:collapse; border: 1px solid  black; font-size:14px" class="uppercase">Fecha de Nacimiento de la Esposa</th>
                    <td style=" border-collapse:collapse; border: 1px solid  black; font-size:14px" class="uppercase">{{Carbon\Carbon::parse($decretom->fecha_nacimiento_esposa)->isoFormat('L')}}</td>
                    <td  style=" border-collapse:collapse; border: 1px solid  black; font-size:14px" class="uppercase">{{Carbon\Carbon::parse($decretom->fecha_nacimiento_esposa_civil)->isoFormat('L')}}</td>
                </tr> 
                @endif
                @if ($decretom->lugar_nacimiento_esposa_civil)
                <tr>
                    <th style="width: 30%; border-collapse:collapse; border: 1px solid  black; font-size:14px" class="uppercase">Lugar de Nacimiento de la Esposa</th>
                    <td  style=" border-collapse:collapse; border: 1px solid  black; font-size:14px"class="uppercase">{{ $decretom->lugar_nacimiento_esposa}}</td>
                    <td style=" border-collapse:collapse; border: 1px solid  black; font-size:14px" class="uppercase">{{$decretom->lugar_nacimiento_esposa_civil}}</td>
                </tr> 
                @endif
                @if ($decretom->nombre_esposo_civil)
                <tr>
                    <th style="width: 30%; border-collapse:collapse; border: 1px solid  black; font-size:14px" class="uppercase">Nombre del Esposo</th>
                    <td  style=" border-collapse:collapse; border: 1px solid  black; font-size:14px"class="uppercase">{{ $decretom->nombre_esposo}}</td>
                    <td style=" border-collapse:collapse; border: 1px solid  black; font-size:14px" class="uppercase">{{$decretom->nombre_esposo_civil}}</td>
                </tr> 
                @endif
                @if ($decretom->cedula_esposo_civil)
                <tr>
                    <th style="width: 30%; border-collapse:collapse; border: 1px solid  black; font-size:14px" class="uppercase">Cédula del Esposo</th>
                    <td  style=" border-collapse:collapse; border: 1px solid  black; font-size:14px"class="uppercase">{{ $decretom->cedula_esposo}}</td>
                    <td style=" border-collapse:collapse; border: 1px solid  black; font-size:14px" class="uppercase">{{$decretom->cedula_esposo_civil}}</td>
                </tr> 
                @endif
                @if ($decretom->fecha_nacimiento_esposo_civil)
                <tr>
                    <th style="width: 30%; border-collapse:collapse; border: 1px solid  black; font-size:14px" class="uppercase">Fecha de Nacimiento del Esposo</th>
                    <td style=" border-collapse:collapse; border: 1px solid  black; font-size:14px" class="uppercase">{{Carbon\Carbon::parse($decretom->fecha_nacimiento_esposo)->isoFormat('L')}}</td>
                    <td  style=" border-collapse:collapse; border: 1px solid  black; font-size:14px" class="uppercase">{{Carbon\Carbon::parse($decretom->fecha_nacimiento_esposo_civil)->isoFormat('L')}}</td>
                </tr> 
                @endif

                @if ($decretom->lugar_nacimiento_esposo_civil)
                <tr>
                    <th style="width: 30%; border-collapse:collapse; border: 1px solid  black; font-size:14px" class="uppercase">Lugar de Nacimiento del Esposo</th>
                    <td  style=" border-collapse:collapse; border: 1px solid  black; font-size:14px"class="uppercase">{{ $decretom->lugar_nacimiento_esposo}}</td>
                    <td style=" border-collapse:collapse; border: 1px solid  black; font-size:14px" class="uppercase">{{$decretom->lugar_nacimiento_esposo_civil}}</td>
                </tr> 
                @endif
            
        
        @if ($decretom->nombre_madre_esposa_civil)
        <tr>
            <th style="width: 30%; border-collapse:collapse; border: 1px solid  black; font-size:14px" class="uppercase">Nombre Madre de la esposa</th>
            <td  style=" border-collapse:collapse; border: 1px solid  black; font-size:14px"class="uppercase">{{ $decretom->nombre_madre_esposa}}</td>
            <td style=" border-collapse:collapse; border: 1px solid  black; font-size:14px" class="uppercase">{{$decretom->nombre_madre_esposa_civil}}</td>
        </tr> 
        @endif
    @if ($decretom->nombre_padre_esposa_civil)
    <tr>
        <th style="width: 30%; border-collapse:collapse; border: 1px solid  black; font-size:14px" class="uppercase">Nombre Padre de la Esposa</th>
        <td style=" border-collapse:collapse; border: 1px solid  black; font-size:14px" class="text-uppercase">{{ $decretom->nombre_padre_esposa}}</td>
        <td style=" border-collapse:collapse; border: 1px solid  black; font-size:14px" class="text-uppercase">{{$decretom->nombre_padre_esposa_civil}}</td>
    </tr> 
    @endif
    @if ($decretom->nombre_madre_esposo_civil)
    <tr>
        <th style="width: 30%; border-collapse:collapse; border: 1px solid  black; font-size:14px" class="uppercase">Nombre Madre del Esposo</th>
        <td  style=" border-collapse:collapse; border: 1px solid  black; font-size:14px"class="uppercase">{{ $decretom->nombre_madre_esposo}}</td>
        <td style=" border-collapse:collapse; border: 1px solid  black; font-size:14px" class="uppercase">{{$decretom->nombre_madre_esposo_civil}}</td>
    </tr> 
    @endif
@if ($decretom->nombre_padre_esposo_civil)
<tr>
    <th style="width: 30%; border-collapse:collapse; border: 1px solid  black; font-size:14px" class="uppercase">Nombre Padre del Esposo</th>
    <td style=" border-collapse:collapse; border: 1px solid  black; font-size:14px" class="text-uppercase">{{ $decretom->nombre_padre_esposo}}</td>
    <td style=" border-collapse:collapse; border: 1px solid  black; font-size:14px" class="text-uppercase">{{$decretom->nombre_padre_esposo_civil}}</td>
</tr> 
@endif
    @if ($decretom->nombre_madrina_civil)
    <tr>
        <th style="width: 30%; border-collapse:collapse; border: 1px solid  black; font-size:14px" class="uppercase">Nombre de la Madrina</th>
        <td style=" border-collapse:collapse; border: 1px solid  black; font-size:14px" class="uppercase">{{ $decretom->nombre_madrina}}</td>
        <td style=" border-collapse:collapse; border: 1px solid  black; font-size:14px" class="uppercase">{{$decretom->nombre_madrina_civil}}</td>
    </tr> 
    @endif
    @if ($decretom->cedula_madrina_civil)
    <tr>
        <th style="width: 30%; border-collapse:collapse; border: 1px solid  black; font-size:14px" class="uppercase">Cédula de la Madrina</th>
        <td style=" border-collapse:collapse; border: 1px solid  black; font-size:14px" class="uppercase">{{ $decretom->cedula_madrina}}</td>
        <td style=" border-collapse:collapse; border: 1px solid  black; font-size:14px" class="uppercase">{{$decretom->cedula_madrina_civil}}</td>
    </tr> 
    @endif
    @if ($decretom->nombre_padrino_civil)
    <tr>
        <th style="width: 30%; border-collapse:collapse; border: 1px solid  black; font-size:14px" class="uppercase">Nombre del Padrino</th>
        <td style=" border-collapse:collapse; border: 1px solid  black; font-size:14px; font-size:14px" class="text-uppercase">{{ $decretom->nombre_padrino}}</td>
        <td style=" border-collapse:collapse; border: 1px solid  black; font-size:14px" class="uppercase">{{$decretom->nombre_padrino_civil}}</td>
    </tr> 
    @endif
    @if ($decretom->cedula_padrino_civil)
    <tr>
        <th style="width: 30%; border-collapse:collapse; border: 1px solid  black; font-size:14px" class="uppercase">Cédula del Padrino</th>
        <td style=" border-collapse:collapse; border: 1px solid  black; font-size:14px" class="text-uppercase">{{ $decretom->cedula_padrino}}</td>
        <td style=" border-collapse:collapse; border: 1px solid  black; font-size:14px" class="text-uppercase">{{$decretom->cedula_padrino_civil}}</td>
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
            background-color:  black; font-size:14px;
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
