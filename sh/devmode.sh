#!/bin/bash

# start mySQL
sudo systemctl start mysql

# start phpMyAdmin
sudo systemctl start rl-phpmyadmin

# func to start docker
start_docker() {
    sudo systemctl start docker
}

# func to display help
display_help() {
    echo "Usage: $0 [options]"
    echo "Options:"
    echo "  -d, --docker   Start Docker"
    echo "  -h, --help     Display this help message"
}

# parse options
for arg in "$@"; do
    case $arg in
        --docker | -d)
            start_docker
            ;;
        --help | -h)
            display_help
            exit 0
            ;;
        *)
            echo "Unknown option: $arg"
            echo "Display help with: $0 --help"
            exit 1
            ;;
    esac
done
