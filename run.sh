#!/usr/bin/env bash

if [ $# -eq 0 ]
  then
    echo ""
    echo "No arguments supplied"
    echo "Please specify a test to run"
    echo "Usually the command looks like this:"
    echo "./run.sh tests/Acceptance/FirstCest.php"
    echo ""
  else
    # Run Codeception Tests
    codecept clean
    codecept build
    php vendor/codeception/codeception/codecept run $1 --steps
fi

sleep 1