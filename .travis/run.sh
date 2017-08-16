#!/bin/bash
COMMAND="docker-compose -f .travis/docker-compose.yml --project-directory ."
$COMMAND up -d
sleep 15