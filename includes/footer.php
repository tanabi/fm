<div id="footer">
Please send your message to <br>
	<a href="mailto:webmaster@furrymuck.com?subject=Website Feedback">The Webmaster</a><br>
All contents &copy;FurryMuck℠ 1990 - <?php echo date("Y"); ?><br>
Website designed by<br> <a href="http://perm.ly/laughingdragonstudios">Laughing Dragon Studios</a>
	<br>
<?php
$styleChoice = "";
if (isset($_COOKIE['sitestyle'])=Dark) {
    echo '<a href="default.php?choice=Light">Switch to the Light Side</a>';
} else if {
if (isset($_COOKIE['sitestyle'])=Light) {
    echo '<a href="default.php?choice=Dark">Switch to the Dark Side</a>';
} else {
	 exit();
?>
</div>