<div class="md:col-span-1 flex justify-between lg:w-fit">
    <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium text-white">{{ $title }}</h3>

        <p class="mt-1 text-sm text-white">
            {{ $description }}
        </p>
    </div>

    <div class="px-4 sm:px-0">
        {{ $aside ?? '' }}
    </div>
</div>