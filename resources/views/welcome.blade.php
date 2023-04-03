@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="container p-3">
        <div class="row p-3">

            <div class="col-12 col-md-6 p-3 " >
                <img src="{{ asset('images/bg2.svg') }}" alt="" height="400">
            </div>

            <div class="col-12 col-md-6">
                <div class="text-elements text-center py-5">
                    <h3 class="text-danger">WELCOME</h3>
                    <hr>
                    <p class="fw-bolder">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A sunt necessitatibus esse quidem nam nesciunt <span class="text-danger">uas expedita unde?</span>q Natus, aspernatur non, porro earum debitis, cum animi ratione dignissimos qui id fuga sunt eaque iusto labore. <span class="text-danger">Rerum provident</span> quibusdam repellendus voluptatibus architecto modi mollitia. Excepturi neque aut eaque est corrupti quam!
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

