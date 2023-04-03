@extends('layouts.adminapp')
@section('content')
    <div class="container-fluid shadow py-1">
        <div class="container-fluid p-2 ">
            <h2>ADD NOTICE</h2>
            <hr>
            <p>Home / notice / add notice</p>
        </div>
    </div>

    <div class="container p-2 d-flex justify-content-center align-self-center " id="create-class">
        <div class="card p-2 position-relative w-50 shadow border-0">

            <form action="" method="post" class="position-relative">
                Add Notice
                <div class="m-3">
                    <label for="not_title">Notice Title</label>
                    <input type="text" class="form-control" id="name" placeholder="Third,fouth,Sixth.... etc">
                </div>
                <div class="m-3">
                    <label for="notice_det">Notice Details</label>
                    <textarea name="notice" id="" class="form-control"></textarea>
                </div>


                <div class="m-3">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn ">Submit</button>
                        <button type="button" class="btn "><i class="fas fa-check"></i></button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
