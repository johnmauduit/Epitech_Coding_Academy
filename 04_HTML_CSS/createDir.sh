#!/bin/bash
 
for i in `seq 1 $1`;
    do
if [ $i -lt 10 ]
then
    mkdir -p ex_0$i 
else
    mkdir -p ex_$i
fi

done
