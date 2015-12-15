<?php

use \OCA\SpreedME\Helper\Helper;

$origin = Helper::getSpreedWebRtcOrigin();

script('spreedme', '../extra/static/config/OwnCloudConfig');
script('spreedme', '../extra/static/PostMessageAPI');
script('spreedme', 'fileselector');
style('spreedme', 'fileselector');

?>

<script data-shared-config='{"allowedPartners": "<?php echo $origin; ?>"}'></script>

<div id="debug"><b>Debug</b><br /></div>
