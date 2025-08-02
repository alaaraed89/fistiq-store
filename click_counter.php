
<?php
$data = json_decode(file_get_contents("data.json"), true);
$data["clicks"] += 1;
file_put_contents("data.json", json_encode($data, JSON_PRETTY_PRINT));
echo "تم تسجيل النقرة";
?>
