<?php

namespace App\Http\Controllers;


use Workshop\Domain\Repositories\ItemRepositoryInterface;

class ItemController
{
    public function __invoke(ItemRepositoryInterface $itemRepository)
    {
        $items = $itemRepository->all();

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

        return view('workshop::index')->with(compact('items', 'data'));
    }
}
