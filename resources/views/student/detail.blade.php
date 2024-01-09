@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body shadow">
                        {{-- <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Father</th>
                                    <th scope="col">Height</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <tr>
                                    <th scope="row">{{ $student->id }}</th>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->age }}</td>
                                    <td>{{ $student->father }}</td>
                                    <td>{{ $student->height }}</td>
                                </tr>


                            </tbody>
                        </table> --}}

                        <a href="{{ route('student.index') }}" class="btn btn-outline-dark mb-3"><i
                                class="fa-solid fa-arrow-left"></i></a>
                        <div class="text-center">
                            <div class="fw-bold mb-4">Student Information</div>
                            <div class="row mb-3">
                                <div class="col-md-3 fw-bold">Name</div>
                                <div class="col-md-1 fw-bold">-</div>
                                <div class="col-md-8 text-start">{{ $student->name }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3 fw-bold">Age</div>
                                <div class="col-md-1 fw-bold">-</div>
                                <div class="col-md-8 text-start">{{ $student->age }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3 fw-bold">Father</div>
                                <div class="col-md-1 fw-bold">-</div>
                                <div class="col-md-8 text-start">{{ $student->father }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3 fw-bold">Height</div>
                                <div class="col-md-1 fw-bold">-</div>
                                <div class="col-md-8 text-start">{{ $student->height }} ft</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
