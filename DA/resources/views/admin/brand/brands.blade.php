@extends('admin.layout')
@section('admin_content')
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="dist/img/AdminLTELogo.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8; justify-content: center;">
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Thanh</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="{{ URL::to('/') }}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Trang chủ</p>
          </a>
        </li>
        <li class="nav-header">Sản phẩm</li>
        <li class="nav-item">
          <a href="#" class="nav-link  active">
            <i class="nav-icon fas fa-bookmark"></i>
            <p>
              Thương hiệu
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ URL::to('/') }}" class="nav-link  active">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách thương hiệu</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ URL::to('/') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm thương hiệu</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Danh mục
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ URL::to('/') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách danh mục</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ URL::to('/') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm danh mục</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-list-ul"></i>
            <p>
              Sản phẩm
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ URL::to('/') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách sản phẩm</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ URL::to('/') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm sản phẩm</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-header">Hóa đơn</li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-file-download"></i>
            <p>
              Hóa đơn nhập
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ URL::to('/') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách hóa đơn</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ URL::to('/') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Nhập hàng</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="{{ URL::to('/') }}" class="nav-link">
            <i class="nav-icon fas fa-paste"></i>
            <p>Đơn đặt hàng</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ URL::to('/') }}" class="nav-link">
            <i class="nav-icon fas fa-file-export"></i>
            <p>Hóa đơn bán</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ URL::to('/') }}" class="nav-link">
            <i class="nav-icon fas fa-times-circle"></i>
            <p>Đơn đã hủy</p>
          </a>
        </li>
        <li class="nav-header">Thống kê</li>
        <li class="nav-item">
          <a href="{{ URL::to('/') }}" class="nav-link">
            <i class="nav-icon fas fa-chart-bar"></i>
            <p>Thống kê sản phẩm</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ URL::to('/') }}" class="nav-link">
            <i class="nav-icon fas fa-file-invoice-dollar"></i>
            <p>Thống kê hóa đơn</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ URL::to('/') }}" class="nav-link">
            <i class="nav-icon fas fa-id-card-alt"></i>
            <p>Thống kê khách hàng</p>
          </a>
        </li>
        <li class="nav-header">Tài khoản</li>
        <li class="nav-item">
          <a href="{{ URL::to('/') }}" class="nav-link">
            <i class="nav-icon fas fa-address-book"></i>
            <p>Danh sách tài khoản</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ URL::to('/') }}" class="nav-link">
            <i class="nav-icon fas fa-user-plus"></i>
            <p>Cấp tài khoản mới</p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
 
  
</div>
<!-- /.content-wrapper -->


@endsection