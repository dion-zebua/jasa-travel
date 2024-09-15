<?php

if (! function_exists('phone')) {
    function phone()
    {
        return '+62 882-8931-7870';
    }
}

if (! function_exists('whatsapp')) {
    function whatsapp()
    {
        $cleaned_number = str_replace(['-', '+', ' '], '', phone());
        return "https://api.whatsapp.com/send/?phone=" . $cleaned_number . "&text=Halo+admin+" . url()->full() . "&type=phone_number&app_absent=0";
    }
}
