<?php 
    require "content/functions/PHP/getCompanyInfo.php";

    echo '
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous"
        />
        <link href="https://fonts.googleapis.com/css2?family=Gayathri:wght@400;700&display=swap" rel="stylesheet" />
        <link rel="shortcut icon" type="image/x-icon" href="../../img/favicon.png" />
        <!-- All photos from https://unsplash.com/ --> ';
        if (strpos($_SERVER['REQUEST_URI'], "Admin") !== false){
            echo '<meta name="robots" content="noindex, nofollow">';
        };
        
        echo '
            <script type="application/ld+json">
            {
            "@context": "https://schema.org",
            "@type": "LocalBusiness",
            "name": "'.$companyName.'",
            "image": "",
            "@id": "",
            "url": "",
            "telephone": "'.$companyPhoneNumber.'",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "'.$companyCityName.'",
                "addressLocality": "'.$companyStreet.'",
                "postalCode": "'.$companyPostalCode.'",
                "addressCountry": ""
            }  
            }
            </script>
        ';
?>