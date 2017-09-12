<?php namespace Buuug7\News\Updates;

use Buuug7\News\Models\Category;
use Buuug7\News\Models\Comment;
use Buuug7\News\Models\Post;
use Carbon\Carbon;
use October\Rain\Database\Updates\Seeder;

class SeedPostsFourTables extends Seeder{
    public function run()
    {

        //
        // 通知公告 start
        //

        $zhenCeJieDu01 = Post::create([
            'title' => '农业部组织开展农业特色互联网小镇建设试点工作',
            'slug' => '农业部组织开展农业特色互联网小镇建设试点工作',
            'summary' => '为贯彻落实党中央、国务院关于农业农村信息化发展和特色小城镇建设的部署要求，加快农村互联网建设步伐，让更多农民用得上、用得起、用得好互联网，推动信息化与农业现代化融合发展，提高农业生产智能化、经营网络化、管理数据化、服务在线化水平，我司决定组织开展农业特色互联网小镇建设试点，探索镇域范围内加快农业农村信息化建设的有效途径、机制和模式。',
            'published' => true,
            'published_at' => Carbon::now(),
            //'featured' => true,
            //'image' => '/news/01.jpg',
            'user_id' => 1,
            'images' => [],
            'files' => [],
            'content' => '
            <p style="text-indent: 2em">各省（自治区、直辖市）农业（农牧、农村经济）厅（委、局），新疆生产建设兵团农业局：</p>
            <p style="text-indent: 2em">为贯彻落实党中央、国务院关于农业农村信息化发展和特色小城镇建设的部署要求，加快农村互联网建设步伐，让更多农民用得上、用得起、用得好互联网，推动信息化与农业现代化融合发展，提高农业生产智能化、经营网络化、管理数据化、服务在线化水平，我司决定组织开展农业特色互联网小镇建设试点，探索镇域范围内加快农业农村信息化建设的有效途径、机制和模式。现将有关事项通知如下。</p>
            <h3>一、重要意义</h3>
            <p>小镇相对独立于市区，具有明确的农业产业定位、农业文化内涵，有别于行政区划单元和产业园区。农业特色互联网小镇（以下简称小镇）建设是深入推进新型城镇化的重要抓手，有利于推动经济转型升级和发展动能转换，有利于促进大中小城市和小城镇协调发展，有利于充分发挥城镇化对新农村建设的辐射带动作用。</p>
            <p>（一）小镇建设是落实新发展理念的重要举措。小镇是经济社会发展中孕育出的新事物，贯穿着创新、协调、绿色、开放、共享新发展理念在基层的探索和实践。加快小镇建设，有利于破解资源瓶颈、聚集高端要素、促进创业创新，能够增加有效投资，促进消费升级，带动城乡统筹发展和生态环境改善，提高村镇生活质量，形成新的经济增长点。</p>
            <p>（二）小镇建设是全面深化改革的有益探索。小镇是改革创新的产物，也是承接、推进改革创新的平台。加快小镇建设，可以充分发挥市场在资源配置中的决定性作用，激发企业和创业者的创新热情和潜力，也能推动政府转变职能，营造良好发展环境，形成政府引导、企业主体、市场化运作、多元化投资的开发建设格局。</p>
            <p>（三）小镇建设是推进产业转型升级的有效路径。小镇突出新兴产业培育和传统特色产业再造，是推进供给侧结构性改革、培育发展新动能的生力军。加快小镇建设，既能增加有效供给，又能创造新的需求；既能带动工农业发展，又能带动旅游业等现代服务业发展；既能推动产业加快聚集，又能补齐新兴产业发展短板，打造引领产业转型升级的示范区。</p>
            <p>（四）小镇建设是统筹城乡发展的重要抓手。加快小镇建设，能够推动产业之间、产城之间、城乡之间融合发展，有利于落实新型城镇化和统筹城乡协调发展的功能定位，破解城乡二元结构，提速农民就地城镇化进程，形成独具魅力的城乡统筹发展新样板。</p>
            <h3>二、建设目标</h3>
            <p>力争在2020年试点结束以前，原则上以县（市、区）或垦区为单位，在全国建设、运营100个农业特色优势明显、产业基础好、发展潜力大、带动能力强的农业特色互联网小镇。在小镇内，培育一批经济效益好、辐射带动强的新型农业经营主体，打造一批优势特色明显的农业区域公用品牌、企业品牌和产品品牌，将小镇培育成农业农村经济的重要支柱。</p>
            <h3>三、建设原则</h3>
            <p>（一）促进产业融合发展。农业特色互联网小镇的核心在农业，要统筹空间布局，集聚资源要素，推动现代农业产业园、特色农产品优势区、农业科技园区与农业特色互联网小镇等建设的有机融合，促进农村一二三产业融合发展，构建功能形态良性运转的产业生态圈，激发市场新活力，培育发展新动能。</p>
            <p>（二）规划引领合理布局。小镇规划不以面积为主要参考，遵循控制数量、提高质量、节约用地、体现特色的要求，推动小镇发展与疏解大城市中心城区功能相结合、与特色产业发展相结合、与服务“三农”相结合，打通承接城乡要素流动的渠道，打造融合城市与农村发展的新型社区和综合性功能服务平台。以镇区常住人口5万以上的特大镇、3万以上的专业特色镇为重点，兼顾多类型多形态的特色小镇，因地制宜规划建设。</p>
            <p>（三）积极助推精准扶贫。围绕种植业结构调整、养殖业提质增效、农产品加工升级、市场流通顺畅高效、资源环境高效利用等重点任务，发挥各地区各部门优势，协同推进农业特色互联网小镇建设运营，带动贫困偏远地区农民脱贫致富。</p>
            <p>（四）深化信息技术应用。将农业特色互联网小镇作为信息进村入户的重要形式，充分利用互联网理念和技术，加快物联网、云计算、大数据、移动互联网等信息技术在小镇建设中的应用，大力发展电子商务等新型流通方式，有力推进特色产业发展。</p>
            <h3>四、建设投资机制</h3>
            <p>农业特色互联网小镇建设试点采取政府和社会资本合作（PPP）模式。政府负责宏观指导和引导，积极争取金融机构融资支持，充分发挥企业主体作用，鼓励企业投入资金并组织申报、审核、建设、运营工作。</p>
            <p>各地在建设过程中如有资金需求，可向北京中投炎黄文化创意中心申请支持。该中心设立了农业特色互联网小镇专项资金（简称“专项资金”），设置专项资金管理办公室负责制定资金申报细则，接受申报（专项资金管理办公室联系方式：010-64011007-308，ztyhtian@126.com）。小镇建设遵循自愿原则，以县级政府为主组织，制定建设方案，明确四至范围、产业定位、建设运营单位、投资规模、建设计划，并附概念性规划。建设运营单位应具有独立法人资格、有独立对公账户。对于自愿申报、审定合格的建设运营主体，专项资金按照PPP模式提供项目投资总额70%以内的资金支持，与小镇建设运营主体建立利益共建共享机制。在建设运营中，申报主体管理自有资金，负责建设运营工作，不能撤离资金或将资金挪作他用；专项资金管理办公室负责监管专项资金的使用进度和类别是否与建设运营方案一致，但不参与具体建设运营工作。由于小镇建设具有高度个性化、差异化的特点，专项资金管理办公室将组织对申报主体开展一对一服务。</p>
            <h3>五、有关安排和要求</h3>
            <p>（一）各地要把农业特色互联网小镇建设试点纳入本辖区内特色小镇建设规划，充分体现出农业特色，找准互联网与农业产业的结合点，按照成熟一个、建设一个的思路，有计划、有步骤、分期分批开展建设，申报小镇不平均分配名额，凡符合申报条件的，均纳入初审名单。各地要充分遵循共建共享的互联网理念，将农业特色互联网小镇建设试点与信息进村入户工程推进统筹安排，互为补充、形成合力。</p>
            <p>（二）各地应加强制度机制创新，力争通过农业特色互联网小镇建设试点，探索实践出一批统筹城乡发展、推进供给侧结构性改革、加强美丽乡村建设、推动大众创业万众创新、发展农村数字经济等方面的制度机制成果。</p>
            <p>（三）农业特色互联网小镇建设试点采取“先建设、后认定”的方式。2018年，我司将在各省份自愿申报的基础上，组织专家进行评审，并按程序报批后，先期认定一批农业特色互联网示范小镇。</p>
            ',
        ]);
        // attach with category
        $zhenCeJieDu01->categories()->attach(4);


        $zhenCeJieDu02 = Post::create([
            'title' => '商务部办公厅关于开展2017-2018年度电子商务示范企业创建工作的通知',
            'slug' => '商务部办公厅关于开展2017-2018年度电子商务示范企业创建工作的通知',
            'summary' => '为促进我国电子商务健康快速发展，充分发挥电子商务示范企业的引领作用，根据《商务部关于开展电子商务示范工作的通知》（商商贸发〔2010〕428号）精神，现将2017-2018年度电子商务示范企业创建工作有关事项通知',
            'published' => true,
            'published_at' => Carbon::now(),
            //'featured' => true,
            //'image' => '/news/01.jpg',
            'user_id' => 1,
            'images' => [],
            'files' => [],
            'content' => '
            <h2 style="text-align: center">商办电函〔2017〕187号</h2>
            <p style="text-indent: 2em">各省、自治区、直辖市、计划单列市及新疆生产建设兵团商务主管部门：</p>
            <p style="text-indent: 2em">为促进我国电子商务健康快速发展，充分发挥电子商务示范企业的引领作用，根据《商务部关于开展电子商务示范工作的通知》（商商贸发〔2010〕428号）精神，现将2017-2018年度电子商务示范企业创建工作有关事项通知如下:</p>
            <h3>一、总结2015-2016年度电子商务示范工作情况</h3>
            <p>（一）电子商务示范企业创新发展情况。本地电子商务示范企业在新技术应用、经营服务模式创新、线上线下融合发展、带动传统产业转型升级、促进供给侧结构性改革、扩大消费等方面的做法和经验，以及为引领本地区电子商务健康发展所开展的示范推广活动和取得的成效。</p>
            <p>（二）地方政府及部门相关工作情况。本地促进电子商务企业发展所开展的工作，包括出台的有关政策法规、开展的基础环境建设和宣传引导活动等，取得的经验和成效，遇到的问题、困难及政策建议。</p>
            <h3>二、申报2017-2018年度电子商务示范企业</h3>
            <p style="text-indent: 2em">根据新修订的《电子商务示范企业创建规范》（附件1），遴选优秀电子商务企业申报2017-2018年度电子商务示范企业，推荐的企业数量不超过本地区入选2015-2016年度电子商务示范企业数量的2倍。商务部将对在扶贫、兴边富民、大学生就业等领域发挥重要作用的电子商务企业给予积极考虑。</p>
            <h3>三、进度安排</h3>
            <p>（一）总结及申报。2017年5月至6月中旬，各地总结2015-2016年度电子商务示范企业创建工作情况，组织2017-2018年度电子商务示范企业申报工作。6月20日前，各地将总结报告、推荐企业名单、电子商务示范企业申报表（附件2）、电子商务示范企业申报书（申报书提纲见附件3）等材料报商务部。企业申报电子文档通过电子商务信息管理分析系统传输。（网址：http://211.88.22.100, 系统于6月1日起开放填报）。</p>
            <p>（二）专家评估。2017年7月，商务部组织专家评估，拟定电子商务示范企业名单并进行公示。</p>
            <p>（三）公布名单。2017年8月，商务部发布2017-2018年度电子商务示范企业名单。</p>
            <h3>四、工作要求</h3>
            <p>（一）加强组织领导。</p>
            <p style="text-indent: 2em">各地商务主管部门要把电子商务示范工作作为促进电子商务发展的重要抓手，严格按照《电子商务示范企业创建规范》的目标原则、标准条件和方法程序进行遴选，发挥好专家队伍和专业机构作用，确保遴选过程公平公正，推荐的企业创新发展水平高、示范作用强。</p>
            <p>（二）优化企业发展环境。</p>
            <p style="text-indent: 2em">要加强对示范企业的跟踪研究，及时掌握示范企业发展情况，切实帮助解决企业发展过程中遇到的实际问题，通过制度创新、管理创新，不断优化电子商务发展环境。</p>
            <p>（三）加强示范期间的管理。</p>
            <p style="text-indent: 2em">加大对电子商务示范企业考核评估力度，及时指导督促示范企业履行义务和社会责任，实现动态管理、优胜劣汰。同时，注意发现和总结示范企业创新发展的先进经验，开展宣传推广活动。</p>
            <ul>
                <li>联系人：电子商务司 李燕</li>
                <li>电 话：010-65197848</li>
                <li>传 真：010-65197440</li>
                <li>邮 箱：liyan2010@mofcom.gov.cn</li>
            </ul>
            <blockquote class="blockquote-reverse">
                <p>商务部办公厅</p>
                <p>2017年5月9日</p>
            </blockquote>
            <h3>附件</h3>
            <h4>电子商务示范企业创建规范</h4>
            <p>第一条 为促进我国电子商务健康快速发展，充分发挥电子商务示范企业的引领作用，完善电子商务示范企业创建工作办法、程序及相关工作机制，特制定本规范。</p>
            <p>第二条 电子商务示范企业创建工作遵循全面客观、公开公平、科学量化、动态管理、优胜劣汰、鼓励创新的原则。</p>
            <p>第三条 示范方向根据国家重大战略举措以及《电子商务"十三五"发展规划》确定，鼓励电子商务企业在以下方面创新发展：</p>
            <ol>
                <li>电子商务提质升级。提升电子商务创新发展水平，促进电子商务内外贸市场一体化，提升电子商务领域科技支撑能力。</li>
                <li>电子商务与传统产业融合。发挥电子商务带动作用，促进农业转型升级，拉动制造业提质增效，加快商贸流通业创新发展。</li>
                <li>电子商务要素市场建设。加强电子商务人才培养、信息服务、技术服务、物流服务、金融服务以及电子商务产业载体建设，完善电子商务发展基础条件。</li>
                <li>电子商务民生服务创新。利用电子商务开展精准扶贫、培育便民服务、优化医疗及教育服务等。</li>
                <li>电子商务市场环境优化。推动建立行业标准，规范电子商务市场秩序，促进绿色、循环、低碳发展。</li>
            </ol>
            <p>第四条 示范企业的遴选确认每两年进行一次，被确认的企业为当期示范企业，下一期未被确认的将不再是示范企业。</p>
            <p>第五条 每期示范企业数量根据具体情况确定，原则上总量控制、适当增补，反映我国电子商务创新发展水平。</p>
            <p>第六条 电子商务示范企业遴选确认按下列程序进行：</p>
            <ol>
                <li>各地申报。有申报意愿的企业根据自身情况填写电子商务示范企业申报表（附件2），并附电子商务示范企业申报书（申报书提纲见附件3）及企业工商营业执照、涉及行政许可类商品和服务的经营批准证书、税务登记证复印件（"三证合一"的企业只需提供营业执照）、经审计的会计年报及其他证明材料（所有材料需盖公章），报省级商务主管部门；省级商务主管部门对申报企业提交的资料进行初核后确定推荐名单，将推荐文件和申报企业材料（包括电子版）报商务部。</li>
                <li>专家评估。商务部组织专家或委托专业机构依据规范对申报企业资料进行综合评估，必要时对有关内容进行现场调研，提出评估意见，拟定电子商务示范企业名单。</li>
                <li>结果公示。将拟定的电子商务示范企业名单在商务部网站公示，任何单位或个人对名单有不同意见的，均可向商务部提出异议，由商务部组织专家进行复审。</li>
                <li>发文公布。在公示期间，对拟定的示范企业名单无异议或者异议不成立的，由商务部确定为电子商务示范企业，并以商务部公告形式公布。</li>
            </ol>
            <p>第七条 申报示范的企业应是以下类型之一：</p>
            <ol>
                <li>网上零售企业。通过互联网等信息网络开展商品零售业务的企业。</li>
                <li>网上批发企业。通过互联网等信息网络开展商品批发业务的企业。</li>
                <li>网络化服务企业。通过互联网等信息网络提供教育、医疗、文化、旅游、本地生活等服务产品的企业。</li>
                <li>电子商务服务企业。电子商务第三方平台以及为电子商务经营者提供运维、数据、信用、咨询、培训、物流、金融支付等电子商务相关服务（含跨境电子商务服务）的企业。</li>
                <li>综合型电子商务企业。同时开展上述两种以上（含两种）经营活动的企业。</li>
                <li>其他电子商务企业。通过互联网等信息网络，开展其他类型经营活动的企业。</li>
            </ol>
            <p>第八条 申报示范的企业必须符合以下基本条件：</p>
            <ol>
                <li>申报示范的企业须为在中国境内注册的独立法人企业（控股公司与其下属子公司同时申报的，由专家评估后择优选择其中之一）。</li>
                <li>遵守国家有关法律、法规、规章的规定，符合《电子商务企业认定规范（SB/T11112-2015）》、《电子商务商品营销运营规范》（SB/T10469-2013）、《电子商务物流服务规范》（SB/T11132-2015）等行业标准，合法经营，对传销、欺诈、销售违禁品、制假售假、非法集资等违法违规行为有相应健全的管理防控措施。</li>
                <li>通过互联网从事涉及行政许可类商品和服务经营活动的，须按有关规定取得相应经营批准证书，并在其电子商务平台公开经营批准证书的信息以及清晰可辨的照片或其电子链接标识。</li>
                <li>企业经营的独立网站或网店须开设两年以上并运行稳定，如是独立网站须已取得互联网信息服务增值电信业务经营许可证，或已通过非经营性互联网信息服务备案，取得ICP证号。</li>
                <li>企业建有专门的电子商务运营机构，拥有专业的电子商务人才队伍和培养计划，具备充足的资金保障，有健全的管理、技术和财务制度，拥有完善的售前、售中、售后服务保障体系。</li>
                <li>企业的电子商务业务经营状况良好，上年度业务收入或利税稳定增长，或企业电子商务销售额在同行业中居领先地位。</li>
                <li>企业可持续发展能力较强，经营商品品种、服务内容、市场占有率、用户规模具有成长性。</li>
                <li>企业电子商务应用的社会效益明显，有助于提升相关产业的国际竞争力，带动上下游关联企业协同发展，有利于促进就业和创业，满足社会公众便利、安全的消费需求。</li>
                <li>企业电子商务业务在国内同行业中处于先进水平，用户满意度高，在营销、支付、物流等环节具有良好的可选择性和便利性，具有较高知名度和影响力。</li>
                <li>在已开展省级电子商务示范工作的地区，申报企业原则上应是省级电子商务示范企业。</li>
            </ol>
            <p>第九条 申报企业必须同时具备以下分类条件</p>
            <ol>
                <li>网上零售企业的年度电子商务销售额在1亿元以上（含1亿元），员工总数在50人以上（含50人）。</li>
                <li>网上批发企业年度电子商务交易规模在5亿元以上（含5亿元），企业员工总数在50人以上（含50人）。</li>
                <li>网络化服务企业年度营业收入在1000万元以上（含1000万元），员工总数在100人以上（含100人）。</li>
                <li>电子商务服务企业年度营业收入在1000万元以上（含1000万元），或所运营平台上的交易额在10亿元以上（含10亿元）；员工总数在50人以上（含50人）。</li>
                <li>综合型电子商务企业所运营平台上的电子商务交易额在100亿元（含100亿元）以上，或服务收入在1亿元以上（含1亿元）；员工总数在1000人以上（含1000人）。</li>
                <li>其他电子商务企业年营业收入增速超过100%，所经营网站流量年增速超过100%；员工总数在50人以上（含50人）。</li>
            </ol>
            <p>第十一条 电子商务示范企业的考核评估按以下程序进行：</p>
            <ol>
                <li>报送材料。示范企业须在每年3月31日前或规定的其他时间内，向商务部和所在地省级商务主管部门报送上一年度经营情况和《电子商务示范企业年度自评报告表》。同时，按照商务部典型电子商务服务企业经营情况统计的相关要求，填报年报表。</li>
                <li>审核考评。省级商务主管部门在审核所属企业报送的材料基础上，综合企业实际发展情况，提出年度考评意见并报商务部。</li>
                <li>专家评估。商务部组织专家或委托专业机构进行综合评估。</li>
                <li></li>
            </ol>
            <p> 第十二条 示范企业有下述情况之一的，取消示范资格。</p>
            <ol>
                <li>报送的材料中存在虚假信息的。</li>
                <li>发生违法、违规行为的。</li>
                <li>不按规定要求和时限报送年度经营情况、《企业年度自评报告表》等材料，经验总结交流不积极等影响示范创建相关的工作计划或进程的。</li>
                <li>连续两年考核评估成绩差，排名位置靠后的。</li>
                <li>不符合本规范其他要求和条件的。</li>
            </ol>
            <p>企业被取消示范资格起4年内，不得再申报电子商务示范企业。</p>
            <p>第十三条 示范企业发生更名或变更经营范围、合并、分立、转业的，应及时向商务部和所在地省级商务主管部门备案。</p>
            <p>第十四条 企业在电子商务示范企业创建工作中遇到问题及时向商务部或地方商务主管部门反映，商务部将适时组织专家对本规范进行完善。</p>
            <p>本规范由商务部（电子商务和信息化司)负责解释。</p>
            ',
        ]);
        // attach with category
        $zhenCeJieDu02->categories()->attach(4);


        $zhenCeJieDu03 = Post::create([
            'title' => '关于开展2017年电子商务进农村综合示范工作的通知',
            'slug' => '关于开展2017年电子商务进农村综合示范工作的通知',
            'summary' => '为贯彻落实2017年中央1号文件、《中共中央国务院关于打赢脱贫攻坚战的决定》和《国务院办公厅关于促进农村电子商务加快发展的指导意见》（国办发﹝2015〕78号）等精神，进一步推动农村电子商务加快发展，财政部、商务部、国务院扶贫办决定2017年继续开展电子商务进农村综合示范工作。',
            'published' => true,
            'published_at' => Carbon::now(),
            //'featured' => true,
            //'image' => '/news/01.jpg',
            'user_id' => 1,
            'images' => [],
            'files' => [],
            'content' => '
            <h3 style="text-align: center">财办建﹝2017〕30号</h3>
            <p>河北、山西、内蒙古、吉林、黑龙江、安徽、福建、江西、山东、河南、湖北、湖南、广东、广西、海南、四川、贵州、云南、西藏、陕西、甘肃、新疆、青海省（区）财政、商务、扶贫主管部门：</p>
            <p>为贯彻落实2017年中央1号文件、《中共中央国务院关于打赢脱贫攻坚战的决定》和《国务院办公厅关于促进农村电子商务加快发展的指导意见》（国办发﹝2015〕78号）等精神，进一步推动农村电子商务加快发展，财政部、商务部、国务院扶贫办决定2017年继续开展电子商务进农村综合示范工作。有关事项通知如下：</p>
            <h3>一、总体思路</h3>
            <p>牢固树立和深入贯彻新发展理念，紧紧围绕农业供给侧结构性改革主线和坚决打赢脱贫攻坚战的要求，以示范县创建为抓手，在总结前一阶段工作的基础上，深入建设和完善农村电商公共服务体系，进一步打牢农村产品“上行”基础，培育市场主体，构建农村现代市场体系，推动农村电子商务成为农村经济社会发展的新引擎。</p>
            <h3>二、基本原则与目标</h3>
            <h4>（一）基本原则</h4>
            <p>市场为主、政府引导。充分发挥市场机制的决定性作用，突出企业的主体地位，提高农村电子商务的可持续发展能力。示范地区政府应进一步完善政策、优化服务、加强监管，为电子商务在农村的发展创造开放、包容、公平的政策环境。注重总结经验，推广典型模式，不断扩大示范效应。</p>
            <p>把握精准，助力扶贫。深入领会习近平总书记新时期扶贫开发重要战略思想，充分发挥农村电子商务助力扶贫攻坚作用，注重培育带动贫困人口脱贫的经济实体，加大对建档立卡贫困户的帮扶力度，增强精准扶贫“绣花”的本领。</p>
            <p>强化服务，聚焦上行。加强农村电商公共服务体系建设，推动农产品、农村工业品、乡村旅游及服务产品的电商化、品牌化、标准化，提高农村产品商品化率和电子商务交易比例，促进农业发展方式转变，推动农村一二三产业融合发展。</p>
            <p>择优选拔，整体推进。实事求是，对有条件的地区采取自愿申报、择优选拔的方式选择示范县。适应集中连片特困地区脱贫工作需要，鼓励地方整体推进，促进物流、市场、品牌等资源的集约和整合，提高市场运营和行政管理效率。</p>
            <h4>（二）发展目标</h4>
            <p>2017年，在全国培育一批能够发挥典型带动作用的示范县，电子商务在便利农民生产生活、助力扶贫攻坚、促进农村经济发展等方面取得明显成效。示范地区电商服务站点行政村和建档立卡贫困村覆盖率均达到50%左右，农村网络零售额同比增长20%，农产品网络零售额同比增长30%，电商培训人数3000人次以上。西藏、青海、新疆、内蒙古等省（区）受地理条件、经济发展水平等因素影响，可制定符合本地实际的工作目标。</p>
            <h3>三、示范范围</h3>
            <p>2017年，综合示范工作继续向贫困地区倾斜，具体范围包括：国家扶贫开发工作重点县和集中连片特殊困难县（以下简称国家级贫困县，已支持过的县除外），纳入国务院《“十三五”脱贫攻坚规划》中的赣闽粤原中央苏区、左右江、大别山、陕甘宁、川陕、沂蒙等重点贫困和欠发达革命老区县（以下简称革命老区县，市辖区和已支持过的县除外）。</p>
            <p>鼓励集中连片贫困地区采取地级市整体推进的方式开展综合示范工作。申请整体推进的地级市应与辖区内尚未支持的所有国家级贫困县和革命老区县沟通一致，充分发挥统筹规划、资源整合优势，且中央财政资金必须全部用于尚未支持的国家级贫困县和革命老区县；其他符合条件且所在地级市未采用整体推进方式的县，仍可采用以县为单位推进的工作方式。</p>
            <h3>四、中央财政资金支持方式和重点</h3>
            <p>鼓励各地优先采取股权投资、政府和社会资本合作(PPP)、以奖代补、贷款贴息等支持方式，通过中央财政资金引导带动社会资本共同参与农村电子商务工作。重点支持以下方向：</p>
            <p>（一）聚焦农村产品上行。支持农村产品的标准化、生产认证、品牌培育、质量追溯等综合服务体系建设；农产品分级、包装、预冷、初加工配送等基础设施建设；县、乡、村三级具有服务农村产品上行功能的物流配送体系建设。中央财政资金支持农村产品上行的比例原则上不低于50%。</p>
            <p>（二）支持县域电子商务公共服务中心和乡村电子商务服务站点的建设改造，重点支持在建档立卡贫困村建设农村电子商务服务站点，拓展村级站点代收代缴、代买代卖、小额信贷、生活服务等功能，增强电子商务服务体系可持续发展能力。公共服务中心建设要坚持实用、节约原则，资金使用比例原则上不得高于15%。</p>
            <p>（三）支持农村电子商务培训。支持对政府机构、涉农企业、合作社工作人员和农民等，开展电子商务培训。结合农村双创和扶贫脱贫，加大对建档立卡贫困户的培训力度，就农村产品上行开展有关网店开设、宣传推广、产品营销等进行实操培训，重点要完善培训后服务机制。</p>
            <p>（四）示范县要充分利用县域内现有各类产业园区、闲置厂房与商业化电商平台，最大限度利用社会化资源，避免盲目建设电商产业园区和资源浪费。中央财政资金不得用于网络交易平台、楼堂馆所建设、工作经费及购买流量等支出，有关支持项目应开放共享。</p>
            <h3>五、工作程序</h3>
            <h4>（一）各地组织申报</h4>
            <p>各地应按照具备一定条件的国家级贫困县三年全覆盖的规划，制定本省（区）三年工作方案，重点是2017年的工作方案（有关要求详见附件）。原则上，2017年各省（区）申报的示范县数量为尚未支持的国家级贫困县和革命老区县数量的1/3—1/2，其中，革命老区县比例不超过20%；黑龙江、吉林、安徽、江西、海南等尚未支持的国家级贫困县数量较少的省，未支持的国家级贫困县可全部申报；福建、山东、广东申报的示范县数量不超过7个。示范地区在县级政府自愿基础上，择优选拔。省级工作方案应于5月20日前上报财政部、商务部、扶贫办，逾期未上报的，视为自动放弃。</p>
            <h4>（二）确定示范县数量及具体名单</h4>
            <p>财政部、商务部、扶贫办综合考虑各地国家级贫困县和革命老区县数量、前一阶段工作进展、工作基础和绩效评价情况，并委托专家对各省级主管部门上报的工作方案等材料进行审核，共同确定各省（区）示范县具体支持个数。</p>
            <p>各地根据三部门确定的示范县数量，于5月底前将最终工作方案、确定的示范地区名单及其工作方案上报财政部、商务部、扶贫办。</p>
            <h4>（三）组织实施。</h4>
            <p>中央财政资金下达后，省级财政部门要及时拨付至相关市县；省级主管部门要积极组织实施，加强监督检查，及时报送示范工作情况，接受财政部、商务部、扶贫办的绩效考核和随机检查。</p>
            <h3>六、工作要求</h3>
            <p>（一）加强组织领导。各地要高度重视综合示范工作，协调建立多部门参与的工作协调机制，加大政策协同力度，研究出台金融、土地、税费等支持政策，大力推动农村流通基础设施建设。增强贫困地区发展内生动力，让贫困户享受到电商发展带来的收益。</p>
            <p>（二）明确责任主体。省级主管部门是综合示范工作的第一责任主体，对选择的示范地区负责，要结合本地区实际情况，细化资金支持方向、补贴标准，明确各类项目建设内容、建设标准、功能要求和验收程序，明确示范地区工作方案调整办法。示范地区（地级市或县）人民政府是综合示范工作的直接责任主体，对具体工作负责，应建立项目台账制度，明确责任人和进展时限，确保资金安全、方案落地、项目落实、农民受益。</p>
            <p>（三）强化过程管理。省级主管部门应切实加强日常监督、检查、指导。密切跟踪示范地区项目进展情况，及时发现并解决项目和资金管理等存在的问题。鼓励选择会计师事务所等专业第三方机构加强现场监督审核。督促示范地区在所有中央财政资金支持项目显著位置标识“电子商务进农村综合示范项目”字样，同时提供省级主管部门的举报监督渠道，主动接受社会监督。</p>
            <p>（四）做好政务公开和信息报送。省级主管部门应在部门政府网站设置综合示范政务公开专栏，并督促示范地区在其人民政府门户网站设置综合示范专栏，全面、及时、准确、集中公开综合示范方案、项目内容、资金安排、决策过程等信息。督促示范地区和承办单位与商务部农村电子商务信息系统进行对接，按时报送项目进展、资金拨付等材料。指导示范地区与项目承办单位达成协议，凡接受财政补贴的项目必须按要求提供交易和活动信息，同时依法保护项目承办单位信息安全。未提供完整信息的项目不得验收。</p>
            <p>（五）做好总结和宣传推广。各地要系统总结前一阶段综合示范工作开展情况，及时发现并梳理典型经验与做法。加大宣传推广力度，加强地区之间相互交流与借鉴，增强综合示范辐射效应。</p>
            <blockquote class="blockquote-reverse">
                <p>财政部办公厅 商务部办公厅 国务院扶贫办综合司</p>
                <footer>2017年5月3日</footer>
            </blockquote>
          <h4>附件：省级主管部门工作方案基本要求</h4>
          <h4 style="text-align: center">省级主管部门工作方案基本要求</h4>
          <h4>一、前期综合示范工作总结</h4>
          <p>前期综合示范工作开展情况，对示范县进行监督、检查和指导的工作措施，取得的成效，目前存在的主要问题和困难，以及解决措施等。</p>
          <h4>二、未来三年工作思路</h4>
          <p>本省（区）电子商务进农村综合示范三年工作方案，包括总体工作思路、阶段性工作目标、重点任务和保障措施，每年示范地区的安排计划等。具备整体推进条件的省份要说明整体推进工作思路。</p>
          <h4>三、2017年工作方案</h4>
          <p>2017年工作目标、主要任务，示范地区选拔的办法和申报地区名单，以及申报地区（明确到具体县）有关情况，包括经济社会基本情况、农村电商工作基础、实施电商进农村的工作思路、主要工作内容等。</p>
          <h4>四、下一步加强管理的工作措施</h4>
          <p>完善本省（区）财政专项资金细化支持方向、标准，以及项目验收要求。进一步加强政务公开和信息报送的政策措施，省级主管部门和示范地区人民政府门户网站设置公开专栏（有关信息不得散见于网站）情况。委托专业第三方机构加强日常现场管理的政策措施等。</p>
          
            ',
        ]);
        // attach with category
        $zhenCeJieDu03->categories()->attach(4);

        $zhenCeJieDu04 = Post::create([
            'title' => '商务部办公厅关于开展融资租赁业风险排查工作的通知',
            'slug' => '商务部办公厅关于开展融资租赁业风险排查工作的通知',
            'summary' => '按照国务院有关工作部署，为有效防范和化解融资租赁行业风险隐患，规范市场秩序，促进行业健康发展，我部定于5月2日至6月30日组织各地开展融资租赁行业风险排查工作。',
            'published' => true,
            'published_at' => Carbon::now(),
            //'featured' => true,
            //'image' => '/news/01.jpg',
            'user_id' => 1,
            'images' => [],
            'files' => [],
            'content' => '
            <p>各省、自治区、直辖市、计划单列市及新疆生产建设兵团商务主管部门：</p>
            <p>按照国务院有关工作部署，为有效防范和化解融资租赁行业风险隐患，规范市场秩序，促进行业健康发展，我部定于5月2日至6月30日组织各地开展融资租赁行业风险排查工作。现将有关事项通知如下：</p>
            <h3>一、排查要点</h3>
            <h4>（一）排查对象</h4>
            <p>本次风险排查工作对象为所有内资融资租赁试点企业和外商投资融资租赁企业，对存在以下情况的企业要进行重点检查：</p>
            <ol>
                <li>关联公司从事互联网金融、投资咨询、财富管理、第三方理财、小额贷款、融资担保、商业保理、典当等业务的企业。关联公司包括股东、股东投资的企业、同一实际控制人控制的其他企业及本公司所投资的企业。</li>
                <li>售后回租项目承租人多为关联公司的企业。</li>
                <li>股东或存在交易关系的关联公司及其高级管理人员近期出现过重大违法违规行为的企业。</li>
                <li>业务规模短期内以超常规速度增长，风险资产比例、资产负债率和租金逾期率过高的企业。</li>
                <li>主营业务占比偏低，存在大量对外投资和对外担保的企业。</li>
                <li>以工业原材料、贵重金属等限制流通物，无形资产、生物资产、商业地产甚至住宅等作为主要租赁物的企业。</li>
                <li>通过网络借贷平台等互联网金融企业进行融资，且融资规模较大的企业。</li>
                <li>以自然人为承租人或业务合作对象，且近期发生过多次业务纠纷的企业（例如面向个人开展汽车融资租赁业务）。</li>
                <li>未按要求及时通过全国融资租赁企业管理信息系统填报相关信息的企业，或所填报信息明显存在不实、不准确等情况的企业。</li>
                <li>注册地与实际经营地不一致、联系方式发生变化或已无法联系的企业。</li>
                <li>取得经营资质后长期（超过一年）未开展业务的企业。</li>
                <li>注册资本实到率偏低（不足30%）的企业，特别是注册资本实到率低但开展业务规模较大的外资企业。</li>
            </ol>
            <h4>（二）重点排查内容</h4>
            <p>一是基本情况：</p>
            <ol>
                <li>企业基本信息，包括但不限于股东或出资人、实际控制人、法定代表人、注册资本及实缴金额、分支机构数量及分布等。</li>
                <li>业务开展情况，包括承租人、租赁物及其权属状况、融资来源及方式、业务合规性、租金收取情况及逾期率等。</li>
                <li>境外借款、境外放款等资金跨境流动情况。</li>
            </ol>
            <p>二是存在的主要问题：</p>
            <ol>
                <li>是否存在直接从事或参与吸收或变相吸收公众存款等行为；是否未经相关部门批准，从事同业拆借、股权投资等业务。</li>
                <li>是否违反国家有关规定向地方政府、地方政府融资平台公司提供融资或要求地方政府为租赁项目提供担保、承诺还款等。</li>
                <li>是否存在虚构租赁物、以不符合法律规定的标的为租赁物、未实际取得租赁物所有权或租赁物合同价值与实际价值明显不符，以融资租赁为名义实际从事资金融通业务甚至变相发放贷款等行为。</li>
                <li>是否存在与关联公司之间进行租赁物低值高买、高值低租等明显不符合市场规律的交易行为。</li>
                <li>是否存在虚假宣传（例如宣称具有金融牌照、以金融机构名义进行宣传等）、故意虚构融资租赁项目通过公开渠道（如互联网金融平台）进行融资等行为。</li>
                <li>是否存在超杠杆经营，即风险资产比例是否超过规定的限额。</li>
                <li>是否按要求及时报送季度和年度经营情况信息报表，在全国融资租赁企业管理信息系统上登记的信息是否真实准确。</li>
                <li>外商投资融资租赁企业是否按要求及时进行外商投资企业设立及变更备案，是否参加外商投资企业年度投资经营信息联合报告（联合年报）工作。</li>
            </ol>
            <p>（三）排查方式</p>
            <p>各地商务主管部门可根据工作需要，采取多种措施开展排查工作。对于跨区域经营的企业，注册所在地和经营所在地商务主管部门要互通信息，加强合作，防止出现排查空白。</p>
            <ul>
                <li>企业自查。要求企业开展风险自查，提交自查报告，针对自查发现的问题和风险隐患及时进行整改。</li>
                <li>信息化监管。通过全国融资租赁企业管理信息系统对企业填报的交易记录、经营信息、财务数据等数据进行分析，查找风险点和违法违规活动线索，核对系统填报信息的真实性与准确性。督促企业按照《融资租赁企业监督管理办法》（商流通发〔2013〕337号）的要求，及时、准确填报全国融资租赁企业管理信息系统。对不及时填报、瞒报或虚报信息的企业，要求其立即整改，对于不按要求整改的企业，建立企业报送信息异常名录并报我部，我部将适时通过适当方式进行公开。</li>
                <li>现场检查。抽取一定比例的企业进行现场检查，重点检查企业财务记录、银行对账单、业务合同、融资合同或凭证等反映资金来源和流向的材料，实地抽查租赁物及其相关权利凭证确认租赁物及其权属，判断租赁项目的真实性，检查重复抵押、租赁物所有权保护、资金监管等方面是否存在风险隐患。</li>
                <li>人员约谈。视情况需要约谈企业股东、高级管理人员、财务人员或其他员工，了解经营情况，加强风险教育，查找违法违规线索。</li>
                <li>外部调研。必要时与承租人进行沟通，了解融资租赁企业经营合规情况、项目的真实合规性，查找违法违规线索。</li>
                <li>第三方协助。必要时可聘请会计师事务所、律师事务所或委托行业协会等机构协助排查。</li>
                <li>其他合法方式。</li>
            </ul>
            <h3>二、工作要求</h3>
            <p>（一）落实责任，主动作为。各地商务主管部门要高度重视风险排查工作，切实落实属地监管责任，把此次风险排查工作列入重要工作日程，尽快部署专项排查活动，制定详细的检查工作方案，明确分工职责和阶段部署，切实抓好落实，确保检查工作不走过场。内资试点企业和外商投资企业由相关处室分别负责。参与检查人员应当客观公正，实事求是，忠诚履职，廉洁奉公，保守秘密。</p>
            <p>（二）积极稳妥，分类施策。排查和处置工作要严格依法，讲究策略，对于排查出的线索，综合考虑风险性质、社会危害等因素，制定差别化的处置策略，分类化解。对于检查中发现的经营管理不规范问题，应要求企业限期改正。对于重大违法违规行为线索，应及时提请本级相关执法部门予以处理。对于检查中发现的普遍性、系统性风险问题，应及时采取通报、风险提示等措施。对于监管体制机制存在的问题，应作出修改或提出完善建议。要制定完善突发事件应对预案，明确非法集资等重大风险应对的责任主体、触发情形、风险评估、响应处置等内容和措施。对于检查中发现的可能引发重大突发事件的潜在风险问题，应及时向当地人民政府报告，并报我部。</p>
            <p>（三）源头治理，长效监管。一是加强规制建设、监管检查和监测预警，防打结合，以防为主，坚持风险早发现、早预警、早处置。二是结合排查工作对企业使用全国融资租赁企业管理信息系统的情况进行督促检查，及时了解企业经营状况、合规情况，梳理失联企业名单及有关情况，建立企业报送信息异常名录。三是强化日常监管制度，着力完善融资租赁行业监管制度，稳妥解决体制性、机制性、规制性问题，强化防控风险长效机制，加强与金融、税务、公安、工商等部门间的沟通协调机制，强化信息共享与监管合作。对于此次检查中发现问题较为突出的企业，要将其列入重点监管对象。研究建立监管评级制度，对融资租赁企业进行分类管理。加强行业组织建设，充分发挥行业自律作用。</p>
            <p>（四）总结经验，及时报告。各地商务主管部门要对此次风险排查中发现的情况进行全面分析，综合研判本地融资租赁业的发展现状与潜在问题，从以下方面形成排查情况报告：一是风险排查工作组织实施情况；二是排查中发现的风险问题及应对措施（内容要具体化，尽可能通过列举事例的方式进行分析）；三是本地融资租赁行业发展现状及主要风险因素；四是下一步强化事中事后监管、风险防范预警、建立长效机制的工作安排与建议；五是失联企业名单（作为附件）。请各地商务主管部门将上述内容形成书面报告，并于7月15日前报送我部（一式两份，分别报送流通发展司、外资司）。</p>
            <blockquote class="blockquote-reverse">
                <p>商务部流通业发展司</p>
                <p>2017年05月09日</p>
            </blockquote>
            ',
        ]);
        // attach with category
        $zhenCeJieDu04->categories()->attach(4);

        $zhenCeJieDu05 = Post::create([
            'title' => '【电商扶贫】会川镇电子商务助推精准扶贫工作纪实',
            'slug' => '【电商扶贫】会川镇电子商务助推精准扶贫工作纪实',
            'summary' => '今年来，会川镇抢抓机遇、开拓创新，与双联扶贫、精准扶贫工作融合推进，初步形成了政府推动、典型带动、大众创新的可喜局面。目前，全镇积极鼓励发展大型网站开通交易网店36家，完成线上交易额350万，带动线下交易额4000多万元，西关村投资1200万的会川电子商务分拨中心已完成主体工程。电子商务的快速发展，有力地促进了会川农产品的销售和文化旅游资源的宣传，为农民增收和解决就业开辟了新的渠道，为电商助推精准扶贫精准脱贫夯实了基础。',
            'published' => true,
            'published_at' => Carbon::now(),
            //'featured' => true,
            //'image' => '/news/01.jpg',
            'user_id' => 1,
            'images' => [],
            'files' => [],
            'content' => '
                <h3>政府推动</h3>
                <p style="text-indent:2em">今年来，会川镇抢抓机遇、开拓创新，与双联扶贫、精准扶贫工作融合推进，初步形成了政府推动、典型带动、大众创新的可喜局面。目前，全镇积极鼓励发展大型网站开通交易网店36家，完成线上交易额350万，带动线下交易额4000多万元，西关村投资1200万的会川电子商务分拨中心已完成主体工程。电子商务的快速发展，有力地促进了会川农产品的销售和文化旅游资源的宣传，为农民增收和解决就业开辟了新的渠道，为电商助推精准扶贫精准脱贫夯实了基础。<img src="/storage/app/media/uploaded-files/zht-1.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success"></p>
                <h3>典型带动</h3>
                <p style="text-indent:2em">制定了《会川镇电子商务工作2015- 2020年规划》，对全镇电子商务的发展提出了5年规划和指导性的意见，针对各村不同的地域特征和产业发展情况向各村提出了不同的发展目标和要求，将责任层层靠实。由镇政府和鑫磊药业有限责任公司筹建的会川镇电子商务服务中心于2015年5月投入正式运营；由德园堂成立的会川镇中药材电子商务与现代物流协会负责全镇贫困村电商人才的培训，搭建青年“0元创业”电商平台。</p>
                <h3>大众创新</h3>
                <p style="text-indent:2em">依托会川工业园区建成会川电子商务产业园，依托江能中药材市场建成会川电子商务服务平台，建成镇政府、鑫磊公司、江能市场、德园堂药业4个电子商务体验馆，有力地促进了电子商务全面融入经济社会发展，并为电商助推精准扶贫工作创造了有利条件。镇电子商务办公室整合全镇十多家快递物流企业，为全镇电商提供了“6+3”、“6+4”较低的快递费用。会川镇德生誉药业网店2014年3月份开店以来，完成线上交易额100多万元，带动线下交易额1000多万元，并带领会川镇金滩园区40多家中药材贩运大户开展网上销售。</p>
            ',
        ]);
        // attach with category
        $zhenCeJieDu05->categories()->attach(4);

        $zhenCeJieDu06 = Post::create([
            'title' => '首创“党群+电商”新模式， 打造电商扶贫产业！',
            'slug' => '首创“党群+电商”新模式， 打造电商扶贫产业！',
            'summary' => '今年以来，灵山县首创“党群+电商”新模式，突出建平台、拉队伍、牵红线，大力推进“党旗领航·电商扶贫”主题活动，打造电商扶贫产业，让脱贫攻坚搭上电商快车！',
            'published' => true,
            'published_at' => Carbon::now(),
            //'featured' => true,
            //'image' => '/news/01.jpg',
            'user_id' => 1,
            'images' => [],
            'files' => [],
            'content' => '
            <p style="text-indent:2em">今年以来，灵山县创新“党群+电商”模式，突出建平台、拉队伍、牵红线，大力推进“党旗领航·电商扶贫”主题活动，打造电商扶贫产业，让脱贫攻坚搭上电商快车。</p>
            <p style="text-indent:2em">建平台，夯牢电商扶贫基础。建立县党群电商服务中心、镇级电子商务服务站和村级党群服务中心三级党群电商服务体系，建设19个镇级电子商务服务站、68个党群电商服务点、村邮乐购网点209个和乐村淘体验店230个，150多家电商物流企业进驻村级党群电商服务点，引导电商企业进村开展电商+基地（种植大户）、电商+贫困户等结对帮扶活动，为村民群众提供快捷服务，夯牢电商扶贫基础。如灵山县2017荔枝文化旅游节期间，县电商协会会员香下人电商进驻三海街道新大村开展“电商+贫困户”结对销售活动，当天共发出妃子笑品种荔枝530多件，远销山东、甘肃等省，解决荔枝销路问题。今年以来，据县电商协会统计，全县累计电商销售荔枝150万斤，实现销售额达3000万元。</p>
            <p style="text-indent: 2em">拉队伍，建立电商扶贫大数据。如何通过数据的分析、归纳，助力电商扶贫发展，已成为当前电商企业急需解决的问题。灵山县抓住数据建立这一关键，在全县收集了19个镇(街道）154种（类）特色物产信息、497个特色种养大户（合作社）信息数据库和2630多户荔枝种植户信息数据，并收集种植大户相关的种植品种、规模、上市时间、联系人信息、第一书记联系方式等信息，建立电商扶贫信息数据库，将数据在贫困户、电商企业和市场进行共享。通过1+1、N+1等方式结对帮扶，扶持一批具有地方产业特色、带富强、规模大的特色种植基地进行生态绿色标准化建设，在全县建立了百香果、果苗、荔枝等“电商+基地”种植示范基地135个。</p>
            <p style="text-indent: 2em">牵红线，助力电商扶贫发展。由县党群电商协会党支部牵线电商企业、物流企业，通过把线上销售额的3%或每寄出1件商品提成1元、看一场电影捐1元、购买一张旅游公司门票捐1元以及每购买1张景区联盟扶贫套票捐8元、供销e家销售额和电商协会会员费的3%捐助等方式，建立电商扶贫发展基金，共筹集资金83万元。发展基金主要用于开展贫困村产业发展、贫困村电商创业培训、扶持电商企业开拓业务、资助贫困家庭等。利用电视报刊网络宣传及“网红”代言，成功打造了广源电商的“<span>魅荔灵山</span>”、“柑美灵山”，“香下人”电商的“红颜枝己”等名特优农产品电商扶贫品牌，“电商达人”黄忠文等一大批电商名人效应在国内外掀起了电商的热潮。</p>
            ',
        ]);
        // attach with category
        $zhenCeJieDu06->categories()->attach(4);


        $zhenCeJieDu07 = Post::create([
            'title' => '【致敬先辈】纪念毛泽东主席逝世41周年！',
            'slug' => '【致敬先辈】纪念毛泽东主席逝世41周年！',
            'summary' => '一九四九年十月一日，北京天安门城楼上一句“中华人民共和国中央人民政府今天成立了！”，预示着经过了列强入侵、侵华战争、内战之后，我们推翻了压在老百姓头顶的三座大山。而这句话正是出自我们伟大的领袖—毛泽东之口。',
            'published' => true,
            'published_at' => Carbon::now(),
            //'featured' => true,
            //'image' => '/news/01.jpg',
            'user_id' => 1,
            'images' => [],
            'files' => [],
            'content' => '
                    <p style="text-indent:2em"><img src="/storage/app/media/uploaded-files/zhj-1.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success">一九四九年十月一日，北京天安门城楼上一句“<span>中华人民共和国中央人民政府今天成立了！</span>”，预示着经过了列强入侵、侵华战争、内战之后，我们推翻了压在老百姓头顶的三座大山。而这句话正是出自我们伟大的领袖—毛泽东之口。</p>
                    <p style="text-indent:2em"><img src="/storage/app/media/uploaded-files/zhj-2.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success">四十一年前，<span>1976</span>年<span>9</span>月<span>9</span>日，一代伟人毛泽东与世长辞。<span>在49</span>年前打响秋收起义枪声开始井冈创业的时刻合上了他生命的传奇书卷。同一年，周恩来、朱德也先后逝世，这一年是我们国家历史上极其重要的一笔——同年三位伟人相继去世，是我们非常大的遗憾！</p>
                    <p style="text-indent:2em"><img src="/storage/app/media/uploaded-files/zhj-3.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success">岁月流逝<span>,</span>但思念和缅怀会愈发沉淀，一个伟人留给一个时代的记忆是不尽相同的。有的人看到<span>&nbsp;</span>“唤起工农千百万，同心干”的意志与力量，也有人看到<span>&nbsp;</span>“盗跖庄蹻流誉后，更陈王奋起挥黄钺”的大道与沧桑；亦有人看到“人猿相揖别，只几个石头磨过”的平实与超越；还有人看到“雄关漫道真如铁，而今迈步从头越”的真情与豪迈；更有人看到“苍山如海，残阳如血”的雄浑与悲壮、“一代天骄，成吉思汗，只识弯弓射大雕”的妩媚与豪放、“问苍茫大地，谁主沉浮”中看到了青春与担当……更让我们记忆悠深的还是那“一碗红烧肉”的平常小事和故事背后的伟岸人格。</p>
                    <p style="text-indent:2em"><img src="/storage/app/media/uploaded-files/zhj-4.jpg" style="width: 600px;" class="fr-fic fr-dib" data-result="success">“人民、只有人民，才是创造世界历史的动力。”<span>&nbsp;</span>全心全意为人民服务是毛泽东同志和老一代无产阶级革命家的创造，是马克思主义中国化的核心所在，也是共产主义思想和中国传统文化思想的结合点，是中国共产党永远不能放弃的思想武器。</p>
                    <p style="text-indent:2em">今天，让我们一起向革命先辈致敬，感谢你们的付出；同时祝愿我们是的祖国越来越强大，越来越繁荣！</p>
            ',
        ]);
        // attach with category
        $zhenCeJieDu07->categories()->attach(4);


        //
        // 通知公告 end
        //
    }
}



