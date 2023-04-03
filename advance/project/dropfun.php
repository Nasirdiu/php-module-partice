<?php

function displayOption($option){
    foreach($option as $option){
        printf("<option value ='%s'>%s</option>",strtolower($option),ucwords($option));
    }
}