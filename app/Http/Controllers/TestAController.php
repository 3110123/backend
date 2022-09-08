<?php

namespace App\Http\Controllers;

use App\Http\Requests\Item\CreateRequest;
use Illuminate\Http\Request;
use App\Models\Item;

class TestAController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(CreateRequest $request)
    {
        $item = new Item;
        $item->name = $request->name();
        $item->price = $request->price();
        $item->save();

        return $item;
    }
}
