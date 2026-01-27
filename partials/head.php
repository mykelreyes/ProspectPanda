<head>
   <!-- required meta -->
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- #favicon -->
   <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
   <!-- #title -->
   <title><?php echo $title; ?></title>
   <!-- #keywords -->
   <meta name="keywords" content="CRM, customer relationship management, sales pipeline, ProspectPanda">
   <!-- #description -->
   <meta name="description" content="ProspectPanda - Modern CRM solution to streamline your sales pipeline, manage customer relationships, and grow your business efficiently.">
   <!-- ==== css dependencies start ==== -->
   <!-- bootstrap five css -->
   <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
   <!-- glyphter css -->
   <link rel="stylesheet" href="assets/vendor/glyyphter/css/xpovio.css">
   <!-- font awesome six css -->
   <link rel="stylesheet" href="assets/vendor/font-awesome/css/all.css">
   <!-- nice select css -->
   <link rel="stylesheet" href="assets/vendor/nice-select/css/nice-select.css">
   <!-- magnific popup css -->
   <link rel="stylesheet" href="assets/vendor/magnific-popup/css/magnific-popup.css">
   <!-- slick css -->
   <link rel="stylesheet" href="assets/vendor/slick/css/slick.css">
   <!-- ==== / css dependencies end ==== -->
   <!-- main css -->
   <link rel="stylesheet" href="assets/css/main.min.css">
   <!-- custom css -->
   <link rel="stylesheet" href="assets/css/custom.css">
   <?php echo (isset($css) ? $css   : '')?>
   <!-- theme toggle script (load early to prevent flash) -->
   <script src="assets/js/theme-toggle.js"></script>
</head>