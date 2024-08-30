@include('web.layouts.header')

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    University Authority
                </h1>
                <p class="text-white link-nav"><a href="">Home </a> <span class="lnr lnr-arrow-right"></span> <a
                        href=""> Administration</a> <span class="lnr lnr-arrow-right"></span> <a
                        class="orange-text">University Authorities</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2><span>University</span> Authorities</h2>
                </div>
                <div class="desc-wrap marquee_text">
                    <dl class="accordion full-width">
                        @foreach ($titles as $data)
                            <dt>
                                <a href=""> {{ $data->title }} </a>
                            </dt>
                            <dd>
                                <div class="executive-table">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" width="30%">Position</th>
                                                    <th class="text-center" width="30%">Name</th>
                                                    <th class="text-center" width="40%">Designation</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><b>Chairman</b></td>
                                                    <td>Prof. Sanjay Srivastava</td>
                                                    <td>Vice-Chancellor, Mahatma Gandhi Central University, Motihari,
                                                        Bihar
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><b>Member</b><br>(One person to be nominated by the Court)</td>
                                                    <td>Vacant</td>
                                                    <td>Court of the University yet to be reconstituted</td>

                                                </tr>
                                                <tr>
                                                    <td rowspan="3" style="vertical-align: middle;">
                                                        <b>Member</b><br>(Three persons to be nominated by the Visitor)
                                                    </td>
                                                    <td>Joint Secretary </td>
                                                    <td>(Central University & L) (or his/her nominee) MHRD, Government
                                                        of
                                                        India, New Delhi</td>
                                                </tr>
                                                <tr>
                                                    <td>Joint Secretary & Financial Advisor (or his/her nominee)</td>
                                                    <td>MHRD, Government of India, New Delhi</td>
                                                </tr>
                                                <tr>
                                                    <td>Joint Secretary (Central University) (or his/her nominee) </td>
                                                    <td>University Grants Commission, New Delhi</td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="3" style="vertical-align: middle;">
                                                        <b>Member</b><br>(Three persons to be nominated by the Executive
                                                        Council, out of whom at least one shall be a member of the
                                                        Executive
                                                        Council)
                                                    </td>
                                                    <td>Prof. Prasoon Dutta Singh</td>
                                                    <td>Member of the Executive Council</td>
                                                </tr>
                                                <tr>
                                                    <td>Shri Parag Prakash</td>
                                                    <td>Deputy CAG (Retd.), CAG, New Delhi</td>
                                                </tr>
                                                <tr>
                                                    <td>Shri R.D. Sahay</td>
                                                    <td>Joint Secretary (Retd.), Ministry of Education, New Delhi</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </dd>
                        @endforeach
                    </dl>
                </div>
            </div>

            @include('web.layouts.quick-link-about')

        </div>
    </div>
</section>

@include('web.layouts.footer')


{{-- <script type="text/javascript">
    $(document).ready(function() {
        document.title = "University Authority - Mahatma Gandhi Central University, Motihari (Bihar)";
    });
</script> --}}
