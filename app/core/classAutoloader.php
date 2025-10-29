<?php
    // PSR-4 style autoloader
    spl_autoload_register(function ($class) {
        // Convert namespace to full path
        $prefix = 'app\\';  // base namespace
        $baseDir = __DIR__ . '/../'; // points to app/

        // Does the class use the namespace prefix?
        $len = strlen($prefix);
        if (strncmp($prefix, $class, $len) !== 0) {
            // no, move to the next registered autoloader
            return;
        }

        // Get the relative class name (strip "app\")
        $relativeClass = substr($class, $len);

        // Replace namespace separators with directory separators
        $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';

        // If the file exists, require it
        if (file_exists($file)) {
            require $file;
        } 
        else 
        {
            echo "Not found: $file<br>"; // 👈 optional debug line
        }
    });
?>    
