@if(Session::has('lb-admin'))
        @foreach($admins as $admin)
            @if(Session::get('lb-admin') == $admin->Name.":".$admin->Password )
                @extends('ladyB.ladyB-nav')

                @section('content')
                <div style="margin-top:55px;"></div>
                <div class="row">
                    <div class="col-lg-9 col-md-9 " id="thetable">
                        <h2 class="solid-text-light text-center"><span style="color:deeppink;">LADYB</span> <span style="color:orange;">Ord</span><span style="color:cyan;">ers</span> <i class="fa fa-shopping-cart" style="color:lime;"></i> </h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped" >
                                <thead>
                                    <tr>
                                        <th class="text text-info solid-text-light">Name</th>
                                        <th class="text text-info solid-text-light">Email of orderer</th>
                                        <th class="text text-warning solid-text-light">Address</th>
                                        <th class="text text-warning solid-text-light">Items</th>
                                        <th class="text text-success solid-text-light">Total price</th>
                                        <th class="text text-success solid-text-light">Time of order</th>
                                        <th class="text text-danger solid-text-light">Delete</th>
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
                                        @if(Session::get('lb-admin-type')=='superuser')
                                                <td ><a class="btn btn-danger solid" href="ladyB-order-delete/{{ $order->id }}"><span class="fa fa-trash"></span></a></td>
                                        @endif
                                            </tr>
                                        @empty 
                                            <tr>
                                                <td>Nothing</td>
                                                <td>Nothing</td>
                                                <td>Nothing</td>
                                                <td>Nothing</td>
                                                <td>Nothing</td>
                                                <td>Nothing</td>
                                        @if(Session::get('lb-admin-type')=='superuser')
                                                <td><button type="button" class="btn btn-danger solid" ><span class="fa fa-trash"></span></button></td>
                                        @endif
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