<form class="md:w-full space-y-5" wire:submit.prevent='crearComunidad'>

    <h2 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center">Datos de la comunidad</h2>

    <div class="grid grid-cols-2">
        <div>
            <x-input-label for="nombre_comunidad" :value="__('Nombre')" />

            <x-text-input id="nombre_comunidad" class="block mt-1 w-full" type="text" 
            wire:model="nombre_comunidad" 
            :value="old('nombre_comunidad')" placeholder="Ej. Capilla Las Mercedes"/>

            @error('nombre_comunidad')
            <livewire:mostrar-alertas :message="$message" />
        @enderror

        </div>

        <div>
            <x-input-label for="ubicacion" :value="__('Ubicación')" />

            <x-text-input id="ubicacion" class="block mt-1 w-full" type="text" 
            wire:model="ubicacion" 
            :value="old('ubicacion')" placeholder="Ej. Bani"/>
            @error('ubicacion')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
        </div>

    </div>

    <h2 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center mt-2">Encargado o Coordinador</h2>

    <div class="grid grid-cols-2">
        <div>
            <x-input-label for="coordinador" :value="__('Nombre')" />

            <x-text-input id="coordinador" class="block mt-1 w-full" type="text" 
            wire:model="coordinador" 
            :value="old('coordinador')" placeholder="Nombre Completo"/>

            @error('coordinador')
            <livewire:mostrar-alertas :message="$message" />
        @enderror

        </div>

        <div>
            <x-input-label for="telefonoc" :value="__('Telefono')" />

            <x-text-input id="telefonoc" class="block mt-1 w-full" type="text" 
            wire:model="telefonoc" 
            :value="old('telefonoc')" placeholder="Telefono sin Guiones" />
            @error('telefonoc')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
        </div>

    </div>

    <h2 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center mt-2">Encargados de Pastoral</h2>
    <div class="grid grid-cols-2">
        <h3 class="block text-sm text-gray-700 font-bold uppercase  text-center">1. Pastoral Familiar</h3>
        <h3 class="block text-sm text-gray-700 font-bold uppercase  text-center">2. Pastoral Juvenil</h3>
    </div>

    <div class="grid grid-cols-2">

        <div class="grid grid-cols-2">
            <div>
                <x-input-label for="pfamiliar" :value="__('Nombre')" />

                
                <x-text-input id="pfamiliar" class="block mt-1 w-full" type="text" 
                wire:model="pfamiliar" 
                :value="old('pfamiliar')" placeholder="Nombre Completo"/>

                @error('pfamiliar')
                <livewire:mostrar-alertas :message="$message" />
            @enderror

            </div>

            <div>
                <x-input-label for="tfamiliar" :value="__('telefono')" />

                
                <x-text-input id="tfamiliar" class="block mt-1 w-full" type="text" 
                wire:model="tfamiliar" 
                :value="old('tfamiliar')" placeholder="Telefono sin guiones"/>

                @error('tfamiliar')
                <livewire:mostrar-alertas :message="$message" />
            @enderror

            </div>

        </div>
        <div class="grid grid-cols-2">
            <div>
                <x-input-label for="pjuvenil" :value="__('Nombre')" />

                
                <x-text-input id="pjuvenil" class="block mt-1 w-full" type="text" 
                wire:model="pjuvenil" 
                :value="old('pjuvenil')" placeholder="Nombre Completo"/>

                @error('pjuvenil')
                <livewire:mostrar-alertas :message="$message" />
            @enderror
            </div>
            <div>
                <x-input-label for="tjuvenil" :value="__('Telefono')" />

                
                <x-text-input id="tjuvenil" class="block mt-1 w-full" type="text" 
                wire:model="tjuvenil" 
                :value="old('tjuvenil')" placeholder="Telefono sin guiones"/>

                @error('tjuvenil')
                <livewire:mostrar-alertas :message="$message" />
            @enderror
            </div>

        </div>
    </div>

    <div class="grid grid-cols-2">
        <h3 class="block text-sm text-gray-700 font-bold uppercase  text-center">3. Pastoral de Adolescentes</h3>
        <h3 class="block text-sm text-gray-700 font-bold uppercase  text-center">4. Pastoral Vocacional</h3>
    </div>

    <div class="grid grid-cols-2">

        <div class="grid grid-cols-2">
            <div>
                <x-input-label for="padolescentes" :value="__('Nombre')" />

                
                <x-text-input id="padolescentes" class="block mt-1 w-full" type="text" 
                wire:model="padolescentes" 
                :value="old('padolescentes')" placeholder="Nombre Completo"/>

                @error('padolescentes')
                <livewire:mostrar-alertas :message="$message" />
            @enderror

            </div>

            <div>
                <x-input-label for="tadolescentes" :value="__('telefono')" />

                
                <x-text-input id="tadolescentes" class="block mt-1 w-full" type="text" 
                wire:model="tadolescentes" 
                :value="old('tadolescentes')" placeholder="Telefono sin guiones"/>

                @error('tadolescentes')
                <livewire:mostrar-alertas :message="$message" />
            @enderror

            </div>

        </div>
        <div class="grid grid-cols-2">
            <div>
                <x-input-label for="pvocacional" :value="__('Nombre')" />

                
                <x-text-input id="pvocacional" class="block mt-1 w-full" type="text" 
                wire:model="pvocacional" 
                :value="old('pvocacional')" placeholder="Nombre Completo"/>

                @error('pvocacional')
                <livewire:mostrar-alertas :message="$message" />
            @enderror
            </div>
            <div>
                <x-input-label for="tvocacional" :value="__('Telefono')" />

                
                <x-text-input id="tvocacional" class="block mt-1 w-full" type="text" 
                wire:model="tvocacional" 
                :value="old('tvocacional')" placeholder="Telefono sin guiones"/>

                @error('tvocacional')
                <livewire:mostrar-alertas :message="$message" />
            @enderror
            </div>

        </div>
    </div>

    <div class="grid grid-cols-2">
        <h3 class="block text-sm text-gray-700 font-bold uppercase  text-center">5. Pastoral Social</h3>
        <h3 class="block text-sm text-gray-700 font-bold uppercase  text-center">6. Pastoral de Salud</h3>
    </div>

    <div class="grid grid-cols-2">

        <div class="grid grid-cols-2">
            <div>
                <x-input-label for="psocial" :value="__('Nombre')" />

                
                <x-text-input id="psocial" class="block mt-1 w-full" type="text" 
                wire:model="psocial" 
                :value="old('psocial')" placeholder="Nombre Completo"/>

                @error('psocial')
                <livewire:mostrar-alertas :message="$message" />
            @enderror

            </div>

            <div>
                <x-input-label for="tsocial" :value="__('telefono')" />

                
                <x-text-input id="tsocial" class="block mt-1 w-full" type="text" 
                wire:model="tsocial" 
                :value="old('tsocial')" placeholder="Telefono sin guiones"/>

                @error('tsocial')
                <livewire:mostrar-alertas :message="$message" />
            @enderror

            </div>

        </div>
        <div class="grid grid-cols-2">
            <div>
                <x-input-label for="psalud" :value="__('Nombre')" />

                
                <x-text-input id="psalud" class="block mt-1 w-full" type="text" 
                wire:model="psalud" 
                :value="old('psalud')" placeholder="Nombre Completo"/>

                @error('psalud')
                <livewire:mostrar-alertas :message="$message" />
            @enderror
            </div>
            <div>
                <x-input-label for="tsalud" :value="__('Telefono')" />

                
                <x-text-input id="tsalud" class="block mt-1 w-full" type="text" 
                wire:model="tsalud" 
                :value="old('tsalud')" placeholder="Telefono sin guiones"/>

                @error('tsalud')
                <livewire:mostrar-alertas :message="$message" />
            @enderror
            </div>

        </div>
    </div>

    <div class="grid grid-cols-2">
        <h3 class="block text-sm text-gray-700 font-bold uppercase  text-center">7. Pastoral Obras Misionales Pontificias</h3>
        <h3 class="block text-sm text-gray-700 font-bold uppercase  text-center">8. Pastoral de Catequesis</h3>
    </div>

    <div class="grid grid-cols-2">

        <div class="grid grid-cols-2">
            <div>
                <x-input-label for="pmisiones" :value="__('Nombre')" />

                
                <x-text-input id="pmisiones" class="block mt-1 w-full" type="text" 
                wire:model="pmisiones" 
                :value="old('pmisiones')" placeholder="Nombre Completo"/>

                @error('pmisiones')
                <livewire:mostrar-alertas :message="$message" />
            @enderror

            </div>

            <div>
                <x-input-label for="tmisiones" :value="__('telefono')" />

                
                <x-text-input id="tmisiones" class="block mt-1 w-full" type="text" 
                wire:model="tmisiones" 
                :value="old('tmisiones')" placeholder="Telefono sin guiones"/>

                @error('tmisiones')
                <livewire:mostrar-alertas :message="$message" />
            @enderror

            </div>

        </div>
        <div class="grid grid-cols-2">
            <div>
                <x-input-label for="pcatequesis" :value="__('Nombre')" />

                
                <x-text-input id="pcatequesis" class="block mt-1 w-full" type="text" 
                wire:model="pcatequesis" 
                :value="old('pcatequesis')" placeholder="Nombre Completo"/>

                @error('pcatequesis')
                <livewire:mostrar-alertas :message="$message" />
            @enderror
            </div>
            <div>
                <x-input-label for="tcatequesis" :value="__('Telefono')" />

                
                <x-text-input id="tcatequesis" class="block mt-1 w-full" type="text" 
                wire:model="tcatequesis" 
                :value="old('tcatequesis')" placeholder="Telefono sin guiones"/>

                @error('tcatequesis')
                <livewire:mostrar-alertas :message="$message" />
            @enderror
            </div>

        </div>
    </div>

    <div class="grid grid-cols-2">
        <h3 class="block text-sm text-gray-700 font-bold uppercase  text-center">9. Pastoral Liturgica</h3>
        <h3 class="block text-sm text-gray-700 font-bold uppercase  text-center">10. Pastoral Penitenciaria</h3>
    </div>

    <div class="grid grid-cols-2">

        <div class="grid grid-cols-2">
            <div>
                <x-input-label for="pliturgica" :value="__('Nombre')" />

                
                <x-text-input id="pliturgica" class="block mt-1 w-full" type="text" 
                wire:model="pliturgica" 
                :value="old('pliturgica')" placeholder="Nombre Completo"/>

                @error('pliturgica')
                <livewire:mostrar-alertas :message="$message" />
            @enderror

            </div>

            <div>
                <x-input-label for="tliturgica" :value="__('telefono')" />

                
                <x-text-input id="tliturgica" class="block mt-1 w-full" type="text" 
                wire:model="tliturgica" 
                :value="old('tliturgica')" placeholder="Telefono sin guiones"/>

                @error('tliturgica')
                <livewire:mostrar-alertas :message="$message" />
            @enderror

            </div>

        </div>
        <div class="grid grid-cols-2">
            <div>
                <x-input-label for="ppenitenciaria" :value="__('Nombre')" />

                
                <x-text-input id="ppenitenciaria" class="block mt-1 w-full" type="text" 
                wire:model="ppenitenciaria" 
                :value="old('ppenitenciaria')" placeholder="Nombre Completo"/>

                @error('ppenitenciaria')
                <livewire:mostrar-alertas :message="$message" />
            @enderror
            </div>
            <div>
                <x-input-label for="tpenitenciaria" :value="__('Telefono')" />

                
                <x-text-input id="tpenitenciaria" class="block mt-1 w-full" type="text" 
                wire:model="tpenitenciaria" 
                :value="old('tpenitenciaria')" placeholder="Telefono sin guiones"/>

                @error('tpenitenciaria')
                <livewire:mostrar-alertas :message="$message" />
            @enderror
            </div>

        </div>
    </div>

    <div class="grid grid-cols-2">
        <h3 class="block text-sm text-gray-700 font-bold uppercase  text-center">11. Pastoral de la Movilidad Humana</h3>
        <h3 class="block text-sm text-gray-700 font-bold uppercase  text-center">12. Pastoral Educativa</h3>
    </div>

    <div class="grid grid-cols-2">

        <div class="grid grid-cols-2">
            <div>
                <x-input-label for="pmovilidad" :value="__('Nombre')" />

                
                <x-text-input id="pmovilidad" class="block mt-1 w-full" type="text" 
                wire:model="pmovilidad" 
                :value="old('pmovilidad')" placeholder="Nombre Completo"/>

                @error('pmovilidad')
                <livewire:mostrar-alertas :message="$message" />
            @enderror

            </div>

            <div>
                <x-input-label for="tmovilidad" :value="__('telefono')" />

                
                <x-text-input id="tmovilidad" class="block mt-1 w-full" type="text" 
                wire:model="tmovilidad" 
                :value="old('tmovilidad')" placeholder="Telefono sin guiones"/>

                @error('tmovilidad')
                <livewire:mostrar-alertas :message="$message" />
            @enderror

            </div>

        </div>
        <div class="grid grid-cols-2">
            <div>
                <x-input-label for="peducativa" :value="__('Nombre')" />

                
                <x-text-input id="peducativa" class="block mt-1 w-full" type="text" 
                wire:model="peducativa" 
                :value="old('peducativa')" placeholder="Nombre Completo"/>

                @error('peducativa')
                <livewire:mostrar-alertas :message="$message" />
            @enderror
            </div>
            <div>
                <x-input-label for="teducativa" :value="__('Telefono')" />

                
                <x-text-input id="teducativa" class="block mt-1 w-full" type="text" 
                wire:model="teducativa" 
                :value="old('teducativa')" placeholder="Telefono sin guiones"/>

                @error('teducativa')
                <livewire:mostrar-alertas :message="$message" />
            @enderror
            </div>

        </div>
    </div>

    <div class="grid grid-cols-2">
        <h3 class="block text-sm text-gray-700 font-bold uppercase  text-center">13. Pastoral Universitaria</h3>
        <h3 class="block text-sm text-gray-700 font-bold uppercase  text-center">14. Pastoral de la Comunion</h3>
    </div>

    <div class="grid grid-cols-2">

        <div class="grid grid-cols-2">
            <div>
                <x-input-label for="puniversitaria" :value="__('Nombre')" />

                
                <x-text-input id="puniversitaria" class="block mt-1 w-full" type="text" 
                wire:model="puniversitaria" 
                :value="old('puniversitaria')" placeholder="Nombre Completo"/>

                @error('puniversitaria')
                <livewire:mostrar-alertas :message="$message" />
            @enderror

            </div>

            <div>
                <x-input-label for="tuniversitaria" :value="__('telefono')" />

                
                <x-text-input id="tuniversitaria" class="block mt-1 w-full" type="text" 
                wire:model="tuniversitaria" 
                :value="old('tuniversitaria')" placeholder="Telefono sin guiones"/>

                @error('tuniversitaria')
                <livewire:mostrar-alertas :message="$message" />
            @enderror

            </div>

        </div>
        <div class="grid grid-cols-2">
            <div>
                <x-input-label for="pcomunion" :value="__('Nombre')" />

                
                <x-text-input id="pcomunion" class="block mt-1 w-full" type="text" 
                wire:model="pcomunion" 
                :value="old('pcomunion')" placeholder="Nombre Completo"/>

                @error('pcomunion')
                <livewire:mostrar-alertas :message="$message" />
            @enderror
            </div>
            <div>
                <x-input-label for="tcomunion" :value="__('Telefono')" />

                
                <x-text-input id="tcomunion" class="block mt-1 w-full" type="text" 
                wire:model="tcomunion" 
                :value="old('tcomunion')" placeholder="Telefono sin guiones"/>

                @error('tcomunion')
                <livewire:mostrar-alertas :message="$message" />
            @enderror
            </div>

        </div>
    </div>

    <div class="grid grid-cols-2">
        <h3 class="block text-sm text-gray-700 font-bold uppercase  text-center">15. Pastoral del Ecumenismo</h3>
        <h3 class="block text-sm text-gray-700 font-bold uppercase  text-center">16. Pastoral del Medio Ambiente</h3>
    </div>

    <div class="grid grid-cols-2">

        <div class="grid grid-cols-2">
            <div>
                <x-input-label for="pecumenismo" :value="__('Nombre')" />

                
                <x-text-input id="pecumenismo" class="block mt-1 w-full" type="text" 
                wire:model="pecumenismo" 
                :value="old('pecumenismo')" placeholder="Nombre Completo"/>

                @error('pecumenismo')
                <livewire:mostrar-alertas :message="$message" />
            @enderror

            </div>

            <div>
                <x-input-label for="tecumenismo" :value="__('telefono')" />

                
                <x-text-input id="tecumenismo" class="block mt-1 w-full" type="text" 
                wire:model="tecumenismo" 
                :value="old('tecumenismo')" placeholder="Telefono sin guiones"/>

                @error('tecumenismo')
                <livewire:mostrar-alertas :message="$message" />
            @enderror

            </div>

        </div>
        <div class="grid grid-cols-2">
            <div>
                <x-input-label for="pambiente" :value="__('Nombre')" />

                
                <x-text-input id="pambiente" class="block mt-1 w-full" type="text" 
                wire:model="pambiente" 
                :value="old('pambiente')" placeholder="Nombre Completo"/>

                @error('pambiente')
                <livewire:mostrar-alertas :message="$message" />
            @enderror
            </div>
            <div>
                <x-input-label for="tambiente" :value="__('Telefono')" />

                
                <x-text-input id="tambiente" class="block mt-1 w-full" type="text" 
                wire:model="tambiente" 
                :value="old('tambiente')" placeholder="Telefono sin guiones"/>

                @error('tambiente')
                <livewire:mostrar-alertas :message="$message" />
            @enderror
            </div>

        </div>
    </div>
   

        <x-primary-button class="w-full justify-center">
            {{ __('Guardar') }}
        </x-primary-button>
        
    
 </form>