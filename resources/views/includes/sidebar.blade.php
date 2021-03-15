  <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image"> <img src="https://placehold.it/100x100" alt="image"/> <span class="online-status online"></span> </div>
              <div class="profile-name">
                <p class="name">{{Auth::user()->userName}}</p>
                
              </div>
              <div class="notification-panel mt-4">
                <span><i class="mdi mdi-settings"></i></span>
                <span class="count-wrapper"><i class="mdi mdi-bell"></i><span class="count top-right bg-warning">4</span></span>
                <span><i class="mdi mdi-email"></i></span>
              </div>
            </div>
          </li>
          @if(Auth::user()->admin==true)
          <li class="nav-item"> <a class="nav-link" href="{{route('adminDashboard')}}"> <img class="menu-icon" src="{{asset('backadmin/images/menu_icons/01.png')}}" alt="menu icon"> <span class="menu-title">Admin Dashboard</span></a> </li>
         
      
          <li class="nav-item"> <a class="nav-link" href="{{route('adminMatériau')}}"> <img class="menu-icon" src="{{asset('backadmin/images/menu_icons/08.png')}}" alt="menu icon"> <span class="menu-title">Matériau</span> </a> </li>
         
          <li class="nav-item"> <a class="nav-link" href="{{route('adminShowColoris')}}"> <img class="menu-icon" src="{{asset('backadmin/images/menu_icons/08.png')}}" alt="menu icon"> <span class="menu-title">Coloris</span> </a> </li>

          <li class="nav-item"> <a class="nav-link" href="{{route('adminShowFinition')}}"> <img class="menu-icon" src="{{asset('backadmin/images/menu_icons/08.png')}}" alt="menu icon"> <span class="menu-title">Finition</span> </a> </li>

          <li class="nav-item"> <a class="nav-link" href="{{route('show-rates')}}"> <img class="menu-icon" src="{{asset('backadmin/images/menu_icons/08.png')}}" alt="menu icon"> <span class="menu-title">Rates</span> </a> </li>


          <li class="nav-item"> <a class="nav-link" href="{{route('adminShowServices')}}"> <img class="menu-icon" src="{{asset('backadmin/images/menu_icons/13.png')}}" alt="menu icon"> <span class="menu-title">SERVICES</span> </a> </li>

          <li class="nav-item"> <a class="nav-link" href="{{route('adminOptions&Cuts')}}"> <img class="menu-icon" src="{{asset('backadmin/images/menu_icons/13.png')}}" alt="menu icon"> <span class="menu-title">OPTIONS AND CUTS</span> </a> </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts"  aria-expanded="false" aria-controls="page-layouts"> <img class="menu-icon" src="{{asset('backadmin/images/menu_icons/13.png')}}" alt="menu icon">  <span class="menu-title">Add accessories</span><i class="menu-arrow"></i></a>
            <div class="collapse" id="page-layouts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('admin-show-sinks')}}">Sinks</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('admin-show-mixer')}}">Mixer taps</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('admin-show-soap')}}">Soap Dispenser</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('admin-show-drainer')}}">Drainer basket</a></li>
              </ul>
            </div>
          </li>

        @endif      
      
   
      

          <li class="nav-item">
            <div class="sidebar-sticker">
              <div class="d-flex align-items-center text-primary">
                <h6 class="mb-1">Need Help</h6><i class="mdi ml-2 mdi-bell-ring-outline"></i>
              </div>
              <a class="d-block text-gray my-2" href="#">hello@website.com</a>
              <a class="d-block" href="#">Visit FAQ</a>
            </div>
          </li>
        </ul>
      </nav>