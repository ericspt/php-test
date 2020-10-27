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

    
    function generateSentence($startString, $list, $optionals = NULL){
        $finalList = ""; // Initialise the final list
        $finalList .= $startString . ": "; // Append the start string
        $isString = false;
        $optionalsSet = false;
        if (isset($optionals)) // If the optional parameter was given
        {
            $optionalsSet = true;
            if (!is_array($optionals)) // If the optional parameter is an array and not a string
            {
                $isString = true;
            }
        }
        $listCount = count($list);
        // Go through all the elements but the last one and the last but one and append them to the list
        for ($i = 0; $i < $listCount - 2; $i++)
        {
            $finalList .= $list[$i];
            // Depending on whether the optional parameter was set, there will be different outputs
            if ($optionalsSet)
            {
                $finalList .= " ";
                // Depending on whether the optional parameter is a string or not, there will be different outputs
                if (!$isString)
                {
                    $finalList .=  $optionals[$i];
                }
                else
                {
                    $finalList .= $optionals;
                }
            }
            $finalList .= ", ";
        }
        // Get the last but one element index
        $lbo = $listCount - 2;
        // Get the last element index
        $last = $listCount - 1;
        // Rinse and repeat the for loop, but for these special cases
        if ($lbo >= 0)
        {
            $finalList .= $list[$lbo] . " ";
            if ($optionalsSet)
            {
                if (!$isString)
                {
                    $finalList .= $optionals[$lbo] . " and " . $list[$last] . " " . $optionals[$last];
                }
                else 
                {
                    $finalList .= $optionals . " and " . $list[$last] . " " . $optionals;
                }
            }
            else
            {
                $finalList .= "and " . $list[$last];
            }
            $finalList .= ".";
        }
        else if ($last >= 0)
        {
            $finalList .= $list[$last];
            if ($optionalsSet)
            {
                if (!$isString)
                {
                    $finalList .= " " . $optionals[$last] . ".";
                }
                else 
                {
                    $finalList .= " " . $optionals . ".";
                }
            }
            else 
            {
                $finalList .= ".";
            }
        }
        // Return the final list
        return $finalList;
    }