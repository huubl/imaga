#!/bin/bash

echo "Producing a Minor version";

gulp || exit 1

gulp --production=minor || exit 1

gulp || exit 1
