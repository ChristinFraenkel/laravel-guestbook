@if($maxPages > 1)
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="{{route('index',['page'=>$currentPage-1], false)}}" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            @for($page=1;$page<=$maxPages;$page++)
                <li class="page-item @if($page === $currentPage) active @endif">
                    <a class="page-link" href="{{route('index',['page'=>$page], false)}}">{{$page}}</a>
                </li>
            @endfor
            <li class="page-item">
                <a class="page-link" href="{{route('index',['page'=>$currentPage+1], false)}}" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
@endif