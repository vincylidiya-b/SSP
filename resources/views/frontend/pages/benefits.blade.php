@extends('frontend.layouts.subpage')
@section('title', 'Benefits')
@section('description', 'Explore the benefits of SmartSchool Plus for students, parents, staff, and management. Comprehensive school management features.')
@section('keywords', 'SmartSchool benefits, school software features, student portal benefits, parent communication app, teacher management tools')
@section('content')

    <!-- breadcrumb-area -->
    <section class="breadcrumb__area breadcrumb__bg" data-background="{{ asset('assets/img/bg/breadcrumb_bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <h1 class="title">Benefits</h1>
                        <nav class="breadcrumb">
                            <span property="itemListElement" typeof="ListItem">
                                <a href="{{ url('/') }}">Home</a>
                            </span>
                            <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                            <span property="itemListElement" typeof="ListItem">Benefits</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb__shape-wrap">
            <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" class="alltuchtopdown">
            <img src="{{ asset('assets/img/others/breadcrumb_shape02.svg') }}" alt="img" data-aos="fade-right"
                data-aos-delay="300">
            <img src="{{ asset('assets/img/others/breadcrumb_shape03.svg') }}" alt="img" data-aos="fade-up"
                data-aos-delay="400">
            <img src="{{ asset('assets/img/others/breadcrumb_shape04.svg') }}" alt="img" data-aos="fade-down-left"
                data-aos-delay="400">
            <img src="{{ asset('assets/img/others/breadcrumb_shape05.svg') }}" alt="img" data-aos="fade-left"
                data-aos-delay="400">
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <section class="event__area-four">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="event__item-wrap-three">
                        <div class="about__content-three">
                            <div class="section__title mb-10">
                                <span class="sub-title">FOR THE STUDENTS</span>
                            </div>
                            <ul class="about__info-list list-wrap">
                                <li class="about__info-list-item">
                                     <i class="fas fa-hand-pointer"></i>
                                    <p class="content">Access to Assignment/ Homework Details</p>
                                </li>
                                <li class="about__info-list-item">
                                   <i class="fas fa-hand-pointer"></i>
                                    <p class="content">View Attendance Details</p>
                                </li>
                                <li class="about__info-list-item">
                                   <i class="fas fa-hand-pointer"></i>
                                    <p class="content">View Fee Details</p>
                                </li>
                                <li class="about__info-list-item">
                                 <i class="fas fa-hand-pointer"></i>
                                    <p class="content">Access to Class Timetable</p>
                                </li>
                                <li class="about__info-list-item">
                                   <i class="fas fa-hand-pointer"></i>
                                    <p class="content">Stay up-to-date in class and improve their academic performance.</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="fas fa-hand-pointer"></i>
                                    <p class="content">Improve their grades by informing, reminding and reflecting student
                                        activity pertaining to assignments, attendance, ranking, and attitude on a regular
                                        basis.</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="fas fa-hand-pointer"></i>
                                    <p class="content">Gain access to syllabus info, timetables, and lesson plans at any
                                        time.</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="fas fa-hand-pointer"></i>
                                    <p class="content">View the day-to-day syllabus coverage online.</p>
                                </li>
                                <li class="about__info-list-item">
                                   <i class="fas fa-hand-pointer"></i>
                                    <p class="content">Stay fully informed about their educational progress.</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="fas fa-hand-pointer"></i>
                                    <p class="content">View School Calendar Online.</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="fas fa-hand-pointer"></i>
                                    <p class="content">View the Examination Syllabus and Schedules.</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="fas fa-hand-pointer"></i>
                                    <p class="content">Plan and execute their classroom, and examination agenda to the
                                        minute.</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="fas fa-hand-pointer"></i>
                                    <p class="content">Communicate with their classmates and teachers even after working
                                        hours.</p>
                                </li>
                                <li class="about__info-list-item">
                                 <i class="fas fa-hand-pointer"></i>
                                    <p class="content">Submit tutorial papers, homework; even leave applications from
                                        SMARTSCHOOLPLUS Portal, besides interacting with their teachers.</p>
                                </li>
                                <li class="about__info-list-item">
                                   <i class="fas fa-hand-pointer"></i>
                                    <p class="content">Ascertain the timetables, assignment schedules, exam schedule
                                        information, etc., irrespective of the place they are.</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="fas fa-hand-pointer"></i>
                                    <p class="content">Attend online tests.</p>
                                </li>
                            </ul>
                        </div>
                        <div class="about__content-three">
                            <div class="section__title mb-10">
                                <span class="sub-title">FOR THE PARENTS</span>
                            </div>
                            <ul class="about__info-list list-wrap">
                                <li class="about__info-list-item">
                                    <i class="fas fa-hand-pointer"></i>
                                    <p class="content">Quite access to Student Profile</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="fas fa-hand-pointer"></i>
                                    <p class="content">Gain instant access to the marks, ranks, and grades of their
                                        children.</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="fas fa-hand-pointer"></i>
                                    <p class="content">Access to Assignment/ Homework details of their children</p>
                                </li>
                                <li class="about__info-list-item">
                                   <i class="fas fa-hand-pointer"></i>
                                    <p class="content">View ongoing class details of the student.</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="fas fa-hand-pointer"></i>
                                    <p class="content">View Examination details and the progress of their children</p>
                                </li>
                                <li class="about__info-list-item">
                                   <i class="fas fa-hand-pointer"></i>
                                    <p class="content">View Fee Details</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="fas fa-hand-pointer"></i>
                                    <p class="content">View attendance details of their children</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="fas fa-hand-pointer"></i>
                                    <p class="content">Stay actively involved in their child's education!</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="fas fa-hand-pointer"></i>
                                    <p class="content">Communicate quickly and easily with their child's teachers and the
                                        Principal.</p>
                                </li>
                                <li class="about__info-list-item">
                                   <i class="fas fa-hand-pointer"></i>
                                    <p class="content">Easily participate in their child's learning process.</p>
                                </li>
                                <li class="about__info-list-item">
                                   <i class="fas fa-hand-pointer"></i>
                                    <p class="content">Be more aware of their child's day-to-day activities, attendance
                                        patterns, behavior, etc., at school.</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="fas fa-hand-pointer"></i>
                                    <p class="content">Have more frequent and more meaningful communication with teachers.
                                    </p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="fas fa-hand-pointer"></i>
                                    <p class="content">Gain instant access through SMS on the marks, ranks, and grades of
                                        their children (Progress Reports) and overall performance.</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="fas fa-hand-pointer"></i>
                                    <p class="content">Stay actively involved in your child’s education.</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="fas fa-hand-pointer"></i>
                                    <p class="content">Communicate quickly and easily with your children and teachers.</p>
                                </li>
                            </ul>
                        </div>

                        <div class="about__content-three">
                            <div class="section__title mb-10">
                                <span class="sub-title">FOR THE STAFF</span>
                            </div>
                            <ul class="about__info-list list-wrap">
                                <li class="about__info-list-item">
                                    <i class="fas fa-hand-pointer"></i>
                                    <p class="content">View Homework/ Assignment details with the provision to give
                                        assignment/ homework</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="fas fa-hand-pointer"></i>
                                    <p class="content">Access to Timetable</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="fas fa-hand-pointer"></i>
                                    <p class="content">View Attendance details</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="fas fa-hand-pointer"></i>
                                    <p class="content">Daily classroom schedules and timetables.</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="fas fa-hand-pointer"></i>
                                    <p class="content">Attendance records.</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="fas fa-hand-pointer"></i>
                                    <p class="content">Examination Schedules.</p>
                                </li>
                                <li class="about__info-list-item">
                                   <i class="fas fa-hand-pointer"></i>
                                    <p class="content">Assignments and Home works.</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="fas fa-hand-pointer"></i>
                                    <p class="content">Provision to view Lesson Plans.</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="fas fa-hand-pointer"></i>
                                    <p class="content">Student profiles and much more</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="fas fa-hand-pointer"></i>
                                    <p class="content">Keep up-to-date with attendance, grade reporting, and syllabus.</p>
                                </li>
                                <li class="about__info-list-item">
                                  <i class="fas fa-hand-pointer"></i>
                                    <p class="content">Save the time being spent in organizing and completing paperwork.
                                    </p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="fas fa-hand-pointer"></i>
                                    <p class="content">Communicate easily and regularly with Students and Parents and
                                        School management.</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="fas fa-hand-pointer"></i>
                                    <p class="content">Spare extra time for instructions, research, and knowledge updating.
                                    </p>
                                </li>
                            </ul>
                        </div>

                        <div class="about__content-three">
                            <div class="section__title mb-10">
                                <span class="sub-title">FOR THE PRINCIPAL / MANAGEMENT</span>
                            </div>
                            <ul class="about__info-list list-wrap">
                                <li class="about__info-list-item">
                                    <i class="fas fa-hand-pointer"></i>
                                    <p class="content">Complete overview of Management of various schools under the same
                                        roof</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="fas fa-hand-pointer"></i>
                                    <p class="content">View Students and Staff details</p>
                                </li>
                                <li class="about__info-list-item">
                                   <i class="fas fa-hand-pointer"></i>
                                    <p class="content">View General/Class/Staff/Subject timetable</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="fas fa-hand-pointer"></i>
                                    <p class="content">Manage the details of fees collected</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="fas fa-hand-pointer"></i>
                                    <p class="content">Statistics of examination results</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="fas fa-hand-pointer"></i>
                                    <p class="content">Attendance details</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="fas fa-hand-pointer"></i>
                                    <p class="content">Automated reminder generation</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="fas fa-hand-pointer"></i>
                                    <p class="content">Opinion Poll and Feedback forum</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="fas fa-hand-pointer"></i>
                                    <p class="content">Assignments submission details</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="fas fa-hand-pointer"></i>
                                    <p class="content">Examinations schedule and results</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="fas fa-hand-pointer"></i>
                                    <p class="content">Define Marks and Ranks</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="fas fa-hand-pointer"></i>
                                    <p class="content">Subject wise comparative analysis</p>
                                </li>
                                <li class="about__info-list-item">
                                   <i class="fas fa-hand-pointer"></i>
                                    <p class="content">Syllabus and status of completion</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="fas fa-hand-pointer"></i>
                                    <p class="content">Manage Timetables</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="fas fa-hand-pointer"></i>
                                    <p class="content">Leave Records and Holiday lists</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="fas fa-hand-pointer"></i>
                                    <p class="content">Send SMS Alerts</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="event__shape-two">
            <img src="{{ asset('assets/img/events/h4_event_shape.svg') }}" alt="" class="rotateme">
        </div>
    </section>

@endsection
