<?php
 global $_TITLE;
 global $_DESC;
 global $_BRAND;
 global $_GSC_HEAD;
 global $_GSC_BODY;
 global $_GA;
 global $_JSON;
 $_URI = $_SERVER['REQUEST_URI'];
 
 $_BRAND = " - Adamek";
 if($_URI == "/"){
 $_TITLE = "Main title ";
 $_DESC = "Main desc";
 }elseif($_URI == "/Contact"){
 $_TITLE = "Kontakt title";
 $_DESC = "kontakt desc ";
 }elseif($_URI == "/blog/104"){
 $_TITLE = "Blog 104 title ";
 $_DESC = "Blog 104 desc ";
 }
 
 else{
 $_TITLE = "";
 $_DESC = "";
 }
 
 $_GA = "
 <!-- Global site tag (gtag.js) - Google Analytics -->
 <script async src='https://www.googletagmanager.com/gtag/js?id=UA-123312-1'></script>
 <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config','UA-123312-1');</script>";
 
 $_GSC_HEAD = "
 <!-- Google Tag Manager -->
 <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src= 'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer','GTM-123123');</script>
 <!-- End Google Tag Manager --> ";
 
 $_JSON = '
 <script type="application/ld+json">
 
 {
    "@context": "http://schema.org",
    "@type": "LocalBusiness",
    "address": {
       "@type": "PostalAddress",
       "addressLocality": "Mielec",
       "streetAddress": "Orkana 22a",
       "postalCode": "39-300",
       "addressRegion": "podkarpackie"
    },
    "name": "Power Poland Aleksandra Szkutnik",
    "email": "kontakt@powerpoland.com",
    "telephone": "724988808",
    "vatID": "8172167291",
    "image": "https://powerpoland.com/wp-content/uploads/2021/10/logo-white.png"
 }
 </script>'; 
?>