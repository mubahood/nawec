<?php

namespace App\Admin\Controllers;

use App\Models\PowerStation;
use Encore\Admin\Form;
use Encore\Admin\Http\Controllers\AdminController;
use Encore\Admin\Show;
use Encore\Admin\Table;

class PowerStationController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'PowerStation';

    /**
     * Make a table builder.
     *
     * @return Table
     */
    protected function table()
    {
        $table = new Table(new PowerStation());

        $table->column('id', __('Id'));
        $table->column('created_at', __('Created at'));
        $table->column('updated_at', __('Updated at'));
        $table->column('administrator_id', __('Administrator id'));
        $table->column('name', __('Name'));
        $table->column('address', __('Address'));
        $table->column('details', __('Details'));
        $table->column('photo', __('Photo'));

        return $table;
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
