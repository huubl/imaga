#!/bin/bash

echo "Producing a Major version";

gulp || exit 1

gulp --production=major || exit 1

gulp || exit 1
