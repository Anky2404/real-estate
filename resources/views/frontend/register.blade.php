@extends('frontend.includes.app')

@section('content')

<section class="breadcrumb-area">
   <div class="container-fulid">
      <div class="heading text-center">
         <h2>Register</h2>
         <ul>
            <li><a href="/">Home</a></li>
            <li><a class="active" href="/register">Register</a></li>
         </ul>
      </div>
   </div>
</section>

<section class="contact" id="register-page">
   <div class="container-fulid">
      <div class="contact-us">
         <div class="row align-items-center">
            <div class="col-lg-6 col-6">
               <div class="contact-right" id="input-box-contact">
                  <div class="section-title">
                     <h2 class="title">Register</h2>
                  </div>

            <?php if(isset($error_msg)) { ?>

               <p style="color:red"><?php echo $error_msg; ?></p> 

               <?php } ?>

               <?php if(isset($success_msg)) { ?>

               <div class="alert alert-success" role="alert"> 
               <p style="color:green"><?php echo $success_msg; ?></p>
               </div>
               <?php } ?>

               <form action="/frontend/register" method="post">

               <?php  if(count($errors) > 0) { ?>

               <?php foreach($errors->all() as $key => $val){ ?>

               <div class="alert alert-danger" role="alert"> 
               <p style="color:red"><?php echo $val; ?></p>
               </div>

               <?php  } ?>

               <?php } ?>
                  @csrf
                     <div class="input-box">
                        <input type="text"  name="username" placeholder="Username" required>
                     </div>
                     <div class="input-box">
                        <input type="email"  name="email" placeholder="Email" required>
                     </div>
                     <div class="input-box">
                        <input type="password" name="password" placeholder="Password" required>
                     </div>
                     <div class="input-box">
                        <input type="text" name="address" placeholder="Address" required>
                     </div>
                     
                     <button type="submit" name="submit">Register</button>
                     <p>Already have an Account? <a href="/login">Login</a></p>
                     
                  </form>
               </div>
            </div>
            <div class="col-lg-6 col-6">
               <div class="contact-left">
                  <img src="/images/login-img.png" alt="">
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection


