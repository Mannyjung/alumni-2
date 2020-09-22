
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php echo form_open_multipart('home/addpagina2'); ?>
<label for="titolo">Titolo:</label>
<input type="text" size="20" id="titolo" name="titolo"/>
<br/>
<label for="testo">Testo</label><br/>
<textarea name="testo" cols="50" rows="10"></textarea>
<br/>
<label for="file">File:</label>
<input type="file" name="file" />
<br />
<input type="submit" value="Aggiungi"/>
</form>
<?php
header("Content-type: ".$file['type']);
echo $file;
?>
</body>
</html>