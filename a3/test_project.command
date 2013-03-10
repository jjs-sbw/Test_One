#!/bin/bash
# test_project.cmd
# run the project tests without code coverage
# Joseph Simpson

cd `dirname $0`

php vendor/bin/phpunit -c test/conf/phpunit.xml

read -p "Press any key to exit.."

