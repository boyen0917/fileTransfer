<?php

$myfile = fopen("post.log", "w") or die("Unable to open file!");
fwrite($myfile, '{
   "ipa": {
     "version": "1.0.1.14",
     "datetime": "2015-08-07 14:7"
   },
   "plist": {
     "version": "",
     "datetime": "2014-05-08 14:40"
   },
   "apk": {
     "version": "11111",
     "datetime": "2015-09-11 15:0"
   }
 }');
fclose($myfile);

?>