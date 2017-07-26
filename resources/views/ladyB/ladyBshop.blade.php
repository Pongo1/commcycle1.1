@extends('main.main')


@section('title')
	LadyB shop
@endsection
{{-- Save this page's link to session --}}
	{{ Session::put('lastpage','ladyBshop') }}

@section('content') 
	<div class="clearfix" style="margin-top:60px;"></div>
	<section id="all">
		<div class="container">
				<div class="row">
					<div class="col-lg-9 col-md-9 text-center">
						<div class="section-title">
							<h2 class="section-title solid-text" id="commcycleTitle"><i class="glyphicon glyphicon-shopping-cart" style="color:deeppink;"></i><b> LADY-B STOCK</b></h2>
							<p>Below are items from random people that have been uploaded. Everything is totaly free, you just need to apply for what you want, and if you deserve it, it shall surely be yours. If you are felling a bit kind, just click on the upload button to upload a picture of an item you possess and want to donate.</p>
							<p class="label label-default solid" id="ladyBBanner" style="background: black;"><i class="fa fa-certificate" style="color:deeppink;"></i> WELCOME TO LADY-B'S CORNER</p> 
	  					</div>
		  						{{-- <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 clearfix" id="lb1"> 
									<img src="{{ asset('imgs/utani.jpg') }}" class="img-responsive ladyB-small solid ladyB-border" alt="ladyB Image">
									 <p class="caption solid-text-light text center" style="margin-top:5px;"><b>Lady-B Big Legs</b></p>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" id="lb2" > 
									<img src="{{ asset('imgs/armpit.jpg') }}" class="img-responsive ladyB-small solid ladyB-border" alt="ladyB Image">
									 <p class="caption solid-text-light text center" style="margin-top:5px;"><b>Lady-B Round chain</b></p>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" id="lb3"> 
									<img src="{{ asset('imgs/gh.jpg') }}" class="img-responsive ladyB-small solid ladyB-border"
									 alt="ladyB Image">
									 <p class="caption solid-text-light text center" style="margin-top:5px;"><b>Lady-B Shirt</b></p>
								</div> --}}
					</div>
					<div class="col-lg-3 col-md-3" id="newsBar">
						<div class="thumbnail solid"  style="background-color:orange;">
							<h3 class="text-center solid news" style="">NEWS</h3>
							<div class="form-control" id="" style="max-height:300px;min-height:300px; overflow-y:scroll;" readonly><br>
							<p class="text text-muted">{{ $news->News }}</p>
									
							</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
					@forelse($ladybs as $item)
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			
								<div class="panel panel-default item solid">
									<div class="panel-heading solid">
										<small class="label label-primary solid" style="background-color:black;"><i class="fa fa-bookmark" style="color:cyan;"> </i> {{ $item->Item }}</small>
										

										<small class="post-title label label-info pull-right solid" style="background-color:black;cursor:pointer;"><i class="fa fa-certificate" style="color:cyan;"></i> {{ $item->Quantity }} left</small>
										<h1 class="panel-title" style="opacity:0.0">dfjjkl;ad</h1>
									</div>
									<div classs="panel-body">
										<img src="{{ $item->Pics }}" class="img-responsive com-image" style="width:100%; height:300px;">
									</div>
									<div class="panel-footer clearfix">
										<input type="hidden" value="shop" name="page">
										<button type="button" data-toggle='modal' data-target='{{ '#modal'.$item->id }}' class="btn btn-warning pull-right solid-two solid-text-light"><span class='glyphicon glyphicon-eye-open'></span> View</button>
											<p style="opacity:0" class="pull-right">sl</p>	

										<a type="button" href="add-to-cart/ladyB/{{ $item->id }}" class="btn btn-success pull-right solid-two solid-text-light">Buy</a>
										<p class="post-title" style="color:black;cursor:pointer;"><span class="label label-primary solid-two solid-text-light fontlize"><span class="fa fa-money" style="color:white;"> </span> ZAR {{ $item->Price }} </span></p>
									</div>
								</div>	
							</div>
							<!-- ########################## modal for 'ladyB' items ########################### -->
								<div class="modal fade" id='{{ 'modal'.$item->id }}'> 
					                <div class="modal-dialog modal-md"> 
					                    <div class="modal-content"> 
					                        <div class="modal-header"> 
					                            <button type='button' class='close' data-dismiss='modal'><span aria-hidden='true'></span>&times;<span class="sr-only"></span></button>
					                            <h4 class='modal-title solid-text-light' style='color:black;'><b>{{ $item->Item }} </b></h4>
					                        </div>
					                        <div class='modal-body'>
					                            <center> 
					                                <img class='img-thumbnail solid-two' src='{{ $item->Pics }}' style='width:80%; height:250px'>
					                            </center>
					                            <p style="color:black;">
					                            	<span class="label label-primary solid-two solid-text-light fontlize">Price: <b><span class='solid-text-light-two fontlize'> ZAR {{ $item->Price }}</span></b></span>
					                            	<span class="label label-info solid-two solid-text-light fontlize">Size: <b><span class='solid-text-light-two fontlize'>{{ $item->Size }}</span></b></span>
				                                	<span class="label label-warning solid-two solid-text-light">Category: <b><span class='solid-text-light-two fontlize'>{{ $item->Quantity }}</span> left</b></span><br>
				                                	<span class="solid-text-light-two"><b>Additional information:</b></span><br><span class=''>{{ $item->Info }}</span><br>
				                                	<span class="label label-default solid-two solid-text-light pull-right"> <small class=' fontlize'>Posted by: <b><span class='solid-text-light-two'>LadyB</span></b> {{ $item->created_at->diffForHumans() }}</small></span>
					                            </p>
					                        </div>
					                        <div class='modal-footer'> 
					                            <button class='btn btn-danger solid-two' type='button' data-dismiss='modal'>Close</button>
					                        </div>
					                    </div>
					                </div>
					            </div>
					@empty 

					@endforelse 
				</div>
			</div>
			{{ $ladybs->links() }}
	</div>

	<style> 

		#commcycleTitle{
			font-size:15px;
		}
		
        	#lb1,#lb2,#lb3{
        		width:3px;
        	}
	</style>
@endsection

@section('patner')
	<span style="color:deeppink">@</span>ladyB		
@endsection