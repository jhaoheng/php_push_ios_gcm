<?php  

$cert_b64 = "QmFnIEF0dHJpYnV0ZXMNCiAgICBmcmllbmRseU5hbWU6IEFwcGxlIFB1c2ggU2VydmljZXM6IGNvbS5tYXguZGVtbw0KICAgIGxvY2FsS2V5SUQ6IEM3IDg5IDQ1IDBFIDZBIDRDIEExIEVEIERBIDVBIEU0IEUxIEVBIDZEIENBIEIzIDdEIERBIDdFIEJEIA0Kc3ViamVjdD0vVUlEPWNvbS5tYXguZGVtby9DTj1BcHBsZSBQdXNoIFNlcnZpY2VzOiBjb20ubWF4LmRlbW8vT1U9WlpHTTgzSzdCRS9PPWpoYW9oZW5nIEh1L0M9VVMNCmlzc3Vlcj0vQz1VUy9PPUFwcGxlIEluYy4vT1U9QXBwbGUgV29ybGR3aWRlIERldmVsb3BlciBSZWxhdGlvbnMvQ049QXBwbGUgV29ybGR3aWRlIERldmVsb3BlciBSZWxhdGlvbnMgQ2VydGlmaWNhdGlvbiBBdXRob3JpdHkNCi0tLS0tQkVHSU4gQ0VSVElGSUNBVEUtLS0tLQ0KTUlJRitEQ0NCT0NnQXdJQkFnSUlBZ0o1dm9vUEtLMHdEUVlKS29aSWh2Y05BUUVMQlFBd2daWXhDekFKQmdOVg0KQkFZVEFsVlRNUk13RVFZRFZRUUtEQXBCY0hCc1pTQkpibU11TVN3d0tnWURWUVFMRENOQmNIQnNaU0JYYjNKcw0KWkhkcFpHVWdSR1YyWld4dmNHVnlJRkpsYkdGMGFXOXVjekZFTUVJR0ExVUVBd3c3UVhCd2JHVWdWMjl5YkdSMw0KYVdSbElFUmxkbVZzYjNCbGNpQlNaV3hoZEdsdmJuTWdRMlZ5ZEdsbWFXTmhkR2x2YmlCQmRYUm9iM0pwZEhrdw0KSGhjTk1UWXdPVEl4TVRJek56TXdXaGNOTVRjeE1ESXhNVEl6TnpNd1dqQ0JnakVjTUJvR0NnbVNKb21UOGl4aw0KQVFFTURHTnZiUzV0WVhndVpHVnRiekVxTUNnR0ExVUVBd3doUVhCd2JHVWdVSFZ6YUNCVFpYSjJhV05sY3pvZw0KWTI5dExtMWhlQzVrWlcxdk1STXdFUVlEVlFRTERBcGFXa2ROT0ROTE4wSkZNUlF3RWdZRFZRUUtEQXRxYUdGdg0KYUdWdVp5QklkVEVMTUFrR0ExVUVCaE1DVlZNd2dnRWlNQTBHQ1NxR1NJYjNEUUVCQVFVQUE0SUJEd0F3Z2dFSw0KQW9JQkFRREduMDAxVjkvVFI1c3RsVFVTelE4UGdaL3lmTEVQSGhzeGlYdVhEZG0zV0dCZ1NxV2VlaG9FSlAwdA0KcEptcUVyaTE1bEFsMHhrcEpUMEpCUzQ3N2kwYkpDY0hoakNLN0Vha0hmSXFGZHIyL1hlajlqMlFyRkh6QUU2Yg0KVFhGYXdyNVdEWW9MSkNEOFNlTzBTc09TVWJhcTVyOWNJU3g4bnFzbWM1cVhQelQwNmc5Wm0xMEl0clNvMldlUQ0KVzBDeDc5b0cxL3pRV2xBQ1QrNFJ2clJkWDR3QUVmWmNTRjlrVkZ6bGswanhwYUlYbVlrYThSVmx6YzAveWJiZw0KMk9HZkRmc2JSemR5TloxT2M0U2IrS0FyL294ZXpRQUgva3lkRGE5bFVDbTFrdUlieW9yZG43MTlPdHFKcDM0dw0KenBEcXNmMUhvZFkwR09HQ05zaVIxSXNhcTI0ZkFnTUJBQUdqZ2dKYU1JSUNWakFkQmdOVkhRNEVGZ1FVeDRsRg0KRG1wTW9lM2FXdVRoNm0zS3MzM2FmcjB3REFZRFZSMFRBUUgvQkFJd0FEQWZCZ05WSFNNRUdEQVdnQlNJSnhjSg0KcWJZWVlJdnM2N3IyUjFuRlVsU2p0ekNDQVJ3R0ExVWRJQVNDQVJNd2dnRVBNSUlCQ3dZSktvWklodmRqWkFVQg0KTUlIOU1JSERCZ2dyQmdFRkJRY0NBakNCdGd5QnMxSmxiR2xoYm1ObElHOXVJSFJvYVhNZ1kyVnlkR2xtYVdOaA0KZEdVZ1lua2dZVzU1SUhCaGNuUjVJR0Z6YzNWdFpYTWdZV05qWlhCMFlXNWpaU0J2WmlCMGFHVWdkR2hsYmlCaA0KY0hCc2FXTmhZbXhsSUhOMFlXNWtZWEprSUhSbGNtMXpJR0Z1WkNCamIyNWthWFJwYjI1eklHOW1JSFZ6WlN3Zw0KWTJWeWRHbG1hV05oZEdVZ2NHOXNhV041SUdGdVpDQmpaWEowYVdacFkyRjBhVzl1SUhCeVlXTjBhV05sSUhOMA0KWVhSbGJXVnVkSE11TURVR0NDc0dBUVVGQndJQkZpbG9kSFJ3T2k4dmQzZDNMbUZ3Y0d4bExtTnZiUzlqWlhKMA0KYVdacFkyRjBaV0YxZEdodmNtbDBlVEF3QmdOVkhSOEVLVEFuTUNXZ0k2QWhoaDlvZEhSd09pOHZZM0pzTG1Gdw0KY0d4bExtTnZiUzkzZDJSeVkyRXVZM0pzTUE0R0ExVWREd0VCL3dRRUF3SUhnREFUQmdOVkhTVUVEREFLQmdncg0KQmdFRkJRY0RBakFRQmdvcWhraUc5Mk5rQmdNQkJBSUZBREFRQmdvcWhraUc5Mk5rQmdNQ0JBSUZBREJyQmdvcQ0KaGtpRzkyTmtCZ01HQkYwd1d3d01ZMjl0TG0xaGVDNWtaVzF2TUFVTUEyRndjQXdSWTI5dExtMWhlQzVrWlcxdg0KTG5admFYQXdCZ3dFZG05cGNBd1pZMjl0TG0xaGVDNWtaVzF2TG1OdmJYQnNhV05oZEdsdmJqQU9EQXhqYjIxdw0KYkdsallYUnBiMjR3RFFZSktvWklodmNOQVFFTEJRQURnZ0VCQURxbXppTDU5Tm5XUnpZZnFVdGxQNlNsSGwreg0KUjN4c3EzaHFTVXZGYmJMNmNBdnc2RUM2a29aUll3d1hIVnN2aG5WQzZCbGNSMHg2TWR2U1hRUGJKdjZwTmFaeQ0KMmoveXBrdFhjajNOWmlRSTFxbFlHVnZhU0RPSzB5ZTgvOXBISTdVb3ZLUVlSL3lkYlNtWXJkdlpBNURBaFRqOA0KQXFUcjJ2aXRqdXBPdS9yUDNpY1ZibWRvaE5mSEpYenVhZlZLWFZXVXFERjZ2bllTZW1xenhzcHUxcS9CakhWeg0KR3VyV2VyV0gvNGQ0bmlKUlg1OGtRdW0yTUhQV0tzUVMrN2F4SlZ1U2krYXZNeFAwb1BxNjhDSThadTBjY1RtSA0KSEVqUHpYcFVLbllWSi9lVnlrUkxtbUR5ektCanoxd2hpdTVhNk1CQW5JanFKbWdUNG5xUGUwQkRuTDg9DQotLS0tLUVORCBDRVJUSUZJQ0FURS0tLS0tDQpCYWcgQXR0cmlidXRlcw0KICAgIGZyaWVuZGx5TmFtZTogbWF4X29yYndlYg0KICAgIGxvY2FsS2V5SUQ6IEM3IDg5IDQ1IDBFIDZBIDRDIEExIEVEIERBIDVBIEU0IEUxIEVBIDZEIENBIEIzIDdEIERBIDdFIEJEIA0KS2V5IEF0dHJpYnV0ZXM6IDxObyBBdHRyaWJ1dGVzPg0KLS0tLS1CRUdJTiBQUklWQVRFIEtFWS0tLS0tDQpNSUlFdndJQkFEQU5CZ2txaGtpRzl3MEJBUUVGQUFTQ0JLa3dnZ1NsQWdFQUFvSUJBUURHbjAwMVY5L1RSNXN0DQpsVFVTelE4UGdaL3lmTEVQSGhzeGlYdVhEZG0zV0dCZ1NxV2VlaG9FSlAwdHBKbXFFcmkxNWxBbDB4a3BKVDBKDQpCUzQ3N2kwYkpDY0hoakNLN0Vha0hmSXFGZHIyL1hlajlqMlFyRkh6QUU2YlRYRmF3cjVXRFlvTEpDRDhTZU8wDQpTc09TVWJhcTVyOWNJU3g4bnFzbWM1cVhQelQwNmc5Wm0xMEl0clNvMldlUVcwQ3g3OW9HMS96UVdsQUNUKzRSDQp2clJkWDR3QUVmWmNTRjlrVkZ6bGswanhwYUlYbVlrYThSVmx6YzAveWJiZzJPR2ZEZnNiUnpkeU5aMU9jNFNiDQorS0FyL294ZXpRQUgva3lkRGE5bFVDbTFrdUlieW9yZG43MTlPdHFKcDM0d3pwRHFzZjFIb2RZMEdPR0NOc2lSDQoxSXNhcTI0ZkFnTUJBQUVDZ2dFQWZNSWhFQW1UT0xXNG5nZ2pueHlZZ2lmc25MWi96THdmWHAwNXVTYmxBd29LDQo5MURMK09BL0tTMUdyZjIrMjVvSTFaREY5UXhFdUppQVh3TVhDR1BSaDBQTkZDZlFvK0pIZU55cWVJN2p5OUpuDQo3T0JGeVhMRHdyd0ZvLzBmMzErRmlLM1djS3NQNFFoVWM3R21hR2pWTVVIaEh2QmpiaCtINTQ0am95NzdoMzNGDQovUWdpRXJjT2liZzU2MCtidVFSeU1wM2ZlTVBWelViL2lWVkdaTkIyUlh3cUNrU09RYUxNRG5oeXZUTTMraE4zDQovdVBEQ0JiVVVZc0ZVMkdNZTdJbTFNQk5QQnl4K0JyT1hTQUNXaTRaUGNqYkN0SGZxeENVV0pjNUZrVzkwUVJyDQpHdEFZdnBlYk9WdzRsQ2YvbitnbjdhQ0lESnJ2b2dmWlhRdWhDQmo2RVFLQmdRRHJnVjNYN1ptejREZzRuWTVmDQpNcDFZYUFCclNma29YeFZMcm0zQVU4cTVZNmk0blBTbFNEZXYzZTMxa204djg2WjV2cUphZHNuSmtMM09EenF0DQpGcXJJdTl4Kzcya1EwblJyRGErM3dhZThEYTlmV3huYkVxbGhETjl4KzNLVGRMYU9kOFJPSy9aaEd3VGQ1TGJUDQpGbHNENzZvdEVlM1hYZHpnRE1qdnY1Zm5lUUtCZ1FEWDZEODNrRTZqK3hkT2xKeTNKOFdjTXhaUS9OamdpVmpxDQpTZDBROUdOb01BejdIWnVUblNEalUwQnlyNmR5ckdVZ1RHNm9qVFRCWWN5OUtvRlJ3b3gyUWpHTSs0SUFxcWg1DQpaVE5ackNBMEF5cnhmZDJoZlE2WVRqVHJRb0hYOFNsOWMxYWp4UFlVa1lVM3JMeVh3NmwrUjVjYndra2MxSFhsDQpvT3NiUmdUa1Z3S0JnUUMxQ1JabHBiMXcyOXo4RUluZ1BsMWNGMTZ6R3dOUWVIODdWVlFDODZhMENwc3BoMlk5DQpKQjNDc0p4N0dWMGxoR3dsekZpcnFBTUlVcDdGcDBsWXcwTDMyZ251L2dWTExDellHb1pJZ0xKN1NoM1U5SWdVDQpzdXpIc1FpWGEwNnhjWmZnUHNzRnVKL0dGK29PMVFHQmxQN1VNTWtscWxHbUsvNWRzUlpKem9Oc0tRS0JnUUN6DQo3QkN5WndtQjBYN3N0eCtaNmdUZFZCMW14QzZmZnhXZnVJb0cxUUg2RXdEZVN5QVk5VG93OW5HZ29ReXpuVUp3DQpsZ0VwYVBMcnJHcUh3V0lmRmpjalhhb1pTSVpmczlmTndpMzJybC92dUN3VExzYUJDc3djMUI5NVplVDZaVGdrDQpHUGU4WmlpRG4za2FtbEpYVG5CeWtZbzFVY1RIeDYydi9GZXdWTHRDNVFLQmdRQzZGS2hYT0J1aHV1ZWJrS0lvDQp4VFczTmJIY2FmU2t2K0Y3T20xdkozL0NsREI5bE9yY1RXZGtqc1ZvRnVvYXVBajRkQTR1R0k3V3BGb1JwRFQ0DQo4R3VVSVRDWm1LWnRHL1lOemQ5WE9aWmh3cC8xK3F5YU9YV1U2SU54U1p3ZE5ldUkwKzhXdzJkSnpSdGZyU3pVDQpYTHZDMGpLeUtVMUlwMUJObGltNGVQdnVlZz09DQotLS0tLUVORCBQUklWQVRFIEtFWS0tLS0t";

$pemfile = base64_decode($cert_b64);

$tempPemFile = tmpfile();
fwrite($tempPemFile, $pemfile);
$tempPemPath = stream_get_meta_data($tempPemFile);
$tempPemPath = $tempPemPath['uri'];

// this is only needed with php prior to 5.5.24
if (!defined('CURL_HTTP_VERSION_2_0')) {
  define('CURL_HTTP_VERSION_2_0', 3);
}
// open connection 
$http2ch = curl_init();
curl_setopt($http2ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_2_0);

// send push
$apple_cert = $tempPemPath;//'./apns_dev.pem';
$message = '{"aps":{"alert":"Hi!","sound":"default"}}';
$token = "54b12748b9aa3bc204a96146743e38077d0bbe158139741ae74f746b840a668c";
$http2_server = 'https://api.development.push.apple.com'; // or 'api.push.apple.com' if production
$app_bundle_id = 'com.max.demo';

$status = sendHTTP2Push($http2ch, $http2_server, $apple_cert, $app_bundle_id, $message, $token);
echo "Response from apple -> {$status}\n";

// close connection
curl_close($http2ch);


/**
 * @param $http2ch          the curl connection
 * @param $http2_server     the Apple server url
 * @param $apple_cert       the path to the certificate
 * @param $app_bundle_id    the app bundle id
 * @param $message          the payload to send (JSON)
 * @param $token            the token of the device
 * @return mixed            the status code
 */
function sendHTTP2Push($http2ch, $http2_server, $apple_cert, $app_bundle_id, $message, $token) {

    // url (endpoint)
    $url = "$http2_server/3/device/$token";

    // certificate
    $cert = realpath($apple_cert);

    // headers
    $headers = array(
        "apns-topic: $app_bundle_id",
        "User-Agent: My Sender"
    );

    // other curl options
    curl_setopt_array($http2ch, array(
        CURLOPT_URL => $url,
        CURLOPT_PORT => 443,
        CURLOPT_HTTPHEADER => $headers,
        CURLOPT_POST => TRUE,
        CURLOPT_POSTFIELDS => $message,
        CURLOPT_RETURNTRANSFER => TRUE,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSLCERT => $cert,
        CURLOPT_HEADER => 1
    ));

    // go...
    $result = curl_exec($http2ch);
    if ($result === FALSE) {
      throw new Exception("Curl failed: " .  curl_error($http2ch));
    }

    // get response
    $status = curl_getinfo($http2ch, CURLINFO_HTTP_CODE);

    return $status;
}


?>