<div class="sidebar" data-color="green" data-background-color="white">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="{{route('home')}}" class="simple-text logo-normal">
      {{ __('Easy Appointment') }}
      <i class="material-icons">local_hospital</i>
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <!-- <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
          <p>{{ __('Dashboard') }}</p>
        </a>
      </li> -->

      <li class="nav-item{{ $activePage == 'patients-management' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('pacientes.index') }}">
          <i class="material-icons">person_add</i>
          <p>{{ __('Pacientes') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'doctors-management' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('medicos.index') }}">
          <i class="fa fa-user-md" style="font-size:24px;"></i>
          <p>{{ __('Medicos') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'consulta-management' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('consulta.index') }}">
          <i class="material-icons">library_books</i>
          <p>{{ __('Consultas') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>