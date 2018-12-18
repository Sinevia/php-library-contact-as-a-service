<?php

namespace Sinevia;

class ContactAsAService {
    public static function send($data) {
        $serviceUrl = "https://eu-gb.functions.cloud.ibm.com/api/v1/web/sinevia_live/default/contact-as-a-service-mail-save.json";
        $finalUrl = $serviceUrl . '?' . html_build_query($data);
        $responseString = file_get_contents($finalUrl);
        $response = json_decode($responseString,true);
        return $response;
    }
}
