<?php


namespace App\Presenters;


use Illuminate\Support\Collection;
use Workshop\Core\Presenters\ItemPresenterInterface;

class XMLItemPresenter implements ItemPresenterInterface
{

    public function index(Collection $items)
    {
        $response = '';
        $response .= '<items>';

        collect($items)->each(function ($item) use (&$response) {
            $response .= '<name>' . $item->name . '</name>';
        });

        $response .= '</items>';

        return response($response, 200, [
            'Content-Type' => 'application/xml'
        ]);
    }
}
