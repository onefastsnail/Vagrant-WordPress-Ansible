# Optimized for Vagrant 1.7 and above.
Vagrant.require_version ">= 1.7.0"

Vagrant.configure(2) do |config|

  config.vm.box = "ubuntu/xenial64"

  config.vm.synced_folder "sites", "/sites", type: "nfs",  mount_options: ['rw', 'vers=3', 'tcp', 'fsc' ,'actimeo=2']

  #config.vm.synced_folder ".", "/sites", type: "rsync", rsync__exclude: [".git/", "node_modules/", "data/"], rsync__auto: true

  config.vm.provider "virtualbox" do |v|
    v.customize ["modifyvm", :id, "--ioapic", "on"]
    v.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
    v.customize ["modifyvm", :id, "--natdnsproxy1", "on"]
  end

  # Disable the new default behavior introduced in Vagrant 1.7, to
  # ensure that all Vagrant machines will use the same SSH key pair.
  # See https://github.com/mitchellh/vagrant/issues/5005
  config.ssh.forward_agent = true

  config.vm.provision "ansible" do |ansible|
    ansible.verbose = "vv"
    ansible.playbook = "ansible/provision.yml"
  end

  #config.vm.network "forwarded_port", guest: 80, host: 8080
  
  config.vm.network "private_network", ip: "192.168.50.4"
end