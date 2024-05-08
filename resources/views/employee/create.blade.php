@extends('layouts.app')

@section('content')
    <div class="container-sm my-5">
        <form action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-center">
                {{-- Dan Seterusnya --}}
                <div class="container-sm mt-5">
                    <form action="{{ route('employees.store') }}" method="POST">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="p-5 bg-light rounded-3 border col-xl-6">

                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <div class="alert alert-danger alert-dismissible fade show">
                                            {{ $error }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endforeach
                                @endif

                                <div class="mb-3 text-center">
                                    <i class="bi-person-circle fs-1"></i>
                                    <h4>Create Employee</h4>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="firstName" class="form-label">First Name</label>
                                        <input class="form-control" type="text" name="firstName" id="firstName"
                                            value="" placeholder="Enter First Name">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="lastName" class="form-label">Last Name</label>
                                        <input class="form-control" type="text" name="lastName" id="lastName"
                                            value="" placeholder="Enter Last Name">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input class="form-control" type="text" name="email" id="email"
                                            value="" placeholder="Enter Email">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="age" class="form-label">Age</label>
                                        <input class="form-control" type="text" name="age" id="age"
                                            value="" placeholder="Enter Age">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="position" class="form-label">Position</label>
                                    <select name="position" id="position" class="form-select">
                                        @foreach ($positions as $position)
                                            <option value="{{ $position->id }}"
                                                {{ old('position') == $position->id ? 'selected' : '' }}>
                                                {{ $position->code . ' - ' . $position->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('position')
                                        <div class="text-danger"><small>{{ $message }}</small></div>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="cv" class="form-label">Curriculum Vitae (CV)</label>
                                    <input type="file" class="form-control" name="cv" id="cv">
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6 d-grid">
                                        <a href="{{ route('employees.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i
                                                class="bi-arrow-left-circle me-2"></i> Cancel</a>
                                    </div>
                                    <div class="col-md-6 d-grid">
                                        <button type="submit" class="btn btn-dark btn-lg mt-3"><i
                                                class="bi-check-circle me-2"></i>
                                            Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </form>
    </div>
@endsection
