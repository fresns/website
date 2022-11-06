<nav class="navbar navbar-expand-lg navbar-light bg-light py-lg-0 mb-4 mx-3 mx-lg-0">
    <span class="navbar-brand mb-0 h1 d-lg-none ms-3">{{ fs_api_config('menu_search') }}</span>
    <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#fresnsMenus" aria-controls="fresnsMenus" aria-expanded="false" aria-label="Toggle navigation">
        <i class="bi bi-signpost-2"></i>
    </button>
    <div class="collapse navbar-collapse list-group mt-2 mt-lg-0" id="fresnsMenus">
        {{-- Search Users --}}
        @if (fs_api_config('menu_user_status'))
            <a href="{{ fs_route(route('fresns.search.users')) }}" class="list-group-item list-group-item-action {{ Route::is('fresns.search.users') ? 'active' : '' }}">
                <img class="img-fluid" src="/assets/themes/ThemeFrame/images/menu-user-list.png" width="36" height="36">
                {{ fs_api_config('user_name') }}
            </a>
        @endif

        {{-- Search Groups --}}
        @if (fs_api_config('menu_group_status'))
            <a href="{{ fs_route(route('fresns.search.groups')) }}" class="list-group-item list-group-item-action {{ Route::is('fresns.search.groups') ? 'active' : '' }}">
                <img class="img-fluid" src="/assets/themes/ThemeFrame/images/menu-group-list.png" width="36" height="36">
                {{ fs_api_config('group_name') }}
            </a>
        @endif

        {{-- Search Hashtags --}}
        @if (fs_api_config('menu_hashtag_status'))
            <a href="{{ fs_route(route('fresns.search.hashtags')) }}" class="list-group-item list-group-item-action {{ Route::is('fresns.search.hashtags') ? 'active' : '' }}">
                <img class="img-fluid" src="/assets/themes/ThemeFrame/images/menu-hashtag-list.png" width="36" height="36">
                {{ fs_api_config('hashtag_name') }}
            </a>
        @endif

        {{-- Search Posts --}}
        @if (fs_api_config('menu_post_status'))
            <a href="{{ fs_route(route('fresns.search.posts')) }}" class="list-group-item list-group-item-action {{ Route::is('fresns.search.posts') ? 'active' : '' }}">
                <img class="img-fluid" src="/assets/themes/ThemeFrame/images/menu-post-list.png" width="36" height="36">
                {{ fs_api_config('post_name') }}
            </a>
        @endif

        {{-- Search Comments --}}
        @if (fs_api_config('menu_comment_status'))
            <a href="{{ fs_route(route('fresns.search.comments')) }}" class="list-group-item list-group-item-action {{ Route::is('fresns.search.comments') ? 'active' : '' }}">
                <img class="img-fluid" src="/assets/themes/ThemeFrame/images/menu-comment-list.png" width="36" height="36">
                {{ fs_api_config('comment_name') }}
            </a>
        @endif
    </div>
</nav>
