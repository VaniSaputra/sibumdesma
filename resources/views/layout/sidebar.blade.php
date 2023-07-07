 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link text-center">
      <span class="brand-text font-weight"><strong>SI BUMDesma</strong></span>
    </a>

    <!-- BUKAAN Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <li class="nav-item {{ \Route::is('dashboard.*') ? 'menu-open' : ''}}  ">
                      <a href="/dashboard" class="nav-link {{ \Route::is('dashboard.*') ? 'active' : ''}} ">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p> Dashboard </p>
                      </a>
                  </li>

            <!-- ===================================    MENU DATA SPP    ========================================== -->
                   <!-- MENU DATA SPP  -->
                  <li class="nav-header">Simpan Pinjam</li>
                  <li class="nav-item ">
                    <a href="" class="nav-link {{ \Route::is('kelompokSPP.*','anggotaSPP.*','formKelompok.*','formAnggota.*',
                            'pribadiSPP.*','kendaraanSPP.*','formPribadi.*') ? 'active' : '' }} ">
                            <i class="nav-icon fas fa-copy"></i>
                            <p> Data Pinjaman <i class="fas fa-angle-left right"></i> </p>
                    </a>
                    <!-- Isi DropDown Navbar -->
                    <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="/kelompokSPP" class="nav-link {{ \Route::is('kelompokSPP.*','anggotaSPP.*','formKelompok.*','formAnggota.*') ? 'active' : '' }} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p> SPP Perguliran </p>
                            </a>
                          </li>
                          <li class="nav-item">
                              <a href="/pribadiSPP" class="nav-link {{ \Route::is('pribadiSPP.*','kendaraanSPP.*','formPribadi.*') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> SPP Pribadi </p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="/proposalPengajuan" class="nav-link {{ \Route::is('proposalPengajuan.*') ? 'active' : '' }}">
                              <i class="far fa-circle nav-icon"></i>
                                  <p> Proposal Pengajuan </p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="pages/layout/boxed.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p> Verifikasi </p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="pages/layout/boxed.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p> Pendanaan </p>
                              </a>
                          </li> 
                          <li class="nav-item">
                              <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p> SPK Kelompok </p>
                              </a>
                          </li>
                    </ul>
                  </li>
                  <!-- MENU DATA SPP  -->

                  <!--SETORAN SPP -->
                  <li class="nav-item">
                          <a href="" class="nav-link">
                              <i class="nav-icon fas bi-cash-stack"></i> 
                              <p> Setoran <i class="fas fa-angle-left right"></i> </p>
                          </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="pages/forms/general.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Input Setoran</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="pages/forms/advanced.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Setoran Kelompok</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="pages/forms/editors.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Perkembangan SPP</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <!--  SETORAN SPP  -->

                  <!--  BUKU PINJAMAN  -->
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas bi-book-half"></i>
                          <p> Buku Pinjaman <i class="fas fa-angle-left right"></i> </p>
                      </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                            <a href="pages/tables/simple.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Buku SPP Perguliran</p>
                            </a>
                      </li>
                      <li class="nav-item">
                            <a href="pages/tables/data.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Buku SPP Pribadi</p>
                            </a>
                      </li>
                      <li class="nav-item">
                            <a href="pages/tables/jsgrid.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Kolektibilitas</p>
                            </a>
                      </li>
                    </ul>
                  </li>
                  <!--  bUKU pINJAMAN  -->
            <!-- ===================================    MENU DATA SPP    ========================================== -->


            <!-- ===================================    MENU FINANCE    ========================================== -->

                  <!--  cAO / Chart Of Account  -->
                  <li class="nav-header">Finance</li>
                  <li class="nav-item">
                        <a href="" class="nav-link">
                              <i class="nav-icon fas bi-journal-text"></i>
                              <p> Akun / CAO <i class="fas fa-angle-left right"></i> </p>
                        </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/forms/general.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Akun Global</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/forms/advanced.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Akun Unit Usaha</p>
                            </a>
                        </li>
                    </ul>
                  </li>
                  <!--  cAO / Chart Of Account  -->

                  <!--  Journal  -->
                  <li class="nav-item">
                      <a href="" class="nav-link">
                            <i class="nav-icon fas bi-journals"></i>
                            <p> Journal <i class="fas fa-angle-left right"></i> </p>
                      </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/tables/simple.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Kas Masuk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/tables/data.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Kas Keluar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/tables/jsgrid.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Journal Umum</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/tables/jsgrid.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Buku Bank</p>
                            </a>
                      </li>
                    </ul>
                  </li>
                   <!--  Journal  -->

                   <!--  Bagi Hasil  -->
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas bi-bezier2"></i>
                          <p> Bagi Hasil <i class="fas fa-angle-left right"></i> </p>
                      </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="pages/tables/simple.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Atur Bagi Hasil</p>
                          </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/tables/data.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Bayar Bagi Hasil</p>
                            </a>
                        </li>
                    </ul>
                  </li>
                     <!--  Bagi Hasil  -->
         
          <!-- ===================================    MENU INVENTORY    ========================================== -->

              <!-- BAGIAN INVENTORI -->
                <li class="nav-header">Inventory</li>
                <!-- MENU SETORAN -->
                <li class="nav-item">
                  <a href="" class="nav-link">
                    <i class="nav-icon fas bi-ui-checks-grid"></i>
                    <p>
                      Inventaris
                    </p>
                  </a>
                </li>

          <!-- ===================================    MENU INVENTORY    ========================================== -->


          <!-- ===================================    MENU LAPORAN    ========================================== -->

                <li class="nav-header">Laporan</li>
                <li class="nav-item">
                  <a href="" class="nav-link">
                      <i class="nav-icon fas bi-trello"></i>
                      <p> Laporan Ops </p>
                  </a>

                <li class="nav-item">
                  <a href="" class="nav-link">
                      <i class="nav-icon fas bi-book-fill"></i>
                      <p> Buku Besar </p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="" class="nav-link">
                      <i class="nav-icon fas bi-layout-sidebar-inset"></i> 
                      <p> Neraca </p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="" class="nav-link">
                      <i class="nav-icon fas fa-edit bi bi-hr"></i>
                      <p> Laba Rugi</p>
                  </a>
                </li>

          <!-- ===================================    MENU USER    ========================================== -->
              <li class="nav-header">User</li>
              <li class="nav-item">
                  <a href="" class="nav-link">
                      <i class="nav-icon fas bi-person-workspace"></i>
                      <p> Pengguna </p>
                  </a>
              </li>

              <li class="nav-item">
                  <a href="" class="nav-link">
                      <i class="nav-icon fas bi-share-fill"></i>
                      <p>  Hak Akses </p>
                  </a>
              </li>

              <li class="nav-item">
                  <a href="" class="nav-link">
                      <i class="nav-icon fas bi-building-fill"></i>
                      <p> Data Instansi </p>
                  </a>
              </li>
          <!-- ===================================    MENU USER    ========================================== -->

          
            </ul>       <!-- /.sidebar-menu -->
        </nav>       <!-- /.sidebar-menu -->
    </div>     <!-- /.sidebar -->

  </aside>
