<?php


namespace Workshop\Domain\Repositories;


use Workshop\Domain\Models\Item;

class DBItemRepository implements ItemRepositoryInterface
{
    public function all()
    {
        return Item::all();
    }
}
