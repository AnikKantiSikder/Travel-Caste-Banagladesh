
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
              <i class="nav-icon fas fa-user"></i>
              <p>
                User
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('users.view') }}" class="nav-link {{($route=='users.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View</p>
                </a>
              </li>

            </ul>
          </li>
    @endif

        <!-- Manage profile -->
          <li class="nav-item has-treeview {{($prefix=='/profiles')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-circle"></i>
              <p>
                Profile
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('profiles.view')}}" class="nav-link {{($route=='profiles.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View</p>
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
              <i class="nav-icon fas fa-copyright"></i>
              <p>
                Logo
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('logos.view') }}" class="nav-link {{($route=='logos.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View</p>
                </a>
              </li>

            </ul>
          </li>
        <!-- Manage slider -->
          <li class="nav-item has-treeview {{($prefix=='/sliders')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-sliders-h"></i>
              <p>
                Slider
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('sliders.view') }}" class="nav-link {{($route=='sliders.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View</p>
                </a>
              </li>
            </ul>
          </li>
        <!-- Manage contact -->
          <li class="nav-item has-treeview {{($prefix=='/contacts')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-address-book"></i>
              <p>
                Contact
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('contacts.view') }}" class="nav-link {{($route=='contacts.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View</p>
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
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                About
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('abouts.view') }}" class="nav-link {{($route=='abouts.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View</p>
                </a>
              </li>

            </ul>
          </li>

          <!-- Manage division -->
          <li class="nav-item has-treeview {{($prefix=='/divisions.view')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-flag"></i>
              <p>
                Division
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('divisions.view') }}"
                class="nav-link {{($route=='divisions.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View</p>
                </a>
              </li>

            </ul>
          </li>

        <!-- Manage category -->
          <li class="nav-item has-treeview {{($prefix=='/categories.view')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-list-alt"></i>
              <p>
                Category
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('categories.view') }}"
                class="nav-link {{($route=='categories.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View</p>
                </a>
              </li>

            </ul>
          </li>

        <!-- Manage hotel -->
          <li class="nav-item has-treeview {{($prefix=='/hotels.view')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-hotel"></i>
              <p>
                Hotel
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('hotels.view') }}"
                class="nav-link {{($route=='hotels.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View</p>
                </a>
              </li>

            </ul>
          </li>

        <!-- Manage location -->
          <li class="nav-item has-treeview {{($prefix=='/locations.view')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-map-marker-alt"></i>
              <p>
                Location
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('locations.view') }}"
                class="nav-link {{($route=='locations.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View</p>
                </a>
              </li>

            </ul>
          </li>

        <!--Manage customer-->
          <li class="nav-item has-treeview {{($prefix=='/customers')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Customer
                <i class="fas fa-angle-left right"></i>
                {{-- <span class="badge badge-info right">6</span> --}}
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{ route('customers.view') }}" class="nav-link {{($route=='customers.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('customers.draft.view') }}" class="nav-link {{($route=='customers.draft.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Draft</p>
                </a>
              </li>
              

            </ul>
          </li>


      <!--Manage customer post request-->
          <li class="nav-item has-treeview {{($prefix=='/customerspost')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-clipboard-list"></i>
              <p>
                Post request
                <i class="fas fa-angle-left right"></i>
                {{-- <span class="badge badge-info right">6</span> --}}
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{ route('posts.pending.list') }}" class="nav-link {{($route=='posts.pending.list')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pending posts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('posts.approved.list') }}" class="nav-link {{($route=='posts.approved.list')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Approved posts</p>
                </a>
              </li>

            </ul>
          </li>

          <!--Manage customer event request-->
          <li class="nav-item has-treeview {{($prefix=='/customersevent')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Event request
                <i class="fas fa-angle-left right"></i>
                {{-- <span class="badge badge-info right">6</span> --}}
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{ route('events.pending.list') }}" class="nav-link {{($route=='events.pending.list')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pending events</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('events.approved.list') }}" class="nav-link {{($route=='events.approved.list')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Approved events</p>
                </a>
              </li>
              <li class="nav-item"> <br><br> </li>

            </ul>
          </li>

<!-- Layout options -->

        </ul>
      </nav>
<!-- /.sidebar-menu -->