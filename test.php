<head>
    <meta charset="UTF-8">
    <meta name="description" content="This page is going to become a entrance to my first-created site">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Ket-Hem">

    <link rel="stylesheet" href="css/test.css">

<title>test</title>
</head>
<body id = "top_marker">

<!-- PHP function -->
<div>
<?php
include_once 'functionTest.php';
date_default_timezone_set ( 'Europe/Kiev');
echo "<h1 class='header_information'>".basename(__FILE__).date(" jS F Y  H:i:s")."</h1><hr>";
?>


</div>
<!-- name+css+js -->
<div>
    <p class="paragraph_css_js">Enter your name</p>
    <p class="paragraph_css_js_2">Enter your name</p>
</div>
<!--JavaScript -->
<script src="js/javascript.js"></script>





<a href="#top_marker"> Up!</a>
</body>