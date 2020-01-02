#!/bin/bash

echo "Producing a Patch version";

gulp || exit 1

gulp --production=patch || exit 1

gulp || exit 1
