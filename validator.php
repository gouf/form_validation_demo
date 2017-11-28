<?php
require_once('vendor/autoload.php');

use Respect\Validation\Exceptions\NestedValidationException;
use Respect\Validation\Validator as v;

$_SESSION['errorMessage'] = array();

function phoneValidate($value) {
  try {
    v::notBlank()->phone()->assert($value);
  } catch(NestedValidationException $e) {
    $_SESSION['errorMessage'][] = $e->getMessages();
  }
}

function nameValidate($value) {
  try {
    v::notBlank()->alnum()->noWhitespace()->assert($value);
  } catch(NestedValidationException $e) {
    $_SESSION['errorMessage'][] = $e->getMessages();
  }
}
