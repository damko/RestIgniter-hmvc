#!/bin/bash
#Merges  projects "CI2+HMVC+SPARKS"
#
#Installation steps:
# 1) downloads CI2 stable version (2.0.3 @2011.09.21)
# 2) downloads HMVC stable version (n.d. @2011.09.21)
# 3) downloads SPARKS stable version (0.0.5 @2011.09.21)
# 4) uncompress files
# 5) moves files from tmp to the right place
# 6) cleans up
# 7) fixes configuration

echo 'Be sure to comment the exit here below to use this script'
#exit 

ROOT=`pwd`

# clean up
rm -fR application 2> /dev/null
rm -fR sparks 2> /dev/null
rm -fR system 2> /dev/null
rm -fR tools 2> /dev/null
rm -fR user_guide 2> /dev/null
rm -fR tmp 2> /dev/null
rm *.php 2> /dev/null

echo 'Downloading the code...'
cd $ROOT
mkdir tmp
cd tmp

echo 
echo '# Downloading the source'
wget -c https://github.com/EllisLab/CodeIgniter/zipball/v2.0.3 -O ci2.zip
wget -c https://bitbucket.org/wiredesignz/codeigniter-modular-extensions-hmvc/get/d28d24e26397.zip -O hmvc.zip
wget -c http://getsparks.org/static/install/spark-manager-0.0.5.zip -O spark.zip

cd $ROOT

echo 
echo '# Uncompress CI2 v.2.0.3'
zipfile='tmp/ci2.zip'
#get directory name
zipdir=$(unzip -t $zipfile | awk {'print $2'}| cut -d/ -f1 |head -n 4 |tail -n 1)
unzip $zipfile -d $ROOT
mv $zipdir/* .
rm -fR $zipdir

cd $ROOT

echo 
echo '# Adding autocomplete support for Eclipse'
zipfile='eclipse_autocomplete.zip'
unzip $zipfile -d $ROOT/application/libraries/

cd $ROOT

echo 
echo '# Uncompress HMVC'
zipfile='tmp/hmvc.zip'
#get directory name
zipdir=$(unzip -t $zipfile | awk {'print $2'}| cut -d/ -f1 |head -n 4 |tail -n 1)
unzip $zipfile -d tmp
mv tmp/$zipdir/core/* $ROOT/application/core
mv tmp/$zipdir/third_party/* $ROOT/application/third_party/
rm -fR tmp/$zipdir

cd $ROOT

echo 
echo '# Uncompress Spark'
mkdir tools
zipfile='tmp/spark.zip'
#get directory name
zipdir=$(unzip -t $zipfile | awk {'print $2'}| cut -d/ -f1 |head -n 4 |tail -n 1)
unzip $zipfile -d tools

cd $ROOT

echo 
echo '# Installing Sparks'
php tools/spark install -v1.0.0 example-spark 
php tools/spark install -v0.7.0 fire_log 
php tools/spark install -v2.0.0 restclient 

echo
echo '# Renaming MX_Loader and MX_Modules'
mv $ROOT/application/third_party/MX/Loader.php $ROOT/application/third_party/MX/Loader_MX_ori.php
mv $ROOT/application/third_party/MX/Modules.php $ROOT/application/third_party/MX/Modules_MX_ori.php

#update config.php
echo 
echo '# Update config.php'
cd $ROOT/application/config/
sed -i "s/\$config\['log_threshold'\]\ =\ 0/\$config\['log_threshold'\]\ =\ 4/g" config.php
sed -i "s/\$route\['default_controller'\]\ =\ \"welcome\"/\$route\['default_controller'\]\ =\ 'test'/g" routes.php

cd $ROOT
mkdir $ROOT/application/modules

echo 
echo '# Permissions'
chmod 777 $ROOT/application/logs/

#clean up
rm -fR tmp
echo "

#################################################################################
# Manual configuration !!!!
#################################################################################
	
CHANGE THE OWNERSHIP FOR FILES ACCORDINGLY TO YOUR NEEDS


"
