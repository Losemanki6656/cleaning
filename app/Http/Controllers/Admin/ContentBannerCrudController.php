<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ContentBannerRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;


class ContentBannerCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;


    public function setup()
    {
        CRUD::setModel(\App\Models\ContentBanner::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/content-banner');
        CRUD::setEntityNameStrings('content banner', 'content banners');
    }

    protected function setupListOperation()
    {

        $this->crud->addColumns(['label','name','photo']);

    }


    protected function setupCreateOperation()
    {
        $this->crud->setValidation(ContentBannerRequest::class);

        $this->crud->addField([
            'name' => 'label',
            'type' => 'text',
            'label' => "Label"
        ]);
        $this->crud->addField([
            'name' => 'name',
            'type' => 'text',
            'label' => "Name"
        ]);

        $this->crud->addField([
            'name' => 'photo',
            'type' => 'image',
            'label' => "Photo",
            'crop' => true
        ]);

    }


    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
