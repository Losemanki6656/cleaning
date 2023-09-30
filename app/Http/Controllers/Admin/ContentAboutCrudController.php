<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ContentAboutRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ContentAboutCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ContentAboutCrudController extends CrudController
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
        CRUD::setModel(\App\Models\ContentAbout::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/content-about');
        CRUD::setEntityNameStrings('content about', 'content abouts');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {

        $this->crud->addColumns(['title','block_quota','phone', 'year', 'title_year']);

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
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
        CRUD::setValidation(ContentAboutRequest::class);

        $this->crud->addField([
            'name' => 'title',
            'type' => 'text',
            'label' => "Title"
        ]);
        $this->crud->addField([
            'name' => 'block_quota',
            'type' => 'text',
            'label' => "Block quota"
        ]);

        $this->crud->addField([
            'name' => 'about',
            'type' => 'textarea',
            'label' => "About text"
        ]);

        $this->crud->addField([
            'name' => 'phone',
            'type' => 'text',
            'label' => "Phone"
        ]);

        $this->crud->addField([
            'name' => 'year',
            'type' => 'number',
            'label' => "Year",
            'wrapperAttributes' => [
                'class' => 'form-group col-md-4'
            ],
        ]);
        $this->crud->addField([
            'name' => 'title_year',
            'type' => 'text',
            'label' => "Title year",
            'wrapperAttributes' => [
                'class' => 'form-group col-md-8'
            ],
        ]);


        $this->crud->addField([
            'name' => 'from_time',
            'type' => 'time',
            'label' => "From time",
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6'
            ],
        ]);
        $this->crud->addField([
            'name' => 'to_time',
            'type' => 'time',
            'label' => "To time",
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6'
            ],
        ]);

        $this->crud->addField([
            'name' => 'address',
            'type' => 'text',
            'label' => "Address"
        ]);

        $this->crud->addField([
            'name' => 'logo',
            'type' => 'image',
            'label' => "Logo"
        ]);

        $this->crud->addField([
            'name' => 'photo',
            'type' => 'image',
            'label' => "Photo"
        ]);
        $this->crud->addField([
            'name' => 'circle_photo',
            'type' => 'image',
            'label' => "Circle photo"
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
