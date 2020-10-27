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
        $finalList = "";
        $finalList .= $startString . ": ";
        $isString = false;
        $optionalsSet = false;
        if (isset($optionals))
        {
            $optionalsSet = true;
            if (!is_array($optionals))
            {
                $isString = true;
            }
        }
        $listCount = count($list);
        for ($i = 0; $i < $listCount - 2; $i++)
        {
            $finalList .= $list[$i];
            if ($optionalsSet)
            {
                $finalList .= " ";
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
        $lbo = $listCount - 2;
        $last = $listCount - 1;
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
        return $finalList;
    }