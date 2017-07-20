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
	  						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 clearfix" id="lb1"> 
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
							</div>
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
								<div class="thumbnail solid " style="max-height:60px;min-height:60px; overflow-y:scroll;">
									<small class="text text-muted pull-right clearfix">Posted {{ $item->created_at->diffForHumans() }}</small>
									<h1 class="panel-title"><i class="fa fa-certificate text text-primary" style=""></i> {{ $item->Item }}</h1>
									<p class="text text-muted" style="font-size:15px;"><b>Info: </b>{{ $item->Info }}</p>
								</div>
								<div class="panel panel-default item solid">
									<div class="panel-heading solid">
										<small class="label label-primary solid" style="background-color:black;"><i class="fa fa-bookmark" style="color:cyan;"> </i>{{ $item->Quantity }} left </small>
										

										<small class="post-title label label-info pull-right solid" style="background-color:black;cursor:pointer;"><i class="fa fa-certificate" style="color:cyan;"></i> LadyB</small>
										<h1 class="panel-title" style="opacity:0.0">dfjjkl;ad</h1>
									</div>
									<div classs="panel-body">
										<img src="{{ $item->Pics }}" class="img-responsive com-image" style="width:100%; height:300px;">
									</div>
									<div class="panel-footer clearfix">
										<input type="hidden" value="shop" name="page">
										<a type="button" href="add-to-cart/ladyB/{{ $item->id }}" class="btn btn-success pull-right solid">Buy</a>
										<p class="post-title" style="color:black;cursor:pointer;"><span class="label label-primary solid"><span class="fa fa-money" style="color:white;"> </span> ZAR {{ $item->Price }} </span></p>
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
		#ladyBBanner{
        		position:relative;
        	}
        	#lb1,#lb2,#lb3{
        		width:3px;
        	}
	</style>
@endsection

@section('patner')
	<span style="color:deeppink">@</span>ladyB		
@endsection