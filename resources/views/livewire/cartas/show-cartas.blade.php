<div>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <x-table>
            <div class="px-6 py-4">
                <x-input class="w-full" placeholder="Buscar" type="text" wire:model="search"/>
            </div>

            @if ($cartas->count())
                <table class="items-center bg-transparent w-full border-collapse">
                    <thead>
                        <tr>
                            <th class="cursor-pointer px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                                wire:click="order('id')">
                                ID

                                <!-- Sort -->
                                @if ($sort == 'id')
                                    @if ($direction == 'asc')
                                        <i class="fa-solid fa-caret-up"></i>
                                    @else
                                        <i class="fa-solid fa-caret-down"></i>
                                    @endif
                                @else
                                    <i class="fa-solid fa-sort"></i>
                                @endif
                                
                            </th>
                            <th class="cursor-pointer px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                                wire:click="order('nombre')">
                                Nombre

                                <!-- Sort -->
                                @if ($sort == 'nombre')
                                    @if ($direction == 'asc')
                                        <i class="fa-solid fa-sort-alpha-up-alt"></i>
                                    @else
                                        <i class="fa-solid fa-sort-alpha-down-alt"></i>
                                    @endif
                                @else
                                    <i class="fa-solid fa-sort"></i>
                                @endif

                            </th>
                            <th class="cursor-pointer px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                                wire:click="order('descripcion')">
                                Descripcion

                                <!-- Sort -->
                                @if ($sort == 'descripcion')
                                    @if ($direction == 'asc')
                                        <i class="fa-solid fa-sort-alpha-up-alt"></i>
                                    @else
                                        <i class="fa-solid fa-sort-alpha-down-alt"></i>
                                    @endif
                                @else
                                    <i class="fa-solid fa-sort"></i>
                                @endif
                                
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cartas as $carta)
                            <tr>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs p-4">
                                    {{ $carta->id }}
                                </td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs p-4">
                                    {{ $carta->nombre }}
                                </td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs p-4">
                                    {{ $carta->descripcion }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="px-6 py-4">
                    No se encontraron registros
                </div>
            @endif

        </x-table>
    </div>
    
</div>
