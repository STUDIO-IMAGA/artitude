#!/bin/bash

echo "Producing a Major version";

gulp --production=major || exit 1

gulp || exit 1
