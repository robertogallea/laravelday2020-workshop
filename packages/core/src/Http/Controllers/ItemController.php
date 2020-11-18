<?php

namespace Workshop\Core\Http\Controllers;


use Workshop\Core\Presenters\ItemPresenterInterface;
use Workshop\Domain\Repositories\ItemRepositoryInterface;

class ItemController
{
    public function __invoke(ItemRepositoryInterface $itemRepository, ItemPresenterInterface $itemPresenter)
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

        return $itemPresenter->index(compact('items', 'data'));
    }
}
