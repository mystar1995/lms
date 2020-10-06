<?php

Breadcrumbs::register('admin.blog1Tags.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(trans('menus.backend.blog1tags.management'), route('admin.blog1Tags.index'));
});

Breadcrumbs::register('admin.blog1Tags.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.blog1Tags.index');
    $breadcrumbs->push(trans('menus.backend.blog1tags.create'), route('admin.blog1Tags.create'));
});

Breadcrumbs::register('admin.blog1Tags.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.blog1Tags.index');
    $breadcrumbs->push(trans('menus.backend.blog1tags.edit'), route('admin.blog1Tags.edit', $id));
});
