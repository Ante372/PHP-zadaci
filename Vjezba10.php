<!DOCTYPE html>
<html lang="en">
<body>
    <h1>Zadatak <code>str_word_count</code></h1>
    <form action="rijeci()" method="post">

    <p>U zadataku se traži da se ispiše koliko je riječi u rečenici. Koristite naredbu <code>str_word_count</code></p>
    <div>
        <label for="ulaz">Ulazni niz:</label>
        <input type="text" name="ulaz" size="80" value="">
    </div>
    <div>
        <input type="submit" value="ispiši broj riječi" action="rijeci()">
    </div>
<?php
function rijeci()
{
    echo str_word_count($_POST);
}

?>

</form><br />
</body>
</html>