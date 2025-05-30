<?php
// This is a simple script to check Apache configuration
echo "<h1>Server Configuration Check</h1>";

// Check PHP version
echo "<h2>PHP Version</h2>";
echo "<p>" . phpversion() . "</p>";

// Check loaded modules
echo "<h2>Apache Loaded Modules</h2>";
if (function_exists('apache_get_modules')) {
    $modules = apache_get_modules();
    echo "<p>mod_rewrite status: " . 
        (in_array('mod_rewrite', $modules) ? '<span style="color:green">Enabled</span>' : 
        '<span style="color:red">Not Enabled</span>') . "</p>";
    
    // Check other important modules
    $important_modules = ['mod_headers', 'mod_expires', 'mod_ssl'];
    echo "<ul>";
    foreach ($important_modules as $module) {
        echo "<li>$module: " . 
            (in_array($module, $modules) ? '<span style="color:green">Enabled</span>' : 
            '<span style="color:red">Not Enabled</span>') . "</li>";
    }
    echo "</ul>";
} else {
    echo "<p>Cannot check Apache modules. Make sure you're running this on an Apache server.</p>";
}

// Check if .htaccess is working
echo "<h2>.htaccess Status</h2>";
echo "<p>To test if your .htaccess file is being processed, try accessing a non-existent URL on your site.</p>";

// Check for common issues
echo "<h2>Common Configuration Issues</h2>";
echo "<p>Here are some common issues that might cause 404 errors:</p>";
echo "<ul>";
echo "<li>Check if AllowOverride is set to All in your Apache configuration</li>";
echo "<li>Make sure mod_rewrite is enabled in Apache</li>";
echo "<li>Ensure file permissions are set correctly</li>";
echo "<li>Verify that the paths in .htaccess are correct for your server setup</li>";
echo "</ul>";

// Path information
echo "<h2>Path Information</h2>";
echo "<p>Document root: " . $_SERVER['DOCUMENT_ROOT'] . "</p>";
echo "<p>Script filename: " . $_SERVER['SCRIPT_FILENAME'] . "</p>";
echo "<p>Request URI: " . $_SERVER['REQUEST_URI'] . "</p>";

// Output phpinfo for more detailed configuration
echo "<h2>Detailed PHP Configuration</h2>";
echo "<p><a href='phpinfo.php'>View PHP Configuration</a></p>";
?>
