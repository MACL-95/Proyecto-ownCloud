<?php
$CONFIG = array (
  'instanceid' => 'oczevz4vre2s',
  'passwordsalt' => '10qV1iv7CvpBFKMIX0CHUhC+/kZRFk',
  'secret' => 'tFLv4zp1Ecc8gLu71xxFkVDGD3tHyiqiN00Zsjigo3p2BcCZ',
  'trusted_domains' => 
  array (
    0 => 'cpd.iesgrancapitan.org:9326',
    1 => 'cpd.iesgrancapitan.org:9327',
    2 => 'cpd.iesgrancapitan.org:9426',
    3 => 'cpd.iesgrancapitan.org:9427',
    4 => 'cpd.iesgrancapitan.org:9736',
    5 => 'cpd.iesgrancapitan.org:9737',
    6 => 'cpd.iesgrancapitan.org:9746',
    7 => 'cpd.iesgrancapitan.org:9747',
    8 => 'cpd.iesgrancapitan.org:9728',
  ),
  'datadirectory' => '/var/www/html/data',
  'overwrite.cli.url' => 'http://cpd.iesgrancapitan.org:9326',
  'dbtype' => 'mysql',
  'version' => '10.4.1.3',
  'dbname' => 'owncloud',
  'dbhost' => 'localhost',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => 'admin',
  'dbpassword' => 'admin',
  'logtimezone' => 'UTC',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/html/apps-external',
      'url' => '/apps-external',
      'writable' => true,
    ),
  ),
  'files_external_allow_create_new_local' => true,
  'installed' => true,
  'mail_domain' => 'iesgrancapitan.org',
  'mail_from_address' => 'owncloud',
  'mail_smtpmode' => 'smtp',
  'mail_smtpauthtype' => 'LOGIN',
  'mail_smtphost' => 'smtp.gmail.com',
  'mail_smtpsecure' => 'ssl',
  'mail_smtpauth' => 1,
  'mail_smtpname' => 'owncloud@iesgrancapitan.org',
  'mail_smtppassword' => 'migueldavid',
  'mail_smtpport' => '465',
  'filelocking.enabled' => true,
  'memcache.local' => '\OC\Memcache\APCu',
  'memcache.locking' => '\OC\Memcache\Redis',
  'redis' => [
     'host' => 'localhost',
     'port' => 6379,
     'timeout' => 0.0,
     'password' => 'migueldavid', // Optional, if not defined no password will be used.
 ],
);
