<!DOCTYPE html>
<html>
<head>
    <title> Register</title>
    <link rel="stylesheet" href="#">
    <script src="#"></script>
</head>
<body>
<div class="center">

    <form action="{{route('vaccine_user.vaccine_request.registration_process')}}" method="POST" name="contactForm" enctype="multipart/form-data">
        @csrf
        <div  class="text_field">
            <p> <h2> User Register Form</h2> </p>
            <br>
            <label for="name">UserName</label>
            <input type="text" name="name">

        </div>
        <br>
        <div  class="form-group">
            <label for="contact_no">Contact Number</label>
            <input type="text" name="contact_no">
        </div>
        <br>
        <div  class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email">
        </div>
        <br>
        <div  class="form-group">
            <label for="provinces">select your provinces</label>
            <input type="text"name="provinces">
        </div>
        <br>
        <div  class="form-group">
            <label for="municipality">select Municipality</label>
            <input type="text"name="municipality">
        </div>
        <br>
        <div  class="form-group">
            <label for="name">District</label>
            <input type="text" name="district">
        </div>
        <div  class="form-group">
            <label for="ward_no">ward number</label>
            <input type="text"name="ward_no">
        </div>
        <br>
        <div  class="form-group">
            <label for="street">Street</label>
            <input type="text"name="street">
        </div>
        <br>

        <div  class="form-group">
            <label for="address"> Temporary Address</label>
            <input type="text"name="address">
        </div>

        <div  class="form-group">
            <label for="dob"> Date of Birth</label>
            <input type="date"  id="birth_date" name="birth_date" value="Dateofbirth"  onkeyup="calculate_age()" >
        </div>
        <div  class="form-group">
            <label for="age"> Age</label>
            <input type="text"  id="calculate_age" name="age">
        </div>
        <div  class="form-group">
            <label for="Gender"> gender</label>
        <input type="radio" name="gender"  value="0">Male
        </div>
        <div  class="form-group">
            <input type="radio" name="gender"  value="1">Female
        </div>
        <div  class="form-group">
            <input type="radio" name="gender"  value="2">others
        </div>
            <br>
            <div  class="form-group">
                <label for="citizenship_id">Ctizenship id</label>
                <input type="text" name="citizenship_id" >
            </div>
            <div  class="form-group">
                <label for="image"> please upload your citizenship picture</label>
                <input type="file" name="image">
            </div>

        <br>
        <div  class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>

        <br>

        <input type= "submit"name="submit" value="Register">
        <
        </div>
</body>
</html>
