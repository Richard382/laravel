@extends('layouts.admin')

@section('title')Edit Mixer @endsection

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

                  <form method="Post" action="{{route('edit-mixer-post',$sink->id)}}" enctype="multipart/form-data">
                    @csrf
                     
                      <div class="form-group" >
                        <label for="model">Model</label>
                        <input type="text" class="form-control" id="model" value="{{$sink->model}}" name="model" aria-describedby="emailHelp" placeholder="Enter Model">
                      </div>

                      <div class="form-group" >
                        <label for="price">Price</label>
                        <input type="number" class="form-control" id="price" name="price" aria-describedby="emailHelp" value="{{$sink->price}}" placeholder="Enter Price">
                      </div>

                      <div class="form-group" >
                        <label for="size">Size</label>
                        <input type="text" class="form-control" id="size" value="{{$sink->size}}" name="size" aria-describedby="emailHelp" placeholder="Enter Size">
                      </div>

                      <div class="form-group" >
                        <label for="picture">Picture</label>
                        <input type="file" class="form-control" id="picture" value="{{$sink->picture}}" name="picture" aria-describedby="emailHelp" required="" placeholder="Enter Picture">
                        
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