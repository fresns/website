<nav class="navbar navbar-expand-lg navbar-light bg-light py-lg-0 mb-4 mx-3 mx-lg-0">
    <span class="navbar-brand mb-0 h1 d-lg-none ms-3">{{ fs_db_config('group_name') }}</span>
    <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#fresnsMenus" aria-controls="fresnsMenus" aria-expanded="false" aria-label="Toggle navigation">
        <i class="bi bi-signpost-2"></i>
    </button>
    <div class="collapse navbar-collapse list-group mt-2 mt-lg-0" id="fresnsMenus">
        {{-- Group Home --}}
        @if (fs_db_config('menu_group_status'))
            <a href="{{ fs_route(route('fresns.group.index')) }}" class="list-group-item list-group-item-action {{ Route::is('fresns.group.index') ? 'active' : '' }}
                @if (request()->url() === rtrim(fs_route(route('fresns.home')), '/')) active @endif">
                <img class="img-fluid" src="/assets/themes/ThemeFrame/images/menu-group-home.png" width="36" height="36">
                {{ fs_db_config('menu_group_name') }}
            </a>
        @endif

        {{-- Group List --}}
        @if (fs_db_config('menu_group_list_status'))
            <a href="{{ fs_route(route('fresns.group.list')) }}" class="list-group-item list-group-item-action {{ Route::is('fresns.group.list') ? 'active' : '' }}">
                <img class="img-fluid" src="/assets/themes/ThemeFrame/images/menu-group-list.png" width="36" height="36">
                {{ fs_db_config('menu_group_list_name') }}
            </a>
        @endif

        {{-- My like groups --}}
        @if (fs_api_config('like_group_setting'))
            <a href="{{ fs_route(route('fresns.group.likes')) }}" class="list-group-item list-group-item-action {{ Route::is('fresns.group.likes') ? 'active' : '' }}">
                <img class="img-fluid" src="/assets/themes/ThemeFrame/images/menu-likes.png" width="36" height="36">
                {{ fs_db_config('menu_like_groups') }}
            </a>
        @endif

        {{-- My dislike groups --}}
        @if (fs_api_config('dislike_group_setting'))
            <a href="{{ fs_route(route('fresns.group.dislikes')) }}" class="list-group-item list-group-item-action {{ Route::is('fresns.group.dislikes') ? 'active' : '' }}">
                <img class="img-fluid" src="/assets/themes/ThemeFrame/images/menu-dislikes.png" width="36" height="36">
                {{ fs_db_config('menu_dislike_groups') }}
            </a>
        @endif

        {{-- My follow groups --}}
        @if (fs_api_config('follow_group_setting'))
            <a href="{{ fs_route(route('fresns.group.following')) }}" class="list-group-item list-group-item-action {{ Route::is('fresns.group.following') ? 'active' : '' }}">
                <img class="img-fluid" src="/assets/themes/ThemeFrame/images/menu-following.png" width="36" height="36">
                {{ fs_db_config('menu_follow_groups') }}
            </a>
        @endif

        {{-- My block groups --}}
        @if (fs_api_config('block_group_setting'))
            <a href="{{ fs_route(route('fresns.group.blocking')) }}" class="list-group-item list-group-item-action {{ Route::is('fresns.group.blocking') ? 'active' : '' }}">
                <img class="img-fluid" src="/assets/themes/ThemeFrame/images/menu-blocking.png" width="36" height="36">
                {{ fs_db_config('menu_block_groups') }}
            </a>
        @endif

        {{-- I follow the groups posts --}}
        @if (fs_api_config('view_posts_by_follow_object'))
            <a href="{{ fs_route(route('fresns.follow.group.posts')) }}" class="list-group-item list-group-item-action {{ Route::is('fresns.follow.group.posts') ? 'active' : '' }}">
                <img class="img-fluid" src="/assets/themes/ThemeFrame/images/menu-follow-posts.png" width="36" height="36">
                {{ fs_db_config('menu_follow_group_posts') }}
            </a>
        @endif

        {{-- I follow the groups comments --}}
        @if (fs_api_config('view_comments_by_follow_object'))
            <a href="{{ fs_route(route('fresns.follow.group.comments')) }}" class="list-group-item list-group-item-action {{ Route::is('fresns.follow.group.comments') ? 'active' : '' }}">
                <img class="img-fluid" src="/assets/themes/ThemeFrame/images/menu-follow-comments.png" width="36" height="36">
                {{ fs_db_config('menu_follow_group_comments') }}
            </a>
        @endif
    </div>
</nav>
