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
            <form action="{{ route('update class', $UClass->id) }}" method="post" class="position-relative">
                @csrf
                @method("PATCH");

                <div class="m-3">
                    <label for="stud-name">Class Name</label>
                    <input type="text" class="form-control" id="name" name="class_n" value="{{ $UClass->class_name }}">
                </div>

                    <div class="m-3">
                        <label for="stud-section">Section</label>
                        <select name="sect" id="" class="form-select" >
                            <option hidden value="{{ $UClass->class_section }}">Select Class Arm</option>
                            <option value="Science">A</option>
                            <option value="Technical">B</option>
                            <option value="Commercial">C</option>
                            <option value="Art">D</option>
                        </select>
                        {{-- <input type="text" class="form-control" id="stud-section" name="sect" placeholder="A or B or C ....etc"> --}}
                    </div>


                <div class="m-3">
                    <div class="btn-group" role="group" >
                        <button type="submit" class="btn ">Update</button>
                        <button type="button" class="btn "><i class="fas fa-check"></i></button>
                      </div>
                </div>

            </form>
        </div>
    </div>
@endsection
