<?php
/*
Plugin Name: XML-RPC Disable
Description: Disables XML-RPC by SNHC.cloud denying access to xmlrpc.php in .htaccess.
*/

// Hook para activar el plugin
register_activation_hook(__FILE__, 'xmlrpc_disable_activate');

// Hook para desactivar el plugin
register_deactivation_hook(__FILE__, 'xmlrpc_disable_deactivate');

// Función para agregar las reglas al archivo .htaccess
function xmlrpc_disable_activate() {
    $rules = "<files xmlrpc.php>\n";
    $rules .= "Order Allow,Deny\n";
    $rules .= "Deny from all\n";
    $rules .= "</files>\n";

    $htaccess_path = ABSPATH . '.htaccess';

    if (is_writable($htaccess_path)) {
        $htaccess_content = file_get_contents($htaccess_path);

        if (strpos($htaccess_content, '<files xmlrpc.php>') === false) {
            file_put_contents($htaccess_path, $rules, FILE_APPEND);
        }
    }
}

// Función para eliminar las reglas del archivo .htaccess
function xmlrpc_disable_deactivate() {
    $htaccess_path = ABSPATH . '.htaccess';

    if (is_writable($htaccess_path)) {
        $htaccess_content = file_get_contents($htaccess_path);
        $htaccess_content = str_replace("<files xmlrpc.php>\nOrder Allow,Deny\nDeny from all\n</files>\n", '', $htaccess_content);

        file_put_contents($htaccess_path, $htaccess_content);
    }
}

