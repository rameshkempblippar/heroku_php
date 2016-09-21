location ~ ^/test/ {
   rewrite ^/test/(.*) /test_root/$1 last;
}
