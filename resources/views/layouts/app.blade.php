<!DOCTYPE html>
<html lang="pl">
 @include('layouts.include.head')
 @include('layouts.include.nav')

<main>
 @yield('content')
</main>

 @include('layouts.include.footer')
 @include('layouts.include.script')

 @yield('script')

</body>
</html>