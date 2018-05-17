<?php
/* 
Given a sequence, return its equilibrium indices (if any). Assume that the
sequence may be very long. Feel free to google for hints, but give lots of
comments about what your thoughts are and your process for devising an algorithm
*/
function getEquilibriums($arr) {
	// Set right index to the length of the array and left index to 0
	$right = array_sum($arr);
    $left = 0;

    // Create Equilibriums array to store any equilibrium indices found
    $equilibriums = array();
    
    /*
		Loop through the array of values and compare the running sum to the 
		remaining sum to find equlibrium indices. We access the array's sub-value 
		via the main array itself, using a key to the element which is currently 
		being pointed to, using the array pointer. Move the right and left indexes 
		over as we loop through 
    */
    foreach($arr as $key => $value){
    	// Move the right indice over
        $right -= $value;
        /* Checks right and left to see if the key is an equilibrium indice,
        	add it to the equilibriums array if it is */
        if($left == $right) {
        	$equilibriums[] = $key;
        }
        // Move the left indice over
        $left += $value;
    }
    // Return any equilibrium indices that are found
    return $equilibriums;
}
// outputs both 3 and 6 as the Equilibrium indices
echo "Equilibrium Indices:\n";
foreach (getEquilibriums($arr) as $output) echo "$output, ";
?>


