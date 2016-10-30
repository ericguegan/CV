<form action="mailer.php" method="post">

Vos nom et prénom:<br />
<input name="name" type="text" value="<?php echo $_GET['name'];?>"/>
<br />
<br />

Votre e-mail:<br />
<input name="from" type="text" value="<?php echo $_GET['from'];?>"/>
<br />
<br />

Sujet:<br />
<input name="subject" type="text" value="<?php echo $_GET['subject'];?>"/>
<br />
<br />

Anti-spam:<br />
<input name="verif_box" type="text"/>
<img src="verificationimage.php?<?php echo rand(0,9999);?>" alt="verification" width="50" height="24" align="absbottom" /><br />
<br />

<?php if(isset($_GET['wrong_code'])){?>
<div>Mauvais code</div><br /> 
<?php ;}?>

Message:<br />

<textarea name="message"><?php echo $_GET['message'];?></textarea>
<p><input name="Submit" type="submit" value="Envoyer"/></p>
<input type="hidden" name="good_url" value="http://webcreationagence.com/merci.html">
</form>
