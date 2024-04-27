<div>
    <x-card cardTitle="Lista de Categorias ({{$this->totalRegistros}})" >
        <x-slot:cardTools>
            <a href="#"  class="btn btn-primary" data-toggle="modal" data-target="#modalCategory">
                new Category
            </a>
        </x-slot:cardTools>
        <br/>


        <x-table>

            <x-slot:thead>
                <th>ID</th>
                <th>nombre</th>
                <th class="text-center" width="20%">acciones</th>
            </x-slot:thead>
            @forelse( $categories as $category )
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td class="text-center">
                        <a href="#" class="btn btn-info btn-sm"><i class="far fa-eye"></i></a>
                        <a href="#" wire:click="edit({{$category->id}})" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a>
                        <a href="#"  class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">No hay registros</td>
                    </tr>

            @endforelse

            <x-slot:tfoot>
                <th>ID</th>
                <th>Nombres</th>
                <th class="text-center">Acciones</th>
            </x-slot:tfoot>

        </x-table>
        <x-slot:cardFooter>
            {{$categories->links()}}
        </x-slot:cardFooter>
    </x-card>

<!---------------------------------------------------------------------------------------- ---------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------- ---------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------- ---------------------------------------------------------------------------------------->
    <!-- Modal -->
<x-modal modalTitle="Category" modalId="modalCategory">
    <x-slot:modalTools>
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="far fa-window-close"></i> </button>
    </x-slot:modalTools>
    <form wire:submit="{{ $Id==0 ? 'store':'update'}}" >
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Category</span>
            </div>
            <input wire:model="name" type="text" class="form-control" placeholder="Category">
            @error('name') <div class="alert alert-danger w-100 mt-2">{{ $message }}</div>
            @enderror
        </div>
        <button  class="btn btn-primary float-right">{{ $Id==0 ? 'Guardar':'Editar'}}</button>
    </form>
</x-modal>

</div>
