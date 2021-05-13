<?php
/**
 * User: TheCodeholic
 * Date: 3/19/2019
 * Time: 9:27 AM
 */

function getUsers()
{
     $users = json_decode(file_get_contents(__DIR__ . '/users.json'), true);
    // $group_by = _group_by($users,'lieu');
    // var_dump($group_by);
    // var_dump($users);
    return json_decode(file_get_contents(__DIR__ . '/users.json'), true);
}

function _group_by($array, $key) {
    $return = array();
    foreach($array as $val) {
        $return[$val[$key]][] = $val;
    }
    return $return;
}

function getUserById($id)
{
    $users = getUsers();
    foreach ($users as $user) {
        if ($user['id'] == $id) {
            return $user;
        }
    }
    return null;
}

function createUser($data)
{
    $users = getUsers();

    $data['id'] = rand(1000000, 2000000);

    $users[] = $data;

    putJson($users);

    return $data;
}

function updateUser($data, $id)
{
    $updateUser = [];
    $users = getUsers();
    foreach ($users as $i => $user) {
        if ($user['id'] == $id) {
            $users[$i] = $updateUser = array_merge($user, $data);
        }
    }

    putJson($users);

    return $updateUser;
}

function deleteUser($id)
{
    $users = getUsers();

    foreach ($users as $i => $user) {
        if ($user['id'] == $id) {
            array_splice($users, $i, 1);
        }
    }

    putJson($users);
}

function uploadImage($file, $user)
{
    if (isset($_FILES['picture']) && $_FILES['picture']['name']) {
        if (!is_dir(__DIR__ . "/images")) {
            mkdir(__DIR__ . "/images");
        }
        // Get the file extension from the filename
        $fileName = $file['name'];
        // Search for the dot in the filename
        $dotPosition = strpos($fileName, '.');
        // Take the substring from the dot position till the end of the string
        $extension = substr($fileName, $dotPosition + 1);

        move_uploaded_file($file['tmp_name'], __DIR__ . "/images/${user['id']}.$extension");

        $user['extension'] = $extension;
        updateUser($user, $user['id']);
    }
}

function putJson($users)
{
    file_put_contents(__DIR__ . '/users.json', json_encode($users, JSON_PRETTY_PRINT));
}

function validateUser($user, &$errors)
{
    $isValid = true;
    // Start of validation
    if (!$user['nb_victime']) 
    {
        $isValid = false;
        $errors['nb_victime'] = 'Veuillez entrer le nombre de victime';
    }
    if (!$user['lieu']) {
        $isValid = false;
        $errors['lieu'] = 'Veuillez choisir un lieu';
    } 
    if (!$user['date']) {
        $isValid = false;
        $errors['date'] = 'Veuillez ajouter une date';
    }

    if (!$user['mise_en_cause']) 
    {
        $isValid = false;
        $errors['mise_en_cause'] = 'Veuillez ajouter une mise en cause';
    }
    // End Of validation
    
    return $isValid;
}
