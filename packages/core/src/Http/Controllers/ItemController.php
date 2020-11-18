<?php

namespace Workshop\Core\Http\Controllers;


use Workshop\Core\Presenters\ItemPresenterInterface;
use Workshop\Domain\Repositories\ItemRepositoryInterface;

class ItemController
{
    public function __invoke(ItemRepositoryInterface $itemRepository, ItemPresenterInterface $itemPresenter)
    {
        $items = $itemRepository->all();

        return $itemPresenter->index($items);
    }
}
