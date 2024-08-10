@include('web.layouts.header')

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Collabration
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a
                        href=""> IQAC</a> <span class="lnr lnr-arrow-right"></span> <a
                        class="orange-text">Collabration</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2><span>Collabration </span></h2>
                </div>
                <div class="desc-wrap marquee_text">
                    <div class="executive-table">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">Designation</th>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Contact</th>
                                        <th class="text-center">Resume</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($collabrations as $collabration)
                                        <tr>
                                            <td> {{ $collabration->designation }} </td>
                                            <td> {{ $collabration->name }} </td>
                                            <td><a href="mailto:{{ $collabration->email }}"> {{ $collabration->email }} </a></td>
                                            <td> {{ $collabration->contact }} </td>
                                            <td>
                                                <center><a href=" {{ asset('uploads/collabration/' . $collabration->resume) }} " target="_blank"  class="resume-icon"> <i class="fa fa-file-pdf-o"></i></a></center>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            @include('web.layouts.quick-link-about')
        </div>
</section>

@include('web.layouts.footer')


<script type="text/javascript">
    $(document).ready(function() {
        document.title = "Statutory Administrative Officers";
    });
</script>
