<?php namespace Buuug7\News\Updates;

use Buuug7\News\Models\Category;
use Buuug7\News\Models\Comment;
use Buuug7\News\Models\Post;
use Carbon\Carbon;
use October\Rain\Database\Updates\Seeder;

class SeedPostsFiveTables extends Seeder
{

    public function run()
    {
        //
        // 信息公开 start
        //
        $xinXiGongKai01 = Post::create([
            'title' => '【选点进行时】会川镇村级电子商务公共服务点建设选点工作继续进行中',
            'slug' => '【选点进行时】会川镇村级电子商务公共服务点建设选点工作继续进行中',
            'summary' => '我中心工作人员7月5日前往会川镇王家咀村、河里庄村、西关村及五竹镇苏家口村开展村级电子商务公共服务点的选点工作。',
            'published' => true,
            'published_at' => Carbon::create(2017, 7, 5, 0, 0, 0),
            //'featured' => true,
            // 'image' => '/news/01.jpg',
            'user_id' => 1,
            'images' => [],
            'files' => [],
            'content' => '
                 <p style="text-indent: 2em">我中心工作人员7月5日前往会川镇王家咀村、河里庄村、西关村及五竹镇苏家口村开展村级电子商务公共服务点的选点工作。<img src="/storage/app/media/uploaded-files/w.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"></p>
                 <p style="text-indent: 2em">工作人员对各村意向合伙人的店面面积、当地农特产品、地理环境等进行了解，与意向合伙人深入交流， 了解村民对电子商务进农村的看法。村民表示： 殷切期望电子商务能够尽快入驻农村，让农民真正体会到电子商务为大家带来的福利。<img src="/storage/app/media/uploaded-files/d.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"><img src="/storage/app/media/uploaded-files/w1.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"></p>
                 <p style="text-indent: 2em">随着会川镇选点工作的顺利进行，中心会逐步在其他乡镇展开选点工作，以便国家电子商务进农村综合示范县项目的快速推进。 与此同时，我们也将继续推动项目的培训工作，着力构建渭源县电子商务三级服务体系，不断增强农村电商的发展活力和为农民服务的能力。&nbsp;<img src="/storage/app/media/uploaded-files/21.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"><img src="/storage/app/media/uploaded-files/_20170706155559.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"></p>

            ',
        ]);
        // attach with category
        $xinXiGongKai01->categories()->attach(5);


        $xinXiGongKai02 = Post::create([
            'title' => '【电商到农村】国家电子商务进农村综合示范县普及性培训第五期在北寨镇完美收工！',
            'slug' => '【电商到农村】国家电子商务进农村综合示范县普及性培训第五期在北寨镇完美收工！',
            'summary' => '2017年7月4日，由渭源县商务局牵头， 渭源县北寨镇人民政府，渭源县电子商务公共服务中心以及甘肃天奇网络科技有限公司联合举办的【国家电子商务进农村综合示范县普及性培训（第五期）】 在北寨镇完美收工！',
            'published' => true,
            'published_at' => Carbon::create(2017, 7, 4, 0, 0, 0),
            //'featured' => true,
            // 'image' => '/news/01.jpg',
            'user_id' => 1,
            'images' => [],
            'files' => [],
            'content' => '
                    <p style="text-indent: 2em"><img src="/storage/app/media/uploaded-files/5-1.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success">为落实国家电子商务进农村综合示范项目的实施，增加广大农民群众关于电子商务方面的知识；2017年7月4日，由渭源县商务局牵头， 渭源县北寨镇人民政府，渭源县电子商务公共服务中心以及甘肃天奇网络科技有限公司联合举办的【国家电子商务进农村综合示范县普及性培训（第五期）】 在北寨镇完美收工！<img src="/storage/app/media/uploaded-files/5-2.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"><img src="/storage/app/media/uploaded-files/5-3.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"></p>
                    <p style="text-indent: 2em">本次培训邀请渭源县职业中等学校计算机一级讲师王爱业老师，渭源县职业中等学校一级讲师、网络工程师郸复老师为培训学员授课； 课堂上，两位讲师全面的讲解了互联网在农村发展的必要性，进一步解释了在当今社会的发展环境下，电子商务不可避免的成为了我们生活的一部分， 在这种情况下，即使我们学不会深层的电子商务知识，也要知道一些简单的电子商务知识；同时，两位讲师分别就网络传销、非法集资、非法贷款等危害 网络安全的行为进行了简单的讲解，为防止今后群众在网购时出现上当受骗的情况。<img src="/storage/app/media/uploaded-files/5-4.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"><img src="/storage/app/media/uploaded-files/5-6.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success">
	                <img src="/storage/app/media/uploaded-files/5-7.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"><img src="/storage/app/media/uploaded-files/5-8.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"></p>
            
            ',
        ]);
        // attach with category
        $xinXiGongKai02->categories()->attach(5);


        $xinXiGongKai03 = Post::create([
            'title' => '商务部副部长王炳南浅谈电子商务部分热点问题',
            'slug' => '商务部副部长王炳南浅谈电子商务部分热点问题',
            'summary' => '根据中国人大网消息，全国人大常委会举办了十二届全国人大常委会专题讲座第二十九讲——“电子商务的现状与发展”，在会上，商务部副部长王炳南同志汇报了国内外电子商务的发 展情况、我国电子商务存在的问题及下一步工作思考。',
            'published' => true,
            'published_at' => Carbon::create(2017, 7, 4, 0, 0, 0),
            //'featured' => true,
            // 'image' => '/news/01.jpg',
            'user_id' => 1,
            'images' => [],
            'files' => [],
            'content' => '
                    <p style="text-indent: 2em"><img src="/storage/app/media/uploaded-files/9.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success">根据中国人大网消息，全国人大常委会举办了十二届全国人大常委会专题讲座第二十九讲——“电子商务的现状与发展”，在会上，商务部副部长王炳南同志汇报了国内外电子商务的发 展情况、我国电子商务存在的问题及下一步工作思考。</p>
                    <p style="text-indent: 2em">王炳南指出，电子商务新主体身份难界定，第三方平台责任义务应明晰。 商务部将会同有关部门按照人大常委会审议通过的《电子商务法》，推动建立适应新主体、新模式发展的政策法规体系。针对新主体、新产业的发展需求，从法规标准、 市场准入、商事制度、财税政策、关检税汇、金融服务、信用建设、监管执法、知识产权等方面厘清发展障碍，以解决体制机制束缚为主攻方向，出台相关政策措施， 推动建立负面清单管理模式，为电子商务新主体的发展营造宽松的环境。进一步细化电子商务第三方平台的责任和义务。 一方面要充分发挥第三方平台推动市场发展、协助政府监管的作用，另一方面也不能无限扩大平台责任，扼杀第三方平台开展市场创新的动力。总的来说，对于消费者， 鼓励平台承担先行赔偿以及特殊情况下的连带赔偿责任；对于平台商家，平台应承担适度监管的责任，包括经营者身份核验、信息监控、制订交易规则、信用评价、纠纷解决 、知识产权保护等。</p>
                    <p style="text-indent: 2em">王炳南表示，电子商务冲击不是实体店关店的主要原因，下一步，将推动实体店加大互联网等新技术应用，清理涉企不合理收费，减轻企业负担，提振实体经济。近两年来 ，全国多地出现零售业实体店大规模“关闭退租”现象，在百货、大型超市等业态表现较为明显。实体店关店，电子商务冲击是一方面，但不是主要原因。相反，互联网是整 个实体产业自然演进的催化剂，是传统零售业转型升级的重要抓手。商务部将大力实施“互联网+流通”行动计划，持续推动线上线下互动融合。推动实体店加大互联网、大数据、 人工智能、虚拟现实、现实增强等新技术应用，主动适应经济新常态、市场新变化、消费新变局。清理涉企不合理收费，减轻企业负担。鼓励线上线下开展合作，实现资源对接、打破场景限制、 优化消费路径，以数据的互联互通为基础，建立消费者与商品、服务间直接、精准、即时联系，开展全渠道营销，满足消费者全方位消费需求。推动完善线上线下统一适用的制度标准，加快线上线下一 体化的监管。总之，要充分利用信息技术促进实体流通企业创新发展、转型发展、协同发展，提振实体经济，推进供给侧结构性改革。</p>

            ',
        ]);
        // attach with category
        $xinXiGongKai03->categories()->attach(5);


        $xinXiGongKai04 = Post::create([
            'title' => '渭源县电子商务公共服务中心召开村级电子商务服务点意向合伙人召开座谈会',
            'slug' => '渭源县电子商务公共服务中心召开村级电子商务服务点意向合伙人召开座谈会',
            'summary' => '为加快村级电子商务服务点的建设，完成国家电子商务进农村综合示范项目，解答村级电子商务服务点意向合伙人的疑惑问题，2017年7月1日， 渭源县电子商务公共服务中心召开村级电子商务服务点意向合伙人召开座谈会，渭源县农村电子商务座谈会在渭源县电子商务公共服务中心的组织下顺利召开',
            'published' => true,
            'published_at' => Carbon::create(2017, 7, 1, 0, 0, 0),
            //'featured' => true,
            // 'image' => '/news/01.jpg',
            'user_id' => 1,
            'images' => [],
            'files' => [],
            'content' => '
                <p style="text-indent: 2em">为加快村级电子商务服务点的建设，完成国家电子商务进农村综合示范项目，解答村级电子商务服务点意向合伙人的疑惑问题，2017年7月1日， 渭源县电子商务公共服务中心召开村级电子商务服务点意向合伙人召开座谈会，渭源县农村电子商务座谈会在渭源县电子商务公共服务中心的组织下顺利召开<img src="/storage/app/media/uploaded-files/k-1.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"></p>
                <p style="text-indent: 2em">在座谈会上，甘肃天奇网络科技有限公司总经理孙文博向参会的村级电子商务服务点意向人员详细的讲解了农村电子商务三级服务体系的内容， 同时讲述了三级服务体系中县级服务中心、乡镇服务站和村级服务点的具体职责和工作内容。随后，意向合伙人向孙文博提出“是否申请食品加工许可证”、 “如何选择产品”、“农村电子商务与农村淘宝的关系”、“物流配送”等问题；孙文博通过准确、简练、直接、朴实的语言对村级电子商务服务点意向人员一一解答了参会人 员的困扰和疑问。并表示，在建设村级服务点的过程中，遇到任何困难，都可以向县级电子商务公共服务中心寻求帮助， 我们一定帮助合伙人把店开起来，把平台搭建好，开始正常营业。<img src="/storage/app/media/uploaded-files/k-2.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"><img src="/storage/app/media/uploaded-files/k-3.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"><img src="/storage/app/media/uploaded-files/k-4.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"><img src="/storage/app/media/uploaded-files/k-5.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"></p>
                <p style="text-indent: 2em">通过此次座谈会，更加坚定了意向合伙人建设农村电子商务村级服务点的决心， 并表示一定遵从县级电子商务公共服务中心的领导，努力经营自己的电子商务村级服务点，为渭源县国家电子商务进农村综 合示范项目的顺利建设贡献自己的力量。</p>
            ',
        ]);
        // attach with category
        $xinXiGongKai04->categories()->attach(5);


        $xinXiGongKai05 = Post::create([
            'title' => '【选点进行时】会川镇村级电子商务公共服务点选点工作开始了。',
            'slug' => '【选点进行时】会川镇村级电子商务公共服务点选点工作开始了。',
            'summary' => '6月29日，电子商务进农村综合示范项目实地考察小组前往会川镇了解实际情况，为会川镇电子商务进农村综合示范项目的开展打下前站。',
            'published' => true,
            'published_at' => Carbon::create(2017, 6, 29, 0, 0, 0),
            //'featured' => true,
            // 'image' => '/news/01.jpg',
            'user_id' => 1,
            'images' => [],
            'files' => [],
            'content' => '
                <p style="text-indent: 2em">6月29日，电子商务进农村综合示范项目实地考察小组前往会川镇了解实际情况，为会川镇电子商务进农村综合示范项目的开展打下前站。<img src="/storage/app/media/uploaded-files/4-1.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"><img src="/storage/app/media/uploaded-files/4-2.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"></p>
                <p style="text-indent: 2em">电子商务进农村综合示范项目实地考察小组工作人员先后前往了梁家坡、本庙、河里庄等村，对以上各村进行了详细的了解，并与当地村民进行了交流和沟通，更深入的了解了每个村不同的人文环境、 自然资源等；接着再一次前往西关村、东关村、干乍村三村，调查了各村的人流区域、市场环境等信息，为确定村级电子商务公共服务点的建设提供更详细的资料。<img src="/storage/app/media/uploaded-files/4-3.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"><img src="/storage/app/media/uploaded-files/4-4.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"><img src="/storage/app/media/uploaded-files/4-5.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"></p>
                <p style="text-indent: 2em">接下来，电子商务进农村综合示范项目实地考察小组会继续对其他的村社进行更深入的调查了解，以便尽快确定下一批村级电子商务服务点的位置。 与此同时，电子商务进农村综合示范项目实地考察小组将开展国家电子商务进农村综合示范县应用普及性培训，增强农村群众对网络的认识，加深村民对电子商务的了解</p>

            ',
        ]);
        // attach with category
        $xinXiGongKai05->categories()->attach(5);


        $xinXiGongKai06 = Post::create([
            'title' => '【考察进行中】中心工作人员实地考察清源镇马家窑村村级电子商务公共服务点',
            'slug' => '【考察进行中】中心工作人员实地考察清源镇马家窑村村级电子商务公共服务点',
            'summary' => '6月20日，渭源县清源镇马家窑村包村领导石祥英同志，电商办专干黄晓燕同志和渭源县电子商务公共服务中心工作人员前往清源镇池坪、马家窑村实地考察。',
            'published' => true,
            'published_at' => Carbon::create(2017, 6, 20, 0, 0, 0),
            //'featured' => true,
            // 'image' => '/news/01.jpg',
            'user_id' => 1,
            'images' => [],
            'files' => [],
            'content' => '
                 <p style="text-indent: 2em">为加快我县电子商务进农村综合示范项目的进一步开展，6月20日，渭源县清源镇马家窑村包村领导石祥英同志，电商办专干黄晓燕同志和渭源县电子商务公共服务中心工作人员前往清源镇池坪、马家窑村实地考察。<img src="/storage/app/media/uploaded-files/1-1.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"></p>
                    <p style="text-indent: 2em">在马家窑村部，石祥英、黄晓燕等人与意向合伙人进行了亲切的交谈，向合伙人深入的讲述了此次电子商务进农村项目的特点与作用。 在交流中，意向合伙人咨询了政府对于农村电子商务发展的政策，并谈到了自己对此项目的一些困惑。石祥英同志就此问题， 向意向合伙人介绍了一些关于国家对农村电子商务发展的扶持政策与要求，解答了合伙人的疑惑。 到达池坪有意向合伙人的合作社后，在与意向合伙人的交谈中，回答了合伙人就农村电子商务服务点的运营、发展等提出的问题。了解了合伙人对于农村电子商务服务点的认知等。<img src="/storage/app/media/uploaded-files/1-2.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"><img src="/storage/app/media/uploaded-files/1-3.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"></p>
                    <p style="text-indent: 2em">通过交流，意向合伙人对于农村电子商务未来的发展充满了信心，并表示一定积极配合县电子商务公共服务中心的安排与指导，做好本村电子商务服务点的发展与运营</p>

            ',
        ]);
        // attach with category
        $xinXiGongKai06->categories()->attach(5);


        $xinXiGongKai07 = Post::create([
            'title' => '渭源县农村电子商务考察组抵达庆阳环县进行学习交流',
            'slug' => '渭源县农村电子商务考察组抵达庆阳环县进行学习交流',
            'summary' => '2017年6月17日，渭源县人大常委会副主任李云林、黄晓清同志，带领委员王守峰、任作鹏、王东奎，以及县商务局局长赵效勇， 承建渭源县国家电子商务进农村项目的三个中标企业负责人孙文博、张渭林、柴彦龙等一行人组成的学习考察小组，抵达此次考察最后一站—庆阳市环县',
            'published' => true,
            'published_at' => Carbon::create(2017, 6, 17, 0, 0, 0),
            //'featured' => true,
            // 'image' => '/news/01.jpg',
            'user_id' => 1,
            'images' => [],
            'files' => [],
            'content' => '
                    <p style="text-indent: 2em">2017年6月17日，渭源县人大常委会副主任李云林、黄晓清同志，带领委员王守峰、任作鹏、王东奎，以及县商务局局长赵效勇， 承建渭源县国家电子商务进农村项目的三个中标企业负责人孙文博、张渭林、柴彦龙等一行人组成的学习考察小组，抵达此次考察最后一站—庆阳市环县<img src="/storage/app/media/uploaded-files/9-1.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"></p>
                    <p style="text-indent: 2em">考察团一行人在环县人大常委会主任杨万香同志，副主任代万军，人大常委会委员张志宏、黄国锋，商务局局长谈应琪等人的陪同下分别参观了环县电子商务公共服务中心、 环县电子商务物流配送中心、木钵镇电子商务服务站及高寨村电子商务服务点等，通过考察学习，考察团一行人更加深入的了解了电子商务进农村综合项目中不同体系的建设及作用， 并在电子商务进农村综合项目发展中所遇到的问题进行了探讨。<img src="/storage/app/media/uploaded-files/9-2.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"><img src="/storage/app/media/uploaded-files/9-3.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"><img src="/storage/app/media/uploaded-files/9-4.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"><img src="/storage/app/media/uploaded-files/9-5.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"></p>
                    <p style="text-indent: 2em">考察结束后，李云林等人对环县电子商务的发展现状给予了高度评价，是我县电子商务进农村综合项目发展的老师， 并表示两县就农村电子商务综合项目的发展增强交流学习，共同促进两县电子商务的发展。</p>

            ',
        ]);
        // attach with category
        $xinXiGongKai07->categories()->attach(5);


        $xinXiGongKai08 = Post::create([
            'title' => '我县调研小组检查渭源县各乡镇电子商务发展现状',
            'slug' => '我县调研小组检查渭源县各乡镇电子商务发展现状',
            'summary' => '为充分了解我县电子商务的发展进度， 2017年6月19日，渭源县人大常委会副主任黄晓清同志，带领委员任作鹏、王东奎，县商务局局长赵效勇 ，甘肃天奇网络科技有限公司总经理孙文博，渭源县四海电子商务有限公司负责人张渭林， 渭源县艺龙电子商务公司负责人柴海龙等调研检查了锹峪乡、五竹镇、上湾乡、会川镇等我县电子商务服务站点。',
            'published' => true,
            'published_at' => Carbon::create(2017, 6, 19, 0, 0, 0),
            //'featured' => true,
            // 'image' => '/news/01.jpg',
            'user_id' => 1,
            'images' => [],
            'files' => [],
            'content' => '
                    <p style="text-indent: 2em">为充分了解我县电子商务的发展进度， 2017年6月19日，渭源县人大常委会副主任黄晓清同志，带领委员任作鹏、王东奎，县商务局局长赵效勇 ，甘肃天奇网络科技有限公司总经理孙文博，渭源县四海电子商务有限公司负责人张渭林， 渭源县艺龙电子商务公司负责人柴海龙等调研检查了锹峪乡、五竹镇、上湾乡、会川镇等我县电子商务服务站点。</p>
                    <p style="text-indent: 2em"><img src="/storage/app/media/uploaded-files/8-1.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"></p>
                    <p style="text-indent: 2em">调研小组先后参观了锹峪乡电子商务服务中心，甘肃陇渭通电子商务科技有限公司O2O体验馆，甘肃康鑫源生态农业科技发展有限公司电 子商务O2O验体馆，五竹镇渭河源村电子商务服务点，上湾乡神龙公司等地，切实感受了电子商务的发展为农村带来的便捷， 并与该点负责人就如何加快农村电子商务服务点建设运营进行了深入的交流。<img src="/storage/app/media/uploaded-files/8-2.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"><img src="/storage/app/media/uploaded-files/3.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"><img src="/storage/app/media/uploaded-files/8-4.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"><img src="/storage/app/media/uploaded-files/5.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"><img src="/storage/app/media/uploaded-files/8-6.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"></p>
                    <p style="text-indent: 2em">结束后，调研小组一行人前往廣印堂中药会议室召开座谈会， 在会上，黄晓清同志对于我县电子商务的发展给予了肯定，并希望我们一定要再接再厉， 加快我县国家电子商务进农村综合示范项目的进行，彻底解决农村“难买难卖”的现状。<img src="/storage/app/media/uploaded-files/7.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"><img src="/storage/app/media/uploaded-files/8.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"></p>

',
        ]);
        // attach with category
        $xinXiGongKai08->categories()->attach(5);


        $xinXiGongKai09 = Post::create([
            'title' => '渭源县电子商务公共服务中心初步确定清源镇六个村级电子商务服务点建设',
            'slug' => '渭源县电子商务公共服务中心初步确定清源镇六个村级电子商务服务点建设',
            'summary' => '截至6月9日,渭源县电子商务公共服务中心工作人员已完成对渭源县清源镇25个行政村和2个社区的初步考察，初步确定了苏家窑村、马家窑村、七圣村、里仁村、小石岔村和鼠山村六个村级电子商务服务点的建设。 根据每个村的自然环境以及人口分布情况，我们综合考虑每个村和相邻村的实际情况，结合具体情况区别对待的原则，防止“一刀切”的现象出现。',
            'published' => true,
            'published_at' => Carbon::create(2017, 6, 9, 0, 0, 0),
            //'featured' => true,
            // 'image' => '/news/01.jpg',
            'user_id' => 1,
            'images' => [],
            'files' => [],
            'content' => '
                <p style="text-indent: 2em">截至6月9日,渭源县电子商务公共服务中心工作人员已完成对渭源县清源镇25个行政村和2个社区的初步考察，初步确定了苏家窑村、马家窑村、七圣村、里仁村、小石岔村和鼠山村六个村级电子商务服务点的建设。 根据每个村的自然环境以及人口分布情况，我们综合考虑每个村和相邻村的实际情况，结合具体情况区别对待的原则，防止“一刀切”的现象出现。<img src="/storage/app/media/uploaded-files/10-2.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"></p>
                <p style="text-indent: 2em">考察时，对村级服务点的选择我们依据的条件主要有：服务点位置交通是否便利；服务点位置是否在本村人流量较大的区域； 村内正在进行农村电商创业或者对农村电商创业有浓厚兴趣的农村实体经营者、返乡大学生、退伍军人、农村青年在其住所或现有经营场所择优建设（贫困户、残障人士优先考虑）。 下一步，我们会继续对其他的村社进行更深入的考察调研，确定下一批的村级电子商务服务点的位置。 与此同时，我们将在近期开展电子商务应用普及性培训，增强农村群众对于电子商务的应用了解，加快推进渭源县国家电子商务进农村示范项目建设。<img src="/storage/app/media/uploaded-files/10-1.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"></p>

',
        ]);
        // attach with category
        $xinXiGongKai09->categories()->attach(5);


        $xinXiGongKai10 = Post::create([
            'title' => '【电商纪实】电商助力渭河源 千年药乡展新颜',
            'slug' => '【电商纪实】电商助力渭河源 千年药乡展新颜',
            'summary' => '“白露天气晴、谷米白如银”，9月7日是二十四节气的白露，在钟灵毓秀的渭河源头，连绵半个多月的阴雨天气终于被耀眼的阳光驱散，一眼望去，苞谷似金，高粱如火，蚕豆咧开了嘴，葵花笑弯了腰，马铃薯花枝招展，党参茁壮得如婴儿的胳膊。经过春夏的辛勤耕耘，勤劳善良的渭源人民终于迎来了中药飘香、硕果累累的收获季节，田间地头到处一片繁忙景象。然而，
                            比这一派农忙景象更为热闹火爆的，是渭源县国家电子商务进农村综合示范工作推进会暨电商业务提升培训会。',
            'published' => true,
            'published_at' => Carbon::create(2017, 9, 10, 0, 0, 0),
            //'featured' => true,
            // 'image' => '/news/01.jpg',
            'user_id' => 1,
            'images' => [],
            'files' => [],
            'content' => '
                        <p style="text-indent: 2em">“白露天气晴、谷米白如银”，9月7日是二十四节气的白露，在钟灵毓秀的渭河源头，连绵半个多月的阴雨天气终于被耀眼的阳光驱散， 一眼望去，苞谷似金，高粱如火，蚕豆咧开了嘴，葵花笑弯了腰，马铃薯花枝招展，党参茁壮得如婴儿的胳膊。经过春夏的辛勤耕耘， 勤劳善良的渭源人民终于迎来了中药飘香、硕果累累的收获季节，田间地头到处一片繁忙景象。然而，比这一派农忙景象更为热闹火爆的， 是渭源县国家电子商务进农村综合示范工作推进会暨电商业务提升培训会。<img src="/storage/app/media/uploaded-files/yx-1.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"></p>
                        <p style="text-indent: 2em">9月7日上午，为期2天的渭源县国家电子商务进农村综合示范工作推进会暨电商业务提升培训会在县财政局六楼会议室如期召开。 会议由中共渭源县委常委包翠霞主持，县政府副县长魏长缨做了重要讲话，各乡镇乡镇长、电商工作分管领导和业务专干、渭源县国家 电子商务进农村综合示范领导小组成员单位负责人参加了推进会，全县16个乡镇的分管领导和业务专干、网店经营人员、返乡务工青年、未 就业大学生、退伍军人等有意从事电子商务的人员共200多人参加了业务提升培训会。<img src="/storage/app/media/uploaded-files/yx-2.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"></p>
                        <p style="text-indent: 2em">在渭源县大力实施国家电子商务进农村综合示范项目，加快推进农村电商物流发展，打赢扶贫攻坚战的关键 时期，县上及时召开了这次工作推进及业务培训会。县委、县政府对这次会议非常重视，中共渭源县委副书记 、县政府县长蔺红军对会议作了专题批示，要求各相关单位要认真组织会议，注重实效，要高度重视电子商务工 作，全力配合国家电子商务进农村综合示范县项目实施。</p>
                        <h2>抢抓机遇 &nbsp; 全面推进渭源农村电商有力发展</h2>
                        <p style="text-indent: 2em">渭源县自2016年正式获批国家电子商务进农村综合示范县项目以来，县委、县政府高度重视，按照“ 政府引导、企业主体、市场导向”的原则，大力推进国家电子商务进农村综合示范县项目实施。 按照国家电子商务进农村综合示范县项目建设的相关要求，甘肃天奇网络科技有限公司按照“人找对 、点选准、事做实”的建点原则，采取选点与培训并行的方式，积极开展“一村一点”的村级电子商务公 共服务点建点工作。目前，已建成32个村级服务点，培训3600余人，乡村电商服务站点建设及普及性培训已取得了阶段性成果。<img src="/storage/app/media/uploaded-files/yx-3.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"></p>
                        <p style="text-indent: 2em">在推进会上，县委常委包翠霞要求，要主动寻找差距，正视问题；要强化组织领导，抓好落实；要 强化督导考核，务求实效，各乡镇、各有关部门要以本次会议为契机，对照目标要求，扎实开展工作，努 力开创我县农村电商和电商扶贫工作新局面。县政府副县长魏长缨指出，全县各级各部门要进一步提高认识 ，将国家电子商务进农村综合示范县的建设工作作为当前的一项重要任务，加快镇村两级电子商务公共服务站点 的建设，加快农村电商人才培养，加强对工作经验的总结提升和宣传，确保渭源县国家电子商务进农村综合示范县项目 建设有序推进、按期完成，让广大农村居民得到电子商务带来的便捷实惠。会上，县商务局局长赵效勇对国家电子商务进 农村综合示范县项目实施情况进行了通报。</p>
                        <h2>突出特色创新发展 &nbsp; 多种模式助力同行</h2>
                        <p style="text-indent: 2em">为了更好更快速的提升全县电子商务方面人员的业务水平，甘肃天奇网络科技有限公司特别邀请来自国扶办 友成企业家扶贫基金会的著名电商导师赵炎强、陇南市武都区电子商务中心讲师马旭辉、甘肃慧通电子商务 有限公司总经理张哲豪，分别从众筹扶贫在农村中的应用、农产品微营销、电商平台的介绍及淘宝开店及运营 技巧等三个方面，从理论和实践操作两个层面进行了深入浅出的分析和指导，并与大家在课堂上进行积极互动 ，进一步提升了参训人员的业务能力和水平。村级合伙人电商业务能力的提高，也将有力的促进镇村站点业务的顺利开展。<img src="/storage/app/media/uploaded-files/yx-4.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"></p>
                        <p style="text-indent: 2em">“你无法想象互联网的力量到底有多么强大，你也永远无法想象互联网给你会带来怎样的变化。小到个人的成长，大至一个县域经济的发展。 ”作为业界大咖，赵炎强老师由衷的发出了这样的感慨。在培训课上，赵老师向大家列举采取众筹的模式而取得成功的案例，并结合渭源县 域经济发展现状和农产品特色，提出如何具体创新众筹模式，打造品牌效应，大力发展农村电商的建议。<img src="/storage/app/media/uploaded-files/yx-5.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"></p>
                        <p style="text-indent: 2em">来自会川镇西关村的邓辉，平时以种植和出售药材为主，通过参加培训和老师面对面的交流学 习，使他对如何更好的开展农村电子商务有了更深的了解。培训会结束后，他立刻小试牛刀，在众 筹网上发起了一项为当地孤寡老人冬天献爱心的众筹项目，短短半个小时，就有10余人参与支持。</p>
                        <h2>依托互联网+ &nbsp;把青山绿水变成金山银山</h2>
                        <p style="text-indent: 2em">渭源是黄河最大支流渭河的发源地，也是中国古丝绸南路和唐蕃古道的必经之地，因境内有商末周初伯夷 、叔齐避居采薇之首阳山又名首阳县，是“中国马铃薯良种之乡”和“中国党参之乡”。县内有始建于明洪 武年间的灞陵桥，省级森林公园莲峰山和石门夜月、天井幽谷、太白云海、双门踩浪、鸟鼠同穴等30多处自然 景观，悠久的历史、灿烂的文化及优美的自然风景，构成了这里得天独厚的旅游资源。但因地处偏僻，传统分散 的小农经济严重制约了县域经济的发展。国家电子商务进农村示范项目的实施，“互联网+”为渭源县域经济发展 带来了千载难逢的发展机遇。<img src="/storage/app/media/uploaded-files/yx-6.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"></p>
                        <p style="text-indent: 2em">通过召开这次国家电子商务进农村综合示范工作推进会暨电商业务提升培训会，以点成 线、辐射全局，渭源县发展电子商务的氛围更为浓厚。同时，进一步明确了工作目标和 工作责任，完善了协作机制，为下一步创造性地开展工作，顺利推进国家电子商务进农村 综合示范县项目的建设，确保项目中期绩效考核打下了坚实的基础。<img src="/storage/app/media/uploaded-files/yx-7.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"></p>
                        <p style="text-indent: 2em">在渭源县，曾经只是自家吃的地达菜（地软），如今注册商标，开发成网货产品卖到全国各地！曾经卖8元钱一斤的洋芋粉条，如今20元一斤还供不应求！曾经卖 30元一罐的土蜂蜜，如今60元还需提前预定！曾经只能坐等药材商上门来收或千辛万苦拿到药材市场的渭源白条党参，如今通过互联网走进了南方人的药膳餐桌 ……这些火爆的场面不是发生在本地的实体店，而是发生在一个个电子商务服务点。更令人兴奋地是，开办农家乐、发展特色地方小吃、开发具有地域标志性的 品牌农特产品，农业与旅游业有效结合的模式和思路，已经被越来越多的渭源人接受。利用互联网大力发展具有渭源特色的绿色旅游业，真正把绿水千山变成金 山银山。<img src="/storage/app/media/uploaded-files/yx-8.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"></p>
                        <p style="text-indent: 2em">农村电商物流的发展，渭源人可以不用出门，就把农产品销往全国各地。随着渭源县 国家农村电子商务示范项目的大力推进，一台电脑、一部手机，一根网线，将渭源县呈现在 全国各地甚至是全世界眼前，“千年药乡”的深厚底蕴将乘借电子商务的快车道开创出一片灿烂 的未来。</p>
        ',
        ]);
        // attach with category
        $xinXiGongKai10->categories()->attach(5);



        $xinXiGongKai11 = Post::create([
            'title' => '【电商扶贫】电商扶贫成亮点，瓶颈依然存在！',
            'slug' => '【电商扶贫】电商扶贫成亮点，瓶颈依然存在！',
            'summary' => '长期以来，贫困地区由于地理位置、交通条件等因素限制，农产品销售渠道单一、多囿于本地市场，带来农民脱贫致富出路少、产品销售价格偏低、产业开发收效甚微等一系列问题。开展电商扶贫，帮助贫困地区建立农产品进城物流体系，是多赢的选择。对贫困地区的农民来说，农产品可直接对接城市市场，大幅减少流通过程的中间环节，增加农民收入；对城市居民而言，农产品中间渠道减少，流通成本降低，终端消费者能以更低的价格购买到农产品。同时，农村电商从“地头直达餐桌”的模式，也为城市居民提供了更多消费选择，促进了私人定制式的个性化消费。',
            'published' => true,
            'published_at' => Carbon::create(2017, 9, 10, 0, 0, 0),
            //'featured' => true,
            // 'image' => '/news/01.jpg',
            'user_id' => 1,
            'images' => [],
            'files' => [],
            'content' => '
                 <p style="text-indent: 2em">长期以来，贫困地区由于地理位置、交通条件等因素限制，农产品销售渠道单一、多囿于本地市场，带来农民脱贫致富出路少、产品销售价格偏低、产业开发收效甚微等一系列问题。开展电商扶贫，帮助贫困地区建立农产品进城物流体系，是多赢的选择。对贫困地区的农民来说，农产品可直接对接城市市场，大幅减少流通过程的中间环节，增加农民收入；对城市居民而言，农产品中间渠道减少，流通成本降低，终端消费者能以更低的价格购买到农产品。同时，农村电商从“地头直达餐桌”的模式，也为城市居民提供了更多消费选择，促进了私人定制式的个性化消费。<img src="/storage/app/media/uploaded-files/fp-1.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"></p>
                 <p style="text-indent: 2em"><span>正因为如此，早在去年11月中央发布的《关于打赢脱贫攻坚战的决定》中，就将“电商扶贫”正式纳入精准扶贫工程，提出加大“互联网+”扶贫力度，实施电商扶贫工程，加快贫困地区物流配送体系建设。此次国务院扶贫办和京东的合作，推动电商行业巨头实施渠道下沉，参与贫困地区脱贫攻坚，就是“互联网+扶贫”的一次尝试，其效果值得期待。</span></p>
                 <p style="text-indent: 2em">国家政策的高度重视、电商巨头的积极响应，只是电商扶贫的第一步，未来还有诸多瓶颈亟待突破。比如，贫困地区基础设施建设滞后，物流运输成本过高；网络覆盖“最后一公里”建设不足；电商专业化人才缺乏，培训不够，农民对互联网思维下的现代营销方式比较陌生等。<img src="/storage/app/media/uploaded-files/fp-2.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"></p>
                 <p style="text-indent: 2em"><span>而我公司提出的“精准信息化扶贫”方案，则从根本上解决了这一问题。“精准信息化扶贫”是通过信息化手段，以农村智慧无线网络为基础，充分利用移动互联技术，采集建立扶贫“大数据”，在精准识别贫困户基础上，导入政策、产业、电子商务、金融、营销等综合资源与服务，实现与贫困户信息精准匹配，从而根据致贫原因精准施策、精准帮扶、精准服务，实现精准脱贫。</span></p>
                 <p style="text-indent: 2em">精准信息化扶贫的基础建设，如农村WIFI无线基站、系统技术研发、大数据中心建设等，河南磐石信息技术有限公司提供解决方案和技术支持，由政府出资建设。磐石公司通过自身技术优势，以农村智慧无线为基础，以扶贫大数据为抓手，以电子商务为工具，以产业升级孵化为动力，整合各类服务农村的优质资源，为政府和乡村群众提供切切实实可以帮助实业发展、农民致富的精准服务。<img src="/storage/app/media/uploaded-files/fp-3.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"></p>
                 <p style="text-indent: 2em"><span>把农民手中的产品卖出去，为农民分忧解难实现增收，是目前贫困农村脱贫致富的 核心关键；给农民提供免费上网服务同时，提供可使农产品外销、工业品下沉所需的农村电商交易平台，让农民足不出户挣大钱，坐在家里购买生活用品，享受小康生活。<img src="/storage/app/media/uploaded-files/fp-4.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"></span></p>

',
        ]);
        // attach with category
        $xinXiGongKai11->categories()->attach(5);

        //
        // 信息公开 end
        //

    }
}



