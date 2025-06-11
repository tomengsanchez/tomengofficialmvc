<?php
// Load Config
require_once __DIR__ . '/../app/config/config.php';

// Load Helpers
require_once __DIR__ . '/../app/helpers/session_helper.php';

// Load Core Libraries
require_once __DIR__ . '/../app/core/App.php';
require_once __DIR__ . '/../app/core/Controller.php';
require_once __DIR__ . '/../app/core/Database.php';


// Bootstrap the application by instantiating the App class.
$app = new App;