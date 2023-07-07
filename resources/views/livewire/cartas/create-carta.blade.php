<div>
    <x-button class="ml-4" wire:click="$set('open', true)">
        Crear nueva carta
    </x-button>

    <x-dialog-modal wire:model="open">

        <x-slot name="title">
            Crear nueva carta
        </x-slot>

        <x-slot name="content">
            <div class="mb-4">
                <x-label value="Nombre de la carta"/>
                <x-input type="text" class="w-full" wire:model.defer="nombre"/>
            </div>

            <div class="mb-4">
                <x-label value="Descripción de la carta"/>
                <textarea class="form-control w-full" rows="6" wire:model.defer="descripcion"></textarea>
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$set('open', false)">
                Cancelar
            </x-secondary-button>

            <x-button class="ml-4" wire:click="save">
               Crear carta 
            </x-button>
        </x-slot>

    </x-dialog-modal>
</div>
