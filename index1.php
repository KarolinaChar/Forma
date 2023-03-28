<?php

//11 UZDUOTIS
//echo $_POST['akrastine'];
?>
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=whatever">The Form</a>

<?php
$plotas = $_POST['akrastine'] * $_POST['bkrastine'];
echo "$plotas";
$DisplayForm = True;
if(isset($_POST['submit'])){
    $DisplayForm = False;
}
if ($DisplayForm) {
?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">STACIAKAMPIO PLOTAS
    <div>
        <label for="a">A KRASTINE</label>
        <input type="text" name="akrastine">
    </div>
    <div>
        <label for="a">B KRASTINE</label>
        <input type="text" name="bkrastine">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>
<?php
}