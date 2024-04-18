@extends('layouts.layout')

@section('css')

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

<link rel="stylesheet" href="{{ asset('css/about.css') }}">

@endsection

@section('content')

<!-- BODY STARTS HERE -->

<div class="ab-section">

    <div class="ab-top">
        <div class="ab-top-list ab-tl-1">
            <h1>WHO ARE RAMONIANS?</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem quo hic, voluptas eaque omnis dolore dolor illo in rem sunt beatae, velit, libero nobis obcaecati et maxime. Enim, cupiditate eaque.</p>
            <ul>
                <li class="ab-top-btn"><a href="#">School Map</a></li>
                <li class="ab-top-btn"><a href="#">School Staff Member</a> </li>
            </ul>
        </div>
        <div class="ab-top-list">
            <img src="{{ asset('images/teachers.jpg') }}" class="img-1" alt="img">
            <img src="{{ asset('images/bg.jpg') }}" class="img-2" alt="img">
        </div>
    </div>

    <!-- VISION AND MISSION -->
    <div class="ab-mid">
        <h1 class="ab-mid-title">Vision & Mission</h1>
        <div class="ab-mid-vimi">
            <div class="ab-mid-vimi-list">
                <h1 class="ab-mid-vimi-title">Vision</h1>
                <p class="ab-mid-vimi-des">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur quo, saepe tempore fugit dignissimos iste harum reiciendis iusto ex labore nemo ducimus est vero similique perferendis, dolorum accusamus beatae eaque?
                </p>
            </div>
            <div class="ab-mid-vimi-list">
                <h1 class="ab-mid-vimi-title">Mission</h1>
                <p class="ab-mid-vimi-des">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur quo, saepe tempore fugit dignissimos iste harum reiciendis iusto ex labore nemo ducimus est vero similique perferendis, dolorum accusamus beatae eaque?
                </p>
            </div>
        </div>
    </div>

    <!-- SCHOOL STAFF -->

    <div class="ab-bot-section">
        <h1>School Staff Member</h1>
        <div class="ab-bot-con">
            <div class="ab-bot-box">
                <img src="{{ asset('images/principal.jpg') }}" alt="">
                <h3 class="school-staff-name">The name here</h3>
                <p class="staff-position">The position here</p>
            </div>
        </div>
        <div class="ab-bot-con">
            <div class="ab-bot-box">
                <img src="{{ asset('images/principal.jpg') }}" alt="">
                <h3 class="school-staff-name">The name here</h3>
                <p class="staff-position">The position here</p>
            </div>
        </div>
        <div class="ab-bot-con">
            <div class="ab-bot-box">
                <img src="{{ asset('images/principal.jpg') }}" alt="">
                <h3 class="school-staff-name">The name here</h3>
                <p class="staff-position">The position here</p>
            </div>
            <div class="ab-bot-box">
                <img src="{{ asset('images/principal.jpg') }}" alt="">
                <h3 class="school-staff-name">The name here</h3>
                <p class="staff-position">The position here</p>
            </div>
            <div class="ab-bot-box">
                <img src="{{ asset('images/principal.jpg') }}" alt="">
                <h3 class="school-staff-name">The name here</h3>
                <p class="staff-position">The position here</p>
            </div>
            <div class="ab-bot-box">
                <img src="{{ asset('images/principal.jpg') }}" alt="">
                <h3 class="school-staff-name">The name here</h3>
                <p class="staff-position">The position here</p>
            </div>
            <div class="ab-bot-box">
                <img src="{{ asset('images/principal.jpg') }}" alt="">
                <h3 class="school-staff-name">The name here</h3>
                <p class="staff-position">The position here</p>
            </div>
            <div class="ab-bot-box">
                <img src="{{ asset('images/principal.jpg') }}" alt="">
                <h3 class="school-staff-name">The name here</h3>
                <p class="staff-position">The position here</p>
            </div>
        </div>
    </div>

    <!-- SCHOOL MAP -->


</div>




<!-- BODY ENDS HERE -->

<!-- BOOTSTRAP -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

@endsection