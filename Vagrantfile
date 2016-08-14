$script = <<SCRIPT
puppet resource package php ensure=installed
puppet resource service httpd ensure=running enable=true
SCRIPT

Vagrant.configure("2") do |config|
  config.vm.box = "genebean/centos-7-puppet"
  config.vm.provision "shell", inline: $script
  config.vm.network "forwarded_port", guest: 80, host: 8080
  config.vm.synced_folder "conf/", "/etc/httpd/conf"
  config.vm.synced_folder "src/", "/var/www/html"
end
