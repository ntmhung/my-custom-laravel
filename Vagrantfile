# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|
  config.vm.box = "centos6.7"
  # config.vm.network "forwarded_port", guest: 80, host: 8081
  # config.vm.provision :shell, path: "bootstrap.sh"
  config.vm.network "private_network", ip: "192.168.33.14"
 end

