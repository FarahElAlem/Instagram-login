<?php

require_once('instagram-api-settings.php');

?>
<html>
<head></head>

<body>
	<a href="<?= 'https://api.instagram.com/oauth/authorize/?client_id=' . INSTAGRAM_CLIENT_ID . '&redirect_uri=' . urlencode(INSTAGRAM_REDIRECT_URI) . '&response_type=code&scope=user_profile,user_media' ?>">Login with Instagram ttt</a>
</body>

</html>