
# cisco Live PHP frontend template with php-ssh2 and php-phpseclib-net-ssh2 

```
Steps for Student 01:
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
mv cl-php.git cl-student01.php
cd cl-student01.php
docker-compose up --build -d   or simply docker-compose up -d
browse https <ip_of_host>:9001

Steps for additional Students:
-----------------------------
for student 2

cd 
mkdir cl-student02.php  && cl-student02
cp -a ../cl-student01.php/* .
vi the newstudent.sh script and change the 2nd part of the sed parameters for the new student
./newstudent.sh
docker-compose up -d

```




```

 
