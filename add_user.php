<?
$json = file_get_contents("https://api.instagram.com/v1/users/self/?access_token=7667058487.1677ed0.18d958c1e18942fb959daa4079ee82d2&count=5");
$data = json_decode($json, true);

$full_name = $data['data']['full_name'];
$profile_picture = $data['data']['profile_picture'];
$counts = $data['data']['counts']['media'];
