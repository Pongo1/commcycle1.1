@if(Session::has('lb-admin'))
    @foreach($admins as $admin)
        @if(Session::get('lb-admin') == $admin->Name.":".$admin->Password )
        	@extends('ladyB.ladyB-nav')
        	@section('content')
        	<div style="margin-top:50px"></div>
	        	<div class="container">
	        		<div class="row"> 
		        		<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12"> 
		        			<div class="thumbnail text center solid-two" id="thumb">
		        				@if(Session::get('lb-admin-type')=='superuser')
		        					<img class="img-responsive solid" src="{{ asset('imgs/armpit.jpg') }}" id="lbpic">
		        					<br>
		        					<center>
		        						<small class="text text-success text-center">You are a super-admin.</small>
		        					<center>
		        				@else 
		        					<img class="img-responsive" src="{{ asset('imgs/user-key.png') }}" id="lbpicno-admin">
		        					<br>
		        					<center>
		        						<small class="text text-success text-center">You are not a super-admin.</small>
		        					<center>
		        				@endif
		        				<h3 class="text-center">{{ explode(':',Session::get('lb-admin'))[0] }}</h3>
		        			
		        			</div>
		        		</div>
		        		<div class="col-md-6 col-lg-6 col-sm-6 col-xs-12"> 
		        			<div class="thumbnail text center solid-two" id="thumb">
			        			<form method="get" action="ladyB-admin-sign-up">
			        				{{ csrf_field() }}
			        				<div class="form-group"> 
			        					<p class="text text-muted text-center">Sign someone up as admin. You can assign them super-admin or normal rights; just check the 'Make super-admin box'. All admins with super-admin rights can delete shop items,orders and can upload. Normal admins can only see orders,shop items and upload.</p>
			        				</div>
			        				<div class="form-group">
			        					<input type="name" class="form-control" name="name" placeholder="Name" required> 
			        				</div>
			        			
			        				<div class="form-group">
			        					<input type="email" class="form-control" name="email" placeholder="Email" required> 
			        				</div>
			        			
			        			
			        				<div class="form-group">
			        					<input type="password" class="form-control" name="password"> 
			        				</div>
			        			

			        				<div class="form-group clearfix">
			        				@if(Session::get('lb-admin-type')=='superuser')
			        					<label class="text text-info"><input type="checkbox" class="" name="superuser"> Make Super-admin</label> 		        					
			        					<button type="submit" class="btn btn-success pull-right solid-two"><span class="fa fa-sign-up"></span> Sign Up</button> 
			        				@else 
			        					<p class="text text-danger">You dont have super-admin rights, so you cant sign any one up</p>
			        				@endif
			        				</div>
			        			</form>
		        			</div>
		        		</div>
		       		 </div>
		       		 <div class="row">
		       		 	<div class="col-md-5 col-lg-5 col-sm-6 col-xs-12"> 
		       		 			<div class='panel panel-info solid-two'> 
		       		 				<div class="panel-heading" style="background: deeppink; color:black;"><h1 class="panel-title">LadyB customer news</h1></div>
		       		 				<div class="panel-body" style="padding:5px;">
		       		 					<p>You can give your customers information through here. After you click the post button, anything in the box below will appear on the news bar on in the ladyB shop!</p> 
		       		 				</div>
		       		 				<form method="get" action="ladyB-news-post">
		       		 					{{ csrf_field() }}
		       		 					<div class="form-group">
			        						<textarea class="form-control" name="news" placeholder="Give customers and site visitors updates on anything" rows="4" style="width:100%;" required></textarea>
			        					</div>
			        					<center>
				        					<div class="form-group">
				        						<button type="submit" class="btn btn-info solid-two" style="background: deeppink;">Post <span class="fa fa-send"></span></button> 
				        					</div>
			        					</center>
		       		 				</form>
		       		 				<br> 
		       		 				


		       		 			</div>
		       		 	</div>
		       		 	<div class="col-md-5 col-lg-5 col-sm-6 col-xs-12"> 
		        			<div class="thumbnail text center solid-two" id="thumb">
			        			<form method="get" action="ladyB-admin-password-change/{{ Session::get('lb-admin-id') }}">
			        				{{ csrf_field() }}
			        				<div class="form-group"> 
			        					<h4 class="text text-warning text-center">Change my password.</h4>
			        				</div>
			        				<hr>
			        				<div class="form-group">
			        					<input type="password" class="form-control" name="oldPassword" placeholder="old password" required> 
			        				</div>
			        			
			        				<div class="form-group">
			        					<input type="password" class="form-control" name="newPassword" placeholder="new password" required> 
			        				</div>
			        			
			        			
			        				<div class="form-group">
			        					<input type="password" class="form-control" placeholder="Confirm password" name="confirmPassword"> 
			        				</div>
			        			

			        				<div class="form-group clearfix">
			        					<label class="text text-success">{{ explode(':',Session::get('lb-admin'))[0] }}</label>		        					
			        					<button type="submit" class="btn btn-success pull-right solid-two"><span class="fa fa-sign-up"></span> Sign Up</button> 
			        				</div>
			        			</form>
		        			</div>
		        		</div>
		       		 </div>
	        	</div>
	        	<style>
	        		#thumb {
	        			padding:20px;
	        		}
	        		#lbpic{
	        			border-radius:100%;
	        			height:200px;
	        			width:200px;
	        			border:solid 4px #585858;
	        		}
	        		#lbpicno-admin{
	        			
	        			height:200px;
	        			width:200px;
	        			

	        		}
	        	</style>
		    @endsection
		     @break;
        @endif 

    @endforeach 
@else
	<div class="container" style="margin-top:300px">
		<div class="row col-md-6 col-lg-6 col-md-offset-3 col-sm-6 col-xs-6"> 
			<div class="alert alert-warning clearfix solid solid-text-light" style="background: deeppink; color:cyan;">
				<p>You are not signed in as an admin. Please do so :) <a class="btn btn-success pull-right solid-two" href="ladyB-sign-in" style="background:orange;">Sign in </a></p>
			</div>
		</div>
	</div>
@endif