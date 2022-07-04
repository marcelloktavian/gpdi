<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="javascript:void(0)" class="brand-link">
      <img src="../assets/images/gpdi.ico" alt="GPdi Logo" class="brand-image elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">GPdI Bukit Hermon</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="javascript:void(0)" class="d-block"><?=$_SESSION['lgnamauser']?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fa fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
              User Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?p=user" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?p=usergroup" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Group</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?p=useraccess" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Access</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Master Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?p=pastors" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pastors</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?p=staffs" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Staffs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?p=komsel" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Komsel (KeBun)</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?p=jemaat" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jemaat</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Website Master
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?p=layout" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Layout</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?p=banners" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Banners</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?p=webheader" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Website Header</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?p=webfooter" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Website Footer</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Website Content
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?p=homepage" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Homepage</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?p=story" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Story</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?p=pastors" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pastors & Staffs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?p=mission" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mission</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?p=lwg" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>LWG School</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?p=ppa" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>PPA Hermon Ministry</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?p=menwomen" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Men/Women Ministry</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?p=youth" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Youth Ministry</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?p=children" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Children Church</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?p=community" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Community</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?p=online" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Online</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?p=events" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Events</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?p=care" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Care</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?p=give" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Give</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?p=blogs" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blogs</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Administration
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?p=careform" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Request Form Care</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="index.php?p=extension" class="nav-link">
              <i class="nav-icon fas fa-ellipsis-h"></i>
              <p>
                Extension
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="index.php?p=changepass" class="nav-link">
              <i class="nav-icon fas fa-lock"></i>
              <p>
                Change Password
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="javascript:void(0)" class="nav-link" id="logout">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>