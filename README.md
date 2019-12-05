# lumenAuthFirebase

Authentication in Lumen

This is a reference implementation for using user authentication in Lumen Framework using JWT and the PHP functions password_hash() and password_verify().
Composer Dependencies

    laravel/lumen-framework: 6.* (of course)
    firebase/php-jwt: ^5.0

Routes
Signup

POST /signup
  Body (JSON):
    name (full name of user)
    email (used for login)
    password

Returns "ok".
Login

POST /login
  Body (JSON):
    email
    password

Returns the generated JWT.
Public Route

GET /public

Returns "Hello World".
Secret Route

GET /secret
  Header:
    Authorization: "Bearer ...token..."

Returns "Hello <name>" – if the user is logged in.
