<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\programme;
use App\faculty;

class programmesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programmes = programme::all();
//
        $xmlp = new \DOMDocument("1.0","UTF-8");
        $xmlp->formatOutput=true;
        $xmlprogrammes=$xmlp->createElement('ProgrammesList');
        foreach($programmes as $prog){
            $xmlprog=$xmlp->createElement('Programme');
            $xmlprogname=$xmlp->createElement('ProgrammeName',$prog->programme_name);
            $xmlprogdesc=$xmlp->createElement('ProgrammeDescription',$prog->programme_desc);
            $xmlprogfduration=$xmlp->createElement('ProgrammeFullTimeDuration',$prog->fulltime_duration);
            $xmlprogpduration=$xmlp->createElement('ProgrammePartTimeDuration',$prog->parttime_duration);
            $xmlprogpc=$xmlp->createElement('ProfessionalCertification',$prog->professional_certification);
            $xmlMER_SPM=$xmlp->createElement('MER_SPM',$prog->MER_SPM);
            $xmlMER_STPM=$xmlp->createElement('MER_STPM',$prog->MER_STPM);
            $xmlMER_UEC=$xmlp->createElement('MER_UEC',$prog->MER_UEC);
            $xmlMER_desc=$xmlp->createElement('MER_desc',$prog->MER_desc);

            $xmlprog->setAttribute('ProgrammeID',$prog->programme_id);
            $xmlprog->setAttribute('ProgrammeCode',$prog->programme_code);
            $xmlprog->appendChild($xmlprogname);
            $xmlprog->appendChild($xmlprogdesc);
            $xmlprog->appendChild($xmlprogfduration);
            $xmlprog->appendChild($xmlprogpduration);
            $xmlprog->appendChild($xmlprogpc);
            $xmlprog->appendChild($xmlMER_SPM);
            $xmlprog->appendChild($xmlMER_STPM);
            $xmlprog->appendChild($xmlMER_UEC);


            $xmlprogrammes->appendChild($xmlprog);
        }
        $xmlp->appendChild($xmlprogrammes);
        $xmlp->save("/xampp/htdocs/TARUCsystem/resources/views/XML/programme.xml");
        return view('faculty/programme_view',compact('programmes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faculty = faculty::all();

        $xml = new \DOMDocument("1.0","UTF-8");
        $xml->formatOutput=true;
        $xmlfaculties=$xml->createElement('Faculties');
        foreach($faculty as $fac){
            $xmlfac=$xml->createElement('Faculty');
            $xmlfacname=$xml->createElement('FacultyName',$fac->faculty_name);
            $xmlfacdesc=$xml->createElement('Description',$fac->faculty_desc);

            $xmlfac->setAttribute('FacultyID',$fac->faculty_id);
            $xmlfac->setAttribute('FacultyShortName',$fac->faculty_short_name);
            $xmlfac->appendChild($xmlfacname);
            $xmlfac->appendChild($xmlfacdesc);

            $xmlfaculties->appendChild($xmlfac);
        }
        $xml->appendChild($xmlfaculties);
        $xml->save("/xampp/htdocs/TARUCsystem/resources/views/XML/faculty.xml");
        return view('programmes_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prog = new programme();
        $prog->programme_name = $request->get('programme_name');
        $prog->programme_code = $request->get('programme_code');
        $prog->fulltime_duration = $request->get('fduration');
        $prog->faculty_id = $request->get('faculty');
        $prog->parttime_duration = $request->get('pduration');
        $prog->professional_certification = $request->get('professional_certification');
        $prog->MER_SPM = $request->get('MER_SPM');
        $prog->MER_STPM = $request->get('MER_STPM');
        $prog->MER_UEC = $request->get('MER_UEC');
        $prog->timestamps=false;
        $prog->save();
        return redirect('programmes')->with('success','Information has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
