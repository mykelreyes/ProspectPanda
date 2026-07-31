<head>
   <!-- required meta -->
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
   // SEO defaults. Each page sets $description and $canonical before including this file.
   // Any page that omits them falls back to these site-wide values, so no tag ships empty.
   $defaultDescription = 'ProspectPanda is a modern CRM solution to streamline your sales pipeline, manage customer relationships, and grow your business efficiently.';
   $metaDescription = isset($description) ? $description : $defaultDescription;
   $pageCanonical   = isset($canonical) ? $canonical : 'https://prospectpandacrm.com/';
   // Replace with a real 1200x630 px branded share image when supplied. logo.png is a working fallback.
   $shareImage = 'https://prospectpandacrm.com/assets/images/logo.png';
?>
   <!-- #favicon -->
   <link rel="icon" type="image/png" href="assets/images/favicon.png">
   <!-- #title -->
   <title><?php echo $title; ?></title>
   <!-- #description -->
   <meta name="description" content="<?php echo $metaDescription; ?>">
   <!-- #canonical -->
   <link rel="canonical" href="<?php echo $pageCanonical; ?>">
   <!-- #open-graph -->
   <meta property="og:type" content="website">
   <meta property="og:site_name" content="ProspectPanda">
   <meta property="og:title" content="<?php echo $title; ?>">
   <meta property="og:description" content="<?php echo $metaDescription; ?>">
   <meta property="og:url" content="<?php echo $pageCanonical; ?>">
   <meta property="og:image" content="<?php echo $shareImage; ?>">
   <!-- #twitter-card -->
   <meta name="twitter:card" content="summary_large_image">
   <meta name="twitter:title" content="<?php echo $title; ?>">
   <meta name="twitter:description" content="<?php echo $metaDescription; ?>">
   <meta name="twitter:image" content="<?php echo $shareImage; ?>">
   <!-- #structured-data -->
   <script type="application/ld+json">
   {
     "@context": "https://schema.org",
     "@type": "ProfessionalService",
     "name": "ProspectPanda",
     "url": "https://prospectpandacrm.com/",
     "email": "info@prospectpandacrm.com",
     "description": "ProspectPanda is a GoHighLevel-powered CRM and automation service that helps small businesses track leads, automate follow-ups, and close more deals.",
     "areaServed": "Philippines",
     "address": {
       "@type": "PostalAddress",
       "addressLocality": "Caloocan",
       "addressCountry": "PH"
     },
     "priceRange": "$$"
   }
   </script>
   <!-- #analytics: Google Analytics 4 (GA4) -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=G-750DTZYFCD"></script>
   <script>
     window.dataLayer = window.dataLayer || [];
     function gtag(){dataLayer.push(arguments);}
     gtag('js', new Date());
     gtag('config', 'G-750DTZYFCD');
   </script>
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
</head>