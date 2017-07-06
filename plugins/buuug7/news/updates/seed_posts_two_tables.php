<?php namespace Buuug7\News\Updates;

use Buuug7\News\Models\Category;
use Buuug7\News\Models\Comment;
use Buuug7\News\Models\Post;
use Carbon\Carbon;
use October\Rain\Database\Updates\Seeder;

class SeedPostsTwoTables extends Seeder
{
    public function run()
    {
        //
        // 电商动态 start
        //


        $dianShangDongTai01 = Post::create([
            'title' => '小心！继微信之后支付宝也将对提现收费了',
            'slug' => '小心！继微信之后支付宝也将对提现收费了',
            'summary' => '9月12日消息，支付宝今日对外发布公告表示，因综合经营成本上升，为了持续向用户提供更多优质服务，自2016年10月12日起，将对个人用户超出免费额度的提现收取0.1%的服务费，个人用户每人累计享有2万元基础免费提现额度。在用完基础免费额度后，用户可以使用蚂蚁积分兑换更多免费提现额度。',
            'published' => true,
            'published_at' => Carbon::now(),
            'featured' => true,
            'image' => '/news/01.jpg',
            'user_id' => 1,
            'images' => [],
            'files' => [],
            'content' => '
            <p>9月12日消息，支付宝今日对外发布公告表示，因综合经营成本上升，为了持续向用户提供更多优质服务，自2016年10月12日起，将对个人用户超出免费额度的提现收取0.1%的服务费，个人用户每人累计享有2万元基础免费提现额度。在用完基础免费额度后，用户可以使用蚂蚁积分兑换更多免费提现额度。</p>
            <p>支付宝方面称，支付宝的提现涉及“提现到本人银行卡”和“转账到他人银行卡”两个功能。按照调整后的规则，支付宝也对超出免费额度的部分按提现金额的0.1%收取服务费，单笔服务费不到0.1元的则按照0.1元收取。不同的是，支付宝个人用户可以累计享有2万元元基础免费提现额度，这个额度是微信的20倍。</p>
            <p>据了解，除提现外，使用支付宝进行消费、理财、购买保险、手机充值、水电煤缴费、挂号、缴纳交通罚款、使用手机支付宝转账到支付宝账户、还款等服务不受任何影响，用户免费使用的同时还可以获得蚂蚁积分，在用完免费额度后，用户累积的蚂蚁积分可以用于兑换免费提现额度。支付宝方面介绍，目前兑换比例是，1个蚂蚁积分可以兑换1块钱的免费提现额度，上不封顶。</p>
            <p>对于备受关注的余额宝，支付宝公告表示，余额宝资金转出，包括转出到本人银行卡和转出到支付宝余额将继续免费。不过，2016年10月12日起，用户从余额新转入余额宝的资金，转出时只能转回到余额，不能直接转出到银行卡。</p>
            <p>相关人士介绍，这意味着10月12日之前，用户将余额转入余额宝，不但可以随时用于消费，在10月12日之后还是可以任意转入自己的银行卡。“如果余额里有钱担心被收费，现在把钱转入余额宝会是一个最佳选择。</p>
            <p> ”关于收费原因，支付宝方面称，源于“综合经营成本上升较快”，调整提现规则是为了减轻部分成本压力。此前，微信宣布提现收费时也表示“并不是追求营收之举，而是用于支付银行手续费。”今年3月，微信已经开始对用户提现收取0.1%的手续费，每位用户累计享有1000元免费提现额度。</p>
            ',
        ]);
        $dianShangDongTai01->categories()->attach(2);

        $dianShangDongTai02 = Post::create([
            'title' => '阿里巴巴拥抱外贸大数据时代 加速向交易型平台转型',
            'slug' => '阿里巴巴拥抱外贸大数据时代 加速向交易型平台转型',
            'summary' => '电商1.0时代，B2B网站作为信息平台无疑帮助不少外贸企业解决了信息的展示和获取问题。随着电商进入2.0时代，单纯作为信息通道B2B网站显然难以满足外贸企业的新要求。如何转型应对？作为外贸B2B电商的领军企业，阿里巴巴的答案是：向交易平台转型，拥抱即将到来的外贸大数据时代。',
            'published' => true,
            'published_at' => Carbon::now(),
            'featured' => true,
            'image' => '/news/02.jpg',
            //'top' => true,
            'user_id' => 1,
            'images' => [],
            'files' => [],
            'content' => '
            <p>在电商1.0时代，B2B网站作为信息平台无疑帮助不少外贸企业解决了信息的展示和获取问题。随着电商进入2.0时代，单纯作为信息通道B2B网站显然难以满足外贸企业的新要求。如何转型应对？作为外贸B2B电商的领军企业，阿里巴巴的答案是：向交易平台转型，拥抱即将到来的外贸大数据时代。</p>
            <h4>展示平台到交易平台转型</h4>
            <p>“2.0时代，我们对于B2B网站的定义是交易平台，这个平台要从以前的信息展示平台转变为承接交易的平台”，阿里巴巴集团B2B跨境事业部总经理任庚向记者描述了阿里巴巴国际站正在进行的转型动作。</p>
            <p>2015年，阿里巴巴推出的信保产品就是其转型成果的一个体现。信保依托阿里巴巴平台积累的大数据，为企业提供交易上的权益担保，主要体现在安全性和履约性两个方面，由阿里巴巴进行背书，让买卖双方交易更加放心。“要实现线上交易，安全是商家最核心的考量，信保就是为了平台商家提供安全保障服务的产品”，任庚表示。</p>
            <p>如今，阿里巴巴国际站正处于从信息展示平台向交易平台转变的爬坡期。这个转型即包括顶层设计和组织架构的调整，也包括市场策略的转变。按照任庚的说法，这将是一个系统性的宏大工程。但他相信，阿里巴巴国际站的每一个人都会为这项工程不遗余力地去奋斗。</p>
            <h4>大数据 企业的金矿</h4>
            <p>实现线上交易平台的功能并非阿里巴巴转型的最终目标，阿里的下一步在于大数据挖掘。按照阿里巴巴的创始人马云的说法，大数据将是未来除了石油之外的另外一块重要能源，将是一个革命性的事物。</p>
            <p>在以往的传统线下交易模式中，数据是无法积累的，但线上交易却完全可以实现数据积累。据记者了解，当前阿里巴巴已经将数据积累放到了前所未有的高度。“因为数据能体现出企业的信用，而信用最终能转化为财富。”任庚同时表示，“对企业来说，数据将是一个最大的金矿。”</p>
            <p>这个金矿的价值表现在：一方面商家可以通过数据获取更多的商业机会，且科学有效的维护自己的客户体系；另一方面数据还可以转化为物流、金融方面等其他分层分级增值服务的全面支持，助力企业更好更顺利的展开跨境贸易。</p>
            <p>“通过大数据来反哺网站上的买卖双方，以及第三方等各个相关者，将是未来五到十年内B2B网站的一个发展趋势，这可以称之为电商的3.0时代”，任庚对记者表示。</p>
            <h4>“快、准、省”的新平台</h4>
            <p>电商3.0时代，阿里巴巴国际站对于客户的核心价值将体现在“快、准、省”三大方面。任庚告诉记者：“通过阿里巴巴全球最大的外贸B2B交易平台，我们让它的成交时间比线下交易更快；通过互联网这种高效匹配的方式，我们可以帮助商家更准确地找到买家客户；在省方面，在线交易除了时间省之外，我们还通过金融、物流等增值服务帮助企业节省成本。”</p>
            <p>随着平台交易模式的升级，Alibaba.com已经计划将信保产品和一达通外贸综合服务平台在全球范围内进行推广，用阿里巴巴平台的力量、经验、资源为全球卖家背书，一方面彻底解决线上交易信任这个核心问题，另一方面也为企业扫除出口、退税、结汇等方面的壁垒。</p>
            <p>在买家的引入上，阿里巴巴多管齐下，通过传统互联网引流以及和海外大型商会合作等方式，多维度寻找高质量的买家，为平台商户提供精准匹配。</p>
            <p>除了信保产品之外，一达通也会成为阿里巴巴做到快、准、省的实际应用工具之一。作为专业综合服务平台，一达通可以不断帮助企业解决出口、退税、结汇方面的难题，提高效率，降低成本，同时帮助企业积累数据，沉淀数据。</p>
            <p>“对于供应商而言，我们的转型升级以及我们对于数据积累的运用将会在未来给他们带来不菲的价值。”任庚坚定表示。</p>
            <h4>数据安全是阿里的底线</h4>
            <p>在电商3.0时代到来之时，交易流程透明化无疑是大势所趋，当贸易流程和成本控制不再成为商家的痛点，信息安全却有可能成为很多商家担心的问题。对此，阿里巴巴也有自己的应对之策。</p>
            <p>“首先，Alibaba.com是秉承开放、透明、公平这六字原则来进行运营的，从技术层面上阿里巴巴完全有能力确保交易数据的安全，这是我们的职责，也是我们的底线。”同时，任庚也表示，关于商家对于买家在线交易化可能存在的顾虑和担心他充分理解，由于惯性思维和既有习惯，任何新的变革都都需要时间去适应，但他相信率先拥抱变化的商家一定很快会打消顾虑和担心并迅速享受到信息数据的红利，因为阿里巴巴交易平台体系其实是向原有供应商和采购商都开启了一扇彰显自身实力和信用的大门，而开启的大门之外非但不是已有商机流失，反而是更多优质商机的呈现。任庚还强调，从平台的定义和属性来看，国际站本身不做自营业务，阿里巴巴国际站转型升级的本质是通过搭建互联网＋外贸的基础设施，建设外贸生态圈+交易大数据，从而为中小外贸企业赋能。</p>
            <p>不管是信用体系的培育还是综合配套服务的完善，在大数据模式的驱动下，平台交易化都将是阿里巴巴国际站必须跨越的第一步。任庚告诉记者，平台交易化和全球化是阿里巴巴国际站的长远战略，Alibaba.com将在外贸大数据时代到来之前，完成向交易型平台模式的彻底转型，并让它尽可能覆盖到全球更广阔的市场。</p>
            ',
        ]);
        $dianShangDongTai02->categories()->attach(2);

        $dianShangDongTai03 = Post::create([
            'title' => '进口电商旺季来袭：解决跨境痛点，物流基建是关键',
            'slug' => '进口电商旺季来袭：解决跨境痛点，物流基建是关键',
            'summary' => '每年的下半年，是跨境电商最重要的分水岭，如何在众多对手的夹击中赢得一年的大丰收，是跨境电商最关心的问题。因为在每年的9-12月，国外很多节日是在此期间，并且还会享受较大的折扣力度，就是大家俗称的销售旺季。但是在旺季即将到来之际，跨境电商在兴奋之余，还有些担心...',
            'published' => true,
            'published_at' => Carbon::now(),
            //'featured' => true,
            'image' => '/news/03.jpg',
            'top' => true,
            'user_id' => 1,
            'images' => [],
            'files' => [],
            'content' => '
            <p>每年的下半年，是跨境电商最重要的分水岭，如何在众多对手的夹击中赢得一年的大丰收，是跨境电商最关心的问题。因为在每年的9-12月，国外很多节日是在此期间，并且还会享受较大的折扣力度，就是大家俗称的销售旺季。但是在旺季即将到来之际，跨境电商在兴奋之余，还有些担心...</p>
            <p>旺季的到来，就意味着物流又要成为最大的痛点了。因为跨境购物流速度慢，无论对买家还是卖家都是痛，再加上货物积压、快递环节断层，种种问题累积在一起，就会形成跨境电商的压力。这点对于进口电商来说，将是更大的挑战，目前进口物流供应链还存在不少问题，在旺季之前，进口电商需要提前备战。</p>
            <h4>优化物流环节，加强物流基建</h4>
            <p>4.8新政以后，进口电商对于促销都没有之前热切了，但是下半年的旺季促销，大家还是不会错过的。不过可以预见到的是，2016年的旺季促销，将与往年不同，因为经历过一次物流“灾难”的进口电商们，已经提前开始加强物流基础建设了。</p>
            <p>八达通的kevin表示，物流的本质就是快速安全到达客户手中，根据这方面的需求，就是需要从物流供应链这方面着手，当下的进口物流供应链应当全渠道布局，优化物流环节，加强物流基建，在此基础上，可以提高客户的满意度，并且适当的缓解物流压力，在旺季期间，不至于很被动。</p>

            <p>对于目前的物流系统，kevin认为还是存在完善的必要的，很多大的进口电商企业，可以有强有力的资金链来支撑，但是对于中小型企业来说，就是一个很大的难点，也是一个恶性循环的过程。当下进口平台还是存在同质化竞争的问题，一旦物流跟不上，客户就会选择其他商家，这一类的中小型进口企业就更难与优质的物流商进行合作了。</p>
            <p>因此，物流缓解的优化，以及物流基础建设就显得相当重要。</p>
            <h4>精选通关方式，缓解物流压力</h4>
            <p>每到旺季，备货是其中一个难题，因为这是可以保证进口电商的货源渠道保持畅通，而且应该在8月初就要为旺季进行备货，否则会出现断货的情况。</p>
            <p>汇通天下CEO孙剑巍表示除此之外，还要注意通关方式的选择，比如一件代发、保税仓、直邮、个人物品等方式，都是可以尝试的。</p>

            <p>孙剑巍表示在4.8新政之后，无论是选择了保税仓，还是选择海外仓，这都是依据企业自身体量和业务决定的。具体还是需要从进口企业自身出发，每种通关方式都有利有弊，就拿直邮来说，直邮成本高于B2B2C的保税备货模式，而且也没有时间优势，但是直邮可以不受通关单的限制，同时也不受单笔订单两千元的限制。</p>
            <p>选择好适合进口电商发展的通关方式，有利于物流在活动期间，保持相对较顺畅的流通。</p>
           <h4>提前备货，大平台这么应对“爆仓”</h4>
            <p>对于中小企业来说，往往会选择与进口物流商进行合作，减少自己的压力。但是大的进口平台往往会从全局角度着手，需要通盘考虑，也更愿意以保税仓为主流模式，因为他们的无论是在企业体量、商品种类和物流数量上都有比较大，实力上也比较强。</p>
            <p>因此孙剑巍认为在这方面天猫国际就做的相当好，通过建立菜鸟保税仓，让自己的货物有自己的储存地点，将备货集中起来。遇到双11、双12这样的活动，就有一定的货源保障，并且在一定程度上化解“爆仓”的尴尬。</p>
            ',
        ]);
        $dianShangDongTai03->categories()->attach(2);

        $dianShangDongTai04 = Post::create([
            'title' => '2016中国网红经济+社交电商平台高峰论坛圆满落幕！',
            'slug' => '2016中国网红经济+社交电商平台高峰论坛圆满落幕！',
            'summary' => '12月10日下午，红动中国—2016中国首届网红经济+社交电商高峰论坛在义乌幸福湖国际会议中心隆重举行。来自全国各地的众多行业负责人、网红大咖、学术专家、自媒体领军人物以及流量达人等齐聚义乌，共商在全球经济低迷状态下如何挖掘“网红经济”商机来助推经济发展大计。',
            'published' => true,
            'published_at' => Carbon::now(),
            'featured' => true,
            'image' => '/news/04.jpg',
            'user_id' => 1,
           // 'top' => true,
            'images' => [],
            'files' => [],
            'content' => '
            <p>12月10日下午，红动中国—2016中国首届网红经济+社交电商高峰论坛在义乌幸福湖国际会议中心隆重举行。来自全国各地的众多行业负责人、网红大咖、学术专家、自媒体领军人物以及流量达人等齐聚义乌，共商在全球经济低迷状态下如何挖掘“网红经济”商机来助推经济发展大计。</p>
            <p>此次高峰论坛由中国国际电子商务中心、义乌市北苑街道办事处主办，浙江万营科技有限公司、北京新媒体联盟、北京万营新盟传媒有限公司、义乌电子商务服务公共中心承办。浙中新报、洋食网、奇迹传媒、杭州白莉生物科技有限公司协办。</p>
            <h4>规范“网红文化” 深挖“网红经济”</h4>
            <p>“网红经济不可小觑，它已成为推动我国经济发展的一个重要动力。”此次高峰论坛负责人万营科技常务副总朱婷婷表示，2016年被称为“网红经济元年”，“网红”已经成为自媒体时代不可取代的现象级产物，“网红”带来的经济效应已引起越来越多人的重视。“网红”借势新媒体平台和粉丝效应实现了千万级流量的传播，并不断出现在各类消费领域。借助网红电商在粉丝交易转化率上的明显优势，可以很好地解决巨大的过剩供应链问题，从而拉动新的消费增长点。</p>
            <p>朱总表示，随着网红电商行业的急速发展，也出现了一些乱象亟待规范。义乌作为全国的电商高地，无论是在产业端还是社会人群，都是当之无愧的“网红大市”。如何更好地增进和扩大全国网红电商之间的了解与交流，展现他们的新思想，中国首届网红经济+社交电商高峰论坛将大有作为。</p>
            <p>此次高峰论坛以“红动中国”为主题，旨在更好地总结网红经济与社交电商的融合经验案例，从政府、平台、企业等网红经济和电商相关方多角度分享和讨论推动网红与电商深度融合的难点和痛点，通过组建规范组织，结合产业链上下游资源，共同探讨行业发展趋势，寻求行业发展之路，推动行业的持续健康发展。</p>
            <p>“通过举办高峰论坛，增加行业间的了解、扩大行业交流，呈现网红电商的一些新思想，从而更好地规范‘网红文化’，挖掘‘网红经济’商机。”朱总表示：此次活动不仅有利于推动义乌“电商换市”转型升级，在促进义乌地方经济发展方面发挥重要作用，而且对于助推网红经济在全国乃至全球发展也将产生积极影响。</p>
            
            <h4>“大咖秀”+“直播秀” 现场气氛火爆</h4>
            <p>据了解，此次高峰论坛上，中国电子商务协会PCEM网络整合营销研究中心主任刘东明，知名品牌投资人、电商及社会化营销专家、淘宝达人学院官方讲师黄博，中国最大移动视频独角兽企业“一下科技”市场商务总监何金凯，资深媒体人、新媒体平台“蓝媒汇”创始人韩辉、阿里巴巴淘宝直播负责人远凡等众多行业专家、大咖将齐聚义乌，轮流做主题演讲，内容涵盖网红人才的培育、网红+电商聚合运营模式、如何有效的促进网红生态圈的健康发展等。</p>
            <p>中国国际电子商务中心、义乌市电商办、北苑街道办事处等相关负责人，NewMedia新媒体联盟创始人赵亮及袁国庆等众多大咖出席了高峰论坛。同时参会的还有在行业内颇具影响力的部分网红大咖、学术专家、自媒体以及流量达人等。</p>
            <p>同时，电子商务公共服务中心对本次高峰论坛全程进行了在线同步视频直播，使不能出席现场的行业人士也能同步参与观摩本次盛会，反响热烈。</p>
            ',
        ]);
        $dianShangDongTai04->categories()->attach(2);

        $dianShangDongTai05 = Post::create([
            'title' => '社交第二春来临 微博和腾讯“钱景”无限',
            'slug' => '社交第二春来临 微博和腾讯“钱景”无限',
            'summary' => '这两天不知多少股民又陷入祥林嫂模式：为什么50元就卖了新浪；为什么在150元时就觉得腾讯股价太高了？！中国股民被科技泡沫论折磨了十多年，而中国的科技公司从来只用财报回应外界质疑。腾讯、新浪微博用2017年一季度财报，再一次证实了社交网络的长盛不衰。微博的数据尤为引人注目，营收和用户均有大幅增长。看样子，似乎真的可以给Twitter上一课了。',
            'published' => true,
            'featured' => true,
            'top' => true,
            'published_at' => Carbon::now(),
            'image' => '/news/05.jpg',
            'user_id' => 1,
            'images' => [],
            'files' => [],
            'content' => '
            <p>这两天不知多少股民又陷入祥林嫂模式：为什么50元就卖了新浪；为什么在150元时就觉得腾讯股价太高了？！中国股民被科技泡沫论折磨了十多年，而中国的科技公司从来只用财报回应外界质疑。</p>
            <p>腾讯、新浪微博用2017年一季度财报，再一次证实了社交网络的长盛不衰。</p>
            <p>微博的数据尤为引人注目，营收和用户均有大幅增长。看样子，似乎真的可以给Twitter上一课了。</p>
            <p>微博在2017年第一季度，实现净营收1.992亿美元，较上年同期增长67%，超过公司此前预期，净利润更同比增长了近三倍。</p>
            <p>截至2017年3月31日，新浪微博月活跃用户达3.4亿，按年增长30%，创造上市以来单季度增幅新高，并历史性地超过Twitter。</p>
            <p>微信则继续夯实了全民APP的地位。</p>
            <p>从腾讯披露的财报看，微信合并WeChat的用户数，在今年第一季度达到9.38亿，同比增长23%，这一增速虽略低于2016年第四季度的28%，但也堪称高速。</p>
            <p>腾讯社交网络的变现能力正在逐步展现。财报期内，社交网络收入122.97亿元，同比增长56%。</p>
            <p>从微博到微信，营收和用户全面增长，宣告了一个社交全盛时代的到来。而就在一两年前，快手、探探的速崛起，人们还不禁为“两微”的老派捏把汗。微博和微信缘何焕发第二春？</p>
            <p>首先，从大势上看，中国互联网仍在高速成长。</p>
            <p>据CNNIC统计，中国仍然有6亿多人尚未接入互联网，这几乎相当于一个欧洲、两个北美的市场规模，潜力巨大。</p>
            <p>在既有庞大存量用户基础上，微博和微信仍然在加速渠道下沉，在这一过程中，大批低线城市和农村居民被发展成新用户。</p>
            <p>早在2014年，微博就把渠道向三四线城市下沉作为运营的首要任务。为了能够最广泛地抵达用户，微博选择了和电视媒体合作，在爆款综艺节目中植入互动环节。仅在2014年，微博与20多家卫视、超过100档电视节目进行合作，包括《中国好声音》《我是歌手》《爸爸去哪儿了》等热门节目。微博数据中心披露的数据显示，到2016年，「二、三线占据微博整体用户的半壁江山。」</p>
            <p>不过，「珠三角、长三角、北京等经济发达地区以及人口大省的微博用户占比较大。」相比之下，微信对低线城市的渗透更为彻底、更接地气，从北上广的写字楼到贵州的小县城，微信也许是当前除QQ以外，人口渗透率最高的互联网应用，甚至在一些地方，上微信几乎等同于上网。</p>
            <p style="text-align: center"><img src="/storage/app/media/news/20_01.jpg" alt=""  ></p>
            <p style="text-align: center"><img src="/storage/app/media/news/20_02.jpg" alt="" ></p>
            <p>其次，社交网络仍然是最易获得的精神避难所。</p>
            <p>经济高速增长，其副产品就是阶层巨变所引发的社会思想动荡以及全民不平和：移民热再起反应了富裕阶层对财富的不安全感；对限购、学区房的风声鹤唳折射了中产的焦虑；一呼百应的逃离北上不过反复消费了底层对未来的无望。</p>
            <p>微信、微博已是许多人离不开的电子吗啡。</p>
            <p>承担欧盟研究基金出资的「全球社交媒体影响研究」项目的英国科学院院士、人类学家丹尼尔·米勒带领研究团队在中国、英国、巴西、印度等9个国家的田野调查发现：</p>
            <p>社交网站修正了其他新媒体所带来的孤立化与个体化的影响，将人们重新带回了那个曾几何时人类担心早已失落的、紧密交织的社会关系之中。</p>
            <p>许多人在现实生活中过得并不如意，但在社交网络中寻找了理想生活所带来的快感。丹尼尔·米勒团队在中国的调查发现：中国社会已完成两种迁徙潮——从乡村到城市，从线下到线上，而后者让人更为接近和融入现代生活。伦敦大学学院人类学博士生王心远在浙江一个小镇十多个月的调查发现，对于那些流水线上的90后来说，「手机以外的生活是无法忍受的。」</p>
            <p>最后，微博和微信仍在不时调整策略应对市场变化。</p>
            <p>微博不必说，通过投资一直播切入了火热的直播市场，另外早期对PGC视频内容的扶持，也换取了短视频江湖了抢占了一席之地。新浪微博CEO王高飞近期也透露了短视频战略方向的大调整：「从今年开始，我们将产品的中心放在UGC（用户原创内容）的视频领域。」</p>
            <p>微信虽然并未上线直播功能，但是其即时通讯工具的自然属性，赋予了其对于任何潮流慢半拍的底气。当然，并不是所有潮流都需要去追赶。作为国民APP，微信每一步功能拓展都显得极为克制，以避免伤及用户体验</p>
                ',
        ]);
        $dianShangDongTai05->categories()->attach(2);

        $dianShangDongTai06 = Post::create([
            'title' => '知识付费也迎来下半场 走向全面电商化',
            'slug' => '知识付费也迎来下半场 走向全面电商化',
            'summary' => '前不久罗振宇停止了视频更新，随后又把他坚持1600天的事情放弃了，不直接发语音了；日前，罗振宇又召开了得到APP的首场知识发布会，全面向知识付费发起了进攻。无独有偶，随后知乎高调上线了新的产品入口“知识市场”，用户可以在此入口对知乎Live、知乎书店和付费咨询等所有付费产品直接购买，为了确保市场的健康发展，知乎还推出了一系列市场化机制：如七天无理由退款，评价功能再升级，流量补贴策略等等，这无疑宣告了知识付费电商化时代的到来，知乎也正在努力将自身塑造成知识电商时代的“天猫”。',
            'published' => true,
            'published_at' => Carbon::now(),
            'image' => '/news/06.jpg',
            'user_id' => 1,
            'images' => [],
            'files' => [],
            'content' => '
            <p>前不久罗振宇停止了视频更新，随后又把他坚持1600天的事情放弃了，不直接发语音了；日前，罗振宇又召开了得到APP的首场知识发布会，全面向知识付费发起了进攻。</p>
            <p>无独有偶，随后知乎高调上线了新的产品入口“知识市场”，用户可以在此入口对知乎Live、知乎书店和付费咨询等所有付费产品直接购买，为了确保市场的健康发展，知乎还推出了一系列市场化机制：如七天无理由退款，评价功能再升级，流量补贴策略等等，这无疑宣告了知识付费电商化时代的到来，知乎也正在努力将自身塑造成知识电商时代的“天猫”。</p>
            <h2>知识付费上半场：不缺爆款，但问题频发</h2>
            <p>互联网背景下，各种免费内容爆炸式涌现出来，信息量严重过载，消费者发现，当大量摄入重复低质内容不再能带来好处，又增加了自己时间成本的时候，为优质内容付费的意愿便更加强烈了。</p>
            <p>于是2016年这个知识付费的元年，涌现了以知乎、分答、得到等为代表的知识付费平台，也涌现了诸多知识付费的爆款，罗振宇、李笑来等知识大V可以说是赚得盆满钵满，但慢慢随着市场下沉及产业链拓展，知识付费不断涌现出诸多问题。</p>
            <h4>一、知识付费的热度在回落</h4>
            <p>目前知识付费正在呈现这样一个图景：各种“知识付费”产品在不断增多，但用户的时间越来越不够用，以及大量用户无法从过往的“知识付费”产品中感受到价值，由此影响到了知识产品的复购率问题。</p>
            <p>一方面，相当一部分用户购买知识产品只是为了解决短期问题，在解决之后短期内不会进行二次消费；另一方面，用户会有冲动消费的现象，在某一时刻购买大量的知识付费产品，然后在后期发现很难消化，继而影响到二次消费的意愿，由此也导致了发展到现在知识付费的热度开始有所回落。据了解今年3月以来，越来越多举办在线付费讲座的平台运营方与讲者表示“用户报名后准时过来上课的越来越少了。”</p>
            <h4>二、线上版权保护困难</h4>
            <p>对于知识付费来说，版权问题一直是难以跨越的巨大障碍，文字类、音频类的内容盗版现象仍然屡禁不绝。以知乎为例，去年已联合淘宝、闲鱼查处200多次知识侵权行为。</p>
            <p>一直以来知识产权的模糊性使得很多侵权行为难以界定，一些商业网站将知识付费内容改头换面作为自己的原创内容发出，用户却面临缺乏证据无法维权的状态，目前知识付费的用户正进一步下沉，这一问题会更加严重。</p>
            <h4>三、内容筛选和推广机制缺乏</h4>
            <p>目前，知识付费平台主要通过IP化和用户评价来解决这一缺憾。但无论IP化还是用户评价，都会造成头部效应，挫伤后期进入的知识生产者的积极性。可见在未来知识IP身价进一步提高的情况下，平台方如何实现优质内容的推送、筛选和推广，以及孵化新的IP，会直接决定之后的知识付费战争成败。</p>
            <p>另外知识付费不同于在线教育，它所呈现的是相对碎片化的内容，因此也缺乏相应标准化的评价体系，设置合理的内容筛选和推广机制就成为了新的问题，随着知识付费内容不断增多，这一问题将越发尖锐。</p>
            <p>知乎显然清醒地认识到了这些问题，于是在诞生11个月之际，知乎Live决定提前跨出它的下一步。</p>
            <h2>知乎推出“知识市场”规范知识付费，开启下半场战役</h2>
            <p>5月17日，知乎最新版APP一级页面给用户呈现了一个最为醒目的“市场”新入口，里边汇集了知乎Live、知乎书店、付费咨询这三类主要的付费服务形态，这一举措，显然是在告诉用户和竞争对手：我已经先一步将付费内容集中化管理，创新出一个天猫式的知识生态。</p>
            <p>其实早在去年12月3日喜马拉雅FM就发起过一个“123知识狂欢节”，通过造节将知识市场对标淘宝双11的实体商品，但由于其并没有实打实的做出一个集中的管理区域，错过了探索的先机。而此次知乎市场将付费和免费的社区内容严格分开，利用电子书、知乎Live、在线课程、在线一对一付费咨询等方式将知识明码实价的售卖，附上优惠机制，俨然成为了一个知识版的天猫。</p>
            <p>为何知乎采取了类似阿里的运营模式，很多人不晓知乎背后的意图，这个“市场”到底能为知乎带来什么，我们用天猫购物的思维看待或许会清晰很多。</p>
            <p>首先，做电商商品要量大类多。基于本身已经存在的社交关系和关注关系，现在知乎“市场”所囊括知识“商品”品类和主题，已经足够丰富，据悉知乎Live已经举行了超过2900场，有超过269万人次参与过Live，用户复购率达到了43%。Live已经深刻的改变了用户获取信息的习惯。一来满足了用户不同场景的不同需求，二来这个集中的入口，可以更有效的汇集UGC，从而为知乎带来更好的内容产出；</p>
            <p>其次，电商卖产品路径更直接。相关数据显示，从获取信息能力来看，27.6%的人经常会有想获取特定信息或者资源却无从入手的情况，偶尔会有的人占五成。以前很多用户在知乎社区里面找寻Live、电子书或者付费咨询的时候，都会经历一个很长的路径，这在很大程度上减少了付费用户的转化率，如今LIVE、电子书、长尾话题、职业规划等等主题都清晰的摆在用户面前，加上基于用户在社区的搜索行为、社交关系、关注关系等数据和兴趣的智能算法推荐，让用户既享受到便捷的服务，又感受到了平台的诚意，付费似乎显得理所当然；</p>
            <p>最后，电商化后知识付费者更有保障。现在很多平台只是炒爆款，大都抱着赚一票就走的想法，既坑了大众又砸了自己招牌，最后只能竭泽而渔，甚至祸害了知识付费市场良性发展，于此，知乎升级的市场机制显得意义重大。一方面，七天无理由退款，用户评价、Live发起人的保证金等机制可以足够吸引用户的目光并促使他们付费，另一方面高评价主讲人的流量补贴、与咸鱼淘宝开通绿色通道合作防止产品侵权等，又保障了知识售卖者的利益，整个知识生态得以健康运行。</p>
            <p>综上看来，从一开始的打磨产品，功能、体验优化，到围绕各种主题、内容、使用场景的探索，再到推出了一系列市场化机制，知乎显然早有清晰规划和长远打算，而对于行业来说，知乎敢于站出来，围绕用户需求和自身情况，积极探索，推出知识市场，成为“知识付费”新规则的制定者，必然会促进当下高冷炙热的知识付费生态走向规范化，因此今后更多的“约定俗成”将会被彻底颠覆。</p>
            <h2>行业将进入淘汰期，未来知识付费或将全面电商化</h2>
            <p>由于知识付费的本质是通过交易手段使得更多的人愿意共享自己的知识积累和认知盈余，是通过市场规律和便利的互联网传播达到信息的优化配置，所以知识付费行业必定会直接改造和融合现有的教育业、出版业、广告业、咨询服务业，成为万亿以上规模的巨大产业。</p>
            <p>知识付费有巨大的市场前景，但在资本加持、创业者纷涌而至后，这个行业的竞争也变得越发激烈，目前平台级玩家和头部玩家占了整个行业的大头。除了知乎、得到、分答、喜马拉雅这四大阵营，微博、微信这些巨头也都在垂涎欲滴这块美味的蛋糕，尤其不可忽视的是，在平台以电子围栏圈起的跑马场之外，“野生”力量甚至已悄然蔓延开。</p>
            <p>一个叫DK地产频道的账号，通过销售购房课和各地房价报告做到了165万的销售额；一个专注农业经营的账号“联合农创”，卖99元年度会员，还开设“合作社运营专题课”、“补贴申报专题课”等极度垂直专业的付费课程，销售额35万元；“一带一路内参”卖商业情报，销售额达到121万元；陪伴读书的收费订阅、教人选股的、教人写作的、教人缝纫的、教人做跨境电商的……这些都在过去短短几个月时间杀进了知识付费的掘金潮里。</p>
            <p>如今的知识付费，被一部分平台玩家吞食头部红利，另外还被那些高度去中心化的知识生产者（包括自媒体）悄悄地围上来舔食，至此平台和去中心的对拼戏码开始上演，怎样才能打赢下半场这场战争也成为了众人关注的焦点。</p>
            <p>其实，对于从业者来说，用户最核心的消费因素是内容质量，可见要想成为知识付费最终的赢家，必须要围绕用户精心打造真正好的付费产品，也就是说，只有建立一套体制，在充分地保障消费者权益的前提下，提升他们的满意度，用户才有可能复购和长期地消费，也让优质的内容获得更多的流通的机会，从而获得致胜的先机。</p>
            <p>在此方面，知乎率先推出“知识市场”助其走在了行业前头，此次推出的知识市场，既开启了一篇知识付费的电商化蓝图，推动行业走向规范化，又运用优胜劣汰的市场机制，率先开启全面电商化的知识付费时代，当然，电商模式并不是最终唯一的形态，怎样规范的完成知识产品的商品化，才是未来知识付费下半场更重要的战役。</p>
                ',
        ]);
        $dianShangDongTai06->categories()->attach(2);

        $dianShangDongTai07 = Post::create([
            'title' => '苹果掘金“打赏”：要分成30%更改付费规则',
            'slug' => '苹果掘金“打赏”：要分成30%更改付费规则',
            'summary' => '被苹果盯上的公司绝不止微信一个。如果你使用iPhone手机或者iPad平板，那么你在资讯类、付费问答、直播平台等客户端内，要给作者赞赏或者给主播打赏，你将不能使用微信或支付宝等流行的第三方支付方式，而必须通过苹果应用商店（App Store）的“应用内购买”（In-App Purchase，简称IAP）机制进行',
            'published' => true,
            'published_at' => Carbon::now(),
            'image' => '/news/07.jpg',
            'user_id' => 1,
            'images' => [],
            'files' => [],
            'content' => '
            <p style="text-align: center"><img src="/storage/app/media/news/17_01.jpg" alt="" ></p>
            <p>被苹果盯上的公司绝不止微信一个。如果你使用iPhone手机或者iPad平板，那么你在资讯类、付费问答、直播平台等客户端内，要给作者赞赏或者给主播打赏，你将不能使用微信或支付宝等流行的第三方支付方式，而必须通过苹果应用商店（App Store）的“应用内购买”（In-App Purchase，简称IAP）机制进行。</p>
            <p>5月22日，澎湃新闻发现，受苹果公司最新规定影响，今日头条、知乎、映客已经在近期改变了用户赞赏的支付方式。</p>
            <p>5月19日，华尔街日报称，据微信及其他公司的高管透露，苹果已经通知几个中国社交网络App，根据App Store的规定，要求它们禁用赞赏功能，并认为小费相当于应用内购买，和购买游戏、音乐、视频相似，每一笔应用内购买交易苹果都会抽取30%的分成，小费也应该分成。</p>
            <p>上述报道称，苹果告诉两家公司的CEO，说它们如果拒绝做出改变，App将无法升级到新版本，甚至有可能被App Store除名。其中一名CEO愤怒地说：“我们的平台没有收取任何费用，而苹果什么也没干就要收30%的分成。”</p>
            <p>今日头条。左边是iPhone手机，右为安卓手机。</p>
            <p>原创作者在今日头条发布文章或视频时，可以开启赞赏功能接受用户赞赏。5月22日记者发现，今日头条内，好几篇头条号自媒体发布的文章，在安卓客户端有赞赏按钮，但在iOS客户端没有该按钮，无法赞赏。</p>
            <p>“我今天发文开启了赞赏功能，但iOS端没有显示。”一名头条号原创作者5月22日告诉澎湃新闻。</p>
            <p>目前，头条号发布的视频在iOS客户端上仍可以接受赞赏，用户可以通过微信或支付宝进行转账。</p>
            <p>截至发稿，今日头条发言人未予置评。</p>
            <p style="text-align: center"><img src="/storage/app/media/news/17_02.jpg" alt=""></p>
            <p><strong>知乎。左iPhone，右安卓。</strong></p>
            <p>知乎前两天刚刚上线了知识市场，其中汇集了知乎Live问答、知乎书店、付费咨询这三类主要的“付费”服务形态。不过iOS客户端的网友相当怀念曾经能用微信支付购买的日子，现在所有的购买都需要通过苹果应用商店“应用内购买”方式进行。</p>
            <p>网友称，苹果应用内购买的方式并不好用。比如要购买5.99元的一场知乎Live，需要先充值知乎币（知乎币：人民币=1:1），知乎币分为6元、12元、18元等固定六挡，最低就要充6元。这种设计和苹果IAP的政策有关。</p>
            <p style="text-align: center"><img src="/storage/app/media/news/17_03.jpg" alt=""></p>
            <p><strong>映客。左iPhone，右安卓。</strong></p>
            <p>在映客刚上线时，有网友还记得，自己通过微信支付充值过映票给喜欢的主播打赏。不过一名映客内部人士称，至少从2016年12月起，映客就改变了iOS的打赏规则，必须通过苹果“应用内购买”进行。</p>
            <p>映客官方表示，他们从开始就是按照苹果开发者要求规则进行的开发，因此并无影响。</p>
            <p>直播平台似乎很早就进行了相关规范。</p>
            <p>陌陌也表示，在iOS客户端，一直要求用户走苹果应用内购买的通道。</p>
            <p>斗鱼直播称，平台用户大部分充值的都不会通过苹果，用户本身来说观看渠道就很分散，单一渠道的政策并不会造成巨大影响。</p>
            <p>此外，截至目前，新浪微博、分答等一些产品还没变化。</p>
            <p>微博方面向澎湃新闻回复称，没有受到影响，相关产品还能正常使用。</p>
            <p>分答方面表示，产品端内没有赞赏功能，都是提问、偷听、购买和付费社区的直接支付。分答用户目前仍然可以通过微信支付。</p>
            <p>不过一名互联网公司高管告诉澎湃新闻，目前一些App看似没有动静，实际上在未来迭代的版本中会进行更新，接入IAP。</p>
            <p>“影响用户体验，以及原创作者写文章的动力。”该名高管称。</p>
            <p>从去年开始，随着知识经济大潮初起，微信等中国互联网产品支持平台上的原创作者开通赞赏功能，用户如果喜欢作者发布的内容，会根据心情给一笔费用不等的“小费”。</p>
            <p>不过在“赞赏”这一新鲜事物上，中国开发者和苹果公司有不同理解。</p>
            <p>就微信和苹果的博弈情况来看，苹果并不认为赞赏是一个人对另一个人表达欣赏进而转账的方式，而认为，这是读者购买文章阅读的销售行为。根据苹果应用商店的规则，无论在何种App购买音乐、小说还是视频，都只能通过苹果App Store的支付渠道购买（也就是“应用内购买”）。App Store在中国支持银联、支付宝等支付方式，不含微信支付。</p>
            <p>不过分析人士更倾向认为，苹果盯上中国App的打赏功能，主要是希望从中国的iPhone用户身上赚取更多收入。每一笔赞赏收入，苹果会从中抽取30%的平台佣金。</p>
            <p>2016年，苹果App Store的中国营收超过美国，成为全球最大的App Store市场。不过同年，苹果在中国因故关闭了两大互联网服务——电影商店（iTunes Movies）和数字书店（iBooks Store），使其失去了在华的两大支付场景。在与银联合作推进移动支付Apple Pay方面，苹果也一直未能取得突破性的成绩。</p>
            <p>在和苹果博弈了数个月后，腾讯只能妥协，无法接受这一结果的微信一气之下直接关闭iOS的打赏功能。4月19日，腾讯微信团队表示，受苹果公司新规定影响，当天17时起，苹果iOS版微信公众平台赞赏功能将被关闭， 安卓等其他版本微信赞赏功能不受影响。</p>
            <p>同济大学知识产权与竞争法研究中心研究员刘旭在澎湃新闻撰文称，微信选择不惜让公众号运营者失去部分收益，也要关闭苹果移动终端用户给公众号文章赞赏的功能，首先是因为微信自信其用户并不会因此而流失，其次是因为微信用户中有80%以上都使用安卓系统，所以并不会对公号运营者的收益产生很大冲击。而一旦向苹果妥协，如果其他安卓系统的应用商店也纷纷效仿的话，都要在公众号文章赞赏中分一杯羹，那么会对公号运营者的收益造成更多损失。</p>
            <p>根据腾讯2016年度的年报，微信用户已达到8.89亿，其中只有大约20.7%的用户没有关注任何公众号。</p>
            <p>就腾讯与苹果之争的问题，日前，在2016年度股东大会上，马化腾(微博)认为，腾讯与苹果之争，实际是一场误会。大家的目标都是一致的，只不过科技的发展使得一些业务边界越来越模糊，互联网企业与硬件厂商的关系其实是更加紧密，合作也在加深。</p>
            <p>华尔街日报援引知情人士的说法称，关于赞赏问题，微信正在与苹果协商，试图找到新的解决方案，达成替代协议。</p>
            <p>而市场上大多数App，并没有那么多博弈的筹码，则会根据苹果“一视同仁”的规定，接入IAP支付方式。</p>
                ',
        ]);
        $dianShangDongTai07->categories()->attach(2);

        $dianShangDongTai08 = Post::create([
            'title' => '抢完了用户时间的App 未来的归宿是什么',
            'slug' => '用户时间的App',
            'summary' => '阿里巴巴的首席执行官张勇把他执掌的这家公司描述成“一个拥有5.07亿移动用户和3.8万亿元人民币GMV的经济体”。但实际上，从2017财年Q2（2016年第三季度）开始，这个庞然大物就不再拿GMV说事了。相比而言，它更乐于讲讲如何让用户在手机淘宝上驻足更长的时间。比如40%的月活跃用户，每天会至少打开一次淘宝，又或者日活跃用户平均每天会打开7次这个软件，以及淘宝平均停留时间达到了20分钟。',
            'published' => true,
            'published_at' => Carbon::now(),
            'top' => true,
            'image' => '/news/08.jpg',
            'user_id' => 1,
            'images' => [],
            'files' => [],
            'content' => '
            <p>阿里巴巴的首席执行官张勇把他执掌的这家公司描述成“一个拥有5.07亿移动用户和3.8万亿元人民币GMV的经济体”。但实际上，从2017财年Q2（2016年第三季度）开始，这个庞然大物就不再拿GMV说事了。相比而言，它更乐于讲讲如何让用户在手机淘宝上驻足更长的时间。比如40%的月活跃用户，每天会至少打开一次淘宝，又或者日活跃用户平均每天会打开7次这个软件，以及淘宝平均停留时间达到了20分钟。</p>
            <p>不仅仅是淘宝，想办法成为一个超高频的App，把对DAU的重视程度超过对UV乃至GMV的关注，已经是当下非常聚焦的事情了。如何才能把用户黏在你的手机客户端里，而不是让他毫无成本意识的跳来跳去，这是至关重要。</p>
            <p style="text-align: center"><img src="/storage/app/media/news/15_01.jpg" ></p>
            <p>譬如今日头条，让创始人张一鸣最值得炫耀的一个数据，就是1.4亿的活跃用户平均每天使用时长超过了76分钟。多么令人不能自拔，当你看到朋友圈越来越多的分享链接前面灌上“今日头条”这样的标签，就不难想想为什么微信要做“看一看”这样的功能。</p>
            <p>很多人乐于把这种变化归于移动用户红利的消失殆尽，也就是大家习惯说的互联网下半场——在存量中比拼的是用户使用效率，而不再是海量廉价用户的获取。</p>
            <p>正如同罗胖所言，互联网的下半场是“时间战争”：时间是一个固定的池子，时间是一个战场。“只要你不是微信，你在这个市场上你有什么资格那么傲娇，（让用户）用完就走！”</p>
            <p>这也许就是淘宝为什么那么热衷于社交、内容这样看上去和它不太相关的事情，总要有很多的理由让用户持续“逛”下去，而不仅仅是买买买，然后和这款制造全球零售最大GMV的软件say goodbye。</p>
            <p style="text-align: center"><img src="/storage/app/media/news/15_02.jpg"></p>
            <p>但毒眼不禁开始思索，这些在时间战场上厮杀殆尽之后的App市场，到底会是什么模样？</p>
            <p>如果淘宝成为用户时间的集大成者，它理应除了成就购物天堂，方便衣食住行，成为电影院或者游乐场所，或者一本好书——并非所有的精神食粮都是用来消遣。总是，用户只呆上20分钟是远远不够的，最好能呆上一整天，把这款App当成爱丽丝的梦幻仙境，永远找不到出口。</p>
            <p>以此类比，这也是美团、支付宝、今日头条、滴滴或者共享单车们想要做的事情。将你生命中所有的时间贡献给网络世界，你可能无时无刻不在联网的状态中。</p>
            <p>所以，首先，在互联网的上半场，其实既非人口红利的战争，又非用户时间的厮杀，而是互联网公司你争我夺过程中将人类行为、场景切割成无数版图，并逐一在线化、数字化的过程。</p>
            <p>只要这个在线化、数字化的过程还没有结束，互联网的上半场就远没到可以宣告胜利的时刻。</p>
            <p>因此，哪怕是诸如“共享篮球”“共享洗衣机”“滴滴厕所”这等让人啼笑皆非的项目，也是上半场进程中的必经之路。这里，必须要感谢BAT、TMD，也包括eBay、Amazon、google、FB、Uber、苹果这样的大公司，正是因为他们的快速壮大、攻城拔寨，才有了近20年互联网超高速进化，才有了大数据的积累；也正是由于他们的独大，才会逼迫创业者寻找更加垂直细分的时间、人群和场景，用同样的方式将其快速数字化。</p>
            <p style="text-align: center"><img src="/storage/app/media/news/15_03.png"></p>
            <p>如果愿意俯瞰整个互联网，其实就是几张大网连接几十张小网，几十张小网又连接成千上万更小的网，而每一张网上都集结着用户的时间。</p>
            <p>现在哪里还没有被这张网连接和覆盖，哪里就仍然还是互联网上半场要去进攻的方向。比如第三世界国家，可能需要“数字丝绸之路”的赋能；比如偏远山区，可能需要农村电商的扶贫；比如传统的生产制造业，需要更加自动化的高效运作……</p>
            <p>一花一世界，一叶一菩提。如果用上帝视角观看，其实是无限机会。</p>
            <p>没错，时间的确是稳定的数值，但场景却可以无限。也许从业者们更应该想清楚的是，除了无休止的占领用户时间之外，还应该把用户的时间和场景结合起来。</p>
            <p>例如一个人只可能在漫长的通勤时间里去看书、看视频，去学习，去娱乐，但这个时间一定不是发生在他和客户谈生意的时候。</p>
            <p>《王者荣耀》这款游戏就算把玩家的时间切得再碎片化，他也不会在高考前5分钟再掏出手机玩一把——这个时候如果有一款App可以让他能快速消化两道考试大题，一定是加分的。</p>
            <p>其次，假如按照极限去推论，淘宝和头条终究会占满了用户24小时，同时也覆盖到所有的场景，依然面临着一个更大问题——用户把时间和场景上传给了网络，留在现实场景里的这具驱壳该如何处理。</p>
            <p>毒眼认为，这就是留给互联网下半场要去解决的问题——肉身。</p>
            <p>是的，现实世界中，唯一无法超越时间的，即是肉身。未来的极限假设中，人的大脑是跟随者场景和时间一起转移到互联网的数字化世界中，在那里，意识、信念、知识都可以保留或者重建。肉身和大脑可能面临分离。</p>
            <p>很多人会跳出来辩驳，人工智能的时代，会解决这个问题。就像《黑镜》又或者《攻壳机动队》一样，机器人链接数字化的意识，能够让肉身也完成数字化，并且永生。</p>
            <p>也有人会说，未来的医疗技术——毕竟自古以来，疾病就是人类的头号杀手——能够改变这一切。</p>
            <p>比如Google和FB，都有专门的实验室和部门研究“永生术”。Google的首席未来学家家雷·库兹韦尔（Ray Kurzweil）认为在2029年左右，人类将会达到一个临界点，届时医疗技术将使人均寿命每过一年就能延长一岁，最终实现永生。</p>
            <p>但毒眼认为，就算肉身可以抗衰，也不会百毒不侵。这就是为什么马斯克要造X-sapce，因为地球有可能超载，也有可能环境恶化不再适宜人类生存，要将未来子孙的肉身转移到安全的地方得以延续，就必须动用新技术。</p>
            <p>从进化论的角度看，马斯克的想法更加切合实际。就算客观的时间和场景以及主观的意识都完成了数字化，但肉身涵盖着最重要的一点信息依旧无法同步到互联网上，就是人类的基因。毒眼觉得，人类不会放弃自己的基因延续，而这至关重要的一点，不会让人类抛弃肉身。</p>
            <p>正如英国作家里查德·道金斯在他的著作《自私的基因》里写过：“生物体是基因创造的生存机器。生命短暂，基因不朽。”</p>
            <p>在这种情形下，马斯克也不是崇高的发明家。他并没有比之前任何一个科技大佬更占据道德制高点，他所做的一切，和其他一切动物的本能近似，都是为了延续各自基因，在某些特殊的情况下，滋长的一种有限的利他主义而已。</p>
            <p>所以，互联网的从业者们，投身这场时间战争之余，除了开始思考和场景结合的更多可能性，毒眼也呼吁可以从延续基因这个角度出发，着眼于如何能让基因成为未来数字世界最重要的一环或者突破口。</p>
            <p>如果说基于移动互联网的App是一个向上拉升用户行为触达云端的通道，那基因一定是向地面牵引的重力。在这里，毒眼任性地以为，人不会为了制造那艘通往虚拟世界的诺亚方舟，轻易地将自己量化为一个被贴上标签、没有个体差异的数字。</p>
            <p>正如同我们渴望肉身可以成为永恒的机器，而机器人又何尝是一样，渴望拥有人类的肉身和基因？</p>
            <p>毒眼以为，抢占用户时间的App并不可怕，镶嵌了基因的App，才是最可怕的。</p>
          ',
        ]);
        $dianShangDongTai08->categories()->attach(2);

        $dianShangDongTai09 = Post::create([
            'title' => '潘润红：移动电子商务金融科技服务创新',
            'slug' => '潘润红：移动电子商务金融科技服务创新',
            'summary' => '最新消息，在2017中国电子商务创新发展峰会电商创新要素分论坛上，中国金融电子化公司副总经理潘润红发表主题《移动电子商务金融科技服务创新》的演讲，在演讲中，潘润红表示，在日常生活中移动支付覆盖了大城市吃、穿、住、用、行等等领域，人们既是创新支付的供给侧，也是消费者，未来移动支付会渗透到各个场景当中，推动无现金社会的发展。',
            'published' => true,
            'published_at' => Carbon::now(),
            'featured' => true,
            'image' => '/news/09.jpg',
            'user_id' => 1,
            'images' => [],
            'files' => [],
            'content' => '
            <p>本分论坛将重点围绕便捷支付、无现金社会、电商创新等内容展开讨论，以创建无现金社会为愿景，推广便捷支付，探索新电商，完善社会服务模式。</p>
            <p>中国金融电子化公司副总经理潘润红</p>
            <p>温馨提示：本文为速记初审稿，保证现场嘉宾原意，未经删节，或存纰漏，敬请谅解。</p>
            <h4>以下是演讲实录：</h4>
            <p>尊敬的各位领导、各位嘉宾，早上好！很高兴受邀出席本次峰会。金融工业电子化公司是人民银行的直属企业，我们一直肩负着央行的信息化建设工作，当前致力于金融科技创新、打造数字央行。同时，公司作为北京移动金融产业联盟的主要发起单位，也希望在移动金融产业发展方面和与会代表们进行交流、学习。</p>
            <p>今年，全国“两会”上有代表提出了“无现金社会”，这个提案得到了社会上热烈响应，有些企业和组织更是制定了相应的时间表，刚才王玉祥副市长也介绍了无现金的含义，就是“便捷支付”。</p>
            <p>下面，结合金融市场的工作实践和个人思考谈几点看法，如有不妥之处请批评指正。</p>
            <h4>一、无现金社会的大门已经开启</h4>
            <p>央行数据统计，2016年全国共发生电子支付业务3034亿笔，金额2593万亿。电子支付市场规模的快速增长是推动支付场景革命的重要力量。</p>
            <p>2017年2月，央行在发行数字货币方面取得了新的进展，这也得到了社会上的热议。央行推动的基于区块链的数字票据交易平台测试成功，由央行发行的法定数字货币已在该平台试运行，央行的数字货币研究所正式挂牌。央行也正在推动着无现金社会的发展。</p>
            <p>我们日常生活中移动支付覆盖了大城市吃、穿、住、用、行等等领域，在座的各位既是创新支付的供给侧，也是消费者，相信未来移动支付会渗透到各个场景当中，推动无现金社会的发展。</p>
            <h4>二、移动金融产业支撑环境向好</h4>
            <p>为推动中国移动金融产业化发展进程，人民银行坚持“标准先行”的原则，集中产业之力稳妥推动中国移动金融标准化建设，于2012年正式发布了《中国金融移动支付系列标准》。我是主要参与者之一，这几年来我们一直对这个标准进行修订，可以说当时的标准非常先进，我们去国外和别的标准化组织交流，他们都还没有行业级、国家级这么完整的一系列标准。</p>
            <p>2013年人民银行建成“移动金融安全可信公共服务平台”，这是作为国家金融基础设施为大家搭建互信互通桥梁，提供跨行业、跨区域、跨机构的公共基础服务，构建移动电子商务交易可信保障体系，营造开放、共赢的良好环境。</p>
            <p>2016年3月，北京移动金融产业联盟在京正式登记成立，业务归口单位是中关村管委会，受人民银行的直接的领导，作为国内移动金融领域第一家盈利性的社会团体，在产业创新、标准制定、成果转化、服务体系建设等方面联合业界的产业链的各代表机构共同推动移动金融产业的发展。去年数博会期间，在市政府的支持下，联盟联合会员单位在贵阳挂牌成立了“贵阳移动金融联合创新示范基地”。</p>
            <p>以上这些制度的安排，我们认为为移动金融产业奠定了一个非常好的基础。</p>
            <h4>三、金融业务创新还要合规发展</h4>
            <p>移动金融丰富了应用场景，促进了金融、非金融的产业融合，驱动了金融科技产业的发展，我们享受了便利的同时，总是会听到一些负面消息，有一些甚至造成了恶劣的社会影响。究其根源主要在于法律法规体系建设、监管工作落实、标准规范复合型方面存在不足。近年来人民银行积极开展调查和研究工作，陆续印发指导性文件，目的就是引导金融产业在安全、规范的基础上可持续发展。</p>
            <p>两个月前，非银行支付机构网络支付清算平台，就是业界说的“网联平台”正式上线，加强非银行支付机构线上交易风险的管控，监管方在移动智能终端等领域推行相关标准的制定工作，人民银行副行长提出要推陈出新、健全审慎监管、行为监管型框架，用科技的手段在监管部门和被监管之间建立可信赖、可持续、可执行的监管协议与评估性的评估机制，降低监管机构的合规成本。</p>
            <h4>四、大数据信用体系建设任重道远</h4>
            <p>我们使用现金交易的同时，很多信用源数据消失了，无现金实现了数字化、可追溯，为大数据体系建设提供了基础，交易信息共享和挖掘，为金融服务信用化提供了可能，建立了海量的、多样的全面金融（非金融）有效数据，金融机构可以全面掌握用户动态趋势，为金融服务的信用化提供依据。人民银行征信系统正在发挥这个作用，金融机构在可控范围内开展信用融资和信用贷款发放业务，为更多的人提供更加丰富、精准的金融服务，这是金融服务最大的发展趋势。</p>
            <p>但是大数据体系建设也面临挑战，在利益的驱使下，包括信用信息在内的公民隐私新词泄露严重，网络上有很多案例，个人隐私保护面临严重挑战，大数据信用体系建设任重道远。昨天和郝曙光行长交流的时候，郝曙光行长指出个人金融数据、个人隐私一定要加密存储数据保护，应该放在头等重要的位置，信息安全是金融创新时必须坚守的底线。</p>
            <p>在结束演讲之前我谈一下个人的感受，我们接触到的现金不是一般人钱包里的现金概念。20年前我入职人民银行的时候，培训中一项重要的内容就是到中国印钞造币去参观，几年前我们参观了丹麦的印钞厂，整个厂比我们这个会场大不了多少，现在丹麦发展到什么样的程度？不知道大家有没有听说，丹麦八成是用银行卡，四成用移动支付。丹麦是政府今年有一个规定，说从今年起除了关键服务机构外，商业店面有权取消现金收银服务，只接受电子货币。</p>
            <p>丹麦只有500万人，但是在贵阳，我们也开始了这项工作，我非常支持非现金。我们国家一直是全球现金使用大国，什么时候谁到银行取钱的时候没有钱了马上会发酵成社会群体时间。发行人民币、管理人民币流通是央行的职能，货币发行全生命周期涉及到印制、调拨、投放、回笼、清分、销毁等重多环节。</p>
            <p>我们所有人见过运钞车，在商业银行门口，很多保安、武警，人民币不同于普通物品，整个生命周期管理需要严格安保措施、严格制度，我们管一个库，这个库里放的都是人民币，一箱一箱，出库、入库要查库、要核对，包含巨大的工作量。</p>
            <p>春节前，各个企业都去取钱，发奖金的时候堆在桌子上特别有感觉，春节后大家纷纷存钱，我在基层了解到过去一箱人民币是40多斤，现在新的包装箱是20多斤，200万，很沉的，我们都要加班加点为人民币服务。从我内心来说，希望现金量减下来。</p>
            <p>人民币整洁度比以前高多了，反假货币要求也高很多。人民币是特殊的纸张、特殊的幽默，有很多防伪技术，无形之中增加了社会成本，不环保、不绿色，虽然专家学者对现金纸币能否被取代尚没有定论，但是无现金社会发展趋势是大家所共识的。前几天我和刘建华先生交流的时候，听说贵阳市政府正在推动“无现金城市”。昨天我到他的办公室看了一下，看到了贵阳市政府发的文件，要推便捷支付的文件，贵阳市政府真正落实了习总书记的话马上就办，真抓实干。贵阳居民的幸福指数必将是大大提升，作为一个北京市民感到非常的羡慕，也很期待。</p>
            <p>我谈了以上四个想法，不对之处请大家批评指正，我们公司在人民银行的领导下，愿意与各金融从业机构一起为金融产业做出贡献，最后预祝本次论坛取得圆满成功，谢谢！</p>

            ',
        ]);
        $dianShangDongTai09->categories()->attach(2);

        $dianShangDongTai10 = Post::create([
            'title' => '差评做了一个决定 让流水在半年内翻了4倍',
            'slug' => '差评做了一个决定',
            'summary' => '为抓住内容电商的红利，科技类自媒体差评在2016年上半年正式走上电商之路，开了个“差评黑市”。当时距差评公众号成立仅不到一年，差评经历了好一番纠结才决定提起这柄双刃剑，如今月流水已经达到400万。',
            'published' => true,
            'published_at' => Carbon::now(),
            'image' => '/news/10.jpg',
            'user_id' => 1,
            'images' => [],
            'files' => [],
            'content' => '
            <p>为抓住内容电商的红利，科技类自媒体差评在2016年上半年正式走上电商之路，开了个“差评黑市”。当时距差评公众号成立仅不到一年，差评经历了好一番纠结才决定提起这柄双刃剑，如今月流水已经达到400万。</p>
            <p><strong>从“吐槽”到电商</strong></p>
            <p>差评？一个喷过BAT，怼过苹果，把所有科技相关企业都放在准星之内的微信公众号，一旦发现行业内值得差评的人或事，就会毫不留情地“吐槽”，原则是犀利而不失客观。</p>
            <p style="text-align: center"><img src="/storage/app/media/news/14_01.jpg" ></p>
            <p>差评微信公众号内容</p>
            <p>没有唯美画风，没有心灵鸡汤，差评的火完全源于有理有据的吐槽。 在差评团队只有差评君一个人的时候，他也会坚持回复每一条留言，保持与粉丝的互动，正是这样一个侠客似的朋友形象，培养了差评的粉丝黏性。而它的粉丝也有着明显的特征：年轻、关注科技，和差评有相同的价值观。</p>
            <p>不过，犀利的文风给差评带来过不少麻烦，包括要求删稿、被告抄袭等。面对问题，差评保有一贯的诙谐，如针对“被抄袭”，差评用一张“难道差评君是张无忌，六大门派要围攻光明顶？”的图片，让粉丝看到了自己的态度。</p>
            <p>运营了将近一年的时候，差评公众号已经积累了近90万粉丝。此时的差评开始思考如何价值最大化，并面临两难抉择：仅靠广告营收，过于单一；选择入局电商，恐怕影响粉丝体验。</p>
            <p>最终，面对“七个公众号里就有一个在做电商”的热潮，差评还是选择放手探索。为了减轻粉丝的不适感，差评最初不求盈利，只是尽可能帮用户找到差异化产品，并结合原有的内容特点设定了选品策略：高冷、黑科技产品。</p>
            <p><strong>电商“改造”的坎儿</strong></p>
            <p>差评的电商模式很清晰，选择新、奇、特的黑科技产品，每周六用专门的推文推荐商品，将消费者引导到公众号内置商城“黑市”；同时，开一家淘宝店，不过不作为主战场。</p>
            <p>然而，事情并没有那么简单，起初电商成绩“惨淡”，黑科技产品似乎并不是粉丝们的菜。几个月后，一款单价为40元的创意商品Sticker让差评看到了希望，并开始分析粉丝特征，转变选品方向。</p>
            <h4>案例：Sticker是一款纳米技术创意家居用品，形态为一张透明贴片，功能类似双面胶，通过它可以将手机、iPad等贴在墙上，让用户边做饭变看视频等。产品上线一周售出2000多片。</h4>
            <p>该产品和粉丝特点达到了真正的契合：18~25岁，70%男性，主要集中在学生群体、互联网从业者和对科技感兴趣的人，消费力不强，相对理性。因此，差评放下了“高冷”，将选品策略调整为：新、奇、特，但客单价不高的刚需性产品。</p>
            <p>订单变多以后，又有问题陆续出现。“电商看似简单，但有很多细枝末节的事，每一环都必须做好，否则会对后续环节造成很大影响。”差评电商负责人Allen表示，慢发、错发、漏发都会引发掉粉，哪怕电商推文写得不好也会掉粉。</p>
            <p>Allen认为，自媒体到电商的过渡需要找到最不尴尬的方式，有两点需要注意：</p>
            <p>（1）找准定位，明确黏住粉丝比立刻盈利更重要；</p>
            <p>（2）保持互动，即便在商言商，也要站在用户角度思考。</p>
            <p>他将差评成功过渡到电商形容成“运气”，但实际上，很多细节都是不容忽视的。比如做活动，设计差评专属包装盒，为粉丝写祝福卡片，送礼物等，“重要的是让粉丝真正感受到福利。”</p>
            <p><strong>让流水翻倍的决定</strong></p>
            <p>目前，差评电商团队10人，黑市中共有约100个SKU；公众号粉丝超过100万，每篇推文能带来平均1000单的转化，48小时转化可达到10%。据介绍，差评并没有选择一般自媒体大号的一件代发模式，而是选择自建仓库，同时负责选品、营销、售后服务等，只有部分客单价2000元以上的商品会采用一件代发。</p>
            <p>将这种重模式跑通之后，差评电商如今的月流水已经达到400万元，毛利近30%。今年年初，差评对外公布的月流水还仅有100万元，为何在短短五个月内，流水翻了4倍？</p>
            <p>Allen透露，业绩翻翻的原因，其实是新增的2B业务。“公众号的转化，在没有粉丝激增的情况下很难大幅提高的，容易触及天花板。差评有自建仓库作为基础，不仅将商品卖给粉丝，也开始将商品卖给同行。”</p>
            <p>虽然差评不算头部大号，但已经在行业中建立了影响力，转化能力甚至达到了两倍于当前粉丝量的大号。因此，差评可以拿下很多产品在微信渠道的总代，再分销给其它适合该商品的内容电商渠道；很多新产品也会选择在差评首发，差评做过销售测试后，凭借实际数据推荐给同行。</p>
            <p>据介绍，几个月下来，差评2B业务的流水已经基本可以达到2C业务。Allen坦言，由于科技类目整个行业SKU有限，所以选品还是存在难度的，原则就是帮粉丝买到差异化商品和从粉丝需求出发。</p>
            <p>差评方面认为，微信和淘宝都只是单一端口，为了让更多用户了解到自己，差评即将推出PC官网和App，未来两个月即可上线。而今年的重点，也会更多放在分销和淘宝。</p>
            <p>此外，为了弥补科技类产品复购率低的不足，差评还将在6~7月份上线食品类目，主营新奇特的零食，如曾经2天就售出4000盒的黑科技火锅（不用电就可以煮熟）。Allen笑称，“差评会让粉丝感受到，即使只是泡面也能吃出整个宇宙的感觉。”</p>
                ',
        ]);
        $dianShangDongTai10->categories()->attach(2);
        //
        // 电商动态 end
        //

    }
}



