@extends('layouts.admin')

@section('title')Show Sinks @endsection

@section('content')
  <div class="main-panel">
        <div class="content-wrapper">
              <div class="container-fluid">
                <div class="container">
                <a href="{{route('add-sink')}}" style="margin:1rem;" class="btn btn-info">Add New Sink</a>
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
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($sinks as $sink)
                          <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$sink->model}}</td>
                            <td>{{$sink->price}}</td>
                            <td>{{$sink->size}}</td>
                            <td><img src="{{asset('images/sink/'.$sink->picture)}}" width="100" height="100"></td>
                            <td><a type="button" href="{{route('edit-sink',$sink->id)}}" class="btn btn-warning">Edit</a>
                          <form style="display:none;" method="POST" id="deleteSink-{{ $sink->id}}" action="{{ route('delete-sink', $sink->id)}}">@csrf</form>
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteSinkModal-{{ $sink->id}}">Delete</button></td>
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
@foreach($sinks as $sink)
<div class="modal" id="deleteSinkModal-{{ $sink->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Sink</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        You are about to delete this Rate : {{$sink->model}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <form  method="POST" id="deleteSink-{{ $sink->id }}" action="{{ route('delete-sink', $sink->id)}}">@csrf
        <button type="submit" class="btn btn-primary">Yes, Delete it</button>
      </form>
      </div>
    </div>
  </div>
</div>
@endforeach
        
@endsection