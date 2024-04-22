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
            <img src="{{ asset('images/seniorgrad.png') }}" alt="" width="200">
        </div>
        <div class="ev-c-box">
            <h1>Graduation of Grade 12 Students</h1>
            <p class="ev-c-box-date">March 6, 2024</p>
            <p class="ev-c-box-des">As we slowly welcome the month of May, we all started having flashbacks, teary eyes and heavy feelings at the same time, joy because we are slowly getting to the end of our hardships. Congratulations Grade 12 students and being part of your family, Dr. Ramon will always be proud and thankful to have you.</p>
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
                <img src="{{ asset('images/blogesport.jpg') }}" alt="" width="200">
            </div>
            <div class="ev-f-list">
                <h1>First Esport Team Clinching the Gold</h1>
                <p class="ev-f-date">March 24, 2024</p>
                <p class="ev-f-des">Congratulations to our first Esports Team for clinching the GOLD at the Nueva Ecija Provincial Meet 2024!</p>
                <a href="#" class="ev-f-read">Read More</a>
            </div>
        </div>
        <div class="ev-f-items">
            <div class="ev-f-list">
                <img src="{{ asset('images/blogat.jpg') }}" alt="" width="200">
            </div>
            <div class="ev-f-list">
                <h1>Ramonian Athletes</h1>
                <p class="ev-f-date">March 20, 2024</p>
                <p class="ev-f-des">Let’s pray and cheer our Ramonian Athletes as they compete for the Nueva Ecija Provincial Athletic Meet 2024! </p>
                <a href="#" class="ev-f-read">Read More</a>
            </div>
        </div>
        <div class="ev-f-items">
            <div class="ev-f-list">
                <img src="{{ asset('images/newsbasket.png') }}" alt="" width="200">
            </div>
            <div class="ev-f-list">
                <h1>Women's 3x3 Basketball</h1>
                <p class="ev-f-date">March 23, 2024</p>
                <p class="ev-f-des">History makers! Our Women's 3x3 Basketball team secures their place in the record books with a phenomenal third consecutive gold at the Provincial Meet. Congratulations! </p>
                <a href="#" class="ev-f-read">Read More</a>
            </div>
        </div>
    </div>
    <div class="ev-f-con">
        <div class="ev-f-items">
            <div class="ev-f-list">
                <img src="{{ asset('images/newsbkd.jpg') }}" alt="" width="200">
            </div>
            <div class="ev-f-list">
                <h1>BKD Family</h1>
                <p class="ev-f-date">March 15, 2024</p>
                <p class="ev-f-des">Gratitude to our BKD , YES-O , SSLG , MAPEH CLUB , AND OTHER STUDENTS for  their dedication in leading the clean-up drive, preparing for the mural painting contest.</p>
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