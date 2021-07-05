@extends('layouts.layouttemp')

@section('layout')
 <form class="form" action="" method="post">
       <h2>Sign-In</h2>
       <p>Please fill up this form to createan account</p>
        <hr/> 
 
        <!-- Email -->
       <div class="form-control">
            <label for="email">Eamil</label>
            <input type="text" name="email" id="email" placeholder="Enter Email" />
            <small>Error Message</small>
       </div>
        <!-- Password -->
       <div class="form-control">
            <label for="password">Password</label>
            <input type="text" name="password" id="password" placeholder="Enter Password" />
            <small>Error Message</small>
       </div>
       
       <button type="submit">Sign-In</button>

    </form>
@endsection
    

  
