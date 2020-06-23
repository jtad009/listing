## Doubble
1. [Introduction](#introduction)
2. [Setup](#setup)
3. [Requirements](#requirements)
4. [Installation & Configuration](#installation-and-configuration)
5. [License](#license)
6. [Security Vulnerabilities](#security-vulnerabilities)
7. [Miscellaneous](#miscellaneous)

### Introduction

Doubble is built using  opensource CakePHP 3.8 technology


**Read Cakephp's documentation: [CakePHP Docs](https://book.cakephp.org/3/en/index.html/)**

### Requirements

* **OS**: Ubuntu 16.04 LTS or higher / Windows 7 or Higher (WampServer / XAMPP).
* **SERVER**: Apache 2 or NGINX.
* **RAM**: 3 GB or higher.
* **PHP**: 7.2.0 or higher.
* **Processor**: Clock Cycle 1 Ghz or higher.
* **For MySQL users**: 5.7.23 or higher.
* **Composer**: 1.6.5 or higher.

### Setup

**1. Clone or download this repo using the Clone feature on this page**

**2. Change directory to the project root folder**

##### Execute the commands below, in order

~~~
1. composer install
~~~

**Now, configure your database:**

Find file **.env** or create one in your config directory and set the environment variables listed below:

* **BASE_DOMAIN**
* **DB_HOST**
* **DATABASE_NAME**
* **DB_USER**
* **DB_PASSWORD**

Mailer environment variables are also required to be set up. This is because **Doubble** needs to send emails to  admins depending on what events require notification.

~~~
2. bin/cake migrations migrate
~~~

~~~
3. bin/cake migrations seed
~~~

~~~
4. bin/cake plugin assets symlink

If your filesystem doesn’t allow creating symlinks the directories will becopied instead of being symlinked. You can also explicitly copy the directories you can try:
 

bin/cake plugin assets copy
~~~

~~~
5. composer dump-autoload -o
~~~


**To execute Doubble**:

##### On server:

Warning: Before going into production mode we recommend you uninstall developer dependencies.
In order to do that, run the command below:

> composer install --no-dev

~~~
Open the specified entry point in your hosts file in your browser or make an entry in hosts file if not done.
~~~

##### On local:

~~~
After copying the direction to you www directory, you can visit :
~~~

> *http(s)://localhost/name_of_directory*

**How to log in as admin:**

> *http(s)://example.com/admin*

~~~
email: admin
password: 1234567890
~~~



