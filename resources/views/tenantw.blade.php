<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eclesoft</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <div class="py-0">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
        

            <div class="flex flex-col md:flex-col items-center">
                <div class="my-1 w-74">
                    <img src="{{ global_asset('img/e2.png')}}" alt="{{'Logo de la Aplicacion'}}">
            </div>
                <a href="{{ route('login')}}" class="bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center justify-center ">Iniciar Sesion</a>
                
                
                                    
</div>
</div>
</div>
</div>
</div>
   

    <footer class="text-center p-5 text-gray-500 font-bold uppercase">Eclesoft {{now()->year}}, Todos los derechos reservados Ing. Samuel Esteban.</footer>
</body>
</html>
   
