<?php

namespace App\Listeners\Backend\Blog1Tags;

/**
 * Class Blog1TagEventListener.
 */
class Blog1TagEventListener
{
    /**
     * @var string
     */
    private $history_slug = 'Blog1Tag';

    /**
     * @param $event
     */
    public function onCreated($event)
    {
        history()->withType($this->history_slug)
            ->withEntity($event->blog1tag->id)
            ->withText('trans("history.backend.blog1tags.created") <strong>'.$event->blog1tag->name.'</strong>')
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
            ->withEntity($event->blog1tag->id)
            ->withText('trans("history.backend.blog1tags.updated") <strong>'.$event->blog1tag->name.'</strong>')
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
            ->withEntity($event->blog1tag->id)
            ->withText('trans("history.backend.blog1tags.deleted") <strong>'.$event->blog1tag->name.'</strong>')
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
            \App\Events\Backend\Blog1Tags\Blog1TagCreated::class,
            'App\Listeners\Backend\Blog1Tags\Blog1TagEventListener@onCreated'
        );

        $events->listen(
            \App\Events\Backend\Blog1Tags\Blog1TagUpdated::class,
            'App\Listeners\Backend\Blog1Tags\Blog1TagEventListener@onUpdated'
        );

        $events->listen(
            \App\Events\Backend\Blog1Tags\Blog1TagDeleted::class,
            'App\Listeners\Backend\Blog1Tags\Blog1TagEventListener@onDeleted'
        );
    }
}
