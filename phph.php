<?php
    chdir('information');
    $counter = Count(glob('*.txt')) + 1;
   $file = fopen($counter.".txt","w");

   echo fwrite($file,"First Name: ");
   echo fwrite($file, $_POST['fname']);
   echo fwrite($file, "\r\nLast Name: ");
   echo fwrite($file, $_POST['lname']);
   echo fwrite($file, "\r\nage ");
   echo fwrite($file, $_POST['age']);
   echo fwrite($file, "\r\nActivities: \r\n");
   echo fwrite($file, $_POST['matn']);
   fclose($file);
?>