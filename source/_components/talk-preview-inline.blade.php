<div class="flex">
    <div class="w-full mb-4">
        <p class="text-gray-700 font-medium my-2">
            {{ $talk->getDate()->format('F j, Y') }}
        </p>

        <h2 class="text-3xl mt-0">
            <a
                href="{{ $talk->getUrl() }}"
                title="Read more 1 - {{ $talk->title }}"
                class="text-gray-900 font-extrabold"
            >{{ $talk->title }} </a>
        </h2>

        <p class="mb-4 mt-0">{!! $talk->getExcerpt(200) !!}</p>


        <a
            href="{{ $talk->getUrl() }}"
            title="Read more 2 - {{ $talk->title }}"
            class="uppercase font-semibold tracking-wide mb-2"
        >Read </a>
    </div>
    <div class="w-168">
        <img src="/assets/img/about.png"
            alt="About image"
            class="rounded-full w-168 object-contain bg-contain mx-auto md:float-right my-6 md:ml-10">
    </div>
</div>
