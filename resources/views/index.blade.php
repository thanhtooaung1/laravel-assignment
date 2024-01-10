@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="d-grid gap-2 col-5 mx-auto my-auto">
                                <div style="height: 100px" class="text-center">
                                    <a href="{{ route('course.index') }}"
                                        class="btn btn-primary h-100 w-100 d-inline-block text-center">Our
                                        Courses
                                    </a>
                                </div>
                                <div style="height: 100px">
                                    <a href="{{ route('student.index') }}" class="btn btn-info h-100 w-100 align-middle">Our
                                        Students
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
