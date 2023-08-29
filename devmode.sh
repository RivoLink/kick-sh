#!/bin/bash

# start mySQL
sudo systemctl start mysql

# start phpMyAdmin
sudo systemctl start rl-phpmyadmin

# start docker
if [ "$1" == "--docker" ]; then
      sudo systemctl start docker
fi
