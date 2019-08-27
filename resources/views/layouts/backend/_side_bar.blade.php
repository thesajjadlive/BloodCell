<div class="sidebar-inner slimscroll">
    <div id="sidebar-menu" class="sidebar-menu">
        <ul>
            <li class="menu-title">Main</li>
            <li class="active">
                <a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
            </li>
            <li>
                <a href="{{ route('campaign.index') }}"><i class="fa fa-hospital-o"></i> <span>Campaign</span></a>
            </li>
            <li class="submenu">
                <a href="#"><i class="fa fa-user"></i> <span> Employees </span> <span class="menu-arrow"></span></a>
                <ul style="display: none;">
                    <li><a href="employees.html">Employees List</a></li>
                    <li><a href="leaves.html">Leaves</a></li>
                    <li><a href="holidays.html">Holidays</a></li>
                    <li><a href="attendance.html">Attendance</a></li>
                </ul>
            </li>

        </ul>
    </div>
</div>
