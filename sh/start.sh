#!/bin/bash

if [ -z "$1" ]; then
      gnome-terminal
else
      open "$1"
fi

