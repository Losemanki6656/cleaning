<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ApplicationFileRequest;
use App\Models\Application;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ApplicationFileCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ApplicationFileCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
//    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
//    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
//    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;


    public function setup()
    {
        CRUD::setModel(\App\Models\ApplicationFile::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/application-file');
        CRUD::setEntityNameStrings('application file', 'application files');

        $this->crud->addFilter([
            'name'  => 'application_filter',
            'type'  => 'select2',
            'label' => __('Application')
        ], function () {
            return Application::all()
                ->pluck('name', 'id')
                ->toArray();
        }, function ($value) {
            $this->crud->addClause('where', 'application_id', $value);
        });

    }


    protected function setupListOperation()
    {
        $this->crud->addColumns([
            [
                'name' => 'application_id',
                'label' => __('Application'),
                'type' => 'model_function',
                'function_name' => 'application_name'
            ],
            [
                'name' => 'file',
                'label' => __('File'),
                'type' => 'image'
            ], [
                'name' => 'created_at',
                'label' => __('created_at'),
            ], [
                'name' => 'updated_at',
                'label' => __('updated_at'),
            ],
        ]);

    }


    protected function setupCreateOperation()
    {
        CRUD::setValidation(ApplicationFileRequest::class);

        CRUD::field('id');
        CRUD::field('application_id');
        CRUD::field('file');
        CRUD::field('created_at');
        CRUD::field('updated_at');
        CRUD::field('deleted_at');

    }


    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
