<!-- Deleted inFormation Student -->
<div class="modal fade" id="delete_serv{{$serv->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">delete categorie</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('serv.destroy',$serv->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <h5 style="font-family: 'Cairo', sans-serif;">Are you sure to delete this services !</h5>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Close')}}</button>
                        <button  class="btn btn-danger">{{__('submit')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
