  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=base_url()?>" class="brand-link">
      <img src="<?=base_url("template")?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=base_url("template")?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <?php
            $uri_1=$this->uri->segment(1);
            $uri_2=$this->uri->segment(2);

          ?>     

          <li class="nav-item">
            <a href="<?=base_url()?>" class="nav-link <?php if($uri_1=="") echo 'active'?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Home
              </p>
            </a>
          </li>


          <li class="nav-item has-treeview  <?php if($uri_1=="page") echo 'menu-open'?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file-code"></i>
              <p>
                Sample Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url("page/buttons")?>" class="nav-link <?php if($uri_2=="buttons") echo 'active'?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Button</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url("page/modals")?>" class="nav-link <?php if($uri_2=="modals") echo 'active'?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Modals & Allert</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?=base_url("page/chartjs")?>" class="nav-link <?php if($uri_2=="chartjs") echo 'active'?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ChartJS</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?=base_url("page/forms")?>" class="nav-link <?php if($uri_2=="forms") echo 'active'?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Forms</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?=base_url("page/forms_advanced")?>" class="nav-link <?php if($uri_2=="forms_advanced") echo 'active'?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Forms advanced</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url("page/forms_editors")?>" class="nav-link <?php if($uri_2=="forms_editors") echo 'active'?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Forms Editors</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?=base_url("page/tables")?>" class="nav-link <?php if($uri_2=="tables") echo 'active'?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url("page/datatables")?>" class="nav-link <?php if($uri_2=="datatables") echo 'active'?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Datatables</p>
                </a>
              </li>
              
            </ul>
          </li>

          
          <li class="nav-item">
            <a href="<?=base_url("starter")?>" class="nav-link <?php if($uri_1=="starter") echo 'active'?>">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Starter Pages
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>