@extends('layouts.dash')

@section('content')

<div class="container">
    <nav>
      <ul>
        <li><a href="#" class="logo">
          
          <span class="nav-item">Mnotify</span>
        </a></li>
        <li><a href="#">
          <i class=></i>
          <span class="nav-item">Campaings</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-comment"></i>
          <span class="nav-item">Contancts</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-database"></i>
          <span class="nav-item">Groups</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-chart-bar"></i>
          <span class="nav-item">Send Message</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-cog"></i>
          <span class="nav-item">MD status</span>
        </a></li>

        <li><a href="#" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>


    <section class="main">
      <div class="main-top">
        <h1>.</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <div class="users">
        <div class="card">
          
          <h4>Campaings</h4>
          <div class="per">
            <table>
              <tr>
                <td><span>0</span></td>
              </tr>
            </table>
          </div>
          
        </div>
        <div class="card">
         
          <h4>Contancts</h4>
          <p></p>
          <div class="per">
            <table>
              <tr>
                <td><span>0</span></td>
                
              </tr>
              
              
            </table>
          </div>
          
        </div>
        <div class="card">
          
          <h4>Groups</h4>
          
          <div class="per">
            <table>
              <tr>
                <td><span>0</span></td>
                
              </tr>
              
             
            </table>
          </div>
          
        </div>
        <div class="card">
          
          <h4>Sender Id</h4>
        
          <div class="per">
            <table>
              <tr>
                <td><span>0</span></td>
               
              </tr>
            
            </table>
          </div>
         
        </div>
      </div>

      <section class="attendance">
        <div class="attendance-list">
          <h1>summary</h1>
          <table class="table">
            <thead>
              <tr>
                <th>sender ID</th>
                <th>group names</th>
                <th>number of contancts</th>
      
                <th>Edit</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Naa</td>
                <td>Church</td>
                <td>50</td>
                
                <td><button>View</button></td>
              </tr>
              <tr class="active">
                <td>Job</td>
                <td>Uni</td>
                <td>1000</td>
                
                <td><button>View</button></td>
              </tr>
              <tr>
                <td>hash</td>
                <td>Hospital</td>
                <td>60</td>
              
                <td><button>View</button></td>
              </tr>
              <tr>
                <td>dash</td>
                <td>Bank</td>
                <td>7000</td>
               
                
                <td><button>View</button></td>
              </tr>
            
            </tbody>
          </table>
        </div>
      </section>
    </section>

  </div>

<div class="card">
	<div class="card-header">Dashboard</div>
	<div class="card-body">
		
		Mnotify
	</div>
</div>

@endsection('content')