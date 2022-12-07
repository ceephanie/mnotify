@extends('contacts.layout')
@section('content')

<div class="container ">
    <nav>
      <ul>
        <li><a href="#" class="logo">
          
          <span class="nav-item">Mnotify</span>
        </a></li>
        <li><a href="home">
          <i class="fas fa-menorah"></i>
          <span class="nav-item">Home</span>
        </a></li>
        <li><a href="conatct">
          <i class="fas fa-comment"></i>
          <span class="nav-item">Contancts</span>
        </a></li>
        <li><a href="group">
          <i class="fas fa-database"></i>
          <span class="nav-item">Groups</span>
        </a></li>
        <li><a href="message">
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
            
          <!-- <a href="login" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a> -->
      
      </li>
      </ul>
    </nav>
</div>


    <div class="container index-contact-container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Contact</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/create-contact') }}" class="btn btn-success btn-sm" title="Add New Contact">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New Contact
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Mobile</th>
                                        <th>User IDs</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($contacts as $item)
                                    <tr>
                                        <!-- <td>{{ $loop->iteration }}</td> -->
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->mobile }}</td>
                                        <td>{{ $item->id }}</td>
                                        <td class=actions-contacts>
                                            <!-- <a href="{{ url('/contact/' . $item->id) }}" title="View Contact"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a> -->
                                            <a href="/edit-page/{{$item->id}}" title="Edit Contact"> Edit</a>
                                            <a href="/delete-contact/{{$item->id}}" title="Edit Contact">Delete</a>
                                            <!-- <form method="POST" action="{{ url('/conatct' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form> -->
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection