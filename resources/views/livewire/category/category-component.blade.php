<div>

    <x-card cardTitle="Lista de Categorias" >
        <x-slot:cardTools>
            <a href="#" class="btn btn-primary btn-sm">crear</a>
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
                    <button class="btn btn-success btn-sm"><i class="far fa-eye"></i></button>
                    <button class="btn btn-warning btn-sm"><i class="far fa-edit"></i></button>
                    <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                 </td>
            </tr>
            <tr><td>2</td><td>Luisa</td>
                <td class="text-center">
                    <button class="btn btn-success btn-sm"><i class="far fa-eye"></i></button>
                    <button class="btn btn-warning btn-sm"><i class="far fa-edit"></i></button>
                    <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                </td>
            </tr>
            <tr><td>3</td><td>Miguel</td>
                <td class="text-center">
                    <button class="btn btn-success btn-sm"><i class="far fa-eye"></i></button>
                    <button class="btn btn-warning btn-sm"><i class="far fa-edit"></i></button>
                    <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                </td>
            </tr>
            <tr><td>4</td><td>Carlos</td>
                <td class="text-center">
                    <button class="btn btn-success btn-sm"><i class="far fa-eye"></i></button>
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



</div>
