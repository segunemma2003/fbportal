<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <!-- <img src="" alt="profile image"> -->
                  @if(Auth::user()->profile)
              <img class="img-xs rounded-circle" src="/storage/upload/{{Auth::user()->profile->profile_picture}}" alt="Profile image">
              @endif
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">{{ Auth::user()->first_name}} {{ Auth::user()->last_name}}</p>
                  <div>
                    <small class="designation text-muted">Trainer</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
              <a href="{{route('booksession')}}"class="btn btn-success btn-block">Book session
                <i class="mdi mdi-plus"></i>
              </a>
            <!--  {{---->
            <!--@if(Auth::user()->isAdmin=='1' || Auth::user()->id=='1')-->
            <!--<a href="{{URL('/admin')}}"class="btn btn-success btn-block">Admin-->
            <!--    <i class="mdi mdi-plus"></i>-->
            <!--  </a>-->
            <!--@endif --}}-->
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard')}}">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Trainers dashboard</span>
            </a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ route('profile')}}">
              <i class="menu-icon fa fa-user"></i>
              <span class="menu-title">Profile</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Session management</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{route('booksession')}}">book session</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('allsessions')}}">All sessions</a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="#">Accept | Reject session</a>
                </li> -->
              </ul>
            </div>
          </li>
                    <li class="nav-item">
            <a class="nav-link" href="{{ route('resources')}}">
              <i class="menu-icon fa fa-user"></i>
              <span class="menu-title">Resources</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#community" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Community</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="community">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="">Facebook BYB NG</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="">BYB IGHUB </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Online courses</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-restart"></i>
              <span class="menu-title">Reports and analytics</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                  <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Submit report</a>
                  </li> -->
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.reports')}}">All reports</a>
                  </li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>