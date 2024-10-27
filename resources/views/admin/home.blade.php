@extends('layouts.admin.app')
@section('content')
<!-- content @s -->
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block">
                    <div class="row g-gs">
                        <div class="nk-block nk-block-lg">
                            <div class="col-lg-12">
                                <div class="card card-bordered h-100">
                                    <div class="card-inner">
                                        <div class="card-title-group align-start mb-3">
                                            <div class="card-title">
                                                <h6 class="title">Booking Overview</h6>
                                                <p>In last 15 days buy and sells overview. <a href="#" class="link link-sm">Detailed Stats</a></p>
                                            </div>
                                            <div class="card-tools mt-n1 me-n1">
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#" class="active"><span>15 Days</span></a></li>
                                                            <li><a href="#"><span>30 Days</span></a></li>
                                                            <li><a href="#"><span>3 Months</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card-title-group -->
                                        <div class="nk-order-ovwg">
                                            <div class="row g-4 align-end">
                                                <div class="col-xxl-8">
                                                    <div class="nk-order-ovwg-ck">
                                                        <canvas class="order-overview-chart" id="orderOverview" style="display: block; box-sizing: border-box; height: 180px; width: 608px;" width="608" height="180"></canvas>
                                                    </div>
                                                </div><!-- .col -->
                                                <div class="col-xxl-4">
                                                    <div class="row g-4">
                                                        <div class="col-sm-6 col-xxl-12">
                                                            <div class="nk-order-ovwg-data buy">
                                                                <div class="amount">12,954.63 <small class="currenct currency-usd">USD</small></div>
                                                                {{-- <div class="info">Total Booking <strong>39,485 <span class="currenct currency-usd">USD</span></strong></div> --}}
                                                                <div class="title"><em class="icon ni ni-arrow-down-left"></em> Total Booking</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-xxl-12">
                                                            <div class="nk-order-ovwg-data sell">
                                                                <div class="amount">12,954.63 <small class="currenct currency-usd">USD</small></div>
                                                                {{-- <div class="info">Last month <strong>39,485 <span class="currenct currency-usd">USD</span></strong></div> --}}
                                                                <div class="title"><em class="icon ni ni-arrow-up-left"></em> Completed Booking</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- .col -->
                                            </div>
                                        </div><!-- .nk-order-ovwg -->
                                    </div><!-- .card-inner -->
                                </div><!-- .card -->
                            </div>
                            <div class="nk-block-head mt-5">
                                <div class="nk-block-head-content">
                                    <h4 class="nk-block-title">All Booking List</h4>
                                    {{-- <div class="nk-block-des">
                                        <p>To intialize datatable with export buttons, use <code class="code-class">.datatable-init-export</code> with <code>table</code> element. <br> <strong class="text-dark">Please Note</strong> By default export libraries is not added globally, so please include <code class="code-class">"js/libs/datatable-btns.js"</code> into your page to active export buttons.</p>
                                    </div> --}}
                                    @if (session('status'))
                                    <h6 class="alert alert-success text-center">{{ session('status') }}</h6>
                                @endif
                                </div>
                            </div>
                            <div class="card card-bordered card-preview">
                                <div class="card-inner">
                                    <table class="datatable-init-export nowrap table" data-export-title="Export">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Mahal Name</th>
                                                <th>Date</th>
                                                <th>User Name</th>
                                                <th>Phone No</th>
                                                {{-- <th>Guest Count</th>
                                                <th>Purpose</th> --}}
                                                {{-- <th>Email Id</th> --}}
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          
                                            <tr>
                                                <td>s</td>
                                                <td>s</td>
                                                <td>5</td>
                                                <td>41</td>
                                                <td>151</td>
                                                {{-- <td>{{ $item->guest }}</td>
                                                <td>{{ $item->purpose }}</td> --}}
                                                {{-- <td>{{ $item->email }}</td> --}}
                                                <td>
                                                    <div class="tb-odr-btns d-none d-md-inline">
                                                        <a href="" class="btn btn-sm btn-primary"><i class="icon ni ni-eye-alt"> </i></a>
                                                    </div>
                                                    <div class="tb-odr-btns d-none d-md-inline">
                                                        <a href="" class="btn btn-sm btn-success fs-5"><i class="fa fa-pencil"> </i></a>
                                                    </div>

                                                    <div class="tb-odr-btns d-none d-md-inline">
                                                        <a href="" class="btn btn-sm btn-danger"><i class="icon ni ni-trash-alt"> </i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- .card-preview -->
                        </div> <!-- nk-block -->
                    </div><!-- .row -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
<!-- content @e -->
@endsection
