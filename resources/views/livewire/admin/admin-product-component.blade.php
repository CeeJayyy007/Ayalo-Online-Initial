<div>
    <style>
        .nav svg{
            height: 20px;
        }
        .nav .hidden{
            display: block !important;

        }
    </style>
    <div class="container" style="padding: 30px 0px;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading" style="padding: 30px 0px;">
                        <div class="row" >
                            <div class="col-md-6">
                                <h4>All Products</h4>

                            </div>
                            <div class="col-md-6" style="text-align: right; width:100%; ">
                                <form action="" class="admin-search-form">
                                    <input type="product" placeholder="Enter Product" 
                                    class="admin-search-input" required>
                                    <input type="submit" value="Search" class="btn-admin-search">
                                </form>

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
                                    <th>name</th>
                                    <th>Description</th>
                                    <th>Daily rate</th>
                                    <th>Causion fee</th>
                                    <th>Availability</th>
                                    <th>Address</th>
                                    <th>Condition</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product )
                                    <tr>
                                    
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->name}}</td>
                                        <td>{{ $product->description }}</td>
                                        <td>{{ $product->daily_rate}}</td>
                                        <td>{{ $product->causion_fee }}</td>
                                        <td>{{ $product->availability }}</td>
                                        <td>{{ $product->address }}</td>
                                        <td>{{ $product->condition}}</td>
                                        @foreach ($product->image as $item)
                                         <td><img src="{{asset('assets/images/products')}}/{{ $item }}" alt="Image" width='60'></td>    
                                        @endforeach
                                        <td>
                                            <a href="#" style="margin-left: 10px;" onclick="confirm('Are you sure you want to delete this product?')|| event.stopImmediatePropagation()"  wire:click.prevent="deleteProduct({{ $product->id }})"> <i  class="fa fa-times fa-2x text-danger"></i></a>
                                        </td>
                                        
                                    </tr>
                                    
                                @endforeach
                            </tbody>
    
                        </table>
                        {{ $products->links('pagination::bootstrap-4') }}
                       
    
                    </div>
    
                </div>
                
    
            </div>
    
        </div>
    
    </div>
    

</div>
