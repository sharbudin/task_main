<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use DB;

class ContactController extends Controller
{

    public function viewdetail(){
        $contacts = DB::select("select * from contacts");

        return view('detail',['details'=>$contacts]);
    }
    public function adddetail(Request $request)
    {
        // $emp_id = $request->input('emp_id');

        // $request->validate([
        //     'image'=>'required|image|mimes:jpeg,jpg,png,svg|max:2048'
        // ]);

        // $imageName = $emp_id.'.'.$request->image->extension();

        // $request->image->move(public_path('images'),$imageName);

        $id = $request->input('id');
        $Employee_ID = $request->input('Employee_ID');
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        DB::insert("insert into contacts(Employee_ID,name,email,password) values(?,?,?,?)",
        [$Employee_ID,$name,$email,$password]);

       return redirect()->back()->with('status','Details Added Successfully');
    }

    public function editdetail($id)
    {
        $cont = DB::table('contacts')->where('id',$id)->get()->first();

        return redirect()->back()->with(['status'=>200,'details'=>$cont]);
    }

    public function updatedetail(Request $request)
    {
        $id = $request->input('id');
        $Employee_ID = $request->input('Employee_ID');
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $contacts = DB::select('select * from contacts where id = ?', [$id]);
        DB::update('update contacts set Employee_ID=?,name=?,email=?,password=? where id=?',[$Employee_ID,$name,$email,$password,$id]);
        return redirect()->back()->with('status','Details Updated Successfully');
    }

    public function deletedetail($id)
    {
        $contacts = DB::select('select * from contacts where id = ?', [$id]);
        DB::delete('delete from contacts where id = ?', [$id]);
        echo 200;
        // return redirect()->back();

    }
}


//     public function details()
//     {
//         $contacts = Contact::all();
//       return view ('contacts.index')->with('contacts', $contacts);
//     }


//     public function create()
//     {
//         return view('contacts.create');
//     }


//     public function store(Request $request)
//     {
//         $input = $request->all();
//         Contact::create($input);
//         return redirect('contact')->with('flash_message', 'Contact Addedd!');
//     }


//     public function show($id)
//     {
//         $contact = Contact::find($id);
//         return view('contacts.show')->with('contacts', $contact);
//     }


//     public function edit($id)
//     {
//         $contact = Contact::find($id);
//         return view('contacts.edit')->with('contacts', $contact);
//     }


//     public function update(Request $request, $id)
//     {
//         $contact = Contact::find($id);
//         $input = $request->all();
//         $contact->update($input);
//         return redirect('contact')->with('flash_message', 'Contact Updated!');
//     }


//     public function destroy($id)
//     {
//         Contact::destroy($id);
//         return redirect('contact')->with('flash_message', 'Contact deleted!');
//     }
//  }
// }

