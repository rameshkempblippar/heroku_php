location / {
    index  index.php index.html index.htm;
}

# for people with app root as doc root, restrict access to a few things
location ~ ^/(composer\.|Procfile$|<?=getenv('COMPOSER_VENDOR_DIR')?>/|<?=getenv('COMPOSER_BIN_DIR')?>/) {
    deny all;
}

location ~ ^/test/ {
   rewrite ^/test/(.*) $scheme://$server_name/test_root/$1 last;
}
