location ~ ^/test/ {
   root	<?=getenv('HEROKU_APP_DIR')?:getcwd()?>/test_root;
   index test.php;
}
