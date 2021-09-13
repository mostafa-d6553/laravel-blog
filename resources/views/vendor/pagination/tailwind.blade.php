@if ($paginator->hasPages())

<nav aria-label="">
  <ul class="pagination mx-auto d-flex">
  @if (!$paginator->onFirstPage())
    <li class="page-item">
      <a href="{{ $paginator->previousPageUrl() }}" class="page-link">Previous</a>
    </li>
    @endif
    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <span aria-disabled="true">
                                <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 cursor-default leading-5">{{ $element }}</span>
                            </span>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <span aria-current="page">
                                        <span class="page-link">{{ $page }}</span>
                                    </span>
                                @else
                                    <a href="{{ $url }}" class="page-link" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                        {{ $page }}
                                    </a>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
    @if ($paginator->hasMorePages())
    <li class="page-item">
      <a class="page-link" href="{{ $paginator->nextPageUrl() }}">Next</a>
    </li>
    @endif
  </ul>
</nav>


@endif
