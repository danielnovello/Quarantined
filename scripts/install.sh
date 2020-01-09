#!/bin/bash

# Quarantined controller
CTL="${BASEURL}index.php?/module/Quarantined/"

# Get the scripts in the proper directories
"${CURL[@]}" "${CTL}get_script/Quarantined.sh" -o "${MUNKIPATH}preflight.d/Quarantined.sh"

# Check exit status of curl
if [ $? = 0 ]; then
	# Make executable
	chmod a+x "${MUNKIPATH}preflight.d/Quarantined.sh"

	# Set preference to include this file in the preflight check
	setreportpref "Quarantined" "${CACHEPATH}Quarantined.txt"

else
	echo "Failed to download all required components!"
	rm -f "${MUNKIPATH}preflight.d/Quarantined.sh"

	# Signal that we had an error
	ERR=1
fi
