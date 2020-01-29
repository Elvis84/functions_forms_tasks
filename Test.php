<?php
function array_to_tree(array $array, $parent_id = 0)
{
    $array = array_combine(array_column ($array, 'id'), array_values($array));

    foreach ($array as $k => &$v) {
        if (isset($array[$v['parent_id']])) {
            $array[$v['parent_id']]['children'][$k] = &$v;
        }
        unset($v);
    }

    return array_filter($array, function($v) use ($parent_id) {
        return $v['parent_id'] == $parent_id;
    });
}
