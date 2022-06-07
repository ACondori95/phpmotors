<?php

// This is the vehicles controller

// Create or access a Session
session_start();

// Get the database connection file
require_once '../library/connections.php';
// Get the PHP Motors model for use as needed
require_once '../model/main-model.php';
// Get the vehicles model
require_once '../model/vehicles-model.php';
// Get the functions library
require_once '../library/functions.php';

// Get the array classification
$classifications = getClassifications();
// var_dump($classifications);
// exit;

// Build a navigation bar using the $classifications array
$navList = navList($classifications);

$action = filter_input(INPUT_GET, 'action');
if ($action == NULL) {
  $action = filter_input(INPUT_POST, 'action');
}

switch ($action) {
  case 'add_vehicle':
    // Filter and store the data
    $invMake = trim(filter_input(INPUT_POST, 'invMake', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $invModel = trim(filter_input(INPUT_POST, 'invModel', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $invDescription = trim(filter_input(INPUT_POST, 'invDescription', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $invImage = trim(filter_input(INPUT_POST, 'invImage', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $invThumbnail = trim(filter_input(INPUT_POST, 'invThumbnail', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $invPrice = trim(filter_input(INPUT_POST, 'invPrice', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $invStock = trim(filter_input(INPUT_POST, 'invStock', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $invColor = trim(filter_input(INPUT_POST, 'invColor', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $classificationId = trim(filter_input(INPUT_POST, 'classificationId', FILTER_SANITIZE_FULL_SPECIAL_CHARS));

    // Check for missing data
    if (empty($invMake) || empty($invModel) || empty($invDescription) || empty($invImage) || empty($invThumbnail) || empty($invPrice) || empty($invStock) || empty($invColor) || empty($classificationId)) {
      $message = '<p>Please, provide information for all empty fields.</p>';
      include '../view/add_vehicle.php';
      exit;
    }

    // Send data to the model
    $vehicleOutcome = addVehicle($invMake, $invModel, $invDescription, $invImage, $invThumbnail, $invPrice, $invStock, $invColor, $classificationId);

    // Check and report the result
    if ($vehicleOutcome === 1) {
      $message = "<p>$invMake $invModel has been added to the database successfuly.</p>";
      include '../view/vehicle_management.php';
      exit;
    } else {
      $message = "Sorry, but the new vehicle wasn't added successfuly.";
      include '../view/add_vehicle.php';
      exit;
    }

    // echo 'You are now in the add_vehicle case statement';
    break;

  case 'add_classification':
    // Filter and store the data
    $classificationName = trim(filter_input(INPUT_POST, 'classificationName', FILTER_SANITIZE_FULL_SPECIAL_CHARS));

    // Check for missing data
    if (empty($classificationName)) {
      $message = '<p>Please provide a classification name.</p>';
      include '../view/add_classification.php';
      exit;
    }

    // Send data to the model
    $classificationOutcome = addClassification($classificationName);

    // Check and report the result
    if ($classificationOutcome === 1) {
      $message = "<p>$classificationName has been added successfuly to the database.</p>";
      header('Location: /phpmotors/vehicles/');
      exit;
    } else {
      $message = "Sorry, but the new classification wasn't added.";
      include '../view/add_classification.php';
      exit;
    }

    // echo 'You are now in the add_classification statement';
    break;

  case 'add_vehicle_page':
    include '../view/add_vehicle.php';
    break;

  case 'add_classification_page':
    include '../view/add_classification.php';
    break;

  default:
    include '../view/vehicle_management.php';
    break;
}
