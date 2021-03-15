@extends('layouts.admin')

@section('title')Add Service @endsection

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

                  <form method="Post" action="{{route('adminService')}}">
                    @csrf

                      


                      <div class="form-group" >
                        <label for="serviceName">Service Name</label>
                        <input type="text" class="form-control" id="serviceName" name="serviceName" aria-describedby="emailHelp" placeholder="Enter Service Name">
                        
                      </div>

                      <div class="form-group" >
                        <label for="serviceRate">Service Rate :</label>
                        <input type="number" class="form-control" id="serviceRate" name="serviceRate" aria-describedby="emailHelp" placeholder="Enter Service Rate">
                        
                      </div>

                   


                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                  </div>
                <div class="col-lg-1">
                
                
                </div>
                </div>
              </div>  
          </div>
         
        </div>
     


        
@endsection