<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Menu</li>
        <li
            class="sidebar-item ">
            <a href="/beranda" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li
            class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-stack"></i>
                <span>Tambahkan Data</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item  ">
                    <a href="/tambah_pegawai" class="submenu-link">Tambah Data Pegawai</a>
                </li>
                <li class="submenu-item  ">
                    <a href="/tambah_admin" class="submenu-link">Tambah Data Admin</a>
                </li>
            </ul>
        </li>
        <li
            class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-collection-fill"></i>
                <span>Edit Data</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item  ">
                    <a href="/pegawai" class="submenu-link">Edit Data Pegawai</a>
                </li>
                <li class="submenu-item  ">
                    <a href="/admin" class="submenu-link">Edit Data Admin</a>
                </li>
            </ul>
        </li>
        <li
            class="sidebar-item  ">
            <a href="{{ route('admin.logout') }}" class='sidebar-link'>
                <i class="bi bi-cash"></i>
                <span>Logout</span>
            </a>
        </li>
    </ul>
</div>
</div>
</div>
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
