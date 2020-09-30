<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" style="margin-top: 47px;">
            <!-- <li class="header">{{ trans('menus.backend.sidebar.general') }}</li> -->
            <li class="{{ active_class(Active::checkUriPattern('admin/dashboard')) }}">
                <a href="{{ route('admin.dashboard') }}" style="display: flex;">
                    <i class="ms-Icon ms-font-lg ms-Icon--Home" style="margin-right:21px;"></i>
                    <span style="padding-top: 2px;">Home</span>
                </a>
            </li>
            <li class="{{ active_class(Active::checkUriPattern('admin/speakups')) }}">
                <a href="{{ route('admin.speakups') }}" style="display: flex;">
                    <i class="ms-Icon ms-font-lg ms-Icon--Speakers" style="margin-right:21px;"></i>
                    <span style="padding-top: 2px;">Speak Up</span>
                </a>
            </li>
            <li class="{{ active_class(Active::checkUriPattern('admin/blog*')) }} treeview">
                <a href="#" style="display: flex;">
                    <i class="ms-Icon ms-font-lg ms-Icon--Boards" style="margin-right:21px;"></i>
                    <span style="padding-top: 2px;">{{ trans('menus.backend.blog.management') }}</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>

                <ul class="treeview-menu {{ active_class(Active::checkUriPattern('admin/blog*'), 'menu-open') }}" style="display: none;">
                    @permission('view-blog-category')
                    <li class="{{ active_class(Active::checkUriPattern('admin/blogCategories*')) }}">
                        <a href="#">
                            <span>{{ trans('menus.backend.blogcategories.management') }}</span>
                        </a>
                    </li>
                    @endauth
                    @permission('view-blog-tag')
                    <li class="{{ active_class(Active::checkUriPattern('admin/blogTags*')) }}">
                        <a href="#">
                            <span>Course Tag (week)</span>
                        </a>
                    </li>
                    @endauth
                    @permission('view-blog')
                    <li class="{{ active_class(Active::checkUriPattern('admin/blogs*')) }}">
                        <a href="{{ route('admin.blogs.index') }}">
                            <span>{{ trans('menus.backend.blog.management') }}</span>
                        </a>
                    </li>
                    @endauth
                </ul>
            </li>
            <li class="{{ active_class(Active::checkUriPattern('admin/ktest')) }}">
                <a href="{{ route('admin.ktest') }}" style="display: flex;">
                    <i class="ms-Icon ms-font-lg ms-Icon--AddEvent" style="margin-right:21px;"></i>
                    <span style="padding-top: 2px;">Knowledge Tests</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#" style="display: flex;">
                    <i class="ms-Icon ms-font-lg ms-Icon--FabricOpenFolderHorizontal" style="margin-right:21px;"></i>
                    <span style="padding-top: 2px;">Knowledgebase</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>

                <ul class="treeview-menu" style="display: none;">
                    <li class="">
                        <a href="#">
                            <span>Code of Ethics</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="#">
                            <span>Analysis & Design</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="#">
                            <span>Development</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="#">
                            <span>QA & Testing</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#" style="display: flex;">
                    <i class="ms-Icon ms-font-lg ms-Icon--DelveAnalyticsLogo" style="margin-right:21px;"></i>
                    <span style="padding-top: 2px;">Directories</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>

                <ul class="treeview-menu" style="display: none;">
                    <li class="">
                        <a href="#">
                            <span>Languages</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="#">
                            <span>Databases</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="#">
                            <span>Frameworks</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="#">
                            <span>Components</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="#">
                            <span>Discover</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="{{ active_class(Active::checkUriPattern('admin/requests')) }}">
                <a href="{{ route('admin.requests') }}" style="display: flex;">
                    <i class="ms-Icon ms-font-lg ms-Icon--Help" style="margin-right:21px;"></i>
                    <span style="padding-top: 2px;">Requests</span>
                </a>
            </li>
            <li class="{{ active_class(Active::checkUriPattern('admin/sitenotification')) }}">
                <a href="{{ route('admin.sitenotification') }}" style="display: flex;">
                    <i class="ms-Icon ms-font-lg ms-Icon--Warning" style="margin-right:21px;"></i>
                    <span style="padding-top: 2px;">Notifications</span>
                </a>
            </li>         
            <li class="header">{{ trans('menus.backend.sidebar.system') }}</li>
            {{ renderMenuItems(getMenuItems()) }}   
            <li class="{{ active_class(Active::checkUriPattern('admin/analytics')) }}">
                <a href="{{ route('admin.analytics') }}" style="display: flex;">
                    <i class="ms-Icon ms-font-lg ms-Icon--DynamicSMBLogo" style="margin-right:21px;"></i>
                    <span style="padding-top: 2px;">Analytics</span>
                </a>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section><!-- /.sidebar -->
</aside>
