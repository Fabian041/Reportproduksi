@extends('layouts.app')

@section('custom_styles')

@endsection

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-2">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Production Report</a></li>
                <li class="breadcrumb-item active" aria-current="page">Daily report</li>
              </ol>
        </div>

         <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">
                                <div class="card-title mb-5">
                                    <h5>Daily Production Report</h5>
                                </div>
                            </p>
                            <form action="" method="post">
                                <div class="form-group">
                                    <select class="form-control mt-5">
                                        <option>Select Line</option>
                                    </select>
                                    <select class="form-control mt-4">
                                        <option>Select Model</option>
                                    </select>
                                    <select class="form-control mt-4">
                                        <option>Select Part Number</option>
                                    </select>
                                    <select class="form-control mt-4">
                                        <option>Select Time</option>
                                    </select>
                                </div>
                                <div class="row mt-4 mb-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Quantity</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Actual Time</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

    </div>
    <!-- /.container-fluid -->
@endsection
