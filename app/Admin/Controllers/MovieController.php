<?php

namespace App\Admin\Controllers;

use App\Movie;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class MovieController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Movie';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Movie());

        $grid->column('id', __('Id'));
        $grid->column('title', __('タイトル'));
        $grid->column('director', __('監督'));
        $grid->column('discribe', __('内容'));
        $grid->column('rate', __('評価'));
        $grid->column('released', __('公開/非公開'));
        $grid->column('release_at', __('公開年'));
        // $grid->column('created_at', __('Created at'));
        // $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Movie::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('タイトル'));
        $show->field('director', __('監督'));
        $show->field('discribe', __('内容'));
        $show->field('rate', __('評価'));
        $show->field('released', __('公開/非公開'));
        $show->field('release_at', __('公開年'));
        // $show->field('created_at', __('Created at'));
        // $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Movie());

        $form->text('title', __('タイトル'));
        $form->number('director', __('監督'));
        $form->text('discribe', __('内容'));
        $form->switch('rate', __('評価'));
        $form->text('released', __('公開/非公開'));
        $form->datetime('release_at', __('公開年'))->default(date('Y-m-d H:i:s'));

        return $form;
    }
}
