<!-- md5();
Description: The md5() function in PHP generates a 32-character hexadecimal hash from a given string using the MD5 algorithm. It's commonly used for hashing data, like passwords, but it's not considered secure for modern applications due to vulnerabilities.  -->

<?php 
$password = "sazid18";
echo $password . "<br>";
// if i wanna store the password in binary;
echo "This is the binary value: " .md5($password, true). "<br>"; // syntax: md5($str, RAW)
// if i wanna store the password in hex mode;
echo "This is the hex value: " .md5($password); // by default the value is in false mode;

// sha1 is the same function as md5 function!!
?>