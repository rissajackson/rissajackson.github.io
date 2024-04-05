<div class="flex">
    <div class="w-full mb-2 mr-4">
        <p class="text-gray-700 font-medium my-2">
            {{ $talk->getDate()->format('F j, Y') }}
        </p>

        <h2 class="text-3xl mt-0">
            <a
                href="{{ $talk->getUrl() }}"
                title="Read more - {{ $talk->title }}"
                class="text-gray-900 font-extrabold"
            >{{ $talk->title }} </a>
        </h2>

        <p class="mb-4 mt-0">{!! $talk->getExcerpt(200) !!}</p>


        <a
            href="{{ $talk->getUrl() }}"
            title="Read more - {{ $talk->title }}"
            class="uppercase font-semibold tracking-wide mb-2"
        >Read More</a>
    </div>
    <div class="w-168">
        @if ($talk->icon_image)
            <img src="{{ $talk->icon_image }}" alt="{{ $talk->title }} cover image" class="rounded-full object-contain mx-auto min-w-52 min-h-52 max-w-56 max-h-56 md:float-right my-6 md:ml-10">
        @else
            <img src="/assets/img/about.png"
                alt="About image"
                class="rounded-full w-168 object-contain bg-contain mx-auto max-w-52 max-h-52 md:float-right my-6 md:ml-10">
        @endif
    </div>
</div>
