<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>


  @include('backend.inc.header')

        @yield('content');

        @include('backend.inc.footer')


        <script src="assets/vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="assets/vendors/chart.js/Chart.min.js"></script>
        <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
        <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
        <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
        <!-- End plugin js for this page -->
        <script src="assets/vendors/select2/select2.min.js"></script>
        <script src="assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
        <!-- inject:js -->
        <script src="assets/js/off-canvas.js"></script>
        <script src="assets/js/hoverable-collapse.js"></script>
        <script src="assets/js/misc.js"></script>
        <script src="assets/js/settings.js"></script>
        <script src="assets/js/todolist.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <script src="assets/js/dashboard.js"></script>
        <script src="assets/js/file-upload.js"></script>
        <script src="assets/js/typeahead.js"></script>
        <script src="assets/js/select2.js"></script>
        <script>
          function previewImage(event) {
            const fileInput = event.target;
            const previewContainer = document.getElementById('previewContainer');
            const previewImage = document.createElement('img');

            // Clear previous image
            previewContainer.innerHTML = '';

            // Check if a file is selected
            if (fileInput.files.length > 0) {
              const selectedFile = fileInput.files[0];

              // Create a FileReader to read the image
              const reader = new FileReader();

              reader.onload = function (e) {
                previewImage.src = e.target.result;
                previewContainer.appendChild(previewImage);
              };

              // Read the image as Data URL
              reader.readAsDataURL(selectedFile);
            }
          }
        </script>
        <!-- End custom js for this page -->
        </body>

        </html>
