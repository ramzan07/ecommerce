<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\product;
use App\brand;
use App\file;
use App\footer;
use Illuminate\Support\Facades\Input;

class FlexController extends Controller
{
	
 
public function index()
	{

    	$category=category::all();
        $data=product::all();

    	return view('flex',compact('category','data'));
    	
   }
 public function next ($id)
 {

 	$data=\App\product::where('id','=',$id)->first();

  	return view('new_detail',compact('data'));
 }

public function insert()
	{

    	return view('insert');
    	
   }
   public function detail()
	{

    	return view('detail');
    	
   }
    public function add()
    {

        return view('addproduct');
        
   }

public function File(Request $request)
	{
       
      	$data=new product();
    	$data->product_name="sdasdad";
		$data->details="sdasdad";
		$data->price="sdasdad";
		$data->model="sdasdad";
		$data->cat_id=1;


      $file=Input::file("image");

        if(!empty($file))
        {

            $newFilename=$file->getClientOriginalName();
             $destinationPath='files';
            $file->move($destinationPath,$newFilename);
             $data->image = $newFilename;
             
        }
            
         $data->save();
     
	}


        public function indexb()
                {

                    $id = $_GET['id'];
                    $brand= brand::where('cat_id',$id)->get();
                   
                  
                  // return view('AddModel', compact('category', 'brand'));
                     return $brand;


                
                }

	public function addproduct(Request $request)
				{
					
                     $product=new product();

      $file=Input::file("image");

        if(!empty($file))
        {

            $newFilename=$file->getClientOriginalName();
             $destinationPath='files';
            $file->move($destinationPath,$newFilename);
             $product->image = $newFilename;
             
        }
            
         

                     
                     $product->cat_id=$request->input('cat_id');
                     $product->brand_id=4;
                     $product->model_name=$request->input('model_name');
                     $product->price=$request->input('price');
                     $product->details=$request->input('details');
                     $product->dimensions=$request->input('dimensions');
                     $product->weight=$request->input('weight');
                     $product->OS=$request->input('OS');

                     $product->realflash=$request->input('realflash');
                     $product->G2=$request->input('G2');
                     $product->G3=$request->input('G3');
                      $product->G4=$request->input('G4');
                     $product->GPS=$request->input('GPS');
                     $product->Loudpeaker=$request->input('Loudpeaker');

                     $product->HeadPHones=$request->input('HeadPHones');

                     $product->Infrared=$request->input('Infrared');

                     $product->Fingerprint_sensor=$request->input('Fingerprint_sensor');
                        $product->Proximity=$request->input('Proximity');
                     $product->Accelerometer=$request->input('Accelerometer');
                      $product->Gyroscope=$request->input('Gyroscope');

                     $product->Ambient_Light=$request->input('Ambient_Light');	

                     $product->display_type=$request->input('display_type');	

      
                     $product->Size=$request->input('Size');
                     $product->Resolution=$request->input('Resolution');
                     $product->Pixel_Density=$request->input('Pixel_Density');
                     $product->Touchscreen_type=$request->input('Touchscreen_type');
                     $product->Color_Reproduction=$request->input('Color_Reproduction');
                     $product->Screen_to_body_percentage=$request->input('Screen_to_body_percentage');

                     $product->save();
                     dd('posted');  

	


				}
	
}