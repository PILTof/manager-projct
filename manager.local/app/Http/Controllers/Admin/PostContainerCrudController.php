<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PostContainerRequest;
use App\Models\PostContainer;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Http\Request;

/**
 * Class PostContainerCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class PostContainerCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\PostContainer::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/post-container');
        CRUD::setEntityNameStrings('post container', 'post containers');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::setFromDb(); // set columns from db columns.

        /**
         * Columns can be defined using the fluent syntax:
         * - CRUD::column('price')->type('number');
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(PostContainerRequest::class);
        CRUD::setFromDb(); // set fields from db columns.
        
        CRUD::field('logo')->remove();
        CRUD::field([
            'name' => 'logo',
            'label' => 'Logo',
            'type' => 'file_preview',
            'img-style' => 'max-height: 200px;max-width:200px;'
        ])->withFiles([
            'disk' => 'public',
            'path' => 'uploads',
            'uploader' => \Backpack\CRUD\app\Library\Uploaders\SingleFile::class,
        ]);

        CRUD::field('banner')->remove();
        CRUD::field([
            'name' => 'banner',
            'type' => 'file_preview'
        ])->withFiles([
            'disk' => 'public',
            'path' => 'uploads',
            'uploader' => \Backpack\CRUD\app\Library\Uploaders\SingleFile::class,
        ]);;
        /**
         * Fields can be defined using the fluent syntax:
         * - CRUD::field('price')->type('number');
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
