<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * WARPAINT Media CodeIgniter Array Tree Helpers
 *
 * @author      WARPAINT Media Inc <hello@warpaintmedia.ca>
 * @copyright   Copyright (c) 2015 WARPAINT Media
 * @license     The MIT License (MIT)
 * @version     1.0.0
 * @link        https://github.com/WARPAINTMedia/codeigniter-array-tree
 * @package     WARPAINTMedia\Helpers
 * @original    http://stackoverflow.com/questions/4196157/create-array-tree-from-array-list?answertab=votes#tab-top
 */

/**
 * Take a flat array and return a nested array based on the keys set
 * @param  array   $arr           input array
 * @param  string  $main_index    key to compare
 * @param  string  $parent_index  parent key
 * @param  string  $child_index   key to assign to the children array
 * @return array                  nested array
 */
if ( ! function_exists('array_tree'))
{

  function array_tree($arr, $main_index, $parent_index, $child_index) {

    $new = array();
    foreach ($arr as $a){
      $new[$a[$parent_index]][] = $a;
    }

    // we create a closure in order to be recursive
    function create_tree(&$list, $parent, $i, $c) {
      $tree = array();
      foreach ($parent as $k => $l){
        if(isset($list[$l[$i]])){
          $l[$c] = create_tree($list, $list[$l[$i]], $i, $c);
        }
        $tree[] = $l;
      }
      return $tree;
    }

    return create_tree($new, $new[0], $main_index, $child_index);
  }

}