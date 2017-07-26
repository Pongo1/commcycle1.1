@if(Session::has('admin'))
        @foreach($admins as $admin)
            @if(Session::get('admin') == $admin->name.":".$admin->password )
                @extends('admin-pages.admin-nav')

                @section('content')
                <div style="margin-top:55px;"></div>
                <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12" id="thetable">
                    <h2 class="solid-text-light text-center"><span style="color:deeppink;">All</span> <span style="color:orange;">Ord</span><span style="color:cyan;">ers</span> <i class="fa fa-shopping-cart" style="color:lime;"></i> </h2>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped col-lg-12 col-sm-12 col-xs-12" >
                            <thead>
                                <tr>
                                    <th class="text text-info solid-text-light">Name</th>
                                    <th class="text text-info solid-text-light">Email of orderer</th>
                                    <th class="text text-warning solid-text-light">Address</th>
                                    <th class="text text-warning solid-text-light">Items [Item - quantity - price]</th>
                                    <th class="text text-success solid-text-light">Total price</th>
                                    <th class="text text-success solid-text-light">Time of order</th>
                                    <th class="text text-danger solid-text-light">Delete</th>
                                    <th class="text text-success solid-text-light">Reason/free stuff</th>
                                 </tr>
                            </thead>
                            <tbody>
                                
                                    @forelse($orders as $order)
                                        <tr class="active">
                                            <td class="text text-info">{{ $order->Name }}</td>
                                            <td class="text text-info">{{ $order->Email }}</td>
                                            <td class="text text-warning">{{ $order->Address }}</td>
                                            <td class="text text-warning">{{ $order->Items }}</td>
                                            <td class="text text-success">{{ $order->Price }}</td>
                                            <td class="text text-success">{{ $order->created_at->diffForHumans() }}</td>
                                            <td><button class="btn btn-danger btn-sm pull-right solid-two solid-two" type='button' data-toggle='modal' data-target='#delete-order-{{ $order->id }}'><i class="glyphicon glyphicon-trash"></i></button></td>
                                            <td class="text text-success">{{ $order->reason }}</td>
                                        </tr>
                                        <!-- ######################## DELETE MODAL ################### --> 
                                            <div class='modal fade' id='{{ 'delete-order-'.$order->id }}'>
                                                <div class='modal-dialog modal-sm'>
                                                    <div class='modal-content'> 
                                                        <div class='modal-header'> 
                                                            <button type='button' class='close' data-dismiss='modal'><span aria-hidden='true'></span>&times;<span class="sr-only"></span></button>
                                                            <h3 class='modal-title'>Delete</h3>
                                                        </div>
                                                        <div class='modal-body'> 
                                                            <small>Are you sure you want to delete <b>{{ $order->Name }}'s</b> order?</small>
                                                        </div>
                                                        <div class='modal-footer'>                                                 
                                                          <a class="btn btn-danger solid-two" href="admin-delete-order/{{ explode(":",Session::get('admin'))[0] }}/{{ $order->id }}">Yes</a>
                                                                                                                   
                                                        </div>
                                                    </div> 
                                                </div> 
                                            </div>
                                    @empty 
                                        <tr>
                                            <td>Nothing</td>
                                            <td>Nothing</td>
                                            <td>Nothing</td>
                                            <td>Nothing</td>
                                            <td>Nothing</td>
                                            <td>Nothing</td>
                                            <td>I havent asked for anything</td>
                                            <td><button type="button" class="btn btn-danger" ><span class="fa fa-trash"></span></button></td>
                                        </tr>
                                    @endforelse
                                    
                            </tbody>
                        </table>
                    </div>
                </div>

                <style>
                    #thetable{
                        min-height:500px; 
                        max-height:800px;
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