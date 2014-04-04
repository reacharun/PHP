<?php

/* SerialGen - PHP
 * Generate a series of random alphanumeric serial numbers
 * @author Arun George, 2014
 */

// define serial attributes
 $numberOfChars = 4; # (XXXX)
 $lengthOfSerial = 3; # (XXXX - XXXX - XXXX)
 
 $mySerialNumber = generateSerials($numberOfChars, $lengthOfSerial);
 
 
echo "Your serial # is " . $mySerialNumber;





// create a series of random serial numbers

function generateSerials ($numberOfChars,$lengthOfSerial) {


$tokens = "0123456789ABCDEFGHIJKLMNOPQRSTUVWZY";
$serial = "";

for ($i = 0; $i < $lengthOfSerial; $i++) { 
    
    for ($j = 0; $j < $numberOfChars; $j++) { 
        
        $serial .= $tokens[rand(0,10)];
        
    }

// append dash
 if ($i < $lengthOfSerial - 1) { 
        $serial .= "-"; 
    }
    
}

//let's return the value
 return $serial;

}
//

