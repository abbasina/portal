<aside class="main-sidebar fixed">
    <!-- sidebar: style can be found in sidebar.less -->
    <div class="slimScrollDiv fixed">
    <section class="sidebar fixed">
      <!-- Sidebar user panel -->
      <div class="user-panel fixed">
        <div class="pull-right image">
          <img src="/panel/dist/img/user2-160x160.svg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-right info">
          <p>{{ auth()->user()->fullname }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> آنلاین</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="جستجو">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <ul class="sidebar-menu" data-widget="tree">
    <li class="header">منو</li>
    @can('manage')
    <li class="treeview">
      <a href="#">
        <i class="fa fa-users text-aqua"></i> <span>مدیریت کاربران</span>
        <span class="pull-left-container">
          <i class="fa fa-angle-right pull-left"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li class="active"><a href="{{ route(auth()->user()->role->title.'.users') }}"><i class="fa fa-circle-o"></i>لیست کاربران</a></li>
      </ul>
    </li>
    @endcan
    @can('manage')
    <li class="treeview">
      <a href="#">
        <i class="fa fa-id-card text-aqua"></i> <span>کدهای معرف</span>
        <span class="pull-left-container">
          <i class="fa fa-angle-right pull-left"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li class="active"><a href="{{ route(auth()->user()->role->title.'.invites') }}"><i class="fa fa-circle-o"></i>لیست کدها</a></li>
        <li class="active"><a href="{{ route(auth()->user()->role->title.'.invites.create') }}"><i class="fa fa-circle-o"></i>ایجاد کد جدید</a></li>
      </ul>
    </li>
    @endcan
    @can('manage')
    <li class="treeview">
      <a href="#">
        <i class="fa fa-map-marker text-aqua"></i> <span>مدیریت کلانشهرها</span>
        <span class="pull-left-container">
          <i class="fa fa-angle-right pull-left"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li class="active"><a href="{{ route(auth()->user()->role->title.'.capitals') }}"><i class="fa fa-circle-o"></i>لیست کلانشهرها</a></li>
        <li class="active"><a href="{{ route(auth()->user()->role->title.'.capitals.create') }}"><i class="fa fa-circle-o"></i>ایجاد کلانشهر جدید</a></li>
      </ul>
    </li>
    @endcan
    @can('manage')
    <li class="treeview">
      <a href="#">
        <i class="fa fa-balance-scale text-aqua"></i> <span>مدیریت کمیسیون ها</span>
        <span class="pull-left-container">
          <i class="fa fa-angle-right pull-left"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li class="active"><a href="{{ route(auth()->user()->role->title.'.comisions') }}"><i class="fa fa-circle-o"></i>لیست کمیسیون ها</a></li>
        <li class="active"><a href="{{ route(auth()->user()->role->title.'.comisions.create') }}"><i class="fa fa-circle-o"></i>ایجاد کمیسیون جدید</a></li>
      </ul>
    </li>
    @endcan
    @can('member')
    <li class="treeview">
      <a href="#">
        <i class="fa fa-send text-aqua"></i> <span>مدیریت پیام ها</span>
        <span class="pull-left-container">
          <i class="fa fa-angle-right pull-left"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li class="active"><a href="{{ route(auth()->user()->role->title.'.messages.received') }}"><i class="fa fa-circle-o"></i>پیام های دریافتی</a></li>
        <li class="active"><a href="{{ route(auth()->user()->role->title.'.messages.sent') }}"><i class="fa fa-circle-o"></i>پیام های ارسالی</a></li>
        <li class="active"><a href="{{ route(auth()->user()->role->title.'.messages.create') }}"><i class="fa fa-circle-o"></i>ایجاد پیام جدید</a></li>
      </ul>
    </li>
    @endcan
    @can('note') 
    <li class="treeview">
      <a href="#">
        <i class="fa fa-pencil text-aqua"></i> <span>مدیریت یادداشت ها</span>
        <span class="pull-left-container">
          <i class="fa fa-angle-right pull-left"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li class="active"><a href="{{ route(auth()->user()->role->title.'.notes') }}"><i class="fa fa-circle-o"></i>یادداشت های من</a></li>
        <li class="active"><a href="{{ route(auth()->user()->role->title.'.notes.create') }}"><i class="fa fa-circle-o"></i>ایجاد یادداشت جدید</a></li>
      </ul>
    </li>
    @endcan
    @can('report')
    <li class="treeview">
      <a href="#">
        <i class="fa fa-newspaper-o text-aqua"></i> <span>مدیریت اخبار</span>
        <span class="pull-left-container">
          <i class="fa fa-angle-right pull-left"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li class="active"><a href="{{ route(auth()->user()->role->title.'.articles') }}"><i class="fa fa-circle-o"></i>وضعیت اخبار</a></li>
        <li class="active"><a href="{{ route(auth()->user()->role->title.'.articles.create') }}"><i class="fa fa-circle-o"></i>ایجاد خبر جدید</a></li>
      </ul>
    </li>
    @endcan
    @can('commentor')
    <li class="treeview">
      <a href="#">
        <i class="fa fa-comment-o text-aqua"></i> <span>مدیریت نظرات</span>
        <span class="pull-left-container">
          <i class="fa fa-angle-right pull-left"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li class="active"><a href="{{ route(auth()->user()->role->title.'.comments.unconfirmed') }}"><i class="fa fa-circle-o"></i>نظرات تایید نشده</a></li>
        <li class="active"><a href="{{ route(auth()->user()->role->title.'.comments.confirmed') }}"><i class="fa fa-circle-o"></i>نظرات تایید شده</a></li>
      </ul>
    </li>
    @endcan
    @can('manage')
    <li class="treeview">
      <a href="#">
        <i class="fa fa-image text-aqua"></i> <span>مدیریت گالری تصاویر</span>
        <span class="pull-left-container">
          <i class="fa fa-angle-right pull-left"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li class="active"><a href="{{ route(auth()->user()->role->title.'.albums') }}"><i class="fa fa-circle-o"></i>وضعیت آلبوم ها</a></li>
        <li class="active"><a href="{{ route(auth()->user()->role->title.'.albums.create') }}"><i class="fa fa-circle-o"></i>ایجاد آلبوم جدید</a></li>
      </ul>
    </li>
    
    <li><a href="{{ route(auth()->user()->role->title.'.heading') }}"><i class="fa fa-header text-aqua"></i> <span>تیتر یک</span></a></li>
    <li><a href="{{ route(auth()->user()->role->title.'.videos') }}"><i class="fa fa-video-camera text-aqua"></i> <span>مدیریت ویدئوها</span></a></li>
    @endcan
    <li><a href="{{ route(auth()->user()->role->title.'.mycomments') }}"><i class="fa fa-comments text-aqua"></i> <span>نظرات من</span></a></li>
    <li><a href="{{ route(auth()->user()->role->title.'.profile') }}"><i class="fa fa-user-circle text-aqua"></i> <span>مشاهده پروفایل</span></a></li>
    <li><a href="{{ route(auth()->user()->role->title.'.logout') }}"><i class="fa fa-power-off text-red"></i> <span>خروج</span></a></li>
  </ul>
</section>
    </div>
<!-- /.sidebar -->
</aside>