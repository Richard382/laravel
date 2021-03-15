                      <div class="form-group" >
                        <label for="finition">Finition :</label>
                        <input type="text" class="form-control" id="finition" name="finition" aria-describedby="emailHelp" placeholder="Finition">
                        
                      </div>

                         <div class="form-group" >
                        <label for="coloris">Coloris : </label>
                        <input type="text" class="form-control" id="coloris" name="coloris" aria-describedby="emailHelp" placeholder="Coloris ">
                        
                      </div>

                      
                      <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                      </div>








                                                @foreach($Matériaus as $Matériau)
                          <tr>
                            <th scope="row">{{$Matériau->id}}</th>
                            <td>{{$Matériau->name}}</td>
                            <td><a type="button" href="{{route('adminEditMatériau',$Matériau->id)}}" class="btn btn-warning" >Edit</a>
                          <form style="display:none;" method="POST" id="deleteMatériau-{{ $Matériau->id}}" action="{{ route('adminDeleteMatériau', $Matériau->id)}}">@csrf</form>
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteMatériauModal-{{ $Matériau->id}}">Delete</button></td>
                          </tr>
                          @endforeach


<!-- Modal -->
@foreach($Matériaus as $Matériau)
<div class="modal" id="deleteMatériauModal-{{ $Matériau->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Matériau</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        You are about to delete this Matériau : {{$Matériau->name}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <form  method="POST" id="deleteMatériau-{{ $Matériau->id }}" action="{{ route('adminDeleteMatériau', $Matériau->id)}}">@csrf
        <button type="submit" class="btn btn-primary">Yes, Delete it</button>
      </form>
      </div>
    </div>
  </div>
</div>
@endforeach
        

                          