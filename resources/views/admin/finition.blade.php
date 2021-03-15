@extends('layouts.admin')

@section('title')Show Finitions @endsection

@section('content')
  <div class="main-panel">
        <div class="content-wrapper">
              <div class="container-fluid">
                <div class="container">
                <a href="{{route('adminAddFinition')}}" style="margin:1rem;" class="btn btn-info">Add Finitions</a>
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
                            <th scope="col">Material</th>
                            <th scope="col">Coloris</th>
                            <th scope="col">Name</th>
                            
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($finition as $finitions)
                          <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$finitions->matériaus->name}}</td>
                            <td>{{$finitions->coloris->name}}</td>
                            <td>{{$finitions->name}}</td>
                            
                            <td><a type="button" href="{{route('adminEditFinition',$finitions->id)}}" class="btn btn-warning" >Edit</a>
                          <form style="display:none;" method="POST" id="deleteFinition-{{ $finitions->id}}" action="{{ route('adminDeleteFinition', $finitions->id)}}">@csrf</form>
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteFinitionModal-{{ $finitions->id}}">Delete</button></td>
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
@foreach($finition as $finitions)
<div class="modal" id="deleteFinitionModal-{{ $finitions->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Finition</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        You are about to delete this finition : {{$finitions->name}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <form  method="POST" id="deleteFinition-{{ $finitions->id }}" action="{{ route('adminDeleteFinition', $finitions->id)}}">@csrf
        <button type="submit" class="btn btn-primary">Yes, Delete it</button>
      </form>
      </div>
    </div>
  </div>
</div>
@endforeach

@endsection