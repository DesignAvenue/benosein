<?php

namespace App\Admin\Controllers;

use App\Models\ourwork;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class OurWorkController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'ourwork';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ourwork());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('image_path', __('Image path'));
        $grid->column('description', __('Description'));
        $grid->column('type', __('Type'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(ourwork::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('image_path', __('Image path'));
        $show->field('description', __('Description'));
        $show->field('type', __('Type'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ourwork());

        $form->text('title', __('Title'))->required();
        $form->file('image_path', __('Image path'))->required();
        $form->textarea('description', __('Description'))->required();
        $form->select('type', __('Type'))->options([1=>'Video', 2=>'Image'])->required();
        

        return $form;
    }
}
