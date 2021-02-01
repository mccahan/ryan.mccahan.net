#!/bin/bash

rsync -rav --exclude .git --exclude node_modules --exclude data . root@ftp.mccahan.net:/var/www/html/
