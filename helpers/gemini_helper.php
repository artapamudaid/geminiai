<?php


function generateText(String $command): String
{
    $googleApiKey = "YOUR GEMINI API KEY";

    $data = array(
        "contents" => array(
            array(
                "parts" => array(
                    array(
                        "text" => $command
                    )
                )
            )
        )
    );

    $url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-pro:generateContent?key=" . $googleApiKey;

    $dataJson = json_encode($data);

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $dataJson);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
    ));

    $response = curl_exec($ch);

    if ($response === false) {
        return "Error: " . curl_error($ch);
    } else {
        return $response;
    }

    curl_close($ch);
}
