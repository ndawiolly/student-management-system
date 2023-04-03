@extends('layouts.adminapp')
@section('content')
    <div class="container-fluid p-3 " id="accept">
        <div class="cont">
            <h2 class="p-3">Accept Students</h2>
            <div class="card shadow p-3">
                <form action="{{ route('pin',  $acceptR->id) }}" method="post">
                    @csrf
                    @method('PATCH')

                    <label for="accept" class="py-2 text-success fw-bolder">Login Pin for : {{ $acceptR->name }}</label>
                    <input type="number" class="form-control" id="accept" name="accept_pin" value="{{ $pin }}">
                    <div class="py-2">
                        <button type="submit" class="btn btn-success w-100">Send Pin</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
