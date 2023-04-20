<?php

namespace App\Http\Controllers;
// use App\Http\Controllers\Excel;
use App\Imports\ImportUser;
use App\Exports\ExportUser;
use App\Models\product;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use DB;

class productController extends Controller
{

    public function index()
    {
        $products = product::all();
      return view ('contacts.index')->with('products', $products);
    }


    public function create()
    {
        return view('contacts.create');
    }


    public function store(Request $request)
    {
        $input = $request->all();
        if($request->input('product_img') == NULL) {
            $input['product_img'] = 'default.jpg';
        }
        product::create($input);
        return redirect('contact')->with('flash_message', 'product Addedd!');
    }


    public function show($id)
    {
        $product = product::find($id);
        return view('contacts.show')->with('products', $product);
    }


    public function edit($id)
    {
        $product = product::find($id);
        if($product->product_img == NULL || $product->product_img == 'default.jpg') {
            $product->product_img = 'default.jpg';
        }
        return view('contacts.edit')->with('products', $product);
    }


    public function update(Request $request, $id)
    {
        $product = product::find($id);
        $input = $request->all();
        if($request->input('product_img') == NULL) {
            $input['product_img'] = 'default.jpg';
        }
        $product->update($input);
        return redirect('contact')->with('flash_message', 'product Updated!');
    }


    public function destroy($id)
    {
        product::destroy($id);
        return redirect('contact')->with('flash_message', 'product deleted!');
    }

    public function trunc()
    {
        DB::table('products')->truncate();

        return redirect('contact')->with('flash_message', 'Reset successed!');
    }

// import and export

public function importView(Request $request){
    return view('contacts.importFile');
}

public function import(Request $request){
    if ($request->file('file') == null)
    {
        $file = "";
    }else

    Excel::import(new ImportUser, $request->file('file')->store('files'));
    return redirect()->back();
}

public function exportUsers(Request $request){
    return Excel::download(new ExportUser, 'users.xlsx');
}


}

