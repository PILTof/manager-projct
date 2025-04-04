<?php

namespace App\Admin\Crud\Fields;

interface ElementListInterface
{
    /**
     * Получить элемент по id
     * @param string|int $itemId
     * @return array
     */
    public function getItem(string|int $itemId):array;
    /**
     * Получить массив элементов по списку id
     * @param array<mixed, integer> $ids
     * @return array
     */
    public function getItemsArray(array $ids):array;
}
