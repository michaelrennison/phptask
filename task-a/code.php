<?php

    /* 
     *  Function    : containsWord()
     * 
     *  Description : Checks whether a sentence contains a specific word, case insensitive.
     *  
     *  Parameters  : (string) word         - The word to find
     *                (string) sentence     - The sentence to search
     * 
     *  Return      : boolean
     * 
     *  Example     : See run.php for input/output examples
     *  
     *  Test        : Execute run.php to test your implementation.
     *                (In console, simply run the command 'php run.php')
     * 
     */
    
    
    function containsWord($word, $sentence){

        // make sentence lowercase
        $sentence = strtolower($sentence);
        // Make word lowercase
        $word = strtolower($word);

        // get the position of the string in the sentence
        $position = strpos($sentence, $word);
        // First check if the string word exists in the sentence
        if($position !== false) {
            // if the word is followed by an alphabetical character then it is part of a different word so
            // return false
            if (ctype_alpha($sentence[$position  + strlen($word)])) {
                return false;
            }

            // If the word isn't the first word of the sentence and is preceded by an alphabetical character
            // then it is part of a different word so return false
            if (($position > 0) && ctype_alpha($sentence[$position - 1])) {
                return false;
            }

            // otherwise return true
            return true;
        }

        // return false as default
        return false;
    }
