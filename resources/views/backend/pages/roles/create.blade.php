@extends('backend.layouts.master')

@section('pageTitle')
    Role Create - Admin Panel
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
                        Role Create
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                    <span class="d-none d-sm-inline">
                        <a href="{{ route('roles.index') }}" class="btn btn-white">
                            All Roles
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
                @include('backend.layouts.partials.messages')

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Create New Role</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('roles.store') }}" method="post">
                                @csrf
                                <div class="form-group mb-3">
                                    <label class="form-label required">Role Name</label>
                                    <div>
                                        <input type="text" name="name" class="form-control"
                                               placeholder="Enter role name">
                                    </div>
                                </div>

                                <div class="form-group mb-3">
                                    <div>
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="form-label">Permissions</div>
                                            </div>
                                            <div class="col-auto">
                                                <label class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox"
                                                           id="checkAllPermissions">
                                                    <span class="form-check-label"
                                                          for="checkAllPermissions"> Check All</span>
                                                </label>
                                            </div>
                                            <hr>
                                            @foreach($permission_groups as $group)
                                                <div class="row">
                                                    <div class="col-3">
                                                        <label class="form-check form-check-inline">
                                                            <input class="form-check-input" name="permissions[]"
                                                                       type="checkbox" id="{{ $group->name }}GroupPermission" onclick="checkUncheck('{{ $group->name }}');">
                                                            <span class="form-check-label"
                                                                  for="{{ $group->name }}GroupPermission">{{ ucfirst($group->name) }}</span>
                                                        </label>
                                                    </div>
                                                    <div class="col-9" id="{{ $group->name }}">
                                                        @php $permissions = \App\Models\User::getPermissionByGroupName($group->name); @endphp
                                                        @foreach($permissions as $permission)
                                                            <div class="col-2">
                                                                <label class="form-check form-check-inline">
                                                                    <input class="form-check-input {{ $group->name }}" name="permissions[]"
                                                                           type="checkbox" value="{{ $permission->id }}"
                                                                           id="checkPermission{{ $permission->id }}">
                                                                    <span class="form-check-label"
                                                                          for="checkPermission{{ $permission->id }}">{{ $permission->name }}</span>
                                                                </label>
                                                            </div>
                                                        @endforeach
                                                        <hr/>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <div class="form-footer">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script type="application/javascript">
        $("#checkAllPermissions").click(function () {
            $('input:checkbox').not(this).prop('checked', this.checked);
        });

        function checkUncheck(module) {
            let len = $("#" + module + " input[name='permissions[]']:checked").length;
            if (len) {
                $('.' + module).prop('checked', '');
            } else {
                $('.' + module).prop('checked', 'checked');
            }
        }
    </script>
@endsection
