<?php


namespace App\Presenters;


use Workshop\Core\Presenters\ItemPresenterInterface;

class XMLItemPresenter implements ItemPresenterInterface
{

    public function index(array $data)
    {
        $response = '';
        $response .= '<items>';

        collect($data['items'])->each(function ($item) use (&$response) {
            $response .= '<name>' . $item->name . '</name>';
        });

        $response .= '</items>';

        return response($response, 200, [
            'Content-Type' => 'application/xml'
        ]);
    }
}
