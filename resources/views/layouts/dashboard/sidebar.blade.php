<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <!-- <img src="" alt="profile image"> -->
                  <i class="fa fa-user"></i>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">{{ Auth::user()->first_name}} {{ Auth::user()->last_name}}</p>
                  <div>
                    <small class="designation text-muted">Trainer</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
              <button class="btn btn-success btn-block">Book session
                <i class="mdi mdi-plus"></i>
              </button>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard')}}">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Trainers dashboard</span>
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
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-restart"></i>
              <span class="menu-title">Reports and analytics</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Submit report</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('report')}}">All reports</a>
                  </li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>