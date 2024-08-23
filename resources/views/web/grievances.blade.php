<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('web/images/favicon.ico') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('web/css/grievance.css') }}">
    <title>Welcome to the Official Website of Maulana Mazharul Haque Arabic and
        Persian University, Patna ::Student Grievance Redressal </title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/sgr/index.php/site/index">
            <img src="{{ asset('uploads/logo/logo1.png') }}" alt="University of Delhi" style="height: 70px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href=" {{ route('grievances') }} ">Student Grievance Redressal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">MMHAPU Website</a>
                </li>
            </ul>
        </div>
    </nav>
    <br />
    <div class="jiform-create">

        <form>
            <div class="row">
                <div class="container">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <center>
                                    <p style="font-size:25px;color:white">Student Grievance Form</p>
                                </center>
                            </div>
                        </div>
                        <div class="panel-body"> <br />
                            <div class="row">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Personal Details</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body"> <br />
                                        <div class="row">
                                            <div class="col-md-4 mb-2">
                                                <div class="form-group field-jiform-fullname required">
                                                    <label class="control-label">Full Name</label>
                                                    <input type="text" class="form-control" name="name"
                                                        placeholder="Enter Full Name">
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <div class="form-group field-jiform-email required">
                                                    <label class="control-label">E-mail ID</label>
                                                    <input type="email" class="form-control" name="email"
                                                        placeholder="Enter E-mail ID">
                                                </div>
                                            </div>
                                            <div class="col-md-2 mb-2">
                                                <div class="form-group required">
                                                    <label class="control-label">Gender</label>
                                                    <select class="form-control" name="gender"
                                                        placeholder="Enter Gender">
                                                        <option value="">Select</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2 mb-2">
                                                <div class="form-group required">
                                                    <label class="control-label">Mobile No.</label>
                                                    <input type="text" class="form-control" name="mobile"
                                                        placeholder="Enter your 10 digit mobile number">

                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 mb-2">
                                                <div class="form-group required">
                                                    <label class="control-label">Enrolment
                                                        Number</label>
                                                    <input type="text" class="form-control" name="enrolment"
                                                        maxlength="15" placeholder="Enter your Enrolment Number">

                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <div class="form-group required">
                                                    <label class="control-label">Department</label>
                                                    <select class="form-control" name="department">
                                                        <option value="">---select---</option>
                                                        <option value="3">Adult, Continuing Education &amp;
                                                            Extension</option>
                                                        <option value="4">African Studies</option>
                                                        <option value="7">Anthropology</option>
                                                        <option value="9">Arabic</option>
                                                        <option value="11">Bio-Physics</option>
                                                        <option value="12">Biochemistry</option>
                                                        <option value="13">Botany</option>
                                                        <option value="14">Buddhist Studies</option>
                                                        <option value="17">Chemistry</option>
                                                        <option value="19">Commerce</option>
                                                        <option value="22">Computer Science</option>
                                                        <option value="26">East Asian Studies</option>
                                                        <option value="27">Economics</option>
                                                        <option value="30">Electronics</option>
                                                        <option value="31">English</option>
                                                        <option value="32">Environmental Studies</option>
                                                        <option value="36">Genetics</option>
                                                        <option value="37">Geography</option>
                                                        <option value="38">Geology</option>
                                                        <option value="39">Germanic &amp; Romance Studies</option>
                                                        <option value="40">Hindi</option>
                                                        <option value="41">History</option>
                                                        <option value="42">Home Science</option>
                                                        <option value="45">Law</option>
                                                        <option value="46">Library &amp; Information Science
                                                        </option>
                                                        <option value="47">Linguistics</option>
                                                        <option value="48">Mathematics</option>
                                                        <option value="53">Microbiology</option>
                                                        <option value="54">Modern Indian Languages and Literary
                                                            Studies</option>
                                                        <option value="55">Music</option>
                                                        <option value="58">Operational Research</option>
                                                        <option value="63">Persian</option>
                                                        <option value="66">Philosophy</option>
                                                        <option value="67">Physical Education &amp; Sports Sciences
                                                        </option>
                                                        <option value="68">Physics</option>
                                                        <option value="70">Plant Molecular Biology</option>
                                                        <option value="71">Political Science</option>
                                                        <option value="74">Psychology</option>
                                                        <option value="76">Punjabi</option>
                                                        <option value="79">Sanskrit</option>
                                                        <option value="80">Slavonic &amp; Finno-Ugrian Studies
                                                        </option>
                                                        <option value="81">Social Work</option>
                                                        <option value="82">Sociology</option>
                                                        <option value="83">Statistics</option>
                                                        <option value="87">Urdu</option>
                                                        <option value="88">Zoology</option>
                                                        <option value="89">Institute of Informatics and
                                                            Communication</option>
                                                        <option value="91">Cluster Innovation Centre</option>
                                                        <option value="92">Dr. B.R. Ambedkar Centre for Biomedical
                                                            Research</option>
                                                        <option value="93">Education</option>
                                                        <option value="103">NCWEB</option>
                                                        <option value="104">Department of Finance and Business
                                                            Economics</option>
                                                        <option value="105">Faculty of Management Studies</option>
                                                        <option value="106">Women Studies &amp; Dev. Centre</option>
                                                        <option value="107">Director, DUCC</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div id="lawC" class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Select Center</label>
                                                    <select class="form-control" name="center">
                                                        <option value="">---select---</option>
                                                        <option value="Campus Law Center">Campus Law Center</option>
                                                        <option value="Law Center I">Law Center I</option>
                                                        <option value="Law Center II">Law Center II</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Course</label>
                                                    <select class="form-control" name="course">
                                                        <option value="">---select---</option>
                                                        <option value="Ph.D.">Ph.D.</option>
                                                        <option value="Masters">Masters/Postgraduate</option>
                                                        <option value="LLM">LLM</option>
                                                        <option value="LLB">LLB</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <br />

                            <div class="row">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h4>Present Address</h4>
                                                </div>
                                            </div>
                                            <div class="panel-body"> <br />
                                                <div class="row">
                                                    <div class="col-md-12 mb-2">
                                                        <div class="form-group">
                                                            <label class="control-label">Address </label>
                                                            <input type="text" class="form-control" name="address"
                                                                placeholder="Enter Address">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mb-2">
                                                        <div class="form-group">
                                                            <label class="control-label">State</label>
                                                            <select class="form-control" name="state">
                                                                <option value="">---select---</option>
                                                                <option value="1">Andaman and Nicobar Islands
                                                                </option>
                                                                <option value="2">Andhra Pradesh</option>
                                                                <option value="3">Arunachal Pradesh</option>
                                                                <option value="4">Assam</option>
                                                                <option value="5">Bihar</option>
                                                                <option value="6">Chandigarh</option>
                                                                <option value="7">Chhattisgarh</option>
                                                                <option value="8">Dadra and Nagar Haveli</option>
                                                                <option value="9">Daman and Diu</option>
                                                                <option value="10">Delhi</option>
                                                                <option value="11">Goa</option>
                                                                <option value="12">Gujarat</option>
                                                                <option value="13">Haryana</option>
                                                                <option value="14">Himachal Pradesh</option>
                                                                <option value="15">Jammu and Kashmir</option>
                                                                <option value="16">Jharkhand</option>
                                                                <option value="17">Karnataka</option>
                                                                <option value="18">Kerala</option>
                                                                <option value="19">Lakshadweep</option>
                                                                <option value="20">Madhya Pradesh</option>
                                                                <option value="21">Maharashtra</option>
                                                                <option value="22">Manipur</option>
                                                                <option value="23">Meghalaya</option>
                                                                <option value="24">Mizoram</option>
                                                                <option value="25">Nagaland</option>
                                                                <option value="26">Odisha</option>
                                                                <option value="27">Puducherry</option>
                                                                <option value="28">Punjab</option>
                                                                <option value="29">Rajasthan</option>
                                                                <option value="30">Sikkim</option>
                                                                <option value="31">Tamil Nadu</option>
                                                                <option value="32">Telangana</option>
                                                                <option value="33">Tripura</option>
                                                                <option value="34">Uttar Pradesh</option>
                                                                <option value="35">Uttarakhand</option>
                                                                <option value="36">West Bengal</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <div class="form-group">
                                                            <label class="control-label">Pin Code</label>
                                                            <input type="text" class="form-control" name="pincode"
                                                                maxlength="6"
                                                                placeholder="Enter your six digit area pincode">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h4>Permanent Address</h4>
                                                </div>
                                            </div>
                                            <div class="panel-body"> <br />
                                                <div class="row">
                                                    <div class="col-md-12 mb-2">
                                                        <div class="form-group">
                                                            <label class="control-label">Address</label>
                                                            <input type="text" class="form-control" name="address"
                                                                maxlength="512" placeholder="Enter Address">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mb-2">
                                                        <div class="form-group">
                                                            <label class="control-label">State</label>
                                                            <select class="form-control"name="state">
                                                                <option value="">---select---</option>
                                                                <option value="1">Andaman and Nicobar Islands
                                                                </option>
                                                                <option value="2">Andhra Pradesh</option>
                                                                <option value="3">Arunachal Pradesh</option>
                                                                <option value="4">Assam</option>
                                                                <option value="5">Bihar</option>
                                                                <option value="6">Chandigarh</option>
                                                                <option value="7">Chhattisgarh</option>
                                                                <option value="8">Dadra and Nagar Haveli</option>
                                                                <option value="9">Daman and Diu</option>
                                                                <option value="10">Delhi</option>
                                                                <option value="11">Goa</option>
                                                                <option value="12">Gujarat</option>
                                                                <option value="13">Haryana</option>
                                                                <option value="14">Himachal Pradesh</option>
                                                                <option value="15">Jammu and Kashmir</option>
                                                                <option value="16">Jharkhand</option>
                                                                <option value="17">Karnataka</option>
                                                                <option value="18">Kerala</option>
                                                                <option value="19">Lakshadweep</option>
                                                                <option value="20">Madhya Pradesh</option>
                                                                <option value="21">Maharashtra</option>
                                                                <option value="22">Manipur</option>
                                                                <option value="23">Meghalaya</option>
                                                                <option value="24">Mizoram</option>
                                                                <option value="25">Nagaland</option>
                                                                <option value="26">Odisha</option>
                                                                <option value="27">Puducherry</option>
                                                                <option value="28">Punjab</option>
                                                                <option value="29">Rajasthan</option>
                                                                <option value="30">Sikkim</option>
                                                                <option value="31">Tamil Nadu</option>
                                                                <option value="32">Telangana</option>
                                                                <option value="33">Tripura</option>
                                                                <option value="34">Uttar Pradesh</option>
                                                                <option value="35">Uttarakhand</option>
                                                                <option value="36">West Bengal</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <div class="form-group">
                                                            <label class="control-label">Pin Code</label>
                                                            <input type="text" class="form-control" name="pincode"
                                                                maxlength="6"
                                                                placeholder="Enter your six digit area pincode">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h4>Grievance Details</h4>
                                </div>
                            </div>
                            <div class="panel-body"> <br />
                                <div class="row">
                                    <div class="col-md-6 mb-2">
                                        <div class="form-group">
                                            <label class="control-label">Grievance Category</label>
                                            <select class="form-control" name="category">
                                                <option value="">---select---</option>
                                                <option value="7">Examination</option>
                                                <option value="1">Infrastructure</option>
                                                <option value="2">General Facility</option>
                                                <option value="3">Research Facility</option>
                                                <option value="4">Journals/Literature</option>
                                                <option value="5">Fellowship</option>
                                                <option value="6">Any Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <div class="form-group">
                                            <label class="control-label">Other Grievance Category (*If
                                                Applicable)</label>
                                            <input type="text" class="form-control"
                                                name="other_grievance_category"
                                                placeholder="Enter Other Grievance Category">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <div class="form-group">
                                            <label class="control-label">Grievance Description (maximum 150
                                                words)</label>
                                            <textarea class="form-control" name="grievance_description" rows="6"
                                                placeholder="Write in brief of your grievance."></textarea>
                                        </div>
                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-2">
                                        <div class="form-group">
                                            <label class="control-label">Want to Upload Document ?</label>
                                            <select class="form-control" name="uploadCheck" required>
                                                <option value="">---select---</option>
                                                <option value="1">Yes</option>
                                                <option value="2">No</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-2">
                                        <div class="form-group">
                                            <label class="control-label">Upload Document(if Yes)
                                                (File Type: pdf, png, jpg, jpeg, doc, docx. File Size: 500KB)</label>
                                            <input type="file" name="doc" maxlength="512">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h4>Proposed Solution (Optional)</h4>
                                </div>
                            </div>
                            <div class="panel-body"> <br />
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <div class="form-group">
                                            <label class="control-label">Proposed Solution (maximum 50 words)</label>
                                            <textarea class="form-control" name="proposed_solution" rows="6"
                                                placeholder="Please write proposed solution."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br />
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h4>Declaration</h4>
                                </div>
                            </div>
                            <div class="panel-body"> <br />
                                <div class="col-md-12">
                                    <p>I hereby declare that the information/document provided above is correct. I shall
                                        be responsible for furnishing any wrong information/document.
                                    <div class="form-group">
                                        <label><input type="checkbox" required> Please check the box</label>
                                    </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h4>Captcha Verification</h4>
                                </div>
                            </div>
                            <div class="panel-body"> <br />
                                <div class="col-md-4">
                                    <p>Type the Text</p>
                                    <div class="captcha">
                                        <span> {!! captcha_img() !!} </span>
                                        <button type="button" class="btn btn-danger reload" id="reload">&#x21bb</button>
                                    </div>
                                    <span style="font-size:10px;">* Click on the text to change</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                    </div>
                    <br /><br /><br>
                </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#reload').click(function(){
                $.ajax({
                    type: 'GET',
                    url: 'reload-captcha',
                    success: function(data) {
                        $(".captcha span").html(data.captcha);
                    }
                });
            });
        });
    </script>
</body>

</html>
