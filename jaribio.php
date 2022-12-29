<?php
echo "<h1>PHP Trials</h1>";

// $pass = '123456';
// echo "Password: ".$pass."</br>";
// $pass2 = 'Hakuna Matata';

// $pas_hash = password_hash($pass, PASSWORD_DEFAULT);
// echo $pas_hash;
// $verify = password_verify($pass, $pas_hash);
// echo $verify;


// $passHash = password_hash($pass, PASSWORD_DEFAULT);
// echo "Password Hash: ".$passHash;

// echo "</br></br></br></br>";

// $verify = password_needs_rehash($pass, PASSWORD_DEFAULT);
// echo $verify;

// $pas_ver = password_verify($pass, $passHash);
// if($pas_ver){
//     echo "True";
// }
// else{
//     echo "false";
// }

// $input = "SmackFactory"; 
// $encrypted = encryptIt( $input ); 
// $decrypted = decryptIt( $encrypted ); 
// echo $encrypted . '<br />' . $decrypted; 

// function encryptIt( $q ) { 
//     $cryptKey = 'qJB0rGtIn5UB1xG03efyCp'; 
//     $qEncoded = base64_encode(mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) ); 
//     return( $qEncoded ); 
// } 
// function decryptIt( $q ) { 
//     $cryptKey = 'qJB0rGtIn5UB1xG03efyCp'; 
//     $qDecoded = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0"); 
//     return( $qDecoded ); 
// }

// echo time();

$file = 'gdjjsgfdg.jpg';
$end = end(explode('.', $file));
$first = current(explode('.',$file));
echo $end.'</br>';
echo $first;
$unique = time();
echo date('Y-m-d').'_'.date('h:i:s').'_'.time();