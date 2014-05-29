#!/bin/bash
mysql-ctl start

sleep 2
mysql -u$C9_USER -h$IP c9 <scw/database.sql

CONFIG=scw/config/database.php
echo "<?php " >$CONFIG
echo -ne "return array(\n\t'user' => '" >>$CONFIG
echo -ne $C9_USER >>$CONFIG
echo -ne "',\n\t'pass' => '',\n\t'name' => 'c9',\n\t'host' => '" >>$CONFIG
echo -ne $IP >>$CONFIG
echo -e "',\n);" >>$CONFIG
