# Recipe: Download Mariadb and troubleshoot on Ubuntu
---
#### <center> Andrew Durham
---
## Overview
MariaDB is a community-developed fork of the MySQL RDMS. It is a lightweight and speedier alternative to MySQL. This recipe will show you how to install MariaDB on Ubuntu 22.04. It will also show you how to troubleshoot issues that may arise during the installation process.

## Requirements
1. Parallels (or equivalent virtual product)
2. Linux server running Ubuntu 22.04

---

## 7 steps

### 1. Check the version of MySQL/MariaDB

`
dpkg -l | grep -E 'mysql|mariadb'
`

### 2. Remove conflicting versions

Observe the list and remove conflicting versions of MySQL/MariaDB

`
apt purge mysql-common
`

### 2. Install MariaDB Database Server

`
sudo apt-get install mariadb-server mariadb-client
`

Commands to start, stop, and check mariadb status:

`
sudo systemctl enable mariadb.service
`

`
sudo systemctl start mariadb.service
`

`
sudo systemctl stop mariadb.service
`

Run the following command to secure the mariadb server:

`
sudo mysql_secure_installation
`

### 3. Potential Issue with unmet dependencies

If the following error occurs:

`
The following packages have unmet dependencies:
 mariadb-server : Depends: mariadb-server-10.3 (>= 1:10.3.31-0ubuntu0.22.04.1) but it is not going to be installed
E: Unable to correct problems, you have held broken packages.
`

Try Step 2 again, and if that doesn't work, try the following:

Remove the mysql folder after backing it up:

`
cp -r /etc/mysql /var/lib/mysql ~/
`

`
rm -rf /etc/mysql /var/lib/mysql
`

### 4. Potential problem with open dpkg 

If the following error occurs:

`
E: Could not get lock /var/lib/dpkg/lock-frontend - open (11: Resource temporarily unavailable)
`

Try the following:

`
sudo killall apt apt-get
`

Attempt to start mariadb again, if that fails, try the following with caution:

`
sudo rm /var/lib/apt/lists/lock
`

`
sudo rm /var/cache/apt/archives/lock
`

`
sudo rm /var/lib/dpkg/lock*
`

then reconfigure the packages:

`
sudo dpgk --configure -a
`

`
sudo apt update
`

### 5. Answer the installation questions 

When prompted, answer the questions as follows:

- Enter current password for root (enter for none): Press Enter
- Set root password? [Y/n]: Y
- New password: Enter a password
- Re-enter new password: Enter the same password
- Remove anonymous users? [Y/n]: Y
- Disallow root login remotely? [Y/n]: Y
- Remove test database and access to it? [Y/n]: Y
- Reload privilege tables now? [Y/n]: Y

### 6. Create user with privileges

Open the mariaDB prompt:

`
sudo mariadb
`

Create a new user:

`
GRANT ALL ON *.* TO 'admin'@'localhost' IDENTIFIED BY 'password' WITH GRANT OPTION;
`

Flush the privileges:

`
FLUSH PRIVILEGES;
`

Exit:

`
EXIT;
`

### 7. Confirm the mariadb service is running

Ensure it is running:

`
sudo systemctl start mariadb.service
`

Check the status:

`
sudo systemctl status mariadb.service
`

Should recieve the following output:

`
mariadb.service - MariaDB 10.1.48 database server
     Loaded: loaded (/lib/systemd/system/mariadb.service; enabled; vendor preset: enabled)
     Active: active (running) since Sat 2022-11-26 01:04:17 UTC; 35s ago
       Docs: man:mariadbd(8)
             https://mariadb.com/kb/en/library/systemd/
`