<div>
    <h1>component hello inicio app</h1>
    <x-card cardTitle="hello title" >
        <x-slot:cardTools>
            <a href="#" class="btn btn-primary btn-sm">crear</a>
        </x-slot:cardTools>


        <br/>
        <br/>
        <br/>
         <x-table>
             <X-slot:thead>
                     <th>ID</th>
                     <th>Nombres</th>
                     <th>Apellido Paterno</th>
                     <th>Apellido Materno</th>
                     <th>Acciones</th>
             </X-slot:thead>
             <tr>
                 <td>1</td>                  <td>Juan</td>                  <td>Pérez</td>
                 <td>López</td>
                 <td><button>Editar</button> <button>Eliminar</button></td>
             </tr>


             <tr><td>2</td><td>Luisa</td><td>Martín</td><td>García</td><td><button>Editar</button> <button>Eliminar</button></td></tr>
             <tr><td>3</td><td>Miguel</td><td>Rodríguez</td><td>Sánchez</td><td><button>Editar</button> <button>Eliminar</button></td></tr>
             <tr><td>4</td><td>Carlos</td><td>Jiménez</td><td>Ruiz</td><td><button>Editar</button> <button>Eliminar</button></td></tr>

             <X-slot:tfoot>
                 <th>ID</th>
                 <th>Nombres</th>
                 <th>Apellido Paterno</th>
                 <th>Apellido Materno</th>
                 <th>Acciones</th>
             </X-slot:tfoot>

          </x-table>
     </x-card>



 </div>
