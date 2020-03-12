<b>Author:</b> Andrei

installation
-------------------

```
Prepare project:
    $ git clone https://gitlab.com/progandrey/test_items.git

Environment setting:
    php requirements.php        install the necessary modules
    connect the database        (if the installation is not on my amazon server)
    /path/to/php-bin/php /path/to/yii-application/init --env=Development --overwrite=All

Run commands:
    $ php yii migrate/up        install migration
    $ php yii db/install        install date in db

Sign In
    Login: admin
    Password: admin321

```