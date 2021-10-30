<?php

namespace App\Admin\Controllers;

use App\Models\Engine;
use App\Models\PowerStation;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class EngineController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Engine';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Engine());

        $grid->column('id', __('Id'));
        $grid->column('power_station_id', __('Power station id'));
        $grid->column('name', __('Name'));
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
        $show = new Show(Engine::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('power_station_id', __('Power station id'));
        $show->field('name', __('Name'));
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
        $form = new Form(new Engine());

        $form->text('name', __('Name'))
        ->required();
        $form->select('power_station_id', __('Power station'))
        ->options(PowerStation::all()->pluck('name', 'id'))
        ->required();
        $form->textarea('details', __('Details'));
        
        return $form;
    }
}
