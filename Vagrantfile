# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure(2) do |config|

  config.vm.box = "ubuntu/trusty64"
  config.vm.network "private_network", ip: "192.168.10.11"
  config.vm.hostname = "akela.dev"
  config.vm.synced_folder "./", "/var/akela/",:nfs => { :mount_options => ["dmode=777","fmode=777", true] }
  config.vm.provision "shell", inline: "/bin/bash /vagrant/provisioning/provision.sh"

  config.vm.provider "virtualbox" do |vb|
    vb.name = "Akela DevBox"
    vb.memory = "1024"
  end

end
