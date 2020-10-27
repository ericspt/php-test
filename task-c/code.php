<?php 
 
    /* 
     *  Class       : Counter
     * 
     *  Description : Simple class allowing you to count by X, get the count value, and reset the value.
     * 
     *  Parameters  : (int) count           - (optional) The starting count value [default: 0]
     *  
     *  Variables   : (private:int) count   - The count value
     * 
     *  Functions
     * 
     *      Function        : (public) count()
     * 
     *          Description : Increment the count value
     *              
     *          Parameters  : (int) n       - (optional) The value to increase the count by [default: 1]
     * 
     *          Return      : NULL
     * 
     *      Function        : (public) get()
     * 
     *          Description : Return the current count value
     *  
     *          Parameters  : [NONE]
     * 
     *          Return      : int
     * 
     *      Function        : (public) reset()
     * 
     *          Description : Reset the count value to 0
     *  
     *          Parameters  : [NONE]
     * 
     *          Return      : NULL
     * 
     *  Example     : See run.php for input/output examples
     *  
     *  Test        : Execute run.php to test your implementation.
     * 
     */

    
    class Counter 
    {
        private $count = 0;
        /**
         * Counter constructor: can take an argument to initialise the count
         */
        function __construct($count = 0)
        {
            $this->count = $count;
        }
        /**
         * Function:   Increments the count by 1 or a given value given as parameter
         * Parameters: The value to increase the count with
         */
        public function count($n = 1)
        {
            $this->count += $n;
        }
        /**
         * Function: Public function which gets the count
         * Return:   The count class variable
         */
        public function get()
        {
            return $this->count;
        }
        /**
         * Function: Public function which resets the counter to 0
         */
        public function reset()
        {
            $this->count = 0;
        }
    }