@extends('layouts.app')
@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-md-6">
            <a href="" style="text-decoration:none;">
                <div class="mb-4">
                    <div class="card border-left-primary h-200 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center justify-content-center">
                                <div class="col-auto">
                                    <i class="fas fa-user fa-5x text-gray-300"></i>
                                </div>
                                <div class="col mr-2 ml-4">
                                    <div class="text-xs font-weight-bold text-secondary text-uppercase mb-2">
                                        Admins
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        2
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-6">
            <a href="" style="text-decoration:none;">
                <div class="mb-4">
                    <div class="card border-left-primary h-200 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center justify-content-center">
                                <div class="col-auto">
                                    <i class="fas fa-user-circle fa-5x text-gray-300"></i>
                                </div>
                                <div class="col mr-2 ml-4">
                                    <div class="text-xs font-weight-bold text-secondary text-uppercase mb-2">
                                        Member
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        10
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

    </div>

    <div class="row">
        <div class="col-md-6">
            <a href="" style="text-decoration:none;">
                <div class="mb-4">
                    <div class="card border-left-warning h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center justify-content-center">
                                <div class="col-auto">
                                    <i class="fas fa-fw fa-file fa-5x text-gray-300"></i>
                                </div>
                                <div class="col mr-2 ml-4">
                                    <div class="text-xs font-weight-bold text-secondary text-uppercase mb-2">
                                        Paper
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        23
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-6">
            <a href="" style="text-decoration:none;">
                <div class="mb-4">
                    <div class="card border-left-warning h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center justify-content-center">
                                <div class="col-auto">
                                    <i class="fas fa-fw fa-book fa-5x text-gray-300"></i>
                                </div>
                                <div class="col mr-2 ml-4">
                                    <div class="text-xs font-weight-bold text-secondary text-uppercase mb-2">
                                        Collections
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        30
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection
