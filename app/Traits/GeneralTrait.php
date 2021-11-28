<?php
namespace App\Traits;

trait GeneralTrait
{

//    get current language
    public function getCurrentLang()
    {
        return app()->getLocale();
    }

    public function returnErrorMsg($errNum, $msg)
    {
        return response()->json([
           'status'=> false,
           'errNum'=> $errNum,
           'msg'=>$msg
        ]);
    }

    public function returnSuccessMsg($errNum = "s000", $msg = "")
    {
        return response()->json([
            'status'=> true,
            'errNum'=> $errNum,
            'msg'=>$msg
        ]);
    }

    public function returnData($key, $value, $msg)
    {
        return response()->json([
            'status'=> true,
            'msg'=>$msg,
             $key => $value
        ]);
    }

}
