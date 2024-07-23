<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js">
</head>
<body>
    <div>
        <form action="{{ url ('student') }}" @method="POST">
            @csrf 
            <div>
                <div class="container my-5">
                     <div class="row">
                        <div class="col-md-6 mx-auto g-grid gap-2">
                            <div class="form-group mb-3">
                                <label class="form-label">First Name</label>
                                <input type="text" name="fname" class="form-control">
                            </div>
                            <div>
                                <label class="form-label">Last Name</label>
                                <input type="text" name="lname" class="form-control">
                            </div>
                            <div>
                                <label class="form-label">Email</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div>
                                <label class="form-label">Phone Number</label>
                                <input type="text" name="phone" class="form-control">
                            </div>
                            <div>
                                <label class="form-label">Address</label>
                                <input type="text" name="address" class="form-control">
                            </div>
                            <div>
                                <label class="form-label">City</label>
                                <input type="text" name="city" class="form-control">
                            </div>
                            <div>
                                <label class="form-label">Province</label>
                                <input type="text" name="province" class="form-control">
                            </div>
                            <div>
                                <label class="form-label">Zip Code</label>
                                <input type="text" name="zip" class="form-control">
                            </div>
                            <div>
                                <label class="form-label">Birthday</label>
                                <input type="text" name="birthday" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button class="btn btn-primary">save changes</butoon>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
</div>
</body>
</html>