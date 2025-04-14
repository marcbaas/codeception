#!/usr/bin/env bash

UNAME=$( command -v uname)
USERNAME=$(whoami)

printf 'OS detected: ';

case $( "${UNAME}" | tr '[:upper:]' '[:lower:]') in
  linux*)
    printf 'Linux\n'
    java -jar /home/"${USERNAME}"/bin/selenium-server-4.31.0.jar standalone --port 4444
    ;;
  darwin*)
    printf 'MacOS\n'
    java -jar /Users/"${USERNAME}"/bin/selenium-server-4.31.0.jar standalone --port 4444
    ;;
  msys*|cygwin*|mingw*)
    # or possible 'bash on windows'
    printf 'Bash on Windows\n'
    java -jar /c/Users/"${USERNAME}"/bin/selenium-server-4.31.0.jar standalone --port 4444
    ;;
  nt|win*)
    printf 'Windows\n'
    ;;
  *)
    printf 'unknown\n'
    printf 'This script cannot continue.'
    ;;
esac
