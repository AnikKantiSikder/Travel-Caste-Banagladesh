
@php

$prefix= Request:: route()->getPrefix();
$route= Route:: current()->getName();
  
@endphp  

<!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

<!-- Layout options -->
    @if (Auth::user()->role=='admin')
        <!-- Manage user -->
          <li class="nav-item has-treeview {{($prefix=='/users')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage user
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('users.view') }}" class="nav-link {{($route=='users.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View user</p>
                </a>
              </li>

            </ul>
          </li>
    @endif

        <!-- Manage profile -->
          <li class="nav-item has-treeview {{($prefix=='/profiles')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage profile
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('profiles.view')}}" class="nav-link {{($route=='profiles.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View profile</p>
                </a>
                <a href="{{ route('profiles.password.change') }}" class="nav-link {{($route=='profiles.password.change')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change password</p>
                </a>
              </li>

            </ul>
          </li>

        <!-- Manage logo -->
          <li class="nav-item has-treeview {{($prefix=='/logos')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage logo
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('logos.view') }}" class="nav-link {{($route=='logos.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View logo</p>
                </a>
              </li>

            </ul>
          </li>
        <!-- Manage slider -->
          <li class="nav-item has-treeview {{($prefix=='/sliders')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage slider
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('sliders.view') }}" class="nav-link {{($route=='sliders.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View slider</p>
                </a>
              </li>
            </ul>
          </li>
        <!-- Manage contact -->
          <li class="nav-item has-treeview {{($prefix=='/contacts')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage contact
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('contacts.view') }}" class="nav-link {{($route=='contacts.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View contact</p>
                </a>
                <a href="{{ route('contacts.communicate') }}"
                class="nav-link {{($route=='contacts.communicate')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Communicate user</p>
                </a>
              </li>

            </ul>
          </li>
        <!-- Manage about us -->
          <li class="nav-item has-treeview {{($prefix=='/abouts')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage abouts
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('abouts.view') }}" class="nav-link {{($route=='abouts.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View abouts</p>
                </a>
              </li>

            </ul>
          </li>

        <!-- Manage location type -->
          <li class="nav-item has-treeview {{($prefix=='/locationtypes.view')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage location type
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('locationtypes.view') }}"
                class="nav-link {{($route=='locationtypes.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View location type</p>
                </a>
              </li>

            </ul>
          </li>
<!-- Layout options -->

        </ul>
      </nav>
<!-- /.sidebar-menu -->