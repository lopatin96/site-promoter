<div>
    <h3 class="mb-5 px-5 sm:px-0 sm:text-lg font-semibold">
        {{ __('laravel-site-promoter::common.title') }}
    </h3>

    <div class="grid md:grid-cols-{{ count(config('laravel-site-promoter.websites')) }} gap-4">
        @foreach(config('laravel-site-promoter.websites') as $website => $data)
            <x-laravel-ui-components::banner
                :title="__('laravel-site-promoter::common.' . $website . '.title')"
                :button="__('laravel-site-promoter::common.' . $website . '.button')"
                href="{{ config('laravel-site-promoter.websites.' . $website . '.url') }}/{{ auth()->user()->locale ?? '' }}?ref=1"
                color="{{ config('laravel-site-promoter.websites.' . $website . '.color') }}"
            />
        @endforeach
    </div>
</div>
