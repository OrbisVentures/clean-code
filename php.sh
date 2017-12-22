#! /bin/bash
docker run -it --rm -v "$PWD"/scripts:/usr/src/myapp -w /usr/src/myapp --user $(id -u):$(id -g) php:7.1-cli-alpine php "$@"