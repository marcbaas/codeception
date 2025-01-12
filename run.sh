#!/usr/bin/env bash

# Start Selenium Server
#nohup java -jar /c/Users/marcb/bin/selenium-server-4.27.0.jar standalone --port 4444
nohup ./selenium.sh 1>tests/_output/stdout.txt 2>tests/_output/stderr.txt &

sleep 2

# Run Codeception Tests
codecept run --steps

sleep 1