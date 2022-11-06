@php
    $btnIcon = '/assets/themes/ThemeFrame/images/icon-dislike.png';
    $btnIconActive = '/assets/themes/ThemeFrame/images/icon-dislike-active.png';
@endphp

@if ($icon)
    @php
        $btnIcon = $icon['imageUrl'];
        $btnIconActive = $icon['imageActiveUrl'];
    @endphp
@endif

<form action="{{ route('fresns.api.user.mark') }}" method="post">
    @csrf
    <input type="hidden" name="interactiveType" value="dislike"/>
    <input type="hidden" name="markType" value="comment"/>
    <input type="hidden" name="fsid" value="{{ $cid }}"/>
    @if ($interactive['dislikeStatus'])
        <a class="btn btn-inter btn-active fs-mark" data-interactive-active="{{ $interactive['dislikeStatus'] }}" data-icon="{{ $btnIcon }}">
            <img src="{{ $btnIconActive }}">
            @if (fs_api_config('comment_disliker_count'))
                <span class="show-count">{{ $count }}</span>
            @endif
        </a>
    @else
        <a class="btn btn-inter fs-mark" data-icon-active="{{ $btnIconActive }}" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $interactive['dislikeName'] }}">
            <img src="{{ $btnIcon }}">
            @if (fs_api_config('comment_disliker_count'))
                <span class="show-count">{{ $count }}</span>
            @endif
        </a>
    @endif
</form>
