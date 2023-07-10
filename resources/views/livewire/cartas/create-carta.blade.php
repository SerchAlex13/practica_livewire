<div>
    <x-button class="ml-4" wire:click="$set('open', true)">
        Crear nueva carta
    </x-button>

    <x-dialog-modal wire:model="open">

        <x-slot name="title">
            Crear nueva carta
        </x-slot>

        <x-slot name="content">
            @if ($image)
                <img src="{{ $image->temporaryUrl() }}">
            @endif

            <div class="mb-4">
                <x-label value="Nombre de la carta"/>
                <x-input type="text" class="w-full" wire:model="nombre"/>

                <x-input-error for="nombre"/>
            </div>

            <div class="mb-4">
                <x-label value="Descripción de la carta"/>
                <textarea class="form-control w-full" rows="6" wire:model.defer="descripcion"></textarea>

                <x-input-error for="descripcion"/>
            </div>

            <div>
                <input type="file" wire:model="image">

                <x-input-error for="image"/>
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$set('open', false)">
                Cancelar
            </x-secondary-button>

            <x-button class="ml-4 disabled:opacity-25" wire:click="save" wire:loading.attr="disabled" wire:target="save">
                <p wire:loading.remove wire:target="save">Crear carta</p>
                <label wire:loading wire:target="save">Cargando <i class="fa-solid fa-spinner fa-spin"></i></label>
            </x-button>

        </x-slot>

    </x-dialog-modal>
</div>
