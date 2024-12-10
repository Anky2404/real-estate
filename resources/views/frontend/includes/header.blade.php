<header>
   <div class="header-area home-three" id="sticky-header">
      <div class="container-fulid">
         <div class="row align-items-center">

            <div class="col-md-12">
               <div class="header-menu home-three">
                  <div class="col-lg-3">
                     <div class="header-logo">
                        <i class="fa-solid fa-house"></i>
                        <span style="font-size: 20px;margin-left: 5px;color: #20706e;">Real Estate</span>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <ul>
                        <li class="active"><a href="/home">Home</a>

                        </li>
                        <li><a href="/about">About</a></li>
                        <li class="menu-item-has-children"><a href="/property">Property</a>
                           <!-- <ul class="sub-menu">
                              <li><a href="/property">property</a></li>

                              <li><a href="/property-detail">Property Details</a></li>
                           </ul> -->
                        </li>


                        <li><a href="/contact">Contact</a></li>
                        <?php if(empty($user_id)){ ?>
                        <li><a href="/login">Login</a></li>
                        <li><a href="/register">Register</a></li>
                        <?php }else{ ?>
                           <li><a href="/orderList">Orders</a></li>
                           <li><a href="/logout" onclick="return confirm('Are you sure for Logout?')" ><b>LOGOUT</b></a></li>
                        <?php } ?>
                     </ul>
                  </div>
            
               </div>
            </div>

         </div>
      </div>
   </div>
</header>