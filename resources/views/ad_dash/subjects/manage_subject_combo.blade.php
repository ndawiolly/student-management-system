@extends('layouts.adminapp')
@section('content')
    <div class="container-fluid shadow py-1">
        <div class="container-fluid p-2 ">
            <h2>MANAGE SUBJECT COMBINATION</h2>
            <hr>
            <p>Home / subject / manage_subject_combination</p>
        </div>
    </div>

    <div class="container p-3">
        <p>View Subjects Combination info</p>

        <div class="top d-flex justify-content-between">
            <p>Show <button class="btn btn-transparent border">10 <i class="fas fa-chevron-down ps-3"></i></button>
                <span>enteries</span>
            </p>

            <form class="d-flex" role="search">
                <button class="btn btn-transparent" type="submit" style="height:30px;">Search</button>
                <input class="form-control " type="search" placeholder="Search" aria-label="Search" style="height:30px;">
            </form>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col"># <i class="fas fa-sort-alpha-up"></i></th>
                    <th scope="col">Class and Section</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="table-group-divider ">
                @forelse ($combo as $comb )

                <tr>
                    <th scope="row">{{ $val++ }}</th>
                    <td>{{ $comb->class_id }}</td>
                    <td>{{ $comb->subject_combination }}</td>
                    <td>@mdo</td>
                    <td>
                        <a href="#"><i class="fas fa-edit"></i></a>
                    </td>
                </tr>
                @empty
                    <div class="mx-auto p-2 text-danger text-center fs-5">
                        <p>No records found</p>
                    </div>
                @endforelse

            </thead>
        </table>

        <div class="">
            {{ $combo->links('pagination::bootstrap-5') }}
        </div>



    </div>
@endsection
