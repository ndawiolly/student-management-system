@extends('layouts.adminapp')
@section('content')
    <div class="container-fluid shadow ">
        <div class="container-fluid ">
            <h2>STUDENTS RECORD</h2>
        </div>
    </div>

    <div class="container  d-flex justify-content-center align-self-center p-3" id="student-record">

        <table class="table">
            <thead>
                <tr>
                    <th>S/N</th>
                    <th>Students Name</th>
                    <th>Email Address</th>
                    <th>DOB</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($stud_records as $record)

                <tr>
                    <td>1</td>
                    <td>{{ $record->name }}</td>
                    <td>{{ $record->email }}</td>
                    <td>{{ $record->dob }}</td>
                    <td>{{ $record->gender }}</td>
                    <td>{{ $record->address }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">

                            <a type="submit" href="{{ route('accept_student', $record->id) }}" class="btn btn-success">Accept</a>
                            <button type="submit" href="{{ $record->id }}" class="btn btn-primary">Reject</button>
                            <button type="submit" href="{{ $record->id }}" class="btn btn-info">More info</button>
                          </div>
                    </td>
                </tr>
                @empty
                    <div class="text-center text-danger">
                        No record found
                    </div>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
