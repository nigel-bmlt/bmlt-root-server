<?php
/*
    This file is part of the Basic Meeting List Toolbox (BMLT).

    Find out more at: https://bmlt.app

    BMLT is free software: you can redistribute it and/or modify
    it under the terms of the MIT License.

    BMLT is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    MIT License for more details.

    You should have received a copy of the MIT License along with this code.
    If not, see <https://opensource.org/licenses/MIT>.
*/
defined('BMLT_EXEC') or define('BMLT_EXEC', 1);
require_once(dirname(dirname(dirname(__FILE__))).'/server/config/get-config.php');

// We only do this if the capability has been enabled in the auto-config file.
if (isset($g_enable_semantic_admin) && ($g_enable_semantic_admin == true)) {
    require_once(dirname(dirname(dirname(__FILE__))).'/server/c_comdef_server.class.php');

    /***************************************************************************************************************
    ************************************************* MAIN CONTEXT *************************************************
    ***************************************************************************************************************/

    $http_vars = array_merge($_GET, $_POST);

    // Create an HTTP path to our XML file. We build it manually, in case this file is being used elsewhere, or we have a redirect in the domain.
    // We allow it to be used as HTTPS.
    $url_path = GetURLToMainServerDirectory().'local_server/server_admin/xml.php';
    $lang_enum = '';

    // We use a cookie to store the language pref.
    $lang_enum = request()->cookie('bmlt_admin_lang_pref', $lang_enum);

    if (isset($http_vars['lang_enum']) && $http_vars['lang_enum']) {
        $lang_enum = $http_vars['lang_enum'];
    }

    $http_vars['lang_enum'] = $lang_enum;       // Quick and dirty way to ensure that this gets properly propagated.

    if ($lang_enum) {
        cookie()->queue('bmlt_admin_lang_pref', $lang_enum, 60 * 24 * 365);
    }

    require_once(dirname(dirname(dirname(__FILE__))).'/server/shared/classes/comdef_utilityclasses.inc.php');
    require_once(dirname(dirname(__FILE__)).'/db_connect.php');

    DB_Connect_and_Upgrade();

    $server = c_comdef_server::MakeServer();

    if ($server instanceof c_comdef_server) {
        $user_obj = $server->GetCurrentUserObj();
        if (!($user_obj instanceof c_comdef_user) || $user_obj->GetUserLevel() == _USER_LEVEL_DISABLED || $user_obj->GetUserLevel() == _USER_LEVEL_SERVER_ADMIN || $user_obj->GetID() == 1) {
            c_comdef_LogoutUser();
            die('<h1>NOT AUTHORIZED</h1>');
        }

        // If everything is OK, then we actually include the class, instantiate the object, and process the request.
        if (isset($http_vars['admin_action']) && $http_vars['admin_action']) {   // Must have an admin_action.
            require_once(dirname(__FILE__).'/c_comdef_admin_xml_handler.class.php');

            $handler = new c_comdef_admin_xml_handler($http_vars, $server);

            if ($handler instanceof c_comdef_admin_xml_handler) {
                $ret = $handler->process_commands();  // Do what you do so well...

                if (preg_match('|^<\?xml|', $ret)) {   // Only output an XML header is we are actually returning XML.
                    header('Content-Type:application/xml; charset=UTF-8');
                }

                if (zlib_get_coding_type() === false) {
                    ob_start("ob_gzhandler");
                } else {
                    ob_start();
                }
                echo ( $ret );
                ob_end_flush();
            } else {
                $ret = '<h1>ERROR</h1>';
            }

            // Just making sure...
            unset($handler);
            unset($server);
            unset($http_vars);
        } else {
            die('<h1>BAD ADMIN ACTION</h1>');
        }
    } else {
        die('<h1>NO SERVER!</h1>');
    }
}
