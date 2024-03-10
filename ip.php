<?php include_once('index.php') ?>

<?php
$ip = $_POST['ip'];
// seu token
$access_key = 'SEU_TOKEN_AQUI';

$ch = curl_init('https://apiip.net/api/check?ip='.$ip.'&accessKey='.$access_key.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$json_res = curl_exec($ch);
curl_close($ch);
$api_result = json_decode($json_res, true);

?>
<br>
<?php if(strlen($ip)<= 1): ?>
<p class="text-center" >IP inválido</p>
<?php elseif(strlen($ip) > 4): ?>
<center>
    <p>Cidade: <?php echo $api_result['countryName'] ?></p>
    <p>CEP: <?php echo $api_result['postalCode'] ?></p>
    <p>CEP: <?php echo $api_result['city'] ?></p>
</center>
<?php endif ?>
