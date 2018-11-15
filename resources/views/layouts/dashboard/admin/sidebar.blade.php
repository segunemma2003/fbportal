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
            </div>
          </li>
          <!--<li class="nav-item">-->
          <!--  <a class="nav-link" href="{--URL('trainers/dashboard')--}">-->
          <!--    <i class="menu-icon mdi mdi-television"></i>-->
          <!--    <span class="menu-title">User Dashboard</span>-->
          <!--  </a>-->
          <!--</li>-->
          <!--<li class="nav-item">-->
          <!--  <a class="nav-link" href="{--route('admin')--}">-->
          <!--    <i class="menu-icon mdi mdi-television"></i>-->
          <!--    <span class="menu-title">Admin dashboard</span>-->
          <!--  </a>-->
          <!--</li>-->
          
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#sesmgt" aria-expanded="false" aria-controls="sesmgt">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Session management</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="sesmgt">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('admin.allsession')}}">All sessions</a>
                </li>
              </ul>
            </div>
          </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#tmgt" aria-expanded="false" aria-controls="tmgt">
            <i class="menu-icon mdi mdi-content-copy"></i>
            <span class="menu-title">User management</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="tmgt">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.trainers')}}">All trainers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.trainees')}}">All trainees</a>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="{{ route('trainer')}}">Add Trainer</a>
              </li>
            </ul>
          </div>
        </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#repmgt" aria-expanded="false" aria-controls="repmgt">
              <i class="menu-icon mdi mdi-restart"></i>
              <span class="menu-title">Reports and analytics</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="repmgt">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.reports')}}">All reports</a>
                  </li>
                  <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Approved reports</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Rejected reports</a>
                  </li> -->
              </ul>
            </div>
          </li>
          
                    <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#invoice" aria-expanded="false" aria-controls="invoice">
            <i class="menu-icon mdi mdi-content-copy"></i>
            <span class="menu-title">Invoice Management</span>
            <i class="menu-arrow"></i>
          </a>
            <div class="collapse" id="invoice">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="{{route('pay')}}">Confirm invoice</a></li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="">Training budget</a>
                </li> -->
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('credit')}}">Credit trainer</a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>