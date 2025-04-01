#!/usr/bin/env bash

if [ $# -eq 0 ]
  then
    echo ""
    echo "No arguments supplied"
    echo "Please specify a test to run"
    echo ""
  else
    # Run Codeception Tests
    php vendor/codeception/codeception/codecept run $1 --steps
fi

sleep 1