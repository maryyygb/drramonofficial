<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enrollment;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $enrollments = Enrollment::all();
        return view('enrollment-list.index', ['enrollments' => $enrollments]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('parts.enrollment');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'school_year' => 'required|max:255|string',
            'grade_to_enroll' => 'required|max:255|string',
            'with_lrn' => 'required|max:255|string',
            'balik_aral' => 'required|max:255|string',
            'track' => 'required|max:255|string',
            'strand' => 'required|max:255|string',
            'specialization' => 'required|max:255|string',
            'psa_no' => 'required|max:255|string',
            'lrn' => 'required|max:255|string',
            'name' => 'required|max:255|string',
            'birthdate' => 'required|date',
            'age' => 'required|numeric',
            'sex' => 'required|max:255|string',
            'birth_place' => 'required|max:255|string',
            'mother_tongue' => 'required|max:255|string',
            'house_no' => 'required|max:255|string',
            'street' => 'required|max:255|string',
            'brngy' => 'required|max:255|string',
            'mun_city' => 'required|max:255|string',
            'province' => 'required|max:255|string',
            'country' => 'required|max:255|string',
            'zip_code' => 'required|max:255|string',
            'f_lastname' => 'required|max:255|string',
            'f_firstname' => 'required|max:255|string',
            'f_midname' => 'required|max:255|string',
            'f_contact_no' => 'required|max:255|string',
            'm_lastname' => 'required|max:255|string',
            'm_firstname' => 'required|max:255|string',
            'm_midname' => 'required|max:255|string',
            'm_contact_no' => 'required|max:255|string',
            'g_lastname' => 'required|max:255|string',
            'g_firstname' => 'required|max:255|string',
            'g_midname' => 'required|max:255|string',
            'g_contact_no' => 'required|max:255|string',
        ]);

        Enrollment::create([
            'school_year' => $request->school_year,
            'grade_to_enroll' => $request->grade_to_enroll,
            'with_lrn' => $request->with_lrn,
            'balik_aral' => $request->balik_aral,
            'track' => $request->track,
            'strand' => $request->strand,
            'specialization' => $request->specialization,
            'psa_no' => $request->psa_no,
            'lrn' => $request->lrn,
            'name' => $request->name,
            'birthdate' => $request->birthdate,
            'age' => $request->age,
            'sex' => $request->sex,
            'birth_place' => $request->birth_place,
            'mother_tongue' => $request->mother_tongue,
            'house_no' => $request->house_no,
            'street' => $request->street,
            'brngy' => $request->brngy,
            'mun_city' => $request->mun_city,
            'province' => $request->province,
            'country' => $request->country,
            'zip_code' => $request->zip_code,
            'f_lastname' => $request->f_lastname,
            'f_firstname' => $request->f_firstname,
            'f_midname' => $request->f_midname,
            'f_contact_no' => $request->f_contact_no,
            'm_lastname' => $request->m_lastname,
            'm_firstname' => $request->m_firstname,
            'm_midname' => $request->m_midname,
            'm_contact_no' => $request->m_contact_no,
            'g_lastname' => $request->g_lastname,
            'g_firstname' => $request->g_firstname,
            'g_midname' => $request->g_midname,
            'g_contact_no' => $request->g_contact_no,
        ]);

        return redirect('/enrollment')->with('status', 'You successfully submit the enrollment form! Thank You!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Enrollment $enrollment)
    {
        // dd($enrollment);
        return view('enrollment-list.edit', ['enrollment' => $enrollment]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Enrollment $enrollment, Request $request)
    {
        $data = $request->validate([
            'school_year' => 'required|max:255|string',
            'grade_to_enroll' => 'required|max:255|string',
            'with_lrn' => 'required|max:255|string',
            'balik_aral' => 'required|max:255|string',
            'track' => 'required|max:255|string',
            'strand' => 'required|max:255|string',
            'specialization' => 'required|max:255|string',
            'psa_no' => 'required|max:255|string',
            'lrn' => 'required|max:255|string',
            'name' => 'required|max:255|string',
            'birthdate' => 'required|date',
            'age' => 'required|numeric',
            'sex' => 'required|max:255|string',
            'birth_place' => 'required|max:255|string',
            'mother_tongue' => 'required|max:255|string',
            'house_no' => 'required|max:255|string',
            'street' => 'required|max:255|string',
            'brngy' => 'required|max:255|string',
            'mun_city' => 'required|max:255|string',
            'province' => 'required|max:255|string',
            'country' => 'required|max:255|string',
            'zip_code' => 'required|max:255|string',
            'f_lastname' => 'required|max:255|string',
            'f_firstname' => 'required|max:255|string',
            'f_midname' => 'required|max:255|string',
            'f_contact_no' => 'required|max:255|string',
            'm_lastname' => 'required|max:255|string',
            'm_firstname' => 'required|max:255|string',
            'm_midname' => 'required|max:255|string',
            'm_contact_no' => 'required|max:255|string',
            'g_lastname' => 'required|max:255|string',
            'g_firstname' => 'required|max:255|string',
            'g_midname' => 'required|max:255|string',
            'g_contact_no' => 'required|max:255|string',
        ]);

        $enrollment->update($data);

        return redirect(route('enrollment.index'))->with('status', 'You successfully update the information!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Enrollment $enrollment)
    {
        $enrollment->delete();
        return redirect(route('enrollment.index'))->with('status', 'Deleted Successfully!');

    }
}
