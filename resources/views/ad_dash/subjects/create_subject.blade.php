@extends('layouts.adminapp')
@section('content')
    <div class="container-fluid shadow py-1">
        <div class="container-fluid p-2 ">
            <h2>CREATE SUBJET</h2>
            <hr>
            <p>Home / stident_classes / create_subject</p>
        </div>
    </div>

    <div class="container p-2 d-flex justify-content-center align-self-center " id="create-class">
        <div class="card p-2 position-relative w-75 shadow border-0">
            <h4 class="py-2">Create Students Class</h4>
            <hr>
            <form action="{{ route('create sub') }}" method="post" class="position-relative">
                @csrf

                <div class="m-3 d-flex">
                    <label for="subject-name" class="px-2">Subject Name</label>
                    <input type="text" class="form-control w-75 " id="subject_name" name="sub_name" placeholder="Third,fouth,Sixth.... etc">
                </div>

                <div class="m-3 d-flex">
                    <label for="subject_code" class="px-2">Subject Code</label>
                    <input type="text" class="form-control w-75 " id="subject_code" name="sub_code" placeholder="1 or 2 or 3 ....etc">
                </div>

                <div class="m-3">
                    <div class="btn-group" role="group" >
                        <button type="submit" class="btn ">Submit</button>
                        <button type="button" class="btn "><i class="fas fa-check"></i></button>
                      </div>
                </div>

            </form>
        </div>
    </div>
@endsection
