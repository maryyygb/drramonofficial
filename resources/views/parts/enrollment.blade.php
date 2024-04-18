@extends('layouts.front')

@section('seca')
<div class="enrollment-con">
    <h4>Please fill up the form below. As much as possible, don't leave empty answer.</h4>
</div>
<div class="enrollment-sec">
    <form action="" method="post">
        @csrf

        <div class="enrollment-form">
            <!-- one -->

            <div class="enrollment-head">
                <h1>Enrollment Form</h1>
            </div>

            <div class="enroll-form-one">
                <div class="en-fo-one-list">
                    <div class="en-fo-one-item">
                        <label for="school-year">School Year</label>
                        <input type="text" name="school-year" id="" value="" placeholder="ex. 2023 - 2024">
                    </div>
                    <div class="en-fo-one-item">
                        <label for="">Grade Level to Enroll</label>
                        <input type="text" name="school-year" id="" value="" placeholder="ex. 12">
                    </div>

                </div>
                <div class="en-fo-one-list">
                    <div class="en-fo-one-item">
                        <label for="">With LRN?</label>
                        <input type="text" name="school-year" id="" value="" placeholder=" YES OR NO">
                    </div>
                    <div class="en-fo-one-item">
                        <label for="">Returning (Balik-Aral)</label>
                        <input type="text" name="school-year" id="" value="" placeholder="YES OR NO">
                    </div>
                </div>
            </div>

            <div class="enroll-form-one">
                <div class="en-fo-one-list">
                    <div class="en-fo-one-item">
                        <label for="school-year">TRACK</label>
                        <input type="text" name="school-year" id="" value="" placeholder="ex. TVL">
                    </div>
                    <div class="en-fo-one-item">
                        <label for="">STRAND</label>
                        <input type="text" name="school-year" id="" value="" placeholder="ex. ICT">
                    </div>

                </div>
                <div class="en-fo-one-list">
                    <div class="en-fo-one-item">
                        <label for="">SPECIALIZATION</label>
                        <input type="text" name="school-year" id="" value="" placeholder=" ex. Tech-Draft">
                    </div>
                </div>
            </div>

            <div class="enrollment-head">
                <h1>Learner Information</h1>
            </div>

            <div class="enroll-form-two">
                <div class="en-form-boxt">
                    <div class="en-fo-two-item">
                        <label for="">PSA Birth Certificate No. (If Available upon registration)</label>
                        <input type="text" name="school-year" id="" value="" placeholder="N/A">
                    </div>
                    <div class="en-fo-two-item">
                        <label for="">Learner Reference No. (LRN)</label>
                        <input type="text" name="school-year" id="" value="" placeholder="ex. 000000000000">
                    </div>
                </div>

                <div class="en-form-boxt-two">
                    <div class="en-form-box-list-f">
                        <label for="">Name: Last Name, First Name, Middle Name, Extension Name e.g Jr, III (If applicable)</label>
                        <input type="text" name="school-year" id="" value="" placeholder="ex. Doe, Jane Guerzon">
                    </div>
                    <div class="en-form-box-list">
                        <div class="en-form-box-items">
                            <label for="">Birthdate (mm/dd/yyyy)</label>
                            <input type="date" name="school-year" id="" value="" placeholder="ex. 12/08/2000">
                        </div>
                        <div class="en-form-box-items">
                            <label for="">Age</label>
                            <input type="text" name="school-year" id="" value="" placeholder="ex. 16">
                        </div>
                        <div class="en-form-box-items">
                            <label for="">Sex</label>
                            <input type="text" name="school-year" id="" value="" placeholder="Female or Male">
                        </div>
                    </div>

                    <div class="en-form-box-list">
                        <div class="en-form-box-items">
                            <label for="">Place of Birth</label>
                            <input type="text" name="" id="" value="" placeholder="ex. City/Municipality, Province">
                        </div>
                        <div class="en-form-box-items">
                            <label for="">Mother Tongue</label>
                            <input type="text" name="" id="" value="" placeholder="ex. Filipino">
                        </div>
                    </div>
                </div>
            </div>

            <div class="enrollment-head">
                <h1>Current Address</h1>
            </div>

            <div class="en-form-con-three">
                <div class="en-form-box-three">
                    <div class="en-form-three-list">
                        <label for="">House No./Street</label>
                        <input type="text" name="" id="" value="" placeholder="ex. 1111">
                    </div>
                    <div class="en-form-three-list">
                        <label for="">Street Name</label>
                        <input type="text" name="" id="" value="" placeholder="ex. Purok 0">
                    </div>
                    <div class="en-form-three-list">
                        <label for="">Barangay</label>
                        <input type="text" name="" id="" value="" placeholder="ex. Butao">
                    </div>
                </div>
                <div class="en-form-box-three">
                    <div class="en-form-three-list">
                        <label for="">Municipality/City</label>
                        <input type="text" name="" id="" value="" placeholder="ex. Cuyapo">
                    </div>
                    <div class="en-form-three-list">
                        <label for="">Province</label>
                        <input type="text" name="" id="" value="" placeholder="ex. Nueva Ecija">
                    </div>
                    <div class="en-form-three-list">
                        <label for="">Country</label>
                        <input type="text" name="" id="" value="" placeholder="ex. Philippines">
                    </div>
                    <div class="en-form-three-list">
                        <label for="">Zip Code</label>
                        <input type="text" name="" id="" value="" placeholder="ex. 3117">
                    </div>
                </div>
            </div>

            <div class="enrollment-head">
                <h1>Parent's/Guardian Information</h1>
            </div>

            <div class="en-form-box-four">
                <div class="enrollment-sub">
                    <h5>Father</h5>
                </div>
                <div class="en-form-con-four">
                    <div class="en-form-con-list">
                        <label for="">Last Name</label>
                        <input type="text" name="" id="" value="" placeholder="Last Name">
                    </div>
                    <div class="en-form-con-list">
                        <label for="">First Name</label>
                        <input type="text" name="" id="" value="" placeholder="First Name">
                    </div>
                    <div class="en-form-con-list">
                        <label for="">Middle Name</label>
                        <input type="text" name="" id="" value="" placeholder="ex. Middle Name">
                    </div>
                    <div class="en-form-con-list">
                        <label for="">Contact Number</label>
                        <input type="text" name="" id="" value="" placeholder="ex. 09*********">
                    </div>
                </div>
                <div class="enrollment-sub">
                    <h5>Mother</h5>
                </div>
                <div class="en-form-con-four">
                    <div class="en-form-con-list">
                        <label for="">Last Name</label>
                        <input type="text" name="" id="" value="" placeholder="Last Name">
                    </div>
                    <div class="en-form-con-list">
                        <label for="">First Name</label>
                        <input type="text" name="" id="" value="" placeholder="First Name">
                    </div>
                    <div class="en-form-con-list">
                        <label for="">Middle Name</label>
                        <input type="text" name="" id="" value="" placeholder="ex. Middle Name">
                    </div>
                    <div class="en-form-con-list">
                        <label for="">Contact Number</label>
                        <input type="text" name="" id="" value="" placeholder="ex. 09*********">
                    </div>
                </div>
                <div class="enrollment-sub">
                    <h5>Guardian</h5>
                </div>
                <div class="en-form-con-four">
                    <div class="en-form-con-list">
                        <label for="">Last Name</label>
                        <input type="text" name="" id="" value="" placeholder="Last Name">
                    </div>
                    <div class="en-form-con-list">
                        <label for="">First Name</label>
                        <input type="text" name="" id="" value="" placeholder="First Name">
                    </div>
                    <div class="en-form-con-list">
                        <label for="">Middle Name</label>
                        <input type="text" name="" id="" value="" placeholder="ex. Middle Name">
                    </div>
                    <div class="en-form-con-list">
                        <label for="">Contact Number</label>
                        <input type="text" name="" id="" value="" placeholder="ex. 09*********">
                    </div>
                </div>
            </div>
            <div class="enroll-form-submit">
                <input type="submit" value="Submit" class="enroll-form-btn">
            </div>

        </div>

        <!-- <label for=""></label>
        <input type="text" name="" id="" value="" placeholder="ex. 000000000000"> -->


        <!-- two -->
    </form>

</div>

@endsection