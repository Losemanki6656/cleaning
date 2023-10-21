<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ApplicationRequest;
use App\Models\Application;
use App\Models\ApplicationFile;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use http\Env\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class ApplicationCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;


    public function setup()
    {
        CRUD::setModel(\App\Models\Application::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/application');
        CRUD::setEntityNameStrings('application', 'applications');
    }


    protected function setupListOperation()
    {
        $this->crud->addColumns([
            [
                'name' => 'name',
                'label' => __('Name')
            ],
            [
                'name' => 'phone',
                'label' => __('Phone'),
            ],
            [
                'name' => 'files',
                'label' => __('Files'),
                'type' => 'view',
                'view' => 'backpack::crud.files',
            ],
            [
                'name' => 'address',
                'label' => __('Address'),
            ],
            [
                'name' => 'app_date',
                'label' => __('App Date'),
            ],
            [
                'name' => 'status',
                'label' => __('Status'),
            ],
            [
                'name' => 'description',
                'label' => __('Description'),
            ],
        ]);


    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(ApplicationRequest::class);


        CRUD::field('name');
        CRUD::field('phone');
        CRUD::field('address');
        CRUD::field('status');
        CRUD::field('description');

    }


    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    public function confirm_application(\Illuminate\Http\Request $request)
    {
        return redirect()->back();
    }

    public function sendMessage(\Illuminate\Http\Request $request)
    {

        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'data' => 'required',
        ]);

        $application = Application::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'app_date' => $request->data
        ]);

        foreach (json_decode($request->photos) as $photo) {
//            $folderPath = "images/application-files/";
//
//            $fileName = time() . $photo->getClientOriginalName();
//            Storage::disk('public')->put($folderPath . $fileName, File::get($photo));

            $file = ApplicationFile::query()
                ->where('file','like', '%'. $photo . '%')
                ->first();
            $file->application_id = $application->id;
            $file->save();

//            ApplicationFile::create([
//                'application_id' => $application->id,
//                'file' => 'storage/' . $folderPath . $fileName
//            ]);
        }

        return response()->json([
            'message' => 'Your application has been accepted!'
        ]);
    }

    public function sendFile(\Illuminate\Http\Request $request)
    {
        $folderPath = "images/application-files/";

        $fileName = time() . $request->photo->getClientOriginalName();
        Storage::disk('public')->put($folderPath . $fileName, File::get($request->photo));

        ApplicationFile::create([
            'file' => 'storage/' . $folderPath . $fileName
        ]);

        return response()->json([
            'message' => 'storage/' . $folderPath . $fileName
        ]);
    }
}
