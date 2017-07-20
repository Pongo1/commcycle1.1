@if(Session::has('lb-admin'))
    @foreach($admins as $admin)
        @if(Session::get('lb-admin') == $admin->Name.":".$admin->Password )
        	@extends('ladyB.ladyB-nav')
        	@section('content')
	        	<h1 class="text-center solid-text-light"><span style="color:deeppink;">ALL</span> <span style="color:orange;">LADYB</span> <span style="color:cyan;">ITEMS</span></h1>
					<hr>
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-lg-9 col-sm-12 col-xs-12">
								@forelse($lbs as $lbs_item)
									<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
										<div class="thumbnail solid-two ">
											<small class="text text-success pull-right clearfix text text-success">{{ $lbs_item->created_at->diffForHumans() }}</small>
											<h1 class="panel-title"> LadyB</h1>
										</div>
										<div class="panel panel-default item solid-two">
											<div class="panel-heading ">
												<small class="label label-primary solid-two" style="background-color:black;"><i class="fa fa-money" style="color:white"> </i> ZAR {{ $lbs_item->Price }}</small>
												<small class="post-title label label-info pull-right solid-two" style="background-color:black;cursor:pointer;"><i class="fa fa-certificate" style="color:deeppink;"></i> Quantity: {{ $lbs_item->Quantity }}</small>
											</div>
											<div classs="panel-body">
												<img src="{{ $lbs_item->Pics }}" class="img-responsive com-image" style="width:100%; height:200px;">
											</div>
										@if (Session::get('lb-admin-type')=='superuser')
											<div class="panel-footer clearfix">
												<p class="pull-left solid-text-light"><b>{{ $lbs_item->Item }}</b></p>
												<a type="button" href="admin-deletion/{{ explode(":",Session::get('admin'))[0] }}/commcycle/{{ $lbs_item->id }}" class="btn btn-danger pull-right solid-two">Delete</a>	
											</div>
										@endif
										</div>	
									</div>

								@empty 
									<p class="alert alet-warning">There are no items in commcycle-lbs</p>
								@endforelse
								{{ $lbs->links()}}
							</div>
						</div>
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