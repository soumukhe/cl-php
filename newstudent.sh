#!/bin/bash
# Please change the  2nd part of the sed parameters to the new studint information
sed -i "s/student01/student07/g" docker-compose.yaml
sed -i "s/9001/9007/g" docker-compose.yaml
sed -i "s/Student01/student07/g" ./html/index.php
sed -i "s/is 1/is 7/g" ./html/index.php
sed -i "s/vrf-101/vrf-107/g" ./html/index.php
sed -i "s/201./207./g" ./html/index.php
