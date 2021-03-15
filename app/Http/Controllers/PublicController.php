<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matériau;
use App\Coloris;
use App\Finition;
use App\Rate;
use App\Service;
use App\Sink;
use App\MixerTap;
use App\SoapDispenser;
use App\DrainerBasket;

class PublicController extends Controller
{

public function index()
{

	return view('homepage');

}

public function devisGratuit(){
	$coloris = Coloris::all();
	$matériau = Matériau::all();
	$finition = Finition::all();
	$services = Service::all();
	$sinks     = Sink::all();
	$mixers	= MixerTap::all();
	$soaps 	= SoapDispenser::all();
	$drainer 	= DrainerBasket::all();

	return view('services',compact('matériau','coloris','finition','services','sinks','mixers','soaps','drainer'));


}
	public function getColoris(Request $request){

		$id = $request->cat_id;
		

	    $coloris = Coloris::where("matériaus_id",$id)->get();

	    
	    	$finishing = Finition::where("matériaus_id",$id)->where('coloris_id',$coloris[0]['id'])->get();
	    	
	    return response()->json(['coloris' => $coloris,'finishing' => $finishing]);

	}

	public function getFinishing(Request $request)
	{
		$finishing=Finition::where('coloris_id',$request->color_id)->get();

		$color_image=Coloris::where('id',$request->color_id)->where('matériaus_id',$request->mat_id)->first();
		
		return response()->json(['finishing' => $finishing, 'color_img' => $color_image['picture']]);

	}

	public function getPrice(Request $request)
	{
		$rates=Rate::where('material_id',$request->material_id)->where('color_id',$request->color_id)->where('finishing_id',$request->finishing_id)->get();
		return response()->json(['rates' => $rates]);
	} 

	public function getCalculatedPrice(Request $request)
	{
		$rates=Rate::where('material_id',$request->material_id)->where('color_id',$request->color_id)->where('finishing_id',$request->finishing_id)->where('category',$request->category)->first();
		return response()->json(['rates' => $rates]);
	}

}
