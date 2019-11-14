#!/bin/bash

echo "Producing a Patch version";

gulp --production=patch || exit 1

gulp || exit 1
