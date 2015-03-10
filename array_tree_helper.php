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
 * array_tree Helper
 *
 * Outputs the given array as a nested array
 */
if ( ! function_exists('array_tree'))
{

  function array_tree($arr) {

    $new = array();
    foreach ($arr as $a){
      $new[(int)$a['parent']][] = $a;
    }

    function create_tree(&$list, $parent){
      $tree = array();
      foreach ($parent as $k => $l){
        if(isset($list[(int)$l['id']])){
          $l['children'] = create_tree($list, $list[(int)$l['id']]);
        }
        $tree[] = $l;
      }
      return $tree;
    }

    return create_tree($new, $new[0]);
  }

}