@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body shadow">
                        @auth
                            <a href="{{ route('student.create') }}" class="btn btn-success mb-3">
                                <i class="fa-solid fa-plus"></i></a>
                        @endauth
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Father</th>
                                    <th scope="col">Height</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                @foreach ($students as $student)
                                    <tr>
                                        <th scope="row">{{ $student->id }}</th>
                                        <td>{{ $student->name }}</td>
                                        <td>{{ $student->age }}</td>
                                        <td>{{ $student->father }}</td>
                                        <td>{{ $student->height }}</td>
                                        @auth
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <a href="{{ route('student.edit', $student->id) }}"
                                                        class="btn btn-outline-warning me-2"><i
                                                            class="fa-solid fa-edit"></i></a>
                                                    <a href="{{ route('student.show', $student->id) }}"
                                                        class="btn btn-outline-info me-2"><i class="fa-solid fa-info"></i></a>
                                                    <div>
                                                        <form action="{{ route('student.destroy', $student->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn btn-outline-danger"><i
                                                                    class="fa-solid fa-trash"></i></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        @endauth

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
