#!/bin/sh
set -e

/etc/init.d/cron start
# first arg is `-f` or `--some-option`
if [ "${1#-}" != "$1" ]; then
	set -- apache2-foreground "$@"
fi
exec "$@"