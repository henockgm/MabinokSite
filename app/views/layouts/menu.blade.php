<div class="top-container">
  <nav class="nav navbar-default primary-nav">
      <div class="navbar-header">
        <!-- <button type="button" class="navbar-toggle custom" data-toggle="collapse" data-target=".primary-nav .navbar-collapse">
          <span class="icon-bar custom"></span>
          <span class="icon-bar custom"></span>
          <span class="icon-bar custom"></span>
        </button> -->

        <button type="button" class="c-hamburger c-hamburger--htx"  data-toggle="collapse" data-target=".primary-nav .navbar-collapse">
          <span>toggle menu</span>
        </button>

        <!-- <img src="/packages/images/logo3.png" class="img-rounded img-responsive logo-img" alt="" width="100" height="60"> -->
        {{ HTML::image('images/logo5.png', 'a logo', array('class' => 'img-logo', 'width' => '150' , 'height'=>'60')) }}
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-left navbar-top">
          <li class="main-nav">
            <a href="{{ URL::route('home')}}" class="nav-item"> <span class="glyphicon glyphicon-home" > </span> Home </a>
          </li>
          <!-- <li class="main-nav"> <a href="#" class="nav-item"> About  </a> </li> -->

          <li class="dropdown main-nav">
            <a class="dropdown-toggle nav-item" data-toggle="dropdown" href="#"> <span class="glyphicon glyphicon-folder-open"></span> Portfolio <span class="caret"></span> </a>
            <ul class="dropdown-menu custom" role="menu">
              <li> <a href="{{ URL::route('portfolio-cover-letter')}}"> <span class="glyphicon glyphicon-paperclip"></span> Cover Letter </a> </li>
              <li> <a href="{{ URL::route('portfolio-my-cv') }}"> <span class="glyphicon glyphicon-file"></span> CV </a> </li>
              <li> <a href="{{ URL::route('portfolio-certificate') }}"> <span class="glyphicon glyphicon-education"></span>Education </a> </li>
              <li> <a href="#" > <span class="glyphicon glyphicon-wrench"></span> Skills </a> </li>

              <li> <a href="{{URL::route('projects-my-works')}}"> <span class="glyphicon glyphicon-tasks"></span> Recent Projects </a> </li>

              <li class="divider"> </li>
              <!-- <li> <a href="http://mabinok.com/demo" target="_blank"> <span class="glyphicon glyphicon-hand-right"></span> Thesis Demo </a> </li>    -->
              <li> <a href="{{ URL::route('portfolio-references')}}"> <span class="glyphicon glyphicon-certificate"></span> References </a> </li>
            </ul>
          </li>
          <li class="main-nav"> <a  href="{{ URL::route('contact-contact-me')}}" class="nav-item"> <span class="glyphicon glyphicon-phone-alt"></span> Contact </a> </li>


        </ul>

        <ul class="nav navbar-nav navbar-right navbar-top">
          @if(Auth::check())

           <!--  <li class="main-nav"> <a href="#" class="nav-item"> </a> </li> -->
            <li class="dropdown main-nav">
              <a class="dropdown-toggle nav-item" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-cog"></span>{{ Auth::user()->username }}<span class="caret"></span> </a>
              <ul class="dropdown-menu" role="menu">
               <li> <a href="{{ URL::route('profile')}}"> <i class="glyphicon glyphicon-user"></i> Profile </a> </li>
                <li> <a href="{{ URL::route('account-change-password')  }}"> Change password </a> </li>
                @if(Auth::user()->isAdmin())
                <li> <a href="#"> upload </a> </li>
                @else
                   <li> <a href="#"> upload </a> </li>
                @endif
              </ul>
            </li >
            <li class="main-nav"> <a href="{{ URL::route('account-sign-out') }}" class="nav-item"> <span class="glyphicon glyphicon-log-out"></span> Log out </a></li>

          @else
            <li  class="main-nav"><a href="{{ URL::route('account-sign-in') }}" class="nav-item"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            <li class="main-nav"><a href="{{ URL::route('account-create') }}" class="nav-item"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          @endif
        </ul>
      </div>
  </nav>
  </div>
