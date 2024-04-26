<?php
require('helpers/gemini_helper.php');


$command = $_POST['command'];

$resGenerate = generateText($command);

$result = json_decode($resGenerate, true);

$output = $result['candidates'][0]['content']['parts'][0]['text'];

echo $output;
