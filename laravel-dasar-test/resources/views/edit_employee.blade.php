@extends('layouts.simple.master')
@section('content')
<div class="main-seciton-wrapper">
    <div class="card">
        <div class="card-body pb-0">
            <h4 class="mb-1">Edit Employee</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb border-bottom-0">
                    <li class="breadcrumb-item"><a href="{{ route('company.index') }}"> Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('employee.index') }}"> Manage Employee</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Edit Employee</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Main content -->
    <div class="card">
        <div class="card-body">
            <div class="w-700">
                <form method="POST" id="edit_employee_form" action="{{ route('employee.update',['employee'=>$employee->id]) }}"
                    autocomplete="off" method="post">
                    @csrf
                    @method('PUT')

                    <div class="input-row mb-3">
                        <label for="first_name">First name : </label>
                        <input type="text" class="form-control" id="first_name" placeholder="First name"
                            name="first_name" value="{{ old('first_name',$employee->first_name) }}">
                        @error('first_name')
                            <span class="error-msg" id="first_name_error" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-row mb-3">
                        <label for="last_name">Last name : </label>
                        <input type="text" class="form-control" id="last_name" placeholder="Last name"
                            name="last_name" value="{{ old('last_name',$employee->last_name) }}">
                        @error('last_name')
                            <span class="error-msg" id="last_name_error" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-row mb-3">
                        <label for="company_logo">Company : </label>
                        <select class="form-select" id="company" placeholder="company Logo" name="company">
                        <option value="">Select company</option>
                        @if(!$companies->isEmpty())
                        @foreach ($companies as $com )
                            <option value="{{$com->id}}" {{old('company',$employee->company) == $com->id?'selected':''}}>{{$com->name}}</option>
                        @endforeach
                        @endif
                        </select>
                        @error('company')
                            <span class="error-msg" id="company_error" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    <div class="input-row mb-3">
                        <label for="email">Email : </label>
                        <input type="text" class="form-control" id="email" placeholder="email"
                            name="email" value="{{ old('email',$employee->email) }}">
                        @error('email')
                            <span class="error-msg" id="email_error" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="input-row mb-3">
                        <label for="phone">Phone : </label>
                        <input type="text" class="form-control" id="phone" placeholder="Phone"
                            name="phone" value="{{ old('phone',$employee->phone) }}">
                        @error('phone')
                            <span class="error-msg" id="phone_error" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                </form>
                <div class="button-row">
                    <!-- /.card-body -->

                    <button type="button" class="btn btn-primary w-100 mb-3" id="update_employee">Save</button>
                    <button type="button" class="btn btn-outline-dark w-100" id="cancle_button"
                        onclick="location.href='{{ route('employee.index') }}'">Cancel</button>
                </div>

            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>

@endsection
@section('script')

    <script>

        $(function() {

            $('#update_employee').on('click', function() {

                    $('#edit_employee_form').submit();

            })
        });
    </script>
@endsection
