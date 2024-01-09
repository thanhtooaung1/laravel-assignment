@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body shadow">
                        <form action="{{ route('student.store') }}" method="POST">
                            @csrf
                            <div class="fw-bold text-center mb-3">Create Student</div>
                            <div class="form-group mb-3">
                                <label for="name">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" placeholder="Enter name" value="{{ old('name') }}">
                                @error('name')
                                    <div class="text-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="age">Age</label>
                                <input type="number" class="form-control @error('age') is-invalid @enderror" name="age"
                                    placeholder="Enter age" value="{{ old('age') }}">
                                @error('age')
                                    <div class="text-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="father">Father</label>
                                <input type="text" class="form-control @error('age') is-invalid @enderror" name="father"
                                    placeholder="Enter father" value="{{ old('father') }}">
                                @error('father')
                                    <div class="text-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="height">Height</label>
                                <input type="number" class="form-control @error('height') is-invalid @enderror"
                                    name="height" placeholder="Enter height" value="{{ old('height') }}">
                                @error('height')
                                    <div class="text-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="text-center">
                                <a href="{{ route('student.index') }}" class="btn btn-dark">Back</a>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
