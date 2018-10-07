Vagrant.configure("2") do |config|
  config.vm.box = "centos/7"

  config.vm.define "master" do |master|
    master.vm.box = "bento/centos-7"
    master.vm.network "private_network", ip: "192.168.33.20"
    master.vm.synced_folder "./data/master", "/vagrant_data"
  end

  config.vm.define "slave" do |slave|
    slave.vm.box = "bento/centos-7"
    slave.vm.network "private_network", ip: "192.168.33.21"
    slave.vm.synced_folder "./data/slave", "/vagrant_data"
  end
end
