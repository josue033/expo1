<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-mini">{{ _('MD') }}</a>
            <a href="#" class="simple-text logo-normal">{{ _('Mood Diary') }}</a>
        </div>
        <ul class="nav">
            <li @if ($pageSlug = 'dashboard') class="active " @endif>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-satisfied"></i>
                    <p>{{ _('Perfil') }}</p>
                </a>
            </li>
            <li>
                {{-- <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    <i class="fab fa-laravel" ></i>
                    <span class="nav-link-text" >{{ __('Laravel Examples') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="laravel-examples">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug = 'profile') class="active " @endif>
                            <a href="{{ route('profile.edit')  }}">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ _('User Profile') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug = 'users') class="active " @endif>
                            <a href="{{ route('user.index')  }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ _('User Management') }}</p>
                            </a>
                        </li>
                    </ul>
                </div> --}}
                 {{-- Anotacion y descipcion --}}
            <li @if ($pageSlug = 'icons') class="active " @endif>
                <a href="{{ route('pages.notifications') }}">
                    <i class="tim-icons icon-pencil"></i>
                    <p>{{ _('Registrar estado') }}</p>
                </a>
        </li> 
                {{-- Menu para historial --}}
                 <li @if ($pageSlug = 'icons') class="active " @endif>
                    <a href="{{ route('pages.historial') }}">
                        <i class="tim-icons icon-book-bookmark"></i>
                        <p>{{ _('Historial') }}</p>
                    </a>
            </li> 
           
        {{--  --}}
        <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true" >
            <i class="tim-icons icon-heart-2" ></i>
            <span class="nav-link disabled " >{{ __('Ayuda') }}</span>
            <b class="caret mt-1"></b>
        </a>

        <div class="collapse show" id="laravel-examples">
            <ul class="nav pl-4">
                <li @if ($pageSlug = 'rtl') class="active " @endif>
                    <a href="{{ route('pages.rtl')  }}">
                        <i class="tim-icons icon-tap-02"></i>
                        <p>{{ _('Ayuda profecional') }}</p>
                    </a>
                </li>
                <li @if ($pageSlug = 'profile') class="active " @endif>
                    <a href="{{ route('profile.edit')  }}">
                        <i class="tim-icons icon-bulb-63"></i>
                        <p>{{ _('Tips') }}</p>
                    </a>
                </li>
                <li @if ($pageSlug = 'tables') class="active " @endif>
                    <a href="{{ route('pages.tables')  }}">
                        <i class="tim-icons icon-chat-33"></i>
                        <p>{{ _('!Pide ayuda a un amigo!') }}</p>
                    </a>
                </li>
            </ul>
        </div>
        {{--  --}}
            <li @if ($pageSlug = 'icons') class="active " @endif>
                <a href="{{ route('pages.icons') }}">
                    <i class="tim-icons icon-atom"></i>
                    <p>{{ _('Icons') }}</p>
                </a>
            </li>
            {{-- <li @if ($pageSlug = 'maps') class="active " @endif>
                <a href="{{ route('pages.maps') }}">
                    <i class="tim-icons icon-pin"></i>
                    <p>{{ _('Maps') }}</p>
                </a>
            </li> --}}
            {{-- <li @if ($pageSlug = 'notifications') class="active " @endif>
                <a href="{{ route('pages.notifications') }}">
                    <i class="tim-icons icon-bell-55"></i>
                    <p>{{ _('Notifications') }}</p>
                </a>
            </li> --}}
            {{-- <li @if ($pageSlug = 'tables') class="active " @endif>
                <a href="{{ route('pages.tables') }}">
                    <i class="tim-icons icon-puzzle-10"></i>
                    <p>{{ _('Table List') }}</p>
                </a>
            </li> --}}
            {{-- <li @if ($pageSlug = 'typography') class="active " @endif>
                <a href="{{ route('pages.typography') }}">
                    <i class="tim-icons icon-align-center"></i>
                    <p>{{ _('Typography') }}</p>
                </a>
            </li> --}}
            {{-- <li @if ($pageSlug = 'rtl') class="active " @endif>
                <a href="{{ route('pages.rtl') }}">
                    <i class="tim-icons icon-world"></i>
                    <p>{{ _('RTL Support') }}</p>
                </a>
            </li> --}}
            {{-- <li class=" {{ $pageSlug == 'upgrade' ? 'active' : '' }} bg-info">
                <a href="{{ route('pages.upgrade') }}">
                    <i class="tim-icons icon-spaceship"></i>
                    <p>{{ _('Upgrade to PRO') }}</p>
                </a>
            </li> --}}
        </ul>
    </div>
</div>
