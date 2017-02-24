# Purpose

A simple PHP application for AWS Beanstalk testing.

# Dependency installation

	$ cd src
	$ composer install

# Local execution

	$ cd src/public
	$ php -S 127.0.0.1:8080

# AWS CodePipeline notes

- A custom AMI is required for the CodeBuild step containing:
	- PHP
	- git
	- composer
- Amazon does not provide a CodeBuild image with PHP nor yum.
- The official PHP Docker image does not provide git nor yum.

