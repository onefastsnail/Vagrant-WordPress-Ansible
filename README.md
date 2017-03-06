# Vagrant WordPress Ansible

This project was created for me to spin up an Ubuntu 16.04 distro inside a Vagrant VM.

The general idea was to exeriment with some Ansible playbooks and i thought Vagrant would be a nice quick cheap way to do so.

For the Ansible playbook magic please check [here](/ansible/README.md).

## Requirements
1. [Vagrant](https://www.vagrantup.com/docs/installation/)
2. [Virtual Box](https://www.virtualbox.org/wiki/Downloads)
3. Beer and pizza :)

## Usage
1. Within this project root run `vagrant up --provision`
2. Add `192.168.50.4 test.vm` to your hosts file for the test project
3. Visit [http://test.vm](http://test.vm)

## Notes
* This branch allows multiple sites to run side by side using NGINX vars to create a dynamic domain naming convention for document root paths.