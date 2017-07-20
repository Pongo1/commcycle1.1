<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Free;
use App\NoPicFree;
use App\Subscribe;
use App\Shop;
use App\NoPicShop;
use App\Cart;
use App\Order;
use App\LadyBorder;
use App\Ladyb;

class CartController extends Controller
{
	public function trialAddToCart(request $request,$page, $id){
		if($page == 'shop'){
			$foundItem = Shop::find($id); 
		}elseif($page == 'shopB'){
			$foundItem =NoPicShop::find($id);			
		}elseif($page == 'commcycle'){
			$foundItem =Free::find($id);			
		}elseif($page == 'commcycleB'){
			$foundItem =NoPicFree::find($id);			
		}elseif($page == 'ladyB'){
			$foundItem =Ladyb::find($id);			
		}

		$oldCart = Session::has('cart') ? Session::get('cart') : null; 
		$cart = new Cart($oldCart); 
		$cart->add($foundItem,$page, $id); 
		$request->session()->put('cart',$cart);
		Session::forget('msg');
		return back();	
	}

	public function goToCheckout(){
		$cart = Session::get('cart'); 
		return view('cart.checkout',['products' =>$cart->items]);
	}

	public function deleteCartItem($product_quantity ,$product_price,$id){

		$cart = Session::get('cart');
		unset($cart->items[$id]);
		$cart->quantity = $cart->quantity - $product_quantity;
		$cart->price = $cart->price - $product_price;
		if ($cart->quantity ==0){
			Session::flush();
			return redirect('shop');
		}else{
			return redirect('showcart');
		}
	}

	public function checkout(request $request){
		$newOrder = new Order(); 
		$cart = Session::get('cart');
		$newOrder->Name = $request->name;
		$newOrder->Email = $request->email;		
		$newOrder->Number = $request->number;
		$newOrder->reason = $request->reason;
		$newOrder->Items = "";
		$lborder = new LadyBorder(); 
		$lborder->Name = $request->name; 
		$lborder->Number = $request->number; 
		$lborder->Email = $request->email; 
		$lborder->Items = "";
		$lborder->Price = 0; 
				
		foreach ($cart->items as $products) {
			$newOrder->Items = $newOrder->Items." , ".$products["Item"]["Item"]." - ".$products["Quantity"]." - ".$products["Item"]["Price"];
		}
		//look for ladyB items and send them to ladyB 
		foreach ($cart->items as $prod) {
			if($prod['shop']=='ladyB'){
				$lborder->Items = $lborder->Items." , ".$prod["Item"]["Item"]." - ".$prod["Quantity"]." - ".$prod["Item"]["Price"];
				$lborder->Price = $lborder->Price + $prod["Item"]["Price"];
			}
		}
		$lborder->Items = substr($lborder->Items,3); 
		$lborder->Address = $request->address; 
		//remove the first comma that my loop adds
		$newOrder->Items = substr($newOrder->Items,3);
		$newOrder->Address = $request->address;
		$newOrder->Price = $cart->price; 
		//$newOrder->from = "usual"; 	
		if ($newOrder->save()){
			$lborder->save(); 
			Session::flush(); 
			Session::put('msg','You order has been placed!. You will here from us soon, keep calm and checkout other merchandise');
			return redirect('shop');
			//send email to ladyB here 
			
			//send email to admins to inform them of the order 

		}else{
			echo 'OOps your order could not be placed please try again';
		}			

	}



	public function continueShopping(){
		return redirect(Session::get('lastpage'));
	}

//-------------------------------------------------------------------------------------------------------------------------

	public function clearSession(){
		Session::flush();
	}

	
    public function showStuff(){

    	$ss = Session::get('cart'); 
       	foreach ($ss->items as $value) {
    		echo $value['shop'];
    		echo "<br>";
    	}

    	//print_r($request->session()->all());
    }

	 public function showCart(){
	 	$oldCart = Session::get('cart'); 
		$cart = new Cart($oldCart); 
		return view('cart.cart',['products'=>$cart->items , 'totalprice' =>$cart->price]);
	}
 //    public function addToCartShop(request $request,$id){
 //    	$request->session()->flush();
	// 	//create a shop object
	// 	$selectedItem = Shop::find($id); 
	// 	if ($request->session()->has($selectedItem->Item)){
 //    		$request->session()->put($selectedItem->Item.':'.'shop'.':'.$selectedItem->Price,0);
	// 			return redirect('show');
	// 	}else{
 //    		//save item details to session 
 //    		$request->session()->put($selectedItem->Item.':'.'shop'.':'.$selectedItem->Price,0);
	// 			return redirect('show');
 //    	}
	// }

	// public function addToCartShopB(request $request, $id){
	// 	$selectedItem = NoPicShop::find($id); 
	// 	if ($request->session()->has($selectedItem->Item)){
	// 			$request->session()->put($selectedItem->Item,Array('Page'=> 'shopB','Quantity'=>1,'Price'=>$selectedItem->Price));
	// 			return redirect('show');
	// 	}else{
 //    		//save item details to session 
 //    		$request->session()->put($selectedItem->Item,Array('Page'=>'shopB','Quantity'=>1,'Price'=>$selectedItem->Price));
 //    		return redirect('show');
 //    	}

	// }
	// public function addToCartCommcycleB(request $request, $id){
	// 		$selectedItem = NoPicFree::find($id); 
	// 		if ($request->session()->has($selectedItem->Item)){
	// 				$request->session()->put($selectedItem->Item,Array('Page'=> 'commcycleB','Quantity'=>1,'Price'=>0));
	// 				return redirect('show');
	// 		}else{
	//     		//save item details to session 
	//     		$request->session()->put($selectedItem->Item,Array('Page'=>'commcycleB','Quantity'=>1,'Price'=>0));
	//     		return redirect('show');
	//     	}

	// 	}	

	// public function addToCartCommcycle(request $request, $id){
	// 		$selectedItem = Free::find($id); 
	// 		if ($request->session()->has($selectedItem->Item)){
	// 				$request->session()->put($selectedItem->Item,Array('Page'=> 'commcycle','Quantity'=>1,'Price'=>0));
	// 				return redirect('show');
	// 		}else{
	//     		//save item details to session 
	//     		$request->session()->put($selectedItem->Item,Array('Page'=>'commcycle','Quantity'=>1,'Price'=>0));
	//     		return redirect('show');
	//     	}

	// 	}	

}
