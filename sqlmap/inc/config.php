<?php

// App Version Tracker
define('GUI_VERSION', '0.01b');

// API URL to Connect to, default: http://127.0.0.1:8775/
define('API_URL', 'http://sqlmap.pentest.win/');

// Path to where the core SQLMAP python files can be found
//    i.e. sqlmap.py, sqlmapapi.py, extra/, tamper/, etc
define('SQLMAP_BIN_PATH', '/home/afm/sqlmap-dev/');

// Path to SQLMAP's Default Output Directory
define('SQLMAP_OUTPUT_PATH', '/home/afm/.sqlmap/output/');

// Define where to write our local scan file archives to
define('TMP_PATH', '/tmp/sqlmpui/');

// Path to the local Metasploit directory
// May be used to generate shellcode for advanced exploit functionalities
// May also use for building of reverse shell payloads for file writer, tbd...
define('MSF_PATH', '/home/afm/tools/msf/');

// Admin Username & Password
// *For future admin panel to flush and kill scan tasks....
define('ADMIN_USER', 'admin');
define('ADMIN_PASS', 'admin');
