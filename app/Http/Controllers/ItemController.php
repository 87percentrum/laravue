<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    // all items
    public function index(): array
    {
        $items = item::all()->toArray();
        return array_reverse($items);
    }

    // add item
    public function add(Request $request): JsonResponse
    {
        $item = new item([
            'title' => $request->input('title'),
            'description' => $request->input('description')
        ]);
        $item->save();

        return response()->json('The item successfully added');
    }

    // edit item
    public function edit($id): JsonResponse
    {
        $item = item::find($id);
        return response()->json($item);
    }

    // update item
    public function update($id, Request $request): JsonResponse
    {
        $item = item::find($id);
        $item->update($request->all());

        return response()->json('The item successfully updated');
    }

    // delete item
    public function delete($id): JsonResponse
    {
        $item = item::find($id);
        $item->delete();

        return response()->json('The item successfully deleted');
    }
}
