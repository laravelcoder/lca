<?php

namespace App\Providers;

use App\Role;
use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        $user = \Auth::user();

        
        // Auth gates for: Roles
        Gate::define('role_access', function ($user) {
            return in_array($user->role_id, [1, 7, 8]);
        });
        Gate::define('role_create', function ($user) {
            return in_array($user->role_id, [1, 8]);
        });
        Gate::define('role_edit', function ($user) {
            return in_array($user->role_id, [1, 8]);
        });
        Gate::define('role_view', function ($user) {
            return in_array($user->role_id, [1, 7, 8]);
        });
        Gate::define('role_delete', function ($user) {
            return in_array($user->role_id, [1, 8]);
        });

        // Auth gates for: Contact companies
        Gate::define('contact_company_access', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 5, 6, 7, 8]);
        });
        Gate::define('contact_company_create', function ($user) {
            return in_array($user->role_id, [1, 7, 8]);
        });
        Gate::define('contact_company_edit', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 5, 6, 7, 8]);
        });
        Gate::define('contact_company_view', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 5, 6, 7, 8]);
        });
        Gate::define('contact_company_delete', function ($user) {
            return in_array($user->role_id, [1, 8]);
        });

        // Auth gates for: Lca dashboard
        Gate::define('lca_dashboard_access', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 5, 6, 7, 8]);
        });

        // Auth gates for: Tasks
        Gate::define('task_access', function ($user) {
            return in_array($user->role_id, [1, 8]);
        });
        Gate::define('task_create', function ($user) {
            return in_array($user->role_id, [1, 8]);
        });
        Gate::define('task_edit', function ($user) {
            return in_array($user->role_id, [1, 8]);
        });
        Gate::define('task_view', function ($user) {
            return in_array($user->role_id, [1, 8]);
        });
        Gate::define('task_delete', function ($user) {
            return in_array($user->role_id, [1, 8]);
        });

        // Auth gates for: Assets
        Gate::define('asset_access', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 5, 6, 7, 8]);
        });
        Gate::define('asset_create', function ($user) {
            return in_array($user->role_id, [1, 4, 7, 8]);
        });
        Gate::define('asset_edit', function ($user) {
            return in_array($user->role_id, [1, 7, 8]);
        });
        Gate::define('asset_view', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 5, 6, 7, 8]);
        });
        Gate::define('asset_delete', function ($user) {
            return in_array($user->role_id, [1, 8]);
        });

        // Auth gates for: Dashboards
        Gate::define('dashboard_access', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 5, 6, 7, 8]);
        });

        // Auth gates for: Users
        Gate::define('user_access', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 5, 6, 7, 8]);
        });
        Gate::define('user_create', function ($user) {
            return in_array($user->role_id, [1, 3, 7, 8]);
        });
        Gate::define('user_edit', function ($user) {
            return in_array($user->role_id, [1, 3, 7, 8]);
        });
        Gate::define('user_view', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 5, 6, 7, 8]);
        });
        Gate::define('user_delete', function ($user) {
            return in_array($user->role_id, [1, 8]);
        });

        // Auth gates for: Contact management
        Gate::define('contact_management_access', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 5, 6, 7, 8]);
        });

        // Auth gates for: Locations
        Gate::define('location_access', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 5, 6, 7, 8]);
        });
        Gate::define('location_create', function ($user) {
            return in_array($user->role_id, [1, 3, 7, 8]);
        });
        Gate::define('location_edit', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 5, 6, 7, 8]);
        });
        Gate::define('location_view', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 5, 6, 7, 8]);
        });
        Gate::define('location_delete', function ($user) {
            return in_array($user->role_id, [1, 8]);
        });

        // Auth gates for: Analytical
        Gate::define('analytical_access', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 5, 6, 7, 8]);
        });

        // Auth gates for: Task statuses
        Gate::define('task_status_access', function ($user) {
            return in_array($user->role_id, [1, 8]);
        });
        Gate::define('task_status_create', function ($user) {
            return in_array($user->role_id, [1, 8]);
        });
        Gate::define('task_status_edit', function ($user) {
            return in_array($user->role_id, [1, 8]);
        });
        Gate::define('task_status_view', function ($user) {
            return in_array($user->role_id, [1, 8]);
        });
        Gate::define('task_status_delete', function ($user) {
            return in_array($user->role_id, [1, 8]);
        });

        // Auth gates for: Assets categories
        Gate::define('assets_category_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('assets_category_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('assets_category_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('assets_category_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('assets_category_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Contacts
        Gate::define('contact_access', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 5, 6, 7, 8]);
        });
        Gate::define('contact_create', function ($user) {
            return in_array($user->role_id, [1, 3, 7, 8]);
        });
        Gate::define('contact_edit', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 6, 7, 8]);
        });
        Gate::define('contact_view', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 5, 6, 7, 8]);
        });
        Gate::define('contact_delete', function ($user) {
            return in_array($user->role_id, [1, 8]);
        });

        // Auth gates for: Marketing
        Gate::define('marketing_access', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 5, 6, 7, 8]);
        });

        // Auth gates for: Task management
        Gate::define('task_management_access', function ($user) {
            return in_array($user->role_id, [1, 8]);
        });

        // Auth gates for: Task tags
        Gate::define('task_tag_access', function ($user) {
            return in_array($user->role_id, [1, 8]);
        });
        Gate::define('task_tag_create', function ($user) {
            return in_array($user->role_id, [1, 8]);
        });
        Gate::define('task_tag_edit', function ($user) {
            return in_array($user->role_id, [1, 8]);
        });
        Gate::define('task_tag_view', function ($user) {
            return in_array($user->role_id, [1, 8]);
        });
        Gate::define('task_tag_delete', function ($user) {
            return in_array($user->role_id, [1, 8]);
        });

        // Auth gates for: Assets locations
        Gate::define('assets_location_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('assets_location_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('assets_location_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('assets_location_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('assets_location_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: User management
        Gate::define('user_management_access', function ($user) {
            return in_array($user->role_id, [1, 7, 8]);
        });

        // Auth gates for: Zipcodes
        Gate::define('zipcode_access', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 5, 6, 7, 8]);
        });
        Gate::define('zipcode_create', function ($user) {
            return in_array($user->role_id, [1, 3, 7, 8]);
        });
        Gate::define('zipcode_edit', function ($user) {
            return in_array($user->role_id, [1, 3, 7, 8]);
        });
        Gate::define('zipcode_view', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 5, 6, 7, 8]);
        });
        Gate::define('zipcode_delete', function ($user) {
            return in_array($user->role_id, [1, 8]);
        });

        // Auth gates for: Website
        Gate::define('website_access', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 5, 6, 7, 8]);
        });
        Gate::define('website_create', function ($user) {
            return in_array($user->role_id, [1, 7, 8]);
        });
        Gate::define('website_edit', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 5, 6, 7, 8]);
        });
        Gate::define('website_view', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 5, 6, 7, 8]);
        });
        Gate::define('website_delete', function ($user) {
            return in_array($user->role_id, [1, 8]);
        });

        // Auth gates for: Call metrics
        Gate::define('call_metric_access', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 5, 6, 7, 8]);
        });

        // Auth gates for: Task calendar
        Gate::define('task_calendar_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Assets management
        Gate::define('assets_management_access', function ($user) {
            return in_array($user->role_id, [1, 8]);
        });

        // Auth gates for: Assets statuses
        Gate::define('assets_status_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('assets_status_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('assets_status_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('assets_status_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('assets_status_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Assets history
        Gate::define('assets_history_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Analytics
        Gate::define('analytic_access', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 5, 6, 7, 8]);
        });
        Gate::define('analytic_create', function ($user) {
            return in_array($user->role_id, [1, 7, 8]);
        });
        Gate::define('analytic_edit', function ($user) {
            return in_array($user->role_id, [1, 7, 8]);
        });
        Gate::define('analytic_view', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 5, 6, 7, 8]);
        });
        Gate::define('analytic_delete', function ($user) {
            return in_array($user->role_id, [1, 8]);
        });

        // Auth gates for: Adwords
        Gate::define('adword_access', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 5, 6, 7, 8]);
        });
        Gate::define('adword_create', function ($user) {
            return in_array($user->role_id, [1, 7, 8]);
        });
        Gate::define('adword_edit', function ($user) {
            return in_array($user->role_id, [1, 7, 8]);
        });
        Gate::define('adword_view', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 5, 6, 7, 8]);
        });
        Gate::define('adword_delete', function ($user) {
            return in_array($user->role_id, [1, 8]);
        });

        // Auth gates for: User actions
        Gate::define('user_action_access', function ($user) {
            return in_array($user->role_id, [1, 8]);
        });

        // Auth gates for: Internal notifications
        Gate::define('internal_notification_access', function ($user) {
            return in_array($user->role_id, [1, 7]);
        });
        Gate::define('internal_notification_create', function ($user) {
            return in_array($user->role_id, [1, 7]);
        });
        Gate::define('internal_notification_edit', function ($user) {
            return in_array($user->role_id, [1, 7]);
        });
        Gate::define('internal_notification_view', function ($user) {
            return in_array($user->role_id, [1, 7]);
        });
        Gate::define('internal_notification_delete', function ($user) {
            return in_array($user->role_id, [1, 7]);
        });

        // Auth gates for: Booking
        Gate::define('booking_access', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 5, 6, 7, 8]);
        });
        Gate::define('booking_create', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 6, 7, 8]);
        });
        Gate::define('booking_edit', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 6, 7, 8]);
        });
        Gate::define('booking_view', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 5, 6, 7, 8]);
        });
        Gate::define('booking_delete', function ($user) {
            return in_array($user->role_id, [1, 8]);
        });

        // Auth gates for: Booking dashboard
        Gate::define('booking_dashboard_access', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 5, 6, 7, 8]);
        });

        // Auth gates for: Content management
        Gate::define('content_management_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Content categories
        Gate::define('content_category_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('content_category_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('content_category_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('content_category_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('content_category_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Content tags
        Gate::define('content_tag_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('content_tag_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('content_tag_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('content_tag_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('content_tag_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Content pages
        Gate::define('content_page_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('content_page_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('content_page_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('content_page_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('content_page_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

    }
}
