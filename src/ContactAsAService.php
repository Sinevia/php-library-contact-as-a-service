<?php

namespace Sinevia;

class ContactAsAService {
    public static function send($data) {
        $serviceUrl = "https://contact-as-a-service-uodwjwllpq-ez.a.run.app/email-save";
        $finalUrl = $serviceUrl . '?' . http_build_query($data);
        $responseString = file_get_contents($finalUrl);
        $response = json_decode($responseString,true);
        return $response;
    }
}
