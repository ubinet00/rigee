<?php
session_start();
$cart = $_SESSION['cart'];
$kazu = $_SESSION['kazu'];
?>

<form method="post" action="shop_form_check">
name : <input type="text"><br>
email : <input type="text"><br>
postal1 : <input type="text"><br>
postal2 : <input type="text"><br>
address : <input type="text"><br>
tel : <input type="text"><br>
gender : <input type="radio" name="danjo" value="dan" checked>男性
<input type="radio" name="danjo" value="jo">女性<br>
birth : <select name="birth">
<option value="1910">1910年代</option>
<option value="1920">1920年代</option>
<option value="1930">1930年代</option>
<option value="1940">1940年代</option>
<option value="1950">1950年代</option>
<option value="1960">1960年代</option>
<option value="1970">1970年代</option>
<option value="1980" selected>1980年代</option>
<option value="1990">1990年代</option>
<option value="2000">2000年代</option>
<option value="2010">2010年代</option>
</select><br>
add or not : <input type="radio" name="add" value="no" checked>no
<input type="radio" name="add" value="yes">yes<br>
password : <input type="password"><br>
<input type="submit">
</form>