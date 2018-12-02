#!/bin/sh

curl -X POST -H "X-ChatWorkToken: 1836539a486c7ad00b373bda4c341493" -d "body=reconfig%21&self_unread=0" "https://api.chatwork.com/v2/rooms/49058058/messages"

exit 0
