#!/bin/bash

echo "Watching project files for changes";

tput bold; echo "Running: gulp"
tput sgr0
gulp || exit 1

tput bold; echo "Running: gulp watch"
tput sgr0
gulp watch || exit 1

# #!/bin/bash
# currentver="$(npm -v)"
# requiredver="4.5.0"
#  if [ "$(printf '%s\n' "$requiredver" "$currentver" | sort -V | head -n1)" = "$requiredver" ]; then
#         echo "Greater than or equal to 5.0.0"
#  else
#         echo "Less than 5.0.0"
#  fi
