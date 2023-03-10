<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{route('admin.home.index')}}" class="brand-link">
    <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Dashboard</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item ">
          <a href="{{route('admin.home.index')}}" class="nav-link {{(request()->is('admin')) ? 'active' : ''}}">
            <i class="fas fa-cogs nav-icon"></i>
            <p>Основные настройки</p>
          </a>
        </li>
       
        <li class="nav-item ">
          <a href="{{route('admin.intro.index')}}" class="nav-link {{(request()->is('admin/intro*')) ? 'active' : ''}}">
            <i class="fas fa-cogs nav-icon"></i>
            <p>Фото</p>
          </a>
        </li>

        <li class="nav-item ">
          <a href="{{route('admin.color.index')}}" class="nav-link {{(request()->is('admin/color*')) ? 'active' : ''}}">
            <i class="fas fa-cogs nav-icon"></i>
            <p>Цвета</p>
          </a>
        </li>

        {{-- <li class="nav-item ">
          <a href="{{route('admin.detail.index')}}" class="nav-link {{(request()->is('admin/detail*')) ? 'active' : ''}}">
            <i class="fas fa-cogs nav-icon"></i>
            <p>Главное в деталях</p>
          </a>
        </li> --}}
        <li class="nav-item ">
          <a href="{{route('admin.product.index')}}" class="nav-link {{(request()->is('admin/product*')) ? 'active' : ''}}">
            <i class="fas fa-cogs nav-icon"></i>
            <p>Продукция</p>
          </a>
        </li>

        {{-- <li class="nav-item ">
          <a href="{{route('admin.hero.index')}}" class="nav-link {{(request()->is('admin/hero*')) ? 'active' : ''}}">
            <i class="fas fa-cogs nav-icon"></i>
            <p>Наши герои</p>
          </a>
        </li> --}}
        

        <li class="nav-item ">
          <a href="{{route('admin.insta.index')}}" class="nav-link {{(request()->is('admin/instagram*')) ? 'active' : ''}}">
            <i class="fas fa-cogs nav-icon"></i>
            <p>Для разработчиков</p>
          </a>
        </li>
      
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>