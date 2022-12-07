<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="message.css">
    <link rel="stylesheet" href="dash.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
 
    <title>Quick Message</title>
</head>
<body>
     @yield('content') 

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
</li>
</ul>
            <!-- <a href="#" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>  -->
    </nav>
</div>

        <!-- <div class="input">  --> <div>
<form action="{{ url('send-message') }}" method="post">
    @csrf
     <div class="input">
    <input type="text" name="messagebody" placeholder="Message"></input>
    </div>

   
    <div class="input-box">

       <input type="text"  name="mobilenumber" placeholder="Enter mobile phone numbers here"></input>
    </div>

    <div class="select-id">
    <input type="select" placeholder="select sender id">
                     <select>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
</select>

    <div class="send-btn">
        <button type="submit">Send
        </button>
    </div>
</form>
</div>
</div>
</body>

</html>