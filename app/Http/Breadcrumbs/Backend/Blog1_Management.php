<?php

Breadcrumbs::register('admin.blog1s.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(trans('menus.backend.blog1s.management'), route('admin.blog1s.index'));
});

Breadcrumbs::register('admin.blog1s.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.blog1s.index');
    $breadcrumbs->push(trans('menus.backend.blog1s.create'), route('admin.blog1s.create'));
});

Breadcrumbs::register('admin.blog1s.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.blog1s.index');
    $breadcrumbs->push(trans('menus.backend.blog1s.edit'), route('admin.blog1s.edit', $id));
});
