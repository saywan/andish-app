<?php


namespace App\Helper;


use App\Models\FactorUser;
use App\Models\ProductGroup;
use App\Models\Products;
use App\Models\UserRole;
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

    public static function getUserInfoRole($roleId)
    {

        $role = UserRole::where('id',$roleId)->first();

        if ($role) {
            if ($role->title == 'accountant') {
                echo "<span class='badge badge-outline-success font-14'>حسابدار</span>";
            } elseif ($role->title == 'Admin') {

                echo "<span class='badge badge-outline-success font-14'>مدیریت</span>";
            } elseif ($role->title == 'buyer') {

                echo "<span class='badge badge-outline-danger font-14'>خریدار</span>";
            } elseif ($role->title == 'operator') {

                echo "<span class='badge badge-outline-success font-14'>اپراتور</span>";
            } elseif ($role->title == 'seller') {

                echo "<span class='badge badge-outline-success font-14'>فروشنده</span>";
            } elseif ($role->title == 'User') {

                echo "<span class='badge badge-outline-warning font-14'>کاربر عادی</span>";
            }
        }
    }

    public static function url_slug($str, $options = array())
    {
        // Make sure string is in UTF-8 and strip invalid UTF-8 characters
        $str = mb_convert_encoding((string)$str, 'UTF-8', mb_list_encodings());
        $defaults = array(
            'delimiter' => '-',
            'limit' => null,
            'lowercase' => true,
            'replacements' => array(),
            'transliterate' => false
        );
        // Merge options
        $options = array_merge($defaults, $options);
        $char_map = array(
            // Latin
            'À' => 'A',
            'Á' => 'A',
            'Â' => 'A',
            'Ã' => 'A',
            'Ä' => 'A',
            'Å' => 'A',
            'Æ' => 'AE',
            'Ç' => 'C',
            'È' => 'E',
            'É' => 'E',
            'Ê' => 'E',
            'Ë' => 'E',
            'Ì' => 'I',
            'Í' => 'I',
            'Î' => 'I',
            'Ï' => 'I',
            'Ð' => 'D',
            'Ñ' => 'N',
            'Ò' => 'O',
            'Ó' => 'O',
            'Ô' => 'O',
            'Õ' => 'O',
            'Ö' => 'O',
            'Ő' => 'O',
            'Ø' => 'O',
            'Ù' => 'U',
            'Ú' => 'U',
            'Û' => 'U',
            'Ü' => 'U',
            'Ű' => 'U',
            'Ý' => 'Y',
            'Þ' => 'TH',
            'ß' => 'ss',
            'à' => 'a',
            'á' => 'a',
            'â' => 'a',
            'ã' => 'a',
            'ä' => 'a',
            'å' => 'a',
            'æ' => 'ae',
            'ç' => 'c',
            'è' => 'e',
            'é' => 'e',
            'ê' => 'e',
            'ë' => 'e',
            'ì' => 'i',
            'í' => 'i',
            'î' => 'i',
            'ï' => 'i',
            'ð' => 'd',
            'ñ' => 'n',
            'ò' => 'o',
            'ó' => 'o',
            'ô' => 'o',
            'õ' => 'o',
            'ö' => 'o',
            'ő' => 'o',
            'ø' => 'o',
            'ù' => 'u',
            'ú' => 'u',
            'û' => 'u',
            'ü' => 'u',
            'ű' => 'u',
            'ý' => 'y',
            'þ' => 'th',
            'ÿ' => 'y',
            // Latin symbols
            '©' => '(c)',
            // Greek
            'Α' => 'A',
            'Β' => 'B',
            'Γ' => 'G',
            'Δ' => 'D',
            'Ε' => 'E',
            'Ζ' => 'Z',
            'Η' => 'H',
            'Θ' => '8',
            'Ι' => 'I',
            'Κ' => 'K',
            'Λ' => 'L',
            'Μ' => 'M',
            'Ν' => 'N',
            'Ξ' => '3',
            'Ο' => 'O',
            'Π' => 'P',
            'Ρ' => 'R',
            'Σ' => 'S',
            'Τ' => 'T',
            'Υ' => 'Y',
            'Φ' => 'F',
            'Χ' => 'X',
            'Ψ' => 'PS',
            'Ω' => 'W',
            'Ά' => 'A',
            'Έ' => 'E',
            'Ί' => 'I',
            'Ό' => 'O',
            'Ύ' => 'Y',
            'Ή' => 'H',
            'Ώ' => 'W',
            'Ϊ' => 'I',
            'Ϋ' => 'Y',
            'α' => 'a',
            'β' => 'b',
            'γ' => 'g',
            'δ' => 'd',
            'ε' => 'e',
            'ζ' => 'z',
            'η' => 'h',
            'θ' => '8',
            'ι' => 'i',
            'κ' => 'k',
            'λ' => 'l',
            'μ' => 'm',
            'ν' => 'n',
            'ξ' => '3',
            'ο' => 'o',
            'π' => 'p',
            'ρ' => 'r',
            'σ' => 's',
            'τ' => 't',
            'υ' => 'y',
            'φ' => 'f',
            'χ' => 'x',
            'ψ' => 'ps',
            'ω' => 'w',
            'ά' => 'a',
            'έ' => 'e',
            'ί' => 'i',
            'ό' => 'o',
            'ύ' => 'y',
            'ή' => 'h',
            'ώ' => 'w',
            'ς' => 's',
            'ϊ' => 'i',
            'ΰ' => 'y',
            'ϋ' => 'y',
            'ΐ' => 'i',
            // Turkish
            'Ş' => 'S',
            'İ' => 'I',
            'Ç' => 'C',
            'Ü' => 'U',
            'Ö' => 'O',
            'Ğ' => 'G',
            'ş' => 's',
            'ı' => 'i',
            'ç' => 'c',
            'ü' => 'u',
            'ö' => 'o',
            'ğ' => 'g',
            // Russian
            'А' => 'A',
            'Б' => 'B',
            'В' => 'V',
            'Г' => 'G',
            'Д' => 'D',
            'Е' => 'E',
            'Ё' => 'Yo',
            'Ж' => 'Zh',
            'З' => 'Z',
            'И' => 'I',
            'Й' => 'J',
            'К' => 'K',
            'Л' => 'L',
            'М' => 'M',
            'Н' => 'N',
            'О' => 'O',
            'П' => 'P',
            'Р' => 'R',
            'С' => 'S',
            'Т' => 'T',
            'У' => 'U',
            'Ф' => 'F',
            'Х' => 'H',
            'Ц' => 'C',
            'Ч' => 'Ch',
            'Ш' => 'Sh',
            'Щ' => 'Sh',
            'Ъ' => '',
            'Ы' => 'Y',
            'Ь' => '',
            'Э' => 'E',
            'Ю' => 'Yu',
            'Я' => 'Ya',
            'а' => 'a',
            'б' => 'b',
            'в' => 'v',
            'г' => 'g',
            'д' => 'd',
            'е' => 'e',
            'ё' => 'yo',
            'ж' => 'zh',
            'з' => 'z',
            'и' => 'i',
            'й' => 'j',
            'к' => 'k',
            'л' => 'l',
            'м' => 'm',
            'н' => 'n',
            'о' => 'o',
            'п' => 'p',
            'р' => 'r',
            'с' => 's',
            'т' => 't',
            'у' => 'u',
            'ф' => 'f',
            'х' => 'h',
            'ц' => 'c',
            'ч' => 'ch',
            'ш' => 'sh',
            'щ' => 'sh',
            'ъ' => '',
            'ы' => 'y',
            'ь' => '',
            'э' => 'e',
            'ю' => 'yu',
            'я' => 'ya',
            // Ukrainian
            'Є' => 'Ye',
            'І' => 'I',
            'Ї' => 'Yi',
            'Ґ' => 'G',
            'є' => 'ye',
            'і' => 'i',
            'ї' => 'yi',
            'ґ' => 'g',
            // Czech
            'Č' => 'C',
            'Ď' => 'D',
            'Ě' => 'E',
            'Ň' => 'N',
            'Ř' => 'R',
            'Š' => 'S',
            'Ť' => 'T',
            'Ů' => 'U',
            'Ž' => 'Z',
            'č' => 'c',
            'ď' => 'd',
            'ě' => 'e',
            'ň' => 'n',
            'ř' => 'r',
            'š' => 's',
            'ť' => 't',
            'ů' => 'u',
            'ž' => 'z',
            // Polish
            'Ą' => 'A',
            'Ć' => 'C',
            'Ę' => 'e',
            'Ł' => 'L',
            'Ń' => 'N',
            'Ó' => 'o',
            'Ś' => 'S',
            'Ź' => 'Z',
            'Ż' => 'Z',
            'ą' => 'a',
            'ć' => 'c',
            'ę' => 'e',
            'ł' => 'l',
            'ń' => 'n',
            'ó' => 'o',
            'ś' => 's',
            'ź' => 'z',
            'ż' => 'z',
            // Latvian
            'Ā' => 'A',
            'Č' => 'C',
            'Ē' => 'E',
            'Ģ' => 'G',
            'Ī' => 'i',
            'Ķ' => 'k',
            'Ļ' => 'L',
            'Ņ' => 'N',
            'Š' => 'S',
            'Ū' => 'u',
            'Ž' => 'Z',
            'ā' => 'a',
            'č' => 'c',
            'ē' => 'e',
            'ģ' => 'g',
            'ī' => 'i',
            'ķ' => 'k',
            'ļ' => 'l',
            'ņ' => 'n',
            'š' => 's',
            'ū' => 'u',
            'ž' => 'z'
        );
        // Make custom replacements
        $str = preg_replace(array_keys($options['replacements']), $options['replacements'], $str);
        // Transliterate characters to ASCII
        if ($options['transliterate']) {
            $str = str_replace(array_keys($char_map), $char_map, $str);
        }
        // Replace non-alphanumeric characters with our delimiter
        $str = preg_replace('/[^\p{L}\p{Nd}]+/u', $options['delimiter'], $str);
        // Remove duplicate delimiters
        $str = preg_replace('/(' . preg_quote($options['delimiter'], '/') . '){2,}/', '$1', $str);
        // Truncate slug to max. characters
        $str = mb_substr($str, 0, ($options['limit'] ? $options['limit'] : mb_strlen($str, 'UTF-8')), 'UTF-8');
        // Remove delimiter from ends
        $str = trim($str, $options['delimiter']);
        return $options['lowercase'] ? mb_strtolower($str, 'UTF-8') : $str;
    }


    public static function TotalFactorProccsing()
    {
        $userInfo = FactorUser::where('factor_status', 'processStore')->get();
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
