SymfoStart (for Symfony Start)
===============================

What's inside?
--------------
A Symfony project (Symfony Standard Edition) with 

- Bundle FOSUser
- Bundle FOSRoutingJs
- Bundle Assetic
- CSS Bootstrap
- Font Awesome
- jQuery
- jQueryUI
- Moment.js

And...
------

- Default FOSUserBundle Templates overrided
- First home page with NavBar, protected by login

For...
------

To start quickly a Symfony App !

How to
------

- Clone SymfoStart :
git clone https://github.com/grelu/SymfoStart.git myNewApp

- Update vendor (run this command in myNewApp directory ):
php composer update (or php composer.phar update)

- Answer the questions (database_host...)

- Create database :
php bin/console doctrine:database:create

- Update schema :
php bin/console doctrine:schema:update --force

- Create your first user :
php bin/console fos:user:create

- And go to your login page :
http://localhost/myNewApp/web/app_dev.php/


Enjoy!