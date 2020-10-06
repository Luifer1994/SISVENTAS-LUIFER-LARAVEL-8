<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            
            <ul class="nav nav-primary">
                <li class="nav-item active">
                    <a  href="#" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                        <span class="caret"></span>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">COMPONENTES</h4>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#base" class="collapsed" aria-expanded="false">
                        <i class="fas fa-list-ul"></i>
                        <p>Utilidades</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="base" style="">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('pais.index') }}">
                                    <span class="sub-item">Paises</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('departamento.index') }}">
                                    <span class="sub-item">Departamentos</span>
                                </a>
                            </li>
                            <li>
                                
                                <a href="{{ route('ciudad.index') }}">
                                    <span class="sub-item">Ciudades</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('rol.index') }}">
                                    <span class="sub-item">Roles</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#users" class="collapsed" aria-expanded="false">
                        <i class="fas fa-users"></i>
                        <p>Usuarios</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="users" style="">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('user.index') }}">
                                    <span class="sub-item">Lista de Usuarios</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>