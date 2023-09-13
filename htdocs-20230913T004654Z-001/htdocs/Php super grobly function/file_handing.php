

<?php
$file = 'extras/user.text';

if(file_exists($file)){
    echo readfile($file);
}
?>
