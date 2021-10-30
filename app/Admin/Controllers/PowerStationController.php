<?php

namespace App\Admin\Controllers;

use App\Models\PowerStation;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PowerStationController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'PowerStation';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new PowerStation());

        $grid->column('id', __('Id'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('administrator_id', __('Administrator id'));
        $grid->column('name', __('Name'));
        $grid->column('address', __('Address'));
        $grid->column('details', __('Details'));
        $grid->column('photo', __('Photo'));

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
        $show = new Show(PowerStation::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('administrator_id', __('Administrator id'));
        $show->field('name', __('Name'));
        $show->field('address', __('Address'));
        $show->field('details', __('Details'));
        $show->field('photo', __('Photo'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new PowerStation());

        $form->number('administrator_id', __('Administrator id'));
        $form->textarea('name', __('Name'));
        $form->textarea('address', __('Address'));
        $form->textarea('details', __('Details'));
        $form->textarea('photo', __('Photo'));

        return $form;
    }
}
