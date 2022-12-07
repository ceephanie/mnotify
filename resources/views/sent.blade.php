@extends('layouts.message')
@extends('layouts.dash')
@section('content')
 
<body>
    @yield('content')
<div>
<form action="" method="post">
    <div>
    <input type="text" placeholder="Message">
    </div>
    <div>
        <input type="text" placeholder="Enter mobile number(s) here">
    </div>
</form>
</div>
</body>
@endsection
