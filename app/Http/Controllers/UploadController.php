<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Free;
use App\NoPicFree;
use App\Subscribe;
use App\Shop;
use App\NoPicShop;
use App\Message;
use Session;
use Image; 
use App\Lblog;
use App\Ladyb;

class UploadController extends Controller
{
	 public function uploadFree(request $request){
        //save all user inputs temporarily so they can be reloaded if anything goes wrong.
        Session::put('old',['Name'=>$request->name,'Email'=>$request->email,'ItemName'=>$request->itemName,'ItemBrand'=>$request->itemBrand,'Info'=>$request->info,'Price'=>'','Size'=>'']);
    	if ($request->finalise == "finalise" && $request->hasFile('image')){
            $ext = $request->image->getClientOriginalExtension();
            if( $ext=='jpeg' || $ext=='jpg' || $ext=='png' || $ext=='bmp' || $ext=='gif'|| $ext=='JPEG' || $ext=='JPG' || $ext=='PNG' || $ext=='BMP' || $ext=='GIF' ){
        		//upload the image
        		$fileName = uniqid().$request->image->getClientOriginalName();
        		//check image size over here before intervention image crashess
        		if($request->image->getClientSize() > 1990000){
        			//if the image fails to be resized, just upload 
        			$free = new Free();
        			$free->Name = $request->name;
        			$free->Email = $request->email;
        			$free->Item = $request->itemName;
        			$free->Brand = $request->itemBrand;
        			$free->Category = $request->categoryBox; 
        			$free->info = $request->info;
        			$fileName = uniqid().$request->image->getClientOriginalName();
        			if ($request->image->move('userImages',$fileName)){
	                    $free->Pics ="userImages/".$fileName;
	                    if($free->save()){
	                    	//send an email here

	                        Session::forget('old');
	                        return redirect(Session::get('lastpage'));
	                    }
	        		}
        		}else{
        			//resize over here
	        		$newImage = Image::make($request->image)->resize(400,300);
	        		$newImagePath = public_path('userImages/'.$fileName);
	        		if ($newImage->save($newImagePath)){
	        			$free = new Free();
	        			$free->Name = $request->name;
	        			$free->Email = $request->email;
	        			$free->Item = $request->itemName;
	        			$free->Brand = $request->itemBrand;
	        			$free->Category = $request->categoryBox; 
	        			$free->info = $request->info;
	        			$free->Pics = "userImages/".$fileName;
	        			if($free->save()){
	        				//send email here 

	        				Session::forget('old'); 
	        				return redirect(Session::get('lastpage'));
	        			}
	        		}
        		}
	        		
            }else{
                echo "You did not select any image. You selected a ".$ext." file";
                echo " <p class='alert alert-warning'><a href='".Session::get('lastpage')."'>Go back</a></p>";
            }
         //--------------------------------------------------------------------------------------------------------------
    	}else if($request->alternate=='alternate'){
    		$free = new NoPicFree();
    		$free->Name = $request->name;
			$free->Email = $request->email;
			$free->Item = $request->itemName;
			$free->Brand = $request->itemBrand;
			$free->Category = $request->categoryBox; 
			$free->info = $request->info; 
			if ($free->save()){
                //send an email here
				return redirect(Session::get('lastpage'));
			}
    	}else{
    		if ($request->finalise=='finalise'){

    			echo "<div class='container'>
    					<p class='alert alert-warning'>You did not select any image <a href='".Session::get('lastpage')."'>Go back</a></p>
					  </div>";
    		}else{
    			return redirect(Session::get('lastpage'));
    		}
    	}
    }
    

    public function uploadShop(request $request){
        Session::put('old',['Name'=>$request->name,'Email'=>$request->email,'ItemName'=>$request->itemName,'ItemBrand'=>$request->itemBrand,'Info'=>'','Price'=>$request->price,'Size'=>$request->size]);
        if ($request->finalise == "finalise" && $request->hasFile('image')){
            $ext = $request->image->getClientOriginalExtension();
            //check if selected file is an image
            if( $ext=='jpeg' || $ext=='jpg' || $ext=='png' || $ext=='bmp' || $ext=='gif'|| $ext=='JPEG' || $ext=='JPG' || $ext=='PNG' || $ext=='BMP' || $ext=='GIF' ){
                //upload the image
                $fileName = uniqid().$request->image->getClientOriginalName();
                //check image size over here before intervention image crashess
        		if($request->image->getClientSize() > 1990000){
        			//all big images cannot be resized so just upload
        			$shop = new Shop();
                    $shop->Name = $request->name;
                    $shop->Email = $request->email;
                    $shop->Item = $request->itemName;
                    //check if the item has size and add it to the brand
                    if ($request->size ==""){
                        $shop->Brand = $request->itemBrand;
                    }else{
                         $shop->Brand = $request->itemBrand." [ Size: ".$request->size."]";
                    }
                    $shop->Category = $request->categoryBox; 
                    $shop->Price = $request->price + $request->price * 0.1;
	                if ($request->image->move('userImages',$fileName)){
	                    $shop->Pics = "userImages/".$fileName;
	                    if ($shop->save()){
	                        //send an email here

	                        Session::forget('old');
	                        return redirect('shop');
	                    }
	                }
                
	            }else{
	            		//resize over here
	        			$newImage = Image::make($request->image)->resize(400,300);
	        			$newImagePath = public_path('userImages/'.$fileName);
		                if ($newImage->save($newImagePath)){
		                    $shop = new Shop();
		                    $shop->Name = $request->name;
		                    $shop->Email = $request->email;
		                    $shop->Item = $request->itemName;
		                    //check if the item has size and add it to the brand
		                    if ($request->size ==""){
		                        $shop->Brand = $request->itemBrand;
		                    }else{
		                         $shop->Brand = $request->itemBrand." [ Size: ".$request->size."]";
		                    }
		                    $shop->Category = $request->categoryBox; 
		                    $shop->Price = $request->price + $request->price * 0.1;
		                    $shop->Pics = "userImages/".$fileName;
		                    if ($shop->save()){
		                        //send an email here

		                        Session::forget('old');
		                        return redirect('shop');
		                    }
		                }
	            	}
            }else{
                 echo "You did not select any image. You selected a ". $ext." file";
                echo " <p class='alert alert-warning'><a href='".Session::get('lastpage')."'>Go back</a></p>";
            }
           //-----------------------------------------------------------------------------------------------------------
        }else if($request->alternate=='alternate'){
            $shop = new NoPicShop();
            $shop->Name = $request->name;
            $shop->Email = $request->email;
            $shop->Item = $request->itemName;
            //check if th time has size and add it to the brand
             if ($request->size ==""){
                    $shop->Brand = $request->itemBrand;
                }else{
                     $shop->Brand = $request->itemBrand." [ Size: ".$request->size."]";
                }            
            $shop->Category = $request->categoryBox; 
            $shop->Price = $request->price + $request->price * 0.1;
            if ($shop->save()){
                //send an email here
                return redirect('shop');
            }
        }else{
            if ($request->finalise=='finalise'){
                echo "<div class='container'>
                        <p class='alert alert-warning'>You did not select any image <a href='/shop'>Go back</a></p>
                      </div>";
            }else{
            	return redirect('shop');
            }
        }
    }


    public function ladyBUpload(request $request){
	    $lblog = new Lblog(); 
	  	if($request->hasFile('image')){
	  		$ext = $request->image->getClientOriginalExtension();
	  		if( $ext=='jpeg' || $ext=='jpg' || $ext=='png' || $ext=='bmp' || $ext=='gif'|| $ext=='JPEG' || $ext=='JPG' || $ext=='PNG' || $ext=='BMP' || $ext=='GIF' ){
	  			if($request->image->getClientSize() > 1990000){
			  		$lbItem = new Ladyb(); 
				  	$lbItem->Item = $request->itemName;
				  	$lbItem->Price = $request->itemPrice + $request->itemPrice * 0.1;
				  	$lbItem->Size = $request->itemSize;
				  	$lbItem->Quantity = $request->itemQuantity;
				  	$lbItem->Info = $request->itemInfo;
			  		$fileName = uniqid().$request->image->getClientOriginalName();
			  		if ($request->image->move('ladyB',$fileName)){
		    			$lbItem->Pics ="ladyB/".$fileName;
		    			if($lbItem->save()){
		    				$lblog->happening =  "The upload was successfull, ".explode(':',Session::get('lb-admin'))[0];
			            	$lblog->save();
			            	Session::flash('lb-finished-upload',['alertType'=>'success','ItmName' =>$lbItem->Item,'msg' => 'has been posted succesfully!']);
		    				return redirect('uploadcenter');
		    			}else{
		    				$lblog->happening =  "The upload was successfull but your data could not be saved";
		            		$lblog->save();
		    			}
			  		}else{
			  			$lblog->happening= "Ooops something came up.. the upload couldnt go through.. please refresh and try again";
			        	$lblog->save();
			  		}
			  	}else{
			  		$lbItem = new Ladyb(); 
				  	$lbItem->Item = $request->itemName;
				  	$lbItem->Price = $request->itemPrice + $request->itemPrice * 0.1;
				  	$lbItem->Size = $request->itemSize;
				  	$lbItem->Quantity = $request->itemQuantity;
				  	$lbItem->Info = $request->itemInfo;
			  		$fileName = uniqid().$request->image->getClientOriginalName();
			  		//resize over here
	    			$newImage = Image::make($request->image)->resize(400,300);
	    			$newImagePath = public_path('ladyB/'.$fileName);
	    			if ($newImage->save($newImagePath)){
	    				$lbItem->Pics ="ladyB/".$fileName;
	    				if($lbItem->save()){
	    					$lblog->happening =  "The upload was successfull, ".explode(':',Session::get('lb-admin'))[0];
			            	$lblog->save();
			            	Session::flash('lb-finished-upload',['alertType'=>'success','ItmName' =>$lbItem->Item,'msg' => 'has been posted succesfully!']);
		    				return redirect('uploadcenter');
		    			}else{
		    				$lblog->happening =  "The upload was successfull but your data could not be saved";
			           	 	$lblog->save();
			    			}
				  		}else{
				  			$lblog->happening= "Ooops something came up.. the upload couldnt go through.. please refresh and try again";
				        	$lblog->save();
				  		}
	    			}
			  	}
		}else{
		  		$lblog->happening =  explode(':',Session::get('lb-admin'))[0].", are you sure you selected any image?";
		  	 	 $lblog->save();
		  	 	 Session::flash('lb-finished-upload',['alertType'=>'danger','ItmName' =>'','msg' => explode(':',Session::get('lb-admin'))[0].' are you sure you chose an image?']);
		  	 	 return redirect('uploadcenter');
		}

		  	// }else{
		  	// 	
	  	//}

  	}








}
