# October Plugin
october plugins


### 栏目结构
平台主要有6大功能,包括 <strong>电商资讯,政策解读,线上培训,产品营销,需求发布,数据统计</strong>,其中线上培训跟其他平台的 <strong>电商学院</strong> 栏目的性质类似,只是叫法不一样.

+ 电商动态
    + 农村电商
    + 移动电商
    + 其他动态
+ 政策解读
    - 政策导向
    - 地方政策
+ 通知公告    
+ 线上培训(电商学院)
+ 产品营销
    - 本地电商
    - 品牌企业
+ 需求发布
+ 服务市场
+ 数据统计

其中前台的 <strong>产品营销,需求发布</strong>这两个模块依赖于**用户模块**,用户模块中包含了完整的用户认证体系,所需要的额外功能根据实际业务来扩展

### 模块详述
#### 电商动态
该栏目下电子商务资讯类的信息，涵盖电子商务各行各业的最新资讯，让用户实时了解最前沿的行业资讯，该栏目下有三个小分类，分别为农村电商资讯，移动电商资讯；电商动态；  
每一个子分类是对电商资讯栏目更细致的划分。农村电商资讯子栏目中信息主要针对的是，农村电商这一领域的所有资讯信息；  
移动电商资讯子栏目为针对移动端（比如基于手机，平板，微信等电子商务企业应用APP）的资讯进行单独的发布；电商动态子栏目主要针对周边电商最新动态资讯。

#### 政策解读
该栏目为与电子商务相关的国家政策集中发布区。用户通过该栏目可以及时了解国家政策方针，政策导向，让个人或者企业对国家政策有更好认识并帮助企业个人能够更好的按照国家政策来确立企业自身发展的道路。该栏目分为政策导向和地方政策两大子栏目。

#### 通知公告
该栏目为平台通知公告栏目,有关通知公告类的信息可以发布在该栏目下

#### 线上培训
该栏目旨在引导用户及时了解学习互联网电子商务，让企业和个人用户以及政府干部能够面对未来的互联网电子商务冲击做好足够的准备，让他们通过线上培训来为自身充电，同时也为一些电子商务创业团队提供更加长远的培训计划。

#### 产品营销
该栏目集中展示并推广本地电子商务类企业，为本地电子商务类企业提供线上展示和营销推广方式，帮助本地电子商务类企业解决推广难，营销难的问题，通过平台自身流量让每一个本地电商有更多的曝光几率从而增加企业知名度。  
该模块针对企业用户,企业用户注册认证成功后可提交企业信息,经平台审核通过后将企业的信息通过平台产品营销栏目集中展示营销.  
同时对一些本地电商中的优质电商以品牌企业作为单独的栏目进行集中展示,为其提供更多的曝光率,让每一个电商企业真正成长起来,也是本平台的初衷.

> 产品营销这个栏目名字起得应该有错误,应该更改为本地电商比较好一点

#### 需求发布
注册用户可以发布个人类或者组织类需求,需求经过后台审核后发自动推送到 <strong>服务市场</strong> 进行展示

#### 服务市场
个人或者组织类的需求信息集中展示的栏目,任何需求类的信息都会自动推送到该栏目下.用户可以通过服务市场检索自己需要的服务.或者可以通过平台的需求发布模块发布你的需求信息.

#### 数据统计
TODO::敬请期待

#### TODO
+ 授权页面不够完善,后续在加验证

#### 更新
+ 2017-04-14
    + 新添加了用户插件,扩展了用户profile,暂时添加了**phone,mobile,company,address**,以后有新需求在添加
    + 新添了表`buuug7_user_users_courses`,用来关联用户跟课程,课程收藏
    + 