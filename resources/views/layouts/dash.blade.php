<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Mnotify</title>
  <link rel="stylesheet" href="dash.css" />
 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>

<body>
  <div class="container">
    <nav>
      <ul>
        <li><a href="#" class="logo">
          
          <span class="nav-item">Mnotify</span>
        </a></li>
        <li><a href="home">
          <i class="fas fa-menorah"></i>
          <span class="nav-item">Home</span>
        </a></li>
        <li><a href="contact">
          <i class="fas fa-comment"></i>
          <span class="nav-item">Contancts</span>
        </a></li>
        <li><a href="group">
          <i class="fas fa-database"></i>
          <span class="nav-item">Groups</span>
        </a></li>
        <li><a href="quickmessage">
          <i class="fas fa-chart-bar"></i>
          <span class="nav-item">Send Message</span>
        </a></li>
        <li><a href="campaing">
          <i class="fas fa-cog"></i>
          <span class="nav-item">Campaings</span>
        </a></li>

        <li>

          <a class="logout" href="{{ route('logout') }}"
          onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
       <i class="fas fa-cog"></i>
           {{ __('Logout') }}
       </a>

       <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
           @csrf
       </form> 

          <!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
            <i class="fas fa-cog"></i>
                {{ __('Logout') }}
            </a>
    
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form> 
            </div> -->

        </li>
      </ul>


      <!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form> --> 
    </nav>


    <section class="main">
      @yield('content')
    </section>
  </div>

</body>

</html>