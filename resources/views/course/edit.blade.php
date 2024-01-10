@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body shadow">
                        <form action="{{ route('course.update', $course->id) }}" method="POST">
                            @csrf
                            @method('put')
                            <div class="fw-bold text-center mb-3">Update Course</div>
                            <div class="form-group mb-3">
                                <label for="name">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name', $course->name) }}" name="name">
                                @error('name')
                                    <div class="text-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="fee">Fee</label>
                                <input type="number" class="form-control @error('fee') is-invalid @enderror" name="fee"
                                    value="{{ old('fee', $course->fee) }}">
                                @error('fee')
                                    <div class="text-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="duration">Duration (month)</label>
                                <input type="text" class="form-control @error('duration') is-invalid @enderror"
                                    name="duration" value="{{ old('duration', $course->duration) }}">
                                @error('duration')
                                    <div class="text-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="location">Location</label>
                                <input type="text" class="form-control @error('location') is-invalid @enderror"
                                    value="{{ old('location', $course->location) }}" name="location">
                                @error('location')
                                    <div class="text-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="text-center">
                                <a href="{{ route('course.index') }}" class="btn btn-dark">Back</a>
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
