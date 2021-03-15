@extends('layouts.admin')

@section('title')Edit Rates @endsection

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

                   <form method="Post" action="{{route('adminColoris')}}" enctype="multipart/form-data">
                    @csrf


                     <div class="form-group" >
                        <label for="matériau">Matériau :</label>

            <select id="matériau" name="matériau" class="optiseldev form-control">
      
              <option disabled selected required>Select Material</option>

            @foreach($matériau as $matériaus)   
                    <option value="{{$matériaus->id}}">{{$matériaus->name}}</option>
            @endforeach
                      </select>                        
                      </div>
                      
            <div class="form-group" >
                        <label for="coloris">Coloris :</label>

            <select id="coloris" name="coloris" class="optiseldev form-control">
           
                    
            <option disabled selected required>Select Color</option>
                      </select>                        
                      </div>
                      
                      <div class="form-group" >
                        <label for="colorisName">Coloris Name</label>
                        <input type="text" required="" class="form-control" id="colorisName" name="colorisName" aria-describedby="emailHelp" placeholder="Enter Coloris Name">
                        
                      </div>

                                    <div class="form-group" >
                        <label for="Picture">Picture :</label>
                        <input type="file" required="" class="form-control" id="Picture" name="thumbnail" aria-describedby="emailHelp" placeholder="Enter Option Picture">
                        
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
     

     <script type="text/javascript">
  
 $(document).ready(function () {



                $('#matériau').on('change',function(e) {
        
                //alert('1234');          
                 var cat_id = $('#matériau').val();

//                 e.target.value;

                   // alert(cat_id);

                 $.ajax({
                       
                       url:"{{ route('getColoris') }}",
                       type:"POST",
                       data: {
                            "_token": "{{ csrf_token() }}",   
                        cat_id: cat_id
                        },
                      
                       success:function (data) {

                        console.log("data",data);

                        $('#coloris').empty();
                        $('#finition').empty();

                        for(var i=0;i<data['coloris'].length;i++)
                        {
                          $('#coloris').append('<option value="'+data['coloris'][i]['id']+'">'+data['coloris'][i]['name']+'</option>');
                        }

                        for(var i=0;i<data['finishing'].length;i++)
                        {
                          $('#finition').append('<option value="'+data['finishing'][i]['id']+'">'+data['finishing'][i]['name']+'</option>');
                        }
                        
                       }
                   })
                });



            });

</script>


        
@endsection