@include('web.layouts.header')

<style>
    .accordion-item{
        border-bottom: 1px solid #dee2e6 !important;
    }
</style>

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Evaluation Report of the Departments
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a
                        href=""> IQAC</a> <span class="lnr lnr-arrow-right"></span> <a
                        class="orange-text">Evaluation Report of the Departments</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2><span>Evaluation Report of the </span>Departments</h2>
                </div>
                <div class="desc-wrap marquee_text">
                    <div class="row">
                        <div class="container">
                            <div class="row">
                                @php
                                    // Group evaluations by title
                                    $groupedEvaluations = $evaluations->groupBy('title.title');
                                @endphp

                                @foreach($groupedEvaluations as $title => $group)
                                <div class="col-md-6 col-md-offset-6 col-sm-6 col-sm-offset-6">
                                    <div class="accordion accordion-flush" id="accordionFlushExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapse{{ $loop->index }}"
                                                    aria-expanded="false" aria-controls="flush-collapse{{ $loop->index }}">
                                                    {{ $title }}
                                                </button>
                                            </h2>
                                            <div id="flush-collapse{{ $loop->index }}" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    <ul>
                                                        @foreach($group as $item)
                                                        <li><i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                                            <a target="blank" href="{{ asset('uploads/evaluation/'. $item->file) }}">
                                                                {{ $item->name }}
                                                            </a>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                {{-- <div class="col-md-6 col-md-offset-6 col-sm-6 col-sm-offset-6">
                                    <div class="accordion accordion-flush" id="accordionFlushExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapse16"
                                                    aria-expanded="false" aria-controls="flush-collapse16">
                                                    Department of Economics </button>
                                            </h2>
                                            <div id="flush-collapse16" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    <ul>
                                                        <li><i class="fa fa-arrow-circle-right orange-text"
                                                                aria-hidden="true"></i>
                                                            <a href="pdf/20211101064607346ffb4d2f.pdf">
                                                                M. A Syllabus (Economics) </a>
                                                        </li>
                                                        <li><i class="fa fa-arrow-circle-right orange-text"
                                                                aria-hidden="true"></i>
                                                            <a href="pdf/2021110106470986c82bb12a.pdf">
                                                                Ph.D Syllabus (Economics) </a>
                                                        </li>
                                                        <li><i class="fa fa-arrow-circle-right orange-text"
                                                                aria-hidden="true"></i>
                                                            <a href="pdf/20230228195449a54a20c8b0.pdf">
                                                                M. A. (Economics) Programme Structure </a>
                                                        </li>
                                                        <li><i class="fa fa-arrow-circle-right orange-text"
                                                                aria-hidden="true"></i>
                                                            <a href="pdf/20230228195551e8dbcbedc2.pdf">
                                                                M. A. (Economics) Detailed Course Content </a>
                                                        </li>
                                                        <li><i class="fa fa-arrow-circle-right orange-text"
                                                                aria-hidden="true"></i>
                                                            <a href="pdf/20230228195812d751cde5c1.pdf">
                                                                Ph. D. (Economics) Programme Structure </a>
                                                        </li>
                                                        <li><i class="fa fa-arrow-circle-right orange-text"
                                                                aria-hidden="true"></i>
                                                            <a href="pdf/2023022820001645650e9308.pdf">
                                                                Ph. D. (Economics) Detailed Course Content
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapse17"
                                                    aria-expanded="false" aria-controls="flush-collapse17">
                                                    Department of Gandhian and Peace Studies </button>
                                            </h2>
                                            <div id="flush-collapse17" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    <ul>
                                                        <li><i class="fa fa-arrow-circle-right orange-text"
                                                                aria-hidden="true"></i>
                                                            <a href="pdf/2021100623350396ac44fc73.pdf">
                                                                M.A (Ghandhian and Peace Studies) </a>
                                                        </li>
                                                        <li><i class="fa fa-arrow-circle-right orange-text"
                                                                aria-hidden="true"></i>
                                                            <a href="pdf/20211006233602c2d02916a1.pdf">
                                                                Ph.D (Ghandhian and Peace Studies) </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapse18"
                                                    aria-expanded="false" aria-controls="flush-collapse18">
                                                    Department of Political Science </button>
                                            </h2>
                                            <div id="flush-collapse18" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    <ul>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapse19"
                                                    aria-expanded="false" aria-controls="flush-collapse19">
                                                    Department of Social Work </button>
                                            </h2>
                                            <div id="flush-collapse19" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    <ul>
                                                        <li><i class="fa fa-arrow-circle-right orange-text"
                                                                aria-hidden="true"></i>
                                                            <a href="pdf/20190809081709f6a90a89ae.pdf">
                                                                Masters of Social Work - Syllabus_ Semester I </a>
                                                        </li>
                                                        <li><i class="fa fa-arrow-circle-right orange-text"
                                                                aria-hidden="true"></i>
                                                            <a href="pdf/201908090817476a730296d6.pdf">
                                                                Master of Social Work - Syllabus_ Semester III </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapse20"
                                                    aria-expanded="false" aria-controls="flush-collapse20">
                                                    Department of Sociology </button>
                                            </h2>
                                            <div id="flush-collapse20" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    <ul>
                                                        <li><i class="fa fa-arrow-circle-right orange-text"
                                                                aria-hidden="true"></i>
                                                            <a href="pdf/20211022233332d1454527ab.pdf">
                                                                Syllabus of M.A (Sociology) </a>
                                                        </li>
                                                        <li><i class="fa fa-arrow-circle-right orange-text"
                                                                aria-hidden="true"></i>
                                                            <a href="pdf/20211022233434a74e194f9e.pdf">
                                                                Syllabus of Ph.D (Sociology) </a>
                                                        </li>
                                                        <li><i class="fa fa-arrow-circle-right orange-text"
                                                                aria-hidden="true"></i>
                                                            <a href="pdf/202306011847405e63825682.pdf">
                                                                M.A Sociology Program Structure </a>
                                                        </li>
                                                        <li><i class="fa fa-arrow-circle-right orange-text"
                                                                aria-hidden="true"></i>
                                                            <a href="pdf/202306011848314297025769.pdf">
                                                                M.A Sociology Syllabus </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-xs-12">
                <div class="single-feature">
                    <div class="title MGCUB_bg">
                        <h4>Quick Links</h4>
                    </div>
                    <div class="desc-wrap marquee_text">
                        <ul class="custom-list-style">
                            <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="syllabus.php">
                                    Syllabus</a></li>
                            <hr>
                            <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="attendance.php">
                                    Attendance</a></li>
                            <hr>
                            <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a
                                    href="scholarship_schemes.php"> Scholarship Schemes</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('web.layouts.footer')
