<?php

namespace App\Listeners\Backend\Blog1Categories;

/**
 * Class Blog1CategoryEventListener.
 */
class Blog1CategoryEventListener
{
    /**
     * @var string
     */
    private $history_slug = 'Blog1Category';

    /**
     * @param $event
     */
    public function onCreated($event)
    {
        history()->withType($this->history_slug)
            ->withEntity($event->blog1category->id)
            ->withText('trans("history.backend.blog1categories.created") <strong>'.$event->blog1category->name.'</strong>')
            ->withIcon('plus')
            ->withClass('bg-green')
            ->log1();
    }

    /**
     * @param $event
     */
    public function onUpdated($event)
    {
        history()->withType($this->history_slug)
            ->withEntity($event->blog1category->id)
            ->withText('trans("history.backend.blog1categories.updated") <strong>'.$event->blog1category->name.'</strong>')
            ->withIcon('save')
            ->withClass('bg-aqua')
            ->log1();
    }

    /**
     * @param $event
     */
    public function onDeleted($event)
    {
        history()->withType($this->history_slug)
            ->withEntity($event->blog1category->id)
            ->withText('trans("history.backend.blog1categories.deleted") <strong>'.$event->blog1category->name.'</strong>')
            ->withIcon('trash')
            ->withClass('bg-maroon')
            ->log1();
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param \Illuminate\Events\Dispatcher $events
     */
    public function subscribe($events)
    {
        $events->listen(
            \App\Events\Backend\Blog1Categories\Blog1CategoryCreated::class,
            'App\Listeners\Backend\Blog1Categories\Blog1CategoryEventListener@onCreated'
        );

        $events->listen(
            \App\Events\Backend\Blog1Categories\Blog1CategoryUpdated::class,
            'App\Listeners\Backend\Blog1Categories\Blog1CategoryEventListener@onUpdated'
        );

        $events->listen(
            \App\Events\Backend\Blog1Categories\Blog1CategoryDeleted::class,
            'App\Listeners\Backend\Blog1Categories\Blog1CategoryEventListener@onDeleted'
        );
    }
}
