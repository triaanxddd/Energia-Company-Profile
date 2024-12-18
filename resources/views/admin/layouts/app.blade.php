<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Company Admin </title>
  <link rel="icon" href="{{ asset('logo') }}/energia-96x96.png">
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('admin-templates') }}/vendors/feather/feather.css">
  <link rel="stylesheet" href="{{ asset('admin-templates') }}/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="{{ asset('admin-templates') }}/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="{{ asset('admin-templates') }}/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="{{ asset('admin-templates') }}/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="{{ asset('admin-templates') }}/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('admin-templates') }}/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="{{ asset('admin-templates') }}/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('admin-templates') }}/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('admin-templates') }}/{{ asset('admin-templates') }}/images/favicon.png" />
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
  <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
  <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
  <script src="https://example.com/fontawesome/v6.4.2/js/all.js" data-auto-replace-svg="nest"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="{{ asset('template-company') }}/js/jquery.min.js"></script>

</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('admin.layouts.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">

      <!-- partial -->
      @include('admin.layouts.sidebar')
      <div class="main-panel">
<div class="content-wrapper">
      @yield('container')
 
  </div>
  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->
  <footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
      <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
      <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
    </div>
  </footer>
  <!-- partial -->
</div>

  <script>
      var unreadMail = document.getElementById('unread-mails');
      var notifName = document.getElementById('notification-name');
      var notifMsg = document.getElementById('notification-msg');
    
      // Enable pusher logging - don't include this in production
      Pusher.logToConsole = true;

      var pusher = new Pusher('{{ env('PUSHER_APP_KEY') }}', {
        cluster: 'ap1'
      });

      var channel = pusher.subscribe('popup-channel');
      channel.bind('contact-send', function(data) {
        var dataContact = data.data;
        
        if (unreadMail) {
            var currentCount = parseInt(unreadMail.innerText);
            unreadMail.innerText = currentCount + 1;
        }
        notifName.innerHTML = dataContact.sender_name;
        notifMsg.innerHTML = dataContact.message;

        // alert(JSON.stringify(data));
      });

  </script>
  <!-- plugins:js -->
  <script src="{{ asset('admin-templates') }}/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset('admin-templates') }}/vendors/chart.js/Chart.min.js"></script>
  <script src="{{ asset('admin-templates') }}/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="{{ asset('admin-templates') }}/vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('admin-templates') }}/js/off-canvas.js"></script>
  <script src="{{ asset('admin-templates') }}/js/hoverable-collapse.js"></script>
  <script src="{{ asset('admin-templates') }}/js/template.js"></script>
  <script src="{{ asset('admin-templates') }}/js/settings.js"></script>
  <script src="{{ asset('admin-templates') }}/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('admin-templates') }}/js/jquery.cookie.js" type="text/javascript"></script>
  <script src="{{ asset('admin-templates') }}/js/dashboard.js"></script>
  <script src="{{ asset('admin-templates') }}/js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
