<header class="main-header">

    <a href="#" class="logo" style="position: fixed;z-index: 10000;color: white;padding-right:87px !important">
       License2Code
    </a>

    <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button" style="position: fixed;left: 0;margin-left: 0px; top: 0; margin-top: 53px;padding-top:14px;padding-left:19px;color: #333;">
            <span class="sr-only">{{ trans('labels.general.toggle_navigation') }}</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                @if (config('locale.status') && count(config('locale.languages')) > 1)
                    <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <i class="fa fa-language"></i> {{ trans('menus.language-picker.language') }} <span class="caret"></span>
                        </a>
                        @include('includes.partials.lang')
                    </li> -->
                @endif

                <!-- <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="label label-info">0</span>
                    </a>

                    <ul class="dropdown-menu">
                        <li class="header">{{ trans_choice('strings.backend.general.you_have.messages', 0, ['number' => 0]) }}</li>
                        <li class="footer">
                            {{ link_to('#', trans('strings.backend.general.see_all.messages')) }}
                        </li>
                    </ul>
                </li> --><!-- /.messages-menu -->

                <!-- <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-info notification-counter"></span>
                    </a>

                    <ul class="dropdown-menu notification-menu-container">
                    </ul>
                </li>

                <li class="dropdown tasks-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-flag-o"></i>
                        <span class="label label-info">0</span>
                    </a>

                    <ul class="dropdown-menu">
                        <li class="header">{{ trans_choice('strings.backend.general.you_have.tasks', 0, ['number' => 0]) }}</li>
                        <li class="footer">
                            {{ link_to('#', trans('strings.backend.general.see_all.tasks')) }}
                        </li>
                    </ul>
                </li> --><!-- /.tasks-menu -->
                <li>
                    <div class="ms-env">
                        <i class="ms-Icon ms-Icon--AddOnlineMeeting" style="margin-top: 12px;margin-left: -31px; float: left; color: white;"></i>
                        <span class="ms-Label" style="color: rgba(255, 255, 255, 0.88); width: 180px; font-size: 11px;position: absolute;">Environments </span>
                        <span class="ms-Label" style="color: #ffffffe0; width: 180px; font-size: 17px;font-weight: 200;padding-top:13px;">Pty Limited... <button class="ms-Button" style="background: #5c2d91;border: #5c2d91;"><i class="ms-Icon ms-Icon--ChevronUp" style="position: absolute;margin: 4px;cursor: pointer;margin: -11px -9px 4px;"></i></i>
                        </button> </span>
                        <div class="ms-Panel" style="margin-top: 5px;">
                          <button class="ms-Panel-closeButton ms-PanelAction-close">
                            <i class="ms-Panel-closeIcon ms-Icon ms-Icon--Cancel" style="padding-top: 2px;"></i>
                          </button>
                          <div class="ms-Panel-contentInner" style="margin-top: -6px;padding:0 20px 20px">
                            <p class="ms-Panel-headerText">Environments</p>
                            <div class="ms-Panel-content">
                              <div class="ms-SearchBox" style="width: 100%; margin-top: 10px;">
                                <input class="ms-SearchBox-field" type="text" value="" style="width: 100%">
                                <label class="ms-SearchBox-label">
                                  <i class="ms-SearchBox-icon ms-Icon ms-Icon--Search"></i>
                                  <span class="ms-SearchBox-text">Search</span> 
                                </label>
                                <div class="ms-CommandButton ms-SearchBox-clear ms-CommandButton--noLabel">
                                  <button class="ms-CommandButton-button">
                                    <span class="ms-CommandButton-icon"><i class="ms-Icon ms-Icon--Clear"></i></span> 
                                    <span class="ms-CommandButton-label"></span> 
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="ms-setting">
                        <button class="ms-Button ms-Button--indigo"><i class="ms-Icon ms-font-lg ms-Icon--Settings" style="color: white;padding-top: 3px;"></i></button>
                        <div class="ms-Panel">
                          <button class="ms-Panel-closeButton ms-PanelAction-close">
                            <i class="ms-Panel-closeIcon ms-Icon ms-Icon--Cancel" style="padding-top: 2px;"></i>
                          </button>
                          <div class="ms-Panel-contentInner">
                            <p class="ms-Panel-headerText">Settings</p>
                            <div class="ms-Panel-content">
                              
                            </div>
                          </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="ms-help">
                    <button class="ms-Button ms-Button--indigo"><i class="ms-Icon ms-font-lg ms-Icon--Help" style="color: white;padding-top: 2px;"></i></button>
                    <div class="ms-Panel">
                      <button class="ms-Panel-closeButton ms-PanelAction-close">
                        <i class="ms-Panel-closeIcon ms-Icon ms-Icon--Cancel" style="padding-top: 3px;"></i>
                      </button>
                      <div class="ms-Panel-contentInner helpful" style="margin-top: 70px;padding:0 20px 20px">
                        <div style="display: flex;">
                          <i class="ms-Panel-closeIcon ms-Icon ms-Icon--ChromeBack" style="padding-top: 8px; cursor: pointer; color: #a7a7a7"></i>
                          <a class="" href="{{ route('admin.dashboard') }}"><i class="ms-Panel-closeIcon ms-Icon ms-Icon--Home" style="padding-top: 4px;padding-left: 5px; padding-right: 10px; cursor: pointer; color: #a7a7a7"></i></a>
                          
                          <div class="ms-SearchBox" style="width: 100%;">
                            <input class="ms-SearchBox-field" type="text" value="" style="width: 100%">
                            <label class="ms-SearchBox-label">
                              <i class="ms-SearchBox-icon ms-Icon ms-Icon--Search"></i>
                              <span class="ms-SearchBox-text">Search help</span> 
                            </label>
                            <div class="ms-CommandButton ms-SearchBox-clear ms-CommandButton--noLabel">
                              <button class="ms-CommandButton-button">
                                <span class="ms-CommandButton-icon"><i class="ms-Icon ms-Icon--Clear"></i></span> 
                                <span class="ms-CommandButton-label"></span> 
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="card" style="padding: 15px; padding-top: 20px;margin-top: 10px; background-color: white">
                          <h4 class="ms-Label" style="font-size: 14px; font-weight: bold;">Sign your messages with style</h4>
                          <p class="ms-Label" style="font-size: 14px">Lorem ipsum is so ubiquitous because it is so versatile. Select how many paragraphs you want, copy, paste, and break the lines wherever it is convenient. Real copy doesn't work that way.</p>
                          <label class="ms-Label" style="font-size: 14px; color: #0078d4; cursor: pointer;">Learn more</label>
                        </div>
                        <div class="card" style="padding: 15px; padding-top: 20px;margin-top: 20px; background-color: white">
                          <h4 class="ms-Label" style="font-size: 14px; font-weight: bold;">Let them know you're away</h4>
                          <p class="ms-Label" style="font-size: 14px">Lorem ipsum is so ubiquitous because it is so versatile. Select how many paragraphs you want, copy, paste, and break the lines wherever it is convenient. Real copy doesn't work that way.</p>
                          <label class="ms-Label" style="font-size: 14px; color: #0078d4; cursor: pointer;">Learn more</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                    <div class="ms-PanelExample">
                      <button class="ms-Button" style="background-color: #5c2d91; border: 1px solid #5c2d91">
                        <div class="ms-Persona-imageArea" style="max-width: 32px;height: 35px;position: unset;margin-top: 3px;margin-left: 3px;">
                          <div class="ms-Persona-initials ms-Persona-initials--purple" style="line-height: 35px;background-color: #0078d4;font-size: 16px;font-weight: 300 !important;">ML</div>
                        </div>
                      </button>
                      <div class="ms-Panel">
                        <button class="ms-Panel-closeButton ms-PanelAction-close">
                          <i class="ms-Panel-closeIcon ms-Icon ms-Icon--Cancel"></i>
                        </button>
                        <div class="ms-Panel-contentInner">
                          <p class="ms-Panel-headerText"></p>
                          <div class="ms-Panel-content">
                            <div class="user-header">
                            <img src="{{ access()->user()->picture }}" class="img-circle" alt="User Avatar" />
                            <p>
                                {{-- access()->user()->name }} - {{ implode(", ", access()->user()->roles->lists('name')->toArray()) --}}
                                <small>{{ trans('strings.backend.general.member_since') }} {{ access()->user()->created_at->format("m/d/Y") }}</small>
                            </p>
                        </div>

                        <div class="user-body">
                            <div class="col-xs-12 text-center">
                                {{ link_to_route("admin.profile.edit", 'Edit Profile') }}
                            </div>
                        </div>
                        <div class="user-body border-left">
                            <div class="col-xs-12 text-center">
                                {{ link_to_route('admin.access.user.change-password','Change Password', access()->user()->id) }}
                            </div>
                            {{-- <div class="col-xs-4 text-center">
                                {{ link_to_route('dashboard', 'Link') }}
                            </div> --}}
                        </div>

                        <div class="user-footer">
                            <div class="pull-left" style="margin-top: 20px;">
                                <a href="{!! route('frontend.index') !!}" class="btn btn-default btn-flat">
                                    <i class="fa fa-home"></i>
                                    {{ trans('navs.general.home') }}
                                </a>
                            </div>
                            <div class="pull-right" style="margin-top: 20px;">
                                <a href="{!! route('frontend.auth.logout') !!}" class="btn btn-danger btn-flat">
                                    <i class="fa fa-sign-out"></i>
                                    {{ trans('navs.general.logout') }}
                                </a>
                            </div>
                        </div>
                          </div>

                        </div>
                      </div>
                    </div>
                </li>
                <!-- <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ access()->user()->picture }}" class="user-image" alt="User Avatar"/>
                        <span class="hidden-xs">{{ access()->user()->first_name }}</span>
                        <div class="clearfix"></div>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="user-header">
                            <img src="{{ access()->user()->picture }}" class="img-circle" alt="User Avatar" />
                            <p>
                                {{-- access()->user()->name }} - {{ implode(", ", access()->user()->roles->lists('name')->toArray()) --}}
                                <small>{{ trans('strings.backend.general.member_since') }} {{ access()->user()->created_at->format("m/d/Y") }}</small>
                            </p>
                        </li>

                        <li class="user-body">
                            <div class="col-xs-12 text-center">
                                {{ link_to_route("admin.profile.edit", 'Edit Profile') }}
                            </div>
                        </li>
                        <li class="user-body border-left">
                            <div class="col-xs-12 text-center">
                                {{ link_to_route('admin.access.user.change-password','Change Password', access()->user()->id) }}
                            </div>
                            {{-- <div class="col-xs-4 text-center">
                                {{ link_to_route('dashboard', 'Link') }}
                            </div> --}}
                        </li>

                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="{!! route('frontend.index') !!}" class="btn btn-default btn-flat">
                                    <i class="fa fa-home"></i>
                                    {{ trans('navs.general.home') }}
                                </a>
                            </div>
                            <div class="pull-right">
                                <a href="{!! route('frontend.auth.logout') !!}" class="btn btn-danger btn-flat">
                                    <i class="fa fa-sign-out"></i>
                                    {{ trans('navs.general.logout') }}
                                </a>
                            </div>
                        </li>
                    </ul>
                </li> -->
            </ul>
        </div><!-- /.navbar-custom-menu -->
    </nav>
</header>
