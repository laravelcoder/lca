@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

             

            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">@lang('quickadmin.qa_dashboard')</span>
                </a>
            </li>

            
            @can('dashboard_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i>
                    <span class="title">@lang('quickadmin.dashboards.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('lca_dashboard_access')
                <li class="{{ $request->segment(2) == 'lca_dashboards' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.lca_dashboards.index') }}">
                            <i class="fa fa-dashboard"></i>
                            <span class="title">
                                @lang('quickadmin.lca-dashboard.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('analytical_access')
                <li class="{{ $request->segment(2) == 'analyticals' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.analyticals.index') }}">
                            <i class="fa fa-bar-chart-o"></i>
                            <span class="title">
                                @lang('quickadmin.analytical.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('marketing_access')
                <li class="{{ $request->segment(2) == 'marketings' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.marketings.index') }}">
                            <i class="fa fa-money"></i>
                            <span class="title">
                                @lang('quickadmin.marketing.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('call_metric_access')
                <li class="{{ $request->segment(2) == 'call_metrics' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.call_metrics.index') }}">
                            <i class="fa fa-volume-control-phone"></i>
                            <span class="title">
                                @lang('quickadmin.call-metrics.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('booking_dashboard_access')
                <li class="{{ $request->segment(2) == 'booking_dashboards' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.booking_dashboards.index') }}">
                            <i class="fa fa-calendar"></i>
                            <span class="title">
                                @lang('quickadmin.booking-dashboard.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan
            @can('contact_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-phone-square"></i>
                    <span class="title">@lang('quickadmin.contact-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('contact_company_access')
                <li class="{{ $request->segment(2) == 'contact_companies' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.contact_companies.index') }}">
                            <i class="fa fa-building-o"></i>
                            <span class="title">
                                @lang('quickadmin.contact-companies.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('location_access')
                <li class="{{ $request->segment(2) == 'locations' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.locations.index') }}">
                            <i class="fa fa-map-marker"></i>
                            <span class="title">
                                @lang('quickadmin.locations.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('contact_access')
                <li class="{{ $request->segment(2) == 'contacts' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.contacts.index') }}">
                            <i class="fa fa-user-plus"></i>
                            <span class="title">
                                @lang('quickadmin.contacts.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('zipcode_access')
                <li class="{{ $request->segment(2) == 'zipcodes' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.zipcodes.index') }}">
                            <i class="fa fa-gears"></i>
                            <span class="title">
                                @lang('quickadmin.zipcodes.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('website_access')
                <li class="{{ $request->segment(2) == 'websites' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.websites.index') }}">
                            <i class="fa fa-link"></i>
                            <span class="title">
                                @lang('quickadmin.website.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('analytic_access')
                <li class="{{ $request->segment(2) == 'analytics' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.analytics.index') }}">
                            <i class="fa fa-bar-chart"></i>
                            <span class="title">
                                @lang('quickadmin.analytics.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('adword_access')
                <li class="{{ $request->segment(2) == 'adwords' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.adwords.index') }}">
                            <i class="fa fa-address-card-o"></i>
                            <span class="title">
                                @lang('quickadmin.adwords.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan
            @can('task_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-list"></i>
                    <span class="title">@lang('quickadmin.task-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('task_access')
                <li class="{{ $request->segment(2) == 'tasks' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.tasks.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('quickadmin.tasks.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('task_status_access')
                <li class="{{ $request->segment(2) == 'task_statuses' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.task_statuses.index') }}">
                            <i class="fa fa-server"></i>
                            <span class="title">
                                @lang('quickadmin.task-statuses.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('task_tag_access')
                <li class="{{ $request->segment(2) == 'task_tags' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.task_tags.index') }}">
                            <i class="fa fa-server"></i>
                            <span class="title">
                                @lang('quickadmin.task-tags.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('task_calendar_access')
                <li class="{{ $request->segment(2) == 'task_calendars' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.task_calendars.index') }}">
                            <i class="fa fa-calendar"></i>
                            <span class="title">
                                @lang('quickadmin.task-calendar.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan
            @can('assets_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-book"></i>
                    <span class="title">@lang('quickadmin.assets-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('asset_access')
                <li class="{{ $request->segment(2) == 'assets' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.assets.index') }}">
                            <i class="fa fa-book"></i>
                            <span class="title">
                                @lang('quickadmin.assets.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('assets_category_access')
                <li class="{{ $request->segment(2) == 'assets_categories' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.assets_categories.index') }}">
                            <i class="fa fa-tags"></i>
                            <span class="title">
                                @lang('quickadmin.assets-categories.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('assets_location_access')
                <li class="{{ $request->segment(2) == 'assets_locations' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.assets_locations.index') }}">
                            <i class="fa fa-map-marker"></i>
                            <span class="title">
                                @lang('quickadmin.assets-locations.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('assets_status_access')
                <li class="{{ $request->segment(2) == 'assets_statuses' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.assets_statuses.index') }}">
                            <i class="fa fa-server"></i>
                            <span class="title">
                                @lang('quickadmin.assets-statuses.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('assets_history_access')
                <li class="{{ $request->segment(2) == 'assets_histories' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.assets_histories.index') }}">
                            <i class="fa fa-th-list"></i>
                            <span class="title">
                                @lang('quickadmin.assets-history.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan
            @can('user_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title">@lang('quickadmin.user-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('role_access')
                <li class="{{ $request->segment(2) == 'roles' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.roles.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('quickadmin.roles.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('user_access')
                <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                @lang('quickadmin.users.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('user_action_access')
                <li class="{{ $request->segment(2) == 'user_actions' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.user_actions.index') }}">
                            <i class="fa fa-th-list"></i>
                            <span class="title">
                                @lang('quickadmin.user-actions.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan
            @can('booking_access')
            <li class="{{ $request->segment(2) == 'bookings' ? 'active' : '' }}">
                <a href="{{ route('admin.bookings.index') }}">
                    <i class="fa fa-calendar"></i>
                    <span class="title">@lang('quickadmin.booking.title')</span>
                </a>
            </li>
            @endcan
            
            @can('content_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-book"></i>
                    <span class="title">@lang('quickadmin.content-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('content_category_access')
                <li class="{{ $request->segment(2) == 'content_categories' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.content_categories.index') }}">
                            <i class="fa fa-folder"></i>
                            <span class="title">
                                @lang('quickadmin.content-categories.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('content_tag_access')
                <li class="{{ $request->segment(2) == 'content_tags' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.content_tags.index') }}">
                            <i class="fa fa-tags"></i>
                            <span class="title">
                                @lang('quickadmin.content-tags.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('content_page_access')
                <li class="{{ $request->segment(2) == 'content_pages' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.content_pages.index') }}">
                            <i class="fa fa-file-o"></i>
                            <span class="title">
                                @lang('quickadmin.content-pages.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-line-chart"></i>
                    <span class="title">Generated Reports</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                   <li class="{{ $request->is('/reports/bookings-report') }}">
                        <a href="{{ url('/admin/reports/bookings-report') }}">
                            <i class="fa fa-line-chart"></i>
                            <span class="title">Bookings Report</span>
                        </a>
                    </li>
                </ul>
            </li>

            
            @php ($unread = App\MessengerTopic::countUnread())
            <li class="{{ $request->segment(2) == 'messenger' ? 'active' : '' }} {{ ($unread > 0 ? 'unread' : '') }}">
                <a href="{{ route('admin.messenger.index') }}">
                    <i class="fa fa-envelope"></i>

                    <span>Messages</span>
                    @if($unread > 0)
                        {{ ($unread > 0 ? '('.$unread.')' : '') }}
                    @endif
                </a>
            </li>
            <style>
                .page-sidebar-menu .unread * {
                    font-weight:bold !important;
                }
            </style>



            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('auth.change_password') }}">
                    <i class="fa fa-key"></i>
                    <span class="title">@lang('quickadmin.qa_change_password')</span>
                </a>
            </li>

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('quickadmin.qa_logout')</span>
                </a>
            </li>
        </ul>
    </section>
</aside>

