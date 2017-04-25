<?php namespace Buuug7\User\Updates;


use Buuug7\User\Models\Company;
use Buuug7\User\Models\Need;
use Carbon\Carbon;
use October\Rain\Database\Updates\Seeder;
use RainLab\User\Facades\Auth;

class SeedAllTables extends Seeder
{

    public function run()
    {
        //
        // user01
        //
        $user01 = Auth::findUserByLogin('youpp@126.com');
        if (!$user01) {
            Auth::register([
                'name' => 'buuug7',
                'email' => 'youpp@126.com',
                'password' => '111111',
                'password_confirmation' => '111111',
            ], true);
        }
        $user01 = Auth::findUserByLogin('youpp@126.com');
        // insert user company
        Company::create([
            'name' => '甘肃天奇网络科技有限公司',
            'address' => '甘肃省兰州市城关区',
            'contact_phone' => '0931-7807599',
            'description' => '甘肃天奇科技有限公司是一家互联网建站公司,我们致力于为企业和政府,个人提供更好的信息化服务',
            'detail' => '<p>甘肃天奇科技有限公司是一家互联网建站公司,当然,我们没有其他大型建站公司业务范围广,不过在成长,我们致力于为企业和政府,个人提供更好的信息化服务</p>',
            'status' => 'passed',
            'user_id' => $user01->id,
            'checked' => true,
            'featured' => true,
            'checked_at' => Carbon::now(),
        ]);
        // insert need of this user
        Need::create([
            'user_id' => $user01->id,
            'title' => '急聘初中语文老师',
            'contact_phone' => '18309467501',
            'category' => 'zhaopin',
            'description' => '
            <h4>职位详情</h4>
            <h5>授课年级</h5>
            <p>初中 、中考</p>
            <h4>授课科目</h4>
            <p>语文 、生物</p>
            <h4>工作时间</h4>
            <p>早上8点到12点,下午3点到6点</p>
            <h4>职位描述</h4>
            <ul>
                <li>普通话标准,语言表达能力和沟通能力强,能够因材施教，能够启维。</li>
                <li>专业知识全面，熟悉北京现行教材及考试大纲，能迅速把握学生的学习特点，制订相应的教学计划。</li>
                <li>讲课生动、幽默,能够调动学生的学习兴趣。</li>
                <li>热爱教育事业，具备良好的教师职业操守和服务意识，做事态度积极，抗压能力强</li>
            </ul>
            ',
            'featured' => true,
            'checked' => true,
            'checked_at' => Carbon::now(),
        ]);

        // insert need of this user
        Need::create([
            'user_id' => $user01->id,
            'title' => '卢沟桥 晓月苑四里正规精装大两居家电家具全齐随时看拎包住',
            'contact_phone' => '18309467501',
            'category' => 'fangchan',
            'description' => '
            <h4>租赁方式</h4>
            <p>整租</p>
            <h4>房屋类型</h4>
            <p>2室1厅1卫   85 平  精装修</p>
            <h4>朝向楼层</h4>
            <p>南北  11层/共18层</p>
            <h4>其他</h4>
            <ul>
                <li>区周边配套设施完善，周边银行，医院等机构一应俱全，多家幼儿园及课外补习的地方让您的宝贝有个良好的学习环境</li>
                <li>小区地处优美的永定河畔，东临“大宁水库”，北临“卢沟晓月”，南临“碧溪垂钓园”，西临“千母森林和宛平湖”，春天有绿绿的草地，干净的公园夏天有咱们晓月游泳馆，市民文化广场，健身俱乐部，供成人及孩子休闲玩耍，秋天有咱们盛开的薰衣草庄园，让您欣赏，冬天有绿堤公园，宛平湖让您散步，放松您疲惫的心灵</li>
                <li>小区购物方便，各种商店方便您买日用品，早市，新鲜的瓜果蔬菜海鲜等应有尽有供您选择，节省您的宝贵时间</li>
                <li>房子干净整洁，温馨舒适，窗明几净，随时可以拎包入住，小区集中供暖，停车方便，不会让你回家因停车而烦恼，随时看房，随时联系，业主诚心出租，有意者随时联系</li>
            </ul>
            ',
            'featured' => true,
            'checked' => true,
            'checked_at' => Carbon::now(),
        ]);

        // insert need of this user
        Need::create([
            'user_id' => $user01->id,
            'title' => '平面设计',
            'contact_phone' => '18309467501',
            'category' => 'zhaopin',
            'description' => '
            <h4>职位介绍</h4>
            <p>性别：不限 | 驾照：不要求</p>
            <h4>岗位职责</h4>
            <p>招聘咨询：杨静 电话/微信：17150046271</p>
            <p>企鹅：444267531</p>
            <h4>招聘职位：平面设计</h4>
            <ul>
                <li>.热爱设计，保持对项目完成创意项目的成就感，乐于不断完善并丰富自己。</li>
                <li>装潢设计系、平面设计、视觉传达专业。学历不代表能力。</li>
                <li>熟练使用Photoshop、Illustrator、CorelDraw、Dreamweaver、In design、flash等常用软件</li>
                <li>有较强的执行力，新锐的设计理念、创意灵感。希望并愿意参与项目整个过程，有强大的责任心并善于沟通，具有团队合作精神。</li>
                <li>插画及手绘能力较强者优先.(同时我们也可以培养平面设计实习生为平面设计，提供食宿)</li>
            </ul>
            ',
            'featured' => true,
            'checked' => true,
            'checked_at' => Carbon::now(),
        ]);

        // insert need of this user
        Need::create([
            'user_id' => $user01->id,
            'title' => '急聘平面设计讲师 五险一金双休',
            'contact_phone' => '18309467501',
            'category' => 'zhaopin',
            'description' => '
            <h4>职位介绍</h4>
            <p>年龄：23-30岁 | 性别：不限 | 驾照：不要求</p>
            <h4>岗位职责</h4>
            <ul>
                <li>有扎实的美术功底，较好的平面设计理念；</li>
                <li>熟练使用Photoshop、Dreamweaver、Illustrator等设计软件；</li>
                <li>负责学生的平面设计课程的教学工作； 并能独立完成备课及研发制作相关的课件；</li>
                <li>能按时完成领导安排的其他教学工作。</li>
            </ul>
            <h4>任职要求</h4>
            <ul>
                <li>大学专科及以上学历，年龄23-30周岁，2年及以上相关互联网教学经验；</li>
                <li>精通设计，熟悉海报、易拉宝等的设计流程，能够熟练运用Photoshop、illustrated、indesign等软件，了解设计流程、设计技巧、有思想、有创意；</li>
                <li>普通话标准，具备较强的语言表达能力及良好的演讲能力；</li>
                <li>具备较强的亲和力和感染力；</li>
                <li>具备较强的执行能力，工作态度积极，责任心强，认真、细致，善于灵活处理问题；</li>
            </ul>
            ',
            'featured' => true,
            'checked' => true,
            'checked_at' => Carbon::now(),
        ]);

        // insert need of this user
        Need::create([
            'user_id' => $user01->id,
            'title' => '苹果 iPhone7 Plus 苹果手机7plus 128G转让',
            'contact_phone' => '18309467501',
            'category' => 'ershou',
            'description' => '
            <dl class="dl-horizontal">
                <dt>机身颜色</dt>
                <dd>黑色</dd>
                <dt>容量</dt>
                <dd>128G</dd>
                <dt>购买渠道</dt>
                <dd>国行</dd>
                <dt>其他</dt>
                <dd>苹果手机7plus 128G转让 全新手机 没有打开包装 亮黑色 转让价6300元 中介勿扰</dd>
            </dl>
            ',
            'featured' => true,
            'checked' => true,
            'checked_at' => Carbon::now(),
        ]);



        //
        // user02
        //
        $user02 = Auth::findUserByLogin('20654039@qq.com');
        if (!$user02) {
            Auth::register([
                'name' => '20654039',
                'email' => '20654039@qq.com',
                'password' => '111111',
                'password_confirmation' => '111111',
            ], true);
        }
        $user02 = Auth::findUserByLogin('20654039@qq.com');
        // insert user company
        Company::create([
            'name' => '雪域科技',
            'address' => '甘肃省定西市渭源县赛格科技园4栋西12F',
            'contact_phone' => '0934-75335241',
            'description' => '深圳市雪域科技电子有限公司（以下简称雪域科技）是一家专业销售和推广电子元器件与提供技术方案的专业代理商、独立分销商。我们致力于为OEM、科研机构、电子产品合约生产商、EMS提供商以及方案设计商提供电子元器件供应链解决方案。雪域科技凭借专业技能、优质服务和优势价格，承蒙各位顾客朋友的厚爱，在业界逐渐打造了良好的口碑。经全体员工不懈努力，雪域科技正在健康成长当中，越做越好！',
            'detail' => '
            <p>深圳市雪域科技电子有限公司（以下简称雪域科技）是一家专业销售和推广电子元器件与提供技术方案的专业代理商、独立分销商。我们致力于为OEM、科研机构、电子产品合约生产商、EMS提供商以及方案设计商提供电子元器件供应链解决方案。雪域科技凭借专业技能、优质服务和优势价格，承蒙各位顾客朋友的厚爱，在业界逐渐打造了良好的口碑。经全体员工不懈努力，雪域科技正在健康成长当中，越做越好！</p>
            <h4>雪域科技的八大优势</h4>
            <ul>
                <li>地理优势：方便货物流通，库存现货当天交货，香港现货2-3天交货，国外现货5-7天交货，准确及时将产品送往客户手中</li>
                <li>代理分销优势：专业代理、独立分销各类电子元器件，专注于名牌品牌《 ADI、TI 》的优势打造。其次还经营MAXIM(美信）、NXP(恩智浦)</li>
            </ul>
            ',
            'status' => 'passed',
            'user_id' => $user02->id,
            'checked' => true,
            'featured' => true,
            'checked_at' => Carbon::now(),
        ]);


        $user03 = Auth::findUserByLogin('3190136675@qq.com');
        if (!$user03) {
            Auth::register([
                'name' => '3190136675',
                'email' => '3190136675@qq.com',
                'password' => '111111',
                'password_confirmation' => '111111',
            ], true);
        }
        $user03 = Auth::findUserByLogin('3190136675@qq.com');
        // insert user company
        Company::create([
            'name' => '辣妈帮',
            'address' => '甘肃省定西市渭源县辣妈帮大夏1F',
            'contact_phone' => '0934-0753388',
            'description' => '辣妈帮是一家专注于移动互联网业务的公司，成立于2011年12月，总部位于中国广东深圳，公司拥有辣妈帮、辣妈商城、孕期伴侣、荷花亲子等多款移动产品。公司于2012年5月推出辣妈帮，迄今为止，辣妈帮已获得了用户6000万，日活480万的骄人成绩，成为当今中国最大的移动女性社区，在行业深具影响力。辣妈帮目前团队有近500人，在CEO金赞的带领下，吸引着一大批来自硅谷、腾讯、百度、阿里巴巴等顶尖互联网公司人才。',
            'detail' => '
            <p>妈帮是一家专注于移动互联网业务的公司，成立于2011年12月，总部位于中国广东深圳，公司拥有辣妈帮、辣妈商城、孕期伴侣、荷花亲子等多款移动产品。公司于2012年5月推出辣妈帮，迄今为止，辣妈帮已获得了用户6000万，日活480万的骄人成绩，成为当今中国最大的移动女性社区，在行业深具影响力。辣妈帮目前团队有近500人，在CEO金赞的带领下，吸引着一大批来自硅谷、腾讯、百度、阿里巴巴等顶尖互联网公司人才。</p>
            <h4>辣妈帮</h4>
            <p>辣妈帮是千万辣妈选择的移动互联网社交平台，迄今为止，已拥有6000万用户，日活跃用户达到480万。辣妈帮以“辣”的生活态度，“帮”的形式打造了新时代辣妈们的深度沟通交流模式。辣妈帮里帮派林立，同城、附近、育儿、瘦身、美妆、情感、美食、打击小三、两性健康等等。无论你身处何时何地，无论你是准妈妈还是新手妈妈，只要是你关心的，辣妈帮里都有。你可以加入任意帮派，也可以建立热门话题，结交来自全国各地、五湖四海志同道合的姐妹。无论生活中的点滴乐趣，还是各种难题，都可以通过手机、ipad、网页在辣妈帮即时分享及获得帮助。</p>
            <h4>孕期伴侣</h4>
            <p>“孕期伴侣”是专业贴心的孕期40周陪护及新生儿养护工具。为准妈妈、新手妈妈们提供科学的孕期指南及活跃的圈子交流服务。无论是每周胎儿３Ｄ图形，标准身长体重数据及胎教，还是怀孕时长、自身变化、孕期任务、营养贴士和菜谱等都尽在掌握。中国知名妇产科、营养及儿科等专家将陪伴准妈妈们走过孕期，每天讲解孕产期知识，并提供专业的咨询服务。针对各种孕期及新生儿常见问题，您还可以通过孕期热点标签的分类查找或搜索找到答案，并分享经验。</p>
            <h4>辣妈商城</h4>
            <p>辣妈商城是跨境母婴用品特卖商城，2014年9月12日推出以来，上线首日纯移动端销售即突破1000单，一个月后月销售额突破1000万元，超过了同业用两三年时间花巨额推广费用才能达到的订单量，显示了移动社区电商不同于传统电商的强大威力。辣妈帮商城C2B2C众荐模式的官方进口母婴特卖商城，是移动电商加移动社区的首位探索者。在售后上，辣妈商城百分百海外正品保证，奶粉爆罐包赔，支持14天无理由退货政策。24小时极速发货。</p>
            ',
            'status' => 'passed',
            'user_id' => $user03->id,
            'checked' => true,
            'featured' => true,
            'checked_at' => Carbon::now(),
        ]);


        $user04 = Auth::findUserByLogin('616184039@qq.com');
        if (!$user04) {
            Auth::register([
                'name' => '616184039',
                'email' => '616184039@qq.com',
                'password' => '111111',
                'password_confirmation' => '111111',
            ], true);
        }
        $user04 = Auth::findUserByLogin('616184039@qq.com');
        // insert user company
        Company::create([
            'name' => '智火营销',
            'address' => '甘肃省定西市渭源县经贸大夏11F',
            'contact_phone' => '0934-5330514',
            'description' => '智火营销成立于2011年，经过5年发展，团队规模已达40余人，服务超过300家客户。智火营销在搜索营销、口碑营销以及互动营销方面拥有丰富经验。尤其在服务流程以及执行力方面，精益求精。智火作为一家营销执行机构，致力于从策略、内容生产、渠道传播方面帮助客户提升流量，扩大影响力，塑造品牌。',
            'detail' => '
            <p>智火营销成立于2011年，经过5年发展，团队规模已达40余人，服务超过300家客户。智火营销在搜索营销、口碑营销以及互动营销方面拥有丰富经验。尤其在服务流程以及执行力方面，精益求精。智火作为一家营销执行机构，致力于从策略、内容生产、渠道传播方面帮助客户提升流量，扩大影响力，塑造品牌。</p>
            <h4>精益</h4>
            <p>在项目执行时，我们会根据执行情况不断调整方法及策略以求精益求精。</p>
            <h4>精密</h4>
            <p>项目节点管控及实施方便执行结果不偏离目标，同时为超额完成任务打下目标。</p>
            <h4>精确</h4>
            <p>从项目接触时，我们就要求数字化，并写进合同，同时多维度考核服务。</p>
            <h4>精细</h4>
            <p>多份报表系统展示执行结果，多层次的会议制度保障项目进度及实施无障碍。</p>
            ',
            'status' => 'passed',
            'user_id' => $user04->id,
            'checked' => true,
            'featured' => true,
            'checked_at' => Carbon::now(),
        ]);

    }
}