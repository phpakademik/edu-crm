<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Main</li>
                <li>
                    <a href="/dashboard" class="waves-effect">
                        <i class="ti-home"></i>
                        <span>Asosiy</span>
                    </a>
                </li>
                <li>
                    <a href="/dashboard/students" class="waves-effect">
                        <i class="fas fa-users"></i>
                        <span>O'quvchilar</span>
                    </a>
                </li>
                <li>
                    <a href="/dashboard/chiqim" class="waves-effect">
                        <i class="fas fa-money-bill"></i>
                        <span>Chiqimlar</span>
                    </a>
                </li>


                <li>
                    <a class="waves-effect" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                        <i class="ion ion-md-log-out"></i><span>Chiqish</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
