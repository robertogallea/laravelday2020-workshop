<?php


namespace Workshop\DBAccess\Repositories;


use Workshop\Domain\Models\Item;
use Workshop\Domain\Repositories\ItemRepositoryInterface;

class DBItemRepository implements ItemRepositoryInterface
{
    public function all()
    {
        return Item::all();
    }
}
