@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body shadow">
                        {{-- @auth --}}
                        <a href="{{ route('course.create') }}" class="btn btn-success mb-3">
                            <i class="fa-solid fa-plus"></i></a>
                        {{-- @endauth --}}
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Fee</th>
                                    <th scope="col" class="text-center">Duration(month)</th>
                                    <th scope="col">Location</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">

                                @foreach ($courses as $course)
                                    <tr>
                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                        <td>{{ $course->name }}</td>
                                        <td>{{ $course->fee }}</td>
                                        <td class="text-center">{{ $course->duration }}</td>
                                        <td>{{ $course->location }}</td>
                                        {{-- @auth --}}
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <a href="{{ route('course.edit', $course->id) }}"
                                                    class="btn btn-outline-warning me-2"><i
                                                        class="fa-solid fa-edit"></i></a>
                                                <a href="{{ route('course.show', $course->id) }}"
                                                    class="btn btn-outline-info me-2"><i class="fa-solid fa-info"></i></a>
                                                <div>
                                                    <form action="{{ route('course.destroy', $course->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-outline-danger"><i
                                                                class="fa-solid fa-trash"></i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                        {{-- @endauth --}}
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
