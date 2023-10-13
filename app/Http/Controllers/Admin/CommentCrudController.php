<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CommentCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CommentCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Comment::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/comment');
        CRUD::setEntityNameStrings('comment', 'comments');
    }


    protected function setupListOperation()
    {

        CRUD::column('name');
        CRUD::column('comment');
        CRUD::column('rate');
        CRUD::column('status');
    }


    protected function setupCreateOperation()
    {
        CRUD::setValidation(CommentRequest::class);


        CRUD::field('name');
        CRUD::field('comment');
        CRUD::field('rate');
        CRUD::field('status');
    }


    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    public function sendComment(\Illuminate\Http\Request $request)
    {

        Comment::create([
            'name' => $request->comment_name,
            'comment' => $request->comment_comment,
            'rate' => $request->rate
        ]);

        return response()->json([
            'message' => 'Ваша заявка принята!'
        ]);
    }
}
