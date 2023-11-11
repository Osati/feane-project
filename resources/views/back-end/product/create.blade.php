@extends('back-end.master')

@section('title')
    product-add
@endsection

@section('content')

    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Form elements </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Forms</a></li>
                        <li class="breadcrumb-item active" aria-current="page">NewProduct add</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-md-6 mx-auto grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">NewProduct add</h4>
                            <form class="forms-sample" action="" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Product Name</label>
                                    <input type="text" class="form-control" name="product_name" placeholder="ProductName">
                                </div>
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="title">
                                </div>
                                <div class="form-group">
                                    <label for="category_name">Category Name</label>
                                    <input type="text" class="form-control" name="category_name" placeholder="CategoryName">
                                </div>
                                <div class="form-group">
                                    <label for="auth_name">Auth name</label>
                                    <input type="text" class="form-control" name="auth_name" placeholder="auth_name">
                                </div>
                                <div class="form-group">
                                    <label for="discription">Discription</label>
                                    <input type="text" class="form-control" name="discription" placeholder="Discription">
                                </div>
                                <div class="form-group">
                                    <label for="Image">Product Image</label>
                                    <input type="file" class="form-control" name="image" placeholder="ProductImage" accept="image/*">
                                </div>

                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <button class="btn btn-dark">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- main-panel ends -->

@endsection
