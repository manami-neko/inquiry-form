<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;
use App\Http\Requests\InquiryRequest;

class InquiryController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(InquiryRequest $request)
    {
        $data = $request->only('name','email','tel','content');
        // Inquiry::find($request->id)->confirm($form);

        return view('confirm', compact('data'));
    }

    public function store(Request $request)
    {
        $data = $request->only('name','email','tel','content');
        Inquiry::create($data);
        return view('thanks');
    }

    // public function update(InquiryRequest $request)
    // {
    //     $data = $request->only('name','email','tel','content');
    //     Inquiry::find($request->id)->update($form);

    //     return redirect('/');
    // }
}
