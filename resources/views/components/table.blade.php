@props(['thead'=> '', 'tfoot'=>''])
<div class="mb-3 d-flex justify-content-between">
    <div>
        <span>Mostrar</span>
        <select wire:model.live='cant'  class="form-control">
            <option value="1">1</option>
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="20">20</option>
            <option value="50">50</option>
            <option value="100">100</option>
            <option value="200">200</option>
        </select>
    </div>
    <div>
        <input type="search"  wire:model.live='search'  class="form-control" placeholder="Buscar...">
    </div>
</div>

<div class="table-responsive p-3 table-sm">
    <table class="table table-bordered">
        <thead>
        <tr>
            {{$thead}}
        </tr>
        </thead>
        <tbody>
        {{$slot}}
        </tbody>
        <tfoot>
        {{$tfoot}}
        </tfoot>
    </table>
</div>


