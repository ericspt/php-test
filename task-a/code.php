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
     
    // I considered only comma, dot and spaces as delimiters for simplicity. 
    function containsWord($word, $sentence){
        // Regular expression: split by dots, commas and whitespaces. One or more. 
        // Also, consider the lowercase sentence
        $splitSentence = preg_split("/[\s,\.]+/", strtolower($sentence));
        // Go through each word that was split and compare it to the word we were given
        foreach($splitSentence as $splitWord)
        {
            if($splitWord == strtolower($word))
            {
                return true;
            }
        }
        return false;
    }
