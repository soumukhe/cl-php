
# cisco Live PHP frontend template with php-ssh2 and php-phpseclib-net-ssh2 

```
Steps:
-----
sudo -i
apt-get update && apt-get upgrade -y
echo net.ipv4.ip_forward=1 >> /etc/sysctl.conf
sysctl -p
sudo sysctl --system
exit
sudo apt install docker.io -y
sudo systemctl start docker
sudo systemctl enable docker
sudo groupadd docker
sudo usermod -aG docker $USER
exit # and ssh back in for this to work
docker --version
sudo apt install docker-compose -y
git clone https://github.com/soumukhe/cl-php.git  #  sudo apt install git if needed
cd aws-aci-lb-ec2-2
docker-compose up --build -d   or simply docker-compose up -d
browse https to the public ec1IP:9002
```
