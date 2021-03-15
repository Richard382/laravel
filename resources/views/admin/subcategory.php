<div class="col-md-12 col-lg-12">
          <div class="form-group row">
             <label for="staticEmail" class="col-sm-2 col-form-label">Customer Name<t style="color:red"> *</t></label>
                    <div class="col-sm-10">
                      <div class="input-group" >
                    <input type = "hidden" name = "_token" value = '<?php echo csrf_token(); ?>'>
                                   
                    <select class="browser-default custom-select" name="customer" id="category">
                                     <option selected>Select Customer</option>
                                        @foreach ($customer as $item)
                                        <option value="{{ $item->id }}">{{ $item->first_name }}</option>
                                        @endforeach
                                    </select>
                                                    </div>
                                                </div>
                                                   <div class="col-sm-2">
                                                    <div class="input-group" >
                                               
        
                                                            </div>
                                                </div>
                                            </div>
               
                                        </div>




 $(document).ready(function () {



                $('#category').on('change',function(e) {
        
                //alert('1234');          
                 var cat_id = $('#category').val();

//                 e.target.value;

                   // alert(cat_id);

                 $.ajax({
                       
                       url:"{{ route('getStates') }}",
                       type:"POST",
                       data: {
                            "_token": "{{ csrf_token() }}",   
                        cat_id: cat_id
                        },
                      
                       success:function (data) {



                        $('#subcategory').empty();


 //console.log(data);                      
                            $.each(data,function(index,subcategory){
                            console.log(subcategory);   
              //              $('#subcategory').append('<option value="'+subcategory.id+'">'+subcategory.address+'</option>');
              subcategory.forEach(myFunction);

                function myFunction(item, index) {
                //  document.getElementById("demo").innerHTML += index + ":" + item + "<br>"; 
                  $('#subcategory').append('<option value="'+item.address+'">'+item.address+'</option>');
                }
//                    var fruits = ["apple", "orange", "cherry"];


                        })

                       }
                   })
                });

            });
