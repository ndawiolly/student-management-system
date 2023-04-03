@extends('layouts.adminapp')
@section('content')
    <div class="container-fluid shadow py-1">
        <div class="container-fluid p-2 ">
            <h2>ADD SUBJECT COMBINATION</h2>
            <hr>
            <p>Home / subject / add_subject_combo</p>
        </div>
    </div>

    <div class="container p-2 d-flex justify-content-center align-self-center " id="create-class">
        <div class="card p-2 position-relative w-50 shadow border-0">
            <h4 class="py-2">Add Subject Combination</h4>
            <hr>

            <form action="{{ route('combo') }}" method="post" class="position-relative">
                @csrf
                
                <div class="m-3">
                    <label for="stud-name">Class</label>
                    <select class="form-select shadow-none" name="class_id" aria-label="Default select example">
                        <option selected disabled>Choose a class</option>
                        @foreach ($classes as $class)
                            {{-- <option value="{{ $class->id }}">{{ $class->class_section }}</option> --}}

                            <option value="{{ $class->id }}">{{ $class->class_section }}</option>
                        @endforeach



                    </select>
                </div>
                <div class="m-3">
                    @forelse ($subjects as $subject)
                        <label for="sub{{ $subject->id }}" class="form-check-label">{{ $subject->subject_name }}</label>

                        <input type="checkbox" id="sub{{ $subject->id }}" class="form-check-input" name="comClass[]"
                            value="{{ $subject->subject_id }}" />

                    @empty
                        <div class="p-3 m-2 text-center text-danger">
                            No subject inputed
                        </div>
                    @endforelse
                    </select>
                </div>



                <div class="m-3">
                    <div class="btn-group" role="group">
                        <button type="submit" class="btn ">Add Subject</button></button>
                        <button type="button" class="btn "><i class="fas fa-check"></i></button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
