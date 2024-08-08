@include('web.layouts.header')

<style>
    /*    nav > .nav.nav-tabs{
    
            border: none;
            color:#0b416f;
            background:#575656;
            border-radius:0;
        }
        nav > div a.nav-item.nav-link,
        nav > div a.nav-item.nav-link.active
        {
            border: none;
            padding: 18px 25px;
            color:#fff;
            border-radius:0;
        }
        nav > div a.nav-item.nav-link.active:after
        {
            content: "";
            position: relative;
            bottom: -58px;
            left: -25%;
            border: 15px solid transparent;
            border-top-color: #0B416F;
        }
        .tab-content{
            background: #fdfdfd;
            line-height: 25px;
            border: 1px solid #ddd;
            border-top:5px solid #E16734;
            border-bottom:5px solid #E16734;
            padding:30px 40px !important;
        }
    
        nav > div a.nav-item.nav-link:hover,
        nav > div a.nav-item.nav-link:focus
        {
            border: none;
            background: #0B416F;
            color:#fff;
            border-radius:0;
            transition:background 0.20s linear;
        }*/
</style>
<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    University Administrations
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="about.php"> Administration</a> <span class="lnr lnr-arrow-right"></span> <a class="orange-text">University Administrations</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2><span>University</span> Officers</h2>
                </div>
                <dl class="accordion full-width">
                    <dt>
                        <a href="">Administration</a>
                    </dt>
                    <dd>
                        <div class="executive-table">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Designation</th>
                                            <th class="text-center">Name</th>
                                             <th class="text-center">Image</th>
                                            <th class="text-center">Resume</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Vice-Chancellor</td>
                                            <!-- <td>Prof. Rajeev Kumar</td> -->
                                            <td> Dr. Mohammad Alamgeer </td>
                                            <td> <img class="rotate-image" src="web/images/4444.jpg" alt="rotate logo"/></td>
                                            <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                    </tr>
                                    <tr>
                                        <td>Pro-Vice-Chancellor</td>
                                        <!-- <td>Sh. Sachidanand Singh</td> -->
                                        <td></td>
                                        <td></td>
                                        <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                    </tr>
                                    <tr>
                                        <td>Financial Advisor</td>
                                        <td>Shri Sunil Kumar Sinha</td>
                                        <td> <img class="rotate-image" src="web/images/fa.jpg" alt="rotate logo"/></td>
                                        <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                    </tr>
                                     <tr>
                                        <td>Registrar</td>
                                        <td>Col. Kamesh Kumar</td>
                                        <td> <img class="rotate-image" src="web/images/08.jpeg" alt="rotate logo"/></td>
                                        <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                    </tr>
                                      <tr>
                                        <td>Inspector of Colleges</td>
                                        <td>Prof. (Dr.) Md. Faizanuddin</td>
                                        <td> <img class="rotate-image" src="web/images/Staff_Photo/3_PROF_MD_FAIZANUDDIN.jpeg" alt="rotate logo"/></td>
                                        <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                    </tr>
                                     <tr>
                                        <td>Finance Officer</td>
                                        <td>Keshri Vijay Mishra</td>
                                        <td> <img class="rotate-image" src="web/images/fo.jpg" alt="rotate logo"/></td>
                                        <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                    </tr>
                                     <tr>
                                        <td>Controller of Examinations</td>
                                        <td>Dr. Saad Bin Hamid</td>
                                        <td> <img class="rotate-image" src="web/images/Staff_Photo/3_DR_SAAD_BIN_HAMID.jpeg" alt="rotate logo"/></td>
                                        <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </dd>
                    <dt>
                        <a href="">Finance</a>
                    </dt>
                    <dd>
                        <div class="executive-table">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Designation</th>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Resume</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Financial Advisor</td>
                                            <td>Shri Sunil Kumar Sinha  </td>
                                            <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                    </tr>
                                    <tr>
                                        <td>Finance Officer</td>
                                        <td>Keshri Vijay Mishra</td>
                                        <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                    </tr>
                                    <tr>
                                        <td>S.O. (Accounts)</td>
                                        <td>Niyaz Ahmad</td>
                                        <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                    </tr>
                                    <tr>
                                        <td>Auditor</td>
                                        <td>Danish Abbas</td>
                                        <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                    </tr>
                                    <tr>
                                        <td>Auditor</td>
                                        <td>Md. Nasim Akhtar</td>
                                        <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </dd>
                    <dt>
                        <a href="">Controller of Examinations</a>
                    </dt>
                    <dd>
                        <div class="executive-table">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Designation</th>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Resume</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Controller of Examinations</td>
                                            <td>Dr. Saad Bin Hamid</td>
                                            <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                    </tr>  
                                    <tr>
                                        <td>S.O. (Exam)</td>
                                        <td>Dr. Syed Nazre Ali</td>
                                        <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                    </tr>
<!--                                    <tr>
                                        <td>Associate Controller of Examination</td>
                                        <td>Dr. Neelabh Srivastava</td>
                                        <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                    </tr>-->
                                    <tr>
                                        <td>S.O. (Exam)</td>
                                        <td>Sultan Shahid Shah</td>
                                        <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </dd>
                    <dt>
                        <a href="">Academic</a>
                    </dt>
                   <!--  <dd>
                        <div class="executive-table">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Designation</th>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Resume</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>OSD (Administration)</td>
                                            <td>Prof. Rajeev Kumar</td> -->

                                            <!-- <td>Sh. Sachchidanand Singh</td>
                                            <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                    </tr>
                                    <tr>
                                        <td>Deputy Registrar</td>
                                     
                                        <td>Sh. Sachchidanand Singh</td>
                                        <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                    </tr>
                                    <tr>
                                        <td>Section Officer</td>
                                        <td>Sh. Ajeet Kumar</td>
                                        <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </dd>  -->
                    <dt>
                        <a href="">Deans</a>
                    </dt>
                    <!-- <dd>
                        <div class="executive-table">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">School</th>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Date of appointment as Dean</th>
                                            <th class="text-center">Resume</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>Life Science </td>
                                            <td>Prof. Arttatrana Pal</td>
                                            <td>25-08-2020</td>
                                            <td><center><a href="school_of_life_sciences_dean.php" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                    </tr>
                                    <tr>
                                        <td>Pt. M.M.V. School of Commerce and Management Sciences</td>
                                        <td>Prof. Shirish Mishra</td>
                                        <td></td>
                                        <td><center><a href="school_of_commerce_management_sciences_dean.php" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                    </tr> 
                                     -->

                                        <!-- <tr>
                                            <td>Pandit Madan Mohan Malaviya School of Commerce & Management Sciences</td>
                                            <td>Prof. Pavnesh Kumar</td>
                                            <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                        </tr>
                                        <tr>
                                            <td>School of Computational Sciences, Information And Communication Technology</td>
                                            <td>Prof. Vikas Pareek</td>
                                            <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                        </tr> 
                                        <tr>
                                            <td>School of Education</td>
                                            <td>Prof. Asheesh Srivastava</td>
                                            <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                        </tr>
                                        <tr>
                                            <td>School of Humanities & Languages</td>
                                            <td>Prof. Prasoon Dutta Singh</td>
                                            <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                        </tr>
                                        <tr>
                                            <td>School of Life Sciences</td>
                                            <td>Prof. Arttatrana Pal</td>
                                            <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                        </tr>
                                        <tr>
                                            <td>School of Physical Sciences</td>
                                            <td>Prof. Ajai Kumar Gupta</td>
                                            <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                        </tr>
                                        <tr>
                                            <td>School of Social Sciences</td>
                                            <td>Prof. Rajeev Kumar</td>
                                            <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                        </tr>  -->
                                   <!--  </tbody>
                                </table>
                            </div>
                        </div>
                    </dd> -->
                    <dt>
                        <a href="">Dean Students Welfare</a>
                    </dt>
                    <!-- <dd>
                        <div class="executive-table">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Designation</th>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Resume</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Dean Student Welfare</td>
                                            <td>Prof. Arttatrana Pal</td>
                                            <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                    </tr>
                                    <tr>
                                        <td>Associate Dean Student Welfare</td>
                                        <td>Dr. Satarudra Prakash Singh</td>
                                        <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                    </tr> 
                                  
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </dd> -->
                    <dt>
                        <a href="">Proctorial Board</a>
                    </dt>
                   <!--  <dd>
                        <div class="executive-table">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Designation</th>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Resume</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Chief Proctor</td>
                                            <td>Prof. Prasoon Dutta Singh</td>
                                            <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                    </tr>
                                    <tr>
                                        <td>Deputy Proctor </td>
                                        <td>Dr Bimlesh Kumar Singh</td>
                                        <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                    </tr>
                                    <tr>
                                        <td>Deputy Proctor</td>
                                        <td>Dr Anjani Kumar Shrivastava</td>
                                        <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                    </tr>
                                    <tr>
                                        <td>Assistant Proctor</td>
                                        <td>Dr Sweta</td>
                                        <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                    </tr>
                                    <tr>
                                        <td>Assistant Proctor</td>
                                        <td>Dr Shivendra</td>
                                        <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                    </tr>                                    
                                    <tr>
                                        <td>Assistant Proctor</td>
                                        <td>Dr Prerana Bhaduli</td>
                                        <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                    </tr>
                                    <tr>
                                        <td>Assistant Proctor</td>
                                        <td>Dr Neelabh Shrivastava</td>
                                        <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                    </tr>
                                    <tr>
                                        <td>Assistant Proctor</td>
                                        <td>Dr Shyam Babu Prasad</td>
                                        <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                    </tr>
                                    <tr>
                                        <td>Assistant Proctor</td>
                                        <td>Dr Sunil Deepak Ghodke</td>
                                        <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </dd> -->
                    <dt>
                        <a href="">Campus Directors</a>
                    </dt>
                    <!-- <dd>
                        <div class="executive-table">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Campus</th>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Resume</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Chanakya Parisar</td>
                                            <td>Prof. Attatrana Pal</td>
                                            <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                    </tr>
                                    <tr>
                                        <td>Deen Dayal Upadhyay Parisar</td>
                                        <td>Prof. Pavnesh Kumar</td>
                                        <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                    </tr>
                                    <tr>
                                        <td>Gandhi Bhawan</td>
                                        <td>Prof. Prasoon Dutta Singh</td>
                                        <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                    </tr>
                                    <tr>
                                        <td> Mahatma Budhha Parisar </td>
                                        <td> Prof. Asheesh Srivastava </td>
                                        <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </dd> -->
                    <dt>
                        <a href="">Provost/ Wardens</a>
                    </dt>
                   <!--  <dd>
                        <div class="executive-table">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Campus</th>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Resume</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Provost</td>
                                            <td>Prof. Rafique-Ul-Islam</td>
                                            <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                    </tr>
                                    <tr>
                                        <th colspan="3">Kasturba Gandhi Girls Hostel</th>
                                    </tr>
                                    <tr>
                                        <td>Warden</td>
                                        <td>Dr. Preeti Bajpai</td>
                                        <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                    </tr>
                                    <tr>
                                        <td>Assistant Warden</td>
                                        <td>Dr. Uma Yadav</td>
                                        <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </dd> -->
                    <dt>
                        <a href="">Heads</a>
                    </dt>
                    <dd>
                        <div class="executive-table">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Departments</th>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Date of appointment as Head</th>
                                            <th class="text-center">Resume</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <!--<td>25-11-2019 </td>-->
                                        <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                    </tr>
                                    
                                    </tbody>                                    
                                </table>
                            </div>
                        </div>
                    </dd>
                    <dt>
                        <a href="">Centre Coordinators</a>
                    </dt>
                    <!-- <dd>
                        <div class="executive-table">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Centre</th>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Link of Centres</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>प्रवासी अध्ययन केन्द्र</td>
                                            <td>Prof. Rajeev Kumar</td>
                                            <td><center><a href="centre_for_diaspora_studies.php" class="resume-icon"><i class="fa fa-university"></i></a></center></td>
                                    </tr>
                                    <tr>
                                        <td>वैदेही महिला अध्ययन केन्द्र</td>
                                        <td>Dr. Sarita Tiwari</td>
                                        <td><center><a href="vaidehi_mahila_adhyan_kendra.php" class="resume-icon"><i class="fa fa-university"></i></a></center></td>
                                    </tr>
                                    <tr>
                                        <td>गांधी शोध केन्द्र</td>
                                        <td>Dr. Ambikesh Kumar Tripathi</td>
                                        <td><center><a href="centre_for_gandhian_research.php" class="resume-icon"><i class="fa fa-university"></i></a></center></td>
                                    </tr>
                                    <tr>
                                        <td>लोककला एवं संस्कृति निष्पादन केन्द्र</td>
                                        <td>Prof. Rajender Singh</td>
                                        <td><center><a href="centre_of_lok_kala_sanskriti.php" class="resume-icon"><i class="fa fa-university"></i></a></center></td>
                                    </tr>
                                    <tr>
                                        <td>पण्डित दीनदयाल उपाध्याय शोधपीठ</td>
                                        <td>Dr. Narendra Kumar Arya</td>
                                        <td><center><a href="deen_dayal_upadhyaya_shodhpeeth.php" class="resume-icon"><i class="fa fa-university"></i></a></center></td>
                                    </tr>
                                    <tr>
                                        <td>आचार्य भरतमुनि संचार शोध केन्द्र</td>
                                        <td>Dr. Saket Raman</td>
                                        <td><center><a href="centre_of_acharya_bharat_muni_sanchar.php" class="resume-icon"><i class="fa fa-university"></i></a></center></td>
                                    </tr>
                                    <tr>
                                        <td>महर्षि पंतजलि योग एवं आयुर्वेद अध्ययन केन्द्र</td>
                                        <td>Dr. Shyam Kumar Jha</td>
                                        <td><center><a href="maharshi_patanjali_yoga_ayurved_centre.php" class="resume-icon"><i class="fa fa-university"></i></a></center></td>
                                    </tr>
                                    <tr>
                                        <td>Centre for Sustainable Development</td>
                                        <td>Prof. Shahana Majumdar</td>
                                        <td><center><a href="centre_of_sustainable_development.php" class="resume-icon"><i class="fa fa-university"></i></a></center></td>
                                    </tr>
                                    <tr>
                                        <td>Center for Cyber Security </td>
                                        <td>Prof. Vikas Pareek</td>
                                        <td><center><a href="centre_for_cyber_security.php" class="resume-icon"><i class="fa fa-university"></i></a></center></td>
                                    </tr>
                                    <tr>
                                        <td>भारत विद्या केन्द्र </td>
                                        <td>Prof. Prasoon Dutta Singh</td>
                                        <td><center><a href="bharat_vidya_kendra.php" class="resume-icon"><i class="fa fa-university"></i></a></center></td>
                                    </tr>
                                    <tr>
                                        <td>महर्षि पाणिनि ज्ञान वाङगमय शोध पीठ</td>
                                        <td>Dr. Bhaw Nath Pandey</td>
                                        <td><center><a href="#" class="resume-icon"><i class="fa fa-university"></i></a></center></td>
                                    </tr>                                    
                                    <tr>
                                        <td>डॉ. बी. आर. अम्बेडकर शोध केंद् </td>
                                        <td>Dr. Sujit Choudhary</td>
                                        <td><center><a href="#" class="resume-icon"><i class="fa fa-university"></i></a></center></td>
                                    </tr>
                                    <tr>
                                        <td>एम. विश्वेश्वरैया उद्यमिता एवं कौशल विकास केंद्र </td>
                                        <td>Prof. Pavnesh Kumar</td>
                                        <td><center><a href="#" class="resume-icon"><i class="fa fa-university"></i></a></center></td>
                                    </tr>
                                    <tr>
                                        <td>काशी प्रसाद जायसवाल हिंदू अध्ययन केंद्र</td>
                                        <td>Dr. Anjani Kumar Srivastava</td>
                                        <td><center><a href="#" class="resume-icon"><i class="fa fa-university"></i></a></center></td>
                                    </tr>
                                    <tr>
                                        <td>छत्रपति शिवाजी लोक नीति शिक्षा केंद्र</td>
                                        <td>Prof. Asheesh Kumar Srivastava</td>
                                        <td><center><a href="#" class="resume-icon"><i class="fa fa-university"></i></a></center></td>
                                    </tr>
                                    <tr>
                                        <td>महर्षि कणाद अन्तः अनुशासनात्मक शोध केंद्र</td>
                                        <td>Prof. Sunil Kumar Srivastava</td>
                                        <td><center><a href="#" class="resume-icon"><i class="fa fa-university"></i></a></center></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </dd> -->
                    <dt>
                        <a href="">Officers/ In-charge</a>
                    </dt>
                    <dd>
                        <div class="executive-table">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Department</th>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Resume</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <!-- <td>Prof. Anand Prakash</td> -->
                                            <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                    </tr>
                                
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </dd>
                    <dt>
                        <a href="">Cells and Committees</a>
                    </dt>
                    <dd>
                        <div class="executive-table">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Cells/Committees</th>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Link of Committees</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> </td>
                                            <td></td>
                                            <td><center><a href="#" class="resume-icon"></a></center></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td><center><a href="#" class="resume-icon"></a></center></td>
                                    </tr>
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </dd>
                   <!--  <dt>
                        <a href="">Engineering Section</a>
                    </dt> -->
                   <!--  <dd>
                        <div class="executive-table">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Designation</th>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Resume</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Assistant Engineer</td>
                                            <td>Er. Kaushlesh Kumar Singh</td>
                                            <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                    </tr>
                                    <tr>
                                        <td>Junior Engineer (Civil)</td>
                                        <td>Er. Koustubh Shankar Pandey</td>
                                        <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                    </tr>
                                    <tr>
                                        <td>Junior Engineer (Electrical)</td>
                                        <td>Er.Utpal Kumar Maurya</td>
                                        <td><center><a href="#" class="resume-icon"><i class="fa fa-file-pdf-o"></i></a></center></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </dd> -->
                </dl>
            </div>
            <div class="col-sm-3 col-md-3 col-xs-12">
    <div class="single-feature">
        <div class="title MGCUB_bg">
            <h4>Quick Links</h4>
        </div>
        <div class="desc-wrap marquee_text">
            <ul class="custom-list-style">
                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="visitor.php"> The Visitor</a></li>
                <hr>
                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="chancellor_1.php"> The Chancellor</a></li>
                <hr>
                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="vc.php"> Vice Chancellor</a></li>
                <hr>
                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="university_authority.php"> University Authorities</a></li>
                <hr>
                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="statutory_bodies.php"> Statuary Administrative Officers</a></li>
                <hr>
                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="university_officers.php"> University Administrations</a></li>
                <!--                <hr>
                                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="iqac.php"> IQAC</a></li>
                                <hr>
                                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="committees.php"> Committees</a></li>
                                <hr>
                                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="pdf/Academic Calendar 2018-19.pdf" > Academic calendar</a></li>-->                
                <hr>
                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="directory.php"> Directory</a></li>
                <!--                <hr>
                                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="minutes_of_statutory_bodies.php"> Minutes of Statutory Bodies</a></li>-->
            </ul>
        </div>
    </div>
</div>        </div>
    </div>
</section>
@include('web.layouts.footer')


<script type="text/javascript">
    $(document).ready(function() {
        document.title = "Directory-MMHAPU";
    });
</script>
