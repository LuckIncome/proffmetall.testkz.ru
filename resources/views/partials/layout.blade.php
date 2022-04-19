<!DOCTYPE html>
<html lang="ru">
  @include('partials.head')
<body class="d-flex flex-column vh-100">     
  @include('partials.header')
  <main> 
    @yield('content')
  </main>
  @include('partials.footer')
  @include('partials.modals')
  @include('partials.scripts')
  @yield('scripts')
</body>
</html>