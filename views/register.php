<h1>Create a New Account</h1>
<form action="" method="post">
    
    <div class="row">
        <div class="col">
        <div class="mb-3">
        <label  class="form-label">First Name</label>
        <input name="firstName" type="text" class="form-control" id="exampleInputEmail1" >
    </div>
        </div>
        <div class="col">
        <div class="mb-3">
        <label  class="form-label">Last Name</label>
        <input name="lastName" type="text" class="form-control" id="exampleInputEmail1" >
    </div>
        </div>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input name="password" type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Repeat Password</label>
        <input name="passwordRepeat" type="repeat" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
        <input name="human" type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">I am a human</label>
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
</form>