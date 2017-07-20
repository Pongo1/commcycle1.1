@if(Session::has('admin'))
		@foreach($admins as $admin)
			@if(Session::get('admin') == $admin->name.":".$admin->password )
				@extends('admin-pages.admin-nav')

				@section('content')
					<div style="margin-top:40px;"></div>
					<h1 class="text-center solid-text-light"><span style="color:deeppink;">ALL</span> <span style="color:orange;">COMMCYCLE'S</span> <span style="color:cyan;">ITEMS</span></h1>
					<hr>
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-lg-9 col-sm-12 col-xs-12">
								@forelse($free as $free_item)
									<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
										<div class="thumbnail solid-two ">
											<small class="text text-success pull-right clearfix text text-success">{{ $free_item->created_at->diffForHumans() }}</small>
											<h1 class="panel-title">{{ $free_item->Name }}</h1>
										</div>
										<div class="panel panel-default item solid-two">
											<div class="panel-heading ">
												<small class="label label-primary solid-two" style="background-color:black;"><i class="fa fa-bookmark" style="color:deeppink;"> </i> {{ $free_item->Category }}</small>
												<small class="post-title label label-info pull-right solid-two" style="background-color:black;cursor:pointer;"><i class="fa fa-certificate" style="color:deeppink;"></i> {{ $free_item->Brand }}</small>
											</div>
											<div classs="panel-body">
												<img src="{{ $free_item->Pics }}" class="img-responsive com-image" style="width:100%; height:200px;">
											</div>
											<div class="panel-footer clearfix">
												<p class="pull-left solid-text-light"><b>{{ $free_item->Item }}</b></p>
												<a type="button" href="admin-deletion/{{ explode(":",Session::get('admin'))[0] }}/commcycle/{{ $free_item->id }}" class="btn btn-danger pull-right solid-two">Delete</a>	
											</div>
										</div>	
									</div>

								@empty 
									<p class="alert alet-warning">There are no items in commcycle-free</p>
								@endforelse
								{{ $free->links()}}
							</div>
						</div>
						<div class="row"> 
				            <div class="col-lg-9 " >
				                <div class="list-group solid-two" id="nopicbox">
				                    <a class="list-group-item active clearfix solid-two"><h4 class="solid-text">No picture items</h4></a>
				                    @forelse($freeNoPic as $item)
										<a class="list-group-item">
											<form action="admin-deletion/{{ explode(":",Session::get('admin'))[0] }}/commcycleB/{{ $free_item->id }}" method="get">
								                <h4 class="list-group-item-heading solid-text-light">{{ $item->Name }}'s upload  <button type="submit" class="btn btn-danger pull-right solid-two">Delete</button></h4>
								                <p class="list-group-item-text">{{ $item->Info }}</p>
								                <small class="list-group-item-text label label-info solid-text-light">{{ $item->Item }}</small>
								                <small class="list-group-item-text pull-right label label-default solid-two clearfix solid-text-light">{{ $item->created_at->diffForHumans() }}</small>
								            </form>
							            </a>
									@empty 
										 <a class="list-group-item clearfix">There are no items in this section</a>
									@endforelse
				                </div>
				            </div>			
						</div>
					</div>
					<style> 
						#nopicbox{
							min-height:200;
							max-height:900;
							overflow-y:scroll;
						}
					</style>
				@endsection
			@endif
		@endforeach
@else
	<div class="container" style="margin-top:300px">
		<div class="row col-md-6 col-lg-6 col-md-offset-3 col-sm-6 col-xs-6"> 
			<div class="alert alert-warning clearfix solid solid-text-light" style="background: deeppink; color:cyan;">
				<p>You are not signed in as an admin. Please do so :) <a class="btn btn-success pull-right solid-two" href="{{ route('admin.signin') }}" style="background:orange;">Sign in </a></p>
			</div>
		</div>
	</div>
@endif