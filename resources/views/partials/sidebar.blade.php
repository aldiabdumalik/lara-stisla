<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="javascript:void(0)">Stisla</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="javascript:void(0)">St</a>
    </div>
    <ul class="sidebar-menu">
      <li class="{{ request()->route()->getName() === 'admin.dashboard' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.dashboard') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a>
      </li>
    </ul>
  </aside>
</div>