<?php

Breadcrumbs::register('admin.blog1Categories.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(trans('menus.backend.blog1categories.management'), route('admin.blog1Categories.index'));
});

Breadcrumbs::register('admin.blog1Categories.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.blog1Categories.index');
    $breadcrumbs->push(trans('menus.backend.blog1categories.create'), route('admin.blog1Categories.create'));
});

Breadcrumbs::register('admin.blog1Categories.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.blog1Categories.index');
    $breadcrumbs->push(trans('menus.backend.blog1categories.edit'), route('admin.blog1Categories.edit', $id));
});
