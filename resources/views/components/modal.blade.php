@props(['mhead'=>'', 'mtools'=>'', 'mfooter'=>''])
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{$mhead}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{$mtools}}
            </div>
            <div class="modal-body">
                {{$slot}}
            </div>
            <div class="modal-footer">
                {{$mfooter}}

            </div>
        </div>
    </div>
</div>

