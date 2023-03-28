
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=whatever">The Name Form</a>

<?php
//11 UZDUOTIS
$DisplayForm = True;
if(isset($_POST['submit'])){
    $DisplayForm = False;
}
if ($DisplayForm) {
?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">Vardas ir pavarde
    <div>
        <label for="a">Name</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="a">Surname</label>
        <input type="text" name="surname">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>
<?php
}
$name = $_POST['name'];
$surname = $_POST['surname'];

echo "$name ";
echo $surname;