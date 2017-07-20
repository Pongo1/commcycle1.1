<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Lbadmin; 
use App\Log;
use Session;
use App\Subscribe;
use App\Ladyb;
use App\LadyBorder;
use App\Lblog;
use App\lbNews;
use App\Lbmsg;

class LadyBController extends Controller
{

   public function sendMessage(request $request){

        $message = new Lbmsg(); 
        $message->Name = $request->Personname; 
        $message->Number = $request->Personnumber;
        $message->Email = $request->Personemail;
        $message->Message = $request->Personmessage;
        if ($message->save()){
            //send an email to ladyB here 

            //redirect to the about page 
            return redirect('ladyB');
        } 

    }
  public function adminNewsPost(request $request){
    $news = lbNews::find(1); 
    $lblog = new Lblog();
    if($news->update(['News'=>$request->news])){
      $lblog->happening = explode(':',Session::get('admin'))[0]." posted unto ladyB's news board";
      $lblog->save();
      return redirect('ladyB-office');
    } 

  }
  public function adminSignUp(request $request){
    $lbadmin = new Lbadmin(); 
    $lbadmin->Name = $request->name;
    $lbadmin->Email = $request->email;
    $lbadmin->Password = $request->password;
    if($request->superuser){
      $lbadmin->type = 'superuser';
    }else{
      $lbadmin->type='';
    }
    if($lbadmin->save()){
      return redirect('ladyB-profile');
    }else{
      echo 'New Ladyb admin could not be signed up <a href="ladyB-profile>go back</a>"';
    }
  }

  public function adminPasswordChange(request $request ,$id){
    $lbadmin = Lbadmin::find($id); 
    if ($lbadmin->Password == $request->oldPassword){
      if($request->newPassword == $request->confirmPassword){
        if($lbadmin->update(['Password' => $request->newPassword])){
          echo 'Your password has been changed';
          Session::put('lb-admin',$lbadmin->Name.":".$lbadmin->Password);
          return redirect('ladyB-profile');
          //show some notification
        }
      }else{
        echo "The new passwords do not match";
      }
    }else{
      echo 'You password does not match your old one.';
    }
  }
  public function getProfile(){
    $admins = Lbadmin::all();
    return view('ladyB.ladyB-adminprofile',compact('admins'));
  }

   public function index(){
   	return view('ladyB.index');

   }

   public function signOut(){
    Session::forget('lb-admin');
    Session::forget('lb-admin-type');
    Session::forget('lb-admin-id');
    return redirect('ladyB-sign-in');
   }
   
   public function showOrders(){
   		$admins = Lbadmin::all(); 
   		$orders = LadyBorder::orderBy('id','DESC')->paginate(50);
   	return view('ladyB.ladyB-orders',compact('admins','orders'));
   }
   public function showShop(){
      $ladybs = Ladyb::orderBy('id','DESC')->paginate(4); 
      $news = lbNews::find(1);    
   	return view('ladyB.ladyBshop',compact('ladybs','news'));
   }

  public function showMainOffice(){
  	$admins = Lbadmin::all();
    $msgs = Lbmsg::orderBy('id','DESC')->paginate(50);
    $logs = Lblog::orderBy('id','DESC')->paginate(50);
  	return view('ladyB.ladyB-admin',compact('admins','logs','msgs'));
  }

  public function showSignIn(){
    Session::forget('lb-admin');
    Session::forget('lb-admin-type');
    Session::forget('lb-admin-id');
  	return view('ladyB.ladyB-signin');
  }

  public function showStock(){
  	$admins = Lbadmin::all(); 
  	$lbs = Ladyb::orderBy('id','DESC')->paginate(6);
  	return view('ladyB.stock',compact('lbs','admins'));
  }
  public function deleteOrder($id){
    $lborder = LadyBorder::find($id); 
    $lblog = new Lblog();

    if ($lborder->delete()){
      $lblog->happening = explode(':',Session::get('admin'))[0]." deleted ".$lborder->Name."'s order worth ZAR ".$lborder->Price; 
      $lblog->save();
      return redirect('ladyB-order'); 

    }else{
      //even if it fails still return to that same ladyB-order page
      return redirect('ladyB-order'); 
      
    }

  }

  public function adminSignIn(request $request){
  	$admins = Lbadmin::all(); 
    $lbmsgs = Lbmsg::orderBy('id','DESC')->paginate(50);
    $createLog = new Log();
    $createLBLog = new Lblog();
    $logs = Lblog::orderBy('id','DESC')->paginate(50);
        foreach ($admins as $admin) {
            if ($admin->Name ==$request->adminName && $admin->Password == $request->adminPassword){
                $createLog->happening = $admin->Name." signed in to ladyB's section!";
                $createLBLog->happening = $admin->Name." signed in to ladyB's admins office!";
                $createLog->save();
                $createLBLog->save();
                Session::put('lb-admin',$admin->Name.":".$admin->Password);
                Session::put('lb-admin-id',$admin->id); 
                Session::put('lb-admin-type',$admin->type);
                return view('ladyB.ladyB-admin',['logs'=>$logs,'admins'=>$admins,'msgs'=>$lbmsgs]);
            }
        }
        //stay on the sign in page if credentials are not valid
        Session::flash('therror','Your credentials are invalid. Either your Admin-name or Password is incorrect!');
        return redirect('ladyB-sign-in');
  }

  public function showUploadCenter(){
  	$admins = Lbadmin::all(); 
  	$subscribers = Subscribe::all();
  	return view('ladyB.upload-center',compact('admins','subscribers'));

  }

}
