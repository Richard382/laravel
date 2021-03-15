@extends('layouts.admin')

@section('title')Services @endsection

@section('content')
  <div class="main-panel">
        <div class="content-wrapper">
              <div class="container-fluid">
                <div class="container">
                <a href="{{route('adminAddService')}}" style="margin:1rem;" class="btn btn-info">Add New Service</a>
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
                            <th scope="col">Name</th>
                            <th scope="col">Rate</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($services as $service)
                          <tr>
                            <th scope="row">{{$service->id}}</th>
                            <td>{{$service->name}}</td>
                            <td>{{$service->rate}}</td>
                            <td><a type="button" href="{{route('adminEditService',$service->id)}}" class="btn btn-warning" >Edit</a>
                          <form style="display:none;" method="POST" id="deleteService-{{ $service->id}}" action="{{ route('adminDeleteService', $service->id)}}">@csrf</form>
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteServiceModal-{{ $service->id}}">Delete</button></td>
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
@foreach($services as $service)
<div class="modal" id="deleteServiceModal-{{ $service->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Service</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        You are about to delete this service : {{$service->name}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <form  method="POST" id="deleteService-{{ $service->id }}" action="{{ route('adminDeleteService', $service->id)}}">@csrf
        <button type="submit" class="btn btn-primary">Yes, Delete it</button>
      </form>
      </div>
    </div>
  </div>
</div>
@endforeach
        
@endsection