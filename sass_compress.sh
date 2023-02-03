#!/bin/sh

# Make sure you have `sass` executable in your path.

if [[ "$OSTYPE" == "linux-gnu"* ]]; then
	sass --style=compressed scss:assets/css
else
	sass.bat --style=compressed scss:assets/css
fi
