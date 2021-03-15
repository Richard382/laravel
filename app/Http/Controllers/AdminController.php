<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Matériau;
use Auth;
use App\Coloris;
use App\Finition;
use App\Service;
use App\OptionsAndCuts;
use App\Rate;
use App\Sink;
use App\MixerTap;
use App\SoapDispenser;
use App\DrainerBasket;

class AdminController extends Controller
{
    	public function __construct(){

				$this->middleware('checkrole:admin');
				$this->middleware('auth');
		}


    public function index()
    {
        return view('admin.welcome');
    }

       public function Matériau(){
       		$Matériaus = Matériau::all();
       			return view('admin.showMatériau',compact('Matériaus'));
   		}

	    public function addItems(){
	   		return view('admin.addMatériau');
	   }



   public function addMatériau(Request $request){

   			$addMatériau = new Matériau;

   			$addMatériau->name = $request['matériau'];
   			$addMatériau->save();	

	return redirect('admin/matériau')->with('success','New Matériau created successfully');

	}

	public function	editMatériau($id){
		$matériau = Matériau::findorFail($id);
		return view('admin.editMatériau',compact('matériau'));

	}

	public function	updateMatériau(Request $request,$id){

			$matériau = Matériau::where("id",$id)->first();

			$matériau->name = $request['matériau'];
			$matériau->save();
	return redirect('admin/matériau')->with('success','Matériau updated successfully');

		}
	public function deleteMatériau($id){

		$Matériau = Matériau::findorFail($id);
		$Matériau->delete();
	return back()->with('deleted','Matériau deleted successfully');

	}

	public function showColoris(){
		$coloris = Coloris::all();
	//	dd($coloris->matériau['name']);
		return view('admin.coloris',compact('coloris'));
//		return view('admin.coloris');
	}

	public function addColoris(){
		$matériau = Matériau::all();
		return view('admin.addColoris',compact('matériau'));
	}
	public function createdColoris(Request $request){

		$coloris =  new Coloris;

//      $product = new Product;
    //this giver files complete name;  
            //getClientOriginalName(); 
        $a = $request->file('thumbnail');
       
        //this gives extension of the file
        //$a->getClientOriginalExtension();

        //this change the name of the image profile+time+random number and extension.

        $imageName = 'profile-'.time().'-'.rand(000000,999999).'.'.$a->getClientOriginalExtension();
        
        //this gives the path where file get stored {C:\xampp\htdocs\Photo Gallery\public\images/}
        $destinationPath = public_path('images/stones/');
        
        //this takes 2 values 1st the destination and 2nd the file which is to store
          $a->move($destinationPath, $imageName); 
          $coloris->picture = $imageName;
          //complete path with the file name
         // $imgNamePath = $destinationPath.$imageName;
		
		$coloris->matériaus_id = $request['matériau'];
		$coloris->name = $request['colorisName'];
//		$coloris->rate = $request['colorisRate'];
		$coloris->save();
		return redirect('admin/coloris')->with('success','Coloris added successfully');



	}
	public function editColoris($id){
		$coloris = Coloris::findorFail($id);
		$matériau = Matériau::all();

		// $coloris->matériaus_id = $request['matériau'];
		// $coloris->name = $request['colorisName'];
		// $coloris->rate = $request['colorisRate'];
		// $coloris->save();		
		// return back()->with('success','Coloris added successfully');
	return view('admin.editColoris',compact('coloris','matériau'));

	}

		public function	postEditColoris(Request $request,$id){
		
		$coloris = Coloris::findorFail($id);
		
		$coloris->matériaus_id = $request['matériau'];
		$coloris->name = $request['colorisName'];
		$coloris->save();		
		return redirect('admin/coloris')->with('success','Coloris added successfully');


		}

		public function deleteColoris($id){

			$coloris = Coloris::findorFail($id);
			$coloris->delete();
		return redirect('admin/coloris')->with('success','Coloris deleted successfully');

		}

		public function showFinition(){
				$finition = Finition::all();
			//	dd($coloris->matériau['name']);
				return view('admin.finition',compact('finition'));
		//		return view('admin.coloris');
			}


	public function addFinition(){
		$matériau = Matériau::all();
		$coloris = Coloris::all();
		return view('admin.addFinition',compact('matériau','coloris'));
	}
	public function createdFinition(Request $request){

		$finition =  new Finition;
		
		$finition->matériaus_id = $request['matériau'];
		$finition->coloris_id = $request['coloris'];
		$finition->name = $request['finitionName'];
		
		$finition->save();
		return redirect('admin/finition')->with('success','Finition added successfully');



	}
	public function editFinition($id){
		$matériau = Matériau::all();

		$finition = Finition::findorFail($id);
		$coloris = Coloris::all();
		//$matériau = Matériau::all();

		// $coloris->matériaus_id = $request['matériau'];
		// $coloris->name = $request['colorisName'];
		// $coloris->rate = $request['colorisRate'];
		// $coloris->save();		
		// return back()->with('success','Coloris added successfully');
		return view('admin.editFinition',compact('finition','coloris','matériau'));

	}

		public function	postEditFinition(Request $request,$id){
		
		$finition = Finition::findorFail($id);
		
		$finition->matériaus_id = $request['matériau'];
		$finition->matériaus_id = $request['coloris'];
		$finition->name = $request['finitionName'];
		$finition->rate = $request['finitionRate'];
		$finition->save();		
		return redirect('admin/finition')->with('success','Finition added successfully');


		}

		public function deleteFinition($id){

			$finition = Finition::findorFail($id);
			$finition->delete();
		return redirect('admin/finition')->with('success','Finition deleted successfully');

		
		}

		public function	showServices(){
			$services = Service::all();
			return view('admin.services',compact('services'));
		}

		public function addService(){

			return view('admin.addService');
		}

		public function createdService(Request $request){

				$service =  new service;
				

				$service->name = $request['serviceName'];
				$service->rate = $request['serviceRate'];
				$service->save();
				return redirect('admin/services')->with('success','service added successfully');
		
		}

		public function editService($id){
		
			$service = Service::findorFail($id);
			return view('admin.editService',compact('service'));

		}
		public function	postEditService(Request $request,$id){
		
		$service = Service::findorFail($id);
		
		$service->name = $request['serviceName'];
		$service->rate = $request['serviceRate'];
		$service->save();		
		return redirect('admin/services')->with('success','Services Updated successfully');


		}
		public function deleteService($id){	


		$service = Service::findorFail($id);
		$service->delete();
		return back()->with('success','Service deleted successfully');
		}

		public function optionsCuts(){

			$OptionsAndCuts = OptionsAndCuts::all();
			return view('admin.options&Cuts',compact('OptionsAndCuts'));

		}

		public function addOptionsCuts(){
		
		$matériau = Matériau::all();
		$coloris = Coloris::all();

			return view('admin.addOptions&Cuts',compact('matériau','coloris'));
		}

		public function PostAddOptionsCuts(Request $request){

					$OptionsAndCuts = new OptionsAndCuts;

//      $product = new Product;
    //this giver files complete name;  
            //getClientOriginalName(); 
        $a = $request->file('thumbnail');
       
        //this gives extension of the file
        //$a->getClientOriginalExtension();

        //this change the name of the image profile+time+random number and extension.

        $imageName = 'profile-'.time().'-'.rand(000000,999999).'.'.$a->getClientOriginalExtension();
        
        //this gives the path where file get stored {C:\xampp\htdocs\Photo Gallery\public\images/}
        $destinationPath = public_path('images/');
        
        //this takes 2 values 1st the destination and 2nd the file which is to store
          $a->move($destinationPath, $imageName); 
          $OptionsAndCuts->picture = $imageName;
          //complete path with the file name
         // $imgNamePath = $destinationPath.$imageName;




            $OptionsAndCuts->matériaus_id =$request['matériau'];
            $OptionsAndCuts->coloris_id	 =$request['coloris'];
            $OptionsAndCuts->name =$request['optionName'];
            $OptionsAndCuts->rate =$request['optionRate'];
            
            $OptionsAndCuts->save();

            return redirect('admin/options/cuts')->with('success','New Cut Created successfully');
		}

		public function	EditAddOptionsCuts($id){
			$OptionsAndCuts = OptionsAndCuts::findorFail($id);
			$matériau = Matériau::all();
			$coloris = Coloris::all();

			return view('admin.editAddOptions&Cuts',compact('OptionsAndCuts','matériau','coloris'));
		}
	public function postEditAddOptionsCuts(Request $request,$id){

					$OptionsAndCuts = OptionsAndCuts::findorFail($id);

//      $product = new Product;
    //this giver files complete name;  
            //getClientOriginalName(); 
        $a = $request->file('thumbnail');
       
        //this gives extension of the file
        //$a->getClientOriginalExtension();

        //this change the name of the image profile+time+random number and extension.

        $imageName = 'profile-'.time().'-'.rand(000000,999999).'.'.$a->getClientOriginalExtension();
        
        //this gives the path where file get stored {C:\xampp\htdocs\Photo Gallery\public\images/}
        $destinationPath = public_path('images/');
        
        //this takes 2 values 1st the destination and 2nd the file which is to store
          $a->move($destinationPath, $imageName); 
          $OptionsAndCuts->picture = $imageName;
          //complete path with the file name
         // $imgNamePath = $destinationPath.$imageName;




            $OptionsAndCuts->matériaus_id =$request['matériau'];
            $OptionsAndCuts->coloris_id	 =$request['coloris'];
            $OptionsAndCuts->name =$request['optionName'];
            $OptionsAndCuts->rate =$request['optionRate'];
            
            $OptionsAndCuts->save();

            return redirect('admin/options/cuts')->with('success','Cut updated successfully');
		}

		public function showRates()
		{
			$rates = Rate::join('matériaus','matériaus.id','=','rates.material_id')
			->join('finitions','finitions.id','=','rates.finishing_id')
			->join('coloris','coloris.id','=','rates.color_id')
			->select('rates.*','finitions.name as finishing_name','coloris.name as color_name','matériaus.name as material_name')
			->get();
			// dd($rates);
			return view('admin.showRates',compact('rates'));
		}

		public function rates()
		{

			$matériau = Matériau::all();
			$colors = Coloris::all();
			$finitions = Finition::all();
			return view('admin.addRates',compact('matériau','colors','finitions'));
		}


		public function postRates(Request $request)
		{	
			//dd($request->all());
			$rate = new Rate;
			$rate->material_id = $request['matériau'];
			$rate->color_id = $request['coloris'];
			$rate->finishing_id = $request['finition'];
			$rate->category = $request['category'];
			$rate->rate = $request['Rate'];
			$rate->save();

			return redirect('admin/show/rates')->with('success','Rate added successfully');

		}
		public function editRates($id)
		{
			$matériau = Matériau::all();
			$rates = Rate::findorFail($id);
			return view('admin.editRates',compact('rates','matériau'));

		}
		public function postEditRates(Request $request,$id)
		{
			$rate = Rate::findorFail($id);
			$rate->material_id = $request['matériau'];
			$rate->color_id = $request['coloris'];
			$rate->finishing_id = $request['finition'];
			$rate->category = $request['category'];
			$rate->rate = $request['Rate'];
			$rate->save();

			return redirect('admin/show/rates')->with('success','Rate updated successfully');			
		}

		public function deteleRates($id)
		{
			$rate = Rate::findorFail($id);
			$rate->delete();
			return back()->with('success','Rate deleted successfully');	
		}

			public function adminShowSinks()
		{

			$sinks = Sink::all();

			return view("admin.showSink",compact('sinks'));
		}
		public function addSink()
		{
			return view("admin.addSink");

		}
		public	function addSinkPost(Request $request)
		{

			$sink = new Sink();
		
		//      $product = new Product;
	    //this giver files complete name;  
            //getClientOriginalName(); 
        $a = $request->file('picture');
       
        //this gives extension of the file
        //$a->getClientOriginalExtension();

        //this change the name of the image profile+time+random number and extension.

        $imageName = 'sink-'.time().'-'.rand(000000,999999).'.'.$a->getClientOriginalExtension();
        
        //this gives the path where file get stored {C:\xampp\htdocs\Photo Gallery\public\images/}
        $destinationPath = public_path('images/sink/');
        
        //this takes 2 values 1st the destination and 2nd the file which is to store
          $a->move($destinationPath, $imageName); 
          //$coloris->picture = $imageName;
          //complete path with the file name
         // $imgNamePath = $destinationPath.$imageName;
		
          $sink->picture = $imageName;

			$sink->model = $request['model'];
			$sink->price = $request['price'];
			$sink->size = $request['size'];
			$sink->save();

			return redirect('admin/show-sinks')->with('success',"Sink added successfully");
		}
		public	function editSink($id)
		{	
			$sink = Sink::findorFail($id);
			
			return view('admin.editSink',compact('sink'));

		}
		
		public	function editSinkPost(Request $request,$id)
		{

			//dd($request->all());

			$sink = Sink::findorFail($id);
				//      $product = new Product;
		    //this giver files complete name;  
	            //getClientOriginalName(); 
	        $a = $request->file('picture');
	       
	        //this gives extension of the file
	        //$a->getClientOriginalExtension();

	        //this change the name of the image profile+time+random number and extension.

	        $imageName = 'sink-'.time().'-'.rand(000000,999999).'.'.$a->getClientOriginalExtension();
	        
	        //this gives the path where file get stored {C:\xampp\htdocs\Photo Gallery\public\images/}
	        $destinationPath = public_path('images/sink/');
	        
	        //this takes 2 values 1st the destination and 2nd the file which is to store
	          $a->move($destinationPath, $imageName); 
	          //$coloris->picture = $imageName;
	          //complete path with the file name
	         // $imgNamePath = $destinationPath.$imageName;
			
	          $sink->picture = $imageName;


			$sink->model = $request['model'];
			$sink->price = $request['price'];
			$sink->size = $request['size'];
//			$sink->picture = $request['picture'];
			$sink->save();

			return redirect('admin/show-sinks')->with('success',"Sink updated successfully");
		}

		public	function deleteSink($id)
		{

			$sinkDelete = Sink::findorFail($id);
			$sinkDelete->delete(); 
			return redirect('admin/show-sinks')->with('success',"Sink deleted successfully");

		}

		public function adminShowMixer()
		{
			$mixers = MixerTap::all();			
			return view('admin.showMixer',compact('mixers'));			
		}
		
		public function addMixer()
		{
			return view("admin.addMixer");

		}		

		public function addMixerPost(Request $request)
		{
		

		$mixer = new MixerTap();
		
		//      $product = new Product;
	    //this giver files complete name;  
            //getClientOriginalName(); 
        $a = $request->file('picture');
       
        //this gives extension of the file
        //$a->getClientOriginalExtension();

        //this change the name of the image profile+time+random number and extension.

        $imageName = 'mixer-'.time().'-'.rand(000000,999999).'.'.$a->getClientOriginalExtension();
        
        //this gives the path where file get stored {C:\xampp\htdocs\Photo Gallery\public\images/}
        $destinationPath = public_path('images/mixer/');
        
        //this takes 2 values 1st the destination and 2nd the file which is to store
          $a->move($destinationPath, $imageName); 
          //$coloris->picture = $imageName;
          //complete path with the file name
         // $imgNamePath = $destinationPath.$imageName;
		
          $mixer->picture = $imageName;

			$mixer->model = $request['model'];
			$mixer->price = $request['price'];
			$mixer->size = $request['size'];
			$mixer->save();

			return redirect('admin/show-mixer')->with('success',"Mixer added successfully");

		}
		public	function editMixer($id)
		{	
			$mixer = MixerTap::findorFail($id);
			
			return view('admin.editMixer',compact('mixer'));

		}
		
		public	function editmixerPost(Request $request,$id)
		{

			//dd($request->all());

			$sink = MixerTap::findorFail($id);
				//      $product = new Product;
		    //this giver files complete name;  
	            //getClientOriginalName(); 
	        $a = $request->file('picture');
	       
	        //this gives extension of the file
	        //$a->getClientOriginalExtension();

	        //this change the name of the image profile+time+random number and extension.

	        $imageName = 'mixer-'.time().'-'.rand(000000,999999).'.'.$a->getClientOriginalExtension();
	        
	        //this gives the path where file get stored {C:\xampp\htdocs\Photo Gallery\public\images/}
	        $destinationPath = public_path('images/mixer/');
	        
	        //this takes 2 values 1st the destination and 2nd the file which is to store
	          $a->move($destinationPath, $imageName); 
	          //$coloris->picture = $imageName;
	          //complete path with the file name
	         // $imgNamePath = $destinationPath.$imageName;
			
	          $sink->picture = $imageName;


			$sink->model = $request['model'];
			$sink->price = $request['price'];
			$sink->size = $request['size'];
//			$sink->picture = $request['picture'];
			$sink->save();

			return redirect('admin/show-mixer')->with('success',"Mixer updated successfully");
		}

		public	function deleteMixer($id)
		{

			$mixerDelete = MixerTap::findorFail($id);
			$mixerDelete->delete(); 
			return redirect('admin/show-mixer')->with('success',"Mixer deleted successfully");

		}

		public function adminShowSoap()
		{
			$soaps = SoapDispenser::all();
			return view('admin.showSoap',compact('soaps'));

		}

		public function addSoap()
		{

			return view('admin.addSoap');
		}

		public function addSoapPost(Request $request)
		{
			$soap = new SoapDispenser;


		//      $product = new Product;
	    //this giver files complete name;  
            //getClientOriginalName(); 
        $a = $request->file('picture');
       
        //this gives extension of the file
        //$a->getClientOriginalExtension();

        //this change the name of the image profile+time+random number and extension.

        $imageName = 'soap-'.time().'-'.rand(000000,999999).'.'.$a->getClientOriginalExtension();
        
        //this gives the path where file get stored {C:\xampp\htdocs\Photo Gallery\public\images/}
        $destinationPath = public_path('images/soap/');
        
        //this takes 2 values 1st the destination and 2nd the file which is to store
          $a->move($destinationPath, $imageName); 
          //$coloris->picture = $imageName;
          //complete path with the file name
         // $imgNamePath = $destinationPath.$imageName;
		
          	$soap->picture = $imageName;

			$soap->model = $request['model'];
			$soap->price = $request['price'];
			$soap->size = $request['size'];
			$soap->save();

			return redirect('admin/show-soap')->with('success',"Soap added successfully");

		}

		public function editSoap($id)
		{
			$soap = SoapDispenser::findorFail($id);

			return view('admin.editSoap',compact('soap'));
		}

		public function editSoapPost(Request $request,$id)
		{
			$soap = SoapDispenser::findorFail($id);


		//      $product = new Product;
	    //this giver files complete name;  
            //getClientOriginalName(); 
        $a = $request->file('picture');
       
        //this gives extension of the file
        //$a->getClientOriginalExtension();

        //this change the name of the image profile+time+random number and extension.

        $imageName = 'soap-'.time().'-'.rand(000000,999999).'.'.$a->getClientOriginalExtension();
        
        //this gives the path where file get stored {C:\xampp\htdocs\Photo Gallery\public\images/}
        $destinationPath = public_path('images/soap/');
        
        //this takes 2 values 1st the destination and 2nd the file which is to store
          $a->move($destinationPath, $imageName); 
          //$coloris->picture = $imageName;
          //complete path with the file name
         // $imgNamePath = $destinationPath.$imageName;
		
          	$soap->picture = $imageName;

			$soap->model = $request['model'];
			$soap->price = $request['price'];
			$soap->size = $request['size'];
			$soap->save();

			return redirect('admin/show-soap')->with('success',"Soap updated successfully");

		}
		

		public function deleteSoap($id)
		{
			$soap = SoapDispenser::findorFail($id);
			$soap->delete();
			return redirect('admin/show-soap')->with('success',"Soap deleted successfully");

		}

		public function adminShowDrainer()
		{	
			$drainers = DrainerBasket::all();
			return view('admin.showDrainer',compact('drainers'));
		}
		
		public function addDrainer()
		{

			return view('admin.addDrainer');
		}

		public function addDrainerPost(Request $request)
		{
				$drainer = new DrainerBasket;


		//      $product = new Product;
	    //this giver files complete name;  
            //getClientOriginalName(); 
        $a = $request->file('picture');
       
        //this gives extension of the file
        //$a->getClientOriginalExtension();

        //this change the name of the image profile+time+random number and extension.

        $imageName = 'drainer-'.time().'-'.rand(000000,999999).'.'.$a->getClientOriginalExtension();
        
        //this gives the path where file get stored {C:\xampp\htdocs\Photo Gallery\public\images/}
        $destinationPath = public_path('images/drainer/');
        
        //this takes 2 values 1st the destination and 2nd the file which is to store
          $a->move($destinationPath, $imageName); 
          //$coloris->picture = $imageName;
          //complete path with the file name
         // $imgNamePath = $destinationPath.$imageName;
		
          	$drainer->picture = $imageName;

			$drainer->model = $request['model'];
			$drainer->price = $request['price'];
			$drainer->size = $request['size'];
			$drainer->save();

			return redirect('admin/show-drainer')->with('success',"Drainer basket added successfully");


		}

		public function editDrainer($id)
		{
			$drainer = DrainerBasket::findorFail($id);

			return view('admin.editDrainer',compact('drainer'));
		}

		public function editDrainerPost(Request $request,$id)
		{
			$drainer = DrainerBasket::findorFail($id);


		//      $product = new Product;
	    //this giver files complete name;  
            //getClientOriginalName(); 
        $a = $request->file('picture');
       
        //this gives extension of the file
        //$a->getClientOriginalExtension();

        //this change the name of the image profile+time+random number and extension.

        $imageName = 'drainer-'.time().'-'.rand(000000,999999).'.'.$a->getClientOriginalExtension();
        
        //this gives the path where file get stored {C:\xampp\htdocs\Photo Gallery\public\images/}
        $destinationPath = public_path('images/drainer/');
        
        //this takes 2 values 1st the destination and 2nd the file which is to store
          $a->move($destinationPath, $imageName); 
          //$coloris->picture = $imageName;
          //complete path with the file name
         // $imgNamePath = $destinationPath.$imageName;
		
          	$drainer->picture = $imageName;

			$drainer->model = $request['model'];
			$drainer->price = $request['price'];
			$drainer->size = $request['size'];
			$drainer->save();

			return redirect('admin/show-drainer')->with('success',"Drainer updated successfully");

		}

		public function deleteDrainer($id)
		{
			$Drainer = DrainerBasket::findorFail($id);
			$Drainer->delete();
			return redirect('admin/show-drainer')->with('success',"Drainer deleted successfully");

		}

}
