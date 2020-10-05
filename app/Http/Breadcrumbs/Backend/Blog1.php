<?php

Breadcrumbs::register('admin.blog1categories.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(trans('menus.backend.blog1_management.management'), route('admin.blog1categories.index'));
});

Breadcrumbs::register('admin.blog1categories.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.blog1categories.index');
    $breadcrumbs->push(trans('menus.backend.blog1_management.create'), route('admin.blog1categories.create'));
});

Breadcrumbs::register('admin.blog1categories.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.blog1categories.index');
    $breadcrumbs->push(trans('menus.backend.blog1_management.edit'), route('admin.blog1categories.edit', $id));
});
