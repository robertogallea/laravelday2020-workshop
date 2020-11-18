<?php


namespace Workshop\Ui\Presenters;


use Illuminate\Support\Collection;
use Workshop\Core\Presenters\ItemPresenterInterface;

class HtmlItemPresenter implements ItemPresenterInterface
{

    public function index(Collection $items)
    {
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
