<!DOCTYPE html>
<html>
<head>
    <title> Register</title>
    <link rel="stylesheet" href="#">
    <script src="#"></script>
</head>
<body>
<div class="center">

    <form action=""{{route('vaccine_user.vaccine_request.registration_process)}}"" method="POST" name="contactForm" enctype="multipart/form-data">
        <div  class="text_field">
            <p> <h2> User Register Form></h2> </p>
            <br>
            <label for="name">UserName</label>
            <input type="text" name="name" value="name" >

        </div>
        <br>
        <div  class="form-group">
            <label for="contact_no">Contact Number</label>
            <input type="text" name="contact_no" value="contact_ no" >
        </div>
        <br>
        <div  class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" value="email"  >
        </div>
        <br>
        <div  class="form-group">
            <label for="provinces">select your provinces</label>
            <input type="text"name="provinces" value="provinces">
        </div>
        <br>
        <div  class="form-group">
            <label for="municipality">select Municipality</label><input type="text"name="municipality" value="municipality">
        </div>
        <br>
        <div  class="form-group">
            <label for="name">District</label>
            <input type="text" name="District" value="district" >
        </div>
        <div  class="form-group">
            <label for="ward_no">ward number</label>
            <input type="text"name="ward_no" value="ward_no">
        </div>
        <br>
        <div  class="form-group">
            <label for="street">Street</label>
            <input type="text"name="street" value="street">
        </div>
        <br>

        <div  class="form-group">
            <label for="address">Address</label>
            <input type="text"name="address" value="address"  >
        </div>

        <div  class="form-group">
            <label for="dob"> Date of Birth</label>
            <input type="date"  id="birth_date" name="birth_date" value="Dateofbirth"  onkeyup="calculate_age()" >
        </div>
        <div  class="form-group">
            <label for="age"> Age</label>
            <input type="text"  id="calculate_age" name="age" value="age" >
        </div>
        <div  class="form-group">
            <label for="Gender"> gender</label>
        <input type="radio" name="gender"  value="0">Male
        <input type="radio" name="gender"  value="1">Female
            <input type="radio" name="gender"  value="2">others
        <br>
            <div  class="form-group">
                <label for="citizenship_id">Ctizenship id</label>
                <input type="text" name="citizenship_id" value="citizenship_id">
            </div>
            <div  class="form-group">
                <label for="image"> please upload your citizenship picture</label>
                <input type="file" name="image" value="image">
            </div>

        <br>
        <div  class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" value="password">
        </div>
            <div  class="form-group">
                <label for="confirm_password"> Confirm Password</label>
                <input type="password" name="confirm_password" value="confirm_password">
            </div>
        <br>

        <input type= "submit"name="submit" value="Register">


</body>
</html>
