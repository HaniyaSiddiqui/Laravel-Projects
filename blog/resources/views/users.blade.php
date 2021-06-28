<h1>List</h1>

<!-- API -->
<!-- <table border="1">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Email</td>
        <td>User</td>
    </tr>

    @foreach($collection as $user)
    <tr>
        <td>{{$user['id']}}</td>
        <td>{{$user['first_name']}}</td>
        <td>{{$user['email']}}</td>
        <td><img src={{$user['avatar']}} /></td>
    </tr>
    @endforeach
  
</table> -->



<table border="1">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Age</td>
        <td>Address</td>
    </tr>

    @foreach($collection as $user)
    <tr>
        <td>{{$user['id']}}</td>
        <td>{{$user['name']}}</td>
        <td>{{$user['age']}}</td>
        <td>{{$user['address']}}</td>
    </tr>
    @endforeach
  
</table>

<div>
<p> {{$collection->links()}}</p>
</div>

<style>
.w-5{
    display:none;
}
</style>