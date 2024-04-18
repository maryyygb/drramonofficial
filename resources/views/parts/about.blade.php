@extends('layouts.front')

@section('seca')

<!-- a first -->
<div class="about-a">
    <div class="ab-a-content page-header">
        <h2>ABOUT US</h2>
        <p class="ab-a-des">Welcome to Dr. Ramon de Santos National High School, where excellence is celebrated and achievements are abundant! As you explore our website, we invite you to discover the many reasons why our school stands out. From our impressive array of awards and accolades to our dedicated staff and vibrant student activities, you'll find everything you need to get to know our school better. Take a virtual tour of our campus, meet our passionate staff members, and explore the wide range of activities available to our students. Whether you're a prospective student, parent, or community member, we're excited to share the spirit of Dr. Ramon de Santos National High School with you!</p>
    </div>
</div>

<!-- b second - mini nav -->
<div class="about-b">
    <div class="ab-b-con">
        <a href="#tourmap" class="ab-b-nav">School Tour Video & Map</a>
        <a href="#awards" class="ab-b-nav">Awards</a>
        <a href="#events" class="ab-b-nav">Activities</a>
        <a href="#staff" class="ab-b-nav">School Staff</a>
    </div>
</div>

<div class="spart-h2" id="tourmap">
    <h1>SCHOOL VIRTUAL TOUR & MAP</h1>
</div>

<!-- c , d part combined -->
<div class="about-c-d">
    <!-- c third - school tour -->
    <div class="about-c">
        <div class="ab-c-video">
            <video controls src="{{ asset('videos/ramon.mp4') }}" width="650"></video>
        </div>
        <div class="ab-c-foot">
            <h2>Junior and Senior High School</h2>
        </div>
    </div>

    <!-- d fourth - school map -->
    <div class="about-d">
        <div class="ab-d-con">
            <div class="ab-d-box">
                <img src="{{ asset('images/schoolare.png') }}" alt="School Map" width="1000">
            </div>
        </div>
    </div>
</div>

<!-- f sixth - awards -->
<div class="about-f">
    <div class="spart-h2" id="awards">
        <h1>SCHOOL AWARDS</h1>
    </div>
    <div class="about-f-part-con">
        <div class="about-f-box">
            <div class="about-f-item">
                <img src="{{ asset('images/sh.jpg') }}" alt="" width="300">
            </div>
            <div class="about-f-item">
                <h1 class="ab-f-header">What Award?</h1>
                <h5 class="ab-f-date">March 26, 2024</h5>
                <p class="ab-f-des">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint nemo ullam perspiciatis commodi esse quis facere.</p>
            </div>
        </div>
        <div class="about-f-box">
            <div class="about-f-item">
                <img src="{{ asset('images/sh.jpg') }}" alt="" width="300">
            </div>
            <div class="about-f-item">
                <h1 class="ab-f-header">What Award?</h1>
                <h5 class="ab-f-date">March 26, 2024</h5>
                <p class="ab-f-des">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint nemo ullam perspiciatis commodi esse quis facere.</p>
            </div>
        </div>
        <div class="about-f-box">
            <div class="about-f-item">
                <img src="{{ asset('images/sh.jpg') }}" alt="" width="300">
            </div>
            <div class="about-f-item">
                <h1 class="ab-f-header">What Award?</h1>
                <h5 class="ab-f-date">March 26, 2024</h5>
                <p class="ab-f-des">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint nemo ullam perspiciatis commodi esse quis facere.</p>
            </div>
        </div>
        <div class="about-f-box">
            <div class="about-f-item">
                <img src="{{ asset('images/sh.jpg') }}" alt="" width="300">
            </div>
            <div class="about-f-item">
                <h1 class="ab-f-header">What Award?</h1>
                <h5 class="ab-f-date">March 26, 2024</h5>
                <p class="ab-f-des">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint nemo ullam perspiciatis commodi esse quis facere.</p>
            </div>
        </div>
    </div>
</div>

<!-- g seventh - school awaited activites -->
<div class="about-g">
    <div class="spart-h2" id="events">
        <h1>SCHOOL MOST AWAITED EVENTS & ACTIVITIES</h1>
    </div>
    <div class="about-g-con">
        <div class="about-g-box">
            <div class="about-g-items">
                <img src="{{ asset('images/dance.jpg') }}" alt="Awaited Activities" width="200">
            </div>
            <div class="about-g-items">
                <h3 class="about-g-title">What Activity?</h3>
                <p class="about-g-des">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, cum! Laborum dolorem assumenda atque, vel doloremque et! Officia alias ab optio ex dolorum voluptate, recusandae.
                </p>
            </div>
        </div>
        <div class="about-g-box">
            <div class="about-g-items">
                <h3 class="about-g-title">What Activity?</h3>
                <p class="about-g-des">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, cum! Laborum dolorem assumenda atque, vel doloremque et! Officia alias ab optio ex dolorum voluptate, recusandae.
                </p>
            </div>
            <div class="about-g-items">
                <img src="{{ asset('images/camping.jpg') }}" alt="Awaited Activities" width="200">
            </div>

        </div>
        <div class="about-g-box">
            <div class="about-g-items">
                <img src="{{ asset('images/prom.jpg') }}" alt="Awaited Activities" width="200">
            </div>
            <div class="about-g-items">
                <h3 class="about-g-title">What Activity?</h3>
                <p class="about-g-des">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, cum! Laborum dolorem assumenda atque, vel doloremque et! Officia alias ab optio ex dolorum voluptate, recusandae.
                </p>
            </div>
        </div>
        <div class="about-g-box">

            <div class="about-g-items">
                <h3 class="about-g-title">What Activity?</h3>
                <p class="about-g-des">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, cum! Laborum dolorem assumenda atque, vel doloremque et! Officia alias ab optio ex dolorum voluptate, recusandae.
                </p>
            </div>
            <div class="about-g-items">
                <img src="{{ asset('images/sports.jpg') }}" alt="Awaited Activities" width="200">
            </div>
        </div>
        <div class="about-g-box">
            <div class="about-g-items">
                <img src="{{ asset('images/donate.jpg') }}" alt="Awaited Activities" width="200">
            </div>
            <div class="about-g-items">
                <h3 class="about-g-title">What Activity?</h3>
                <p class="about-g-des">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, cum! Laborum dolorem assumenda atque, vel doloremque et! Officia alias ab optio ex dolorum voluptate, recusandae.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- e fifth - school staff -->
<div class="about-e">
    <div class="spart-h2" id="staff">
        <h1>SCHOOL STAFF</h1>
    </div>
    <div class="ab-e-con">
        <div class="ab-e-box">
            <div class="ab-e-item abe-left">
                <img src="{{ asset('images/principal.jpg') }}" alt="" width="300">
                <h2 class="abe-tea-head">Elenita C. Sumait, PhD</h2>
                <p class="abe-head-role">School Principal IV</p>
            </div>
            <div class="ab-e-item abe-right">
                <div class="abe-list">
                    <div class="ab-e-teacher">
                        <img src="{{ asset('images/vivian.jpg') }}" alt="Teacher" width="200">
                        <h2 class="abe-tea-name">Vivian Ramos, Ed. D</h2>
                        <p class="abe-tea-role">Teacher III</p>
                    </div>
                    <div class="ab-e-teacher">
                        <img src="{{ asset('images/vivian.jpg') }}" alt="Teacher" width="200">
                        <h2 class="abe-tea-name">Vivian Ramos, Ed. D</h2>
                        <p class="abe-tea-role">Teacher III</p>
                    </div>
                    <div class="ab-e-teacher">
                        <img src="{{ asset('images/vivian.jpg') }}" alt="Teacher" width="200">
                        <h2 class="abe-tea-name">Vivian Ramos, Ed. D</h2>
                        <p class="abe-tea-role">Teacher III</p>
                    </div>
                    <div class="ab-e-teacher">
                        <img src="{{ asset('images/vivian.jpg') }}" alt="Teacher" width="200">
                        <h2 class="abe-tea-name">Vivian Ramos, Ed. D</h2>
                        <p class="abe-tea-role">Teacher III</p>
                    </div>
                    <div class="ab-e-teacher">
                        <img src="{{ asset('images/vivian.jpg') }}" alt="Teacher" width="200">
                        <h2 class="abe-tea-name">Vivian Ramos, Ed. D</h2>
                        <p class="abe-tea-role">Teacher III</p>
                    </div>
                    <div class="ab-e-teacher">
                        <img src="{{ asset('images/vivian.jpg') }}" alt="Teacher" width="200">
                        <h2 class="abe-tea-name">Vivian Ramos, Ed. D</h2>
                        <p class="abe-tea-role">Teacher III</p>
                    </div>
                    <div class="ab-e-teacher">
                        <img src="{{ asset('images/vivian.jpg') }}" alt="Teacher" width="200">
                        <h2 class="abe-tea-name">Vivian Ramos, Ed. D</h2>
                        <p class="abe-tea-role">Teacher III</p>
                    </div>
                </div>
                <div class="abe-list">
                    <div class="ab-e-teacher">
                        <img src="{{ asset('images/vivian.jpg') }}" alt="Teacher" width="200">
                        <h2 class="abe-tea-name">Vivian Ramos, Ed. D</h2>
                        <p class="abe-tea-role">Teacher III</p>
                    </div>
                    <div class="ab-e-teacher">
                        <img src="{{ asset('images/vivian.jpg') }}" alt="Teacher" width="200">
                        <h2 class="abe-tea-name">Vivian Ramos, Ed. D</h2>
                        <p class="abe-tea-role">Teacher III</p>
                    </div>
                    <div class="ab-e-teacher">
                        <img src="{{ asset('images/vivian.jpg') }}" alt="Teacher" width="200">
                        <h2 class="abe-tea-name">Vivian Ramos, Ed. D</h2>
                        <p class="abe-tea-role">Teacher III</p>
                    </div>
                    <div class="ab-e-teacher">
                        <img src="{{ asset('images/vivian.jpg') }}" alt="Teacher" width="200">
                        <h2 class="abe-tea-name">Vivian Ramos, Ed. D</h2>
                        <p class="abe-tea-role">Teacher III</p>
                    </div>
                    <div class="ab-e-teacher">
                        <img src="{{ asset('images/vivian.jpg') }}" alt="Teacher" width="200">
                        <h2 class="abe-tea-name">Vivian Ramos, Ed. D</h2>
                        <p class="abe-tea-role">Teacher III</p>
                    </div>
                    <div class="ab-e-teacher">
                        <img src="{{ asset('images/vivian.jpg') }}" alt="Teacher" width="200">
                        <h2 class="abe-tea-name">Vivian Ramos, Ed. D</h2>
                        <p class="abe-tea-role">Teacher III</p>
                    </div>
                    <div class="ab-e-teacher">
                        <img src="{{ asset('images/vivian.jpg') }}" alt="Teacher" width="200">
                        <h2 class="abe-tea-name">Vivian Ramos, Ed. D</h2>
                        <p class="abe-tea-role">Teacher III</p>
                    </div>
                </div>
                <div class="abe-list abe-list-last">
                    <div class="ab-e-teacher">
                        <img src="{{ asset('images/vivian.jpg') }}" alt="Teacher" width="200">
                        <h2 class="abe-tea-name">Vivian Ramos, Ed. D</h2>
                        <p class="abe-tea-role">Teacher III</p>
                    </div>
                    <div class="ab-e-teacher">
                        <img src="{{ asset('images/vivian.jpg') }}" alt="Teacher" width="200">
                        <h2 class="abe-tea-name">Vivian Ramos, Ed. D</h2>
                        <p class="abe-tea-role">Teacher III</p>
                    </div>
                    <div class="ab-e-teacher">
                        <img src="{{ asset('images/vivian.jpg') }}" alt="Teacher" width="200">
                        <h2 class="abe-tea-name">Vivian Ramos, Ed. D</h2>
                        <p class="abe-tea-role">Teacher III</p>
                    </div>
                    <div class="ab-e-teacher">
                        <img src="{{ asset('images/vivian.jpg') }}" alt="Teacher" width="200">
                        <h2 class="abe-tea-name">Vivian Ramos, Ed. D</h2>
                        <p class="abe-tea-role">Teacher III</p>
                    </div>
                    <div class="ab-e-teacher">
                        <img src="{{ asset('images/vivian.jpg') }}" alt="Teacher" width="200">
                        <h2 class="abe-tea-name">Vivian Ramos, Ed. D</h2>
                        <p class="abe-tea-role">Teacher III</p>
                    </div>
                    <div class="ab-e-teacher">
                        <img src="{{ asset('images/vivian.jpg') }}" alt="Teacher" width="200">
                        <h2 class="abe-tea-name">Vivian Ramos, Ed. D</h2>
                        <p class="abe-tea-role">Teacher III</p>
                    </div>
                    <div class="ab-e-teacher">
                        <img src="{{ asset('images/vivian.jpg') }}" alt="Teacher" width="200">
                        <h2 class="abe-tea-name">Vivian Ramos, Ed. D</h2>
                        <p class="abe-tea-role">Teacher III</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="ab-e-box">
            <div class="ab-e-item abe-left">
                <img src="{{ asset('images/sirmoi.jpg') }}" alt="" width="300">
                <h2 class="abe-tea-head">Moises M. Cadalso, Jr., MAEd</h2>
                <p class="abe-head-role">Assistant Principal II</p>
            </div>
            <div class="ab-e-item abe-right">
                <div class="abe-list">
                    <div class="ab-e-teacher">
                        <img src="{{ asset('images/mamroma.jpg') }}" alt="Teacher" width="200">
                        <h2 class="abe-tea-name">Romabele Cheline Sawit, LPT</h2>
                        <p class="abe-tea-role">Teacher II</p>
                    </div>
                    <div class="ab-e-teacher">
                        <img src="{{ asset('images/mamroma.jpg') }}" alt="Teacher" width="200">
                        <h2 class="abe-tea-name">Romabele Cheline Sawit, LPT</h2>
                        <p class="abe-tea-role">Teacher II</p>
                    </div>
                    <div class="ab-e-teacher">
                        <img src="{{ asset('images/mamroma.jpg') }}" alt="Teacher" width="200">
                        <h2 class="abe-tea-name">Romabele Cheline Sawit, LPT</h2>
                        <p class="abe-tea-role">Teacher II</p>
                    </div>
                    <div class="ab-e-teacher">
                        <img src="{{ asset('images/mamroma.jpg') }}" alt="Teacher" width="200">
                        <h2 class="abe-tea-name">Romabele Cheline Sawit, LPT</h2>
                        <p class="abe-tea-role">Teacher II</p>
                    </div>
                    <div class="ab-e-teacher">
                        <img src="{{ asset('images/mamroma.jpg') }}" alt="Teacher" width="200">
                        <h2 class="abe-tea-name">Romabele Cheline Sawit, LPT</h2>
                        <p class="abe-tea-role">Teacher II</p>
                    </div>
                    <div class="ab-e-teacher">
                        <img src="{{ asset('images/mamroma.jpg') }}" alt="Teacher" width="200">
                        <h2 class="abe-tea-name">Romabele Cheline Sawit, LPT</h2>
                        <p class="abe-tea-role">Teacher II</p>
                    </div>
                    <div class="ab-e-teacher">
                        <img src="{{ asset('images/mamroma.jpg') }}" alt="Teacher" width="200">
                        <h2 class="abe-tea-name">Romabele Cheline Sawit, LPT</h2>
                        <p class="abe-tea-role">Teacher II</p>
                    </div>
                </div>
                <div class="abe-list">
                    <div class="ab-e-teacher">
                        <img src="{{ asset('images/mamroma.jpg') }}" alt="Teacher" width="200">
                        <h2 class="abe-tea-name">Romabele Cheline Sawit, LPT</h2>
                        <p class="abe-tea-role">Teacher II</p>
                    </div>
                    <div class="ab-e-teacher">
                        <img src="{{ asset('images/mamroma.jpg') }}" alt="Teacher" width="200">
                        <h2 class="abe-tea-name">Romabele Cheline Sawit, LPT</h2>
                        <p class="abe-tea-role">Teacher II</p>
                    </div>
                    <div class="ab-e-teacher">
                        <img src="{{ asset('images/mamroma.jpg') }}" alt="Teacher" width="200">
                        <h2 class="abe-tea-name">Romabele Cheline Sawit, LPT</h2>
                        <p class="abe-tea-role">Teacher II</p>
                    </div>
                    <div class="ab-e-teacher">
                        <img src="{{ asset('images/mamroma.jpg') }}" alt="Teacher" width="200">
                        <h2 class="abe-tea-name">Romabele Cheline Sawit, LPT</h2>
                        <p class="abe-tea-role">Teacher II</p>
                    </div>
                    <div class="ab-e-teacher">
                        <img src="{{ asset('images/mamroma.jpg') }}" alt="Teacher" width="200">
                        <h2 class="abe-tea-name">Romabele Cheline Sawit, LPT</h2>
                        <p class="abe-tea-role">Teacher II</p>
                    </div>
                    <div class="ab-e-teacher">
                        <img src="{{ asset('images/mamroma.jpg') }}" alt="Teacher" width="200">
                        <h2 class="abe-tea-name">Romabele Cheline Sawit, LPT</h2>
                        <p class="abe-tea-role">Teacher II</p>
                    </div>
                    <div class="ab-e-teacher">
                        <img src="{{ asset('images/mamroma.jpg') }}" alt="Teacher" width="200">
                        <h2 class="abe-tea-name">Romabele Cheline Sawit, LPT</h2>
                        <p class="abe-tea-role">Teacher II</p>
                    </div>
                </div>
                <div class="abe-list abe-list-last">
                    <div class="ab-e-teacher">
                        <img src="{{ asset('images/mamroma.jpg') }}" alt="Teacher" width="200">
                        <h2 class="abe-tea-name">Romabele Cheline Sawit, LPT</h2>
                        <p class="abe-tea-role">Teacher II</p>
                    </div>
                    <div class="ab-e-teacher">
                        <img src="{{ asset('images/mamroma.jpg') }}" alt="Teacher" width="200">
                        <h2 class="abe-tea-name">Romabele Cheline Sawit, LPT</h2>
                        <p class="abe-tea-role">Teacher II</p>
                    </div>
                    <div class="ab-e-teacher">
                        <img src="{{ asset('images/mamroma.jpg') }}" alt="Teacher" width="200">
                        <h2 class="abe-tea-name">Romabele Cheline Sawit, LPT</h2>
                        <p class="abe-tea-role">Teacher II</p>
                    </div>
                    <div class="ab-e-teacher">
                        <img src="{{ asset('images/mamroma.jpg') }}" alt="Teacher" width="200">
                        <h2 class="abe-tea-name">Romabele Cheline Sawit, LPT</h2>
                        <p class="abe-tea-role">Teacher II</p>
                    </div>
                    <div class="ab-e-teacher">
                        <img src="{{ asset('images/mamroma.jpg') }}" alt="Teacher" width="200">
                        <h2 class="abe-tea-name">Romabele Cheline Sawit, LPT</h2>
                        <p class="abe-tea-role">Teacher II</p>
                    </div>
                    <div class="ab-e-teacher">
                        <img src="{{ asset('images/mamroma.jpg') }}" alt="Teacher" width="200">
                        <h2 class="abe-tea-name">Romabele Cheline Sawit, LPT</h2>
                        <p class="abe-tea-role">Teacher II</p>
                    </div>
                    <div class="ab-e-teacher">
                        <img src="{{ asset('images/mamroma.jpg') }}" alt="Teacher" width="200">
                        <h2 class="abe-tea-name">Romabele Cheline Sawit, LPT</h2>
                        <p class="abe-tea-role">Teacher II</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="ab-e-allteapic">
        <h2 class="allteapic">Junior and Senior High School Teachers</h2>
        <img src="{{ asset('images/teachers.jpg') }}" alt="Teachers of Dr. Ramon de Santos National High School" width="1000">
    </div>
</div>



@endsection