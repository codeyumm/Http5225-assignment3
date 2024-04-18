<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;

use resources\views;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        return view('items.userindex', ['items' => Item::all()]);
    }


    public function index()
    {
        return view('items.index', ['items' => Item::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreItemRequest $request)
    {
        Item::create($request->validated());Session::flash('success', 'Item added successfully');return redirect() -> route('items.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        return view('items.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        return view('items.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateItemRequest $request, Item $item)
    {
        $item->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        $item = Item::withTrashed() -> where('id', $id) -> first();$item -> forceDelete();Session::Flash('success', 'Student deleted successfully');return redirect() -> route('items.index');
    }

    public function trash($id)
    {
        Item::Destroy($id);
        Session::Flash('success', 'Item trashed successfully');
        return redirect()->route('items.index');
    }
}
