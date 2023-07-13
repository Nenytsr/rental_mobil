<div class="container-scroller">
  @include('partials\sidebar')
  <body>
    @include('partials\header')
        <div class="main-panel">
          <div class="content-wrapper">@yield('content')</div>
          <!-- content-wrapper ends -->
          
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
  </body>
  @include('partials\footer')