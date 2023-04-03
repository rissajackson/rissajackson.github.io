---
title: Talks
description: The list of talks
pagination:
    collection: talks
    perPage: 6
---
@extends('_layouts.main')

@section('body')
    <h1>Talks</h1>

    <img src="/assets/img/about.png"
        alt="About image"
        class="flex rounded-full h-64 w-64 bg-contain mx-auto md:float-right my-6 md:ml-10">

    <h2><a href="https://www.youtube.com/watch?v=f4QShF42c6E&t=27156s&ab_channel=LaraconOnline">Laracon Online '22 - Is There Any Problem Git Interactive Rebase Can’t Solve?</a></h2>
    <p class="mb-6">Git rebase can be pretty intimidating, and even more so for a newer developer. However, it is much more approachable once you understand it better, and it can be extremely helpful in many situations. For example, did you know an interactive rebase can help you consolidate your commits and make your PRs the most popular on the block? Now no one has to know that you missed some linting fixes or broke CI in your first commit! In this talk, I’ll share tips and tricks to help you feel comfortable adding git rebase and git rebase Interactive to your toolbelt. Some of these tips are new to even experienced developers.</p>

    <h2>Longhorn PHP '22- Changing Your Story</h2>
    <p class="mb-6">We all have stories we tell ourselves, about who we are, and what we do, and we believe those stories are static. Stories like "I'm not good at backend", "I can't dance", or "I can’t figure out Vue". When we can recognize those stories, we can also recognize that we are the authors, and we can change our own stories. I had my own stories of "I can’t be a developer because I’m not technical or good enough at math", "I'm not graceful", and "I can’t do handstands, because I’m not an athlete". In this talk, I will share the framework I created to help with the process. Also, I will encourage people to rethink their personal stories and reimagine their capabilities not only as developers but also as humans with what I learned about changing my stories.</p>

    <h1>Podcasts</h1>
    <ul>
        <li >Twenty Percent Time - <a href="https://twentypercenttime.simplecast.com/episodes/rissa-jackson-life-as-a-junior-developer">Life as a Junior Developer</a></li>
        <li>Things Worth Learning - <a href="https://www.youtube.com/watch?v=vgnndyxqiKY">Changing Your Story</a></li>
    </ul>
@foreach ($pagination->items as $post)
        @include('_components.post-preview-inline')

        @if ($post != $pagination->items->last())
            <hr class="border-b my-6">
        @endif
    @endforeach

    @if ($pagination->pages->count() > 1)
        <nav class="flex text-base my-8">
            @if ($previous = $pagination->previous)
                <a
                    href="{{ $previous }}"
                    title="Previous Page"
                    class="bg-gray-200 hover:bg-gray-400 rounded mr-3 px-5 py-3"
                >&LeftArrow;</a>
            @endif

            @foreach ($pagination->pages as $pageNumber => $path)
                <a
                    href="{{ $path }}"
                    title="Go to Page {{ $pageNumber }}"
                    class="bg-gray-200 hover:bg-gray-400 rounded mr-3 px-5 py-3 {{ $pagination->currentPage == $pageNumber ? 'text-blue-600' : 'text-blue-700' }}"
                >{{ $pageNumber }}</a>
            @endforeach

            @if ($next = $pagination->next)
                <a
                    href="{{ $next }}"
                    title="Next Page"
                    class="bg-gray-200 hover:bg-gray-400 rounded mr-3 px-5 py-3"
                >&RightArrow;</a>
            @endif
        </nav>
    @endif
@stop
