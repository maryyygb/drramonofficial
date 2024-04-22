@extends('layouts.front')

@section('seca')

<!-- first part -->
<main>

    <div class="main-container">
        <div class="description">
            <span>Welcome to</span>
            <h1>Dr. Ramon de Santos</h1>
            <h1>National High School</h1>
            <p>We Empower Minds And Shape your Future!</p>
        </div>

        <div class="image_slider">
            <div class="image_container">
                <img src="{{ asset('images/stem.jpg') }}" alt="" width="1700">
                <img src="{{ asset('images/techdraft.jpg') }}" alt="" width="1700">
                <img src="{{ asset('images/abm.jpg') }}" alt="" width="1700">
                <img src="{{ asset('images/humss.jpg') }}" alt="" width="1700">
                <img src="{{ asset('images/cookery.jpg') }}" alt="" width="1700">
                <img src="{{ asset('images/he.jpg') }}" alt="" width="1700">
                <img src="{{ asset('images/im.jpg') }}" alt="" width="1700">
            </div>
        </div>
    </div>


</main>

<!-- second part - academics -->
<div class="s-part">
    <div class="spart-h1">
        <h1>ACADEMICS</h1>
    </div>
    <div class="sp-con">
        <div class="sp-items">
            <div class="sp-list">
                <img src="{{ asset('images/jh.jpg') }}" alt="" width="360" height="230">
            </div>
            <div class="sp-list">
                <h1>Junior High School</h1>
                <p>As you navigate through the crucial decision of selecting the perfect junior high school for your child, we invite you to explore the myriad benefits that our esteemed institution has to offer. We understand that choosing the right junior high school is a significant decision, and we're here to support you every step of the way.</p>
                <a href="/login" class="more-bt">Enroll Now!</a>
            </div>
        </div>
        <div class="sp-items">
            <div class="sp-list">
                <img src="{{ asset('images/sh.jpg') }}" alt="" width="360" height="230">
            </div>
            <div class="sp-list">
                <h1>Senior High School</h1>
                <p>As you consider the next step in your child's academic journey, we're thrilled to introduce you to our senior high school program, offering a diverse range of specialized strands designed to ignite their passions, hone their talents, and prepare them for success in the ever-evolving world.</p>
                <a href="/login" class="more-bt">Enroll Now!</a>
            </div>
        </div>
    </div>
</div>

<!-- third part - events -->
<div class="t-part">
    <div class="spart-h2">
        <h1>EVENTS</h1>
    </div>
    <div class="t-part-con">

        <div class="tp-items">
            <div class="tp-list">
                <img src="{{ asset('images/evict.png') }}" alt="" width="300" height="180">
            </div>
            <div class="tp-list">
                <h2>Special Program in Information and Communications Technology (SP-ICT) </h2>
                <p class="tp-list-date">April 15, 2024</p>
                <p class="tp-list-des">
                    Screening of Grade 7 Applicants for SY 2024-2025
                    The Screening and Admission Test is on May 4, 2024.
                </p>
                <a href="#" class="read-bt">Read More!</a>
            </div>
        </div>
        <div class="tp-items">
            <div class="tp-list">
                <img src="{{ asset('images/evsining.jpg') }}" alt="" width="300" height="180">
            </div>
            <div class="tp-list">
                <h2>Division Festival of Talents 2024!</h2>
                <p class="tp-list-date">April 12, 2024</p>
                <p class="tp-list-des">
                    A round of applause to these Ramonian students who competed in the recently concluded Division Festival of Talents 2024!
                </p>
                <a href="#" class="read-bt">Read More!</a>
            </div>
        </div>
        <div class="tp-items">
            <div class="tp-list">
                <img src="{{ asset('images/evvolley.jpg') }}" alt="" width="300" height="180">
            </div>
            <div class="tp-list">
                <h2>Secondary Volleyball Girls Provincial Athletic</h2>
                <p class="tp-list-date">March 24, 2024</p>
                <p class="tp-list-des">
                    Congratulations to our very own Ramonian Women’s Volleyball Team for winning the Silver Medal in the Secondary Volleyball Girls Provincial Athletic meet at Palayan City, Nueva Ecija.
                </p>
                <a href="#" class="read-bt">Read More!</a>
            </div>
        </div>
        <div class="tp-items">
            <div class="tp-list">
                <img src="{{ asset('images/ev1.jpg') }}" alt="" width="250" height="180">
            </div>
            <div class="tp-list">
                <h2>4th Place Overall CD 1 Press Conference
                </h2>
                <p class="tp-list-date">Februaury 24, 2024</p>
                <p class="tp-list-des">
                    Headlines filled with pride! Kudos to our Ramonian journalist for their outstanding achievement at the 2024 CD 1 Schools Press Conference. Padayon!
                </p>
                <a href="#" class="read-bt">Read More!</a>
            </div>
        </div>
    </div>
</div>

<!-- fourth part - news & blogs -->
<div class="fo-part">
    <div class="spart-h2">
        <h1>BLOGS & NEWS</h1>
    </div>
    <div class="f-part-con">
        <div class="f-part-items fourth-pi-one">
            <div class="f-part-sepa-title-con">
                <div class="fps-con fourth-pi-one">
                    <h2>BLOGS</h2>
                </div>
            </div>
            <div class="f-part-list">
                <div class="fpl-box">
                    <img src="{{ asset('images/blogesport.jpg') }}" alt="" width="300" height="150">
                </div>
                <div class="fpl-box">
                    <p class="fpl-date">March 24, 2024</p>
                    <h2 class="fpl-title">First Esport Team Clinching the Gold</h2>
                    <p class="fpl-des">Congratulations to our first Esports Team for clinching the GOLD at the Nueva Ecija Provincial Meet 2024!</p>
                    <a href="" class="read-bt-fourth">Read More!</a>
                </div>
            </div>
            <div class="f-part-list">
                <div class="fpl-box">
                    <img src="{{ asset('images/blogat.jpg') }}" alt="" width="300" height="150">
                </div>
                <div class="fpl-box">
                    <p class="fpl-date">March 20, 2024</p>
                    <h2 class="fpl-title">Ramonian Athletes</h2>
                    <p class="fpl-des">Let’s pray and cheer our Ramonian Athletes as they compete for the Nueva Ecija Provincial Athletic Meet 2024! </p>
                    <a href="" class="read-bt-fourth">Read More!</a>
                </div>
            </div>
            <div class="fourth-ex">
                <a href="#" class="fourth-ex-bt">EXPLORE NOW!</a>
            </div>
        </div>
        <div class="f-part-items fourth-pi-two">
            <div class="f-part-sepa-title-con">
                <div class="fps-con fourth-pi-two">
                    <h2>NEWS & UPDATES</h2>
                </div>
            </div>
            <div class="f-part-list">
                <div class="fpl-box">
                    <img src="{{ asset('images/newsbasket.png') }}" alt="" width="300" height="150">
                </div>
                <div class="fpl-box">
                    <p class="fpl-date">March 23, 2024</p>
                    <h2 class="fpl-title">Women's 3x3 Basketball</h2>
                    <p class="fpl-des">History makers! Our Women's 3x3 Basketball team secures their place in the record books with a phenomenal third consecutive gold at the Provincial Meet. Congratulations! 🏆
                    </p>
                    <a href="" class="read-bt-fourth">Read More!</a>
                </div>
            </div>
            <div class="f-part-list">
                <div class="fpl-box">
                    <img src="{{ asset('images/newsbkd.jpg') }}" alt="" width="300" height="150">
                </div>
                <div class="fpl-box">
                    <p class="fpl-date">March 15, 2024</p>
                    <h2 class="fpl-title">BKD Family</h2>
                    <p class="fpl-des">Gratitude to our BKD , YES-O , SSLG , MAPEH CLUB , AND OTHER STUDENTS for  their dedication in leading the clean-up drive, preparing for the mural painting contest.</p>
                    <a href="" class="read-bt-fourth">Read More!</a>
                </div>
            </div>
            <div class="fourth-ex">
                <a href="#" class="fourth-ex-bt">EXPLORE NOW!</a>
            </div>
        </div>
    </div>
</div>

<!-- fifth part -->
<!-- <div class="e-part">
    <div class="spart-h2">
        <h1>SCHOOL HUB | LATEST TALK</h1>
    </div>
    <div class="e-part-box">
        <div class="e-part-con ep-con-one">
            <div class="ep-item">
                <img src="{{ asset('images/mamroma.jpg') }}" alt="" width="100">
            </div>
            <div class="ep-item">
                <div class="ep-box">
                    <div class="ep-list epl-one">
                        <h1>Jeliane May Pascua</h1>
                        <h3>12 - Pascal (TVL)</h3>
                    </div>
                    <div class="ep-list epl-two">
                        <p class="ep-date">March 28, 2024</p>
                        <p class="ep-time">12 mins ago</p>
                    </div>
                </div>
                <h2 class="ep-box-title">Work Immersion</h2>
                <p class="ep-box-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit nobis itaque aspernature.</p>
                <div class="comment-section">
                    <p class="com-head">Write a comment.</p>

                    <div class="comment-sec-con">
                        <form action="POST" method="">
                            <input type="text" name="comment" id="hp-review" placeholder="Write your comment here." minlength="3" required>
                            <button type="submit">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="e-part-con ep-con-two">
            <div class="ep-item">
                <img src="{{ asset('images/vivian.jpg') }}" alt="" width="100">
            </div>
            <div class="ep-item">
                <div class="ep-box">
                    <div class="ep-list epl-one">
                        <h1>Jeliane May Pascua</h1>
                        <h3>12 - Pascal (TVL)</h3>
                    </div>
                    <div class="ep-list epl-two">
                        <p class="ep-date">March 28, 2024</p>
                        <p class="ep-time">12 mins ago</p>
                    </div>
                </div>
                <h2 class="ep-box-title">Work Immersion</h2>
                <p class="ep-box-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit nobis itaque aspernature. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid eligendi quos eum officia illo. Reiciendis, officia numquam!</p>
                <div class="comment-section">
                    <p class="com-head">Write a comment.</p>
                    <div class="comment-sec-con">
                        <form action="POST" method="">
                            <input type="text" name="comment" id="hp-review" placeholder="Write your comment here." minlength="3" required>
                            <button type="submit">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- sixth part -->
<div class="g-part">
    <div class="spart-h2">
        <h1>VISION, MISSION & CORE VALUES</h1>
    </div>
    <div class="g-part-con">
        <div class="g-part-box img">
            <img src="{{ asset('images/bg.jpg') }}" alt="" width="600" height="500">
        </div>
        <div class="g-part-box">
            <div class="gp-item">
                <div class="gp-list gpl-c">
                    <h2 class="gpl-head">Core-Values</h2>
                    <p class="gpl-content">Maka-Diyos</p>
                    <p class="gpl-content">Maka-Tao</p>
                    <p class="gpl-content">Makakalikasan</p>
                    <p class="gpl-content">Makabansa</p>
                </div>
                <div class="gp-list gpl-v">
                    <h2 class="gpl-head">Vision</h2>
                    <p class="gpl-content">We dream of Filipinos who passionately love their country and whose values and competencies enable them to realize their full potential and contribute meaningfully to building the nation. As a learner-centered public institution, the Department of Education continuously improves itself to better serve its stakeholders.</p>
                </div>
            </div>
            <div class="gp-item gp-list gpl-m">
                <h2 class="gpl-head">Mission</h2>
                <p class="gpl-content">To protect and promote the right of every Filipino to quality, equitable, culture-based, and complete basic education where: Students learn in a child-friendly, gender-sensitive, safe, and motivating environment. Teachers facilitate learning and constantly nurture every learner. Administrators and staff, as stewards of the institution, ensure an enabling and supportive environment for effective learning to happen. Family, community, and other stakeholders are actively engaged and share responsibility for developing life-long learners.</p>
            </div>
        </div>
    </div>
</div>

<!-- seventh part -->
<div class="h-part">
    <div class="spart-h2">
        <h1>SCHOOL REVIEWS</h1>
    </div>
    <div class="h-part-con">
        <div class="h-part-box">
            <h2 class="hp-revname">Jane Doe, 24</h2>
            <p class="hp-revrole">Former Student</p>
            <h5 class="hp-revcomment">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti autem, facere, dignissimos excepturi officia maxime ut tempora exercitationem.</h5>
            <div class="hprev-stars"></div>
        </div>
        <div class="h-part-box">
            <h2 class="hp-revname">Justine Doe, 26</h2>
            <p class="hp-revrole">JHS Teacher</p>
            <h5 class="hp-revcomment">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti autem, facere, dignissimos excepturi officia maxime ut tempora exercitationem facilis velit provident tempore sapiente animi corporis, aut laboriosam vero quasi ex?</h5>
            <div class="hprev-stars"></div>
        </div>
        <div class="h-part-box">
            <h2 class="hp-revname">Mary Grace Basilio, 18</h2>
            <p class="hp-revrole">Student</p>
            <h5 class="hp-revcomment">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti autem, facere, dignissimos excepturi officia maxime ut tempora exercitationem facilis velit provident tempore sapiente animi corporis?</h5>
            <div class="hprev-stars"></div>
        </div>
    </div>
    <div class="hp-writearev">
        <p class="hp-wc">Leave a Review!</p>
        <div class="comment-section hp-revsec">
            <div class="comment-sec-con">
                <form action="POST" method="">
                    <input type="text" name="review" id="hp-review" placeholder="Write your review here." minlength="3" required>
                    <button type="submit">Send</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection