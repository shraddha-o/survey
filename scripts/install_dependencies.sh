#!/bin/bash
echo "Installing dependencies..."
sudo yum update -y
sudo yum install -y php php-mysql httpd
