<!DOCTYPE html>
<html lang="en">

@include('backend.includes.head')

<body>
    <header>
        <div class="container">
            <div class="header-item">
                <div class="colleft">
                    <div class="logo"><img src="image/logo.png" alt="logo" title="logo"></div>
                </div>
               
            </div>
        </div>
    </header>
    <div class="login">
           <?php if(isset($error_msg)) { ?>

            <p style="color:red"><?php echo $error_msg; ?></p> 

            <?php } ?>

            <?php if(isset($success_msg)) { ?>

            <div class="alert alert-success" role="alert"> 
            <p style="color:green"><?php echo $success_msg; ?></p>
            </div>
            <?php } ?>

            <form action="/backend/login" method="post">

            <?php  if(count($errors) > 0) { ?>

            <?php foreach($errors->all() as $key => $val){ ?>

            <div class="alert alert-danger" role="alert"> 
            <p style="color:red"><?php echo $val; ?></p>
            </div>

            <?php  } ?>

            <?php } ?>
            @csrf
            
            <h2>Login</h2>
            <div class="form-input">
                <label for="username">Email</label>
                <input type="email" name="email" placeholder="Enter Email" required>
            </div>
            <div class="form-input">
                <label for="Password">Password</label>
                <input type="password" name="password" placeholder="Enter Password" required>
            </div>
            <div class="submit">
                <button class="btn-submit" type="submit">Login</button>
            </div>
          
        </form>
    </div>
    <footer>
        <p>© 2023 | All rights reserved.</p>
    </footer>

</body>

</html>