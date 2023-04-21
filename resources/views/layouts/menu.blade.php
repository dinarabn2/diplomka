<li class="nav-item">
    <a href="{{ route('students.index') }}"
       class="nav-link {{ Request::is('students*') ? 'active' : '' }}">
        <p>Студенттер тізімі</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('faculties.index') }}"
       class="nav-link {{ Request::is('faculties*') ? 'active' : '' }}">
        <p>Faculties</p>
    </a>
</li>


