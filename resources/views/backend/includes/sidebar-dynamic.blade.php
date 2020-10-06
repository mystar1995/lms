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
            <li class="treeview3">
                <a href="#" style="display: flex;">
                    <i class="ms-Icon ms-font-lg ms-Icon--Boards" style="margin-right:21px;"></i>
                    <span style="padding-top: 2px;">{{ trans('menus.backend.blog.management') }}</span>
                    <i class="fa fa-angle-up pull-right" style="margin-right: 15px;font-size: 20px;"></i>
                </a>

                <ul class="treeview-menu3 {{ active_class(Active::checkUriPattern('admin/blog*'), 'menu-open') }}" style="display: none;">
                    @permission('view-blog-category')
                    <li class="{{ active_class(Active::checkUriPattern('admin/blogCategories*')) }}">
                        <a href="{{ route('admin.blogCategories.index') }}" class="b_cate">
                            <span>{{ trans('menus.backend.blogcategories.management') }}</span>
                        </a>
                    </li>
                    @endauth
                    @permission('view-blog-tag')
                    <li class="{{ active_class(Active::checkUriPattern('admin/blogTags*')) }}">
                        <a href="{{ route('admin.blogTags.index') }}" class="b_tag">
                            <span>Course Tag (week)</span>
                        </a>
                    </li>
                    @endauth
                    @permission('view-blog')
                    <li class="{{ active_class(Active::checkUriPattern('admin/blogs*')) }}">
                        <a href="{{ route('admin.blogs.index') }}" class="b_con">
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
            <li class="treeview2">
                <a href="#" style="display: flex;">
                    <i class="ms-Icon ms-font-lg ms-Icon--FabricOpenFolderHorizontal" style="margin-right:21px;"></i>
                    <span style="padding-top: 2px;">Knowledgebase</span>
                    <i class="fa fa-angle-up pull-right" style="margin-right: 15px;font-size: 20px;"></i>
                </a>

                <ul class="treeview-menu2" style="display: none;">
                    <li class="{{ active_class(Active::checkUriPattern('admin/wcode')) }}">
                        <a href="{{ route('admin.wcode') }}" class="code">
                            <span>Code of Ethics</span>
                        </a>
                    </li>
                    <li class="{{ active_class(Active::checkUriPattern('admin/wdesign')) }}">
                        <a href="{{ route('admin.wdesign') }}" class="design">
                            <span>Analysis & Design</span>
                        </a>
                    </li>
                    <li class="{{ active_class(Active::checkUriPattern('admin/wdev')) }}">
                        <a href="{{ route('admin.wdev') }}" class="dev">
                            <span>Development</span>
                        </a>
                    </li>
                    <li class="{{ active_class(Active::checkUriPattern('admin/wqa')) }}">
                        <a href="{{ route('admin.wqa') }}" class="qa">
                            <span>QA & Testing</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="treeview1">
                <a href="#" style="display: flex;">
                    <i class="ms-Icon ms-font-lg ms-Icon--DelveAnalyticsLogo" style="margin-right:21px;"></i>
                    <span style="padding-top: 2px;">Directories</span>
                    <i class="fa fa-angle-up pull-right" style="margin-right: 15px;font-size: 20px;"></i>
                </a>

                <ul class="treeview-menu1" style="display: none;">
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
