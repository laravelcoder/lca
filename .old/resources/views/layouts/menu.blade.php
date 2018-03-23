
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span><strong>Users</strong></span></a>
</li>

<li class="{{ Request::is('websites*') ? 'active' : '' }}">
    <a href="{!! route('websites.index') !!}"><i class="fa fa-edit"></i><span><strong>Websites</strong></span></a>
</li>

<li class="{{ Request::is('clinics*') ? 'active' : '' }}">
    <a href="{!! route('clinics.index') !!}"><i class="fa fa-edit"></i><span><strong>Clinics</strong></span></a>
</li>

<li class="{{ Request::is('locations*') ? 'active' : '' }}">
    <a href="{!! route('locations.index') !!}"><i class="fa fa-edit"></i><span><strong>Locations</strong></span></a>
</li>

<li class="{{ Request::is('analyticsclients*') ? 'active' : '' }}">
    <a href="{!! route('analyticsclients.index') !!}"><i class="fa fa-edit"></i><span><strong>Analyticsclients</strong></span></a>
</li>

<li class="{{ Request::is('adsclients*') ? 'active' : '' }}">
    <a href="{!! route('adsclients.index') !!}"><i class="fa fa-edit"></i><span><strong>Adsclients</strong></span></a>
</li>

<li class="{{ Request::is('pages*') ? 'active' : '' }}">
    <a href="{!! route('pages.index') !!}"><i class="fa fa-edit"></i><span><strong>Pages</strong></span></a>
</li>

