<div class="pagination">
    @if($previousPage)
        <a class="btn btn-outline-dark" href="@url($previousPage)">Newer posts</a>
    @endif

    @if($nextPage)
        <a class="btn btn-outline-dark" href="@url($nextPage)">Previous posts</a>
    @endif
</div>