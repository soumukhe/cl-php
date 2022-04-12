
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
   for example for Student 2 the file should look like this:
     #!/bin/bash
     # Please change the  2nd part of the sed parameters to the new studint information
     sed -i "s/student01/student02/g" docker-compose.yaml
     sed -i "s/9001/9002/g" docker-compose.yaml
     sed -i "s/Student02/student07/g" ./html/index.php
     sed -i "s/is 1/is 2/g" ./html/index.php
     sed -i "s/vrf-102/vrf-107/g" ./html/index.php
     sed -i "s/201./202./g" ./html/index.php
./newstudent.sh
docker-compose up -d

```




```

 
