 <?php $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/") + 1); ?><aside
     class="main-sidebar sidebar-dark-danger elevation-4">
     <!-- Brand Logo -->
     <a href="https://www.w3care.com" class="brand-link">
         <img src="dist\img\w3logo.png" alt="w3  Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light">W3 care</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
             </div>
             <div class="info">
                 <a href="#" class="d-block"> Deepanshu</a>
             </div>
         </div>



         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">

                 <li class="nav-item menu-open">
                     <a href="#" class="nav-link <?= $page == "dashboard.php" ? 'active' : ''; ?>">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>
                             Dashboard
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="dashboard.php" class="nav-link <?= $page == "dashboard.php" ? 'active' : ''; ?> ">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Dashboard</p>
                             </a>
                         </li>


                     </ul>
                 </li>
                 <li class="nav-item menu-open">
                     <a href="#"
                         class="nav-link <?= $page == "pages/examples/logout.php" ? 'active' : ''; ?> <?= $page == "forgot-password.php" ? 'active' : ''; ?>">
                         <!-- <i class="nav-icon far fa-plus-square"></i> -->
                         <i class="nav-icon fas fa-user"></i>
                         <p>
                             User
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">

                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>
                                     Logout
                                     <i class="fas fa-angle-left right"></i>
                                 </p>
                             </a>
                             <ul class="nav nav-treeview">

                                 <li class="nav-item">
                                     <a href="pages/examples/logout.php" class="nav-link">
                                         <i class="far fa-circle nav-icon"></i>
                                         <p>Logout </p>
                                     </a>
                                 </li>


                                 <li class="nav-item">
                                     <a href="forgot-password.php" class="nav-link">
                                         <i class="far fa-circle nav-icon"></i>
                                         <p>Forgot Password </p>
                                     </a>
                                 </li>

                             </ul>
                         </li>

                     </ul>
                 </li>
                 <li class="nav-item menu-open">
                     <a href="#"
                         class="nav-link <?= $page == "client.php" ? 'active' : ''; ?> <?= $page == "category.php" ? 'active' : ''; ?> <?= $page == "project_index.php" ? 'active' : ''; ?>">
                         <i class="nav-icon fas fa-book"></i>
                         <p>
                             Project Management

                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">

                         <li class="nav-item">
                             <a href="client.php" class="nav-link <?= $page == "client.php" ? 'active' : ''; ?>">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Client </p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="category.php" class="nav-link  <?= $page == "category.php" ? 'active' : ''; ?> ">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Category </p>
                             </a>
                         </li>

                         <li class="nav-item">
                             <a href="project_index.php"
                                 class="nav-link <?= $page == "project_index.php" ? 'active' : ''; ?>">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Project </p>
                             </a>
                         </li>

                     </ul>
                 </li>



                 <li class="nav-item menu-open">
                     <a href="#"
                         class="nav-link <?= $page == "header_settings_index.php" ? 'active' : ''; ?><?= $page == "social_media_settings_index.php" ? 'active' : ''; ?><?= $page == "banner_index.php" ? 'active' : ''; ?>">
                         <i class="nav-icon fas fa-cog"></i>

                         <p>
                             Setting

                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview menu-open">
                         <li class="nav-item">
                             <a href="header_settings_index.php"
                                 class="nav-link <?= $page == "header_settings_index.php" ? 'active' : ''; ?>">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Site setting </p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="social_media_settings_index.php"
                                 class="nav-link  <?= $page == "social_media_settings_index.php" ? 'active' : ''; ?>">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Social Media site setting </p>
                             </a>
                         </li>

                         <li class="nav-item">
                             <a href="banner_index.php" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Banner </p>
                             </a>
                         </li>

                         <li class="nav-item menu-open">
                             <a href="#" class="nav-link">
                                 <i class="service-icon fas fa-wrench"></i>


                                 <p>
                                     Static pages

                                     <i class="fas fa-angle-left right"></i>
                                 </p>
                             </a>
                             <ul class="nav nav-treeview">
                                 <li class="nav-item">
                                     <a href="about.php" class="nav-link">
                                         <i class="far fa-circle nav-icon"></i>
                                         <p>About </p>
                                     </a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="resume.php" class="nav-link">
                                         <i class="far fa-circle nav-icon"></i>
                                         <p> Resume </p>
                                     </a>
                                 </li>

                                 <li class="nav-item">
                                     <a href="services.php" class="nav-link">
                                         <i class="far fa-circle nav-icon"></i>
                                         <p>Services </p>
                                     </a>
                                 </li>



                             </ul>
                         </li>

                     </ul>
                 </li>


             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>
 <div class="content-wrapper">