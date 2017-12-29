Vagrant.configure("2") do |config|
  config.vm.box = "centos7.1"
  config.vm.network "private_network", ip: "192.168.33.12"
  config.vm.provision "shell", run: "always", inline: "systemctl restart network.service"
end
