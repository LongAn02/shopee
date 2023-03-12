<?php

namespace App\Helpers\Common;

class Common
{
    public static function responseToast($route, $nameFun, $result)
    {
        switch ($nameFun) {
            case 'store':
                $msg = $result ? CREATE_SUCCESS : CREATE_FAIL;
                break;
            case 'update':
                $msg = $result ? UPDATE_SUCCESS : UPDATE_FAIL;
                break;
            case 'delete':
                $msg = $result ? DELETE_SUCCESS : DELETE_FAIL;
                break;
            default:
                $msg = 'Đã gặp sự cố vui lòng thao tác lại';
                break;
        }

        return to_route($route)->with('result', [
            'bool' => $result,
            'msg' => $msg
        ]);
    }
}
