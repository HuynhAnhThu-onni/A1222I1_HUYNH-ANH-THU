<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ URL::asset('css/admin.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
    <title>Create User</title>
</head>
<body>
<div class="sidebar">
    <div class="logo_content">
        <div class="logo">
            <div class="logo_name" style="color: white;">MOBILE STORE</div>
        </div>
        <i class="bx bx-menu" id="btn"></i>
    </div>
    <ul class="nav_list" style="padding-left: 0px;">
        <li>
            <a href="{{url('/admin')}}">
                <i class="bx bx-home-alt"></i>
                <span class="links_name">Product Management</span>
            </a>
            <span class="tooltip">Product Management</span>
        </li>
        <li>
            <a href="{{url('/listUser')}}">
                <i class="bx bx-compass"></i>
                <span class="links_name">User Management</span>
            </a>
            <span class="tooltip">User Management</span>
        </li>
        <li>
            <a href="{{url('/statistics')}}">
                <i class='bx bx-bar-chart-alt-2'></i>
                <span class="links_name">Statistics</span>
            </a>
            <span class="tooltip">Statistics</span>
        </li>
    </ul>

    <div class="profile_content">
        <div class="profile">
            <li style="list-style: none; margin-top: 8px">
                <a style="text-decoration: none; color: black; margin-left: 140px; " href="{{url('/logout')}}">
                    <span class="links_name">Checkout</span>
                </a>
                <span class="tooltip">Checkout</span>
            </li>
        </div>
    </div>
</div>

<h3 style="text-align: center; margin-top: 50px"><b>ADD USER</b></h3>

<form style="width: 70%; margin-left: 450px; margin-top: 50px" action ="{{url('/createUser')}}" method="post" class="row g-3">
    @csrf
    <div class="col-md-6" style="float: left; width: 45%; margin-left: 100px">
        <label for="inputEmail4" class="form-label">Fullname</label>
        <input type="text" name = "fullname"  class="form-control" id="inputEmail4" >
    </div>
    <div class="col-md-6" style="float: left; width: 45%; margin-left: 100px">
        <label for="inputEmail4" class="form-label">Username</label>
        <input type="text" name ="username" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-6" style="float: left; width: 45%; margin-left: 100px">
        <label for="inputEmail4" class="form-label">Password</label>
        <input type="password" name = "password"  class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-6" style="float: left; width: 45%; margin-left: 100px">
        <label for="inputEmail4" class="form-label">Address</label>
        <input type="text" name = "address"  class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-6" style="float: left; width: 45%; margin-left: 100px">
        <label for="inputEmail4" class="form-label">Phone</label>
        <input type="number" name = "phone"  class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-6" style="float: left; width: 45%; margin-left: 100px">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" name = "email"  class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-6" style="float: left; width: 45%; margin-left: 100px">
        <label for="inputEmail4" class="form-label">Role</label>
        <input type="text" name = "role"  class="form-control" id="inputEmail4">
    </div>

    <div class="submit_btn" style="margin-left: 150px; margin-bottom: 100px">
        <button type="submit" class="btn btn-success" style="border: none; background-color: #ECB159; width: 170px;margin-top: 25px;">Create</button>
        <a style="border: none; background-color: white; width: 170px; color: #ECB159; border: 1.5px solid #ECB159; margin-top: 25px; margin-left: 20px" class="btn btn-primary" href="{{url('/listUser')}}" role="button">Back</a>
    </div>
</form>



<script>
    let btn = document.querySelector("#btn");
    let sidebar = document.querySelector(".sidebar");

    btn.onclick = function(){
        sidebar.classList.toggle("active");
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>
