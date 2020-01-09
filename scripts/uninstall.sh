#!/bin/bash

# Remove Quarantined script
rm -f "${MUNKIPATH}preflight.d/Quarantined.sh"

# Remove Quarantined.txt file
rm -f "${MUNKIPATH}preflight.d/cache/Quarantined.txt"
