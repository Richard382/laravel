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

                  <form method="Post" action="{{route('adminPostAddOptions&Cuts')}}" enctype="multipart/form-data">
                    @csrf

                      
                      <div class="form-group" >
                        <label for="matériau">Matériau :</label>

            <select id="matériau" name="matériau" class="optiseldev form-control">
            @foreach($matériau as $matériaus)   
                    <option value="{{$matériaus->id}}">{{$matériaus->name}}</option>
            @endforeach
                      </select>                        
                      </div>
                      
                      <div class="form-group" >
                        <label for="coloris">Coloris :</label>

            <select id="coloris" name="coloris" class="optiseldev form-control">
            @foreach($coloris as $colori)   
                    <option value="{{$colori->id}}">{{$colori->name}}</option>
            @endforeach
                      </select>                        
                      </div>

                      <div class="form-group" >
                        <label for="optionName">Option or Cuts Name</label>
                        <input type="text" class="form-control" id="optionName" name="optionName" aria-describedby="emailHelp" placeholder="Enter Option Or Cuts Name">
                        
                      </div>

                      <div class="form-group" >
                        <label for="optionRate">Option or Cuts Rate :</label>
                        <input type="number" class="form-control" id="optionRate" name="optionRate" aria-describedby="emailHelp" placeholder="Enter Option Rate">
                        
                      </div>

                      <div class="form-group" >
                        <label for="optionPicture">Picture :</label>
                        <input type="file" class="form-control" id="optionPicture" name="thumbnail" aria-describedby="emailHelp" placeholder="Enter Option Picture">
                        
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