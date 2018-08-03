<!DOCTYPE html>
<html lang="en">
 @include('admin.layouts.include.head')
 @include('admin.layouts.include.nav')

 <div class="main-panel">
   @yield('content')

   @include('admin.layouts.include.footer')
  </div> <!-- main-panel -->
 </div> <!-- wrapper -->

 @include('admin.layouts.include.script')
