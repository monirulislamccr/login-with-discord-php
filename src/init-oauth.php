<?php

$discord_url = "https://discord.com/api/oauth2/authorize?client_id=1171393378571800586&redirect_uri=https%3A%2F%2Flocalhost%2Fpractice%2Flogin-with-discord-php%2Fsrc%2Fprocess-oauth.php&response_type=code&scope=identify%20guilds%20guilds.join";
header("Location: $discord_url");
exit();

?>