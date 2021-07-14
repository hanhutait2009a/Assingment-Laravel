<!DOCTYPE html>
<html>
<head>
    <title>Assingment Laravel</title>
</head>
<body>
<form action="/user" method="post">
    @csrf
    IdentityNumber: <input type="text" name="identity_number"/>
    @error('identity_number')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br>
    First name: <input type="text" name="first_name"/>
    @error('first_name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br>
    Last name: <input type="text" name="last_name"/>
    @error('last_name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br>
    Phone: <input type="text" name="phone"/>
    @error('phone')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br>
    Gender: <input type="text" name="gender"><br>
    <br>
    <button type="submit">Save</button>
    <button type="reset">Reset</button>
</form>
</body>
</html>
