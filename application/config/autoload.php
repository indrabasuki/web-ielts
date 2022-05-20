<?php
defined('BASEPATH') or exit('No direct script access allowed');


$autoload['packages'] = array();

$autoload['libraries'] = array(
    'session',
    'email',
    'database',
    'template',
    'datatables',
    'form_validation',
    'recaptcha'
);

$autoload['drivers'] = array();

$autoload['helper'] = array(
    'url',
    'form',
    'security',
    'my_helper',
    'score_helper'
);

$autoload['config'] = array(
    'recaptcha'
);

$autoload['language'] = array();

$autoload['model'] = array();
