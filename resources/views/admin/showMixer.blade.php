@extends('layouts.admin')

@section('title')Show Mixer Tapes @endsection

@section('content')
  <div class="main-panel">
        <div class="content-wrapper">
              <div class="container-fluid">
                <div class="container">
                <a href="{{route('add-mixer')}}" style="margin:1rem;" class="btn btn-info">Add New Mixer Tape</a>
                </div>
                                  @if(Session::has('success'))
                            <div class="alert alert-success">
                                  {{Session::get('success')}}  
                            </div>
                        @endif
                        @if(Session::has('deleted'))
                            <div class="alert alert-danger">
                                  {{Session::get('deleted')}}  
                            </div>
                        @endif
                <div class="row">
                  <div class="col-lg-1">
                
                
                    </div>  

                  <div class="col-lg-10">
                  
                  <table class="table table-info">
                        <thead>
                          <tr>
							<th scope="col">#</th>
                            <th scope="col">Model</th>
                            <th scope="col">Price</th>
                            <th scope="col">Size</th>
                            <th scope="col">Picture</th>
                            <th scope="col">Action</th>>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($mixers as $mixer)
                          <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$mixer->model}}</td>
                            <td>{{$mixer->price}}</td>
                            <td>{{$mixer->size}}</td>
                            <td><img src="{{asset('images/mixer/'.$mixer->picture)}}" width="100" height="100"></td>
                            <td><a type="button" href="{{route('edit-mixer',$mixer->id)}}" class="btn btn-warning" >Edit</a>
                          <form style="display:none;" method="POST" id="deleteMixer-{{ $mixer->id}}" action="{{ route('delete-mixer', $mixer->id)}}">@csrf</form>
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteMixerModal-{{ $mixer->id}}">Delete</button></td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>


                    </div>  


                  <div class="col-lg-1">
                
                
                    </div>  



                  </div>  


             
              </div>  
          </div>
         
        </div>
     

<!-- Modal -->
@foreach($mixers as $mixer)
<div class="modal" id="deleteMixerModal-{{ $mixer->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Mixer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        You are about to delete this Mixer : {{$mixer->rate}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <form  method="POST" id="deleteMixer-{{ $mixer->id }}" action="{{ route('delete-mixer', $mixer->id)}}">@csrf
        <button type="submit" class="btn btn-primary">Yes, Delete it</button>
      </form>
      </div>
    </div>
  </div>
</div>
@endforeach
        
@endsection