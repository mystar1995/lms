
<header class="main-header" style="">

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
                        <span class="ms-Label" style="color: #ffffffe0; width: 180px; font-size: 17px;font-weight: 200;padding-top:13px;">Pty Limited... <button class="ms-Button" style="background-color: unset;border: unset;"><i class="ms-Icon ms-Icon--ChevronDown" style="position: absolute;margin: 4px;cursor: pointer;margin: -11px -9px 4px;"></i></i>
                        </button> </span>
                        <div class="ms-Panel" style="margin-top: 5px;">
                          <button class="ms-Panel-closeButton ms-PanelAction-close arrow_close">
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
                            <p class="ms-Panel-headerText" style="font-weight: bolder;margin-left: 18px;">Settings</p>
                          <button class="ms-Panel-closeButton ms-PanelAction-close">
                            <i class="ms-Panel-closeIcon ms-Icon ms-Icon--Cancel" style="padding-top: 2px;"></i>
                          </button>
                              <div class="ms-Panel-contentInner">
                            <p class="ms-Panel-headerText" style="font-weight: bolder;font-size: 17px;margin-top: unset;">Themes</p>
                            <div class="ms-Panel-content">
                                <div class="set_area" style="height: 115px; overflow-y: hidden;">
                                    <img class="1" value="1" src="{{ asset('img/theme/1.png') }}">
                                    <img class="2" src="{{ asset('img/theme/2.png') }}">
                                    <img class="default" src="{{ asset('img/theme/default.png') }}">
                                    <img class="3" src="{{ asset('img/theme/3.png') }}">
                                    <img class="4" src="{{ asset('img/theme/4.png') }}">
                                    <img class="5" src="{{ asset('img/theme/5.png') }}">
                                    <img class="6" src="{{ asset('img/theme/6.png') }}">
                                    <img class="7" src="{{ asset('img/theme/7.png') }}">
                                    <img class="8" src="{{ asset('img/theme/8.png') }}">
                                    <img class="9" src="{{ asset('img/theme/9.png') }}">
                                    <img class="10" src="{{ asset('img/theme/10.png') }}">
                                    <img class="11" src="{{ asset('img/theme/11.png') }}">
                                    <img class="22" src="{{ asset('img/theme/22.png') }}">
                                    <img class="33" src="{{ asset('img/theme/33.png') }}">
                                    <img class="44" src="{{ asset('img/theme/44.png') }}">
                                    <img class="55" src="{{ asset('img/theme/55.png') }}">
                                    <img class="66" src="{{ asset('img/theme/66.png') }}">
                                    <img class="1" src="{{ asset('img/theme/77.png') }}">
                                    <img class="2" src="{{ asset('img/theme/88.png') }}">
                                    <img class="3" src="{{ asset('img/theme/99.png') }}">
                                    <img class="4" src="{{ asset('img/theme/00.png') }}">
                                    <img class="5" src="{{ asset('img/theme/111.png') }}">
                                    <img class="6" src="{{ asset('img/theme/222.png') }}">
                                    <img class="7" src="{{ asset('img/theme/333.png') }}">
                                    <img class="8" src="{{ asset('img/theme/444.png') }}">
                                    <img class="9" src="{{ asset('img/theme/555.png') }}">
                                    <img class="10" src="{{ asset('img/theme/666.png') }}">
                                    <img class="11" src="{{ asset('img/theme/777.png') }}">
                                    <img class="22" src="{{ asset('img/theme/888.png') }}">
                                    <img class="44" src="{{ asset('img/theme/000.png') }}">
                                    <img class="55" src="{{ asset('img/theme/1111.png') }}">
                                    <img class="66" src="{{ asset('img/theme/2222.png') }}">
                                    <img class="1" src="{{ asset('img/theme/3333.png') }}">
                                    <img class="2" src="{{ asset('img/theme/4444.png') }}">
                                    <img class="3" src="{{ asset('img/theme/5555.png') }}">
                                    <img class="4" src="{{ asset('img/theme/6666.png') }}">
                                    <img class="5" src="{{ asset('img/theme/7777.png') }}">
                                    <img class="6" src="{{ asset('img/theme/8888.png') }}">
                                    <img class="7" src="{{ asset('img/theme/9999.png') }}">
                                    <img class="8" src="{{ asset('img/theme/0000.png') }}">
                                </div>
                            </div><br>
                            <span class="ms-Panel-headerText hideset" style="font-size: 17px; cursor: pointer; display: none; margin: unset;">Hide all</span>
                            <span class="ms-Panel-headerText view" style="font-size: 17px; cursor: pointer; margin: unset;">view all</span>
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
                      <button class="ms-Button" style="background-color: unset;border: unset;">
                        <div class="ms-Persona-imageArea" style="max-width: 32px;height: 35px;position: unset;margin-top: 3px;margin-left: 3px;">
                          <div class="ms-Persona-initials ms-Persona-initials--purple" style="line-height: 35px;background-color: #0078d4;font-size: 16px;font-weight: 300 !important;">ML</div>
                        </div>
                      </button>
                      <div class="ms-Panel">
                        <button class="ms-Panel-closeButton ms-PanelAction-close">
                          <i class="ms-Panel-closeIcon ms-Icon ms-Icon--Cancel"></i>
                        </button>
                        <div class="ms-Panel-contentInner">
                          <p class="ms-Panel-headerText" style="margin-top: 0px;font-weight: bolder;">My account</p>
                          <div class="ms-Panel-content" style="margin-top: 20px;">
                            <div class="ms-Persona ms-Persona--xl">
                              <div class="ms-Persona-imageArea">
                                <div class="ms-Persona-initials ms-Persona-initials--blue">ML</div>
                              </div>
                              <div class="ms-Persona-presence">
                                <i class="ms-Persona-presenceIcon ms-Icon ms-Icon--SkypeCheck"></i>
                              </div>
                              <div class="ms-Persona-details">
                                <div class="ms-Persona-primaryText" style="font-size: 17px; font-weight: bolder;">Mlton Lafferty</div>
                                <div class="ms-Persona-optionalText" style="font-weight: bolder;">milton@yac.com</div>
                                <div class="ms-Persona-secondaryText"><a href="{!! route('frontend.index') !!}" style="color: #0065b2; font-weight: bolder;"> My Home</a></div>
                                <div class="ms-Persona-tertiaryText"><a href="{!! route('admin.profile.edit') !!}" style="color: #0065b2; font-weight: bolder;">My account</a></div>
                                <div class="ms-Persona-optionalText"><a href="{!! route('frontend.auth.logout') !!}" style="color: #0065b2; font-weight: bolder;">Sign out</a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- <div class="ms-Panel">
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
                      </div> -->
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
<div class="my_noti" style="width: 100%; height: 85px; background-color: #fceaec; padding-left: 40px;padding-top: 15px; display: flex; display: none;">
  <i class="ms-Icon ms-font-lg ms-Icon--ChromeClose" style="font-size: 10px; font-weight: bolder; cursor: pointer;"></i>
  <div style="margin-left: 20px;">
    The server cannot be reached and therefore<br>
    lore ipsum data loss. Lorem ipsum per secular seculorum.
  </div>
    
</div>
</header>