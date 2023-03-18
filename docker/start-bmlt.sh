cp /tmp/auto-config.inc.php /var/www/html/auto-config.inc.php

sed -i '/gkey/d' /var/www/html/auto-config.inc.php
sed -i '/dbName/d' /var/www/html/auto-config.inc.php
sed -i '/dbUser/d' /var/www/html/auto-config.inc.php
sed -i '/dbPassword/d' /var/www/html/auto-config.inc.php
sed -i '/dbServer/d' /var/www/html/auto-config.inc.php
sed -i '/dbPrefix/d' /var/www/html/auto-config.inc.php
sed -i '/do_not_force_port/d' /var/www/html/auto-config.inc.php

if [ ! -z $GKEY ]
then
    echo "\$gkey = \"$GKEY\";" >> /var/www/html/auto-config.inc.php
fi

if [ ! -z $DB_DATABASE ]
then
    echo "\$dbName = \"$DB_DATABASE\";" >> /var/www/html/auto-config.inc.php
fi

if [ ! -z $DB_USER ]
then
    echo "\$dbUser = \"$DB_USER\";" >> /var/www/html/auto-config.inc.php
fi

if [ ! -z $DB_PASSWORD ]
then
    echo "\$dbPassword = \"$DB_PASSWORD\";" >> /var/www/html/auto-config.inc.php
fi

if [ ! -z $DB_HOST ]
then
    echo "\$dbServer = \"$DB_HOST\";" >> /var/www/html/auto-config.inc.php
fi

if [ ! -z $DB_PREFIX ]
then
    echo "\$dbPrefix = \"$DB_PREFIX\";" >> /var/www/html/auto-config.inc.php
fi

if [ ! -z "$DO_NOT_FORCE_PORT" -a "$DO_NOT_FORCE_PORT" == "true" ]
then
    echo "\$g_do_not_force_port = true;" >> /var/www/html/auto-config.inc.php
fi

if [ ! -z "$NEW_UI_ENABLED" -a "$NEW_UI_ENABLED" == "true" ]
then
    echo "\$new_ui_enabled = true;" >> /var/www/html/auto-config.inc.php
fi

if [ "${MEETING_STATES_ON}" = "true" ]
then
  echo "\$meeting_states_and_provinces = array(\"NSW\",\"SA\",\"VIC\",\"NY\");" >> /var/www/html/auto-config.inc.php
fi

if [ "${AUTO_GEOCODING_ON}" = "false" ]
then
  echo "\$auto_geocoding_enabled = false;" >> /var/www/html/auto-config.inc.php
else
  echo "\$auto_geocoding_enabled = true;" >> /var/www/html/auto-config.inc.php
fi

sed -i "s/<VirtualHost \*:8000>/<VirtualHost \*:$BMLT_PORT>/g" /etc/apache2/sites-enabled/000-default.conf 
sed -i "s/<VirtualHost \*:8000>/<VirtualHost \*:$BMLT_PORT>/g" /etc/apache2/sites-available/000-default.conf 
sed -i "s/Listen 8000/Listen $BMLT_PORT/g" /etc/apache2/ports.conf 

apachectl -D FOREGROUND
