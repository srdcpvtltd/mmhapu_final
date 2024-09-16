<style>
    .panel-heading {
        padding: 10px 15px;
        border-bottom: 1px solid transparent;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
    }

    .panel-primary>.panel-heading {
        color: #fff;
        background-color: #0B416F;
        border-color: #0B416F;
    }

    .grievance-form h3 {
        margin-bottom: 20px;
        font-size: 25px;
        font-weight: bold;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        font-weight: bold;
    }

    .btn-primary {
        padding: 10px 30px;
        font-size: 18px;
    }

    .container {
        max-width: 800px;
    }

    .panel {
        margin-bottom: 20px;
    }

    input.form-control,
    select.form-control {
        border: 1px solid #ced4da;
        border-radius: 5px;
        padding: 10px;
    }

    @media (max-width: 768px) {
        .form-group label {
            text-align: left !important;
        }
    }

    .form-group.row label {
        margin-bottom: 0;
        padding-right: 5px;
        font-size: 1rem;
    }

    .form-group.row .col-sm-10 {
        padding-left: 5px;
    }
</style>

<style>
    .custom-popup {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 1000;
    }

    .popup-content {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        width: 400px;
        text-align: center;
    }

    .popup-content h5 {
        margin-bottom: 20px;
        font-weight: bold;
    }

    .popup-content p {
        margin-bottom: 15px;
    }

    .popup-content strong {
        color: red;
    }

    .popup-content button {
        margin: 10px;
    }
</style>

@include('web.layouts.header')

<section class="section-gap">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <form id="paymentForm" action="{{ route('certificateStore') }} " method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="panel panel-primary">
                        <div class="panel-heading text-center">
                            <h4 class="panel-title" style="color: #fff">Online Request for Degree
                                Certificate/Provisional
                                Certificate/Marks sheet/Migration from Universitites of Bihar</h4>
                        </div>
                        <div class="panel-body mt-4">
                            <div class="form-group row">
                                <label for="registration_number" class="col-sm-2 col-form-label text-right">Registration
                                    No. :</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="reg_no"
                                        placeholder="University Registration Number" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="roll_number" class="col-sm-2 col-form-label text-right">Roll No. :</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="roll_no"
                                        placeholder="University Roll Number" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label text-right">Name:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name"
                                        placeholder="Full Name In English" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="hindi_name" class="col-sm-2 col-form-label text-right">नाम :</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="hindi_name"
                                        placeholder="Full Name In Hindi">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="gender" class="col-sm-2 col-form-label text-right">Gender:</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="gender" required>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label text-right">Email:</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Email For Any Type Of Notification" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="mobile" class="col-sm-2 col-form-label text-right">Mobile:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="number"
                                        placeholder="10 digit Mobile Number" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Certificate" class="col-sm-2 col-form-label text-right">Request For:</label>
                                <div class="col-sm-10">
                                    <select name="certificate" class="form-control">
                                        <option value="Degree Certificate">Degree Certificate</option>
                                        <option value="Provisional Certificate">Provisional Certificate</option>
                                        <option value="Migration Certificate">Migration Certificate</option>
                                        <option value="Character Certificate">Character Certificate</option>
                                        <option value="ULC">ULC</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="College/Dept"
                                    class="col-sm-2 col-form-label text-right">College/Dept.:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="college"
                                        placeholder="Name of the College / University Department" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="session" class="col-sm-2 col-form-label text-right">Session :
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="session"
                                        placeholder="Session in the format 2014-2017" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="passing_year" class="col-sm-2 col-form-label text-right">Year of Passing
                                    :</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="passing_year"
                                        placeholder="Year of Passing" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="recive_degree" class="col-sm-2 col-form-label text-right">Date to Receive
                                    Degree :</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="recive_degree"
                                        placeholder="Date after 30 Days from Today" required>
                                </div>
                            </div>

                            <div class="form-group row" id="mode">
                                <label for="mobile" class="col-sm-2 col-form-label text-right">Mode of Receive
                                    Degree :</label>
                                <div class="col-sm-10">
                                    <Select name="recive_mode" id="recive_mode" class="form-control">
                                        <option value="Self Collect">Self Collect</option>
                                        <option value="By Post">By Post</option>
                                    </Select>
                                </div>
                            </div>

                            <div class="form-group row" id="address">
                                <label for="address" class="col-sm-2 col-form-label text-right">Address :</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="address"
                                        placeholder="Complete Address with Pin Code">
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-lg btn-primary" onclick="showPopup()">Save &
                                    Make Payment</button>
                            </div>
                        </div>
                    </div>
                    <!-- Custom Popup -->
                    {{-- <div id="customPopup" class="custom-popup" style="display: none;">
                        <div class="popup-content">
                            <h5>Confirmation for Form Submission and Online Payment!</h5>
                            <p>Your Request for Document in MMHAPU will be Saved with Requester ID:
                                <strong>99006</strong>.
                            </p>
                            <p>Kindly Make Online Payment <strong>50 INR</strong> to Complete the Process!</p>
                            <p>Do you want to submit?</p>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success" onclick="submitForm()">Yes</button>
                                <button type="button" class="btn btn-danger" onclick="hidePopup()">No</button>
                            </div>
                        </div>
                    </div> --}}
                </form>

            </div>
        </div>
    </div>
</section>

@include('web.layouts.footer')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $('#address').hide();

        $('#recive_mode').on('change', function() {
            var mode = $(this).val();
            if (mode === 'By Post') {
                $('#address').show();
            } else {
                $('#address').hide();
            }
        });
    });
</script>
{{-- <script>
    function showPopup() {
        document.getElementById("customPopup").style.display = "flex";
    }

    function hidePopup() {
        document.getElementById("customPopup").style.display = "none";
    }

    function submitForm() {
        document.getElementById("paymentForm").submit();
    }
</script> --}}
