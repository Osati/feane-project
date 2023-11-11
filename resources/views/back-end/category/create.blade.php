@extends('back-end.master')

@section('title')
    category-add
@endsection

@section('content')

    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Form Category add </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Forms</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Category add</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-md-6 mx-auto grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">NewProduct Category</h4>
                            <form class="forms-sample">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Category name</label>
                                    <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Category name">
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <button class="btn btn-dark"><a href="{{route('dashboard')}}">Cancel</a></button>
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
