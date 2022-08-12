<?php

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {

    /**
     * @param TreeNode $root
     * @return Integer
     */
    function sumNumbers($root, $current = 0) {
        if($root == null){
            return 0;
        }

        $current = $current * 10 + $root->val;

        if(!$root->left && !$root->right){
            return $current;
        }

        return $this->sumNumbers($root->left, $current) + $this->sumNumbers($root->right, $current);
    }
}
