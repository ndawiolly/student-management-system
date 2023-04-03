@extends('layouts.adminapp')
@section('content')
    <div class="container-fluid shadow py-1">
        <div class="container-fluid p-2 ">
            <h2>MANAGE SUBJECT</h2>
            <hr>
            <p>Home / subject / manage_subject</p>
        </div>
    </div>

    <div class="container p-3">
        <p>View Classes info</p>

        <div class="top d-flex justify-content-between">
            <p>Show <button class="btn btn-transparent border">10 <i class="fas fa-chevron-down ps-3"></i></button>
                <span>enteries</span>
            </p>

            <form class="d-flex" role="search">
                <button class="btn btn-transparent" type="submit" style="height:30px;">Search</button>
                <input class="form-control " type="search" placeholder="Search" aria-label="Search" style="height:30px;">
            </form>
        </div>
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
                    <th scope="col">Subject Name</th>
                    <th scope="col">Subject Code</th>
                    <th scope="col">Creation Date</th>
                    <th scope="col">Update Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            {{-- <tbody class="table-group-divider ">
                @forelse ($classes as $sub)
                    <tr>
                        <th scope="row">{{ $index++ }}</th>
                        <td>{{ $sub->subject_name }}</td>
                        <td>{{ $sub->subject_code }}</td>
                        <td>{{ $sub->created_at }}</td>
                        <td>{{ $sub->updated_at }}</td>
                        <td>
                            <div class="d-flex gap-2">

                                <a href="{{ route('edit_sub', $sub->id) }}" onclick="return confirm('You are about to edit this record')" class="btn text-secondary"><i
                                        class="fas fa-edit"></i></a>



                                <form action="{{ route('delete subject', $sub->id) }}" method="post">
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
                @endforelse

            </tbody> --}}
            <thead class="table-group-divider">
                <tr>
                    <th scope="col"># <i class="fas fa-sort-alpha-up"></i></th>
                    <th scope="col">Subject Name</th>
                    <th scope="col">Subject Code</th>
                    <th scope="col">Creation Date</th>
                    <th scope="col">Update Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
        </table>
        {{-- <div class="">
            {{ $msub->links('pagination::bootstrap-5') }}
        </div> --}}



    </div>
@endsection
