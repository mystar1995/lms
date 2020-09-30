<?php

Breadcrumbs::register('admin.speakups.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(trans('menus.backend.speakups.management'), route('admin.speakups.index'));
});

Breadcrumbs::register('admin.speakups.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.speakups.index');
    $breadcrumbs->push(trans('menus.backend.speakups.create'), route('admin.speakups.create'));
});

Breadcrumbs::register('admin.speakups.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.speakups.index');
    $breadcrumbs->push(trans('menus.backend.speakups.edit'), route('admin.speakups.edit', $id));
});
