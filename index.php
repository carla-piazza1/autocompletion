<?php
if (isset($_GET['search'])) {
    header('Location:recherche.php?siteSearch=');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" rel="stylesheet">
    <script src="script.js"></script>
</head>
       
<body>
    
    <img class="gif" src="https://c.tenor.com/c6Lq0OkRNXQAAAAi/pikachu-what.gif" alt="">
       
    
    <main>
        <img src="ttp.png" alt="trouve ton Pokémon">
        <form method='get' action='recherche.php'>
            <label for="siteSearch"></label>
            <section id='test'>
            <input type="search" id="siteSearch" name="siteSearch" autocomplete="off">
            <div></div>

<button class='btn'type="submit" name='search'>GO</button>
        </form>
   
    </main>

</body>

</html>