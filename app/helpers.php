<?php

use \Illuminate\Support\Facades\Request;

if (! function_exists('active_link')) {
    function active_link(string $name, $is_open = 'close'): string {
        if (Request::is($name)) {
            if ($is_open == 'open') {
                return 'active open';
            } else {
                return 'active';
            }
        } else {
            return '';
        }
//        return Request::is($name) ? $active : '';
    }
}
