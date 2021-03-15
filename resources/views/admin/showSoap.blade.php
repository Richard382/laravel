@extends('layouts.admin')

@section('title')Show Soaps @endsection

@section('content')
  <div class="main-panel">
        <div class="content-wrapper">
              <div class="container-fluid">
                <div class="container">
                <a href="{{route('add-soap')}}" style="margin:1rem;" class="btn btn-info">Add New Soap Dispenser</a>
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
                          @foreach($soaps as $soap)
                          <tr>
                          	
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$soap->model}}</td>
                            <td>{{$soap->price}}</td>
                            <td>{{$soap->size}}</td>
                            <td><img src="{{asset('images/soap/'.$soap->picture)}}" width="100" height="100"></td>
                            <td><a type="button" href="{{route('edit-soap',$soap->id)}}" class="btn btn-warning">Edit</a>
                          <form style="display:none;" method="POST" id="deleteSoap-{{ $soap->id}}" action="{{ route('delete-soap', $soap->id)}}">@csrf</form>
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteSoapModal-{{ $soap->id}}">Delete</button></td>
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
@foreach($soaps as $soap)
<div class="modal" id="deleteSoapModal-{{ $soap->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Sink</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        You are about to delete this Rate : {{$soap->model}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <form  method="POST" id="deleteSoap-{{ $soap->id }}" action="{{ route('delete-soap', $soap->id)}}">@csrf
        <button type="submit" class="btn btn-primary">Yes, Delete it</button>
      </form>
      </div>
    </div>
  </div>
</div>
@endforeach
        
@endsection