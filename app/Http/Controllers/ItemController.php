<?php
namespace App\Http\Controllers;
use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
    public function create()
    {
        return view('items.create'); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
        ]);

        Item::create($request->only(['name', 'price', 'description']));
        

        return redirect()->back()->with('success', 'Item added successfully!');
    }

    public function index()
    {
        $items = Item::all();
        return view('item', compact('items'));
    }
}
