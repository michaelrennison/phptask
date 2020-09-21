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

    
    class Counter {

        /* @var $count integer */
        private $count;

        // construct the class and assign the count provided, if no count is provided then default to 0
        public function __construct($count = 0) {
            $this->count = $count;
        }

        /**
         * increment the count value by the integer provided, if no integer is provided default to 1
         * @param int $n
         */
        public function count($n = 1) {
            $this->count += $n;
        }

        /**
         * return the value of the count variable
         * @return int|mixed
         */
        public function get() {
            return $this->count;
        }

        /**
         * reset the count to 0
         */
        public function reset() {
            $this->count = 0;
        }
    }