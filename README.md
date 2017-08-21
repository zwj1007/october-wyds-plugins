# October Plugin
october plugins

#### Usage
+ install october via composer `composer create-project october/october myprojectName`
+ setting `'disabledCoreUpdates' => true` in config/cms.php
+ run `php artisan october:install` in project root directory
+ run `php artisan october:env` generate a `.env` file for common config
+ make `storage` and `themes` directory write permission
+ before run `php artisan ocotber:update`, you need run `composer update` first
+ run `php artisan october:update` the version to latest.
+ this plugin need `guzzlehttp/guzzle`package, install via composer `composer require guzzlehttp/guzzle`
+ remove some files,`rm .gitignore README.md .editorconfig .gitattributes`
+ install plugin before init repository
    - install rainlab.user `php artisan plugin:install RainLab.User`
    - install rainlab.pages `php artisan plugin:install RainLab.Pages`
    - install netsti.uploader `php artisan plugin:install Netsti.Uploader`
+ clone this repository
    - in the project root directory
    - run `git init`
    - run `git remote add origin https://github.com/gansutianqi/october-wyds-plugins.git`
    - run `git pull origin master`
+ install plugins after init repository
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

#### Tips
+ 媒体中心上传文件不支持中文名称
+ 媒体中心上传图片不支持相同的名字,会覆盖原有同名的文件
+ 建议所有文章的特色图片的大小为800x400,也包括线上培训课程的特色图片
+ [user-plugin](https://github.com/rainlab/user-plugin)中汉化的我已提交其源码仓库,等待下次插件更新才会起作用,如果想提前使用,请使用[该链接](https://github.com/rainlab/user-plugin/blob/master/lang/zh-cn/lang.php)的文件覆盖源文件

#### 文档
+ [额外说明](https://github.com/gansutianqi/october-wyds-plugins/blob/master/docs/1.md)
+ [数据统计](https://github.com/gansutianqi/october-wyds-plugins/blob/master/docs/2.md)
+ [TODO](https://github.com/gansutianqi/october-wyds-plugins/blob/master/docs/todo.md)


