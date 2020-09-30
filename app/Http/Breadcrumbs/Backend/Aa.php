<?php

Breadcrumbs::register('admin.aas.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(trans('menus.backend.aas.management'), route('admin.aas.index'));
});

Breadcrumbs::register('admin.aas.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.aas.index');
    $breadcrumbs->push(trans('menus.backend.aas.create'), route('admin.aas.create'));
});

Breadcrumbs::register('admin.aas.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.aas.index');
    $breadcrumbs->push(trans('menus.backend.aas.edit'), route('admin.aas.edit', $id));
});
