@extends('layouts.app')

@section('content')

<div class="container">

<!-- for the success message from the controller when a new event is added -->
@if (session('status'))
<div class="c_ev_status">{{session('status')}}</div>
@endif

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">LRN</th>
                <th scope="col">Name</th>
                <th scope="col">Grade Level To Enroll</th>
                <th scope="col">Track</th>
                <th scope="col">School Year</th>
                <th scope="col">Barangay</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        @foreach($enrollments as $enrollment)
        <tbody>
            <tr>
                <th scope="row">{{$enrollment->id}}</th>
                <td>{{$enrollment->lrn}}</td>
                <td>{{$enrollment->name}}</td>
                <td>{{$enrollment->grade_to_enroll}}</td>
                <td>{{$enrollment->track}}</td>
                <td>{{$enrollment->school_year}}</td>
                <td>{{$enrollment->brngy}}</td>
                <td>
                    <a href="{{route('enrollment.edit', ['enrollment' => $enrollment])}}" class="text-bg-primary p-1 link-underline-primary">Edit</a>
                   
                    <!-- <a href="/" class="text-bg-danger p-1">Delete</a> -->
                </td>
                <td> <form action="{{route('enrollment.destroy', ['enrollment' => $enrollment])}}" method="post" >
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" class="text-bg-danger">
                    </form></td>

            </tr>
        </tbody>
        @endforeach

    </table>

</div>

@endsection