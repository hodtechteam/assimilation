@extends('layouts.master')

@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Dashboard</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Assilimation</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->
        
        <div class="row">
            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex text-muted">
                            <div class="flex-shrink-0 me-3 align-self-center">
                                <div id="radialchart-1" class="apex-charts" dir="ltr"></div>
                            </div>
                            <div class="flex-grow-1 overflow-hidden">
                                <p class="mb-1">Users</p>
                                <h5 class="mb-3">2.2k</h5>
                                <p class="text-truncate mb-0"><span class="text-success me-2"> 0.02% <i class="ri-arrow-right-up-line align-bottom ms-1"></i></span> From previous</p>
                            </div>
                        </div>
                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->

            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-3 align-self-center">
                                <div id="radialchart-2" class="apex-charts" dir="ltr"></div>
                            </div>
                            <div class="flex-grow-1 overflow-hidden">
                                <p class="mb-1">Views per minute</p>
                                <h5 class="mb-3">50</h5>
                                <p class="text-truncate mb-0"><span class="text-success me-2"> 1.7% <i class="ri-arrow-right-up-line align-bottom ms-1"></i></span> From previous</p>
                            </div>
                        </div>
                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->

            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex text-muted">
                            <div class="flex-shrink-0 me-3 align-self-center">
                                <div id="radialchart-3" class="apex-charts" dir="ltr"></div>
                            </div>
                            <div class="flex-grow-1 overflow-hidden">
                                <p class="mb-1">Bounce Rate</p>
                                <h5 class="mb-3">24.03 %</h5>
                                <p class="text-truncate mb-0"><span class="text-danger me-2"> 0.01% <i class="ri-arrow-right-down-line align-bottom ms-1"></i></span> From previous</p>
                            </div>
                        </div>                                        
                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->

            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex text-muted">
                            <div class="flex-shrink-0  me-3 align-self-center">
                                <div class="avatar-sm">
                                    <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                        <i class="ri-group-line"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1 overflow-hidden">
                                <p class="mb-1">New Visitors</p>
                                <h5 class="mb-3">435</h5>
                                <p class="text-truncate mb-0"><span class="text-success me-2"> 0.01% <i class="ri-arrow-right-up-line align-bottom ms-1"></i></span> From previous</p>
                            </div>
                        </div>
                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Latest Transaction</h4>

                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col"  style="width: 50px;">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheckall">
                                                <label class="form-check-label" for="customCheckall"></label>
                                            </div>
                                        </th>
                                        <th scope="col"  style="width: 60px;"></th>
                                        <th scope="col">ID & Name</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                <label class="form-check-label" for="customCheck1"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="assets/images/users/avatar-2.jpg" alt="user" class="avatar-xs rounded-circle" />
                                        </td>
                                        <td>
                                            <p class="mb-1 font-size-12">#AP1234</p>
                                            <h5 class="font-size-15 mb-0">David Wiley</h5>
                                        </td>
                                        <td>02 Nov, 2019</td>
                                        <td>$ 1,234</td>
                                        <td>1</td>
                                        
                                        <td>
                                            $ 1,234
                                        </td>
                                        <td>
                                            <i class="mdi mdi-checkbox-blank-circle text-success me-1"></i> Confirm
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success btn-sm">Edit</button>
                                            <button type="button" class="btn btn-outline-danger btn-sm">Cancel</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                <label class="form-check-label" for="customCheck2"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar-xs">
                                                <span class="avatar-title rounded-circle bg-soft-primary text-success">
                                                    W
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-1 font-size-12">#AP1235</p>
                                            <h5 class="font-size-15 mb-0">Walter Jones</h5>
                                        </td>
                                        <td>04 Nov, 2019</td>
                                        <td>$ 822</td>
                                        <td>2</td>
                                        
                                        <td>
                                            $ 1,644
                                        </td>
                                        <td>
                                            <i class="mdi mdi-checkbox-blank-circle text-success me-1"></i> Confirm
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success btn-sm">Edit</button>
                                            <button type="button" class="btn btn-outline-danger btn-sm">Cancel</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck3">
                                                <label class="form-check-label" for="customCheck3"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="assets/images/users/avatar-3.jpg" alt="user" class="avatar-xs rounded-circle" />
                                        </td>
                                        <td>
                                            <p class="mb-1 font-size-12">#AP1236</p>
                                            <h5 class="font-size-15 mb-0">Eric Ryder</h5>
                                        </td>
                                        <td>05 Nov, 2019</td>
                                        <td>$ 1,153</td>
                                        <td>1</td>
                                        
                                        <td>
                                            $ 1,153
                                        </td>
                                        <td>
                                            <i class="mdi mdi-checkbox-blank-circle text-danger me-1"></i> Cancel
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success btn-sm">Edit</button>
                                            <button type="button" class="btn btn-outline-danger btn-sm">Cancel</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck4">
                                                <label class="form-check-label" for="customCheck4"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="assets/images/users/avatar-6.jpg" alt="user" class="avatar-xs rounded-circle" />
                                        </td>
                                        <td>
                                            <p class="mb-1 font-size-12">#AP1237</p>
                                            <h5 class="font-size-15 mb-0">Kenneth Jackson</h5>
                                        </td>
                                        <td>06 Nov, 2019</td>
                                        <td>$ 1,365</td>
                                        <td>1</td>
                                        
                                        <td>
                                            $ 1,365
                                        </td>
                                        <td>
                                            <i class="mdi mdi-checkbox-blank-circle text-success me-1"></i> Confirm
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success btn-sm">Edit</button>
                                            <button type="button" class="btn btn-outline-danger btn-sm">Cancel</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck5">
                                                <label class="form-check-label" for="customCheck5"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar-xs">
                                                <span class="avatar-title rounded-circle bg-soft-primary text-success">
                                                    R
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-1 font-size-12">#AP1238</p>
                                            <h5 class="font-size-15 mb-0">Ronnie Spiller</h5>
                                        </td>
                                        <td>08 Nov, 2019</td>
                                        <td>$ 740</td>
                                        <td>2</td>
                                        
                                        <td>
                                            $ 1,480
                                        </td>
                                        <td>
                                            <i class="mdi mdi-checkbox-blank-circle text-warning me-1"></i> Pending
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success btn-sm">Edit</button>
                                            <button type="button" class="btn btn-outline-danger btn-sm">Cancel</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
        
    </div>
</div>
@endsection
