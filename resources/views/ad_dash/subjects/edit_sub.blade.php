@extends('layouts.adminapp')
@section('content')
    <div class="container-fluid shadow py-1">
        <div class="container-fluid p-2 ">
            <h2>EDIT SUBJECT</h2>
            <hr>
            <p>Home / subject / update_subject</p>
        </div>
    </div>

    <div class="container p-2 d-flex justify-content-center align-self-center " id="create-class">
        <div class="card p-2 position-relative w-50 shadow border-0">
            <h4 class="py-2">Update Subject</h4>
            <hr>
            <form action="{{ route('update_sub', $EdSub->id) }}" method="post" class="position-relative">
                @csrf
                @method("PATCH")

                <div class="m-3">
                    <label for="stud-name">Subject Name</label>
                    <input type="text" class="form-control" id="name" name="subname" value="{{ $EdSub->subject_name }}">
                </div>
                <div class="m-3">
                    <label for="stud-numeric">Subject Code</label>
                    <input type="text" class="form-control" id="sub-numeric" name="subnum" value="{{ $EdSub->subject_code }}">
                </div>

                <div class="m-3">
                    <div class="btn-group" role="group" >
                        <button type="submit" class="btn ">Update</button></button>
                        <button type="button" class="btn "><i class="fas fa-check"></i></button>
                      </div>
                </div>

            </form>
        </div>
    </div>
@endsection
