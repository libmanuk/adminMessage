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
class adminMessagePlugin extends Omeka_Plugin_AbstractPlugin
{
  
    public $_hooks = array('admin_items_show');
    



    public function hookAdminItemsShow($args)
    {
        $filename = strip_formatting(metadata('item', array('Dublin Core', 'Identifier')));
        echo "<p><span style=\"color:green;\">NOTE</span>:  <h5>Archival image files for this site are stored offline on the SCRC King file server.</h5> </p>";
        echo "<p style=\"background:#fff;padding:15px;\">\\d40.net.uky.edu\king\\2004av001_Lexington_Herald_Leader_Scan_Archive\\$filename</p>";
    }
  
}

?>
