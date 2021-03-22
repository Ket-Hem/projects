<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="This page is going to become a entrance to my first-created site">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Ket-Hem">
    <!--<link rel="StyleSheet" href="/EnterGate.css">
    External file of CSS does not work, i have to put it inside *.php file-->
    <style>
        h1 {
            background-color: greenyellow;
            border: 5px dotted purple;
            color: navy;
            text-align: center;
        }
        body {
            background-color:hsla(70, 97%, 55%, 0.4);
            border: 3px solid rgba(255, 255, 0, 1);
            padding: 20px;
            margin: 50px;
            color: #363636;
            text-align: center;
            font-family: Tahoma;
            font-size: 150%;
        img{
            width:244px;
            height:100%;
        }
        a:link {
            color: green;
            background-color: transparent;
            text-decoration: none;
        }
        a:visited {
            color: darkblue;
            background-color: transparent;
            text-decoration: none;
        }
        a:hover {
            color: red;
            background-color: transparent;
            text-decoration: none;
        }
        a:active {
            color: yellow;
            background-color: transparent;
            text-decoration: none;
        }
    </style>
    <title>EnterGate</title>
</head>
<body>
<h1>Hello owner! Nice to see you. Keep working! :D</h1>
<pre>
It matters not how strait the gate,
How charged with punishments the scroll,
I am the master of my fate:
I am the captain of my soul.</pre>

<!-- Added a link with button for translation-->
<p>
<hr>If you need help with translation, you can use a translator
<a href="https://translate.google.com" title="gOOgle translate" target="_blank">Google Translate<br></a>
</p>
<button type="button" onclick="alert('Hello world!')">Click Me!</button>
<button onclick="document.location='Test.php'">Test.php</button>
<br><img src="https://upload.wikimedia.org/wikipedia/commons/f/fc/William_Ernest_Henley_Vanity_Fair_1892-11-26.jpg" alt="William Ernest Henley Vanity Fair" usemap="#PoetMap" >
<map name="PoetMap">
    <area shape="rect" coords="2,2,242,404" alt="PoetMap" target="_blank" title="Wikipedia page of Invictus poem" href="https://en.wikipedia.org/wiki/Invictus">
</map>
<?php


?>
</body>
</html>