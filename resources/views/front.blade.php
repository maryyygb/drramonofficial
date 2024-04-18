@extends('layouts.layout')

@section('content')

<!-- BODY -->

<!-- #####   MAIN   ##### -->

<main>
    <div class="f-body">
        <div class="f-body-title">
            <ul>
                <li>
                    <h1>EMPOWERING MINDS,</h1>
                </li>
                <li>
                    <h1>SHAPING FUTURES</h1>
                </li>
            </ul>
            <h5>Welcome to <span>
                    DR. RAMON DE SANTOS NATIONAL HIGH SCHOOL
                </span></h5>
            <div class="btn">
                <button class="enroll" src="/login">Enroll Now!</button>
                <button class="learn" src="/login">Learn More</button>
            </div>

        </div>
    </div>
</main>

<!-- #####   F-THREE   ##### -->

<div class="f-three">
    <h1>Events</h1>
    <div class="f-three-sec">
        <div class="f-three-items">
            <img src="{{ asset('images/teachers.jpg') }}" alt="" width="300px">
            <h2>Events one</h2>
            <p>March 2, 2024</p>
            <p class="f-events-des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quidem excepturi aspernatur ullam eius. Voluptas velit, dolore impedit dicta libero doloribus saepe quo architecto itaque, ratione voluptatibus. Accusantium, placeat recusandae.</p>
        </div>
        <div class="f-three-items">
            <img src="{{ asset('images/teachers.jpg') }}" alt="" width="300px">
            <h2>Events one</h2>
            <p>March 2, 2024</p>
            <p class="f-events-des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quidem excepturi aspernatur ullam eius. Voluptas velit, dolore impedit dicta libero doloribus saepe quo architecto itaque, ratione voluptatibus. Accusantium, placeat recusandae.</p>
        </div>
        <div class="f-three-items">
            <img src="{{ asset('images/teachers.jpg') }}" alt="" width="300px">
            <h2>Events one</h2>
            <p class="f-date">March 2, 2024</p>
            <p class="f-events-des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quidem excepturi aspernatur ullam eius. Voluptas velit, dolore impedit dicta libero doloribus saepe quo architecto itaque, ratione voluptatibus. Accusantium, placeat recusandae.</p>
        </div>
    </div>
    <div class="f-btn">
        <a href="/events">See more here</a>
    </div>
</div>

<!-- #####   F-FOUR   ##### -->

<div class="f-four">
    <h2>Academics</h2>
    <!-- <div class="f-acad-warning">
        <p>NOW OPEN FOR ADMISSION!</p>
        <p>NOW OPEN FOR ADMISSION!</p>
    </div> -->
    <div class="f-acad">
        <div class="f-acad-items">
            <img src="{{ asset('images/jhs.jpg') }}" alt="" width="300px">
            <h2>Junior High School</h2>
            <p>Welcome to Dr. Ramon de Santos National High School, where excellence meets opportunity! As you navigate through the crucial decision of selecting the perfect junior high school for your child, we invite you to explore the myriad benefits that our esteemed institution has to offer. We understand that choosing the right junior high school is a significant decision, and we're here to support you every step of the way. </p>
            <a href="/register">Enroll Now!</a>
        </div>
        <div class="f-acad-items">
            <img src="{{ asset('images/shs.jpg') }}" alt="" width="300px">
            <h2>Senior High School</h2>
            <p>
                Welcome to Dr. Ramon de Santos National High School, where the future begins with endless possibilities! As you consider the next step in your child's academic journey, we're thrilled to introduce you to our senior high school program, offering a diverse range of specialized strands designed to ignite their passions, hone their talents, and prepare them for success in the ever-evolving world.</p>
            <a href="/register">Enroll now!</a>
        </div>
    </div>
</div>

<!-- #####   F-FIVE   ##### -->

<div class="f-five">
    <div class="f-five-sec">
        <h2>Blogs and Update</h2>
        <div class="f-five-con">
            <div class="f-five-items">
                <div class="f-five-img-con">
                    <img src="{{ asset('images/jhs.jpg') }}" alt="" width="200px">
                </div>
                <h2>"In coming Senior High School Graduates 2023-2024"</h2>
                <p>December 25, 2024</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima reiciendis ullam nisi blanditiis eius magni nemo tempora neque eligendi perferendis explicabo,accusantium impedit voluptatem asperiores! Hic accusamus et minima.</p>
                <a href="">Read More</a>
                </img>
            </div>
            <div class="f-five-items">
                <div class="f-five-img-con">
                    <img src="{{ asset('images/jhs.jpg') }}" alt="" width="200px">
                </div>
                <h2>"In coming Senior High School Graduates 2023-2024"</h2>
                <p>December 25, 2024</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima reiciendis ullam nisi blanditiis eius magni nemo tempora neque eligendi perferendis explicabo,accusantium impedit voluptatem asperiores! Hic accusamus et minima.</p>
                <a href="">Read More</a>
                </img>
            </div>
            <div class="f-five-items">
                <div class="f-five-img-con">
                    <img src="{{ asset('images/shs.jpg') }}" alt="" width="200px">
                </div>
                <h2>"In coming Senior High School Graduates 2023-2024"</h2>
                <p>December 25, 2024</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima reiciendis ullam nisi blanditiis eius magni nemo tempora neque eligendi perferendis explicabo,accusantium impedit voluptatem asperiores! Hic accusamus et minima.</p>
                <a href="">Read More</a>
                </img>
            </div>
            <div class="f-five-items">
                <div class="f-five-img-con">
                    <img src="{{ asset('images/jhs.jpg') }}" alt="" width="200px">
                </div>
                <h2>"In coming Senior High School Graduates 2023-2024"</h2>
                <p>December 25, 2024</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima reiciendis ullam nisi blanditiis eius magni nemo tempora neque eligendi perferendis explicabo,accusantium impedit voluptatem asperiores! Hic accusamus et minima.</p>
                <a href="">Read More</a>
                </img>
            </div>
        </div>
    </div>
</div>

<!-- #####   F-TWO   ##### -->

<div class="f-two">
    <h2>Vission, Mission & Core Values</h2>
    <div class="mivi">
        <div class="mivi-sec">
            <ul>
                <li>
                    <div class="mivi-list">
                        <h2>Vision</h2>
                        <p>We dream of Filipinos
                            who passionately love their country
                            and whose values and competencies
                            enable them to realize their full potential
                            and contribute meaningfully to building the nation.

                            As a learner-centered public institution,
                            the Department of Education
                            continuously improves itself
                            to better serve its stakeholders.</p>
                    </div>
                    <div class="mivi-list">
                        <h2>Core Values</h2>
                        <p>Maka-Diyos</p>
                        <p>Maka-tao</p>
                        <p>Makakalikasan</p>
                        <p>Makabansa</p>
                    </div>
                    <div class="mivi-list">
                        <h2>Mission</h2>
                        <p>To protect and promote the right of every Filipino to quality, equitable, culture-based, and complete basic education where:

                            Students learn in a child-friendly, gender-sensitive, safe, and motivating environment.
                            Teachers facilitate learning and constantly nurture every learner.
                            Administrators and staff, as stewards of the institution, ensure an enabling and supportive environment for effective learning to happen.
                            Family, community, and other stakeholders are actively engaged and share responsibility for developing life-long learners.</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>


<!-- END OF BODY -->

@endsection

@section('bottom')

<script src="{{ asset('js/front.js') }}"></script>

@endsection