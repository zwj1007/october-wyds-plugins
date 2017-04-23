<?php namespace Buuug7\News\Updates;

use Buuug7\News\Models\Category;
use Buuug7\News\Models\Post;
use Carbon\Carbon;
use October\Rain\Database\Updates\Seeder;

class SeedAllTables extends Seeder
{
    public function run()
    {
        /*ID:1*/
        Category::create([
            'name' => 'ROOT',
            'slug' => 'root',
            'description' => 'default root',
        ]);

        /*ID:2 电商动态*/
        Category::create([
            'name' => '电商动态',
            'parent_id' => 1,
            'slug' => 'dian-shang-dong-tai',
            'description' => '电商动态栏目',
        ]);

        /*ID:3 政策解读*/
        Category::create([
            'name' => '政策解读',
            'parent_id' => 1,
            'slug' => 'zheng-ce-jie-du',
            'description' => '政策解读栏目',
        ]);

        /*ID:4 通知公告*/
        Category::create([
            'name' => '通知公告',
            'parent_id' => 1,
            'slug' => 'tong-zhi-gong-gao',
            'description' => '通知公告栏目',
        ]);

        //
        // 电商动态子栏目
        //
        /*ID:5 农村电商*/
        Category::create([
            'name' => '农村电商',
            'parent_id' => 2,
            'slug' => 'nong-cun-dian-shang',
            'description' => '农村电商栏目',
        ]);
        /*ID:6 移动电商*/
        Category::create([
            'name' => '移动电商',
            'parent_id' => 2,
            'slug' => 'yi-dong-dian-shang',
            'description' => '移动电商栏目',
        ]);
        /*ID:7 其他动态*/
        Category::create([
            'name' => '其他动态',
            'parent_id' => 2,
            'slug' => 'qi-ta-dian-shang',
            'description' => '其他动态栏目',
        ]);


        //
        // 政策解读子栏目
        //
        /*ID:8 政策导向*/
        Category::create([
            'name' => '政策导向',
            'parent_id' => 3,
            'slug' => 'zheng-ce-dao-xiang',
            'description' => '政策导向栏目',
        ]);
        /*ID:9 地方政策*/
        Category::create([
            'name' => '地方政策',
            'parent_id' => 3,
            'slug' => 'di-fang-zheng-ce',
            'description' => '地方政策栏目',
        ]);


        Post::create([
            'title' => '国务院关于积极推进“互联网+”行动的指导意见',
            'slug' => '国务院关于积极推进“互联网+”行动的指导意见',
            'summary' => '顺应世界“互联网＋”发展趋势，充分发挥我国互联网的规模优势和应用优势，推动互联网由消费领域向生产领域拓展，加速提升产业发展水平，增强各行业创新能力，构筑经济社会发展新优势和新动能。坚持改革创新和市场需求导向，突出企业的主体作用，大力拓展互联网与经济社会各领域融合的广度和深度。',
            'published' => true,
            'published_at' => Carbon::now(),
            'image' => '',
            'user_id' => 1,
            'images' => [],
            'files' => [],
            'content' => '
            <p>“互联网＋”是把互联网的创新成果与经济社会各领域深度融合，推动技术进步、效率提升和组织变革，提升实体经济创新力和生产力，形成更广泛的以互联网为基础设施和创新要素的经济社会发展新形态。在全球新一轮科技革命和产业变革中，互联网与各领域的融合发展具有广阔前景和无限潜力，已成为不可阻挡的时代潮流，正对各国经济社会发展产生着战略性和全局性的影响。积极发挥我国互联网已经形成的比较优势，把握机遇，增强信心，加快推进“互联网＋”发展，有利于重塑创新体系、激发创新活力、培育新兴业态和创新公共服务模式，对打造大众创业、万众创新和增加公共产品、公共服务“双引擎”，主动适应和引领经济发展新常态，形成经济发展新动能，实现中国经济提质增效升级具有重要意义。
            </p>
            <h4>一、行动要求</h4>
            <p>（一）总体思路。</p>
            <p>顺应世界“互联网＋”发展趋势，充分发挥我国互联网的规模优势和应用优势，推动互联网由消费领域向生产领域拓展， 加速提升产业发展水平，增强各行业创新能力，构筑经济社会发展新优势和新动能。坚持改革创新和市场需求导向，突出企业的主体作用，大力拓展互联网与经济社会各领域融合的广度和深度。着力深化体制机制改革，释放发展潜力和活力；着力做优存量，推动经济提质增效和转型升级；着力做大增量，培育新兴业态，打造新的增长点；着力创新政府服务模式，夯实网络发展基础，营造安全网络环境，提升公共服务水平。</p>
            <p>（二）基本原则。</p>
            <p>坚持开放共享。营造开放包容的发展环境，将互联网作为生产生活要素共享的重要平台，最大限度优化资源配置，加快形成以开放、共享为特征的经济社会运行新模式。</p>
            <p>坚持融合创新。鼓励传统产业树立互联网思维，积极与“互联网＋”相结合。推动互联网向经济社会各领域加速渗透，以融合促创新，最大程度汇聚各类市场要素的创新力量，推动融合性新兴产业成为经济发展新动力和新支柱。</p>
            <h4>二、重点行动</h4>
            <p>（一）“互联网＋”创业创新</p>
            <p>充分发挥互联网的创新驱动作用，以促进创业创新为重点，推动各类要素资源聚集、开放和共享，大力发展众创空间、开放式创新等，引导和推动全社会形成大众创业、万众创新的浓厚氛围，打造经济发展新引擎。（发展改革委、科技部、工业和信息化部、人力资源社会保障部、商务部等负责，列第一位者为牵头部门，下同）</p>
            <p>（二）“互联网＋”协同制造</p>
            <p>推动互联网与制造业融合，提升制造业数字化、网络化、智能化水平，加强产业链协作，发展基于互联网的协同制造新模式。在重点领域推进智能制造、大规模个性化定制、网络化协同制造和服务型制造，打造一批网络化协同制造公共服务平台，加快形成制造业网络化产业生态体系。（工业和信息化部、发展改革委、科技部共同牵头）</p>
            ',
        ]);

        Post::create([
            'title' => '小心！继微信之后 支付宝也将对提现收费了',
            'slug' => '小心！继微信之后 支付宝也将对提现收费了',
            'summary' => '9月12日消息，支付宝今日对外发布公告表示，因综合经营成本上升，为了持续向用户提供更多优质服务，自2016年10月12日起，将对个人用户超出免费额度的提现收取0.1%的服务费，个人用户每人累计享有2万元基础免费提现额度。在用完基础免费额度后，用户可以使用蚂蚁积分兑换更多免费提现额度。',
            'published' => true,
            'published_at' => Carbon::now(),
            'image' => '',
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


        Post::create([
            'title' => '阿里巴巴拥抱外贸大数据时代 加速向交易型平台转型',
            'slug' => '阿里巴巴拥抱外贸大数据时代 加速向交易型平台转型',
            'summary' => '电商1.0时代，B2B网站作为信息平台无疑帮助不少外贸企业解决了信息的展示和获取问题。随着电商进入2.0时代，单纯作为信息通道B2B网站显然难以满足外贸企业的新要求。如何转型应对？作为外贸B2B电商的领军企业，阿里巴巴的答案是：向交易平台转型，拥抱即将到来的外贸大数据时代。',
            'published' => true,
            'published_at' => Carbon::now(),
            'image' => '',
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

        Post::create([
            'title' => '进口电商旺季来袭：解决跨境痛点，物流基建是关键',
            'slug' => '进口电商旺季来袭：解决跨境痛点，物流基建是关键',
            'summary' => '每年的下半年，是跨境电商最重要的分水岭，如何在众多对手的夹击中赢得一年的大丰收，是跨境电商最关心的问题。因为在每年的9-12月，国外很多节日是在此期间，并且还会享受较大的折扣力度，就是大家俗称的销售旺季。但是在旺季即将到来之际，跨境电商在兴奋之余，还有些担心...',
            'published' => true,
            'published_at' => Carbon::now(),
            'image' => '',
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


        Post::create([
            'title' => '2016中国网红经济+社交电商平台高峰论坛圆满落幕！',
            'slug' => '2016中国网红经济+社交电商平台高峰论坛圆满落幕！',
            'summary' => '12月10日下午，红动中国—2016中国首届网红经济+社交电商高峰论坛在义乌幸福湖国际会议中心隆重举行。来自全国各地的众多行业负责人、网红大咖、学术专家、自媒体领军人物以及流量达人等齐聚义乌，共商在全球经济低迷状态下如何挖掘“网红经济”商机来助推经济发展大计。',
            'published' => true,
            'published_at' => Carbon::now(),
            'image' => '',
            'user_id' => 1,
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

    }
}
