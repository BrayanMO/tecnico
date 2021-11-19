<div>
    <x-jet-button wire:click="$set('open',true)"
        class="bg-indigo-600 rounded-md hover:bg-indigo-500 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-80">
        Editar
    </x-jet-button>

    {{-- nuevo boton --}}
    {{-- <a wire:click="$set('open',true) class="font-bold text-white py-2 px-4 rounded cursor-pointer bg-blue-600 hover:bg-blue-300" >
        <i class="fa fa-edit "></i>
    </a> --}}
    {{-- nuevo boton fin --}}


    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            Editar servicio
        </x-slot>
        <x-slot name="content">
            {{-- editar --}}
            
            {{-- editar fin --}}
        </x-slot>
        <x-slot name="footer">
        </x-slot>
    </x-jet-dialog-modal>
</div>
