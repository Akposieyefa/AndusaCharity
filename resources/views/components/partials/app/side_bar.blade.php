  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
         <!-- Brand Logo -->
         <a href="{{ route('dashboard') }}" class="brand-link">
                <img src="{{ asset('logo.jpeg') }}" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Charity</span>
         </a>

         <!-- Sidebar -->
         <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                              <li class="nav-item has-treeview">
                                     <a href="{{ route('dashboard') }}" class="nav-link active">
                                            <i class="nav-icon fas fa-tachometer-alt"></i>
                                            <p>
                                                   Dashboard
                                            </p>
                                     </a>
                              </li>
                              <li class="nav-item">
                                     <a href="{{ route('recent-contacts') }}" class="nav-link">
                                            <i class="nav-icon fas fa-envelope"></i>
                                            <p>
                                                 Messages
                                                 @if(newMessages() > 0)
                                                        <span class="right badge badge-danger">New</span>
                                                 @endif
                                            </p>
                                     </a>
                              </li>
                              <li class="nav-item">
                                     <a href="{{ route('posts') }}" class="nav-link">
                                            <i class="nav-icon fas fa-copy"></i>
                                            <p>
                                                 Blog Post
                                            </p>
                                     </a>
                              </li>
                               <li class="nav-item">
                                     <a href="{{ route('admins') }}" class="nav-link">
                                            <i class="nav-icon fas fa-user-secret"></i>
                                            <p>
                                                 Manage Admin
                                            </p>
                                     </a>
                              </li>
                               <li class="nav-item">
                                     <a href="{{ route('trustees') }}" class="nav-link">
                                            <i class="nav-icon fas fa-users"></i>
                                            <p>
                                                 Manage Truestees
                                            </p>
                                     </a>
                              </li>
                                <li class="nav-item">
                                     <a href="{{ route('admin-show', auth()->user()->id) }}" class="nav-link">
                                            <i class="nav-icon fas fa-user"></i>
                                            <p>
                                                Profile
                                            </p>
                                     </a>
                              </li>
                             <li class="nav-item">
                                   <a class="nav-link" role="button" href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                          <i class="nav-icon fas fa-power-off"></i>
                                          <p>
                                                 LogOut
                                          </p>
                                   </a>

                                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                          @csrf
                                   </form>
                            </li>
                             
                             
                             
                       </ul>
                </nav>
                <!-- /.sidebar-menu -->
         </div>
         <!-- /.sidebar -->
  </aside>

