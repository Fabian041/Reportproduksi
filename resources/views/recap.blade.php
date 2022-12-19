@extends('layouts.app')

@section('custom_styles')

@endsection

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col">
                <div class="d-sm-flex align-items-center justify-content-between mb-2">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Production Report</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Recap</li>
                    </ol>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <select class="form-control mt-5">
                        <option>Select Line</option>
                    </select>
                </div>
            </div>
        </div>

         <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">
                                <div class="row">
                                    <div class="col">
                                        <div class="card-title mb-5">
                                            <h5>Production Report Recap</h5>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-primary float-right">Export</button>
                                    </div>
                                </div>
                            </p>
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Part Number</th>
                                        <th>Quantity</th>
                                        <th>Actual Time</th>
                                        <th>date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>12345678</td>
                                        <td>61</td>
                                        <td>50</td>
                                        <td>2011-04-25</td>
                                        <td><button type="button" class="btn btn-warning">Edit</button></td>
                                    </tr>
                                    <tr>
                                        <td>12345678</td>
                                        <td>63</td>
                                        <td>68</td>
                                        <td>2011-07-25</td>
                                        <td><button type="button" class="btn btn-warning">Edit</button></td>
                                    </tr>
                                    <tr>
                                        <td>12345678</td>
                                        <td>66</td>
                                        <td>60</td>
                                        <td>2009-01-12</td>
                                        <td><button type="button" class="btn btn-warning">Edit</button></td>
                                    </tr>
                                    <tr>
                                        <td>12345678</td>
                                        <td>22</td>
                                        <td>30</td>
                                        <td>2012-03-29</td>
                                        <td><button type="button" class="btn btn-warning">Edit</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

    </div>
    <!-- /.container-fluid -->
@endsection
