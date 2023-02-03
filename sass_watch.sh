#!/bin/sh

# Make sure you have `sass` executable in your path.

if [[ "$OSTYPE" == "linux-gnu"* ]]; then
	sass --no-source-map --watch scss:assets/css
else
	sass.bat --no-source-map --watch scss:assets/css
fi
