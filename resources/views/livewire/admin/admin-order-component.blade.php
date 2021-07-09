<div class="container" style="padding: 30px 0px;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading" style="padding: 30px 0px;">
                    <div class="row" >
                        <div class="col-md-6">
                            All Orders

                        </div>
                       

                    </div>
                   
                </div>
                <div class="panel-body">
                    @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('message') }}

                        </div>
                        
                    @endif
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Product name</th>
                                <th>Image</th>
                                <th>Owner</th>
                                <th>Renter</th>
                                <th>daily_price</th>
                                <th>causion_fee</th>
                                <th>Address</th>
                                <th>start_date</th>
                                <th>end_date</th>
                                <th>Payment status</th>
                                <th>Delivery status</th>
                                <th>Pickup status</th>
                                <th>Return status</th>
                                <th>Order status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order )
                                <tr>
                                
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->product->name}}</td>
                                    <td><img src="{{asset('storage')}}/{{ $order->product->image1 }}" alt="Image" width='60'></td>
                                    <td>{{ $order->owner->name}}</td>
                                    <td>{{ $order->renter->name}}</td> 
                                    <td>{{ $order->product->daily_rate}}</td> 
                                    <td>{{ $order->product->causion_fee}}</td>
                                    <td>{{ $order->address}}</td>
                                    <td>{{ $order->start_date}}</td>
                                    <td>{{ $order->end_date}}</td>
                                    <td>{{ $order->payment_status}}</td>
                                    <td>{{ $order->delivery_status}}</td>
                                    <td>{{ $order->pickup_status}}</td>
                                    <td>{{ $order->return_status}}</td>
                                    <td>{{ $order->status}}</td>
                                    <td>
                                        <a href="" class="btn btn-primary">Paid</a>
                                        <a href="" class="btn btn-primary">Delivered</a>
                                        <a href="" class="btn btn-primary">Picked up</a>
                                        <a href="" class="btn btn-primary">Returned</a>
                                        <a href="" class="btn btn-primary">Close</a>
                                    </td>
                                    
                                </tr>
                                
                            @endforeach
                        </tbody>

                    </table>
                    {{ $orders->links('pagination::bootstrap-4') }}

                </div>

            </div>
            

        </div>

    </div>

</div>