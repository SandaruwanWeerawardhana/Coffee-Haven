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
            'name' => 'required|max:255',
            'price' => 'required|numeric',
        ]);

        Item::create($request->only(['name', 'price', 'description']));


        return redirect()->back()->with('success', 'Item added successfully!');
    }

//Update
    public function edit($id)
    {
        $item = Item::findOrFail($id);
        return view('items.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = Item::findOrFail($id);
        $item->update($request->all());

        return redirect()->route('items.index')->with('success', 'Item updated successfully');
    }

    public function index()
    {
        $items = Item::all();
        return view('item', compact('items'));
    }
}
