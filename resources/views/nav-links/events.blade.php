@extends('layouts.layout')

@section('css')

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

<link rel="stylesheet" href="{{ asset('css/events.css') }}">

@endsection

@section('content')

<!-- BODY STARTS HERE -->
<div class="events-body">
    <div class="top">
        <div class="ev-a">
            <div class="ev-b ev-b-1">
                <h1>DRDSNHS</h1>
                <h1>EVENTS</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit quo tempora impedit voluptate. Iusto dignissimos quam iure enim! Nemo ratione eveniet modi fugiat iste aut vitae obcaecati temporibus pariatur provident.
                </p>
                <ul>
                    <li><a href="#latest">LATEST EVENTS</a></li>
                    <li><a href="#">UPCOMING EVENTS</a></li>
                    <li><a href="#">PAST EVENTS</a></li>
                </ul>
            </div>
            <div class="ev-b ev-b-2">
                <p class="ev-b-2-fe">LATEST EVENTS</p>
                <img src="{{ asset('images/teachers.jpg') }}" alt="event" height="auto" width="450px" src="#">
                <p class="ev-b-2-title">Title Goes Here</p>
                <p>Write the short description of the events here. Featured.</p>
            </div>
        </div>

        <!-- MIDDLE -->

        <section>
            <!-- <h1>hello</h1> -->
            <div class="mid-sec">
                <h1 class="mid-sec-title">LATEST EVENTS</h1>
                <div class="mid-sec-con">
                    <div class="mid-sec-box-1">
                        <div class="mid-sec-box-img-size">
                            <img src="{{ asset('images/teachers.jpg') }}" alt="" width="400" height="400" class="mid-sec-box-img">
                        </div>
                        
                    </div>
                    <div class="mid-sec-box-1">
                        <h1>Hello</h1>
                    </div>
                </div>
                <div class="mid-sec-con">
                    <div class="mid-sec-box-2">

                    </div>
                    <div class="mid-sec-box-2">

                    </div>
                </div>
                <div class="mid-sec-con">
                    <div class="mid-sec-box-3">

                    </div>
                    <div class="mid-sec-box-3">

                    </div>
                </div>
            </div>
        </section>
    </div>
</div>




<!-- BODY ENDS HERE -->

<!-- BOOTSTRAP -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

@endsection