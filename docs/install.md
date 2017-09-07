#### Install
+ install october via composer `composer create-project october/october myprojectName`
+ setting `'disabledCoreUpdates' => true` in config/cms.php
+ run `php artisan october:install` in project root directory
+ run `php artisan october:env` generate a `.env` file for common config
+ make `storage` and `themes` directory write permission
+ before run `php artisan ocotber:update`, you need run `composer update` first
+ remove some files,`rm .gitignore README.md .editorconfig `

+ install plugin before init repository
    - install october.driver `php artisan plugin:install October.Drivers`
    - install rainlab.user `php artisan plugin:install RainLab.User`
    - install rainlab.pages `php artisan plugin:install RainLab.Pages`
    - install netsti.uploader `php artisan plugin:install Netsti.Uploader`
    - install october.drivers `php artisan plugin:install October.Drivers`
+ clone this repository
    - in the project root directory
    - run `git init`
    - run `git remote add origin https://github.com/gansutianqi/october-wyds-plugins.git`
    - run `git pull origin master`
+ after pull complete
    - install buuug7.news `php artisan plugin:refresh Buuug7.News`
    - install buuug7.courses `php artisan plugin:refresh Buuug7.Courses`
    - install buuug7.user `php artisan plugin:refresh Buuug7.User`
    - install buuug7.statistics `php artisan plugin:refresh Buuug7.Statistics`
    - install buuug7.location `php artisan plugin:refresh Buuug7.Location`
+ other settings
    - setting `locale=zh-cn timezone=PRC` in config/app.php
    - when develop in local,make sure to add `APP_ENV=dev` for use dev config.
    - if you want the latest Rainlab.User translate with zh-cn, you should copy [zh-cn](https://github.com/rainlab/user-plugin/blob/master/lang/zh-cn/lang.php) override default
    - if you want the latest modules backend translate with zh-cn, also copy [zh-cn](https://github.com/octobercms/october/blob/develop/modules/backend/lang/zh-cn/lang.php) override default.

#### some setting in phpstorm
```
arguments: --no-cache --update $FileName$:../css/$FileNameWithoutExtension$.css
output paths to refresh: $FileNameWithoutExtension$.css:../css/$FileNameWithoutExtension$.css.map
```