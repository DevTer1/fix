<?
class AxisAPI
{
	//function untuk kirim otp
	function SendOTP($nomor){
		$url="https://wdcloudssh.net/api/otp/send";
		$data=array("msisdn"=> $nomor);

		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_POST, 1);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		$response = curl_exec($curl);
		return $response;
	}
	//function untuk login
	function sendLogin($otp){
		$url="https://wdcloudssh.net/api/login/send";
		$data=array("otp"=> $otp);

		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_POST, 1);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		$response = curl_exec($curl);
		return $response;
	}
	// Fungsi buy package
	function getBuyPackageV2($token, $pkgid){
		$url="https://wdcloudssh.net/api/axis/package";
		$data=array("token"=> $token, "pkgid" => $pkgid);

		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_POST, 1);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		$response = curl_exec($curl);
		return $response;
	}

	function authToken()
	{
		$authToken = fopen("auth.txt","r");
	    $myAuth = fread($authToken,filesize("auth.txt"));
	    fclose($authToken);
	    return $myAuth;
	}
}

$yellow = "\033[33m";
$red = "\033[31m";
$blue = "\033[34m";
$White  = "\e[0;37m";
$Cyan   = "\e[0;36m";

$axis = new AxisAPI;
if (!fopen('auth.txt', 'r')) {
	$file = fopen('auth.txt', 'w');
	$text = "Dor Axis By Gugun\n";
	fwrite($file , $text);    
	fclose($file );
}

echo "\n";
echo "$blue ============================\n";
echo "$White Nama : Gugun09 \n";
echo "$White Tanggal : ".date('Y-m-d')." \n";
echo "$White Auth Token : " . $axis->authToken();
echo "$blue ============================\n";

repeat_msisdn:
echo "$yellow Masukkan Nomor Axis : ";
$nomor = trim(fgets(STDIN));
$response = $axis->SendOTP($nomor);
$result = json_decode($response, true);
if($result['status'] == true)
{
	echo $blue.$result['status_message'];
	echo "\r\n";
	echo $blue.$result['data'];
}else{
	echo $red.$result['status_message'];
	echo "\r\n";
	echo "$red No Kamu : ".$result['data'];
	echo "\n";
	goto repeat_msisdn;
}
echo "\n";

repeat_otp:
echo "$yellow Masukkan Kode OTP : ";
$otp = strtoupper(trim(fgets(STDIN)));
$response = $axis->sendLogin($otp);
$result = json_decode($response, true);
if($result['status'] == true)
{
	$file = fopen("auth.txt","w");  
	fwrite($file,"Auth Token : ". $result['data']);  
	fclose($file);
	echo $blue.$result['status_message'];
	echo "\r\n";
	echo $blue.$result['data'];
}else{
	echo $red.$result['status_message'];
	echo "\r\n";
	echo "$red Kode OTP : ".$result['data'];
	echo "\n";
	goto repeat_otp;
}
echo "\n";

function BuyPackage()
{
	$Red      = "\e[0;31m";
    $Yellow = "\e[0;33m";
    $White  = "\e[0;37m";
    $Cyan   = "\e[0;36m";

	$axis = new AxisAPI;

	echo "$Yellow Daftar Kuota Harian: \n";

	$daftar = array(
		"1. Bonus Kuota Youtube (1GB 1D), 0K",
		"2. Bonus Kuota Youtube (2GB 3D), 0K",
		"3. Bonus Kuota Tiktok (1GB 1D), 0K",
		"4. Bonus Kuota Instagram (1GB 1D), 0K",
		"5. Bonus Kuota Malam (1GB 2D), 0K",
		"6. Bonus Kuota 5MB + Bonus Vidio Platinum (30D), 0K",
	);
	foreach ($daftar as $list) {
		echo "$White $list \n";
	}

	repeat_pkgid:

	echo "\n$Cyan Choise Kuota Harian : ";
	$choise = trim(fgets(STDIN));
	switch ($choise) {
		case '1':
			$pkgid = $axis->getBuyPackageV2(trim($axis->authToken()), 1);
			break;
		case '2':
			$pkgid = $axis->getBuyPackageV2(trim($axis->authToken()), 2);
			break;
		case '3':
			$pkgid = $axis->getBuyPackageV2(trim($axis->authToken()), 3);
			break;
		case '4':
			$pkgid = $axis->getBuyPackageV2(trim($axis->authToken()), 4);
			break;
		case '5':
			$pkgid = $axis->getBuyPackageV2(trim($axis->authToken()), 5);
			break;
		case '6':
			$pkgid = $axis->getBuyPackageV2(trim($axis->authToken()), 6);
			break;
		default:
			echo "$Red Your choice is wrong \n"; 
	        goto repeat_pkgid; 
			break;
	}

	$result = json_decode($pkgid, true);
	if ($result['status'] == true) {
		echo "$Cyan".$result['status_message']."\n";
	}else{
		echo "$Red".$result['status_message']."\n";
	}
}
repeat_quota:
echo "\n";
BuyPackage();
echo "\n";
echo "$Cyan Tekan y untuk logout, Tekan n untuk mengulang pembelian kuota [y/N] : ";
$logout =  trim( fgets( STDIN ) );
if ( $logout !== 'y' ) {
   goto repeat_quota;
}
echo "\n";
