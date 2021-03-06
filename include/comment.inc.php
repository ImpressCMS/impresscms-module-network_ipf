<?php
/**
 * Comment include file
 *
 * File holding functions used by the module to hook with the comment system of ImpressCMS
 *
 * @copyright	Madfish (Simon Wilkinson)
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
 * @since		1.0
 * @author		Madfish (Simon Wilkinson) <simon@isengard.biz>
 * @package		network
 * @version		$Id$
 */

function network_com_update($item_id, $total_num) {
    $network_post_handler = icms_getModuleHandler("post", basename(dirname(dirname(__FILE__))), "network");
    $network_post_handler->updateComments($item_id, $total_num);
}

function network_com_approve(&$comment) {
    // notification mail here
}