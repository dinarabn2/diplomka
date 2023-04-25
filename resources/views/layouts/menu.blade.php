<li class="nav-item">
    <a href="{{ route('faculties.index') }}"
       class="nav-link {{ Request::is('faculties*') ? 'active' : '' }}">
        <p>Факультеттер тізімі</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('specialities.index') }}"
       class="nav-link {{ Request::is('specialities*') ? 'active' : '' }}">
        <p>Мамандықтар тізімі</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('tutors.index') }}"
       class="nav-link {{ Request::is('tutors*') ? 'active' : '' }}">
        <p>Кураторлар тізімі</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('groups.index') }}"
       class="nav-link {{ Request::is('groups*') ? 'active' : '' }}">
        <p>Группа</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('students.index') }}"
       class="nav-link {{ Request::is('students*') ? 'active' : '' }}">
        <p>Студенттер тізімі</p>
    </a>
</li>