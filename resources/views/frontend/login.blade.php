@extends('frontend.includes.app')

@section('content')

<section class="breadcrumb-area">
   <div class="container-fulid">
      <div class="heading text-center">
         <h2>Login</h2>
         <ul>
            <li><a href="/home">Home</a></li>
            <li><a class="active" href="/login">Login</a></li>
         </ul>
      </div>
   </div>
</section>
<section class="contact" id="login-page">
   <div class="container-fulid">
      <div class="contact-us">
         <div class="row align-items-center">
            <div class="col-lg-6 col-6">
               <div class="contact-left">
                  <div class="section-title">
                  </div>
                  <img src="/images/register-img.png" alt="">

               </div>
            </div>
            <div class="col-lg-6 col-6">
               <div class="contact-right" id="input-box-contact">
                  <div class="section-title">
                     <h2 class="title">Login</h2>
                  </div>

                    <?php if(isset($error_msg)) { ?>

                     <p style="color:red"><?php echo $error_msg; ?></p> 

                     <?php } ?>

                     <?php if(isset($success_msg)) { ?>

                     <div class="alert alert-success" role="alert"> 
                     <p style="color:green"><?php echo $success_msg; ?></p>
                     </div>
                     <?php } ?>

                     <form action="/frontend/login" method="post">

                     <?php  if(count($errors) > 0) { ?>

                     <?php foreach($errors->all() as $key => $val){ ?>

                     <div class="alert alert-danger" role="alert"> 
                     <p style="color:red"><?php echo $val; ?></p>
                     </div>

                     <?php  } ?>

                     <?php } ?>
                      
                     <div class="input-box">
                        <input type="email" name="email" placeholder="Email" required>
                     </div>
                     <div class="input-box">
                        <input type="password" name="password" placeholder="Password" required>
                     </div>
                   @csrf

                     <button type="submit" name="submit">Login</button>
                     <p>Don't have an Account? <a href="/register">Register</a></p>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

@endsection