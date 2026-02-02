<?php


    function generateSlug(string $data) : string {
        str_replace(" ", "-", $data);   
    }