<div>
    <x-card cardTitle="Lista de Categorias ({{$this->totalRegistros}})" >
        <x-slot:cardTools>
            <a href="#"  class="btn btn-primary" data-toggle="modal" data-target="#modalCategory">
                new Category
            </a>

        </x-slot:cardTools>
        <br/>


        <x-table>
            <X-slot:thead>
                <th>ID</th>
                <th>nombre</th>
                <th class="text-center" width="20%">acciones</th>
            </X-slot:thead>
            <tr>
                <td>1</td> <td>Juan</td>
                <td class="text-center">
                    <button class="btn btn-info btn-sm"><i class="far fa-eye"></i></button>
                    <button class="btn btn-warning btn-sm"><i class="far fa-edit"></i></button>
                    <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                 </td>
            </tr>
            <tr><td>2</td><td>Luisa</td>
                <td class="text-center">
                    <button class="btn btn-info btn-sm"><i class="far fa-eye"></i></button>
                    <button class="btn btn-warning btn-sm"><i class="far fa-edit"></i></button>
                    <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                </td>
            </tr>
            <tr><td>3</td><td>Miguel</td>
                <td class="text-center">
                    <button class="btn btn-info btn-sm"><i class="far fa-eye"></i></button>
                    <button class="btn btn-warning btn-sm"><i class="far fa-edit"></i></button>
                    <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                </td>
            </tr>
            <tr><td>4</td><td>Carlos</td>
                <td class="text-center">
                    <button class="btn btn-info btn-sm"><i class="far fa-eye"></i></button>
                    <button class="btn btn-warning btn-sm"><i class="far fa-edit"></i></button>
                    <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                </td>
            </tr>

            <X-slot:tfoot>
                <th>ID</th>
                <th>Nombres</th>
                <th class="text-center">Acciones</th>
            </X-slot:tfoot>

        </x-table>
    </x-card>

<!---------------------------------------------------------------------------------------- ---------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------- ---------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------- ---------------------------------------------------------------------------------------->
    <!-- Modal -->
<x-modal modalTitle="Category" modalId="modalCategory">
    <x-slot:modalTools>
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="far fa-window-close"></i> </button>
    </x-slot:modalTools>
    <form wire:submit="store" >

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Category</span>
            </div>
            <input wire:model="name" type="text" class="form-control" placeholder="Category">
            @error('name') <div class="alert alert-danger w-100 mt-2">{{ $message }}</div>
            @enderror
        </div>
        <button  class="btn btn-primary float-right">Guardar</button>
    </form>
</x-modal>

</div>
