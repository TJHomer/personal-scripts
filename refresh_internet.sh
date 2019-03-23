#!/bin/bash
exec &> refreshdata.txt

cd $HOME

wname=`/sbin/iwgetid -r`
connection = "url" #insert url that flashes when you click "connect"

if [ $wname = "internet-name" ];
then
        curl -s 
else
        echo "not connected to public wifi" 
fi


