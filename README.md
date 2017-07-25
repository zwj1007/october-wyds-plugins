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
[额外说明](https://github.com/gansutianqi/october-wyds-plugins/blob/master/docs/1.md)
[数据统计](https://github.com/gansutianqi/october-wyds-plugins/blob/master/docs/2.md)

#### TODO
+ ~~用户中心~~
+ ~~搜索功能~~
+ ~~接入天奇用户中心~~
+ ~~简化新闻跟课程组件中部分功能~~
+ qq互联
+ 微信登录接入
+ 微信开放平台
+ 新闻增加评论
+ 课程模型增加评论
+ 公司模型增加评论
+ 部分插件没有完全本地化,有待翻译
+ 邮件模板翻译

+ ~~新闻增加置顶~~
+ ~~幻灯片轮播~~
+ 首页电商资讯,政策解读 显示形式变为左侧第一个显示图片,后边每一列显示两个
+ 统计模块按照表格重新设计
+ ~~便民服务~~
    - 健康医疗 指向 百度或者阿里的医疗站点
    - 生活缴费 修改为 生活服务
    - 家政服务 修改为 供求市场
+ ~~需求发布模型中去掉联系手机号码~~
+ ~~用户模块增加网店(淘宝店)~~
+ ~~重写了供求信息的~~
+ ~~添加主用户界面~~
+ ~~wy-theme2 新闻内容页右侧每个面板列表数量定位8个，下方在放置广告去掉，在添加其他内容，比如（推荐课程，推荐本地信息）~~
+ ~~第二套主题wy-theme2 将**网络营销**名字变为其他，待定~~
+ ~~第二套主题用户中心我的发布中，操作一列在图标添加文字说明~~
+ ~~电商学院从导航栏中去掉，第二套~~
