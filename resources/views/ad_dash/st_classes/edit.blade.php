@extends('layouts.adminapp')
@section('content')
    <div class="container-fluid shadow py-1">
        <div class="container-fluid p-2 ">
            <h2>CREATE STUDENT CLASS</h2>
            <hr>
            <p>Home / student_classes / update_class</p>
        </div>
    </div>

    <div class="container p-2 d-flex justify-content-center align-self-center " id="create-class">
        <div class="card p-2 position-relative w-50 shadow border-0">
            <h4 class="py-2">Update Students Class</h4>
            <hr>
            <form action="" method="post" class="position-relative">
                <div class="m-3">
                    <label for="stud-name">Class Name</label>
                    <input type="text" class="form-control" id="name" name="classname" placeholder="Third,fouth,Sixth.... etc">
                </div>
                <div class="m-3">
                    <label for="stud-numeric">Class Name in Numeric</label>
                    <input type="number" class="form-control" id="stud-numeric" name="numeric" placeholder="1 or 2 or 3 ....etc">
                </div>
                <div class="m-3">
                    <label for="stud-section">Section</label>
                    <input type="text" class="form-control" id="stud-section" name="sec" placeholder="A or B or C ....etc">
                </div>

                <div class="m-3">
                    <div class="btn-group" role="group" >
                        <button type="button" class="btn ">Update</button></button>
                        <button type="button" class="btn "><i class="fas fa-check"></i></button>
                      </div>
                </div>

            </form>
        </div>
    </div>
@endsection
