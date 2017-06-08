<nav class="navbar navbar-transparent">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/') }}"><i class="material-icons" style="margin-bottom:5px">home</i> <strong>ပင်မပစ္စည်းသိုလှောင်ရုံအဆင့်(က)</strong></a>
    </div>
    <div class="collapse navbar-collapse" data-color="green">
      <ul class="nav navbar-nav navbar-right">
        <li class="{{ Request::is('/') ? "active" : "" }}">
          <a href="{{ url('/about') }}">
            <strong style="line-height:30px">
              <i class="material-icons">assignment_turned_in</i>
              {{-- <i class="fa fa-star" aria-hidden="true"></i> --}}
              လုပ်ငန်းတာ၀န်
            </strong>
          </a>
        </li>
        <li>
          <a href="{{ url('/org') }}">
            <strong style="line-height:30px">
              <i class="fa fa-sitemap" aria-hidden="true"></i>
              ဖွဲ့စည်းပုံ
            </strong>
          </a>
        </li>

        <li class="dropdown">
          {{-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="material-icons">notifications</i>
            <span class="notification">5</span>
            <p class="hidden-lg hidden-md">Notifications</p>
          </a> --}}
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
            <img src="/uploads/user_images/{{ Auth::user()->avatar }}" alt="" style="width:27px; height:27px; position:absolute; left:10px; border-radius:50%"/>
              {{ Auth::user()->name }} <span style="line-height:30px;" style="padding-left:10px;"><i class="material-icons">settings</i></span>
          </a>
          <ul class="dropdown-menu">
            <li>
                <a href="{{ url('/profile') }}">
                    <i class="fa fa-user-circle" aria-hidden="true" style="padding-right:10px;"></i>Profile
                </a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="{{ url('/reports') }}">
                {{-- <strong style="line-height:30px"> --}}
                  {{-- <i class="material-icons">report</i> --}}
                  <i class="fa fa-exclamation-circle" aria-hidden="true" style="padding-right:10px;"></i>Report
                {{-- </strong> --}}
              </a>
            </li>
            @foreach(Auth::user()->roles as $key => $navrole)
              @if ($navrole->name == "Administrator")
                <li>
                    <a href="{{ url('/documentation') }}">
                        <i class="fa fa-info-circle" aria-hidden="true" style="padding-right:10px;"></i>Documentation
                    </a>
                </li>
              @endif
            @endforeach
            <li>
              <a href="{{ url('/logout') }}"
                  onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                  <i class="fa fa-sign-out" aria-hidden="true" style="padding-right:10px;"></i>Logout
              </a>
              <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
            </li>
          </ul>
        </li>
        {{-- <li>
          <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
             <i class="material-icons">person</i>
             <p class="hidden-lg hidden-md">Profile</p>
          </a>
        </li> --}}
      </ul>
      {{-- <form class="navbar-form navbar-right" role="search">
        <div class="form-group  is-empty">
          <input type="text" class="form-control" placeholder="Search">
          <span class="material-input"></span>
        </div>
        <button type="submit" class="btn btn-white btn-round btn-just-icon">
          <i class="material-icons">search</i><div class="ripple-container"></div>
        </button>
      </form> --}}
    </div>
  </div>
</nav>
