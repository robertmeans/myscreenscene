ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);





10.26.15 at 0955

-------------------
php.ini *deprecated* - replaced with .user.ini (10.26.15)

.user.ini
php5.ini
-------------------

These 2 files must reside in the root of the hosting directory. At the time of typing this, myscreenscene.com is hosted through robertmeans.com and resides in a subdirectory of robertmeans.com. These 3 files are in the root of robertmeans.com.

I have included phpinfo.php in this folder just in case you need to run it to see details of current php configuration.

Current environment
OS: Linux
PHP 5.4 *with apc enabled (had to manually enable through cPanel > Software > Select PHP version > apc checkbox)

MySQL (not sure. but today's date is 10.26.15)


*** light reading regarding apc
https://www.devside.net/wamp-server/installing-apc-for-php-5-5






Old environment (before cPanel):
OS: Linux
PHP 5.3.24
MySQL 5.0
