@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body shadow">
                        <form action="{{ route('student.update', $student->id) }}" method="POST">
                            @csrf
                            @method('put')
                            <div class="fw-bold text-center mb-3">Update Student</div>
                            <div class="form-group mb-3">
                                <label for="name">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    value="{{ $student->name }}" name="name">
                                @error('name')
                                    <div class="text-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="age">Age</label>
                                <input type="number" class="form-control @error('age') is-invalid @enderror" name="age"
                                    value="{{ $student->age }}">
                                @error('age')
                                    <div class="text-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="father">Father</label>
                                <input type="text" class="form-control @error('father') is-invalid @enderror"
                                    name="father" value="{{ $student->father }}">
                                @error('father')
                                    <div class="text-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="height">Height</label>
                                <input type="number" class="form-control @error('height') is-invalid @enderror"
                                    value="{{ $student->height }}" name="height">
                                @error('height')
                                    <div class="text-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="text-center">
                                <a href="{{ route('student.index') }}" class="btn btn-dark">Back</a>
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
