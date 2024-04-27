@props(['modalId'=>'',  'modalTitle'=>'', 'modalTools'=>'', 'modalFooter'=>''])
<div wire:ignore.self class="modal fade" id="{{$modalId}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{$modalTitle}}</h5>
                {{$modalTools}}
            </div>
            <div class="modal-body">
                {{$slot}}
            </div>
        </div>
    </div>
</div>

