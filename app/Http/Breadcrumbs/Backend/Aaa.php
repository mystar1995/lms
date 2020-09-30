<?php

Breadcrumbs::register('admin.aaas.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(trans('menus.backend.aaas.management'), route('admin.aaas.index'));
});

Breadcrumbs::register('admin.aaas.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.aaas.index');
    $breadcrumbs->push(trans('menus.backend.aaas.create'), route('admin.aaas.create'));
});

Breadcrumbs::register('admin.aaas.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.aaas.index');
    $breadcrumbs->push(trans('menus.backend.aaas.edit'), route('admin.aaas.edit', $id));
});
