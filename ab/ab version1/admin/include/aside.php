<aside style="background-color:black; color:white;">
          <div id="sidebar"  class="nav-collapse " style="background-color:black; color:white;">
              <ul class="sidebar-menu" id="nav-accordion" style="background-color:black; color:white;">
              
              	  <p class="centered"><a href="#"><img src="../../assets/img/logo.png" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><span>A&B | </span><?php echo $_SESSION['login'];?></h5>
              	  	
                  <li class="mt">
                      <a href="change-password.php">
                          <i class="fa fa-file"></i>
                          <span>Change Password</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="manage-users.php" >
                          <i class="fa fa-users"></i>
                          <span >Manage Users</span>
                      </a>
                  </li>


                  <li class="sub-menu">
                      <a href="manage-deals.php" >
                          <i class="fa fa-camera"></i>
                          <span >Manage deals</span>
                      </a>
                  </li>
              
                 
              </ul>
          </div>
      </aside>