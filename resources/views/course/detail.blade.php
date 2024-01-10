@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body shadow">
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Fee</th>
                                    <th scope="col">Duration(month)</th>
                                    <th scope="col">Location</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <tr>
                                    <th scope="row">1</th>
                                    <td>{{ $course->name }}</td>
                                    <td>{{ $course->fee }}</td>
                                    <td>{{ $course->duration }}</td>
                                    <td>{{ $course->location }}</td>
                                </tr>


                            </tbody>
                        </table>
                        <div class="">
                            <a href="{{ route('course.index') }}" class="btn btn-dark">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
