<div style="width:100%;float:left;clear:both;margin-bottom:50px;">
    <a href="https://github.com/pabloripoll?tab=repositories">
        <img
            style="width:150px;float:left;"
            src="https://pabloripoll.com/files/logo-light-100x300.png"/>
    </a>
</div>

# Prestashop 1.7 with PHP FPM 7.4

The objective of this repository is having a CaaS [Containers as a Service](https://www.ibm.com/topics/containers-as-a-service) to provide a start up application with the basic enviroment features to deploy a php service running with Nginx and PHP-FPM in a container for [Prestashop](https://prestashop.com) and another container with a MySQL database to follow the best practices on an easy scenario to understand and modify on development requirements.

The connection between container is as [Host Network](https://docs.docker.com/network/drivers/host/) on `eth0`, thus both containers do not share networking or bridge configuration.

As client end user both services can be accessed through `localhost:${PORT}` but the connection between containers is through the `${HOSTNAME}:${PORT}`.

### Laravel Docker Container Service

- [Prestashop 1.7](https://build.prestashop-project.org/tag/1.7/) - *(latest)*

- [PHP-FPM 7.4](https://www.php.net/releases/7_4_0.php)

- [Nginx 1.24](https://nginx.org/)

- [Alpine Linux 3.19](https://www.alpinelinux.org/)

### MariaDB Docker Container Service

- [MariaDB 10.11](https://mariadb.com/kb/en/changes-improvements-in-mariadb-1011/)

- [Alpine Linux 3.19](https://www.alpinelinux.org/)

### Project objetives with Docker

* Built on the lightweight and secure Alpine 3.19 [2024 release](https://www.alpinelinux.org/posts/Alpine-3.19.1-released.html) Linux distribution
* Multi-platform, supporting AMD4, ARMv6, ARMv7, ARM64
* Very small Docker image size (+/-40MB)
* Uses PHP 8.3 as default for the best performance, low CPU usage & memory footprint, but also can be downgraded till PHP 8.0
* Optimized for 100 concurrent users
* Optimized to only use resources when there's traffic (by using PHP-FPM's `on-demand` process manager)
* The services Nginx, PHP-FPM and supervisord run under a project-privileged user to make it more secure
* The logs of all the services are redirected to the output of the Docker container (visible with `docker logs -f <container name>`)
* Follows the KISS principle (Keep It Simple, Stupid) to make it easy to understand and adjust the image to your needs
* Services independency to connect the application to other database allocation

#### Containers on Windows systems

This project has not been tested on Windows OS neither I can use it to test it. So, I cannot bring much support on it.

Anyway, using this repository you will needed to find out your PC IP by login as an `administrator user` to set connection between containers.

```bash
C:\WINDOWS\system32>ipconfig /all

Windows IP Configuration

 Host Name . . . . . . . . . . . . : 191.128.1.41
 Primary Dns Suffix. . . . . . . . : paul.ad.cmu.edu
 Node Type . . . . . . . . . . . . : Peer-Peer
 IP Routing Enabled. . . . . . . . : No
 WINS Proxy Enabled. . . . . . . . : No
 DNS Suffix Search List. . . . . . : scs.ad.cs.cmu.edu
```

Take the first ip listed. Prestashop container will connect with database container using that IP.

#### Containers on Unix based systems

Find out your IP on UNIX systems and take the first IP listed
```bash
$ hostname -I

191.128.1.41 172.17.0.1 172.20.0.1 172.21.0.1
```

## Structure

Directories and main files on a tree architecture description
```
.
│
├── docker
│   ├── mariadb
│   │   ├── ...
│   │   ├── .env.example
│   │   └── docker-compose.yml
│   │
│   └── nginx-php
│       ├── ...
│       ├── .env.example
│       └── docker-compose.yml
│
├── resources
│   ├── database
│   │   ├── prestashop-init.sql
│   │   └── prestashop-backup.sql
│   │
│   ├── module
│   │   ├── dev
│   │   ├── (module-version)
│   │   └── (module-version).zip
│   │
│   ├── theme
│   │   ├── dev
│   │   ├── (theme-version)
│   │   └── (theme-version).zip
│   │
│   └── prestashop
│       └── (any file or directory required for re-building the Prestashop app...)
│
├── prestashop
│   └── (application...)
│
├── .env
├── .env.example
└── Makefile
```

## Automation with Makefile

Makefiles are often used to automate the process of building and compiling software on Unix-based systems as Linux and macOS.

*On Windows - I recommend to use Makefile: \
https://stackoverflow.com/questions/2532234/how-to-run-a-makefile-in-windows*

Makefile recipies
```bash
$ make help
usage: make [target]

targets:
Makefile  help                     shows this Makefile help message
Makefile  hostname                 shows local machine ip
Makefile  fix-permission           sets project directory permission
Makefile  ports-check              shows this project ports availability on local machine
Makefile  prestashop-ssh           enters the Prestashop container shell
Makefile  prestashop-set           sets the Prestashop PHP enviroment file to build the container
Makefile  prestashop-build         builds the Prestashop PHP container from Docker image
Makefile  prestashop-start         starts up the Prestashop PHP container running
Makefile  prestashop-stop          stops the Prestashop PHP container but data will not be destroyed
Makefile  prestashop-destroy       stops and removes the Prestashop PHP container from Docker network destroying its data
Makefile  database-ssh             enters the database container shell
Makefile  database-set             sets the database enviroment file to build the container
Makefile  database-build           builds the database container from Docker image
Makefile  database-start           starts up the database container running
Makefile  database-stop            stops the database container but data will not be destroyed
Makefile  database-destroy         stops and removes the database container from Docker network destroying its data
Makefile  database-replace         replace the build empty database copying the .sql backfile file into the container raplacing the pre-defined database
Makefile  database-backup          creates a copy as .sql file from container to a determined local host directory
Makefile  project-set              sets both Prestashop and database .env files used by docker-compose.yml
Makefile  project-build            builds both Prestashop and database containers from their Docker images
Makefile  project-start            starts up both Prestashop and database containers running
Makefile  project-stop             stops both Prestashop and database containers but data will not be destroyed
Makefile  project-destroy          stops and removes both Prestashop and database containers from Docker network destroying their data
Makefile  repo-flush               clears local git repository cache specially to update .gitignore
```

Checkout local machine ports availability
```bash
$ make ports-check

Checking configuration for PRESTASHOP container:
PRESTASHOP > port:8888 is free to use.
Checking configuration for PRESTASHOP DB container:
PRESTASHOP DB > port:8889 is free to use.
```

Checkout local machine IP to set connection between containers using the following makefile recipe
```bash
$ make hostname

192.168.1.41
```

**Before running the project** checkout database connection health using a database mysql client.

- [MySQL Workbench](https://www.mysql.com/products/workbench/)
- [DBeaver](https://dbeaver.io/)
- [HeidiSQL](https://www.heidisql.com/)
- Or whatever you like. This Docker project doesn't come with [PhpMyAdmin](https://www.phpmyadmin.net/) to make it lighter.

## Build the project
```bash
$ make project-build

PRESTASHOP docker-compose.yml .env file has been set.
PRESTASHOP DB docker-compose.yml .env file has been set.

[+] Building 9.1s (10/10) FINISHED                                     docker:default
 => [mariadb internal] load build definition from Dockerfile           0.0s
 => => transferring dockerfile: 1.13kB
...
 => => naming to docker.io/library/ps-db:mariadb-15                    0.0s
[+] Running 1/2
 ⠧ Network ps-db_default  Created                                      0.7s
 ✔ Container ps-db        Started                                      0.6s

[+] Building 49.7s (25/25)                                             docker:default
 => [prestashop internal] load build definition from Dockerfile         0.0s
 => => transferring dockerfile: 2.47kB
...
=> => naming to docker.io/library/ps-app:php-8.3                       0.0s
[+] Running 1/2
 ⠇ Network ps-app_default  Created                                     0.8s
 ✔ Container ps-app        Started
```

Checkout local machine IP to set connection between containers using the following makefile recipe
```bash
$ make hostname

192.168.1.41
```

## Running the project

```bash
$ make project-start

[+] Running 1/0
 ✔ Container ps-db  Running                       0.0s
[+] Running 1/0
 ✔ Container ps-app  Running                      0.0s
 ```

Now, Prestashop should be available on local machine by visiting [http://localhost:8888/index.php](http://localhost:8888/index.php)

- To make this happends rename the directory **install_x** to just **install**

## Database

Every time the containers are built or up and running it will be like start from a fresh installation, displaying Prestashop Wizard on screen.

So, you can follow the Prestashop Wizard steps to configure the project at requirements *(language, ip and port, etc)* with fresh database tables.

On the other hand, you can continue using this repository with the pre-set database executing the command `$ make database-install`

Follow the next recommendations to keep development stages clear and safe.

*On first installation* once Prestashop app is running with an admin back-office user set, I suggest to make a initialization database backup manually, saving as [resources/database/prestashop-backup.sql](resources/database/prestashop-backup.sql) but renaming as [resources/database/prestashop-init.sql](resources/database/prestashop-init.sql) to have that init database for any Docker compose rebuild / restart on next time.

**The following three commands are very useful for *Continue Development*.**

### DB Backup

When Prestashop project is already in an advanced development stage, making a backup is recommended to avoid start again from installation step by keeping lastest database registers.
```bash
$ make database-backup

PRESTASHOP database backup has been created.
```

### DB Install

If it is needed to restart the project from base installation step, you can use the init database .sql file to restart at that point in time. Though is not common to use, helps to check and test installation health.
```bash
$ make database-install

PRESTASHOP database has been installed.
```

This repository comes with an initialized .sql with a main admin user:
- User: admin@example.com
- Password: 12345678

### DB Replace

Replace the database set on container with the latest .sql backup into current development stage.
```bash
$ make database-replace

PRESTASHOP database has been replaced.
```

#### Notes

- Notice that both files in [resources/database/](resources/database/) have the database name that has been set on the main `.env` file to automate processes.

- Remember that on any change in the main `.env` file will be necessary to execute the following Makefile recipe
```bash
$ make project-set

PRESTASHOP docker-compose.yml .env file has been set.
PRESTASHOP DB docker-compose.yml .env file has been set.
```

## Docker Info

Docker container
```bash
$ sudo docker ps -a
CONTAINER ID   IMAGE      COMMAND    CREATED      STATUS      PORTS                                             NAMES
ecd27aeae010   pres...   "docker-php-entrypoi…"   3 mins...   9000/tcp, 0.0.0.0:8888->80/tcp, :::8888->80/tcp   prestashop-app
52a9994c31b0   pres...   "/init"                  4 mins...   0.0.0.0:8889->3306/tcp, :::8889->3306/tcp         prestashop-db

```

Docker image
```bash
$ sudo docker images
REPOSITORY   TAG           IMAGE ID       CREATED         SIZE
pres...-app  pres...       373f6967199b   5 minutes ago   200MB
pres...-db   pres...       1f1775f7e1db   6 minutes ago   333MB
```

Docker stats
```bash
$ sudo docker system df
TYPE            TOTAL     ACTIVE    SIZE      RECLAIMABLE
Images          1         1         532.2MB   0B (0%)
Containers      1         1         25.03kB   0B (0%)
Local Volumes   1         0         117.9MB   117.9MB (100%)
Build Cache     39        0         10.21kB   10.21kB
```

## Stop Containers

Using the following Makefile recipe stops application and database containers, keeping database persistance and application files binded without any loss
```bash
$ make project-stop

[+] Killing 1/1
 ✔ Container prestashop-db  Killed               0.5s
Going to remove prestashop-db
[+] Removing 1/0
 ✔ Container prestashop-db  Removed              0.0s
[+] Killing 1/1
 ✔ Container prestashop-app  Killed              0.5s
Going to remove prestashop-app
[+] Removing 1/0
 ✔ Container prestashop-app  Removed             0.0s
```

## Remove Containers

To stop and remove both application and database containers from docker network use the following Makefile recipe
```bash
$ make project-destroy

[+] Killing 1/1
 ✔ Container prestashop-db  Killed                    0.4s
Going to remove prestashop-db
[+] Removing 1/0
 ✔ Container prestashop-db  Removed                   0.0s
[+] Running 1/1
 ✔ Network prestashop-db_default  Removed             0.3s

[+] Killing 1/1
 ✔ Container prestashop-app  Killed                   0.4s
Going to remove prestashop-app
[+] Removing 1/0
 ✔ Container prestashop-app  Removed                  0.0s
[+] Running 1/1
 ✔ Network prestashop-app_default  Removed
```

The, remove the Docker images created for containers by its tag name reference
```bash
$ docker rmi $(docker images --filter=reference="*:prestashop-*" -q)
```

Prune Docker system cache
```bash
$ sudo docker system prune

...
Total reclaimed space: 423.4MB
```

Prune Docker volume cache
```bash
$ sudo docker system prune

...
Total reclaimed space: 50.7MB
```