@extends('layouts.adminapp')
@section('content')

<div class="container-fluid shadow py-1">
    <div class="container-fluid p-2 ">
        <h2>MANAGE STUDENTS</h2>
        <hr>
        <p>Home / student / manage_studens</p>
    </div>
</div>

<div class="container p-3">
    <p>View Students info</p>

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
                <th scope="col">Student Name</th>
                <th scope="col">Roll Id</th>
                <th scope="col">Class</th>
                <th scope="col">Reg Date</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="table-group-divider ">
            
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>
                    <a href="{{ route('edit_student') }}"><i class="fas fa-edit"></i></a>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>@fat</td>
                <td>@fat</td>
                <td>
                    <a href="{{ route('edit_student') }}"><i class="fas fa-edit"></i></a>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry the Bird</td>
                <td>@twitter</td>
                <td>@twitter</td>
                <td>@twitter</td>
                <td>@twitter</td>
                <td>
                    <a href="{{ route('edit_student') }}"><i class="fas fa-edit"></i></a>
                </td>
            </tr>
        </tbody>
        <thead class="table-group-divider">
            <tr>
                <th scope="col"># <i class="fas fa-sort-alpha-up"></i></th>
                <th scope="col">Student Name</th>
                <th scope="col">Roll Id</th>
                <th scope="col">Class</th>
                <th scope="col">Reg Date</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
    </table>

    <div class="bottom d-flex justify-content-between  p-2">
        <div class="right">
            <p>showing 1 to 8 of 8 enteries</p>
        </div>

        <div class="left">
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-primary">Previous</button>
                <button type="button" class="btn">1</button>
                <button type="button" class="btn btn-primary">Next</button>
              </div>
        </div>
    </div>



</div>
@endsection
