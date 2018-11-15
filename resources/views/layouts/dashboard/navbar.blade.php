<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand" href="#">
          <img src="" alt="IGHUB BYB" />
        </a>
        <a class="navbar-brand" href="#">
          <img src="" alt="IGHUB BYB" />
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
         <li class="nav-item">
            <a href="{{route('resources')}}" class="nav-link">Resources
              <span class="badge badge-primary ml-1">note</span>
            </a>
          </li>
          <li class="nav-item active">
            <a href="#" class="nav-link">
              <i class="mdi mdi-elevation-rise"></i>Approved earnings</a>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">Hello, {{Auth::user()->first_name}} {{Auth::user()->last_name}}!</span>
              @if(Auth::user()->profile)
             
              <img class="img-xs rounded-circle" src="/storage/upload/{{Auth::user()->profile->profile_picture}}" alt="Profile image">
              @endif
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <!--<a class="dropdown-item p-0">-->
              <!--  <div class="d-flex border-bottom">-->
              <!--    <div class="py-3 px-4 d-flex align-items-center justify-content-center">-->
              <!--      <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>-->
              <!--    </div>-->
              <!--    <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">-->
              <!--      <i class="mdi mdi-account-outline mr-0 text-gray"></i>-->
              <!--    </div>-->
              <!--    <div class="py-3 px-4 d-flex align-items-center justify-content-center">-->
              <!--      <i class="mdi mdi-alarm-check mr-0 text-gray"></i>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</a>-->
              <a href="{{route('profile')}}" class="dropdown-item mt-2">
                Profile
              </a>
              <a href="{{URL('trainer/password/reset')}}" class="dropdown-item">
                Change Password
              </a>
              <!--<a class="dropdown-item">-->
              <!--  Check Inbox-->
              <!--</a>-->
              <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>