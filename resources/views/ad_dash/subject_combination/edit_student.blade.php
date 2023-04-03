@extends('layouts.adminapp')
@section('content')
    <div class="container-fluid shadow ">
        <div class="container-fluid ">
            <h2>STUDENT ADMISSION</h2>
            <hr>
            <p>Home / student admission</p>
        </div>
    </div>

    <div class="container-fluid  d-flex justify-content-center " id="create-class">
        <div class="card p-2 position-relative w-100 shadow border-0" id="add_stud">
            <h4 class="py-2">Fill the Student info</h4>
            <hr>
            <form action="" method="post" class="position-relative">
                <div class="m-2 row">
                    <div class="col-md-4 col-12">
                        <label for="stud-name" class="">Full Name</label>
                    </div>
                    <div class="col-md-8 col-12">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="m-2 row">
                    <div class="col-md-4 col-12">
                        <label for="roll-num" class="">Roll ID</label>
                    </div>
                    <div class="col-md-8 col-12">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="m-2 row">
                    <div class="col-md-4 col-12">
                        <label for="stu-email" class="">Email ID</label>
                    </div>
                    <div class="col-md-8 col-12">
                        <input type="email" class="form-control">
                    </div>
                </div>
                <div class="m-2 row">
                    <div class="col-md-4 col-12">
                        <label for="gender" class="">Gender</label>
                    </div>
                    <div class="col-md-8 col-12">
                        <div class="m-2 d-flex gap-2">
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Female
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Others
                                </label>
                            </div>
                        </div>
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

                <div class="m-2 row">
                    <div class="col-md-4 col-12">
                        <label for="stu-numeric" class="">DOB</label>
                    </div>
                    <div class="col-md-8 col-12">
                        <input type="date" class="form-control">
                    </div>
                </div>

                <div class="m-2 row">
                    <div class="col-md-4 col-12">
                        <label for="stu-numeric" class="">Reg Date:</label>
                    </div>
                    <div class="col-md-8 col-12">
                        <input type="text" class="form-control" disabled value="29-345-333">
                    </div>
                </div>

                <div class="m-2 row">
                    <div class="col-md-4 col-12">
                        <label for="status" class="">Status</label>
                    </div>
                    <div class="col-md-8 col-12">
                        <div class="m-2 d-flex gap-2">
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Active
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Block
                                </label>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="m-2 py-3 d-flex justify-content-end">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn ">Update Subject</button>
                        <button type="button" class="btn "><i class="fas fa-check"></i></button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
