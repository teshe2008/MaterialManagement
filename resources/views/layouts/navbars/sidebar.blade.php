<div class="sidebar" >
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-mini"><i class="tim-icons icon-bank">{{ __('') }}</i></a>
            <a href="#" class="simple-text logo-normal">{{ __('MOSHE') }}</a>
        </div>
        <ul class="nav">
            <li @if ($pageSlug ?? '' == 'dashboard') class="active " @endif>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p >{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    <i class="fab fa-laravel" ></i>
                    <span class="nav-link-text " style="font-weight:bolder">{{ __('Users') }}</span>
                    <b class="caret mt-1"></b>
                </a>
                <div class="collapse show" id="laravel-examples">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug ?? '' == 'profile') class="active " @endif>
                            <a href="{{ route('profile.edit')  }}">
                                <i class="tim-icons icon-single-02"></i>
                                <p style="font-weight:bolder">{{ __('User Profile') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug ?? '' == 'users') class="active " @endif>
                            <a href="{{ route('user.index')  }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p style="font-weight:bolder">{{ __('User Management') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li @if ($pageSlug ?? '' == 'material request') class="active " @endif>
                <a href="{{ route('pages.icons') }}">
                    <i class="tim-icons icon-atom"></i>
                    <p style="font-weight:bolder">{{ __('Material Request') }}</p>
                </a>
            </li>
            <li @if ($pageSlug ?? '' == 'manage material') class="active " @endif>
                <a href="{{ route('pages.maps') }}">
                    <i class="tim-icons icon-pin"></i>
                    <p style="font-weight:bolder">{{ __('Maps') }}</p>
                </a>
            </li>
            <li @if ($pageSlug ?? '' == 'Reports') class="active " @endif>
                <a href="{{ route('pages.reports') }}">
                    <i class="tim-icons icon-bell-55"></i>
                    <p style="font-weight:bolder">{{ __('Reports') }}</p>
                </a>
            </li>
            <li @if ($pageSlug ?? '' == 'all materials') class="active " @endif>
                <a href="{{ route('pages.tables') }}">
                    <i class="tim-icons icon-puzzle-10"></i>
                    <p style="font-weight:bolder">{{ __('all materials') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
