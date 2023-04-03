@extends('layouts.adminapp')
@section('content')
    <div class="container-fluid shadow py-1">
        <div class="container-fluid p-2 ">
            <h2>MANAGE STUDENT CLASS</h2>
            <hr>
            <p>Home / student_classes / manage_class</p>
        </div>
    </div>

    <div class="container p-3">
        <p>View Classes info</p>



        @if (session()->has('message'))
            <div class="alert alert-success d-flex justify-content-between">
                {{ session()->get('message') }}

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col"># <i class="fas fa-sort-alpha-up"></i></th>
                    <th scope="col">Class Name</th>
                    {{-- <th scope="col">Class Name Numeric</th> --}}
                    <th scope="col">Section</th>
                    <th scope="col">Creation Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="table-group-divider ">
                @forelse ($uploadedClass as $UClass)
                    <tr>
                        <th scope="row">
                            {{ $calcN++ }}
                        </th>
                        <td>{{ $UClass->class_name }}</td>
                        <td>{{ $UClass->class_section }}</td>
                        <td>{{ $UClass->created_at }}</td>
                        <td>
                            <div class="d-flex gap-2">

                                <a href="{{ route('edit_class', $UClass ->id ) }}" class="btn text-secondary"><i
                                        class="fas fa-edit"></i></a>



                                <form action="{{ route('delete_class', $UClass->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-transparent"
                                        onclick="return confirm('You will loose this data permanently')"><i
                                            class="fas fa-trash-alt text-danger"></i></button>
                                </form>


                            </div>
                        </td>
                    </tr>
                @empty

                    <div class="mx-auto">
                        <div class="card p-2 text-center">
                            <h4 class="text-danger fw-bolder">NO CLASS LISTED</h4>
                        </div>
                    </div>
                @endforelse


            </tbody>
            <thead class="table-group-divider">
                <tr>
                    <th scope="col"># <i class="fas fa-sort-alpha-up"></i></th>
                    <th scope="col">Class Name</th>
                    {{-- <th scope="col">Class Name Numeric</th> --}}
                    <th scope="col">Section</th>
                    <th scope="col">Creation Date</th>
                    <th scope="col">Action</th>


                </tr>
            </thead>
        </table>

        <div class="">
            {{ $uploadedClass->links('pagination::bootstrap-5') }}
        </div>

    </div>
@endsection
