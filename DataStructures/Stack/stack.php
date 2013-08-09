<?php

/**
 * Stack: A LIFO stack class
 */

class Stack{
    protected $limit;
    protected $counter;
    protected $stack;

    /**
     * Set up the stack, limit and counter
     */
    public function __construct($limit = 100){
        # Initialize the stack
        $this->stack = array();

        # Limit the maximum size of the stack
        $this->limit = $limit;

        # Initialize the counter to zero
        $this->counter = 0;
    }

    /**
     * Get the topmost item in the stack
     * @throws RuntimeException if stack is empty
     */
    public function Top(){
        if($this->isEmpty()){
            throw new RuntimeException("Stack is empty - no top.");
        } else {
            return $this->stack[$this->counter];
        }
    }

    /**
     * Get the topmost item in the stack and remove it
     * @throws RuntimeException if stack is empty
     */
    public function Pop(){
        if($this->isEmpty()){
            throw new RuntimeException("Cannot pop empty stack.");
        } else {
            $pop = $this->stack[$this->counter];
            unset($this->stack[$this->counter]);
            $this->__decrement();
            return $pop;
        }
    }

    /**
     * Push an item onto the top of the stack
     */
    public function Push($item){
        if($this->counter < $this->limit){
            $this->__increment();
            $this->stack[$this->counter] = $item;
        } else {
            throw new RuntimeException("Cannot push past limit.");
        }
    }

    /**
     * Get the limit of the stack
     * @return int
     */
    public function Size(){
        return $this->limit;
    }

    /**
     * Get the current size of the stack
     * @return int
     */
    public function Counter(){
        return $this->counter;
    }

    /**
     * Is stack empty?
     * @return bool
     */
    public function isEmpty(){
        return empty($this->stack);
    }

    /**
     * Lower the counter by one
     */
    private function __decrement(){
        if($this->counter >= 0){
            $this->counter = $this->counter - 1;
        } else {
            throw new RuntimeException("Cannot decrement past zero.");
        }
    }

    /**
     * Increase the counter by one
     */
    private function __increment(){
        if($this->counter <= $this->limit){
            $this->counter = $this->counter + 1;
        } else {
            throw new RuntimeException("Cannot increment past limit.");
        }
    }
}