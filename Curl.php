<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CI_Curl {

    function __construct() {
        $this->CI = & get_instance();
    }

    function index() {
        
    } 

    function c_post($url, $token, $json_data) {
        $js_data = json_encode($json_data);
        $headers = array(
            //"Accept :application/json"
            "Content-type:  application/json;charset=\"utf-8\"",
            "Accept: text/xml",
            "Cache-Control: no-cache",
            "Pragma: no-cache",
            "SOAPAction: \"run\"",
            "Authorization:$token ",
            "X-HTTP-Method-Override: POST"
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $js_data);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_FAILONERROR, TRUE);
        curl_setopt($ch, CURLINFO_HEADER_OUT, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, false); //di set false agar ouputan header yang di kirim tidak di ikutkan 
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }

    function c_get($url, $token) {
        $headers = array(
            //"Accept :application/json"
            "Content-type:  application/json;charset=\"utf-8\"",
            "Accept: text/xml",
            "Cache-Control: no-cache",
            "Pragma: no-cache",
            "SOAPAction: \"run\"",
            "Authorization:$token ",
            "X-HTTP-Method-Override: GET"
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_FAILONERROR, TRUE);
        curl_setopt($ch, CURLINFO_HEADER_OUT, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, false); //di set false agar ouputan header yang di kirim tidak di ikutkan 
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }

    function c_put($url, $token, $json_data) {
        $js_data = json_encode($json_data);
        $headers = array(
            //"Accept :application/json"
            "Content-type:  application/json;charset=\"utf-8\"",
            "Accept: text/xml",
            "Cache-Control: no-cache",
            "Pragma: no-cache",
            "SOAPAction: \"run\"",
            "Authorization:$token ",
            "X-HTTP-Method-Override: PUT"
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $js_data);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($ch, CURLOPT_FAILONERROR, TRUE);
        curl_setopt($ch, CURLINFO_HEADER_OUT, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, false); //di set false agar ouputan header yang di kirim tidak di ikutkan 
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }

    function c_delete($url, $token, $json_data) {
        $js_data = json_encode($json_data);
        $headers = array(
            //"Accept :application/json"
            "Content-type:  application/json;charset=\"utf-8\"",
            "Accept: text/xml",
            "Cache-Control: no-cache",
            "Pragma: no-cache",
            "SOAPAction: \"run\"",
            "Authorization:$token ",
            "X-HTTP-Method-Override: DELETE"
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $js_data);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($ch, CURLOPT_FAILONERROR, TRUE);
        curl_setopt($ch, CURLINFO_HEADER_OUT, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, false); //di set false agar ouputan header yang di kirim tidak di ikutkan 
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }

    function c_patch($url, $token, $json_data) {
        $js_data = json_encode($json_data);
        $headers = array(
            //"Accept :application/json"
            "Content-type:  application/json;charset=\"utf-8\"",
            "Accept: text/xml",
            "Cache-Control: no-cache",
            "Pragma: no-cache",
            "SOAPAction: \"run\"",
            "Authorization:$token ",
            "X-HTTP-Method-Override: PATCH"
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $js_data);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PATCH");
        curl_setopt($ch, CURLOPT_FAILONERROR, TRUE);
        curl_setopt($ch, CURLINFO_HEADER_OUT, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, false); //di set false agar ouputan header yang di kirim tidak di ikutkan 
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }

    function c_option($url, $token, $json_data) {
        $js_data = json_encode($json_data);
        $headers = array(
            //"Ac cept :application/json"
            "Content-type:  application/json;charset=\"utf-8\"",
            "Accept: text/xml",
            "Cache-Control: no-cache",
            "Pragma: no-cache",
            "SOAPAction: \"run\"",
            "Authorization:$token ",
            "X-HTTP-Method-Override: OPTION"
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $js_data);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "OPTION");
        curl_setopt($ch, CURLOPT_FAILONERROR, TRUE);
        curl_setopt($ch, CURLINFO_HEADER_OUT, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, false); //di set false agar ouputan header yang di kirim tidak di ikutkan 
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }
   

}
