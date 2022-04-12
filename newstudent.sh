#!/bin/bash
# Please change the  2nd part of the sed parameters to the new studint information
sed -i "s/student01/student02/g" docker-compose.yaml
sed -i "s/9001/9002/g" docker-compose.yaml
sed -i "s/Student01/student02/g" ./html/index.php
sed -i "s/is 1/is 2/g" ./html/index.php
sed -i "s/vrf-101/vrf-102/g" ./html/index.php
sed -i "s/201./202./g" ./html/index.php
