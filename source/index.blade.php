@extends('_layouts.main')

@section('body')
    <h1 class="text-cadmiumViolet-600">
        Hello I'm Rissa
    </h1>
    <h2>I'm a full-stack software developer, public speaker, and mentor who is taking programming to new heights!</h2>
    <img src="/assets/img/Hawaii.jpeg"
        alt="Snow acro photo"
        class="flex h-full w-full rounded-lg bg-contain mx-auto md:float-right my-6 md:ml-10">
    <h2 class="text-cadmiumViolet-600">Featured Talks</h2>
    @foreach ($talks->where('featured', true) as $featuredTalk)
        <div class="w-full mb-6">
            {{-- @if ($featuredPost->cover_image)
                <img src="{{ $featuredPost->cover_image }}" alt="{{ $featuredPost->title }} cover image" class="mb-6">
            @endif --}}

            <p class="text-gray-700 font-medium my-2">
                {{ $featuredTalk->getDate()->format('F j, Y') }}
            </p>

            <h2 class="text-3xl mt-0">
                <a href="{{ $featuredTalk->getUrl() }}" title="Read {{ $featuredTalk->title }}" class="text-gray-900 font-extrabold">
                    {{ $featuredTalk->title }}
                </a>
            </h2>

            <p class="mt-0 mb-4">{!! $featuredTalk->getExcerpt() !!}</p>

            <a href="{{ $featuredTalk->getUrl() }}" title="Read - {{ $featuredTalk->title }}" class="uppercase tracking-wide mb-4">
                Read More
            </a>
        </div>

        @if (! $loop->last)
            <hr class="border-b border-gray-500 my-6">
        @endif
    @endforeach

    {{-- @include('_components.newsletter-signup') --}}

    @foreach ($talks->where('featured', false)->take(6)->chunk(2) as $row)
        <div class="flex flex-col md:flex-row md:-mx-6">
            @foreach ($row as $talk)
                <div class="w-full md:w-1/2 md:mx-6">
                    @include('_components.talk-preview-inline')
                </div>

                @if (! $loop->last)
                    <hr class="block md:hidden w-full border-b mt-2 mb-6">
                @endif
            @endforeach
        </div>

        @if (! $loop->last)
            <hr class="w-full border-b mt-2 mb-6">
        @endif
    @endforeach
@stop
