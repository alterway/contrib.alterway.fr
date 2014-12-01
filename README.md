# PHP Cartography

This tool generate a tree of tools, based on the [ziadoz list](https://github.com/ziadoz/awesome-php).

## Usage

+ add a vhost on the `./` directory.
+ configure cron to run `src/update.php` every day (example: `0 0 0	* *	*	/path/src/update.php`)

### If you want to use it with Travis as PHP server

+ install travis (`gem install travis`)
+ Create token in Github (`AccountSettings -> Applications -> Click 'Generate New Token'`)
+ Configure secret env variables with this token:

```bash
travis encrypt GH_TOKEN=yourpersonalaccesstoken --add --add env.matrix
travis encrypt GIT_NAME=name --add --add env.matrix
travis encrypt GH_REF=git@github.com:alterway/php-cartography.alterway.fr.git --add --add env.matrix
```
    
+ And of course enable Travis for this repository :)   

## Copyright

Copyright (c) Alter Way. See LICENSE for details.


