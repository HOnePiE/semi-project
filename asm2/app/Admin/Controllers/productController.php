<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\product;

class productController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'product';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new product());

        $grid->column('id', __('Id'));
        $grid->column('productName', __('ProductName'));
        $grid->column('image')->image('','70','70');
        $grid->column('category', __('Category'));
        $grid->column('price', __('Price'));
        $grid->column('quantityOnStock', __('QuantityOnStock'));
        $grid->column('status', __('Status'));
        $grid->column('shortDes', __('ShortDes'));
        $grid->column('description', __('Description'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->fixColumns(3, -2);

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
        $show = new Show(product::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('productName', __('ProductName'));
        $show->field('image', __('Image'));
        $show->field('category', __('Category'));
        $show->field('price', __('Price'));
        $show->field('quantityOnStock', __('QuantityOnStock'));
        $show->field('status', __('Status'));
        $show->field('shortDes', __('ShortDes'));
        $show->field('description', __('Description'));
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
        $form = new Form(new product());

        $form->text('productName', __('ProductName'));
        $form->image('image', __('Image'));
        $form->text('category', __('Category'));
        $form->decimal('price', __('Price'));
        $form->text('quantityOnStock', __('QuantityOnStock'));
        $form->text('status', __('Status'));
        $form->text('shortDes', __('ShortDes'));
        $form->text('description', __('Description'));

        return $form;
    }
}
