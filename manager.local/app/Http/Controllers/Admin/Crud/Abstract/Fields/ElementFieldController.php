<?php

namespace App\Http\Controllers\Admin\Crud\Abstract\Fields;

use App\Admin\Crud\Fields\ElementListInterface;
use App\Http\Controllers\Controller;

class ElementFieldController extends Controller
{
    private const ITEM_TITLE = 'title';
    private Controller $controller;
    public function __construct(
        string $controller
    ) {
        $this->controller = new $controller;
    }

    public function getItemsArray(): array
    {
        return $this->controller->list();
    }

    public function getItemTitleFieldKey(): string
    {
        return static::ITEM_TITLE;
    }
}
