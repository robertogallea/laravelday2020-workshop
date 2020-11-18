<?php


namespace Workshop\Ui\Presenters;


use Workshop\Core\Presenters\ItemPresenterInterface;

class HtmlItemPresenter implements ItemPresenterInterface
{

    public function index(array $data)
    {
        return view('workshop::index')->with($data);
    }
}
