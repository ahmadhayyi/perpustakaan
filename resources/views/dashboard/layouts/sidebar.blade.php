<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
     <div class="position-sticky pt-3">
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-2 mb-1 text-muted">
               <span>Master Data</span>
               <a class="link-secondary" href="#" aria-label="Add a new report">
                    <span data-feather="plus-circle"></span>
               </a>
          </h6>
          <ul class="nav flex-column">
               <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/book*') || Request::is('/') ? 'active' : ''}}" href="/dashboard/book">
                    <span data-feather="home"></span>
                         Buku
                    </a>
               </li>
               @can('admin')
               <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/category*') ? 'active' : ''}}" href="/dashboard/category">
                    <span data-feather="home"></span>
                         Kategori
                    </a>
               </li>
               <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/user*') ? 'active' : ''}}" href="/dashboard/user">
                    <span data-feather="home"></span>
                         Member
                    </a>
               </li>
               @endcan
          </ul>

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
               <span>Transaksi</span>
               <a class="link-secondary" href="#" aria-label="Add a new report">
                    <span data-feather="plus-circle"></span>
               </a>
          </h6>
          <ul class="nav flex-column mb-2">
               @can('admin')
               <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/transaction*') ? 'active' : ''}}" href="/dashboard/transaction">
                    <span data-feather="home"></span>
                         Transaksi
                    </a>
               </li>
               @endcan
               <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/history*') ? 'active' : ''}}" href="/dashboard/history">
                    <span data-feather="home"></span>
                         Peminjaman
                    </a>
               </li>
          </ul>
     </div>
</nav>