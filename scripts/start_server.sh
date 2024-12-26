#!/bin/bash
echo "Starting Apache server..."
sudo systemctl start httpd
sudo systemctl enable httpd
