<x-header />


    <div class="container">
    <form class="form" action="" method="post">
       <h2>Sign-Up Form</h2>
       <p>Please fill up all fields</p>
        <hr/> 
       <!-- Username  Field-->
       <div class="form-control">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Enter Username" />
            <small>Error Message</small>
       </div>
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
        <!-- Confirm Password -->
       <div class="form-control">
            <label for="password2">Confirm Password</label>
            <input type="text" name="password2" id="password2" placeholder="Re-Enter Password to Confirm" />
            <small>Error Message</small>
       </div>
       <button type="submit">Submit</button>

    </form>

    

    </div>
