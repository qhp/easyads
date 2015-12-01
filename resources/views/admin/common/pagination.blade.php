@if ($pagination->lastPage() > 1)
    <ul class="pagination pagination-sm no-margin pull-right">
        <li class="{{ ($pagination->currentPage() == 1) ? ' disabled' : '' }}">
            <a href="{{ $pagination->url(1) }}">Previous</a>
        </li>
        @for ($i = 1; $i <= $pagination->lastPage(); $i++)
            <li class="{{ ($pagination->currentPage() == $i) ? ' active' : '' }}">
                <a href="{{ $pagination->url($i) }}">{{ $i }}</a>
            </li>
        @endfor
        <li class="{{ ($pagination->currentPage() == $pagination->lastPage()) ? ' disabled' : '' }}">
            <a href="{{ $pagination->url($pagination->currentPage()+1) }}" >Next</a>
        </li>
    </ul>
@endif