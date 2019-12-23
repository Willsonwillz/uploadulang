 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('admin/dist/img/invuya-logo.png')}}" alt="Invuya Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Investasi Budidaya</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= auth()->user()->name ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Kelola Akun
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=".#" class="nav-link">
                  <i class="fas fa-money-bill-wave-alt nav-icon "></i>
                  <p>Kelola Investor</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= route('petambak-index') ?>" class="nav-link">
                  <i class="fas fa-fish nav-icon"></i>
                  <p>Kelola Petambak Ikan</p>
                </a>
              </li>
          </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-hourglass-half"></i>
              <p>
                Proyek Investasi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Riwayat Investasi
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tasks"></i>
              <p>
                Komoditas
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{asset('admin/pages/layout/top-nav.html')}}" class="nav-link">
                  <i class="fas fa-comments-dollar nav-icon"></i>
                  <p>Kelola Pemasaran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{asset('admin/pages/layout/boxed.html')}}" class="nav-link">
                  <i class="fas fa-shopping-cart nav-icon"></i>
                  <p>Kelola Pemesanan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Berita
              </p>
            </a>
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="fas fa-file-alt nav-icon"></i>
                  <p>Laporan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                  <i class="fa fa-credit-card nav-icon"></i>
                  <p>Pembayaran</p>
                </a>
              </li>

          <li class="nav-item">
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" class="nav-link">
                 <i class="nav-icon fas fa-door-open"></i>
              <p>Keluar</p>
            </a>     
                      
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
             </form>
              
          </li> 
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>