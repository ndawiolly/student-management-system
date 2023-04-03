@extends('layouts.adminapp')
@section('content')
    <div class="container-fluid shadow ">
        <div class="container-fluid ">
            <h2>DECLARE RESULT</h2>
            <hr>
            <p>Home / Result / Add Result</p>
        </div>
    </div>

    <div class="p-2 d-flex gap-2">
        <button class=" active btn btn-info fw-bolder" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#add_result" type="button"
            role="tab" aria-controls="pills-home" aria-selected="true">
            SS1
        </button>
        <button class=" btn btn-success fw-bolder" id="result-ss2" data-bs-toggle="pill" data-bs-target="#add_stud_ss2" type="button"
            role="tab" aria-controls="pills-home" aria-selected="false">
            SS2
        </button>
        <button class=" btn btn-warning fw-bolder" id="result-ss3" data-bs-toggle="pill" data-bs-target="#add_stud_ss3" type="button"
            role="tab" aria-controls="pills-home" aria-selected="false">
            SS3
        </button>


    </div>

    <div class="container  d-flex justify-content-center align-self-center " id="create-class">
        <div class="card p-2 position-relative w-75 shadow border-0" id="add_stud">
            <h4 class="py-2">Fill the Student info</h4>
            <hr>
            <form action="" method="post" class="position-relative">

                <div class="m-2 row">
                    <div class="col-md-4 col-12">
                        <label for="stud-numeric">Students Name</label>
                    </div>
                    <div class="col-md-8 col-12">
                        <select class="form-select shadow-none" aria-label="Default select example">
                            <option selected hidden>Students Name</option>
                            <option value="Class A">Maths</option>
                            <option value="Class B">English</option>
                            <option value="Class C">Chemistry</option>
                            <option value="Class D">Biology</option>
                            <option value="Class E">Music</option>
                            <option value="Class F">Futher mathematics</option>
                        </select>
                    </div>
                </div>

                <div class="m-2 row">
                    <div class="col-md-4 col-12">
                        <label for="stud-numeric">Class </label>
                    </div>
                    <div class="col-md-8 col-12">
                        <select class="form-select shadow-none" aria-label="Default select example">
                            <option selected hidden>Select Subject</option>
                            <option value="Class A">Maths</option>
                            <option value="Class B">English</option>
                            <option value="Class C">Chemistry</option>
                            <option value="Class D">Biology</option>
                            <option value="Class E">Music</option>
                            <option value="Class F">Futher mathematics</option>
                        </select>
                    </div>
                </div>


                <div class="m-2 py-3 d-flex justify-content-end">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn ">Add Subject</button></button>
                        <button type="button" class="btn "><i class="fas fa-check"></i></button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
