<li class="nav-item">
    <a href="{{ route('faculties.index') }}"
       class="nav-link {{ Request::is('faculties*') ? 'active' : '' }}">
        <p>Жарнамалар тізімі</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('specialities.index') }}"
       class="nav-link {{ Request::is('specialities*') ? 'active' : '' }}">
        <p>Өткізу саласы тізімі</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('tutors.index') }}"
       class="nav-link {{ Request::is('tutors*') ? 'active' : '' }}">
        <p>Жауаптылар тізімі</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('groups.index') }}"
       class="nav-link {{ Request::is('groups*') ? 'active' : '' }}">
        <p>Жарнама түрлері</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('students.index') }}"
       class="nav-link {{ Request::is('students*') ? 'active' : '' }}">
        <p>Тапсырыстар тізімі</p>
    </a>
</li>
