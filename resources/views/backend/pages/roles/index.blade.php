@extends('backend.layouts.master')

@section('pageTitle')
    All Roles - Admin Panel
@endsection

@section('styles')
@endsection

@section('admin-content')

    <div class="container-fluid">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        All Roles
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                    <span class="d-none d-sm-inline">
                        <a href="{{ route('roles.create') }}" class="btn btn-white">
                            Add New
                        </a>
                    </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-fluid">
            <div class="row row-deck row-cards">
                <div class="col-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-vcenter card-table table-striped">
                                <thead>
                                <tr>
                                    <th class="w-3">SL</th>
                                    <th>Role</th>
                                    <th class="w-2">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($roles as $role)
                                    <tr>
                                        <td>{{ $loop->index+1 }}</td>
                                        <td>
                                            {{ $role->name }}
                                        </td>
                                        <td>
                                            <a href="#">Edit</a>
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

@endsection

@section('scripts')

@endsection
