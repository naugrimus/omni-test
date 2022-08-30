#!/usr/bin/env bash

USER_ID=`id -u`
GROUP_ID=`id -g`

if ! grep "^[^:]*:x:$USER_ID:.*$" /etc/passwd > /dev/null 2>/dev/null; then
    echo "omni:x:$USER_ID:$GROUP_ID:bmtg:/home/omni:/bin/bash" >> /etc/passwd
    export HOME="/home/omni"
    sudo mkdir -p /home/omni

    if ! grep "^[^:]*:x:$GROUP_ID:$" /etc/group > /dev/null 2>/dev/null; then
        echo "bmtg:x:$GROUP_ID:" >> /etc/group
    fi

    sudo chown -R "$USER_ID:$GROUP_ID" /home/omni
fi

sudo chmod go-w /etc/passwd
sudo chmod go-w /etc/group

exec "$@"
