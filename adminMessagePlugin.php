<?php
/**
 * adminMessage
 * 
 * @copyright Copyright 2018 Eric C. Weig 
 * @license http://opensource.org/licenses/MIT MIT
 */
/**
 * The adminMessage plugin.
 * 
 * @package Omeka\Plugins\adminMessage
 */

 // Define Constants.
 define('ADMIN_MESSAGE', 'Warning, this is just a default generic statement for testing purposes.  Use this space to input your custom Administrative Message.');

class adminMessagePlugin extends Omeka_Plugin_AbstractPlugin
{
  
    public $_hooks = array(
     'install',
     'uninstall',
     'admin_items_show',
     'define_routes',
		   'config',
     'config_form'
    );
    
	public function hookInstall()
    {
        set_option('admin_message', ADMIN_MESSAGE);    
    }
    
    public function hookUninstall()
    {
        delete_option('admin_message'); 
    }
	
	function hookDefineRoutes($args)
    {
    $router = $args['router'];

    }
	
    public function hookConfigForm() 
    {
        include 'config_form.php';
    }
    
    public function hookConfig($args)
    {
        $post = $args['post'];
        set_option('admin_message',$post['admin_message']);
    }

    public function hookAdminItemsShow($args)
    {
        echo "<p><span style=\"color:green;\">NOTE</span>:<?php echo get_option('admin_message'); // HTML ?></p>";
    }
  
}

?>
