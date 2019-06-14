<!DOCTYPE html>
<html>
<body>
<h1>ITRW316 Exam Project 1 of 3</h1>
<form method="post">
<h3>Please enter your original word:</h3>
Old Word: <input type="text" name="old" value="<?php echo $oldWord;?>"> 
<h3>Please enter your new word:</h3>
New Word: <input type="text" name="new" value="<?php echo $newWord;?>">
<br><p></p>
<input type="submit" name="test" id="test" value="RUN" /><br/>
</form>
<form method="post">
    <input type="button" value="Home" class="homebutton" id="btnHome" onClick="document.location.href='/ExamThree.php'" />
</form>
</body>
</html> 

<?php

if(array_key_exists('test',$_POST))
{
    
    ReplaceWord();
}

function ReplaceWord()
{
    $oldString = $_POST["old"];
    $newString = $_POST["new"];

    $path_to_file = '/var/www/html/data.txt';
    $file_contents = file_get_contents($path_to_file);
    $file_contents = str_replace($oldString,$newString,$file_contents);
    file_put_contents($path_to_file,$file_contents,LOCK_EX);
}

function alert($msg) 
{
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

?>




































