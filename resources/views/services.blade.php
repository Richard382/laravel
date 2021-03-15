@extends('layouts.master')

@section('title')Services @endsection


@section('header')
          <section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="{{asset('Kompleet/assets/img/bg/bg2.jpg')}}" data-speed="0.7">
            <div class="section-inner pad-top-200">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mt30 wow text-center">
                            <h2 class="section-heading">Services</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection

@section('content')
	
	<div class="container-fluid">
	
			<div class="col-lg-1">
				
			</div>

			<div class="col-lg-10">
			<div class="row">			
				<div class="col-lg-4">
					<img id="material_img" src="{{asset('Kompleet/assets/img/bg/bg2.jpg')}}" width="100%" height="40%" style="margin-top: 2rem;">							
				</div>

				<div class="col-lg-8">
							<h4 id="main_heading" style="margin-top: 2rem; color: #fff; background-color: black; padding: 1.5rem;"></h4>
							<p>Estimate the price of your kitchen or bathroom project directly, thanks to our simulation tool.
							Fill in the following fields. Validate. The software calculates the cost of your work plan in real time.</p>
											
				</div>
			</div>
			<div class="row" style="margin-top: 4rem;">	
			<div class="col-lg-7">	
			<div class="row">	
				<div class="col-lg-12">
					
						<h6>1 - VOTRE MATÉRIAUX </h6>

						<div class="container-fluid">
							<div class="col-lg-10">

<div class="form-group row">
             <div class="col-lg-5">
             <label for="matériau">Matériau :</label>
                  </div>  

                  <div class="col-lg-5">
                      <div class="input-group" >
                    <input type = "hidden" name = "_token" value = '<?php echo csrf_token(); ?>'>
                                   
                    <select class="optiseldev" name="matériau" id="matériau" >
                               <option disabled selected required>Select Material</option>
                                        @foreach ($matériau as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                                   
                                                </div>
                                            </div>
                                                   <div class="col-sm-2">
                                                    <div class="input-group" >
                                               
        
                                                            </div>
                                                </div>
                                            </div>							</div>
						</div>


												<div class="container-fluid">
							<div class="col-lg-10">
<div class="form-group row">
             <div class="col-lg-5">
             <label for="coloris">Coloris :</label>
                  </div>  

                  <div class="col-lg-5">
		<div class="input-group" >
<select class="browser-default custom-select" name="coloris" id="coloris">
                                     <option selected disabled required>Select Colors</option>
                                        
               						

                                    </select>     
                                                    </div>
                                            </div>
                                                   <div class="col-sm-2">
                                                    <div class="input-group" >
                                               
        
                                                            </div>
                                                </div>
                                            </div>	
                                            <div class="form-group row">
             <div class="col-lg-5">
             <label for="finition">Finition :</label>
                  </div>  

                  <div class="col-lg-5">
		<div class="input-group" >
<select class="browser-default custom-select" name="finition" id="finition">
                                     <option disabled selected required>Select Finishing</option>
                                    </select>     
                                          

                                                    </div>
                                            </div>
                                                   <div class="col-sm-2">
                                                    <div class="input-group" >
                                               
        
                                                            </div>
                                                </div>
                                            </div>		

                                            						</div>

                   		</div>
			   
				</div>


					</div>
			

				

				<div id="show_rates">
				
				</div>
				<p>Ces prix sont indiqués par mètre carré de plan.</p>


			<div class="row" style="margin-top: 4rem;">			
				<div class="col-lg-12">
					
						<h6>2 - Taille de votre plan </h6>

						<div class="container-fluid">

							<div class="col-lg-10">
				<div class="row hidden-print mb-30">
					<div class="col-sm-4 col-12 taille-plan">
						<div class="form-group row">
							<div class="col-sm-12 col-5"><label>Longueur (mm) :</label></div>
							<div class="col-sm-12 col-7">
								<input class="form-control" id="edit-worktop-length" name="worktop[length]" maxlength="128">
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-12 taille-plan">
						<div class="form-group row">
							<div class="col-sm-12 col-5"><label>Largeur (mm) :</label></div>
							<div class="col-sm-12 col-7">
								<input class="form-control" id="edit-worktop-width" name="worktop[width]">
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-12 taille-plan">
						<div class="form-group row">
							<div class="col-sm-12 col-5"><label>Epaisseur (mm) :</label></div>
							<div class="col-sm-12 col-7">
								<select class="form-control" id="edit-worktop-thickness" name="worktop[thickness]">
									<option value="0"> - Sélectionner - </option>
									<option value="12">12 mm</option>
									<option value="20">20 mm</option>
									<option value="30">30 mm</option>
									<option value="60">60 mm</option>
								</select>
							</div>
						</div>
					</div>						</div>
						</div>	
			   
				</div>

				</div>
			</div>

			<div class="row">


					<div class="col-lg-12">
						<div id="calculation">


						</div>

					</div>

			</div>


			<div class="row" style="margin-top: 4rem;">			
				<div class="col-lg-12">
					
						<h6>3 - VOTRE FORME DE BORDURE </h6>

						<div class="container-fluid">
	<div class="col-8">
						<label>chant du plan de travail: (forme de la bordure du plan)</label>
						<select id="edit-worktop-edge" class="form-control" name="worktop_edge">
						  	<option value="127" >Chant biseauté 2mm</option>
						  	<option value="128" >Chant aile d'avion</option>
						  	<option value="129" >Chant droit adouci</option>
						  	<option value="130" >Chant rayon 10mm</option>
						  	<option value="131" >Chant rayon 5 mm</option>
						  	<option value="132" >Chant arrondi complet</option>
						  	<option value="133" >Bec de corbin</option>
						  	<option value="134" >Chant coupe d'Onglet (comprend chant de 20 à 60 mm)</option>
						</select>
					</div>							


			   
				</div>

				</div>
			</div>

						<div class="row" style="margin-top: 4rem;">			
				<div class="col-lg-12">
					
						<h6>4 - SIZE OF YOUR CREDENCE
 </h6>

						<div class="container-fluid">
							<div class="col-lg-10">
<div class="row hidden-print mb-30">
					<div class="col-sm-4 col-12 taille-plan">
						<div class="form-group row">
							<div class="col-sm-12 col-5"><label>Longueur (mm) :</label></div>
							<div class="col-sm-12 col-7">
								<input class="form-control" id="edit-worktop-length" name="worktop[length]" maxlength="128">
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-12 taille-plan">
						<div class="form-group row">
							<div class="col-sm-12 col-5"><label>Largeur (mm) :</label></div>
							<div class="col-sm-12 col-7">
								<input class="form-control" id="edit-worktop-width" name="worktop[width]">
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-12 taille-plan">
						<div class="form-group row">
							<div class="col-sm-12 col-5"><label>Epaisseur (mm) :</label></div>
							<div class="col-sm-12 col-7">
								<select class="form-control" id="edit-worktop-thickness2" name="worktop[thickness]">
									<option value="0"> - Sélectionner - </option>
									<option value="20">20 mm</option>
									<option value="30">30 mm</option>
								</select>
							</div>
						</div>
					</div>	</div>
						</div>


				</div>

				</div>
			</div>
	<div class="row" style="margin-top: 4rem;">			
	   <div class="col-lg-10">
		  <h6>5 - CHOISISSEZ LES OPTIONS ET DÉCOUPES</h6>
			<div class="container-fluid">
			  <div class="col-lg-12">
				<div class="row hidden-print mb-30">
				 
				  <div class="row decoup" style="margin-top: 1rem;">
					<div class="col-md-3 col-sm-4 col-6 opt_decoup mb-30">
						<div class="opt_img"><div style="height:65px; margin:0; padding:0"><img src="{{asset('images\options and cuts\decoupe-brute.jpg')}}" height="100%" width="100%" alt="Découpe brute" ></div></div>
						<p>Découpe brute</p>
						<div class="prix-opt-decoup">
							54 € <span>HT</span> <small class="preview_price" id="optot263"></small>
						</div>
						<select id="edit-options-263-qty" name="263" class="optiseldev form-control">
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
					</div>
					<div class="col-md-3 col-sm-4 col-6 opt_decoup mb-30">
						<div class="opt_img"><div style="height:65px; margin:0; padding:0"><img src="{{asset('images\options and cuts\decoupe-polie.jpg')}}" height="100%" width="100%" alt="Découpe polie" ></div></div>
						<p>Découpe polie</p>
						<div class="prix-opt-decoup">
							102 € <span>HT</span> <small class="preview_price" id="optot265"></small>
						</div>
						<select id="edit-options-265-qty" name="265" class="optiseldev form-control">
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
					</div>
					<div class="col-md-3 col-sm-4 col-6 opt_decoup mb-30">
						<div class="opt_img"><div style="height:65px; margin:0; padding:0"><img src="{{asset('images\options and cuts\decaisse-egouttoir-.jpg')}}" height="100%" width="100%" alt="Décaissé Egouttoir " ></div></div>
						<p>Décaissé Egouttoir </p>
						<div class="prix-opt-decoup">
							285 € <span>HT</span> <small class="preview_price" id="optot266"></small>
						</div>
						<select id="edit-options-266-qty" name="266" class="optiseldev form-control">
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
					</div>
					<div class="col-md-3 col-sm-4 col-6 opt_decoup mb-30">
						<div class="opt_img"><div style="height:65px; margin:0; padding:0"><img src="{{asset('images\options and cuts\percement-brut-pour-prise-electrique.jpg')}}" height="100%" width="100%" alt="Percement brut pour prise électrique" ></div></div>
						<p>Percement brut pour prise électrique</p>
						<div class="prix-opt-decoup">
							26 € <span>HT</span> <small class="preview_price" id="optot267"></small>
						</div>
						<select id="edit-options-267-qty" name="267" class="optiseldev form-control">
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
					</div>
					<div class="col-md-3 col-sm-4 col-6 opt_decoup mb-30">
						<div class="opt_img"><div style="height:65px; margin:0; padding:0"><img src="{{asset('images\options and cuts\percement-brut-pour-robinetterie-et-vidage.jpg')}}" height="100%" width="100%" alt="Percement brut pour robinetterie et vidage" ></div></div>
						<p>Percement brut pour robinetterie et vidage</p>
						<div class="prix-opt-decoup">
							24 € <span>HT</span> <small class="preview_price" id="optot268"></small>
						</div>
						<select id="edit-options-268-qty" name="268" class="optiseldev form-control">
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
					</div>
					<div class="col-md-3 col-sm-4 col-6 opt_decoup mb-30">
						<div class="opt_img"><div style="height:65px; margin:0; padding:0"><img src="images\options and cuts\decoupe-a-fleur.jpg" height="100%" width="100%" alt="Découpe à fleur " ></div></div>
						<p>Découpe à fleur </p>
						<div class="prix-opt-decoup">
							102 € <span>HT</span> <small class="preview_price" id="optot270"></small>
						</div>
						<select id="edit-options-270-qty" name="270" class="optiseldev form-control">
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
					</div>
					<div class="col-md-3 col-sm-4 col-6 opt_decoup mb-30">
						<div class="opt_img"><div style="height:65px; margin:0; padding:0"><img src="images\options and cuts\rainurage-incline-dans-la-masse.jpg" height="100%" width="100%" alt="Rainurage incliné dans la masse" ></div></div>
						<p>Rainurage incliné dans la masse</p>
						<div class="prix-opt-decoup">
							143 € <span>HT</span> <small class="preview_price" id="optot277"></small>
						</div>
						<select id="edit-options-277-qty" name="277" class="optiseldev form-control">
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
					</div>
				</div>						
			 </div>
		  </div>
		</div>
	  </div>
	</div>

			<div class="row" style="margin-top: 4rem;">			
				<div class="col-lg-12">
					
						<h6>6 - OUR ACCESSORIES</h6>

						<div class="container-fluid">
							<div class="col-lg-10">
								<div class="row hidden-print mb-30">
										<div class="row decoup devaccessoire">
					<div class="col-md-3 col-sm-4 col-6 opt_decoup mb-30">
						<div class="opt_img">
							<a href="#" data-toggle="modal" data-target="#Eviers" class="accdev_modal hidden-print">
								<img src="{{asset('images/accessories/acc_eviers.jpg')}}" height="70%" width="70%" alt="Eviers">
							</a>
						</div>
						<p><button type="button" class="btn" style="background-color: #fff;" data-toggle="modal" data-target="#Eviers">Eviers </button></p>
					</div>
					<div class="col-md-3 col-sm-4 col-6 opt_decoup mb-30">
						<div class="opt_img">
							<a href="#" data-toggle="modal" data-target="#Mitigeurs" class="accdev_modal hidden-print">
								<img src="{{asset('images/accessories/acc_mitigeurs.jpg')}}" height="70%" width="70%" alt="Mitigeurs">
							</a>
						</div>
						<p><button type="button" class="btn" style="background-color: #fff;" data-toggle="modal" data-target="#Mitigeurs">Mitigeurs </button></p>
					</div>
					<div class="col-md-3 col-sm-4 col-6 opt_decoup mb-30">
						<div class="opt_img">
							<a href="#" data-toggle="modal" data-target="#Distributeur-Savon" class="accdev_modal hidden-print">
								<img src="{{asset('images/accessories/acc_distributeur-savon.jpg')}}" height="70%" width="70%" alt="Distributeur Savon">
							</a>
						</div>
						<p><button type="button" class="btn" style="background-color: #fff;" data-toggle="modal" data-target="#Distributeur-Savon">Distributeur Savon</button></p>
					</div>
					<div class="col-md-3 col-sm-4 col-6 opt_decoup mb-30">
						<div class="opt_img">
							<a href="#" data-toggle="modal" data-target="#Panier-égouttoir" class="accdev_modal hidden-print">
								<img src="{{asset('images/accessories/acc_panier_egouttoire.jpg')}}" height="70%" width="70%" alt="Panier égouttoir">
							</a>
						</div>
						<p><button type="button" class="btn" style="background-color: #fff;" data-toggle="modal" data-target="#Panier-égouttoir">Panier égouttoir</button></p>
					</div>
				</div>	
								</div>
							</div>
						</div>

				</div>
			</div>

		 <div class="row" style="margin-top: 4rem;">			
			<div class="col-lg-12">
					
				<h6>7 - OUR SERVICES</h6>

				    <div class="container-fluid">
						<div class="col-lg-10">

					 @foreach($services as $service)
						<div class="form-check">

						  <input class="form-check-input" type="checkbox" name="{{$service->name}}" id="{{$service->name}}" value="{{$service->rate}}" >
						  
						  <label style="margin-left: 0.5rem;" class="form-check-label" for="{{$service->name}}">
						   <p style="font: 17px serif;"> {{$service->name}}  € HT</p>
						  </label>

						</div>
					 @endforeach

							 </div>

							</div>

				</div>
			</div>

		<div class="row" style="margin-top: 4rem;">			
			<div class="col-lg-12">
					
				<h6>8 - REDUCED VAT</h6>

				    <div class="container-fluid">
					
						<div class="col-lg-10">


						<div class="form-check">

						  <input class="form-check-input" type="checkbox" name="REDUCED VAT" id="REDUCED VAT" value="REDUCED VAT" >
						  
						  <label style="margin-left: 0.5rem;" class="form-check-label" for="REDUCED VAT">
						   <p style="font: 17px serif;"> 
						   	   Residence for more than 2 years 10% VAT
							   10% VAT applicable to housing for residential use over 2 years if the installation is carried out by us, if not 20% VAT

						   </p>
						  </label>

						</div>
					 
					 </div>

							</div>

				</div>
			</div>

		<div class="row" style="margin-top: 4rem;">			
			<div class="col-lg-12">
			   <h6>9 - EASY PLAN STORES </h6>
				  <div class="container-fluid">
					 <div class="col-8">
					    <p>Which store is closest to you?</p>
						  <div class="row"> 
						   <div class="col-lg-4">
							   <input type="radio" id="Paris02" name="store" value="1">
							   <label for="Paris02"><p style="font: 17px serif;">Paris 02</p></label><br>
						    </div>   
						    <div class="col-lg-4">
							   <input type="radio" id="Paris08" name="store" value="2">
							   <label for="Paris08"><p style="font: 17px serif;">Paris 08</p></label><br> 
							</div>    
							<div class="col-lg-4">
							   <input type="radio" id="Garches92" name="store" value="3">
							   <label for="age3"><p style="font: 17px serif;">Garches 92</p></label><br><br>
							</div>

							<div class="col-lg-4">
							   <input type="radio" id="Rouen76" name="store" value="4">
							   <label for="Rouen76"><p style="font: 17px serif;">Rouen 76</p></label><br><br>
							</div>
						   </div>

							  </div>							


						   
							</div>

				</div>
			</div>




			</div>
		

			
			<div class="col-lg-5" style="top: 70%;height:180vh;">

				<div id="booking" class="table_compar table_devis det-devis" style="position: sticky; top: 130px;">
					<div class="table-responsive table-wrapper">
						<form id="fdevis" name="fdevis" action="/confirm-devis.php" method="post">
							<table class="table">
								<thead>
									<tr>
										<th scope="col" colspan="2"><h4 class="smtitle text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Estimate of your project</font></font></h4></th>
									</tr>
								</thead>
								<tbody id="totaldevis">
				   
					<tr class="list-det-devis">
						<td scope="row"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+ Straight edge softened x 0ml</font></font></td>
						<th class="prix-prod"></th>
					</tr>
					<tr class="row-calc bord">
						<td scope="row"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Subtotal HT</font></font><h5 id="sub_total_ht"></h5></td>
						<th></th>
					</tr>
					<tr class="row-calc total-devis">
						<td scope="row"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20% VAT</font></font><h5 id="total_percentage"></h5></td>
						<th class="sous-total-prod"></th>
					</tr>
					<tr class="row-calc total-devis">
						<td scope="row"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Total order including tax</font></font><h5 id="total_res"></h5></td>
						<th class="sous-total-prod"></th>
					</tr></tbody>
							</table>
						</form>
					</div>
				</div>

				</div>
				</div>
		

			</div>	


			<div class="col-lg-1">
				
			</div>
	</div>
		    
		    <div class="col-lg-1">
				
			</div>
</div>

<!-- Eviers -->
<div class="modal fade" id="Eviers" tabindex="-1" role="dialog" aria-labelledby="EviersLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="EviersLabel">Sinks</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<div class="container-fluid">
		@foreach($sinks as $sink) 
      	  <div class="col-lg-4">
        	<div class="card" style="width: 18rem; border-color: black;">
			  <img class="card-img-top" src="{{asset('images/sink/'.$sink->picture)}}" width="100" height="100" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title">{{$sink->model}}</h5>
			    <h5 class="card-title">{{$sink->rate}}</h5>
			    <p class="card-text">{{$sink->size}}</p>
			    <a href="#" class="btn btn-primary">Go somewhere</a>
			  </div>
			</div>
		  </div>
		@endforeach
		</div>	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<!-- Mitigeurs -->

<div class="modal fade" id="Mitigeurs" tabindex="-1" role="dialog" aria-labelledby="MitigeursLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="MitigeursLabel">Mixer Taps</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
		@foreach($mixers as $mixer) 
      	  <div class="col-lg-4">
        	<div class="card" style="width: 18rem; border-color: black;">
			  <img class="card-img-top" src="{{asset('images/mixer/'.$mixer->picture)}}" width="100" height="100" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title">{{$mixer->model}}</h5>
			    <h5 class="card-title">{{$mixer->rate}}</h5>
			    <p class="card-text">{{$mixer->size}}</p>
			    <a href="#" class="btn btn-primary">Go somewhere</a>
			  </div>
			</div>
		  </div>
		@endforeach
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Distributeur-Savon -->

<div class="modal fade" id="Distributeur-Savon" tabindex="-1" role="dialog" aria-labelledby="Distributeur-SavonLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Distributeur-SavonLabel">Soap Dispensers</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
		@foreach($soaps as $soap) 
      	  <div class="col-lg-4">
        	<div class="card" style="width: 18rem; border-color: black;">
			  <img class="card-img-top" src="{{asset('images/soap/'.$soap->picture)}}" width="100" height="100" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title">{{$soap->model}}</h5>
			    <h5 class="card-title">{{$soap->rate}}</h5>
			    <p class="card-text">{{$soap->size}}</p>
			    <a href="#" class="btn btn-primary">Go somewhere</a>
			  </div>
			</div>
		  </div>
		@endforeach
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Panier-égouttoir -->

<div class="modal fade" id="Panier-égouttoir" tabindex="-1" role="dialog" aria-labelledby="Panier-égouttoirLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Panier-égouttoirLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
	//Change base url
	var base_url='http://localhost/Shopping/public';
    var sub_result=0;
    var percentage=0;
    var per_result=0;


 $(document).ready(function () {

 				$('#edit-worktop-thickness').one('change',function(e) {					
						$("#totaldevis").prepend('<tr id="table_'+i+'" class="list-det-devis"><td scope="row"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+ PACKAGING + TRANSPORT + * Paris, Ile de France region</font></font><h5>215.00€</h5></td><th class="prix-prod"></th></tr>');

 					})

                $('#matériau').on('change',function(e) {
        		 var cat_id = $('#matériau').val();

                 $.ajax({
                       
                       url:"{{ route('getColoris') }}",
                       type:"POST",
                       data: {
                            "_token": "{{ csrf_token() }}",   
                        cat_id: cat_id
                        },
                      
                       success:function (data) {

                       	var my_url=base_url+'/images/stones/';
                       	$('#material_img').attr('src',my_url+data['coloris'][0]['picture']);
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

                        var material_text = $('#matériau option:selected').text();
		                var color_text = $('#coloris option:selected').text();

                        $("#main_heading").text(material_text+" "+color_text);

		                var material_id = $('#matériau').val();
		                var color_id = $('#coloris').val();
		                var finishing_id = $('#finition').val();

		                	$.ajax({
                       
                       url:"{{ route('get-price') }}",
                       type:"GET",
                       data: {  
	                        material_id: material_id,
	                        color_id: color_id,
	                        finishing_id: finishing_id,
                        },
                      
                       success:function (data) {
                       		$("#show_rates").empty();
                       		for(var i=0 ; i<data['rates'].length ; i++)
                       		{
                       			$("#show_rates").append('<span>'+data['rates'][i]['category']+" mm "+ data['rates'][i]['rate']+' € HT</span><br/>');
                       		}

                       	   }
                   })
                        
                       }
                   })
                });
                  var i=0;
                  var sub_total= 0;
                $('#edit-worktop-thickness').on('change',function(e) {
                		  
                		var total_amount= '';
                		

                		 var editWorktopThickness=$("#edit-worktop-thickness").val();

                		 var length=$("#edit-worktop-length").val();
                		 var width=$("#edit-worktop-width").val();
                		 var thickness=$("#edit-worktop-width").val();

                		 var calculation = (length/1000) * (width/1000);

                		 var res=calculation.toFixed(2)


                		 var category = $("#edit-worktop-thickness").val();

                		var material_id = $('#matériau').val();
		                var color_id = $('#coloris').val();
		                var finishing_id = $('#finition').val();


		                $.ajax({
                       
                       url:"{{ route('get-calculated-price') }}",
                       type:"GET",
                       data: {  
	                        material_id: material_id,
	                        color_id: color_id,
	                        finishing_id: finishing_id,
	                        category: category,
                        },
                      
                       success:function (data) {

                       		i++;
                       		
                       			if(data['rates'] != null)
                       			{

                       				total_amount = res * data['rates']['rate'];
                       				
                       				sub_total += total_amount;
                       			
                       				sub_result=(sub_total + 215);

                       				percentage=(20/100)*sub_result;

                       				per_result=(percentage+sub_result);

                       				$("#total_res").text(per_result+"€");

                       				$("#total_percentage").text(percentage+"€");



                       				$("#sub_total_ht").text(sub_result+"€");

						$("#calculation").append('<div id="row_'+i+'" class="col-6 table-responsive"><table id="crtable" class="sticky-enabled total-dim table"><tbody><tr class="d-none"><td width="5%"></td><td width="17%"></td><td width="3%"></td><td width="17%"></td><td width="3%"></td><td width="17%"></td><td width="3%"></td><td width="18%"></td><td width="17%"></td></tr><tr id="trcredence0"><td width="5%">  </td><td width="17%"><span>'+length+'mm</span></td><td width="3%">x</td><td width="17%"><span>'+width+'mm</span></td><td width="3%">x</td><td width="17%"><span>'+category+'mm</span></td><td width="3%">=</td><td width="18%">'+total_amount+'€</td><td width="17%" class="total-dim-sup"><a href="javascript:void(0)" class="delcredence" onclick="removeRow('+i+','+total_amount+')" name="worktop_delete-0">X</a></td></tr></tbody></table></div>');

						$("#totaldevis").prepend('<tr id="table_'+i+'" class="list-det-devis"><td scope="row"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Worktop '+length+'mm x '+length+'mm thickness '+category+' mm</font></font><h5>'+total_amount+'€</h5></td><th class="prix-prod"></th></tr>');

						        }

						  	   }
                   })

           				
                	 })


               $('#coloris').on('change',function(e) {
        
                //alert('1234');          
                 var color_id = $('#coloris').val();
                 var mat_id = $('#matériau').val();
                 $.ajax({
                       
                       url:"{{ route('get-finishing') }}",
                       type:"POST",
                       data: {
                            "_token": "{{ csrf_token() }}",   
                        color_id: color_id,
                        mat_id: mat_id,
                        },
                      
                       success:function (data) {
                       	var my_url=base_url+'/images/stones/';
                       	$('#material_img').attr('src',my_url+data['color_img']);

                			$('#finition').empty();
                            $.each(data,function(index,finishing){

              			finishing.forEach(myFunction);

                function myFunction(item, index) {
                //  document.getElementById("demo").innerHTML += index + ":" + item + "<br>"; 
                  $('#finition').append('<option value="'+item.id+'">'+item.name+'</option>');
                }
//                    var fruits = ["apple", "orange", "cherry"];


                        })

                        var material_text = $('#matériau option:selected').text();

		                var color_text = $('#coloris option:selected').text();

                        $("#main_heading").text(material_text+" "+color_text);

                        var material_id = $('#matériau').val();
		                var color_id = $('#coloris').val();
		                var finishing_id = $('#finition').val();

		                	$.ajax({
                       
                       url:"{{ route('get-price') }}",
                       type:"GET",
                       data: {  
                        material_id: material_id,
                        color_id: color_id,
                        finishing_id: finishing_id,
                        },
                      
                       success:function (data) {
                       		$("#show_rates").empty();
                       		for(var i=0 ; i<data['rates'].length ; i++)
                       		{
                       			$("#show_rates").append('<span>'+data['rates'][i]['category']+" mm "+ data['rates'][i]['rate']+' € HT</span><br/>');
                       		}

                       	   }
                   })

                       }
                   })
                });

               $('#finition').on('change',function(e) {

               	     var material_id = $('#matériau').val();
		                var color_id = $('#coloris').val();
		                var finishing_id = $('#finition').val();

		                	$.ajax({
                       
                       url:"{{ route('get-price') }}",
                       type:"GET",
                       data: {  
                        material_id: material_id,
                        color_id: color_id,
                        finishing_id: finishing_id,
                        },
                      
                       success:function (data) {
                       		$("#show_rates").empty();
                       		for(var i=0 ; i<data['rates'].length ; i++)
                       		{
                       			$("#show_rates").append('<span>'+data['rates'][i]['category']+" mm "+ data['rates'][i]['rate']+' € HT</span><br/>');
                       		}

                       	   }
                   })

               	});
            });


                function removeRow(row,amount)
                {
                	var result=(sub_result-amount);
                	sub_result=result;
                	var per=(20/100)*amount;
                	var tot_per=percentage-per;
                	percentage=tot_per;
                	var final_per=(sub_result+percentage);
                	per_result=final_per;
                	$("#total_res").text(per_result+"€");
                	$("#total_percentage").text(tot_per+"€");
                	$("#sub_total_ht").text(result+"€");
                	$("#row_"+row).html('');
                	$("#table_"+row).html('');
                }

</script>

@endsection