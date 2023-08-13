<div class="flex flex-wrap w-full {{ $class }}">
    <nav class="flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3 ">
            @foreach ($breadcrumbs as $breadcrumb)
                @if($breadcrumb['url'])
                    <li>
                        <div class="flex items-center">
                            <a href="{{ $breadcrumb['url'] }}" class="body-font dark:text-gray-400 dark:hover:text-white">{{ $breadcrumb['name'] }}</a>
                        </div>
                    </li>
                @else
                    <li aria-current="page">
                        <div class="flex items-center">
                            <a class="text-gray-500 dark:text-gray-400" href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['name'] }}</a>
                        </div>
                    </li>
                @endif
                @if(!$loop->last)
                    <li class="flex items-center pt-1">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </li>
                @endif
            @endforeach
        </ol>
    </nav>
</div>