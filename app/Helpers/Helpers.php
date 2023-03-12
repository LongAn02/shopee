<?php

if (!function_exists('getCategory')) {
    function getCategory($categories, $html = '', $count = 1) {
        foreach ($categories as $category) {
            if($category->children->count() > 0) {
                $html .= '<option class="ms-3">'.$category->name.'</option>';
                $html = getCategory($category->children, $html, $count);
            } else {
                $html .= "<option>$category->name</option>";
            }
        }

        return $html;
    }
}
