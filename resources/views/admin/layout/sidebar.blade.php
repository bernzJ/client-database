<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.content') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/dashboards') }}"><i class="nav-icon icon-compass"></i> {{ trans('admin.dashboard.title') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/customers') }}"><i class="nav-icon icon-puzzle"></i> {{ trans('admin.customer.title') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/industries') }}"><i class="nav-icon icon-compass"></i> {{ trans('admin.industry.title') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/client-types') }}"><i class="nav-icon icon-diamond"></i> {{ trans('admin.client-type.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/timezones') }}"><i class="nav-icon icon-puzzle"></i> {{ trans('admin.timezone.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/fiscal-years') }}"><i class="nav-icon icon-puzzle"></i> {{ trans('admin.fiscal-year.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/project-types') }}"><i class="nav-icon icon-plane"></i> {{ trans('admin.project-type.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/financials') }}"><i class="nav-icon icon-magnet"></i> {{ trans('admin.financial.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/hrs') }}"><i class="nav-icon icon-globe"></i> {{ trans('admin.hr.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/countries') }}"><i class="nav-icon icon-drop"></i> {{ trans('admin.country.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/employee-groups') }}"><i class="nav-icon icon-graduation"></i> {{ trans('admin.employee-group.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/notes') }}"><i class="nav-icon icon-star"></i> {{ trans('admin.note.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/frequencies') }}"><i class="nav-icon icon-energy"></i> {{ trans('admin.frequency.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/liabilities') }}"><i class="nav-icon icon-globe"></i> {{ trans('admin.liability.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/card-programs') }}"><i class="nav-icon icon-plane"></i> {{ trans('admin.card-program.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/payrolls') }}"><i class="nav-icon icon-drop"></i> {{ trans('admin.payroll.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/states') }}"><i class="nav-icon icon-graduation"></i> {{ trans('admin.state.title') }}</a></li>
           {{-- Do not delete me :) I'm used for auto-generation menu items --}}

            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.settings') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/admin-users') }}"><i class="nav-icon icon-user"></i> {{ __('Manage access') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/translations') }}"><i class="nav-icon icon-location-pin"></i> {{ __('Translations') }}</a></li>
            {{-- Do not delete me :) I'm also used for auto-generation menu items --}}
            {{--<li class="nav-item"><a class="nav-link" href="{{ url('admin/configuration') }}"><i class="nav-icon icon-settings"></i> {{ __('Configuration') }}</a></li>--}}
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
