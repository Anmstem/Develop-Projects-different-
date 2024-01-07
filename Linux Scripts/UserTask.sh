#!/bin/bash

if [ sudo findmnt -rno SOURCE "$1" > /dev/sdb1 ]; then
echo "Device is mounted" && sudo umount /dev/sdb1
else echo "Device is not mounted"
fi

if [ sudo findmnt -rno SOURCE "$1" > /dev/sdb2 ]; then
echo "Device is mounted" && sudo umount /dev/sdb2
else echo "Device is not mounted"
fi

echo "g
w" | sudo fdisk /dev/sdb1

echo "g
w" | sudo fdisk /dev/sdb2

echo "d
1
d
w" | sudo fdisk /dev/sdb

echo "n
p
1
2048
+1024M
w" | sudo fdisk /dev/sdb

echo "y" | sudo mkfs.ext4 /dev/sdb1

if [ -d '/mnt/partNew' ]; then
echo "Directory here"
else 
sudo mkdir -p /mnt/partNew && sudo mount /dev/sdb1 /mnt/partNew
fi

if [ -f "/mnt/partNew/hw" ]; then
echo "File here."
else
sudo chmod 777 /mnt/partNew && cd /mnt/partNew && touch hw && whoami >> hw

fi

sudo lshw >> hw 
tar -cvf hack.tar hw && sudo mv hack.tar $HOME/Desktop


$SHELL





