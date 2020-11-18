<?php


namespace App\Presenters;


class JsonItemPresenter implements \Workshop\Core\Presenters\ItemPresenterInterface
{

    public function index(array $data)
    {
        return response()->json($data);
    }
}
