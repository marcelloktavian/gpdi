<!-- Main Sidebar Container -->
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
            <a href="index.php?page=user" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                User Management
              </p>
            </a>
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
                <a href="index.php?page=pastors" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pastors</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=staff" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Staff</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=komsel" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Community</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=jemaat" class="nav-link">
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
                Design
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?page=design" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Design</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=banners" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Banners</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-info-circle"></i>
              <p>
                Information
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?page=profile" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=story" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Story</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=minitries" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Our Minitries</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=custom" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Custom</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="index.php?page=events" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Events
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Care
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?page=pastors" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penyerahan Anak</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=staff" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Baptisan Air</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=jemaat" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pra Nikah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=jemaat" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Konseling</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=jemaat" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Visitasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=jemaat" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Permohonan Doa</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="index.php?page=give" class="nav-link">
              <i class="nav-icon fa fa-money-check"></i>
              <p>
                Give
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="index.php?page=blogs" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Blogs
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="index.php?page=extension" class="nav-link">
              <i class="nav-icon fas fa-ellipsis-h"></i>
              <p>
                Extension
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="index.php?page=changepass" class="nav-link">
              <i class="nav-icon fas fa-lock"></i>
              <p>
                Change Password
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="pages/logout.php" class="nav-link" id="logout">
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