<?php

namespace App\Http\Controllers;


use Workshop\Domain\Models\Item;

class ItemController
{
    public function __invoke()
    {
        $items = Item::all();

        $count = $items->count();
        $last_update = $items
            ->sortByDesc
            ->created_at
            ->first()
            ->created_at
            ->format('d/m/Y');

        $data = [
            'Numero elementi' => $count,
            'Ultimo aggiornamento' => $last_update,
        ];

        return view('index')->with(compact('items', 'data'));
    }
}
