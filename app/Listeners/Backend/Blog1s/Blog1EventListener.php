<?php

namespace App\Listeners\Backend\Blog1s;

/**
 * Class Blog1EventListener.
 */
class Blog1EventListener
{
    /**
     * @var string
     */
    private $history_slug = 'Blog1';

    /**
     * @param $event
     */
    public function onCreated($event)
    {
        history()->withType($this->history_slug)
            ->withEntity($event->blog1s->id)
            ->withText('trans("history.backend.blog1s.created") <strong>'.$event->blog1s->name.'</strong>')
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
            ->withEntity($event->blog1s->id)
            ->withText('trans("history.backend.blog1s.updated") <strong>'.$event->blog1s->name.'</strong>')
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
            ->withEntity($event->blog1s->id)
            ->withText('trans("history.backend.blog1s.deleted") <strong>'.$event->blog1s->name.'</strong>')
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
            \App\Events\Backend\Blog1s\Blog1Created::class,
            'App\Listeners\Backend\Blog1s\Blog1EventListener@onCreated'
        );

        $events->listen(
            \App\Events\Backend\Blog1s\Blog1Updated::class,
            'App\Listeners\Backend\Blog1s\Blog1EventListener@onUpdated'
        );

        $events->listen(
            \App\Events\Backend\Blog1s\Blog1Deleted::class,
            'App\Listeners\Backend\Blog1s\Blog1EventListener@onDeleted'
        );
    }
}
