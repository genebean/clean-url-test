$script = <<SCRIPT
puppet resource package php ensure=installed
puppet resource package rsync ensure=installed
rsync -rv /vagrant/conf/ /etc/httpd/conf
rsync -rv --delete /vagrant/src/ /var/www/html
puppet resource service httpd ensure=running enable=true
SCRIPT

Vagrant.configure("2") do |config|
  config.vm.box = "genebean/centos-7-puppet"
  config.vm.provision "shell", inline: $script
  config.vm.network "forwarded_port", guest: 80, host: 8080
end
