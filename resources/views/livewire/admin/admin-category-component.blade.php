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
                                <h4>All Categories</h4>

                            </div>
                            <div class="col-md-6" style="text-align: right; ">
                                <a href="{{ route('admin.addcategory') }}" class="btn btn-success">Add New</a>

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
                                    <th>Category name</th>
                                    <th>Slug</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category )
                                    <tr>
                                    
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->name}}</td>
                                        <td>{{ $category->slug }}</td>
                                        <td>
                                            <a href="{{ route('admin.editcategory',['category_slug'=>$category->slug]) }}"> <i  class="fa fa-edit fa-2x"></i></a>
                                            <a href="#" style="margin-left: 10px;" onclick="confirm('Are you sure you want to delete this category?')|| event.stopImmediatePropagation()"  wire:click.prevent="deleteCategory({{ $category->id }})"> <i  class="fa fa-times fa-2x text-danger"></i></a>
                                        </td>
                                        
                                    </tr>
                                    
                                @endforeach
                            </tbody>
    
                        </table>
                       
    
                    </div>
    
                </div>
                
    
            </div>
    
        </div>
    
    </div>

</div>
