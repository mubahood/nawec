<?php

namespace App\Admin\Controllers;

use App\Models\ContractRecord;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ContractRecordController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'ContractRecord';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ContractRecord());

        $grid->column('id', __('Id'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('contract_id', __('Contract id'));
        $grid->column('Encore\Admin\Auth\Database\Administrator', __('Encore\Admin\Auth\Database\Administrator'));
        $grid->column('title', __('Title'));
        $grid->column('fuel_type', __('Fuel type'));
        $grid->column('quantity', __('Quantity'));
        $grid->column('details', __('Details'));
        $grid->column('delivery_note', __('Delivery note'));
        $grid->column('goods_received_note', __('Goods received note'));

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
        $show = new Show(ContractRecord::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('contract_id', __('Contract id'));
        $show->field('Encore\Admin\Auth\Database\Administrator', __('Encore\Admin\Auth\Database\Administrator'));
        $show->field('title', __('Title'));
        $show->field('fuel_type', __('Fuel type'));
        $show->field('quantity', __('Quantity'));
        $show->field('details', __('Details'));
        $show->field('delivery_note', __('Delivery note'));
        $show->field('goods_received_note', __('Goods received note'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ContractRecord());

        $form->number('contract_id', __('Contract id'));
        $form->textarea('Encore\Admin\Auth\Database\Administrator', __('Encore\Admin\Auth\Database\Administrator'));
        $form->textarea('title', __('Title'));
        $form->textarea('fuel_type', __('Fuel type'));
        $form->textarea('quantity', __('Quantity'));
        $form->textarea('details', __('Details'));
        $form->textarea('delivery_note', __('Delivery note'));
        $form->textarea('goods_received_note', __('Goods received note'));

        return $form;
    }
}
