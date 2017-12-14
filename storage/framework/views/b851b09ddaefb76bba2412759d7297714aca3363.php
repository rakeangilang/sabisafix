<!-- header-starts -->
<div class="sticky-header header-section ">
  <div class="header-left">
    <!--toggle button start-->
    <button id="showLeftPush"><i class="fa fa-bars"></i></button>
    <!--toggle button end-->
    <!--logo -->
    <div class="logo">
      <a href="index.html">
        <h1>Sabisa Farm</h1>
        <span>AdminPanel</span>
      </a>
    </div>
    <!--//logo-->

    <!--search-box-->
    <div class="search-box">
      <form class="input">
        <input class="sb-search-input input__field--madoka" placeholder="Search..." type="search" id="input-31" />
        <label class="input__label" for="input-31">
          <svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
            <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
          </svg>
        </label>
      </form>
    </div>
    <!--//end-search-box-->

    <div class="clearfix"> </div>
  </div>
  <div class="header-right">
    <div class="profile_details_left">

      <!-- notifications of menu start -->
      <ul class="nofitications-dropdown">

      </ul>
      <div class="clearfix"> </div>
    </div>

    <!--notification menu end -->
    <div class="profile_details">
      <ul>
        <li class="dropdown profile_details_drop">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <div class="profile_img">
              <span class="prfil-img"><img src="images/a.png" alt=""> </span>
              <div class="user-name">
                <!-- <p><?php echo e(Auth::user()->name); ?></p> -->
                <span>Administrator</span>
              </div>
              <i class="fa fa-angle-down lnr"></i>
              <i class="fa fa-angle-up lnr"></i>
              <div class="clearfix"></div>
            </div>
          </a>
          <ul class="dropdown-menu drp-mnu">
            <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
            <li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li>
            <!-- <li>  <a href="<?php echo e(route('logout')); ?>"
                    onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                      <i class="fa fa-sign-out"></i> Logout </a>

                 <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                  <?php echo e(csrf_field()); ?>

                 </form>
            </li> -->
          </ul>
        </li>
      </ul>
    </div>
    <div class="clearfix"> </div>
  </div>
  <div class="clearfix"> </div>
</div>
<!-- //header-ends -->
