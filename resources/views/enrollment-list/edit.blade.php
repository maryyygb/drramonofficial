@extends('layouts.front')

@section('seca')
<div class="enrollment-con">
    <a href="/enrollment-list">Back</a>
    <h4>UPDATE SOME INFORMATION</h4>
</div>

<div class="enroll-back">
            
            </div>

<!-- for the success message from the controller when a new event is added -->
@if (session('status'))
<div class="c_ev_status">{{session('status')}}</div>
@endif

<div class="enrollment-sec">
    <form method="post" action="{{ route('enrollment.update', ['enrollment' => $enrollment]) }}">
        @csrf
        @method('put')

        <div class="enrollment-form">
            <!-- one -->

            <div class="enrollment-head">
                <h1>Enrollment Form</h1>
            </div>


            <div class="enroll-form-one">
                <div class="en-fo-one-list">
                    <div class="en-fo-one-item">
                        <label for="school-year">School Year</label>
                        <input type="text" name="school_year" id="" value="{{$enrollment->school_year}}" placeholder="ex. 2023 - 2024">
                    </div>
                    <div class="en-fo-one-item">
                        <label for="">Grade Level to Enroll</label>
                        <input type="text" name="grade_to_enroll" id="" value="{{$enrollment->grade_to_enroll}}" placeholder="ex. 12">
                    </div>

                </div>
                <div class="en-fo-one-list">
                    <div class="en-fo-one-item">
                        <label for="">With LRN?</label>
                        <input type="text" name="with_lrn" id="" value="{{$enrollment->with_lrn}}" placeholder=" YES OR NO">
                    </div>
                    <div class="en-fo-one-item">
                        <label for="">Returning (Balik-Aral)</label>
                        <input type="text" name="balik_aral" id="" value="{{$enrollment->balik_aral}}" placeholder="YES OR NO">
                    </div>
                </div>
            </div>

            <div class="enroll-form-one">
                <div class="en-fo-one-list">
                    <div class="en-fo-one-item">
                        <label for="school-year">TRACK</label>
                        <input type="text" name="track" id="" value="{{$enrollment->track}}" placeholder="ex. TVL">
                    </div>
                    <div class="en-fo-one-item">
                        <label for="">STRAND</label>
                        <input type="text" name="strand" id="" value="{{$enrollment->strand}}" placeholder="ex. ICT">
                    </div>

                </div>
                <div class="en-fo-one-list">
                    <div class="en-fo-one-item">
                        <label for="">SPECIALIZATION</label>
                        <input type="text" name="specialization" id="" value="{{$enrollment->specialization}}" placeholder=" ex. Tech-Draft">
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
                        <input type="text" name="psa_no" id="" value="{{$enrollment->psa_no}}" placeholder="N/A">
                    </div>
                    <div class="en-fo-two-item">
                        <label for="">Learner Reference No. (LRN)</label>
                        <input type="text" name="lrn" id="" value="{{$enrollment->lrn}}" placeholder="ex. 000000000000">
                    </div>
                </div>

                <div class="en-form-boxt-two">
                    <div class="en-form-box-list-f">
                        <label for="">Name: Last Name, First Name, Middle Name, Extension Name e.g Jr, III (If applicable)</label>
                        <input type="text" name="name" id="" value="{{$enrollment->name}}" placeholder="ex. Doe, Jane Guerzon">
                    </div>
                    <div class="en-form-box-list">
                        <div class="en-form-box-items">
                            <label for="">Birthdate (mm/dd/yyyy)</label>
                            <input type="date" name="birthdate" id="" value="{{$enrollment->birthdate}}" placeholder="ex. 12/08/2000">
                        </div>
                        <div class="en-form-box-items">
                            <label for="">Age</label>
                            <input type="number" name="age" id="" value="{{$enrollment->age}}" placeholder="ex. 16">
                        </div>
                        <div class="en-form-box-items">
                            <label for="">Sex</label>
                            <input type="text" name="sex" id="" value="sex" placeholder="Female or Male">
                        </div>
                    </div>

                    <div class="en-form-box-list">
                        <div class="en-form-box-items">
                            <label for="">Place of Birth</label>
                            <input type="text" name="birth_place" id="" value="{{$enrollment->birth_place}}" placeholder="ex. City/Municipality, Province">
                        </div>
                        <div class="en-form-box-items">
                            <label for="">Mother Tongue</label>
                            <input type="text" name="mother_tongue" id="" value="{{$enrollment->mother_tongue}}" placeholder="ex. Filipino">
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
                        <input type="text" name="house_no" id="" value="{{$enrollment->house_no}}" placeholder="ex. 1111">
                    </div>
                    <div class="en-form-three-list">
                        <label for="">Street Name</label>
                        <input type="text" name="street" id="" value="{{$enrollment->street}}" placeholder="ex. Purok 0">
                    </div>
                    <div class="en-form-three-list">
                        <label for="">Barangay</label>
                        <input type="text" name="brngy" id="" value="{{$enrollment->brngy}}" placeholder="ex. Butao">
                    </div>
                </div>
                <div class="en-form-box-three">
                    <div class="en-form-three-list">
                        <label for="">Municipality/City</label>
                        <input type="text" name="mun_city" id="" value="{{$enrollment->mun_city}}" placeholder="ex. Cuyapo">
                    </div>
                    <div class="en-form-three-list">
                        <label for="">Province</label>
                        <input type="text" name="province" id="" value="{{$enrollment->province}}" placeholder="ex. Nueva Ecija">
                    </div>
                    <div class="en-form-three-list">
                        <label for="">Country</label>
                        <input type="text" name="country" id="" value="{{$enrollment->country}}" placeholder="ex. Philippines">
                    </div>
                    <div class="en-form-three-list">
                        <label for="">Zip Code</label>
                        <input type="text" name="zip_code" id="" value="zip_code" placeholder="ex. 3117">
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
                        <input type="text" name="f_lastname" id="" value="{{$enrollment->f_lastname}}" placeholder="ex. Doe">
                    </div>
                    <div class="en-form-con-list">
                        <label for="">First Name</label>
                        <input type="text" name="f_firstname" id="" value="{{$enrollment->f_firstname}}" placeholder="ex. Jose">
                    </div>
                    <div class="en-form-con-list">
                        <label for="">Middle Name</label>
                        <input type="text" name="f_midname" id="" value="{{$enrollment->f_midname}}" placeholder="ex. Garcia">
                    </div>
                    <div class="en-form-con-list">
                        <label for="">Contact Number</label>
                        <input type="text" name="f_contact_no" id="" value="{{$enrollment->f_contact_no}}" placeholder="ex. 09*********">
                    </div>
                </div>
                <div class="enrollment-sub">
                    <h5>Mother</h5>
                </div>
                <div class="en-form-con-four">
                    <div class="en-form-con-list">
                        <label for="">Last Name</label>
                        <input type="text" name="m_lastname" id="" value="{{$enrollment->m_lastname}}" placeholder="ex. Doe">
                    </div>
                    <div class="en-form-con-list">
                        <label for="">First Name</label>
                        <input type="text" name="m_firstname" id="" value="{{$enrollment->m_firstname}}" placeholder="ex. Jane">
                    </div>
                    <div class="en-form-con-list">
                        <label for="">Middle Name</label>
                        <input type="text" name="m_midname" id="" value="{{$enrollment->m_midname}}" placeholder="ex. Lopez">
                    </div>
                    <div class="en-form-con-list">
                        <label for="">Contact Number</label>
                        <input type="text" name="m_contact_no" id="" value="{{$enrollment->m_contact_no}}" placeholder="ex. 09*********">
                    </div>
                </div>
                <div class="enrollment-sub">
                    <h5>Guardian</h5>
                </div>
                <div class="en-form-con-four">
                    <div class="en-form-con-list">
                        <label for="">Last Name</label>
                        <input type="text" name="g_lastname" id="" value="{{$enrollment->g_lastname}}" placeholder="ex. Doe">
                    </div>
                    <div class="en-form-con-list">
                        <label for="">First Name</label>
                        <input type="text" name="g_firstname" id="" value="{{$enrollment->g_firstname}}" placeholder="ex. Job">
                    </div>
                    <div class="en-form-con-list">
                        <label for="">Middle Name</label>
                        <input type="text" name="g_midname" id="" value="{{$enrollment->g_midname}}" placeholder="ex. Delo">
                    </div>
                    <div class="en-form-con-list">
                        <label for="">Contact Number</label>
                        <input type="text" name="g_contact_no" id="" value="{{$enrollment->g_contact_no}}" placeholder="ex. 09*********">
                    </div>
                </div>
            </div>
            <div class="enroll-form-submit">
                <input type="submit" value="Update" class="enroll-form-btn">
            </div>
            

        </div>

        <!-- <label for=""></label>
        <input type="text" name="" id="" value="" placeholder="ex. 000000000000"> -->


        <!-- two -->
    </form>

</div>

@endsection