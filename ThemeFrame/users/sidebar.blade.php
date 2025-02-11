<nav class="navbar navbar-expand-lg navbar-light bg-light py-lg-0 mb-4 mx-3 mx-lg-0">
    <span class="navbar-brand mb-0 h1 d-lg-none ms-3">{{ fs_config('user_name') }}</span>
    <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#fresnsMenus" aria-controls="fresnsMenus" aria-expanded="false" aria-label="Toggle navigation">
        <i class="bi bi-signpost-2"></i>
    </button>
    <div class="collapse navbar-collapse list-group mt-2 mt-lg-0" id="fresnsMenus">
        {{-- User Home --}}
        @if (fs_config('channel_user_status'))
            <a href="{{ route('fresns.user.index') }}" class="list-group-item list-group-item-action {{ Route::is('fresns.user.index') ? 'active' : '' }}
                @if (request()->url() === rtrim(route('fresns.home'), '/')) active @endif">
                <img class="img-fluid" src="{{ fs_theme('assets') }}images/menu-user-home.png" loading="lazy" width="36" height="36">
                {{ fs_config('channel_user_name') }}
            </a>
        @endif

        {{-- User List --}}
        @if (fs_config('channel_user_list_status'))
            <a href="{{ route('fresns.user.list') }}" class="list-group-item list-group-item-action {{ Route::is('fresns.user.list') ? 'active' : '' }}">
                <img class="img-fluid" src="{{ fs_theme('assets') }}images/menu-user-list.png" loading="lazy" width="36" height="36">
                {{ fs_config('channel_user_list_name') }}
            </a>
        @endif

        {{-- Likes --}}
        @if (fs_config('user_like_enabled'))
            <a href="{{ route('fresns.user.likes') }}" class="list-group-item list-group-item-action {{ Route::is('fresns.user.likes') ? 'active' : '' }}">
                <img class="img-fluid" src="{{ fs_theme('assets') }}images/menu-likes.png" loading="lazy" width="36" height="36">
                {{ fs_config('channel_likes_users_name') }}
            </a>
        @endif

        {{-- Dislikes --}}
        @if (fs_config('user_dislike_enabled'))
            <a href="{{ route('fresns.user.dislikes') }}" class="list-group-item list-group-item-action {{ Route::is('fresns.user.dislikes') ? 'active' : '' }}">
                <img class="img-fluid" src="{{ fs_theme('assets') }}images/menu-dislikes.png" loading="lazy" width="36" height="36">
                {{ fs_config('channel_dislikes_users_name') }}
            </a>
        @endif

        {{-- Following --}}
        @if (fs_config('user_follow_enabled'))
            <a href="{{ route('fresns.user.following') }}" class="list-group-item list-group-item-action {{ Route::is('fresns.user.following') ? 'active' : '' }}">
                <img class="img-fluid" src="{{ fs_theme('assets') }}images/menu-following.png" loading="lazy" width="36" height="36">
                {{ fs_config('channel_following_users_name') }}
            </a>
        @endif

        {{-- Blocking --}}
        @if (fs_config('user_block_enabled'))
            <a href="{{ route('fresns.user.blocking') }}" class="list-group-item list-group-item-action {{ Route::is('fresns.user.blocking') ? 'active' : '' }}">
                <img class="img-fluid" src="{{ fs_theme('assets') }}images/menu-blocking.png" loading="lazy" width="36" height="36">
                {{ fs_config('channel_blocking_users_name') }}
            </a>
        @endif
    </div>
</nav>
