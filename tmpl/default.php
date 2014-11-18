<?php
/**
* @package		gramFeed Module
* @author		Lance Hammond
* @copyright	Copyright (C) 2014 Lance Hammond. All Rights Reserved
* @license		http://www.gnu.org/licenses/gpl-3.0.html
**/

//no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

$document = & JFactory::getDocument();
$document->addScript(JUri::base() . 'modules/mod_gramfeed/js/instafeed.min.js');
$document->addStyleSheet(JUri::base() . 'modules/mod_gramfeed/css/gramfeed.css');

$tagName = $params->get('tagName');
$clientId = $params->get('clientId');
$userId = $params->get('userId');
$accessToken = $params->get('accessToken');
$limit = $params->get('limit');
$imageSize = $params->get('imageSize');

?>

<ul id="instafeed" class="gramfeed-wrapper"></ul>
<script type="text/javascript">
    <?php if($params->get('feedType')=='hashtag') { ?>
        var feed = new Instafeed( {
            get: 'tagged',
            tagName: '<?php echo $tagName; ?>',
            clientId: '<?php echo $clientId; ?>',
    <?php } else { ?>
        var userFeed = new Instafeed( {
            get: 'user',
            userId: <?php echo $userId; ?>,
            accessToken: '<?php echo $accessToken; ?>',
    <?php } ?>

		limit: '<?php echo $limit; ?>',
		template: '<li class="gramfeed-thumb" style="width:<?php echo $imageSize; ?>px;height:<?php echo $imageSize; ?>px;"><a href="{{link}}" style="background-image:url(/{{image}});" data-title="{{caption}}"></a></li>'
	});

	<?php if($params->get('feedType')=='hashtag') { ?>
        feed.run();
	<?php } else { ?>
        userFeed.run();
    <?php } ?>
</script>
