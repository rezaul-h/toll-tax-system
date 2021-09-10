<?php

function validateTopic($topic)
{
    $errors = array();

    if (empty($topic['name'])) {
        array_push($errors, 'Name is required');
    }

    $existingTopic = selectOne('category', ['name' => $topic['name']]);
    if ($existingTopic) {
       
            array_push($errors, 'Name already exists');
       
    }

    return $errors;
}

