<ul class="navbar-nav iq-main-menu"  id="sidebar">

    {{-- Nombre de la Seccion: Inicio --}}
    <li class="nav-item static-item">
        <a class="nav-link static-item disabled" href="#" tabindex="-1">
            <span class="default-icon">Inicio</span>
            <span class="mini-icon">-</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{activeRoute(route('dashboard'))}}" aria-current="page" href="{{route('dashboard')}}">
            <i class="icon">
                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.4" d="M16.0756 2H19.4616C20.8639 2 22.0001 3.14585 22.0001 4.55996V7.97452C22.0001 9.38864 20.8639 10.5345 19.4616 10.5345H16.0756C14.6734 10.5345 13.5371 9.38864 13.5371 7.97452V4.55996C13.5371 3.14585 14.6734 2 16.0756 2Z" fill="currentColor"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z" fill="currentColor"></path>
                </svg>
            </i>
            <span class="item-name">Dashboard</span>
        </a>
    </li>


    {{-------------------------------------------------------------------------------------------}}

    {{-- Nombre de la Seccion: Administrador --}}
    <li><hr class="hr-horizontal"></li>

    {{--Etiqueta: Administracion --}}
    <li class="nav-item static-item">
        <a class="nav-link static-item disabled" href="#" tabindex="-1">
            <span class="default-icon">Administración</span>
            <span class="mini-icon">-</span>
        </a>
    </li>

    {{-- Usuarios --}}
    <li class="nav-item">
        <a class="nav-link " data-bs-toggle="collapse" href="#sidebar-user" role="button" aria-expanded="false" aria-controls="sidebar-user">
            <i class="icon">
                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.9488 14.54C8.49884 14.54 5.58789 15.1038 5.58789 17.2795C5.58789 19.4562 8.51765 20.0001 11.9488 20.0001C15.3988 20.0001 18.3098 19.4364 18.3098 17.2606C18.3098 15.084 15.38 14.54 11.9488 14.54Z" fill="currentColor"></path>
                    <path opacity="0.4" d="M11.949 12.467C14.2851 12.467 16.1583 10.5831 16.1583 8.23351C16.1583 5.88306 14.2851 4 11.949 4C9.61293 4 7.73975 5.88306 7.73975 8.23351C7.73975 10.5831 9.61293 12.467 11.949 12.467Z" fill="currentColor"></path>
                    <path opacity="0.4" d="M21.0881 9.21923C21.6925 6.84176 19.9205 4.70654 17.664 4.70654C17.4187 4.70654 17.1841 4.73356 16.9549 4.77949C16.9244 4.78669 16.8904 4.802 16.8725 4.82902C16.8519 4.86324 16.8671 4.90917 16.8895 4.93889C17.5673 5.89528 17.9568 7.0597 17.9568 8.30967C17.9568 9.50741 17.5996 10.6241 16.9728 11.5508C16.9083 11.6462 16.9656 11.775 17.0793 11.7948C17.2369 11.8227 17.3981 11.8371 17.5629 11.8416C19.2059 11.8849 20.6807 10.8213 21.0881 9.21923Z" fill="currentColor"></path>
                    <path d="M22.8094 14.817C22.5086 14.1722 21.7824 13.73 20.6783 13.513C20.1572 13.3851 18.747 13.205 17.4352 13.2293C17.4155 13.232 17.4048 13.2455 17.403 13.2545C17.4003 13.2671 17.4057 13.2887 17.4316 13.3022C18.0378 13.6039 20.3811 14.916 20.0865 17.6834C20.074 17.8032 20.1698 17.9068 20.2888 17.8888C20.8655 17.8059 22.3492 17.4853 22.8094 16.4866C23.0637 15.9589 23.0637 15.3456 22.8094 14.817Z" fill="currentColor"></path>
                    <path opacity="0.4" d="M7.04459 4.77973C6.81626 4.7329 6.58077 4.70679 6.33543 4.70679C4.07901 4.70679 2.30701 6.84201 2.9123 9.21947C3.31882 10.8216 4.79355 11.8851 6.43661 11.8419C6.60136 11.8374 6.76343 11.8221 6.92013 11.7951C7.03384 11.7753 7.09115 11.6465 7.02668 11.551C6.3999 10.6234 6.04263 9.50765 6.04263 8.30991C6.04263 7.05904 6.43303 5.89462 7.11085 4.93913C7.13234 4.90941 7.14845 4.86348 7.12696 4.82926C7.10906 4.80135 7.07593 4.78694 7.04459 4.77973Z" fill="currentColor"></path>
                    <path d="M3.32156 13.5127C2.21752 13.7297 1.49225 14.1719 1.19139 14.8167C0.936203 15.3453 0.936203 15.9586 1.19139 16.4872C1.65163 17.4851 3.13531 17.8066 3.71195 17.8885C3.83104 17.9065 3.92595 17.8038 3.91342 17.6832C3.61883 14.9167 5.9621 13.6046 6.56918 13.3029C6.59425 13.2885 6.59962 13.2677 6.59694 13.2542C6.59515 13.2452 6.5853 13.2317 6.5656 13.2299C5.25294 13.2047 3.84358 13.3848 3.32156 13.5127Z" fill="currentColor"></path>
                </svg>
            </i>
            <span class="item-name">Usuarios</span>
            <i class="right-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </i>
        </a>
        <ul class="sub-nav collapse" id="sidebar-user" data-bs-parent="#sidebar">
            <li class="nav-item">
                <a class="nav-link {{activeRoute(route('users.show', 1))}}" href="{{route('users.show', 1)}}">
                    <i class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                            <g>
                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                            </g>
                        </svg>
                    </i>
                    <i class="sidenav-mini-icon"> P </i>
                    <span class="item-name">Perfil de Usuario</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{activeRoute(route('users.create'))}}" href="{{route('users.create')}}">
                    <i class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                            <g>
                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                            </g>
                        </svg>
                    </i>
                    <i class="sidenav-mini-icon"> E </i>
                    <span class="item-name">Editar Usuario</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{activeRoute(route('users.index'))}}" href="{{route('users.index')}}">
                    <i class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                            <g>
                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                            </g>
                        </svg>
                    </i>
                    <i class="sidenav-mini-icon"> L </i>
                    <span class="item-name">Lista de Usuarios</span>
                </a>
            </li>
        </ul>
    </li>

    {{-- Empleados --}}
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-employee" role="button"  aria-expanded="false" aria-controls="sidebar-employee">
            <i class="icon">
                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.4" d="M13.3051 5.88243V6.06547C12.8144 6.05584 12.3237 6.05584 11.8331 6.05584V5.89206C11.8331 5.22733 11.2737 4.68784 10.6064 4.68784H9.63482C8.52589 4.68784 7.62305 3.80152 7.62305 2.72254C7.62305 2.32755 7.95671 2 8.35906 2C8.77123 2 9.09508 2.32755 9.09508 2.72254C9.09508 3.01155 9.34042 3.24276 9.63482 3.24276H10.6064C12.0882 3.2524 13.2953 4.43736 13.3051 5.88243Z" fill="currentColor"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.164 6.08279C15.4791 6.08712 15.7949 6.09145 16.1119 6.09469C19.5172 6.09469 22 8.52241 22 11.875V16.1813C22 19.5339 19.5172 21.9616 16.1119 21.9616C14.7478 21.9905 13.3837 22.0001 12.0098 22.0001C10.6359 22.0001 9.25221 21.9905 7.88813 21.9616C4.48283 21.9616 2 19.5339 2 16.1813V11.875C2 8.52241 4.48283 6.09469 7.89794 6.09469C9.18351 6.07542 10.4985 6.05615 11.8332 6.05615C12.3238 6.05615 12.8145 6.05615 13.3052 6.06579C13.9238 6.06579 14.5425 6.07427 15.164 6.08279ZM10.8518 14.7459H9.82139V15.767C9.82139 16.162 9.48773 16.4896 9.08538 16.4896C8.67321 16.4896 8.34936 16.162 8.34936 15.767V14.7459H7.30913C6.90677 14.7459 6.57311 14.4279 6.57311 14.0233C6.57311 13.6283 6.90677 13.3008 7.30913 13.3008H8.34936V12.2892C8.34936 11.8942 8.67321 11.5667 9.08538 11.5667C9.48773 11.5667 9.82139 11.8942 9.82139 12.2892V13.3008H10.8518C11.2542 13.3008 11.5878 13.6283 11.5878 14.0233C11.5878 14.4279 11.2542 14.7459 10.8518 14.7459ZM15.0226 13.1177H15.1207C15.5231 13.1177 15.8567 12.7998 15.8567 12.3952C15.8567 12.0002 15.5231 11.6727 15.1207 11.6727H15.0226C14.6104 11.6727 14.2866 12.0002 14.2866 12.3952C14.2866 12.7998 14.6104 13.1177 15.0226 13.1177ZM16.7007 16.4318H16.7988C17.2012 16.4318 17.5348 16.1139 17.5348 15.7092C17.5348 15.3143 17.2012 14.9867 16.7988 14.9867H16.7007C16.2885 14.9867 15.9647 15.3143 15.9647 15.7092C15.9647 16.1139 16.2885 16.4318 16.7007 16.4318Z" fill="currentColor"></path>
                </svg>
            </i>
            <span class="item-name">Empleados</span>
            <i class="right-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </i>
        </a>
        <ul class="sub-nav collapse" id="sidebar-employee" data-bs-parent="#sidebar">
            <li class="nav-item">
                <a class="nav-link  {{activeRoute(route('empleados.create'))}}" href="{{route('empleados.create')}}">
                    <i class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                            <g>
                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                            </g>
                        </svg>
                    </i>
                    <i class="sidenav-mini-icon"> R </i>
                    <span class="item-name">Registrar Empleado</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{activeRoute(route('empleados.index'))}}" href="{{route('empleados.index')}}">
                   <i class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                            <g>
                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                            </g>
                        </svg>
                    </i>
                   <i class="sidenav-mini-icon"> L </i>
                   <span class="item-name">Lista de Empleados</span>
                </a>
            </li>
        </ul>
    </li>



    {{-------------------------------------------------------------------------------------------}}

    {{-- Nombre de la Seccion: Control Veterinaria --}}
    <li><hr class="hr-horizontal"></li>

    {{--Etiqueta: Control Veterinaria--}}
    <li class="nav-item static-item">
        <a class="nav-link static-item disabled" href="#" tabindex="-1">
            <span class="default-icon">Control Veterinaria</span>
            <span class="mini-icon">-</span>
        </a>
    </li>

    {{-- Citas --}}
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-appointment" role="button"  aria-expanded="false" aria-controls="sidebar-appointment">
            <i class="icon">
                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3 16.87V9.25699H21V16.931C21 20.07 19.0241 22 15.8628 22H8.12733C4.99561 22 3 20.03 3 16.87ZM7.95938 14.41C7.50494 14.431 7.12953 14.07 7.10977 13.611C7.10977 13.151 7.46542 12.771 7.91987 12.75C8.36443 12.75 8.72997 13.101 8.73985 13.55C8.7596 14.011 8.40395 14.391 7.95938 14.41ZM12.0198 14.41C11.5653 14.431 11.1899 14.07 11.1701 13.611C11.1701 13.151 11.5258 12.771 11.9802 12.75C12.4248 12.75 12.7903 13.101 12.8002 13.55C12.82 14.011 12.4643 14.391 12.0198 14.41ZM16.0505 18.09C15.596 18.08 15.2305 17.7 15.2305 17.24C15.2206 16.78 15.5862 16.401 16.0406 16.391H16.0505C16.5148 16.391 16.8902 16.771 16.8902 17.24C16.8902 17.71 16.5148 18.09 16.0505 18.09ZM11.1701 17.24C11.1899 17.7 11.5653 18.061 12.0198 18.04C12.4643 18.021 12.82 17.641 12.8002 17.181C12.7903 16.731 12.4248 16.38 11.9802 16.38C11.5258 16.401 11.1701 16.78 11.1701 17.24ZM7.09989 17.24C7.11965 17.7 7.49506 18.061 7.94951 18.04C8.39407 18.021 8.74973 17.641 8.72997 17.181C8.72009 16.731 8.35456 16.38 7.90999 16.38C7.45554 16.401 7.09989 16.78 7.09989 17.24ZM15.2404 13.601C15.2404 13.141 15.596 12.771 16.0505 12.761C16.4951 12.761 16.8507 13.12 16.8705 13.561C16.8804 14.021 16.5247 14.401 16.0801 14.41C15.6257 14.42 15.2503 14.07 15.2404 13.611V13.601Z" fill="currentColor"></path>
                    <path opacity="0.4" d="M3.00336 9.2569C3.0162 8.6699 3.0656 7.5049 3.15846 7.1299C3.63267 5.0209 5.24298 3.6809 7.54485 3.4899H16.4559C18.738 3.6909 20.3681 5.0399 20.8423 7.1299C20.9342 7.4949 20.9836 8.6689 20.9964 9.2569H3.00336Z" fill="currentColor"></path>
                    <path d="M8.30486 6.59C8.73955 6.59 9.06556 6.261 9.06556 5.82V2.771C9.06556 2.33 8.73955 2 8.30486 2C7.87017 2 7.54416 2.33 7.54416 2.771V5.82C7.54416 6.261 7.87017 6.59 8.30486 6.59Z" fill="currentColor"></path>
                    <path d="M15.6949 6.59C16.1197 6.59 16.4556 6.261 16.4556 5.82V2.771C16.4556 2.33 16.1197 2 15.6949 2C15.2603 2 14.9342 2.33 14.9342 2.771V5.82C14.9342 6.261 15.2603 6.59 15.6949 6.59Z" fill="currentColor"></path>
                </svg>
            </i>
            <span class="item-name">Citas</span>
            <i class="right-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </i>
        </a>
        <ul class="sub-nav collapse" id="sidebar-appointment" data-bs-parent="#sidebar">
            <li class="nav-item">
                <a class="nav-link  {{activeRoute(route('citas.create'))}}" href="{{route('citas.create')}}">
                    <i class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                            <g>
                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                            </g>
                        </svg>
                    </i>
                    <i class="sidenav-mini-icon"> R </i>
                    <span class="item-name">Registro de Citas</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{activeRoute(route('citas.index'))}}" href="{{route('citas.index')}}">
                   <i class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                            <g>
                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                            </g>
                        </svg>
                    </i>
                   <i class="sidenav-mini-icon"> L </i>
                   <span class="item-name">Lista de Citas</span>
                </a>
            </li>
        </ul>
    </li>

    {{-- Clientes --}}
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-customers" role="button"  aria-expanded="false" aria-controls="sidebar-customers">
            <i class="icon">
                <svg fill="none" xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.2124 7.76241C14.2124 10.4062 12.0489 12.5248 9.34933 12.5248C6.6507 12.5248 4.48631 10.4062 4.48631 7.76241C4.48631 5.11865 6.6507 3 9.34933 3C12.0489 3 14.2124 5.11865 14.2124 7.76241ZM2 17.9174C2 15.47 5.38553 14.8577 9.34933 14.8577C13.3347 14.8577 16.6987 15.4911 16.6987 17.9404C16.6987 20.3877 13.3131 21 9.34933 21C5.364 21 2 20.3666 2 17.9174ZM16.1734 7.84875C16.1734 9.19506 15.7605 10.4513 15.0364 11.4948C14.9611 11.6021 15.0276 11.7468 15.1587 11.7698C15.3407 11.7995 15.5276 11.8177 15.7184 11.8216C17.6167 11.8704 19.3202 10.6736 19.7908 8.87118C20.4885 6.19676 18.4415 3.79543 15.8339 3.79543C15.5511 3.79543 15.2801 3.82418 15.0159 3.87688C14.9797 3.88454 14.9405 3.90179 14.921 3.93246C14.8955 3.97174 14.9141 4.02253 14.9396 4.05607C15.7233 5.13216 16.1734 6.44206 16.1734 7.84875ZM19.3173 13.7023C20.5932 13.9466 21.4317 14.444 21.7791 15.1694C22.0736 15.7635 22.0736 16.4534 21.7791 17.0475C21.2478 18.1705 19.5335 18.5318 18.8672 18.6247C18.7292 18.6439 18.6186 18.5289 18.6333 18.3928C18.9738 15.2805 16.2664 13.8048 15.5658 13.4656C15.5364 13.4493 15.5296 13.4263 15.5325 13.411C15.5345 13.4014 15.5472 13.3861 15.5697 13.3832C17.0854 13.3545 18.7155 13.5586 19.3173 13.7023Z" fill="currentColor" />
                </svg>
            </i>
            <span class="item-name">Clientes</span>
            <i class="right-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </i>
        </a>
        <ul class="sub-nav collapse" id="sidebar-customers" data-bs-parent="#sidebar">
            <li class="nav-item">
                <a class="nav-link  {{activeRoute(route('clientes.create'))}}" href="{{route('clientes.create')}}">
                    <i class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                            <g>
                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                            </g>
                        </svg>
                    </i>
                    <i class="sidenav-mini-icon"> A </i>
                    <span class="item-name">Alta de Clientes</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{activeRoute(route('clientes.index'))}}" href="{{route('clientes.index')}}">
                   <i class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                            <g>
                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                            </g>
                        </svg>
                    </i>
                   <i class="sidenav-mini-icon"> L </i>
                   <span class="item-name">Lista de Clientes</span>
                </a>
            </li>
        </ul>
    </li>

    {{-- Mascotas --}}
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-pets" role="button"  aria-expanded="false" aria-controls="sidebar-pets">
            <i class="icon">
                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.4" d="M11.9993 21.9981C11.2303 21.9981 10.4623 21.7061 9.87526 21.1231L9.14526 20.3931C8.86226 20.1111 8.48326 19.9551 8.08126 19.9541H7.05426C5.39426 19.9541 4.04326 18.6031 4.04326 16.9431V15.9151C4.04226 15.5141 3.88626 15.1351 3.60326 14.8501L2.88526 14.1331C1.70926 12.9641 1.70426 11.0531 2.87426 9.87615L3.60426 9.14515C3.88626 8.86215 4.04226 8.48315 4.04326 8.08115V7.05515C4.04326 5.39415 5.39426 4.04315 7.05426 4.04315H8.08226C8.48326 4.04315 8.86126 3.88715 9.14626 3.60215L9.86526 2.88515C11.0343 1.70915 12.9443 1.70315 14.1223 2.87415L14.8523 3.60415C15.1363 3.88715 15.5143 4.04315 15.9153 4.04315H16.9433C18.6033 4.04315 19.9543 5.39415 19.9543 7.05515V8.08215C19.9553 8.48315 20.1113 8.86215 20.3943 9.14715L21.1123 9.86515C21.6813 10.4311 21.9963 11.1851 21.9993 11.9901C22.0013 12.7901 21.6933 13.5431 21.1323 14.1121C21.1223 14.1221 21.1133 14.1331 21.1033 14.1421L20.3933 14.8521C20.1113 15.1351 19.9553 15.5141 19.9543 15.9161V16.9431C19.9543 18.6031 18.6033 19.9541 16.9433 19.9541H15.9153C15.5143 19.9551 15.1353 20.1111 14.8513 20.3941L14.1323 21.1121C13.5463 21.7021 12.7723 21.9981 11.9993 21.9981Z" fill="currentColor"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.0428 10.0508C9.87776 10.2158 9.66376 10.3048 9.42676 10.3048C9.20476 10.3048 8.98676 10.2138 8.81176 10.0498C8.64576 9.88483 8.55176 9.65883 8.55176 9.42983C8.55176 9.21183 8.64376 8.98783 8.80576 8.81483C8.89476 8.72483 9.00076 8.65683 9.10676 8.62083C9.40876 8.48283 9.80976 8.56383 10.0478 8.81383C10.1328 8.89883 10.1978 8.99183 10.2408 9.08883C10.2878 9.19283 10.3118 9.31083 10.3118 9.42983C10.3118 9.66783 10.2168 9.88883 10.0428 10.0508ZM15.1905 8.80973C14.8495 8.46973 14.2945 8.46973 13.9535 8.80973L8.81346 13.9497C8.47246 14.2907 8.47246 14.8457 8.81346 15.1877C8.97946 15.3527 9.19846 15.4437 9.43246 15.4437C9.66646 15.4437 9.88546 15.3527 10.0505 15.1877L15.1905 10.0477C15.5315 9.70573 15.5315 9.15173 15.1905 8.80973ZM14.9058 13.7638C14.5818 13.6278 14.1978 13.7018 13.9418 13.9578C13.8888 14.0198 13.8138 14.1158 13.7628 14.2288C13.7088 14.3508 13.7018 14.4818 13.7018 14.5698C13.7018 14.6578 13.7088 14.7878 13.7628 14.9098C13.8128 15.0218 13.8728 15.1128 13.9518 15.1918C14.1328 15.3598 14.3428 15.4448 14.5768 15.4448C14.7988 15.4448 15.0168 15.3548 15.1958 15.1878C15.3548 15.0288 15.4418 14.8088 15.4418 14.5698C15.4418 14.3298 15.3548 14.1108 15.1948 13.9508C15.1068 13.8638 15.0008 13.7958 14.9058 13.7638Z" fill="currentColor"></path>
                </svg>
            </i>
            <span class="item-name">Mascotas</span>
            <i class="right-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </i>
        </a>
        <ul class="sub-nav collapse" id="sidebar-pets" data-bs-parent="#sidebar">
            <li class="nav-item">
                <a class="nav-link  {{activeRoute(route('mascotas.create'))}}" href="{{route('mascotas.create')}}">
                    <i class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                            <g>
                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                            </g>
                        </svg>
                    </i>
                    <i class="sidenav-mini-icon"> R </i>
                    <span class="item-name">Registrar Mascota</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{activeRoute(route('mascotas.index'))}}" href="{{route('mascotas.index')}}">
                   <i class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                            <g>
                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                            </g>
                        </svg>
                    </i>
                   <i class="sidenav-mini-icon"> L </i>
                   <span class="item-name">Lista de Mascotas</span>
                </a>
            </li>
        </ul>
    </li>

    {{-- Historial Clinico --}}
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-consultationhistory" role="button"  aria-expanded="false" aria-controls="sidebar-consultationhistory">
            <i class="icon">
                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.4" d="M16.191 2H7.81C4.77 2 3 3.78 3 6.83V17.16C3 20.26 4.77 22 7.81 22H16.191C19.28 22 21 20.26 21 17.16V6.83C21 3.78 19.28 2 16.191 2Z" fill="currentColor"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.07996 6.6499V6.6599C7.64896 6.6599 7.29996 7.0099 7.29996 7.4399C7.29996 7.8699 7.64896 8.2199 8.07996 8.2199H11.069C11.5 8.2199 11.85 7.8699 11.85 7.4289C11.85 6.9999 11.5 6.6499 11.069 6.6499H8.07996ZM15.92 12.7399H8.07996C7.64896 12.7399 7.29996 12.3899 7.29996 11.9599C7.29996 11.5299 7.64896 11.1789 8.07996 11.1789H15.92C16.35 11.1789 16.7 11.5299 16.7 11.9599C16.7 12.3899 16.35 12.7399 15.92 12.7399ZM15.92 17.3099H8.07996C7.77996 17.3499 7.48996 17.1999 7.32996 16.9499C7.16996 16.6899 7.16996 16.3599 7.32996 16.1099C7.48996 15.8499 7.77996 15.7099 8.07996 15.7399H15.92C16.319 15.7799 16.62 16.1199 16.62 16.5299C16.62 16.9289 16.319 17.2699 15.92 17.3099Z" fill="currentColor"></path>
                </svg>
            </i>
            <span class="item-name">Historial Clinico</span>
            <i class="right-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </i>
        </a>
        <ul class="sub-nav collapse" id="sidebar-consultationhistory" data-bs-parent="#sidebar">
            <li class="nav-item">
                <a class="nav-link  {{activeRoute(route('historial.create'))}}" href="{{route('historial.create')}}">
                    <i class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                            <g>
                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                            </g>
                        </svg>
                    </i>
                    <i class="sidenav-mini-icon"> N </i>
                    <span class="item-name">Nuevo Registro</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{activeRoute(route('historial.index'))}}" href="{{route('historial.index')}}">
                   <i class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                            <g>
                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                            </g>
                        </svg>
                    </i>
                   <i class="sidenav-mini-icon"> L </i>
                   <span class="item-name">Listado</span>
                </a>
            </li>
        </ul>
    </li>

    {{-- Comunicacion --}}
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-comunication" role="button"  aria-expanded="false" aria-controls="sidebar-comunication">
            <i class="icon">
                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.4" d="M22 15.94C22 18.73 19.76 20.99 16.97 21H16.96H7.05C4.27 21 2 18.75 2 15.96V15.95C2 15.95 2.006 11.524 2.014 9.298C2.015 8.88 2.495 8.646 2.822 8.906C5.198 10.791 9.447 14.228 9.5 14.273C10.21 14.842 11.11 15.163 12.03 15.163C12.95 15.163 13.85 14.842 14.56 14.262C14.613 14.227 18.767 10.893 21.179 8.977C21.507 8.716 21.989 8.95 21.99 9.367C22 11.576 22 15.94 22 15.94Z" fill="currentColor"></path>
                    <path d="M21.4759 5.67351C20.6099 4.04151 18.9059 2.99951 17.0299 2.99951H7.04988C5.17388 2.99951 3.46988 4.04151 2.60388 5.67351C2.40988 6.03851 2.50188 6.49351 2.82488 6.75151L10.2499 12.6905C10.7699 13.1105 11.3999 13.3195 12.0299 13.3195C12.0339 13.3195 12.0369 13.3195 12.0399 13.3195C12.0429 13.3195 12.0469 13.3195 12.0499 13.3195C12.6799 13.3195 13.3099 13.1105 13.8299 12.6905L21.2549 6.75151C21.5779 6.49351 21.6699 6.03851 21.4759 5.67351Z" fill="currentColor"></path>
                </svg>
            </i>
            <span class="item-name">Comunicación</span>
            <i class="right-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </i>
        </a>
        <ul class="sub-nav collapse" id="sidebar-comunication" data-bs-parent="#sidebar">
            <li class="nav-item">
                <a class="nav-link  {{activeRoute(route('comunicacion.comentarios'))}}" href="{{route('comunicacion.comentarios')}}">
                    <i class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                            <g>
                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                            </g>
                        </svg>
                    </i>
                    <i class="sidenav-mini-icon"> C </i>
                    <span class="item-name">Caja de Comentarios</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{activeRoute(route('comunicacion.redes'))}}" href="{{route('comunicacion.redes')}}">
                   <i class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                            <g>
                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                            </g>
                        </svg>
                    </i>
                   <i class="sidenav-mini-icon"> R </i>
                   <span class="item-name">Redes Sociales</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{activeRoute(route('comunicacion.correo'))}}" href="{{route('comunicacion.correo')}}">
                   <i class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                            <g>
                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                            </g>
                        </svg>
                    </i>
                   <i class="sidenav-mini-icon"> C </i>
                   <span class="item-name">Correo</span>
                </a>
            </li>
        </ul>
    </li>

    {{-------------------------------------------------------------------------------------------}}

    {{-- Nombre de la Seccion: Herramientas y Componentes --}}
    <li><hr class="hr-horizontal"></li>

    <li class="nav-item static-item">
        <a class="nav-link static-item disabled" href="#" tabindex="-1">
            <span class="default-icon">Componentes apoyo</span>
            <span class="mini-icon">-</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-special-pages" role="button"  aria-expanded="false" aria-controls="sidebar-special-pages">
            <i class="icon">
                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.4" d="M13.3051 5.88243V6.06547C12.8144 6.05584 12.3237 6.05584 11.8331 6.05584V5.89206C11.8331 5.22733 11.2737 4.68784 10.6064 4.68784H9.63482C8.52589 4.68784 7.62305 3.80152 7.62305 2.72254C7.62305 2.32755 7.95671 2 8.35906 2C8.77123 2 9.09508 2.32755 9.09508 2.72254C9.09508 3.01155 9.34042 3.24276 9.63482 3.24276H10.6064C12.0882 3.2524 13.2953 4.43736 13.3051 5.88243Z" fill="currentColor"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.164 6.08279C15.4791 6.08712 15.7949 6.09145 16.1119 6.09469C19.5172 6.09469 22 8.52241 22 11.875V16.1813C22 19.5339 19.5172 21.9616 16.1119 21.9616C14.7478 21.9905 13.3837 22.0001 12.0098 22.0001C10.6359 22.0001 9.25221 21.9905 7.88813 21.9616C4.48283 21.9616 2 19.5339 2 16.1813V11.875C2 8.52241 4.48283 6.09469 7.89794 6.09469C9.18351 6.07542 10.4985 6.05615 11.8332 6.05615C12.3238 6.05615 12.8145 6.05615 13.3052 6.06579C13.9238 6.06579 14.5425 6.07427 15.164 6.08279ZM10.8518 14.7459H9.82139V15.767C9.82139 16.162 9.48773 16.4896 9.08538 16.4896C8.67321 16.4896 8.34936 16.162 8.34936 15.767V14.7459H7.30913C6.90677 14.7459 6.57311 14.4279 6.57311 14.0233C6.57311 13.6283 6.90677 13.3008 7.30913 13.3008H8.34936V12.2892C8.34936 11.8942 8.67321 11.5667 9.08538 11.5667C9.48773 11.5667 9.82139 11.8942 9.82139 12.2892V13.3008H10.8518C11.2542 13.3008 11.5878 13.6283 11.5878 14.0233C11.5878 14.4279 11.2542 14.7459 10.8518 14.7459ZM15.0226 13.1177H15.1207C15.5231 13.1177 15.8567 12.7998 15.8567 12.3952C15.8567 12.0002 15.5231 11.6727 15.1207 11.6727H15.0226C14.6104 11.6727 14.2866 12.0002 14.2866 12.3952C14.2866 12.7998 14.6104 13.1177 15.0226 13.1177ZM16.7007 16.4318H16.7988C17.2012 16.4318 17.5348 16.1139 17.5348 15.7092C17.5348 15.3143 17.2012 14.9867 16.7988 14.9867H16.7007C16.2885 14.9867 15.9647 15.3143 15.9647 15.7092C15.9647 16.1139 16.2885 16.4318 16.7007 16.4318Z" fill="currentColor"></path>
                </svg>
            </i>
            <span class="item-name">Special Pages</span>
            <i class="right-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </i>
        </a>
        <ul class="sub-nav collapse" id="sidebar-special-pages" data-bs-parent="#sidebar">
            <li class=" nav-item">
                <a class="nav-link {{activeRoute(route('special-pages.billing'))}}" href="{{route('special-pages.billing')}}">
                  <i class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                            <g>
                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                            </g>
                        </svg>
                    </i>
                  <i class="sidenav-mini-icon"> B </i>
                  <span class="item-name">Billing</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link  {{activeRoute(route('special-pages.calender'))}}" href="{{route('special-pages.calender')}}">
                    <i class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                            <g>
                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                            </g>
                        </svg>
                    </i>
                    <i class="sidenav-mini-icon"> C </i>
                    <span class="item-name">Calender</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{activeRoute(route('special-pages.kanban'))}}" href="{{route('special-pages.kanban')}}">
                   <i class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                            <g>
                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                            </g>
                        </svg>
                    </i>
                   <i class="sidenav-mini-icon"> K </i>
                   <span class="item-name">kanban</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{activeRoute(route('special-pages.pricing'))}}" href="{{route('special-pages.pricing')}}">
                    <i class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                            <g>
                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                            </g>
                        </svg>
                    </i>
                    <i class="sidenav-mini-icon"> P </i>
                    <span class="item-name">Pricing</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{activeRoute(route('special-pages.rtlsupport'))}}" href="{{route('special-pages.rtlsupport')}}">
                    <i class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                            <g>
                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                            </g>
                        </svg>
                    </i>
                    <i class="sidenav-mini-icon"> R </i>
                    <span class="item-name">RTL Support</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{activeRoute(route('special-pages.timeline'))}}" href="{{route('special-pages.timeline')}}">
                    <i class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                            <g>
                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                            </g>
                        </svg>
                    </i>
                    <i class="sidenav-mini-icon"> T </i>
                    <span class="item-name">Timeline</span>
                </a>
            </li>
        </ul>
    </li>

    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-auth" role="button" aria-expanded="false" aria-controls="sidebar-user">
            <i class="icon">
                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.4" d="M12.0865 22C11.9627 22 11.8388 21.9716 11.7271 21.9137L8.12599 20.0496C7.10415 19.5201 6.30481 18.9259 5.68063 18.2336C4.31449 16.7195 3.5544 14.776 3.54232 12.7599L3.50004 6.12426C3.495 5.35842 3.98931 4.67103 4.72826 4.41215L11.3405 2.10679C11.7331 1.96656 12.1711 1.9646 12.5707 2.09992L19.2081 4.32684C19.9511 4.57493 20.4535 5.25742 20.4575 6.02228L20.4998 12.6628C20.5129 14.676 19.779 16.6274 18.434 18.1581C17.8168 18.8602 17.0245 19.4632 16.0128 20.0025L12.4439 21.9088C12.3331 21.9686 12.2103 21.999 12.0865 22Z" fill="currentColor"></path>
                    <path d="M11.3194 14.3209C11.1261 14.3219 10.9328 14.2523 10.7838 14.1091L8.86695 12.2656C8.57097 11.9793 8.56795 11.5145 8.86091 11.2262C9.15387 10.9369 9.63207 10.934 9.92906 11.2193L11.3083 12.5451L14.6758 9.22479C14.9698 8.93552 15.448 8.93258 15.744 9.21793C16.041 9.50426 16.044 9.97004 15.751 10.2574L11.8519 14.1022C11.7049 14.2474 11.5127 14.3199 11.3194 14.3209Z" fill="currentColor"></path>
                </svg>
            </i>
            <span class="item-name">Authentication</span>
            <i class="right-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </i>
        </a>
        <ul class="sub-nav collapse" id="sidebar-auth" data-bs-parent="#sidebar">
            <li class="nav-item">
                <a class="nav-link {{activeRoute(route('auth.signin'))}}" href="{{route('auth.signin')}}">
                    <i class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                            <g>
                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                            </g>
                        </svg>
                    </i>
                    <i class="sidenav-mini-icon"> L </i>
                    <span class="item-name">Login</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{activeRoute(route('auth.signup'))}}" href="{{route('auth.signup')}}">
                    <i class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                            <g>
                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                            </g>
                        </svg>
                    </i>
                    <i class="sidenav-mini-icon"> R </i>
                    <span class="item-name">Register</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{activeRoute(route('auth.confirmmail'))}}" href="{{route('auth.confirmmail')}}">
                    <i class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                            <g>
                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                            </g>
                        </svg>
                    </i>
                    <i class="sidenav-mini-icon"> C </i>
                    <span class="item-name">Confirm Mail</span>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link {{activeRoute(route('auth.lockscreen'))}}" href="{{route('auth.lockscreen')}}">
                    <i class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                            <g>
                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                            </g>
                        </svg>
                    </i>
                    <i class="sidenav-mini-icon"> L </i>
                    <span class="item-name">Lock Screen</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{activeRoute(route('auth.recoverpw'))}}" href="{{route('auth.recoverpw')}}">
                   <i class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                            <g>
                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                            </g>
                        </svg>
                    </i>
                    <i class="sidenav-mini-icon"> R </i>
                    <span class="item-name">Recover password</span>
                </a>
            </li>
        </ul>
    </li>

    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#utilities-error" role="button" aria-expanded="false" aria-controls="utilities-error">
            <i class="icon">
                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.4" d="M11.9912 18.6215L5.49945 21.864C5.00921 22.1302 4.39768 21.9525 4.12348 21.4643C4.0434 21.3108 4.00106 21.1402 4 20.9668V13.7087C4 14.4283 4.40573 14.8725 5.47299 15.37L11.9912 18.6215Z" fill="currentColor"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.89526 2H15.0695C17.7773 2 19.9735 3.06605 20 5.79337V20.9668C19.9989 21.1374 19.9565 21.3051 19.8765 21.4554C19.7479 21.7007 19.5259 21.8827 19.2615 21.9598C18.997 22.0368 18.7128 22.0023 18.4741 21.8641L11.9912 18.6215L5.47299 15.3701C4.40573 14.8726 4 14.4284 4 13.7088V5.79337C4 3.06605 6.19625 2 8.89526 2ZM8.22492 9.62227H15.7486C16.1822 9.62227 16.5336 9.26828 16.5336 8.83162C16.5336 8.39495 16.1822 8.04096 15.7486 8.04096H8.22492C7.79137 8.04096 7.43991 8.39495 7.43991 8.83162C7.43991 9.26828 7.79137 9.62227 8.22492 9.62227Z" fill="currentColor"></path>
                </svg>
            </i>
            <span class="item-name">Utilities</span>
            <i class="right-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </i>
        </a>
        <ul class="sub-nav collapse" id="utilities-error" data-bs-parent="#sidebar">
            <li class="nav-item">
                <a class="nav-link" href="{{route('errors.error404')}}">
                    <i class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                            <g>
                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                            </g>
                        </svg>
                    </i>
                    <span class="item-name">Error 404</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('errors.error500')}}">
                    <i class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                            <g>
                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                            </g>
                        </svg>
                    </i>
                    <span class="item-name">Error 500</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('errors.maintenance')}}">
                    <i class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                            <g>
                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                            </g>
                        </svg>
                    </i>
                    <span class="item-name">Maintence</span>
                </a>
            </li>
        </ul>
    </li>

    <li class="nav-item">
        <a class="nav-link {{activeRoute(route('role.permission.list'))}}" href="{{route('role.permission.list')}}" target="_blank">
            <i class="icon">
            <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.7688 8.71387H16.2312C18.5886 8.71387 20.5 10.5831 20.5 12.8885V17.8254C20.5 20.1308 18.5886 22 16.2312 22H7.7688C5.41136 22 3.5 20.1308 3.5 17.8254V12.8885C3.5 10.5831 5.41136 8.71387 7.7688 8.71387ZM11.9949 17.3295C12.4928 17.3295 12.8891 16.9419 12.8891 16.455V14.2489C12.8891 13.772 12.4928 13.3844 11.9949 13.3844C11.5072 13.3844 11.1109 13.772 11.1109 14.2489V16.455C11.1109 16.9419 11.5072 17.3295 11.9949 17.3295Z" fill="currentColor"></path>
            <path opacity="0.4" d="M17.523 7.39595V8.86667C17.1673 8.7673 16.7913 8.71761 16.4052 8.71761H15.7447V7.39595C15.7447 5.37868 14.0681 3.73903 12.0053 3.73903C9.94257 3.73903 8.26594 5.36874 8.25578 7.37608V8.71761H7.60545C7.20916 8.71761 6.83319 8.7673 6.47754 8.87661V7.39595C6.4877 4.41476 8.95692 2 11.985 2C15.0537 2 17.523 4.41476 17.523 7.39595Z" fill="currentColor"></path>
            </svg>
            </i>
            <span class="item-name">Admin</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{route('uisheet')}}" target="_blank">
            <i class="icon">
                 <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path opacity="0.4" d="M2 11.0786C2.05 13.4166 2.19 17.4156 2.21 17.8566C2.281 18.7996 2.642 19.7526 3.204 20.4246C3.986 21.3676 4.949 21.7886 6.292 21.7886C8.148 21.7986 10.194 21.7986 12.181 21.7986C14.176 21.7986 16.112 21.7986 17.747 21.7886C19.071 21.7886 20.064 21.3566 20.836 20.4246C21.398 19.7526 21.759 18.7896 21.81 17.8566C21.83 17.4856 21.93 13.1446 21.99 11.0786H2Z" fill="currentColor"></path>                                <path d="M11.2451 15.3843V16.6783C11.2451 17.0923 11.5811 17.4283 11.9951 17.4283C12.4091 17.4283 12.7451 17.0923 12.7451 16.6783V15.3843C12.7451 14.9703 12.4091 14.6343 11.9951 14.6343C11.5811 14.6343 11.2451 14.9703 11.2451 15.3843Z" fill="currentColor"></path>                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.211 14.5565C10.111 14.9195 9.762 15.1515 9.384 15.1015C6.833 14.7455 4.395 13.8405 2.337 12.4815C2.126 12.3435 2 12.1075 2 11.8555V8.38949C2 6.28949 3.712 4.58149 5.817 4.58149H7.784C7.972 3.12949 9.202 2.00049 10.704 2.00049H13.286C14.787 2.00049 16.018 3.12949 16.206 4.58149H18.183C20.282 4.58149 21.99 6.28949 21.99 8.38949V11.8555C21.99 12.1075 21.863 12.3425 21.654 12.4815C19.592 13.8465 17.144 14.7555 14.576 15.1105C14.541 15.1155 14.507 15.1175 14.473 15.1175C14.134 15.1175 13.831 14.8885 13.746 14.5525C13.544 13.7565 12.821 13.1995 11.99 13.1995C11.148 13.1995 10.433 13.7445 10.211 14.5565ZM13.286 3.50049H10.704C10.031 3.50049 9.469 3.96049 9.301 4.58149H14.688C14.52 3.96049 13.958 3.50049 13.286 3.50049Z" fill="currentColor">
               </path></svg>
            </i>
            <span class="item-name">Components</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-widget" role="button" aria-expanded="false" aria-controls="sidebar-widget">
            <i class="icon">
                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.4" d="M21.25 13.4764C20.429 13.4764 19.761 12.8145 19.761 12.001C19.761 11.1865 20.429 10.5246 21.25 10.5246C21.449 10.5246 21.64 10.4463 21.78 10.3076C21.921 10.1679 22 9.97864 22 9.78146L21.999 7.10415C21.999 4.84102 20.14 3 17.856 3H6.144C3.86 3 2.001 4.84102 2.001 7.10415L2 9.86766C2 10.0648 2.079 10.2541 2.22 10.3938C2.36 10.5325 2.551 10.6108 2.75 10.6108C3.599 10.6108 4.239 11.2083 4.239 12.001C4.239 12.8145 3.571 13.4764 2.75 13.4764C2.336 13.4764 2 13.8093 2 14.2195V16.8949C2 19.158 3.858 21 6.143 21H17.857C20.142 21 22 19.158 22 16.8949V14.2195C22 13.8093 21.664 13.4764 21.25 13.4764Z" fill="currentColor"></path>
                    <path d="M15.4303 11.5887L14.2513 12.7367L14.5303 14.3597C14.5783 14.6407 14.4653 14.9177 14.2343 15.0837C14.0053 15.2517 13.7063 15.2727 13.4543 15.1387L11.9993 14.3737L10.5413 15.1397C10.4333 15.1967 10.3153 15.2267 10.1983 15.2267C10.0453 15.2267 9.89434 15.1787 9.76434 15.0847C9.53434 14.9177 9.42134 14.6407 9.46934 14.3597L9.74734 12.7367L8.56834 11.5887C8.36434 11.3907 8.29334 11.0997 8.38134 10.8287C8.47034 10.5587 8.70034 10.3667 8.98134 10.3267L10.6073 10.0897L11.3363 8.61268C11.4633 8.35868 11.7173 8.20068 11.9993 8.20068H12.0013C12.2843 8.20168 12.5383 8.35968 12.6633 8.61368L13.3923 10.0897L15.0213 10.3277C15.2993 10.3667 15.5293 10.5587 15.6173 10.8287C15.7063 11.0997 15.6353 11.3907 15.4303 11.5887Z" fill="currentColor"></path>
                </svg>
            </i>
            <span class="item-name">widget</span>
            <i class="right-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </i>
        </a>
        <ul class="sub-nav collapse" id="sidebar-widget" data-bs-parent="#sidebar">
            <li class="nav-item">
                <a class="nav-link {{activeRoute(route('widget.widgetbasic'))}}" href="{{route('widget.widgetbasic')}}">
                    <i class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                            <g>
                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                            </g>
                        </svg>
                    </i>
                    <i class="sidenav-mini-icon"> W </i>
                    <span class="item-name">Widget Basic</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{activeRoute(route('widget.widgetchart'))}}" href="{{route('widget.widgetchart')}}">
                    <i class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                            <g>
                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                            </g>
                        </svg>
                    </i>
                    <i class="sidenav-mini-icon"> W </i>
                    <span class="item-name">Widget Chart</span>
                </a>
            </li>
             <li class="nav-item">
                <a class="nav-link {{activeRoute(route('widget.widgetcard'))}}" href="{{route('widget.widgetcard')}}">
                    <i class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                            <g>
                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                            </g>
                        </svg>
                    </i>
                    <i class="sidenav-mini-icon"> W </i>
                    <span class="item-name">Widget Card</span>
                </a>
            </li>
        </ul>
    </li>

    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-maps" role="button" aria-expanded="false" aria-controls="sidebar-maps">
            <i class="icon">
                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.53162 2.93677C10.7165 1.66727 13.402 1.68946 15.5664 2.99489C17.7095 4.32691 19.012 6.70418 18.9998 9.26144C18.95 11.8019 17.5533 14.19 15.8075 16.0361C14.7998 17.1064 13.6726 18.0528 12.4488 18.856C12.3228 18.9289 12.1848 18.9777 12.0415 19C11.9036 18.9941 11.7693 18.9534 11.6508 18.8814C9.78243 17.6746 8.14334 16.134 6.81233 14.334C5.69859 12.8314 5.06584 11.016 5 9.13442C4.99856 6.57225 6.34677 4.20627 8.53162 2.93677ZM9.79416 10.1948C10.1617 11.1008 11.0292 11.6918 11.9916 11.6918C12.6221 11.6964 13.2282 11.4438 13.6748 10.9905C14.1214 10.5371 14.3715 9.92064 14.3692 9.27838C14.3726 8.29804 13.7955 7.41231 12.9073 7.03477C12.0191 6.65723 10.995 6.86235 10.3133 7.55435C9.63159 8.24635 9.42664 9.28872 9.79416 10.1948Z" fill="currentColor"></path>
                    <ellipse opacity="0.4" cx="12" cy="21" rx="5" ry="1" fill="currentColor"></ellipse>
                </svg>
            </i>
            <span class="item-name">Maps</span>
            <i class="right-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </i>
        </a>
        <ul class="sub-nav collapse" id="sidebar-maps" data-bs-parent="#sidebar">
            <li class="nav-item">
                <a class="nav-link {{activeRoute(route('maps.google'))}}" href="{{route('maps.google')}}">
                    <i class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                            <g>
                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                            </g>
                        </svg>
                    </i>
                    <i class="sidenav-mini-icon"> G </i>
                    <span class="item-name">Google</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{activeRoute(route('maps.vector'))}}" href="{{route('maps.vector')}}">
                   <i class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                            <g>
                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                            </g>
                        </svg>
                    </i>
                    <i class="sidenav-mini-icon"> V </i>
                    <span class="item-name">Vector</span>
                </a>
            </li>
        </ul>
    </li>

    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-form" role="button" aria-expanded="false" aria-controls="sidebar-form">
            <i class="icon">
                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.4" d="M16.191 2H7.81C4.77 2 3 3.78 3 6.83V17.16C3 20.26 4.77 22 7.81 22H16.191C19.28 22 21 20.26 21 17.16V6.83C21 3.78 19.28 2 16.191 2Z" fill="currentColor"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.07996 6.6499V6.6599C7.64896 6.6599 7.29996 7.0099 7.29996 7.4399C7.29996 7.8699 7.64896 8.2199 8.07996 8.2199H11.069C11.5 8.2199 11.85 7.8699 11.85 7.4289C11.85 6.9999 11.5 6.6499 11.069 6.6499H8.07996ZM15.92 12.7399H8.07996C7.64896 12.7399 7.29996 12.3899 7.29996 11.9599C7.29996 11.5299 7.64896 11.1789 8.07996 11.1789H15.92C16.35 11.1789 16.7 11.5299 16.7 11.9599C16.7 12.3899 16.35 12.7399 15.92 12.7399ZM15.92 17.3099H8.07996C7.77996 17.3499 7.48996 17.1999 7.32996 16.9499C7.16996 16.6899 7.16996 16.3599 7.32996 16.1099C7.48996 15.8499 7.77996 15.7099 8.07996 15.7399H15.92C16.319 15.7799 16.62 16.1199 16.62 16.5299C16.62 16.9289 16.319 17.2699 15.92 17.3099Z" fill="currentColor"></path>
                </svg>
            </i>
            <span class="item-name">Form</span>
            <i class="right-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </i>
        </a>
        <ul class="sub-nav collapse" id="sidebar-form" data-bs-parent="#sidebar">
            <li class="nav-item">
                <a class="nav-link {{activeRoute(route('forms.element'))}}" href="{{route('forms.element')}}">
                <i class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                            <g>
                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                            </g>
                        </svg>
                    </i>
                    <i class="sidenav-mini-icon"> E </i>
                    <span class="item-name">Elements</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{activeRoute(route('forms.wizard'))}}" href="{{route('forms.wizard')}}">
                    <i class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                            <g>
                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                            </g>
                        </svg>
                    </i>
                    <i class="sidenav-mini-icon"> W </i>
                    <span class="item-name">Wizard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{activeRoute(route('forms.validation'))}}" href="{{route('forms.validation')}}">
                    <i class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                            <g>
                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                            </g>
                        </svg>
                    </i>
                    <i class="sidenav-mini-icon"> V </i>
                    <span class="item-name">Validation</span>
                </a>
            </li>
        </ul>
    </li>

    <li class="nav-item mb-5">
        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-table" role="button" aria-expanded="false" aria-controls="sidebar-table">
            <i class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="none">
                    <path d="M2 5C2 4.44772 2.44772 4 3 4H8.66667H21C21.5523 4 22 4.44772 22 5V8H15.3333H8.66667H2V5Z" fill="currentColor" stroke="white"/>
                    <path d="M2 8H6H14H22V11V19C22 19.5523 21.5523 20 21 20H14H6H3C2.44772 20 2 19.5523 2 19V11V8Z" fill="currentColor" fill-opacity="0.4"/>
                    <path d="M6 8H2V11M6 8V20M6 8H14M6 20H3C2.44772 20 2 19.5523 2 19V11M6 20H14M14 8H22V11M14 8V20M14 20H21C21.5523 20 22 19.5523 22 19V11M2 11H22M2 14H22M2 17H22M10 8V20M18 8V20" stroke="white"/>
                </svg>
            </i>
            <span class="item-name">Table</span>
            <i class="right-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </i>
        </a>
        <ul class="sub-nav collapse" id="sidebar-table" data-bs-parent="#sidebar">
            <li class="nav-item">
                <a class="nav-link {{activeRoute(route('table.bootstraptable'))}}" href="{{route('table.bootstraptable')}}">
                    <i class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                            <g>
                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                            </g>
                        </svg>
                    </i>
                    <i class="sidenav-mini-icon"> B </i>
                    <span class="item-name">Bootstrap Table</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{activeRoute(route('table.datatable'))}}" href="{{route('table.datatable')}}">
                <i class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                        <g>
                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                        </g>
                    </svg>
                </i>
                <i class="sidenav-mini-icon"> D </i>
                <span class="item-name">Datatable</span>
                </a>
            </li>
        </ul>
    </li>

</ul>
