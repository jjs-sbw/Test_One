#!/bin/bash
# install_composer.cmd
# download and install composer executable command
# Joseph Simpson 

cd `dirname $0`
curl -s https://getcomposer.org/installer | php

