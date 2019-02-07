<div class="left-sidebar-pro">
    <nav id="sidebar">
        <div class="sidebar-header">
            <a href="#"><img src="{{ asset('backend/img/message/1.jpg') }}" alt="" />
            </a>
            <h3>Andrar Son</h3>
            <p>Developer</p>
            <strong>AP+</strong>
        </div>
        <div class="left-custom-menu-adp-wrap">
            <ul class="nav navbar-nav left-sidebar-menu-pro">
                <li class="nav-item">
                    <a href="#" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Home</span></a>
                </li>
                <li class="nav-item"><a href="#" class="nav-link dropdown-toggle"><i class="fa big-icon fa-envelope"></i> <span class="mini-dn">Mailbox</span></a>
                </li>
                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-flask"></i> <span class="mini-dn">Portfolio</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                        <a href="{{ route('portfolio.index') }}" class="dropdown-item">Portflios</a>
                        <a href="{{ route('portfolio.create') }}" class="dropdown-item">Add Portfolio</a>
                        <a href="{{ route('category.index') }}" class="dropdown-item">Portfolio Category</a>
                    </div>
                </li>
                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-pie-chart"></i> <span class="mini-dn">Team</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                        <a href="{{ route('team.index') }}" class="dropdown-item">Team Members</a>
                        <a href="{{ route('team.create') }}" class="dropdown-item">Add Member</a>
                    </div>
                </li>
                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-bar-chart-o"></i> <span class="mini-dn">Profile</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown chart-left-menu-std animated flipInX">
                        <a href="bar-charts.html" class="dropdown-item">Profile Info</a>
                        <a href="line-charts.html" class="dropdown-item">Update Info</a>
                    </div>
                </li>
                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-bar-chart-o"></i> <span class="mini-dn">Testimonial</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown chart-left-menu-std animated flipInX">
                        <a href="{{ route('testimonial.index') }}" class="dropdown-item">Testimonials</a>
                        <a href="{{ route('testimonial.create') }}" class="dropdown-item">Add Testimonial</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>