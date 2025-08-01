@extends('layouts.master')
@section( 'content')
<!-- Begin Page Content -->
<div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="{{ route('admin.annonces.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                            <i class="fas fa-plus fa-sm text-white-50"></i> Nouvelle Annonce
                        </a>
                    </div>
                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Total Annonces</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalAnnonces }}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i> {{-- Icône changée pour plus de pertinence --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Annonces ce mois-ci</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $annoncesCeMois }}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar-alt fa-2x text-gray-300"></i> {{-- Icône changée pour plus de pertinence --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
</div>
<!-- /.container-fluid -->
@endsection