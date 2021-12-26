<?php


namespace App\Helper;


use App\Models\FactorUser;
use App\Models\ProductGroup;
use App\Models\Products;
use App\User;


use Carbon\Carbon;
use Morilog\Jalali\Jalalian;
use Symfony\Component\Console\Input\Input;

class Helper
{
    public static function GetGroupName($groupid)
    {
        $Group = ProductGroup::where('id', $groupid)->first();
        if ($Group) {
            return $Group->title;
        } else {
            return 'عنوان گروه بندی یافت نشد';

        }
    }

    public static function getInfoUser($userid)
    {
        $user = User::where('id', $userid)->first();

        if ($user) {
            return $user->toArray();
        } else {
            return null;
        }

    }

    public static function TotalUserCompany()
    {
        $userInfo = User::where('role_id', '!=', 1)->get();
        if (count($userInfo) > 0) {
            return count($userInfo);
        } else {
            return 0;
        }
    }

    public static function TotalProductCompany()
    {
        $userInfo = Products::all();
        if (count($userInfo) > 0) {
            return count($userInfo);
        } else {
            return 0;
        }
    }

    public static function TotalFactorCompany()
    {
        $userInfo = FactorUser::get();
        if (count($userInfo) > 0) {
            return count($userInfo);
        } else {
            return 0;
        }
    }

    public static function TotalFactorProccsing()
    {
        $userInfo = FactorUser::where('factor_status','processStore')->get();
        if (count($userInfo) > 0) {
            return count($userInfo);
        } else {
            return 0;
        }
    }

    public static function GenerateTrackingCode($length)
    {
        $random = "";
        srand((double)microtime() * 1000000);

        $data = "123456123456789071234567890890";
        // $data .= "aBCdefghijklmn123opq45rs67tuv89wxyz"; // if you need alphabatic also

        for ($i = 0; $i < $length; $i++) {
            $random .= substr($data, (rand() % (strlen($data))), 1);
        }

        return $random;
    }

    public static function getInfoProduct($prodId)
    {
        $product = Products::where('id', $prodId)->first();

        if ($product) {
            return $product->toArray();
        } else {
            return null;
        }

    }

    public static function getBrowser()
    {
        $u_agent = $_SERVER['HTTP_USER_AGENT'];
        $bname = 'Unknown';
        $platform = 'Unknown';
        $version = "";
        // First get the platform?
        if (preg_match('/macintosh|mac os x/i', $u_agent)) {
            $platform = 'mac';
        } elseif (preg_match('/windows|win32/i', $u_agent)) {
            $platform = 'windows';
        } elseif (preg_match('/iphone|IPhone/i', $u_agent)) {
            $platform = 'IPhone Web';
        } elseif (preg_match('/android|Android/i', $u_agent)) {
            $platform = 'Android Web';
        } else if (preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $u_agent)) {
            $platform = 'Mobile';
        } else if (preg_match('/linux/i', $u_agent)) {
            $platform = 'linux';
        }
        // Next get the name of the useragent yes seperately and for good reason
        if (preg_match('/MSIE/i', $u_agent) && !preg_match('/Opera/i', $u_agent)) {
            $bname = 'Internet Explorer';
            $ub = "MSIE";
        } elseif (preg_match('/Firefox/i', $u_agent)) {
            $bname = 'Mozilla Firefox';
            $ub = "Firefox";
        } elseif (preg_match('/Chrome/i', $u_agent)) {
            $bname = 'Google Chrome';
            $ub = "Chrome";
        } elseif (preg_match('/Safari/i', $u_agent)) {
            $bname = 'Apple Safari';
            $ub = "Safari";
        } elseif (preg_match('/Opera/i', $u_agent)) {
            $bname = 'Opera';
            $ub = "Opera";
        } elseif (preg_match('/Netscape/i', $u_agent)) {
            $bname = 'Netscape';
            $ub = "Netscape";
        }
        // finally get the correct version number
        $known = array('Version', $ub, 'other');
        $pattern = '#(?<browser>' . join('|', $known) . ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
        if (!preg_match_all($pattern, $u_agent, $matches)) {
            // we have no matching number just continue
        }
        // see how many we have
        $i = count($matches['browser']);
        if ($i != 1) {
            //we will have two since we are not using 'other' argument yet
            //see if version is before or after the name
            if (strripos($u_agent, "Version") < strripos($u_agent, $ub)) {
                $version = $matches['version'][0];
            } else {
                $version = $matches['version'][1];
            }
        } else {
            $version = $matches['version'][0];
        }
        // check if we have a number
        if ($version == null || $version == "") {
            $version = "?";
        }
        return array(
            'userAgent' => $u_agent,
            'name' => $bname,
            'version' => $version,
            'platform' => $platform,
            'pattern' => $pattern,
            'ip_address' => self::get_ip_address(),
        );
    }

    public static function get_ip_address()
    {
        if (!empty($_SERVER['HTTP_X_FORWARDED']) && self::validate_ip($_SERVER['HTTP_X_FORWARDED']))
            return $_SERVER['HTTP_X_FORWARDED'];
        if (!empty($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']) && self::validate_ip($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']))
            return $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
        if (!empty($_SERVER['HTTP_FORWARDED_FOR']) && self::validate_ip($_SERVER['HTTP_FORWARDED_FOR']))
            return $_SERVER['HTTP_FORWARDED_FOR'];
        if (!empty($_SERVER['HTTP_FORWARDED']) && self::validate_ip($_SERVER['HTTP_FORWARDED']))
            return $_SERVER['HTTP_FORWARDED'];
        return $_SERVER['REMOTE_ADDR'];
    }

    public static function validate_ip($ip)
    {
        if (strtolower($ip) === 'unknown')
            return false;
        $ip = ip2long($ip);
        if ($ip !== false && $ip !== -1) {
            $ip = sprintf('%u', $ip);
            if ($ip >= 0 && $ip <= 50331647)
                return false;
            if ($ip >= 167772160 && $ip <= 184549375)
                return false;
            if ($ip >= 2130706432 && $ip <= 2147483647)
                return false;
            if ($ip >= 2851995648 && $ip <= 2852061183)
                return false;
            if ($ip >= 2886729728 && $ip <= 2887778303)
                return false;
            if ($ip >= 3221225984 && $ip <= 3221226239)
                return false;
            if ($ip >= 3232235520 && $ip <= 3232301055)
                return false;
            if ($ip >= 4294967040)
                return false;
        }
        return true;
    }

    public static function verifyReCaptcha($recaptchaCode)
    {
        $postdata = http_build_query(["secret" => "6Leq9TUdAAAAAI7xX9coGA0oLrEuZW5ieSqWpyuF", "response" => $recaptchaCode]);
        $opts = ['http' =>
            [
                'method' => 'POST',
                'header' => 'Content-type: application/x-www-form-urlencoded',
                'content' => $postdata
            ]
        ];
        $context = stream_context_create($opts);
        $result = file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context);
        $check = json_decode($result);
        return $check->success;
    }

    public static function SendEmail($confirmation_code, $email, $token)
    {
        //  $email="S.Ganji73@Gmail.com";
        $url = "https://api.sorenexservice.net/api/v1/EmailWebservice/$confirmation_code/$email/$token";

        $ch = curl_init();
        $headers = array(
            'Accept: application/json',
            'Content-Type: application/json',

        );
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $body = '{}';

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        // Timeout in seconds
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);

        // dd($ch);
        $authToken = curl_exec($ch);

        $result = json_decode($authToken);

        return $result;

    }

    public static function SendTwoStep($confirmation_code, $email)
    {
        //  $email="S.Ganji73@Gmail.com";
        $url = "https://api.sorenexservice.net/api/v1/SendTwoStep/$confirmation_code/$email";

        $ch = curl_init();
        $headers = array(
            'Accept: application/json',
            'Content-Type: application/json',

        );
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $body = '{}';

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        // Timeout in seconds
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);

        // dd($ch);
        $authToken = curl_exec($ch);

        $result = json_decode($authToken);

        return $result;

    }

    public static function SendForgot($confirmation_code, $email, $token)
    {
        //  $email="S.Ganji73@Gmail.com";
        $url = "https://api.sorenexservice.net/api/v1/SendForgot/$confirmation_code/$email/$token";

        $ch = curl_init();
        $headers = array(
            'Accept: application/json',
            'Content-Type: application/json',

        );
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $body = '{}';

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        // Timeout in seconds
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);

        // dd($ch);
        $authToken = curl_exec($ch);

        $result = json_decode($authToken);

        return $result;

    }

    public static function numberFormatPrecision($number, $precision = 2, $separator = '.')
    {
        $numberParts = explode($separator, $number);
        $response = $numberParts[0];
        if (count($numberParts) > 1 && $precision > 0) {
            $response .= $separator;
            $response .= substr($numberParts[1], 0, $precision);
        }
        return $response;
    }

    public static function WithdrawTether($confirmation_code, $email)
    {
        //  $email="S.Ganji73@Gmail.com";
        $url = "https://api.sorenexservice.net/api/v1/WithdrawTether/$confirmation_code/$email";

        $ch = curl_init();
        $headers = array(
            'Accept: application/json',
            'Content-Type: application/json',

        );
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $body = '{}';

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        // Timeout in seconds
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);

        // dd($ch);
        $authToken = curl_exec($ch);

        $result = json_decode($authToken);

        return $result;

    }

    public static function SendMessage(array $parameters, $template_id, $number)
    {
        try {
            date_default_timezone_set("Asia/Tehran");

            // your sms.ir panel configuration
            $APIKey = "b9acb79cd2b67675df52b79c";
            $SecretKey = "tetherbank1400!@#%";
            $APIURL = "https://ws.sms.ir/";

            // message data
            /*  $data = array(
                  "ParameterArray" => array(
                      array(
                          "Parameter" => "FirstVariable",
                          "ParameterValue" => "xxxx"
                      ),

                  ),
                  "Mobile" => "091xxxxxxxx",
                  "TemplateId" => "26"
              );*/

            $params = [];
            foreach ($parameters as $key => $value) {
                $params[] = ['Parameter' => $key, 'ParameterValue' => $value];
            }
            $body = ['ParameterArray' => $params, 'TemplateId' => $template_id, 'Mobile' => $number];
            $SmsIR_UltraFastSend = new SmsIR_UltraFastSend($APIKey, $SecretKey, $APIURL);

            $UltraFastSend = $SmsIR_UltraFastSend->ultraFastSend($body);
            // var_dump($UltraFastSend);

        } catch (Exeption $e) {
            echo 'Error UltraFastSend : ' . $e->getMessage();

        }
    }


    public static function NotiAdmin($type = '', $url = '', $from, $title = '', $message = '')
    {

        if (isset($type) && isset($url) && isset($url)) {

            $newNoti = new NotiAdmin();
            $newNoti->notiyType = $type;
            $newNoti->url = $url;
            $newNoti->from_user = $from;
            $newNoti->to_admin = 1;
            $newNoti->title = $title;
            $newNoti->message = $message;
            $newNoti->seen = 0;
            $newNoti->datereg = Jalalian::fromCarbon(Carbon::now())->format(' %A  %d %B %Y | H:i:s ');

            if ($newNoti->save()) {
                return true;
            } else {

                return false;
            }
        }

    }

    public static function getBalanceRial($userId)
    {

        $userinfo = User::where('id', $userId)->first();
        if ($userinfo) {
            $walletInfo = walletUser::where('userId', $userinfo->id)->where('type_wallet', 'rial')->first();
            if ($walletInfo) {
                return $walletInfo->balance;
            } else {
                return 0;
            }
        }
    }

    public static function getTotalReferal($userId)
    {
        $user = User::where('referral_id', $userId)->get();
        if (count($user) > 0) {
            return count($user);
        } else {
            return 0;
        }

    }

    public static function getCodeMeli($userId)
    {
        $user = AuthDoc::where('userId', $userId)->first();
        if ($user) {
            return $user;
        } else {
            return null;
        }

    }

    public static function SendNotification($notiType, $from, $to, $title, $message)
    {


        $notic = new notifications();
        $notic->from_type = 'Web';
        $notic->notiyType = $notiType;
        $notic->url = 'Message';
        $notic->datetime = time();
        $notic->from_user = $from;
        $notic->to_user = $to;
        $notic->title = $title;
        $notic->Message = $message;
        $notic->email = 1;
        $notic->seen = 0;
        $notic->datereg = Jalalian::fromCarbon(Carbon::now())->format(' %A  %d %B %Y | H:i:s');

        if ($notic->save()) {

            return true;
        } else {
            return false;
        }

    }

    public static function getBalanceTether($userId)
    {

        $userinfo = User::where('id', $userId)->first();
        if ($userinfo) {
            $walletInfo = walletUser::where('userId', $userinfo->id)->where('type_wallet', 'tether')->first();
            if ($walletInfo) {
                return $walletInfo->balance;
            } else {
                return 0;
            }
        }
    }
}
