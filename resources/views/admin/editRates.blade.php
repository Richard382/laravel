@extends('layouts.admin')

@section('title')edit Rates @endsection

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

                  <form method="Post" action="{{route('post-edit-rates',$rates->id)}}">
                    @csrf
                      <div class="form-group" >
                        <label for="matériau">Matériau :</label>

            <select id="matériau" name="matériau"  class="optiseldev form-control" required>
      
              <option value="" disabled selected >Select Material</option>
           

            @foreach($matériau as $matériaus)
               
                    <option  value="{{$matériaus->id}}">{{$matériaus->name}}</option>
            @endforeach
                      </select>                        
                      </div>
                      
                      <div class="form-group" >
                        <label for="coloris">Coloris :</label>

            <select id="coloris" name="coloris" class="optiseldev form-control">
           
                    
            <option value="" disabled selected >Select Color</option>
                      </select>                        
                      </div>

                      <div class="form-group" >
                        <label for="finitionName">Finition Name</label>
                        <select class="optiseldev form-control" required name="finition" id="finition">
                            <option value="" disabled selected required>Select Finishing</option>
                                    </select>  
          

                        
                      </div>

                      <div class="form-group" >
                        <label for="Rate">Rate :</label>
                        <input type="number" required="" value="{{$rates->rate}}" class="form-control" id="finitionRate" name="Rate" aria-describedby="emailHelp" placeholder="Enter Rate">
                        
                      </div>

                       <div class="form-group">
                        <label for="exampleFormControlSelect2"> Choose Category:</label>
                        <select name="category" class="form-control" id="exampleFormControlSelect2">
                          <option value="{{$rates->category}}">{{$rates->category}}</option>
                          <option value="8">8 mm</option>
                          <option value="12">12 mm</option>
                          <option value="20">20 mm</option>
                          <option value="30">30 mm</option>
                        </select>
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


               $('#coloris').on('change',function(e) {
        
                //alert('1234');          
                 var color_id = $('#coloris').val();
                 $.ajax({
                       
                       url:"{{ route('get-finishing') }}",
                       type:"POST",
                       data: {
                            "_token": "{{ csrf_token() }}",   
                        color_id: color_id
                        },
                      
                       success:function (data) {
                      $('#finition').empty();
                            $.each(data,function(index,finishing){

                    finishing.forEach(myFunction);

                function myFunction(item, index) {
                //  document.getElementById("demo").innerHTML += index + ":" + item + "<br>"; 
                  $('#finition').append('<option value="'+item.id+'">'+item.name+'</option>');
                }
//                    var fruits = ["apple", "orange", "cherry"];


                        })

                       }
                   })
                });

            });

</script>

        
@endsection