#! /bin/bash

docker run -it --rm -v "$PWD"/scripts:/usr/src/myapp -w /usr/src/myapp --user $(id -u):$(id -g) openjdk:8-jre-alpine javac "$@"

docker run -it --rm -v "$PWD"/scripts:/usr/src/myapp -w /usr/src/myapp --user $(id -u):$(id -g) openjdk:8-jre-alpine java "$@"