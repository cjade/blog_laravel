<aside class="main-sidebar">
    <div class="sidebar" id="scrollspy">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="common/img/lol-timo-panda.png" onerror="this.src='common/img/lol-timo-panda.png'" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{session('user')->nickname}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" >
            <li class="header">主菜单</li>
            <li class="active treeview">
                <a href="admin-default">
                    <i class="fa fa-dashboard"></i> <span>管理员管理</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="admin-user"><i class="fa fa-circle-o"></i>管理员列表</a></li>
                    <li><a href="javascript:void(0);"><i class="fa fa-circle-o"></i>角色管理</a></li>
                    <li><a href="jump"><i class="fa fa-circle-o"></i> 跳</a></li>
                </ul>
            </li>





        </ul>
    </section>
    <!-- /.sidebar -->
        </div>
</aside>