<li class="nav-item {{ Request::is('cursos*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('cursos.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Cursos</span>
    </a>
</li>
<li class="nav-item {{ Request::is('alunos*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('alunos.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Alunos</span>
    </a>
</li>
