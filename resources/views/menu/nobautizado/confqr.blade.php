<x-guest-layout>

                    

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
            @foreach ($parroquias as $p )
                {{$p->parroquia}}
            @endforeach
            <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Si los datos impresos en su acta de no bautizado no coinciden con los datos acontinuación, su acta no tiene valor legal.</p>
        </caption>
        <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                </th>
                <th scope="col" class="px-6 py-3">
                </th>
                
            </tr>
        </thead>
        <tbody>
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                    Nombre.:
                </th>
                <td class="px-6 py-4">
                    {{$impresion->noBautizado->nombre}}
                </td>
              
            </tr>
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                    Sexo.:
                </th>
                <td class="px-6 py-4">
                    @if ($impresion->noBautizado->genero==1)
                        Masculino
                    @else
                        Femenino
                    @endif
                </td>
            <tr>
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                    Fecha de Nacimiento.:
                </th>
                <td class="px-6 py-4">
                    {{\Carbon\Carbon::parse($impresion->noBautizado->fecha_nacimiento)->isoFormat('DD-MM-YYYY')}}
                </td>
            </tr>
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                    Padre.:
                </th>
                <td class="px-6 py-4">
                    {{$impresion->noBautizado->nombre_padre}}
                </td>
            </tr>
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                    Doc. Id. Padre.:
                </th>
                <td class="px-6 py-4">
                    {{$impresion->noBautizado->cedula_padre}}
                </td>
            </tr>
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                    Madre.:
                </th>
                <td class="px-6 py-4">
                    {{$impresion->noBautizado->nombre_madre}}
                </td>
            </tr>
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                    Doc. Id. Madre.:
                </th>
                <td class="px-6 py-4">
                    {{$impresion->noBautizado->cedula_madre}}
                </td>
            </tr>
            
            
            
            

                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                    Fecha de expedición.:
                </th>
                <td class="px-6 py-4">
                    {{\Carbon\Carbon::parse($impresion->created_at)->isoFormat('DD-MM-YYYY, hh:mm:ss A')}}
               
                </td>
            </tr>
        </tbody>
    </table>
</div>

                
</x-guest-layout>