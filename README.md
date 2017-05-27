# October Plugin
october plugins

#### Usage
+ install october via composer `composer create-project october/october myprojectName`
+ setting `'disabledCoreUpdates' => true` in config/cms.php
+ run `php artisan october:install` in project root directory
+ run `php artisan october:env` generate a `.env` file for common config
+ make `storage` and `themes` directory write permission
+ run `php artisan october:update` the version to latest.
+ this plugin need `guzzlehttp/guzzle`package, install via composer `composer require guzzlehttp/guzzle`
+ remove some files,`rm .gitignore README.md .editorconfig .gitattributes`
+ clone this repository
    - in the project root directory
    - run `git init`
    - run `git remote add origin https://github.com/gansutianqi/october-wyds-plugins.git`
    - run `git pull origin master`
+ install plugins
    - install rainlab.user `php artisan plugin:install RainLab.User`
    - install rainlab.pages `php artisan plugin:install RainLab.Pages`
    - install netsti.uploader `php artisan plugin:install Netsti.Uploader`
    - install buuug7.news `php artisan plugin:refresh Buuug7.News`
    - install buuug7.courses `php artisan plugin:refresh Buuug7.Courses`
    - install buuug7.user `php artisan plugin:refresh Buuug7.User`
+ other settings
    - setting `locale=zh-cn timezone=PRC` in config/app.php


#### Tips
+ 媒体中心上传文件不支持中文名称
+ 媒体中心上传图片不支持相同的名字,会覆盖原有同名的文件
+ 建议所有文章的特色图片的大小为800x400,也包括线上培训课程的特色图片

#### TODO
+ ~~用户中心~~
+ ~~搜索功能~~
+ ~~接入天奇用户中心~~
+ 简化新闻跟课程组件中部分功能(half)
+ qq互联
+ 微信登录接入
+ 微信开放平台
+ 新闻增加评论
+ 课程模型增加评论
+ 公司模型增加评论
+ 部分插件没有完全本地化,有待翻译


#### Change
+ 2017-05-27
    + 简化新闻插件组件中部分功能
    + 更新新闻插件中搜索处理器``scopeSearch`
+ 2017-05-03
    + 添加统计模型
    + 更新前端视图
+ 2017-04-28
    + 完善前端视图
    + 嵌套第二套主题
+ 2017-04-25
    + 完善课程模型
+ 2017-04-19
    + 完善新闻模型
+ 2017-04-14
    + 新添加了用户插件,扩展了用户profile,暂时添加了**phone,mobile,company,address**,以后有新需求在添加
    + 新添了表`buuug7_user_users_courses`,用来关联用户跟课程,课程收藏
