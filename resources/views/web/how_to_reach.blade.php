@include('web.layouts.header')

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    How to Reach
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a
                        href="#"> Contact Us</a> <span class="lnr lnr-arrow-right"></span> <a
                        class="orange-text">How to Reach</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2><span>How to </span>Reach</h2>
                </div>
                <div class="mb-20">
                    <div class="detials">
                        <div class="row">
                            <div class="col-md-8">
                                <h5>From Patna Junction</h5>
                                <p class="text-justify">3.9. KM from Patna Junction<br>
                                 <a href="https://maps.app.goo.gl/SqgFen59A6MeTpYs8">Google Map Link: </a>

                                </p>
                            </div>
                               <div class="col-md-8">
                                <h5>From ISBT Patliputra Bus Stand, Patna</h5>
                                <p class="text-justify">7.8 Km from ISBT Patliputra Bus Stand, Bairrya, Patna<br>
                                 <a href="https://maps.app.goo.gl/Uam9feEsWHRdJNTk8">Google Map Link: </a>
                                </p>
                            </div>
                            <div class="col-md-4" style="margin-top:-80px">
                                <div class="whiteBox" style="float: none;">
                                    <img src="{{ asset('web/images/address2.jpg') }}" alt="address2"
                                        class="img-responsive" style="width:450px;height:250px">
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            @include('web.layouts.quick-link-contact')
        </div>
    </div>
</section>



@include('web.layouts.footer')


<script type="text/javascript">
    $(document).ready(function() {
        document.title = "How to Reach - MMHAPU (Bihar)";
    });
</script>
