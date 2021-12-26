<?php

namespace App\Rules;

use App\Helpers\Helper;
use App\User;
use Illuminate\Contracts\Validation\Rule;

class Referal implements Rule
{

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {

        if(!empty($value))
        {
            $userCodeCheckExist = User::where('referCode', $value)->first();

            if ($userCodeCheckExist == null) {
                return false;
            } else {
                return true;
            }
        }else{
            return true;
        }



        /*  if (!empty($value)) {
              $w = Helper::CheckReferal($value);
              dd($w);
          } else {
              return 0;
          }*/


    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {

         return 'کد دعوت اشتباه است';
        //return $this->message();

    }
}
