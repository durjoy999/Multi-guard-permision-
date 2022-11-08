<?php
    function generalSettings(){
        $generalSettings = App\Models\generalSettings::latest()->first();
        return $generalSettings;
    }