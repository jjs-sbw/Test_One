#!/bin/bash
# setup_project.cmd
# setup the required php packages for this project
# Joseph Simpson

cd `dirname $0`

php ./composer.phar -v -o install
