<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Subject;
use App\Models\SubjectCombo;
use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function adminIndex()
    {
        return view('/ad_dash/admin_index');
    }

    public function create_c(Request $request)
    {

        $request->validate([
            'class_id' => 'required',
            'sect' => 'required',
        ]);

        Classes::create([
            'class_name' => $request->class_n,
            'class_section' => $request->sect,
        ]);
        return back();
    }

    public function classes()
    {
        return view('/ad_dash/st_classes/create_class');
    }
    public function manageClass()
    {
        $class = Classes::orderBy('id', 'desc')->paginate(5);
        $val = 1;

        return view(
            '/ad_dash/st_classes/manage_class',
            [
                'uploadedClass' => $class,
                'calcN' => $val,
            ]
        );
    }

    public function classEdit($id)
    {
        $nclass = Classes::find($id);
        return view('/ad_dash/st_classes/edit', [
            'UClass' => $nclass
        ]);
    }

    public function destroyClass($id)
    {
        Classes::destroy($id);

        return back()->with('message', "Deleted Successfully");
    }

    public function update_class(Request $request, $id)
    {
        // dd($request->all());


        Classes::where('id', $id)->update([
            'class_name' => $request->input('class_n'),
            'class_section' => $request->input('sect')
        ]);

        return redirect(route('m_class'))->with('message', 'Record updated successfully');
    }


    // create subject
    public function createSubject()
    {
        return view('/ad_dash/subjects/create_subject');
    }

    public function createSub(Request $request)
    {
        $request->validate([
            'sub_name' => 'required',
            'sub_code' => 'required'
        ]);

        Subject::create([
            'subject_name' => $request->input('sub_name'),
            'subject_code' => $request->input('sub_code')
        ]);

        return back()->with('message', 'Subject Created Successfully');
    }

    public function manageSub()
    {
        $subject = Subject::orderby('id', 'desc')->paginate(5);
        // dd($subject);
        $val = 1;

        return view('/ad_dash/subjects/manage_subject', [
            'msub' => $subject,
            'index' => $val,
        ]);
    }

    public function deleteSub($id)
    {
        Subject::destroy($id);
        return back()->with('message', 'successfully deleted');
    }

    public function editSub($id)
    {
        $ESub = Subject::find($id);
        return view('/ad_dash/subjects/edit_sub', [
            'EdSub' => $ESub,
        ]);
    }
    public function updateSub(Request $request, $id)
    {

        Subject::where('id', $id)->update([
            'subject_name' => $request->input('subname'),
            'subject_code' => $request->input('subnum'),
        ]);


        return redirect(route('manage_sub'))->with('message', 'Record updated Successfully');
    }

    // subject combination
    public function combo()
    {
        return view('ad_dash.subjects.add_subject_combo', [
            'classes' => Classes::all(),
            'subjects' => Subject::all()
        ]);
    }

    public function subCombo(Request $request)
    {

        $request->validate([
            'class_id' => 'required',
            'comClass*' => ['required', 'int']
        ]);

        foreach ($request->comClass as $class) {

            Subjectcombo::create([
                'class_id' => $request->class_id,
                'subject_id' => $class
            ]);
        }
    }

    public function subComboMan()
    {
        $combo = SubjectCombo::orderby('id', 'desc')->paginate(5);
        $val = 1;
        return view('/ad_dash/subjects/manage_subject_combo', [
            'combo' => $combo,
            'val' => $val,
        ]);
    }


    public function mangSub()
    {
        $class = Classes::find(4); // Find Science

        dd($class->subject_combos);

        return view('ad_dash\subjects\manage_subject', [
            'classes' => Classes::all()
        ]);
    }

    // students record
    public function stuRec()
    {
        $records = User::all()->where('role', 0);

        return view('ad_dash\students_record', [
            'stud_records' => $records,
        ]);
    }

    // accept
    public function accept($id)
    {
        $record = User::find($id);
        $rand = str_shuffle("1234567890");
        $randPin = substr($rand, 0, 5);
        return view('ad_dash\accept', [
            'acceptR' => $record,
            'pin' => $randPin
        ]);
    }

    public function sendPin(Request $request, $id){
        User::where('id',$id)->update([
            'pin' => $request->accept_pin,
        ]);

        return redirect('students_record')->with('message', 'Pin successfully sent');
    }
}
