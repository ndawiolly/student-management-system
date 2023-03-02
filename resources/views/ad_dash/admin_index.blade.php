@extends('layouts.adminapp')
@section('content')
    <div class="container py-1" id="first-page">

        <div class="row p-2" id="first-row">
            <div class="col-12 col-md-6 pt-2">
                <div class="card " style="background-color:#2b3467;">
                    <div class="card-body d-flex justify-content-between">

                        <div>
                            <img src="{{ asset('images/regusers.png') }}" alt=""  width="120">
                        </div>

                        <div class="cont1 text-white">
                            <h2 class="text-end">30</h2>
                            <p>Reg Users</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 pt-2">
                <div class="card " style="background-color:#6096B4;">
                    <div class="card-body d-flex justify-content-between">

                        <div>
                            <img src="{{ asset('images/subject.png') }}" alt=""  width="120">
                        </div>

                        <div class="cont1 text-white">
                            <h2 class="text-end">10</h2>
                            <p>Subject Listed</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- second row --}}
        <div class="row px-2 pt-0" id="second-row">
            <div class="col-12 col-md-6 pt-2">
                <div class="card " style="background-color: #609EA2;">
                    <div class="card-body d-flex justify-content-between">

                        <div>
                            <img src="{{ asset('images/classes.png') }}" alt="" height="80">
                        </div>

                        <div class="cont1 text-white">
                            <h2 class="text-end">20</h2>
                            <p>Total classes listed</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 pt-2">
                <div class="card " style="background-color:#00425A;">
                    <div class="card-body d-flex justify-content-between">

                        <div>
                            <img src="{{ asset('images/result.png') }}" alt="" width="120">
                        </div>

                        <div class="cont1 text-white">
                            <h2 class="text-end">30</h2>
                            <p>Results Declared</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
