#!/bin/sh

#php command line
if ! type "php" > /dev/null; then
	sudo apt-get install php5-cli
fi

#Perl XML parser for html2latex
sudo cpan -i XML::Simple

cd ./html2latex-1.1/HTML
perl Makefile.PL
sudo make install

cd ../../..



sudo mkdir /etc/Marktex
sudo cp -R ./Marktex/* /etc/Marktex
sudo chmod -R +rwx /etc/Marktex/html2latex-1.1/
#sudo chmod +rwx /etc/Marktex/html2latex-1.1/*
sudo ln -s /etc/Marktex/marktex /usr/bin/marktex