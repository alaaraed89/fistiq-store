
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $type = $_POST["type"];
    $entry = $_POST;
    $data = json_decode(file_get_contents("data.json"), true);
    if ($type === "message") {
        $data["messages"][] = $entry;
    } elseif ($type === "request") {
        $data["requests"][] = $entry;
    }
    file_put_contents("data.json", json_encode($data, JSON_PRETTY_PRINT));
    echo "تم الحفظ بنجاح";
}
?>
