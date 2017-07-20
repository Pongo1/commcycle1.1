<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Free;
use App\NoPicFree;
use Illuminate\Support\Facades\Storage;
use App\Subscribe;
use App\Shop;
use App\NoPicShop;
use App\Message;
use Session;

class CommcycleController extends Controller
{
    public function sendMessage(request $request){

        $message = new Message(); 
        $message->Name = $request->Personname; 
        $message->Number = $request->Personnumber;
        $message->Email = $request->Personemail;
        $message->Message = $request->Personmessage;
        if ($message->save()){
            //send an email to admins here 

            //redirect to the about page 
            return redirect('aboutus');
        } 

    }
   
    public function showAbout(){
        return view('commcycle-pages.about');
    }

    public function subscribe(request $request){
    		$subscriber = new Subscribe();
    		//save subscriber email to the subscribe talbe 
    		$subscriber->Email = $request->subscribe;
    		$subscriber->save();
            return redirect('commcycle');
    }

    public function showNoPicShop(){
        $no_pic_items = NoPicShop::orderBy('id','DESC')->paginate(4); 
        return view('commcycle-pages.shopB',compact('no_pic_items'));
    }

    public function showShop(){
        $shop_items = Shop::orderBy('id','DESC')->paginate(2);
        return view('commcycle-pages.shop',compact('shop_items'));
    }

    public function showCommcycleShop(){
        $free_items = Free::orderBy('id','DESC')->paginate(2);
        return view('commcycle-pages.commcycle',compact('free_items'));
    }

    public function showNoPicCommcycleShop(){
        $no_pic_items = NoPicFree::orderBy('id','DESC')->paginate(4); 
        return view('commcycle-pages.commcycleshopB',compact('no_pic_items'));
    }

}
