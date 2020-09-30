<?php

Breadcrumbs::register('admin.bbs.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(trans('menus.backend.bbs.management'), route('admin.bbs.index'));
});

Breadcrumbs::register('admin.bbs.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.bbs.index');
    $breadcrumbs->push(trans('menus.backend.bbs.create'), route('admin.bbs.create'));
});

Breadcrumbs::register('admin.bbs.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.bbs.index');
    $breadcrumbs->push(trans('menus.backend.bbs.edit'), route('admin.bbs.edit', $id));
});
