<?php


namespace Workshop\Core\Presenters;


use Illuminate\Support\Collection;

interface ItemPresenterInterface
{
    public function index(Collection $items);
}
