<!-- left side bar -->

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar" style="background-color: #121619;">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
         
        </div>
      </div>

      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->


      <!-- sidebar menu: : style can be found in sidebar.less -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->

      <div id="sidebar">
              <ul class="list-unstyled components">
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Home</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li><a href="{!!url('dashboard')!!}">Home 1</a></li>
                            <li><a href="#">Home 2</a></li>
                            <li><a href="#">Home 3</a></li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="#PageOrderManagement" data-toggle="collapse" aria-expanded="false">Order Management</a>
                          <ul class="collapse list-unstyled" id="PageOrderManagement">
                            <li><a href="{!!url('pending')!!}">Pending Orders</a></li>
                            <li><a href="#">Home 2</a></li>
                            <li><a href="#">Home 3</a></li>
                          </ul>
                    </li>
                    <li class="active">
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Pages</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li><a href="{!!url('addnewdrug')!!}">Add New Drug</a></li>
                            <li><a href="#">Page 2</a></li>
                            <li><a href="#">Page 3</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#pagePortfolio" data-toggle="collapse" aria-expanded="false">Portfolio</a>
                    </li>
                    <li>
                        <a href="#pageContacts" data-toggle="collapse" aria-expanded="false">Contact</a>
                        <ul class="collapse list-unstyled" id="pageContacts">
                            <li><a href="{!!url('addnew')!!}">Add New Drug</a></li>
                            <li><a href="#">Page 2</a></li>
                            <li><a href="#">Page 3</a></li>
                        </ul>
                    </li>
                </ul>
              </div>
      </ul>
    </section>
    
  </aside>

  <!-- /.sidebar -->