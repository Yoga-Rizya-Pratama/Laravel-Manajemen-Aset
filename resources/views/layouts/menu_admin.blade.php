<div class="h">
    <h5>Menu</h5>
</div>
<div class="menu operator">

    <a href="/admin" class="a-menus " id="a-menu">
        <div class="menus zero">
            <i class="fas fa-home"></i>

            <h5>Home</h5>
        </div>
    </a>

    <a href="/asset" class="a-menus">
        <div class="menus one">
            <i class="fas fa-book satu"></i>

            <h5>Asset</h5>
        </div>
    </a>

    @if (Auth::user()->role == 'admin')
        <a href="/bidang" class="a-menus">
            <div class="menus two">
                <i class="fas fa-book dua"></i>

                <h5>Bidang</h5>
            </div>
        </a>
    @endif

    <a href="/laporan" class="a-menus">
        <div class="menus three">
            <i class="fas fa-book-open"></i>

            <h5>Laporan</h5>

        </div>
    </a>

    @if (Auth::user()->role == 'admin')
    <a href="/user" class="a-menus">
        <div class="menus four">
            <i class="fas fa-user"></i>

            <h5>Users</h5>
        </div>
    </a>
    @endif

</div>

