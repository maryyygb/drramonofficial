@extends('layouts.front')

@section('seca')

<div class="events-a">
    <div class="events-a-content page-header">
        <h2>ABOUT US</h2>
        <p class="eve-a-des">Welcome to Dr. Ramon de Santos National High School, where excellence is celebrated and achievements are abundant! As you explore our website, we invite you to discover the many reasons why our school stands out. From our impressive array of awards and accolades to our dedicated staff and vibrant student activities, you'll find everything you need to get to know our school better. Take a virtual tour of our campus, meet our passionate staff members, and explore the wide range of activities available to our students. Whether you're a prospective student, parent, or community member, we're excited to share the spirit of Dr. Ramon de Santos National High School with you!</p>
    </div>
</div>

<!-- acad b second - mini nav -->
<div class="acad-b">
    <div class="acad-b-con">
        <a href="#" class="acad-b-nav acad-nav-a">CURRENT EVENTS</a>
        <a href="#" class="acad-b-nav acad-nav-b">OLD EVENTS</a>
    </div>
</div>

<!-- EVENTS C - HEADLINES -->
<div class="eve-headline">
    <h1>CURRENT EVENTS</h1>
</div>

<!-- events d - current events -->
<div class="event-c">
     
    <div class="ev-c-con">
        <div class="ev-c-box">
            <img src="{{ asset('images/prom.jpg') }}" alt="" width="200">
        </div>
        <div class="ev-c-box">
            <h1>School Year Ends, When?</h1>
            <p class="ev-c-box-date">March 6, 2024</p>
            <p class="ev-c-box-des">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae eveniet aspernatur voluptatem nesciunt.</p>
            <a href="#">Read More</a>
        </div>
    </div>
</div>

<!-- EVENTS E - HEADLINES -->
<div class="eve-headline">
    <h1>PAST EVENTS</h1>
</div>

<!-- EVENTS F - PAST EVENTS -->
<div class="events-f">
    <div class="ev-f-con ev-f-con-right">
        <div class="ev-f-items">
            <div class="ev-f-list">
                <img src="{{ asset('images/sp1.jpg') }}" alt="" width="200">
            </div>
            <div class="ev-f-list">
                <h1>11 Wins In Sport Fest 2024</h1>
                <p class="ev-f-date">March 16, 2024</p>
                <p class="ev-f-des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit illum inventore ut non!</p>
                <a href="#" class="ev-f-read">Read More</a>
            </div>
        </div>
        <div class="ev-f-items">
            <div class="ev-f-list">
                <img src="{{ asset('images/sp1.jpg') }}" alt="" width="200">
            </div>
            <div class="ev-f-list">
                <h1>11 Wins In Sport Fest 2024</h1>
                <p class="ev-f-date">March 16, 2024</p>
                <p class="ev-f-des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit illum inventore ut non!</p>
                <a href="#" class="ev-f-read">Read More</a>
            </div>
        </div>
        <div class="ev-f-items">
            <div class="ev-f-list">
                <img src="{{ asset('images/sp1.jpg') }}" alt="" width="200">
            </div>
            <div class="ev-f-list">
                <h1>11 Wins In Sport Fest 2024</h1>
                <p class="ev-f-date">March 16, 2024</p>
                <p class="ev-f-des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit illum inventore ut non!</p>
                <a href="#" class="ev-f-read">Read More</a>
            </div>
        </div>
    </div>
    <div class="ev-f-con">
        <div class="ev-f-items">
            <div class="ev-f-list">
                <img src="{{ asset('images/sp1.jpg') }}" alt="" width="200">
            </div>
            <div class="ev-f-list">
                <h1>11 Wins In Sport Fest 2024</h1>
                <p class="ev-f-date">March 16, 2024</p>
                <p class="ev-f-des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit illum inventore ut non!</p>
                <a href="#" class="ev-f-read">Read More</a>
            </div>
        </div>
        <div class="ev-f-items">
            <div class="ev-f-list">
                <img src="{{ asset('images/sp1.jpg') }}" alt="" width="200">
            </div>
            <div class="ev-f-list">
                <h1>11 Wins In Sport Fest 2024</h1>
                <p class="ev-f-date">March 16, 2024</p>
                <p class="ev-f-des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit illum inventore ut non!</p>
                <a href="#" class="ev-f-read">Read More</a>
            </div>
        </div>
        <div class="ev-f-items">
            <div class="ev-f-list">
                <img src="{{ asset('images/sp1.jpg') }}" alt="" width="200">
            </div>
            <div class="ev-f-list">
                <h1>11 Wins In Sport Fest 2024</h1>
                <p class="ev-f-date">March 16, 2024</p>
                <p class="ev-f-des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit illum inventore ut non!</p>
                <a href="#" class="ev-f-read">Read More</a>
            </div>
        </div>
    </div>
</div>

@endsection