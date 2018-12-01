Vagrant.configure("2") do |config|
  config.vm.box = "centos/7"

  config.vm.define "master" do |master|
    master.vm.box = "bento/centos-7"
    master.vm.network "private_network", ip: "192.168.33.20"
    master.vm.synced_folder "./data/master", "/vagrant_data"
  end

  config.vm.define "slave1" do |slave1|
    slave1.vm.box = "bento/centos-7"
    slave1.vm.network "private_network", ip: "192.168.33.21"
    slave1.vm.synced_folder "./data/slave1", "/vagrant_data"
  end

  config.vm.define "slave2" do |slave2|
    slave2.vm.box = "bento/centos-7"
    slave2.vm.network "private_network", ip: "192.168.33.22"
    slave2.vm.synced_folder "./data/slave2", "/vagrant_data"
  end

  config.vm.define "slave3" do |slave3|
    slave3.vm.box = "bento/centos-7"
    slave3.vm.network "private_network", ip: "192.168.33.23"
    slave3.vm.synced_folder "./data/slave3", "/vagrant_data"
  end
end
