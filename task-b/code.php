<?php

    /* 
     *  Function    : generateSentence()
     * 
     *  Description : Generate a sentence listing out all items provided in an array.
     *  
     *  Parameters  : (string)               start         - The start of the sentence
     *                (array[string])        items         - The list of items
     *                (string/array[string]) append        - (optional) item types to be appended to each item
     * 
     *  Return      : string
     * 
     *  Example     : See run.php for input/output examples
     *  
     *  Test        : Execute run.php to test your implementation.
     *                (In console, simply run the command 'php run.php')
     * 
     */

    
    function generateSentence($start, $items, $append = null){
        // define the start of the sentence to return
        $sentence = "$start: ";
        // define a counter for the array
        $count = 0;
        // Get the length of the array
        $length = count($items);
        // loop through every entry in the items array
        foreach ($items as $key => $item) {
            // Check if there is an entry in the append array for this item
            if(isset($append)) {
                // Check if the append is an array
                if(is_array($append)) {
                    // if append is an array attach the corresponding entry
                    $addition = "$item $append[$key]";
                } else {
                    // if the append is not an array attach the full append string
                    $addition = "$item $append";
                }
            } else {
                $addition = $item;
            }
            // check if the item is the first or last element in the array
            switch ($count) {
                case 0:
                    // append the sentence with the start of the list
                    $sentence .= $addition;
                    break;
                case $length - 1:
                    // end the list
                    $sentence .= " and $addition.";
                    break;

                default:
                    // append the list using a comma
                    $sentence .= ", $addition";
                    break;
            }

            // increment the counter
            $count++;
        }

        // return the sentence;
        return $sentence;
    }