<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Crud\Ship\Fields\PostContainerController;
use App\Http\Requests\PostsRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Backpack\CRUD\app\Library\Widget;
use Illuminate\Support\Facades\Storage;

/**
 * Class PostsCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class PostsCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Posts::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/posts');
        CRUD::setEntityNameStrings('posts', 'posts');
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
        CRUD::setValidation(PostsRequest::class);
        CRUD::setFromDb(); // set fields from db columns.
        CRUD::field('preview_image')?->remove();
        CRUD::field([
            'name' => 'preview_image',
            'label' => 'Preview Image',
            'type' => 'file_preview'
        ])->withFiles([
            'disk' => 'public',
            'path' => 'uploads',
            'uploader' => \Backpack\CRUD\app\Library\Uploaders\SingleFile::class,
        ]);
        CRUD::field('preview_text')?->remove();
        CRUD::field('post_container')?->remove();
        CRUD::addField([
            'name' => 'post_container',
            'type' => 'element_list',
            'controller' => PostContainerController::class
        ]);
        CRUD::addField([
            'name' => 'preview_text',
            'type' => 'rich_text'
        ]);
        CRUD::field('detail_text')?->remove();
        CRUD::addField([
            'name' => 'detail_text',
            'type' => 'rich_text'
        ]);
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
