@extends('layouts.admin')

@section('title')Options & Cuts @endsection

@section('content')
  <div class="main-panel">
        <div class="content-wrapper">
              <div class="container-fluid">
                <div class="container">
                <a href="{{route('adminAddOptions&Cuts')}}" style="margin:1rem;" class="btn btn-info">Add New Option Or Cut</a>
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
                            <th scope="col">Picture</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        
                         @foreach($OptionsAndCuts as $OptionsAndCut)
                          <tr>
                            <th scope="row">{{$OptionsAndCut->id}}</th>
                            <td>{{$OptionsAndCut->name}}</td>
                            <td>{{$OptionsAndCut->rate}}</td>
               <td class="text-nowrap"><img src="{{asset('images/'.$OptionsAndCut->picture)}}" width="100" height="100"></td>
                            <td><a type="button" href="{{route('adminEditAddOptions&Cuts',$OptionsAndCut->id)}}" class="btn btn-warning" >Edit</a>
                          <form style="display:none;" method="POST" id="deleteMatériau-{{ $OptionsAndCut->id}}" action="{{ route('adminDeleteMatériau', $OptionsAndCut->id)}}">@csrf</form>
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteMatériauModal-{{ $OptionsAndCut->id}}">Delete</button></td>
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
     

        
@endsection