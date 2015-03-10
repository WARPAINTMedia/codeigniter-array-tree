CodeIgniter Array Tree Helper
=============================

A CodeIgniter helper that outputs the given array as a nested array. This is useful when creating page trees, or passing in a flat array that has relationships in itself.

### Installation

Save this script to `application/helpers/` or wherever you are loading helpers. If this is for PyroCMS, you would put this in `pyrocms/addons/shared_addons/helpers/`

### Using the Helper

This can be in your *controller*, *model*, or *view* (not preferable).

```php
$this->load->helper('array_tree');
```

If you use this helper in a lot of locations you can have it load automatically by adding it to the autoload configuration file.

```php
$autoload['helper'] = array('array_tree');
```

### Usage

Input Code

```php
$arr = array(
  array('id'=>100, 'parentid'=>0, 'name'=>'a'),
  array('id'=>101, 'parentid'=>100, 'name'=>'a'),
  array('id'=>102, 'parentid'=>101, 'name'=>'a'),
  array('id'=>103, 'parentid'=>101, 'name'=>'a'),
);

$results = array_tree($arr, 'id', 'parentid', 'children');
print_r($results);
```

Output Results

```
Array
(
    [0] => Array
        (
            [id] => 100
            [parentid] => 0
            [name] => a
            [children] => Array
                (
                    [0] => Array
                        (
                            [id] => 101
                            [parentid] => 100
                            [name] => a
                            [children] => Array
                                (
                                    [0] => Array
                                        (
                                            [id] => 102
                                            [parentid] => 101
                                            [name] => a
                                        )
                                    [1] => Array
                                        (
                                            [id] => 103
                                            [parentid] => 101
                                            [name] => a
                                        )
                                )
                        )
                )
        )
)
```