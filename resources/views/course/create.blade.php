@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body shadow">
                        <form action="{{ route('course.store') }}" method="POST">
                            @csrf
                            <div class="fw-bold text-center mb-3">Create Course</div>
                            <div class="form-group mb-3">
                                <label for="name">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" placeholder="Enter name" value="{{ old('name') }}">
                                @error('name')
                                    <div class="text-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="fee">Fee</label>
                                <input type="number" class="form-control @error('fee') is-invalid @enderror" name="fee"
                                    placeholder="Enter fee" value="{{ old('fee') }}">
                                @error('fee')
                                    <div class="text-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="duration">Duration (month)</label>
                                <input type="text" class="form-control @error('age') is-invalid @enderror"
                                    name="duration" placeholder="Enter duration" value="{{ old('duration') }}">
                                @error('duration')
                                    <div class="text-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="location">location</label>
                                <input type="text" class="form-control @error('location') is-invalid @enderror"
                                    name="location" placeholder="Enter location" value="{{ old('location') }}">
                                @error('location')
                                    <div class="text-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="text-center">
                                <a href="{{ route('course.index') }}" class="btn btn-dark">Back</a>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
