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
use App\Ladyb; 
use App\Message; 
use App\Log;
use App\Deleted;
use App\User;
use Auth;

class AdminController extends Controller
{

    public function adminAuthentication(request $request){
        $admins = User::all(); 
        $createLog = new Log();
        foreach ($admins as $admin) {
            
            if ($admin->name ==$request->adminName && $admin->password == $request->adminPassword){
                $createLog->happening = $admin->name." signed in!";
                $createLog->save();
                Session::put('admin',$admin->name.":".$admin->password);
                return redirect('admin');
            }
        }
        //if admin is not able to log in 
        Session::flash('therror','Your credentials are invalid. Either your Admin-name or Password is incorrect!');
        return redirect('admin-signin');


    }
    public function adminSignIn(){
        return view('admin-pages.signin');
    }
    public function adminLogout(){
        Session::forget('admin'); 
        return redirect('admin-signin');
    }

	public function communicate(request $request,$admin){
		$createLog = new Log();
		if ($request->allSubscribers){
			$subscribers = Subscribe::all(); 
			foreach ($subscribers as $subscriber) {
				//send emails to all subscribers with title from request
			}
		$createLog->happening =$admin.' sent a message to all commcycle subscribers.';
		$createLog->save();		
		echo "email sent to all subscribers"; 
		return redirect('subscribers'); 

		}else{
			$email = $request->personemail;

			//send email to single email here 

			$createLog->happening =$admin.' sent a message to '.$email;
			$createLog->save();					
			echo "email sent"; 
			return redirect('subscribers');
		}
	}
    public function showAdminMain(){
    	//new Messages and Logs object 
    	$msgs = Message::orderBy('id','DESC')->paginate(50); 
    	$logs = Log::orderBy('id','DESC')->paginate(50);
        $admins = User::all(); 
    	return view('admin-pages.index',['msgs' => $msgs, 'logs' =>$logs,'admins' =>$admins]);
    }

    public function showSubscribers(){
    	//new subscriber object 
    	$subscribers = Subscribe::orderBy('id','DESC')->paginate(50);
        $admins = User::all();  
    	return view('admin-pages.subscriber',compact('subscribers','admins'));
    }

    public function showOrders(){
    	$orders = Order::orderBy('id','DESC')->paginate(50);
        $admins = User::all(); 
    	return view('admin-pages.orders',compact('orders','admins'));
    }

    public function showAdminCommItems(){
    	$free = Free::orderBy('id','DESC')->paginate(6); 
    	$freeNoPic = NoPicFree::orderBy('id','DESC')->paginate(50);
        $admins = User::all(); 
    	return view('admin-pages.commcycleitems',['free' =>$free,'freeNoPic' =>$freeNoPic,'admins' =>$admins]);
    }
    public function showAdminShopItems(){
    	$shop = Shop::orderBy('id','DESC')->paginate(6); 
    	$shopNoPic = NoPicShop::orderBy('id','DESC')->paginate(50);
        $admins = User::all(); 
    	return view('admin-pages.shopitems',[ 'shop' => $shop , 'shopNoPic' => $shopNoPic,'admins' =>$admins ]);
    }

    public function deleteItem(request $request,$admin, $section, $id){
    	if($section =='commcycleB'){
    		$founditem = NoPicFree::find($id);
    	}elseif($section == 'commcycle'){
    		$founditem = Free::find($id);
    	}elseif($section == 'shop'){
    		$founditem = Shop::find($id);
    	}elseif($section == 'shopB'){
    		$founditem = NoPicShop::find($id);
    	}
    	$the_item_name = $founditem->Item;
    	$the_item_price = $founditem->Price;
    	$the_item_uploader=$founditem->Name;
    	$deletedObject = new Deleted();
    	$deletedObject->Name = $founditem->Name;
    	$deletedObject->Email = $founditem->Email;
    	$deletedObject->Item = $founditem->Item;
    	$deletedObject->Brand = $founditem->Brand;
    	$deletedObject->Category = $founditem->Category;
    	$deletedObject->Price = $founditem->Price;
    	$deletedObject->Pics = $founditem->Pics;
    	if ($deletedObject->save()){
    		if ($founditem->delete()){
    			$createLog = new Log();
    			$createLog->happening = $admin.' deleted '.$the_item_name.' with price '.$the_item_price.' ZAR uploaded by '.$the_item_uploader;
    			if($createLog->save()){
    				return redirect('admin');
    			}

    		}
    	}
    } 
        
    public function deleteOrder($admin,$id){
     	$founditem= Order::find($id); 
     	$createLog = new Log(); 
     	$createLog->happening = $admin.' deleted '.$founditem->Name."'s order!"; 
     	if ($createLog->save()){
     		if ($founditem->delete()){
     			return redirect('admin');
     		}else{
     			$createLog->happening = $admin.' tried to delete '.$founditem->Name."'s order, but was unsuccessfull.";
     			if ($createLog->save()){
     				return redirect('admin');
     			} 
     		}

     	} 
    	
    }
}
