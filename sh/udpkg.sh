#!/bin/bash

# about: unlock dpkg

# kill apt process
sudo killall apt apt-get

# remove the lock files
sudo rm -rf /var/lib/apt/lists/lock
sudo rm -rf /var/cache/apt/archives/lock
sudo rm -rf /var/lib/dpkg/lock*

# reconfigure the packages
sudo dpkg --configure -a

# update
sudo apt update
