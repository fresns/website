<form action="{{ route('fresns.api.user.mark') }}" method="post" class="float-start me-2">
    @csrf
    <input type="hidden" name="interactiveType" value="dislike"/>
    <input type="hidden" name="markType" value="user"/>
    <input type="hidden" name="fsid" value="{{ $uid }}"/>
    @if ($interactive['dislikeStatus'])
        <a class="btn btn-success btn-sm fs-mark" data-interactive-active="{{ $interactive['dislikeStatus'] }}" data-bi="bi-hand-thumbs-down">
            <i class="bi bi-hand-thumbs-down-fill"></i>
            @if (fs_api_config('user_disliker_count'))
                <span class="show-count">{{ $count }}</span>
            @endif
        </a>
    @else
        <a class="btn btn-outline-success btn-sm fs-mark" data-bi="bi-hand-thumbs-down-fill" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $interactive['dislikeName'] }}">
            <i class="bi bi-hand-thumbs-down"></i>
            @if (fs_api_config('user_disliker_count'))
                <span class="show-count">{{ $count }}</span>
            @endif
        </a>
    @endif
</form>
