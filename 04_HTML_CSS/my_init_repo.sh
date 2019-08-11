#!/bin/bash

if [ "$#" -lt 1 ]; then
    exit
fi

if [ -d "$1" ]; then
    exit
fi

blih -u john.mauduit@coding-academy.fr repository create "$1"
if [ $? -ne 0 ]; then
    exit
fi
blih -u john.mauduit@coding-academy.fr repository setacl "$1" ramassage-tek r
if [ $? -ne 0 ]; then
    exit
fi
blih -u john.mauduit@coding-academy.fr repository setacl "$1" gecko r
if [ $? -ne 0 ]; then
    exit
fi
git clone git@git.epitech.eu:/john.mauduit@coding-academy.fr/"$1"
