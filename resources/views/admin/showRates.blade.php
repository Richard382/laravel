@extends('layouts.admin')

@section('title')Add Rates @endsection

@section('content')
  <div class="main-panel">
        <div class="content-wrapper">
              <div class="container-fluid">
                <div class="container">
                <a href="{{route('rates')}}" style="margin:1rem;" class="btn btn-info">Add New Rate</a>
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
                            <th scope="col">Material Name</th>
                            <th scope="col">Color Name</th>
                            <th scope="col">Finishing Name</th>
                            <th scope="col">Category</th>
                            <th scope="col">Rates</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($rates as $rate)
                          <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$rate->material_name}}</td>
                            <td>{{$rate->color_name}}</td>
                            <td>{{$rate->finishing_name}}</td>
                            <td>
                              @if($rate->category != null)
                                {{$rate->category}} mm
                              @endif
                            </td>
                            <td>${{$rate->rate}}</td>
                            <td><a type="button" href="{{route('edit-rates',$rate->id)}}" class="btn btn-warning" >Edit</a>
                          <form style="display:none;" method="POST" id="deleteRate-{{ $rate->id}}" action="{{ route('delete-rates', $rate->id)}}">@csrf</form>
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteRateModal-{{ $rate->id}}">Delete</button></td>
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
@foreach($rates as $rate)
<div class="modal" id="deleteRateModal-{{ $rate->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Rate</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        You are about to delete this Rate : {{$rate->rate}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <form  method="POST" id="deleteRate-{{ $rate->id }}" action="{{ route('delete-rates', $rate->id)}}">@csrf
        <button type="submit" class="btn btn-primary">Yes, Delete it</button>
      </form>
      </div>
    </div>
  </div>
</div>
@endforeach
        
@endsection