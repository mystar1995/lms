<?php

Breadcrumbs::register('admin.fffs.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(trans('menus.backend.fffs.management'), route('admin.fffs.index'));
});

Breadcrumbs::register('admin.fffs.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.fffs.index');
    $breadcrumbs->push(trans('menus.backend.fffs.create'), route('admin.fffs.create'));
});

Breadcrumbs::register('admin.fffs.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.fffs.index');
    $breadcrumbs->push(trans('menus.backend.fffs.edit'), route('admin.fffs.edit', $id));
});
