<!DOCTYPE html>
<html>
            <head>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                <title>MABALE PHP - DESIGN </title>
            </head>
            <script>
                function validateMenuAndDescription() {
                const menuElement = document.getElementById("exampleFormControlInput1");
                const descriptionElement = document.getElementById("exampleFormControlTextarea1");

                const menuLength = menuElement.value.length;
                const descriptionLength = descriptionElement.value.length;

                if (menuLength >= 1000 || descriptionLength >= 1000) {
                    alert("The menu and menu description must be less than 1000 characters.");
                    return false;
                }
                return true;
                }
            </script>
            <style>
                .h1 {
                    color: blue;
                    font-family: Arial;
                    font-size: 40px;
                    margin-top: 80px;
                    margin-left: 600px;
                    font-weight: bold;
                }
                .form1{
                    background-color: white;
                    background-image: url('searchicon.png');
                    background-position: 10px 10px;
                    background-repeat: no-repeat;
                    padding-left: 40px;
                }
                .button1{
                    color:blue;
                    margin-left: 350px;
                    margin-top: 25px;
                    width: 50%;
                    border-radius: 10px;
                    border-style: inset;
                    font-family: Arial;
                    font-size: 24px;
                }
                .menu {
                    font-family: Arial;
                    font-size: 16px;
                    color: green;
                    font-weight: bold;
                    margin-left: 20px;
                }
                .menu1 {
                    width: 95%;
                    border-radius: 5px;
                    margin-left: 20px;
                }
                .desc{
                    font-family: Arial;
                    font-size: 16px;
                    color: red;
                    font-weight: bold;
                    margin-left: 20px;
                }
                .desc1 {
                    width: 95%;
                    border-radius: 5px;
                    margin-left: 20px;
                }
            </style>
            <body>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">MABALE_CIEDNER</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Manage</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Menu</a>
                    </li>
                </ul>
                </div>
            </div>
            </nav>
            <div class="mb-3">
            <h1 class ="h1">Create Menu</h1> </br>
            <label for="exampleFormControlInput1" class="menu">Menu name</label>
            <input type="email" class="menu1" id="exampleFormControlInput1" maxlength="1000">
            </div>
            <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="desc">Menu Description</label>
            <textarea class="desc1" id="exampleFormControlTextarea1" rows="3" maxlength="1000"></textarea>
            <button type="submit" class= "button1" onclick= "return validateMenuAndDescription()"> Submit</button>
            </div>
    </body>
</html>