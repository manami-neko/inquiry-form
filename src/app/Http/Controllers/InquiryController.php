<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;
use App\Http\Requests\InquiryRequest;
use App\Models\Item;

class InquiryController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('index',compact('items'));
    }

    public function confirm(InquiryRequest $request)
    {
        $data = $request->only('name','email','tel','content','item_id');
        $item = Item::find($request->item_id);
        // dd($item);
        return view('confirm', compact('data', 'item'));
    }

    public function store(Request $request)
    {
        $data = $request->only('name','email','tel','content','item_id');
        Inquiry::create($data);
        return view('thanks');
    }

    public function list(Request $request)
    {
        $inquires = Inquiry::all();
        $data = $request->only('name','email','item_id');
        $item = Item::find($request->item_id);

        return view('list',compact('inquires'));
    }
}
