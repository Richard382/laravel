@extends('layouts.admin')

@section('title')Update Matériau @endsection

@section('content')
  <div class="main-panel">
        <div class="content-wrapper">
              <div class="container-fluid">
                
                


                <div class="row" style="margin-top: 5rem;">
                <div class="col-lg-1">
                
                
                </div>
                 <div class="col-lg-10" >

                  @if(Session::has('success'))
                            <div class="alert alert-success">
                                  {{Session::get('success')}}  
                            </div>
                        @endif

                  <form method="Post" action="{{route('adminUpdateMatériau',$matériau->id)}}">
                    @csrf
                      <div class="form-group" >
                        <label for="exampleInputEmail1">Matériau :</label>
                        <input type="text" required="" class="form-control" id="exampleInputEmail1" name="matériau" aria-describedby="emailHelp" placeholder="Matériau" value="{{$matériau->name}}">
                        
                      </div>

                   


                      <button type="submit" class="btn btn-primary">Update</button>
                    </form>

                  </div>
                <div class="col-lg-1">
                
                
                </div>
                </div>
              </div>  
          </div>
         
        </div>
     


        
@endsection