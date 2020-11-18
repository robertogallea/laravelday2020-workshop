<?php


namespace App\Presenters;


use Illuminate\Support\Collection;

class JsonItemPresenter implements \Workshop\Core\Presenters\ItemPresenterInterface
{

    public function index(Collection $items)
    {
        return response()->json($items);
    }
}
