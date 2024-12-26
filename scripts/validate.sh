#!/bin/bash
echo "Validating application..."
STATUS=$(curl -o /dev/null -s -w "%{http_code}" http://localhost/contact-us.html)

if [ $STATUS -eq 200 ]; then
  echo "Application is running successfully."
  exit 0
else
  echo "Application validation failed."
  exit 1
fi
