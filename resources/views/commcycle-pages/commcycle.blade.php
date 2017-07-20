@extends('main.main')

@section('title')
	Commcycle-Free stuff for the community
@endsection

	{{-- Save this page's link to session --}}
	{{ Session::put('lastpage','commcycleshop') }}
@section('content') 
	<div class="clearfix" style="margin-top:60px;"></div>
	<section id="all">
		<div class="container">
				<div class="row">
					<div class="col-lg-9 col-md-9 text-center">
						<div class="section-title">
							<h2 class="section-title solid-text" id="commcycleTitle"><i class="glyphicon glyphicon-shopping-cart text text-success"></i><b> COMMCYCLE SHOP A</b></h2>
							<p>Below are items from random people that have been uploaded. Everything is totaly free, you just need to apply for what you want, and if you deserve it, it shall surely be yours. If you are felling a bit kind, just click on the upload button to upload a picture of an item you possess and want to donate.</p>
							<a class="btn btn-warning solid" id="postButton" href="#uploadSection" onclick="appear()">Post</a> 
							<a class="btn btn-info solid" href="commcycleshopB">Commcycle Shop B <i class="fa fa-forward"></i></a> 


	  					</div>
					</div>
					<div class="col-lg-3 col-md-3" id="newsBar">
						<div class="thumbnail solid" style="background-color:orange;">
							<h3 class="text-center solid news" style="margin-bottom:15px;">NEWS</h3>
							<div class="form-control" id="" style="max-height:300px;min-height:300px; overflow-y:scroll;" readonly><p><b>Good News!</b></p>				Commcycle has is in patnership with Lady-B. Get your cool Lady-B african prints through 		here. Prices are the same, but we deliver to your doorstep.<br>
								<h4>KEY</h4>
									<small class="text text-muted"><strong>Female:</strong> <i class="fa fa-certificate female"> - </i><i class="fa fa-female female"> - </i><i class="fa fa-bookmark female"></i></small><br>
									<small class="text text-muted"><strong>Gents:</strong> <i class="fa fa-certificate male"> - </i><i class="fa fa-male male"> - </i><i class="fa fa-bookmark male"></i></small><br>
									<small class="text text-muted"><strong>Other</strong> <i class="fa fa-certificate other"> - </i><i class="fa fa-certificate other"> - </i><i class="fa fa-bookmark other"></i></small>
								<br>
								<small>If you have any message or anything to repot, visit the <a href="about" class="text text-info">About page</a></small>
							</div>
						</div>
					</div>

				</div>
		</div>
		<div class="container">
				<div class="row">
					<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
						@forelse($free_items as $item)
							@if($item->Category=='Gents')
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									
									<div class="thumbnail solid " style="max-height:60px;min-height:60px; overflow-y:scroll;">
										<small class="text text-muted pull-right clearfix">Posted: {{ $item->created_at->diffForHumans() }}</small>
										<h1 class="panel-title"><i class="fa fa-male text text-primary" style=""></i> {{ $item->Item }}</h1>
										<p class="text text-muted" style="font-size:15px;"><b>Info: </b>{{ $item->Info }}</p>
										
									</div>
									<div class="panel panel-default item solid">
										<div class="panel-heading solid">
											<small class="label label-primary solid" style="background-color:black;"><i class="fa fa-bookmark" style="color:cyan;"> </i> {{ $item->Category }}</small>
											

											<small class="post-title label label-info pull-right solid" style="background-color:black;cursor:pointer;"><i class="fa fa-certificate" style="color:cyan;"></i> {{ $item->Brand }}</small>
											<h1 class="panel-title" style="opacity:0.0">dfjjkl;ad</h1>
										</div>
										<div classs="panel-body">
											<img src="{{ $item->Pics }}" class="img-responsive com-image" style="width:100%; height:300px;">
										</div>
										<div class="panel-footer clearfix">
											<input type="hidden" value="shop" name="page">
											<a type="button" href="add-to-cart/commcycle/{{ $item->id }}" class="btn btn-success pull-right solid">Buy</a>
											<p class="post-title" style="color:black;cursor:pointer;"><span class="label label-primary solid"><span class="fa fa-money" style="color:white;"> </span> FREE <span></p>
										</div>
									</div>	
								</div>
							@elseif($item->Category=="Ladies")
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="thumbnail solid " style="max-height:60px;min-height:60px; overflow-y:scroll;">
										<small class="text text-success pull-right clearfix ">Posted: {{ $item->created_at->diffForHumans() }}</small>
										<h1 class="panel-title"><i class="fa fa-male" style="color:deeppink;"></i> {{ $item->Item }}</h1>
										<p class="text text-muted" style="font-size:15px;"><b>Info: </b>{{ $item->Info }}</p>
									</div>
									<div class="panel panel-default item solid">
										<div class="panel-heading solid">
											<small class="label label-primary solid" style="background-color:black;"><i class="fa fa-bookmark" style="color:deeppink;"> </i> {{ $item->Category }}</small>


											<small class="post-title label label-info pull-right solid" style="background-color:black;cursor:pointer;"><i class="fa fa-certificate" style="color:deeppink;"></i> {{ $item->Brand }}</small>
										</div>
										<div classs="panel-body">
											<img src="{{ $item->Pics }}" class="img-responsive com-image" style="width:100%; height:300px;">
										</div>
										<div class="panel-footer clearfix">
											
											<a type="button" href="add-to-cart/commcycle/{{ $item->id }}" class="btn btn-success pull-right solid">Buy</a>
											<p class="post-title" style="color:black;cursor:pointer;"><span class="label label-primary solid"><span class="fa fa-money" style="color:white;"> </span> FREE<span></p>
										</div>
									</div>	
								</div>

							@elseif($item->Category=="Other")
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="thumbnail solid "  style="max-height:60px;min-height:60px; overflow-y:scroll;">
										<small class="text text-success pull-right clearfix">Posted: {{ $item->created_at->diffForHumans() }}</small>
										<h1 class="panel-title"><i class="fa fa-certificate" style="color:brown;"></i> {{ $item->Item }}</h1>
										<p class="text text-muted" style="font-size:15px;"><b>Info: </b>{{ $item->Info }}</p>
									</div>

									<div class="panel panel-default item solid">
										<div class="panel-heading solid">
											<small class="label label-primary solid" style="background-color:black;"><i class="fa fa-bookmark" style="color:brown;"> </i> {{ $item->Category }}</small>
											

											<small class="post-title label label-info pull-right solid" style="background-color:black;cursor:pointer;"><i class="fa fa-certificate" style="color:brown;"></i> {{ $item->Brand }}</small>			
										</div>
										<div classs="panel-body">
											<img src="{{ $item->Pics }}" class="img-responsive com-image" style="width:100%; height:300px;">
										</div>
										<div class="panel-footer clearfix">
											
											<a type="button" href="add-to-cart/commcycle/{{ $item->id }}" class="btn btn-success pull-right solid">Buy</a>
											<p class="post-title" style="color:black;cursor:pointer;"><span class="label label-primary solid"><span class="fa fa-money" style="color:white;"> </span> FREE<span></p>
										</div>
									</div>	
								</div>
							@endif
						@empty 
							<p class="alert alert-info solid">There are no items available in the Commcycle shop for now</p>
						@endforelse

					</div>
				</div>
				{{ $free_items->links() }}
			</div>








	</section>






<!-- ################################################# UPLOAD FORM #######################################################-->
	<section id="uploadSection">
	            <div class="container" id="uploadSheet" style=" display:none; border: solid 3px red; padding:10px; background-color: black; opacity:0.9; ">
	                <div class="row">
	                    <div class="col-lg-12 text-center">
	                        <div class="section-title">
	                            <h1 style="color:white;"><strong>Upload Form</strong></h1>
	                            <p class="lead" align="left" style="color:white;">By uploading this image you certify that the item exists and you have no other plans for that item. You are uploading the item unto the Comm-Sector which indicates that your item is totally free and there are no strings attached. You shall not come back for your item after it has already been given out and been used. 
	                            </p>
	 							<div class="threeD">
	             					<label for="agreement" class="text text-success" id="agreementLabel"><input type="checkbox" name="agreement" id="agreement" onclick="agreementHideToggle() ">  I agree to the terms stated above.</label>
	             				</div>
	                        </div>
	                       
	                    </div>
	                </div>
	             
	             
	            
	          	<!-- all the text boxes --> 
	          		<form action="freeupload" method="post" enctype="multipart/form-data">
	                    {{ csrf_field() }}
	                    <div id="textboxPane" style="display:none;">
	                        <div class="row col-md-12 col-md-offset-5 col-lg-12 col-lg-offset-5 col-sm-12 col-sm-offset-4 col-xm-12 col-xs-offset-4">
	                            <input type="file" name="image" id="selectedImage" style="color:white;">
	                        </div>
	                    <br>
	                    <br>
	              			<div class="row">
	    		          		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="margin-bottom:10px;">
	    		          			<input type="text" class="form-control" id="name" name="name" placeholder="please enter your name *"  value="{{ Session::get('old')['Name'] }}" data-validation-required-message="Please enter your name.">
	    		          		</div>
	    		          		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
	    		          			<input type="text" class="form-control" id="email" name="email" value="{{ Session::get('old')['Email'] }}" placeholder="please enter your email *" data-validation-required-message="Please enter your email.">
	    		          		</div>
	    	          		</div> 
	    	          	<br>
	              			<div class="row">
	    		          		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="margin-bottom:10px;">
	    		          			<input type="text" class="form-control" id="itemName" name="itemName" placeholder="please enter the item name *" value="{{ Session::get('old')['ItemName'] }}" data-validation-required-message="Please enter the item name">
	    		          		</div>
	    		          		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
	    		          			<input type="text" class="form-control" id="itemBrand" name="itemBrand" placeholder="please enter your item's brand *" value="{{ Session::get('old')['ItemBrand'] }}" data-validation-required-message="Please enter your item brand.">
	    		          		</div>
	    	          		</div> 
	    	          	<br> 
	    	          	<div class="row">
	    	          		<div class="col-lg-12">
	    	          			<textarea type="text" class="form-control" id="info" name="info" placeholder="please describe what kind of person you would like to have this and any additional information about this item Eg.Size of a shirt*"   data-validation-required-message="Please enter additional information" >{{ Session::get('old')['Info'] }}</textarea>
	                            <input type="hidden" id="categoryBox" name="categoryBox" >
                            	<input type="hidden" id="difference" name="diff" value="free" >	                            
	                        </div>
	    	          	</div>

	    	         <br> 
	    		         <!-- choose category -->
	    		           <div class="row">
	    	                    <div class="col-md-12 text-center">
	    	                    		<span class="" id="otherCategory" onclick="checkMeOtherSpan()"><input type="checkbox" class="threeD" id="other" onclick="otherCheck()"/>  Other</span>
	    	                       
	    	                        	<span class="" id="gentsCategory" onclick="checkMeGentsSpan()"><input type="checkbox" class="threeD" id="gents" onclick="gentsCheck()"/> Gents</span>
	    	             
	    	                        	<span class="" id="ladiesCategory" onclick="checkMeLadiesSpan()"><input type="checkbox" class="threeD" id="ladies" onclick="ladiesCheck()"/> Ladies</span>
	    	                     </div>
	    					</div>
	    			<br>
	                </div>

						<div class="row"> 
							<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 text-center"> 
								<button   class="btn btn-danger goodWidth" id="cancel" name="cancel" value="cancel">Cancel</button>
								<button   class="btn btn-default goodWidth" id="finalise" name="finalise" value="finalise">Upload</button>
								<button  class="btn btn-default goodWidth" id="finalise2" name="alternate" value="alternate">Alternate-upload</button>
							</div>

						</div>
	          		</form>
	          	<!--/.container -->
	            </div>
	</section>
	<style> 

		#commcycleTitle{
			font-size:15px;
		}
	</style>
@endsection