<?php
/**
 * Created by PhpStorm.
 * User: buuug7
 * Date: 2017/4/10
 * Time: 18:05
 * Desc:
 */

namespace Buuug7\Courses\Updates;


use Buuug7\Courses\Models\Category;
use Buuug7\Courses\Models\Course;
use Buuug7\Courses\Models\Tag;
use Carbon\Carbon;
use October\Rain\Database\Updates\Seeder;

class SeedCoursesTwoTables extends Seeder
{
    public function run()
    {

        $course01 = Course::create([
            'title' => '学会这4招自媒体运营策略',
            'published' => true,
            'published_at' => Carbon::now(),
            'image' => '/courses/01.jpg',
            'user_Id' => 1,
            'files' => [],
            'videos' => [],
            'summary' => '不知道大家注意到没有，最近半年以来，自媒体渠道其实是发生了很大变化，比如今日头条的市场占有率越来越大、一点资讯已经掉到在第二阶梯都找不到了、天天快报在传腾讯收购今日头条失败后开始发力、各大自媒体平台为了拉拢作者，陆续开通了广告分成机制',
            'content' => '
            <p style="text-indent: 2em">又是一个周末，先祝大家有个愉快的周末吧。</p>
            <p style="text-indent: 2em">本周写了不少新近发生的重大事件，周末轻松一下，我们继续聊聊自媒体的事情。</p>
            <p style="text-indent: 2em">不知道大家注意到没有，最近半年以来，自媒体渠道其实是发生了很大变化，比如今日头条的市场占有率越来越大、一点资讯已经掉到在第二阶梯都找不到了、天天快报在传腾讯收购今日头条失败后开始发力、各大自媒体平台为了拉拢作者，陆续开通了广告分成机制。</p>
            <p style="text-indent: 2em">平台的竞争，对于自媒体人来说是好事，如果真到什么时候一家独大了，作者的日子就要不好过了。</p>
            <p style="text-indent: 2em">不过身为一个自媒体作者，我们该怎么做，其实也是要讲究策略的。所以今天我们就聊聊自媒体的策略问题，有了好的策略，才能指导我们往正确的方向努力。</p>
            <p style="text-indent: 2em">其实策略这个事情，作为自媒体人，我们不能像企业那样有大量资源、资金和人力投入，我们能投入的可能仅仅是自己的努力和时间，所以制定一个明确的策略，有助于我们节省时间、提高效率。</p>
            <h3>用心了解用户</h3>
            <p style="text-indent: 2em">自媒体时代，信息严重过剩，用户不缺内容，一个用户从来不会只关注一个微信公众号，也不会只订阅一个头条号，怎么能让用户在众多内容中关注我们、喜欢我们，挑战不小。</p>
            <p style="text-indent: 2em">可换个角度想，中国目前互联网用户数已经有近7亿了，7亿！这是一个什么概念？</p>
            <p style="text-indent: 2em">如果以国民人口数量来看的话，7亿人口要比世界人口排名第三、第四、第五的美国、印尼和巴西加起来的总数还要多。</p>
            <p style="text-indent: 2em">之前笔者听IDG美国一位主管互联网的副总裁分享经验时说，你们中国的公司太幸福了。</p>
            <p style="text-indent: 2em">我们问，为什么呀？我们怎么就最幸福了？</p>
            <p style="text-indent: 2em">他说，你们守着这么多的用户，只要把国内市场做好，就可以做成一个很伟大的公司，而我们在美国，想做成一个伟大的公司，就必须要想怎么国际化，如果只做国内市场，公司是永远也做不大的。</p>
            <p style="text-indent: 2em">你看，如果从这个角度想想，我们从这么大用户基数的群体中筛选一小小部分我们的目标用户，貌似也并不是不可能的事情，这么想想是不是这个事情也没那么难了？</p>
            <p style="text-indent: 2em">在做自媒体营销之前，我们需要弄清楚以下几个问题：</p>
            <ul>
                <li>我的用户是谁？</li>
                <li>他们喜欢什么？</li>
                <li>他们在哪里阅读？</li>
                <li>他们有什么阅读习惯？</li>
            </ul>
            <p style="text-indent: 2em">微信在2015年10月23日的时候公布过一组统计：</p>
            <p style="text-indent: 2em">90后最爱娱乐八卦，80后喜欢国家大事，60后钟情鸡汤文化，那么，你的目标用户是几零后呢？他们关心什么呢？用心去了解你的用户，这比什么都重要。</p>
            <h3>注重内容质量</h3>
            <p style="text-indent: 2em">越是信息过剩的时候，优秀内容就越重要，道理很简单，用户没有那么多时间阅读，所以只会选择自己更喜欢的内容。</p>
            <p style="text-indent: 2em">就算他关注了你的公众号，如果你的内容他总是不喜欢呢？要知道，这个世界上还有一个叫作“取消关注”的东西。有些通过发红包等暴力活动吸粉的微信公众号运营人员肯定经历过那么一段掉粉数超过涨粉数的苦逼日子，那种日子不好过吧？</p>
            <p style="text-indent: 2em">优质内容是留住用户最有效的手段。</p>
            <p style="text-indent: 2em">有些人会觉得优秀内容难写，甚至好多专业文案人员也觉得难写。如果拿我们上小学、初中时候写命题作文的想法写，那当然难写了。但如果我们再换个角度想呢？</p>
            <p style="text-indent: 2em">什么是优秀内容？能吸引你的目标用户持续关注的就是优秀内容，至于说文章语法是不是正确，语句是不是通顺，是不是文章内所有想法都是自己独创的，这个很重要么？我们又不是语文考试，只要你的目标用户喜欢就好。</p>
            <p style="text-indent: 2em">所以从这个角度考虑去组织一篇高质量的文章，是不是就简单多了？</p>
            <h3>敏锐的抓住热点事件</h3>
            <p style="text-indent: 2em">如果能自己创造热点事件，这是最美丽的，但对于大多数自媒体人来说，这是不现实的，热点事件那么好创造的话，广告公司的创意、策划人员就都该打包一起扔海里了。</p>
            <p style="text-indent: 2em">既然创造不了热点事件，咱们借着别人的热点事件，搭个顺风车还是可以滴嘛。</p>
            <p style="text-indent: 2em">想抓住热点事件，就需要有敏锐的洞察力，多关注一些热点事件最初形成的地方，比如微博热点话题、微信朋友圈，百度贴吧、头条号的热点新闻等，只要出来一个热点事件，就想想能不能和自己的企业、产品靠上边。</p>
            <p style="text-indent: 2em">比如这两天滴滴收购优步中国，谁借力营销做的最好？可能很多人已经知道了。是的，仍然是杜蕾斯做的最好。一句“DUDU打车，老司机的选择”配上一张图片，完美的借了这次事件的力。这个营销出现没几天，又出现一篇文章，分析杜蕾斯是如何完美借力滴滴收购优步的，不得不让人怀疑，这篇文章是不是也是杜蕾斯官方出品呢？</p>
            <p style="text-indent: 2em">不过不管怎么说，杜蕾斯这件事情至少告诉我们一个道理：互联网从来不缺热点事件，缺的是一个发现热点事件的眼光。</p>
            <h3>注重传播的多样性和多渠道化</h3>
            <p style="text-indent: 2em">传统媒体时代，营销的渠道就那么几种，电视拍视频广告、杂志登平面广告、网站挂banner广告，视频网站整帖片广告。反正都得找媒体，出大价钱买广告位。</p>
            <p style="text-indent: 2em">新媒体就不一样了，渠道已经不再被几家大公司掌握，虽然平台还是人家的，但自媒体人可以自主发布各种信息，不需要再经过平台方同意了。所以我们在做营销的时候，一定要利用好现有的营销渠道。微博、微信公众号、朋友圈、自媒体平台，甚至于博客、专栏、论坛，能将信息传播出去的渠道都可以使用。</p>
            <p style="text-indent: 2em">只是有一点需要注意，每个渠道的用户群都不完全相同，用户习惯也不完全相同，所以需要了解每个渠道的用户习惯，注重传播的多样性，以用户喜欢的形式将用户能接受的内容呈现给用户，仅此而已。</p>
            <p style="text-indent: 2em">所以你看，其实自媒体策略并不复杂，最关键要看你有没有心去归纳总结，有没有这个执行力去把事情做好。互联网是个浮躁的领域，自媒体又是一个单打独斗的场景，不要等到有一天自媒体作者也开始批量公司化运营的时候，才想起我们居然也需要策略。</p>
            
            ',
        ]);
        // attach categories
        $course01->categories()->attach(3);
        // attach tags
        $course01->tags()->attach(1);
        $course01->tags()->attach(2);


        $course02= Course::create([
            'title' => '微信公众号活动策划6大要点',
            'published' => true,
            'published_at' => Carbon::now(),
            'image' => '/courses/02.jpg',
            'user_Id' => 1,
            'files' => [],
            'videos' => [],
            'summary' => '不管是自媒体营销还是微信公众号营销，一次好的活动都是达到结果最好的捷径。通过互联网策划组织活动，要比策划组织传统线下活动的门槛低很多，因为依托于互联网，可以让我们活动很多繁琐的环节，活动的可控性也更高。',
            'content' => '
            <p style="text-indent: 2em">不管是自媒体营销还是微信公众号营销，一次好的活动都是达到结果最好的捷径。通过互联网策划组织活动，要比策划组织传统线下活动的门槛低很多，因为依托于互联网，可以让我们活动很多繁琐的环节，活动的可控性也更高。掌握以下6大要点，可以很大程度提高活动的成功率和传播率：</p>
            <h3>活动的门槛要低</h3>
            <p style="text-indent: 2em">第一是指活动的目标人群。活动面向的人群越初级越好，因为越是高级用户，用户群越少。而且高级用户，对于活动的热衷度远不如初级用户。</p>
            <p style="text-indent: 2em">第二是指活动规则。规则应该越简单越好，规则越复杂，用户的参与度就会越低。每让用户多一步操作，就会流失一部分用户，这是经过测试的数据。</p>
            <p style="text-indent: 2em">类似于像分享朋友送资源这种简单粗暴的活动形式，只要资源对用户管用，无论什么时候都是非常受用户欢迎的，原因就在于，活动形式够简单。</p>
            <p style="text-indent: 2em">还有一些公众号，要让用户分享到几个微信群，然后截图送资源的，活动效果相对就要差很多。</p>
            <p style="text-indent: 2em">同样是分享，一个是分享到朋友圈，一个是分享到几个微信群，效果大相径庭。</p>
            <h3>活动回报率要高</h3>
            <p style="text-indent: 2em">活动一定要让用户受益，要让用户得到足够的好处，只有活动的回报高、奖品丰厚，用户的积极性才能被调动起来。活动奖励可以是物质上的，比如手机、电脑、相机等；也可以是精神上的，比如荣誉、奖杯、名人的签名；还可以像坤鹏论在第一点中提到的资源，比如设计类的可以分享一些设计素材，营销类的可以分享一些营销软件。</p>
            <p style="text-indent: 2em">但是注意，奖品在丰厚的基础上，还要有一定特色和吸引力，不要总是千篇一律和以前的活动一样，或是和其他的活动雷同。坤鹏论以前工作过的网站，经常搞各种实物活动，而且奖品还很丰厚，比如音箱、高级鼠标键盘、显卡声卡主板等，甚至还有手机、MP4。但是由于每次活动奖品都是老三样，结果最后几百元一套的高级音箱，都没人愿意要了。</p>
            <p style="text-indent: 2em">同时还要注意提升奖品的回报率，大奖固然重要，但是如果一次活动只有几个人有机会得奖，也会打消用户的积极性。所以在大奖有保障的基础上，尽量多设一些小奖，尽可能让更多的人拿到礼品。</p>
            <h3>趣味性要强</h3>
            <p style="text-indent: 2em">活动的趣味性越强越好，只有活动好玩有趣，参与的人才会多，活动的气氛才能烘托起来。如果活跃足够有趣的话，甚至在没有奖品的情况下，大家都会积极参与。毕竟上网娱乐，才是大家最终的目的。比如一些小测试，性格测试、智力测试等等。测试并不一定要科学，但一定要有趣，这样才能让参与者愿意把活动传播给自己的朋友，只有用户愿意分享，活动的效果才会好。</p>
            <h3>活动的可持续性</h3>
            <p style="text-indent: 2em">如果想让活动的效果放大，能够持续的发挥作用，那最好将活动给固定化，比如搞成系列活动，一月一次、一季度一次或是一年一次。甚至经过长时间的积累，活动本身也会成为品牌。对于个人公众号而言，保持可持续性的活动有些难度，但对于企业公众号来说，保持至少一个可持续性的活动是非常有必要的，通过活动达到的品牌传播效果甚至要优于公众号文章和公众号服务本身。</p>
            <h3>多多邀请合作单位</h3>
            <p style="text-indent: 2em">对于非封闭式的活动，可以多找相关的单位合作，比如说各种网站、媒体。因为这些平台本身都拥有一定的用户群，拥有各自的渠道和影响力。通过活动的形式将大家的优势资源融合，可以发挥更大的效力。</p>
            <p style="text-indent: 2em">有些人觉得活动就得自己做，如果联合多家单位一起做会削弱自己品牌影响力。坤鹏论要提醒大家，这种想法是不对的，就像事件营销需要更多媒体关注才能形成影响力一样，活动也需要有更多媒体、单位的关注、传播，才会达到更好效果。</p>
            <h3>引发用户传播</h3>
            <p style="text-indent: 2em">这条是最重要的，因为如果在设计活动时，能够加入一些引入用户传播的元素，那活动的效果会大大增加，在节省了大量的人力、物力、精力和推广经费。</p>
            <p style="text-indent: 2em">比如微博类活动，可以在活动规则中要求用户必须@好友。微信类活动，在活动规则中要求用户要发朋友圈，或者至少邀请几个朋友参与。当然，这是被官方禁止的方式，所以就看怎么巧妙的运用好。比如活动中可以增加邀请注册功能，而每邀请一人注册参与活动，便赠送积分，积分达到一定程度，便可换取奖品。</p>
            <p style="text-indent: 2em">不管怎么样，活动一定要引发用户传播，让每一个参与的用户都能影响到多个用户，达到裂变的效果。</p>
            <p style="text-indent: 2em">我们都在讲自媒体，每个用户就是一个自媒体。</p>
            <p style="text-indent: 2em">虽然这6点说起来容易，但真正想做好也并不容易。</p>
            <p style="text-indent: 2em">在掌握方法以后，多试是最好的方式，任何人在策划任何形式的活动时，都不能保证一定会有效果，所以如果没有效果，不要灰心，总结经验，下次继续试。</p>
            ',
        ]);
        // attach categories
        $course02->categories()->attach(3);
        // attach tags
        $course02->tags()->attach(1);
        $course02->tags()->attach(2);


        $course03= Course::create([
            'title' => '借势营销 花小钱办大事，学会你也能做到',
            'published' => true,
            'published_at' => Carbon::now(),
            'image' => '/courses/03.jpg',
            'user_Id' => 1,
            'files' => [],
            'videos' => [],
            'summary' => '在说借势营销之前和大家说一个和借势有关的小故事。很多年前，大英图书馆老馆年久失修，在新的地方建了一个新的图书馆，新馆建成以后，要把老馆的书搬到新馆去。这本来是一个搬家公司的活，没什么好策划的，把书装上车，拉走，运到新馆即可。问题是按预算需要350万英镑，而图书馆没有这么多钱。眼看雨季就要到了，不马上搬家，这损失就大了。怎么办？馆长想了很多方案，但一筹莫展。',
            'content' => '
            <p style="text-indent: 2em">在说借势营销之前和大家说一个和借势有关的小故事。很多年前，大英图书馆老馆年久失修，在新的地方建了一个新的图书馆，新馆建成以后，要把老馆的书搬到新馆去。这本来是一个搬家公司的活，没什么好策划的，把书装上车，拉走，运到新馆即可。问题是按预算需要350万英镑，而图书馆没有这么多钱。眼看雨季就要到了，不马上搬家，这损失就大了。怎么办？馆长想了很多方案，但一筹莫展。</p>
            <p style="text-indent: 2em">正当馆长苦恼的时候，一个馆员找到馆长，说他有一个解决方案，不过仍然需要150万英镑。馆长十分高兴，因为图书馆有能力支付这笔钱。</p>
            <p style="text-indent: 2em">“快说出来！”馆长很着急。</p>
            <p style="text-indent: 2em">馆员说：“好主意也是商品，我有一个条件。”</p>
            <p style="text-indent: 2em">“什么条件？”</p>
            <p style="text-indent: 2em">“如果150万全部花完了，那权当我给图书馆做贡献了；如果有剩余，图书馆要把剩余的钱给我。”</p>
            <p style="text-indent: 2em">“那有什么问题，350万我都认可了，150万以内剩余的钱给你，我马上就能做主！”馆长很坚定地说。</p>
            <p style="text-indent: 2em">“那我们来签个合同？”馆员意识到发财的机会来了。</p>
            <p style="text-indent: 2em">合同签订后，按照馆员的方案，150万英磅连零头都没有用完，就把图书馆给搬了。原来，馆员在报纸上刊登了一则消息：“从即日起，大英图书馆免费无限量让市民借阅图书，条件是从老馆借出，还到新馆去。”</p>
            <p style="text-indent: 2em">其实古往今来，关于借势的例子数不胜数，比如中国历史上著名的草船借箭，就是其中的经典。</p>
            <p style="text-indent: 2em">借势营销，就是指利用各种手段，借助外部力量和资源为己所用的一种营销手段。相对于广告等传播手段，借势营销能够起到以小博大、花小钱办大事的作用，往往能取得四两拨千斤的传播效果。</p>
            <p style="text-indent: 2em">既然是借势，我们就需要找到一些能被我们借的东西，比如以下这些：</p>
            <h3> 借品牌</h3>
            <p style="text-indent: 2em">有效借助已有知名品牌，可以快速提升自身品牌的知名度和影响力。比如在奥运期间的奥运营销，就是典型代表。奥运会作为人类历史上最大规模的体育盛会，受到了全球的注目。特别是商界奇才尤伯罗斯创造性地将奥运和商业紧密结合起来，并使1984年的洛杉矶奥运会成为“第一次赚钱的奥运会”以来，奥运经济越来越成为众商家关注的焦点。比如在北京申奥活动中，可口可乐、通用汽车、喜力啤酒、农夫山泉、富士胶卷等公司都积极参与，这些企业围绕奥运赛事除了投入赞助费外，还从公益、文化、热点等各个角度采取了一系列相关的营销活动。</p>
            <p style="text-indent: 2em">再比如著名的奥巴马女郎，也是借助了奥巴马的个人品牌才“一脱成名”。这个例子告诉我们，其实“脱”了不一定就能出名，关键是看在谁面前“脱”。</p>
            <h3>借渠道</h3>
            <p style="text-indent: 2em">在实施网络营销时，通畅的推广渠道是非常关键的因素。但是不是每个企业都有条件和能力建立自己的渠道。所以有的时候，我们不得不想办法借助别人的成熟渠道来进行推广。</p>
            <p style="text-indent: 2em">在这个方面，软件行业用得是比较深入的，比如最常见的一种手段就是软件绑定。经常喜欢尝试软件的朋友应该比较有感触，在安装一些小软件时，经常推荐和提示你安装一些相关的其他软件。而一些恶劣的软件，则根本不提示，直接强行帮你安装，比如金山毒霸就是这方面的典型代表，你甚至都不知道什么时候被安装上的。</p>
            <p style="text-indent: 2em">还有一个典型的例子就是360卫士手机版，会有一些诸如“清理加速”、“软件管理”、“手机杀毒”等方面的功能，如果你以为这些都是360卫士手机版自带的功能，那就错了，当你运行这些功能的时候，相应软件才会下载到手机里，这样利用360卫士手机版这个渠道，360就可以同时推好多款与手机优化相关的软件了。</p>
            <h3>借事件</h3>
            <p style="text-indent: 2em">所谓热门事件，关注的人肯定多，所以借助这些热门事件宣传一下自己的公司或产品，比如杜蕾斯的官微，基本上网络中出现一点热门事件，他们都能借上力，推出一个巨牛无比的文案，达到自己品牌营销的目的。</p>
            <p style="text-indent: 2em">另外，提起借热点事件，让坤鹏坤想起另一个事件了：</p>
            <p style="text-indent: 2em">第22届冬奥会开幕式上，名为“俄罗斯之梦”的冰雪盛宴之中却出现了一点小小的瑕疵。在体育场上空漂浮的五朵雪绒花本应该慢慢展开最终变形为象征着奥运会的五环形象，但右上角的一朵雪绒花却因为故障并没有展开。“五环变四环”，这样的失误通过电视转播呈现在了全世界观众们的面前。</p>
            <p style="text-indent: 2em">国际奥委会对奥运商标的授权使用管理非常严格，没经授权的商家是不能使用奥运相关元素的。但“四环”并不在奥组委授权范畴之内，商家使用的话，算不上侵权，各大商家敏锐的抓住时机，结合自己产品发挥想象：</p>
            <p style="text-indent: 2em">一家名为zazzle的在线创意网站很快就推出了名为"索契故障"t恤衫，里面有各种颜色可以选择，但是价格不菲，男款需要22.95美元，女款也要19.95美元。国内电商迅速跟进，推出了其中的白色男款T恤，一位淘宝卖家一天就卖出了五百多件。</p>
            <p style="text-indent: 2em">红牛饮料则以“打开的是能量，未打开的是潜能”作为宣传标语，使得网友吐槽活动继续升温。</p>
            <p style="text-indent: 2em">中国联通推出营销广告，你做不到的，沃来帮你。</p>
            <p style="text-indent: 2em">有浏览器厂商戏称，五环没打开，是IE浏览器太慢，不如换一个试试。360、联想等公司也把自己公司logo放在缺席的五环处，通过公司微博账纷纷借机营销。</p>
            <p style="text-indent: 2em">互联网中借势营销应用的非常广泛，除了上面说的三种情况，还可以借名人效应，但不管是借渠道、借事件还是借名人，最核心的关键点在于，一定要是大众所关心的，只有这样才能达到事半功倍的效果。</p>
            
            ',
        ]);
        // attach categories
        $course03->categories()->attach(3);
        // attach tags
        $course03->tags()->attach(1);
        $course03->tags()->attach(2);


        $course04= Course::create([
            'title' => '农村电商创业的7大网络营销免费推广方法',
            'published' => true,
            'published_at' => Carbon::now(),
            'image' => '/courses/04.jpg',
            'user_Id' => 1,
            'files' => [],
            'videos' => [],
            'summary' => '最近坤鹏论正在帮一些地方政府推进互联网+和农村电商工作，在实践中，总结了一些心得和经验，都在第一时间分享给大家。没想到这些文章整体点击量都非常高，有些出乎意料，没想到关注这块的人那么多。不少人在文章评论中问，自己正在做农村电商创业项目，具体推广应该怎么推。',
            'content' => '
            <p style="text-indent: 2em">最近坤鹏论正在帮一些地方政府推进互联网+和农村电商工作，在实践中，总结了一些心得和经验，都在第一时间分享给大家。没想到这些文章整体点击量都非常高，有些出乎意料，没想到关注这块的人那么多。不少人在文章评论中问，自己正在做农村电商创业项目，具体推广应该怎么推。</p>
            <p style="text-indent: 2em">今天坤鹏论就和大家分享一下农村电商创业的七种推广方式，它们都是基本不花钱，不涉及太多技术层面的方法。毕竟很多做在农村电商领域创业的朋友资金不多，而且对网络营销方面的经验和基础也不是很深厚。</p>
            <h3>QQ群</h3>
            <p style="text-indent: 2em">从网络营销的角度来说，QQ群是一个非常不错的方式，尤其是对网络营销没基础、没资金的人。因为第一，操作简单，几乎人人都用QQ，人人都会操作；第二，免费，不需要投钱；第三，精准。每个QQ群，都有一个主题，群里的人都是和主题相关的。比如宝马车主交流群里的人，基本上都是宝马车主。</p>
            <p style="text-indent: 2em">结合咱们农村项目具体怎么操作呢？思路很简单，先明确目标用户是谁，然后找这方面的主题群，然后加入群，和大家交朋友，这里说个真实的例子：</p>
            <p style="text-indent: 2em">坤鹏论的一个学生，是卖本地特产的，他是厨师出身，主要在网上卖熟食鸭子，当然，做的是本地口味，手艺也确实不错。而他的推广方式就是添加全国各地的老乡群，进群后也不发广告，就是正常聊天交朋友。在聊天过程中，适当植入广告，比如有人问他做什么时，自然就引出了他的产品。</p>
            <p style="text-indent: 2em">异地漂泊的人，格外渴望家乡的味道，所以很多人看了他发的图片（图片很重要）后，就直接下单。其中吃后感觉好的，就成为了忠实的老客户。</p>
            <h3>朋友圈</h3>
            <p style="text-indent: 2em">微信朋友圈是个销售利器，这点从微商的崛起就可窥见一斑，像坤鹏论就曾在朋友圈中购买过老家的土特产。</p>
            <p style="text-indent: 2em">当然，朋友圈销售的关键，是要有足够的人，微信中的好友从何而来？方法有很多，比如说刚刚说的QQ群，就可以配合使用。加入群后，聊得差不多的，相互加个微信好友。包括接下来要讲的论坛、圈子、社群等，都可以配合使用，所有能加好友的地方、场合，都可以添加。</p>
            <p style="text-indent: 2em">但是注意，朋友圈销售的关键不在于微信好友数量，在于质量，所以就要求精准。</p>
            <p style="text-indent: 2em">朋友圈销售绝对不能靠不断刷广告恶心用户，而是通过朋友圈塑造自己的人格魅力，通过人格魅力来影响。广告适当植入即可，但不要多，同时要注意分寸和火候。</p>
            <p style="text-indent: 2em">对于什么是人格魅力许多人不太清楚，大家看看下面两张图，就会明白了。</p>
            <h3>论坛</h3>
            <p style="text-indent: 2em">对于爱玩网络论坛、社区、贴吧的人，通过这些渠道推广也是不错的方式。当然，前提是尽可能要在目标用户集中的论坛来销售。这里说一个真实的例子：</p>
            <p style="text-indent: 2em">坤鹏论的一位朋友，老家是农村的，自家就产大米。在坤鹏论的影响下，她也萌生了业余时间赚点零花钱的想法，营销推广方法用的就是论坛。之所以用这招，是因为她经常在他们社区的论坛里面聊天灌水，所以在里面混的人头还比较熟。（注：搜房网上有很多小区的主题论坛，另外一些人比较多的社区，比如北京天通苑，还有自己独立的论坛）。</p>
            <p style="text-indent: 2em">有了这个想法后，第一次她是在本地的论坛里发起了一个团购的征集贴。她说她老家是产大米的，然后描述了一下大米的品质等，然后说让人从老家带，由于量少，成本太高，所以问问小区里有没有想要的，可以一起买，这样成本低。而且都是自己家乡产的，品质非常有保证等。</p>
            <p style="text-indent: 2em">由于其大米品质确实不错，所以第一批尝试买了的人，反馈很好，几乎都成了老客户。在他们的口碑带动下，小区很多人成了她的忠实客户。</p>
            <h3>圈子</h3>
            <p style="text-indent: 2em">从销售的角度来说，你销售的是什么不重要。最重要的是要学会销售自己，说白了就是要和客户交朋友，成为朋友了，就很容易解决信任问题；成为朋友了，就很容易解决忠诚度和粘性问题。</p>
            <p style="text-indent: 2em">那怎样才能成为朋友呢？从心理学角度来说，两个人如果想较快成为朋友，首先最好不要通过利益关系而建立联系；其次是双方一定要对等，不能是在一方高、一高低的情况下相识；再次是双方能找到足够强和持久的链接点，比如老乡、同行、同学等，这就是为什么各地都喜欢组织同乡会的原因；最后是要有共同感兴趣的事物，比如说话题、兴趣、爱好等。</p>
            <p style="text-indent: 2em">基于此，对于喜欢社交的人，或喜欢聊天的人来说，可以结合自己的实际情况，去混各种圈子。有了互联网、尤其是移动互联网后，我们足不出户，就能混迹于各种行业圈、人脉圈。</p>
            <p style="text-indent: 2em">比如你是宝妈，就可以去混妈妈圈；你是钓鱼爱好者，就可以去混钓鱼爱好者的圈子等。这个圈子具体的表现形式可以是QQ群、微信群、论坛、贴吧、协会、民间联盟等，如果你有时间和条件，也可以延伸到线下。</p>
            <p style="text-indent: 2em">进入这些圈子后，多处关系、多交朋友，甚至成为这个圈子里的名人、意见领袖。</p>
            <h3>社群</h3>
            <p style="text-indent: 2em">对于有一定组织能力的人来说，也可以组建一个属于自己的社群，比如最简单的，可以通过QQ群或是微信群入手。</p>
            <p style="text-indent: 2em">像坤鹏论孵化的社群舌尖小镇（镇长李飞微信lifei0424），就是走的这个路线。舌尖小镇的定位是吃货社群，聚集了许多喜欢吃的人，有了一定人气后，再在社群里给大家销售、分享各种特色美食。</p>
            <h3>网红</h3>
            <p style="text-indent: 2em">雷军说，站在台风口，猪都能飞上天。网红经济正在崛起，这无疑是一个新的台风口。所以对于有条件的人，也可以试着嫁接一下网红。一个思路是，把自己打造成网红。</p>
            <p style="text-indent: 2em">说到成为网红，可能很多人感觉很难。想成为大众知名网红，确实很难。但是我们的目的是销售产品，所以只要在目标用户中有一定知名度即可。比如结合前面说的论坛，只在某个论坛里出名，还是比较容易的。关于网红，可以参看坤鹏论的另一篇文章《成为网红的16大终极方法》。</p>
            <p style="text-indent: 2em">如果你的谈判能力强，也可以找一些现成的网红合作。当然，知名的肯定很难合作，可以找一些不是特别知名，只是某个圈子里有名的。比如一些平台里的主播、一些唱歌平台里有一定知名度的人等。</p>
            <h3>微商</h3>
            <p style="text-indent: 2em">我们也可以借鉴一下微商模式的玩法，招代理。当然，需要事先设计好代理模式，同时对代理要有一定支持，比如提前准备好产品介绍、卖点介绍，另外微商一般都在朋友圈卖，所以还要为他们准备朋友圈的文案、思路，甚至要适当给一些小白代理培训一下如何做微商等。</p>
            <p style="text-indent: 2em">想做好以上这些，就需要你自己先去学习和了解微商，甚至学习一下网络营销知识等。对于不懂这块的，也欢迎加入坤鹏论的QQ群中学习交流。</p>
            <p style="text-indent: 2em">今天的分享就先到这里，如果大家有问题，欢迎直接关注坤鹏论的公众号，然后提出。坤鹏论的公众号有个栏目就叫“坤鹏问答”，专门解答大家问题，对于集中的问题，坤鹏论也会专门写文章回答，比如本篇。</p>
            <blockquote>
                <a href="http://www.kunpenglun.com/2016/04031550.html" target="_blank">来自坤鹏论：农村电商创业的7大网络营销免费推广方法 </a>
            </blockquote>
            ',
        ]);
        // attach categories
        $course04->categories()->attach(3);
        // attach tags
        $course04->tags()->attach(1);
        $course04->tags()->attach(2);



        $course05= Course::create([
            'title' => '解读让朋友圈营销流水过千万的五大模式',
            'published' => true,
            'published_at' => Carbon::now(),
            //'image' => '/courses/04.jpg',
            'user_Id' => 1,
            'files' => [],
            'videos' => [],
            'summary' => '朋友圈营销已经有了很长的时间，目前大熊会名人堂成员，我算了一下，月流水差不多也有五千万了。因为这个领域已经非常火爆了，自始至终，看客都有会很多的非议，包括业内也有很多从业者忽悠来去。在这里，作为朋友圈营销的第一人还是有必要正本清源，总结一些真正成交的模式和玩法。当然，这篇文章自然又要价值过亿了。',
            'content' => '
            <p style="text-indent: 2em">朋友圈模式真正揭秘。。。。不转朋友圈对不起大熊老师啊。。</p>
            <p style="text-indent: 2em">朋友圈营销已经有了很长的时间，目前大熊会名人堂成员，我算了一下，月流水差不多也有五千万了。因为这个领域已经非常火爆了，自始至终，看客都有会很多的非议，包括业内也有很多从业者忽悠来去。在这里，作为朋友圈营销的第一人还是有必要正本清源，总结一些真正成交的模式和玩法。当然，这篇文章自然又要价值过亿了。</p>
            <h3>朋友圈模式一：代理模式</h3>
            <p style="text-indent: 2em">代理模式是目前流水量最高的模式，也是化妆品尤其是面膜品类的主要模式，目前这个模式在大熊名人堂成员全部流水中差不多能占到五分之三。当然，这也是被外界诟病最多的模式，很多人认为朋友圈营销就是找代理，然后就会又被扣上传销的帽子。实际上，朋友圈代理模式只是线下代理模式的一个延伸。目前以化妆产品的利润率大概总共也只能做到三级代理不会无限发展，一般说是一二三代，类似原来的省代市代县代。代理模式是集中管理的模式，也是非常高效的模式，因为你不需要太多的好友，就可以实现比较可观的流水。据说非着名相声演员的面膜一级代理要100万，其他各个品牌的代理各有不同，代理价格也从20-3万不等。大品牌有知名度的就贵点，小品牌前期就会便宜一点。</p>
            <p style="text-indent: 2em">这个模式最终的代理还是不会无限发展下去的，去拿代理的选手也大部分是有经验和能力的选手。新手往往从代购或者分销开始，有一定经验丶资金和客户积累之后，会逐渐去做代理，而代理级别越高，拿货价格越低，中间的利润也会多一些，毫无经验直接投钱进去做的人还是极少数。</p>
            <p style="text-indent: 2em">朋友圈营销的最大问题还是品牌性和管理性会差很多，往往会面临一个最大的问题是，新人学会了，就往往自己单干了，流失的情况会比较明显。所以大熊会目前还是在致力于品牌建设，希望可以更好的解决这个问题。因为有品牌之后，在推广和客户利益保障上会有比较好的效果，团队稳定性也会比较有保障。</p>
            <p style="text-indent: 2em">坦言之，化妆品品类发展到现在，还是有很多乱象，很多产品存在质量问题。相信在发展了这两年后，很快会有洗牌的情况出现。现在很多化妆品公司也进入这个领域，我个人还是不太看好的。</p>
            <p style="text-indent: 2em">需要一提的是：朋友圈营销的客户其实并不是熟人朋友，主要成交对象是中关系，就是朋友圈的朋友，或者同事的同事这样的不太熟又有基础信任的人，这和大家想当然的有些不一样。</p>
            <h3>朋友圈模式二：直营模式</h3>
            <p style="text-indent: 2em">很多人做一些产品的时候，都问我，产品毛利太低，无法做代理模式怎么办？问我这个问题的，往往是一些做生鲜水果牛肉干之类日常消费品的。这些产品目前做的好的，都是直接销售的模式。就是直接商户到客户，不会有中间代理，也很难发展中间代理，因为没有足够的利润支撑。</p>
            <p style="text-indent: 2em">但是这样的模式怎么赚钱呢？答案是，批发客户。在目前大熊会产生的各种案例中，卖荔枝的龙眼妹妹，卖瓷器的雨灵等都是这样的路径。因为他们的荔枝和瓷器等产品质量确实不错，在经过推广和销售了几百份之后，都产生了一些批发客户。而这些批量采购用户，会成为常年的采购客户，还有外地的水果商包揽了荔枝妹妹在外地的经销权，一下子拓展了外地的市场。</p>
            <p style="text-indent: 2em">有人问，那我一开始的客户是从哪里来的呢？这就是平台的重要性了。一开始的客户除了自己本身的好友之外，还有大熊会群里的很多朋友支持。把产品送给这些朋友品尝后，大家觉得不错就都分享了自己的朋友圈，就这样获得了很多基础客户，然后客户再分享，就这样慢慢做出了自己的品牌和客户群。</p>
            <p style="text-indent: 2em">如果没有类似的平台，也可以尝试在一些自己的群里找到一些志同道合的朋友帮忙去做类似的事情，只要你做好产品，愿意尝试，就一定会有效果。</p>
            <h3>朋友圈模式三：淘宝辅销</h3>
            <p style="text-indent: 2em">很多人会把淘宝和朋友圈对立起来，其实并不是这样的。做淘宝的人开始做朋友圈之后，效果往往会非常惊人。因为淘宝最大的特点是可以通过各种方法来获取客流，而朋友圈则擅长留住客流，增加复购。大熊名人堂成员，微博名人代言化妆品营销第一人俪兰冯老板，当年做到了《爸爸去哪儿》五大主角微博代言而一炮而红。在淘宝化妆品领域做得也还算不错，一个月有四五百万的流水。在和我沟通后决定开始进行朋友圈营销，方法也非常简单，找了两个90后，去加所有淘宝成交客户，进行客服和沟通，同时在朋友圈里经常进行新品展示和促销，老客户复购率非常高。第一个月下来就做到了近五十万，两个多月就差不多到了近二百万，按照这个速度，相信几个月内，流水就会和淘宝店并驾齐驱。但同样的流水，朋友圈销售因为没有流量成本和促销成本，利润差不多是淘宝的三倍以上。也就是在朋友圈做一百万，赚的钱差不多就等于淘宝卖三百万以上。</p>
            <h3>朋友圈模式四：O2O营销</h3>
            <p style="text-indent: 2em">微信朋友圈并不仅仅是产品销售，而且可以很好的做O2O。最早的朋友圈案例nancy美睫的nancy，现在还是在做美睫行业，并没有转行卖东西什么的，依旧立足主业，这一点其实难能可贵。距离一年前，ncncy的业务已经翻番，又开了一家自己的美睫店还引进了韩国的一些纹眉技术。这些产品和技术宣传，基本都是通过朋友圈来实现的，而朋友圈也是很多活动的落脚点，尤其是预约打折的效果就特别好。</p>
            <p style="text-indent: 2em">除此之外，高档成衣定制品牌z.studio的创始人周琼，也是大熊名人堂成员，在短短一年时间内，已经在全国开了六家直营店铺，在北京有四家，上海武汉各有一家。运营的方式简单的说就是通过微信进行新款服饰的宣传，因为定制服饰比较受到一些中产阶级和名星的追捧，所以，口口相传客户增加很快。然后她为每个客户都安排了专门的客户经理通过微信进行维护，而随着上海武汉的客户增多，为了方便，在当地开设专卖店也就水到渠成了。</p>
            <h3>朋友圈模式五：品牌模式</h3>
            <p style="text-indent: 2em">很多人都会问我，大熊老师你整天做朋友圈营销培训为什么你自己不卖东西呢？我说，我卖东西啊，我卖的是自己的品牌。经过一年的运营，我的个人品牌已经有了很大的提升，我无私低价的把大家在朋友圈营销的案例和技巧进行分享，搭建了大熊会的平台，并从中间选择了优秀的微商组成了大熊名人堂（月流水百万以上），这些最终都形成了巨大的影响力和向心力。很多小微商就在这个平台上获得了很多的指点和帮助，以及开始的起步的助推，很多的人因此受益，我自己也获得了很大的提升和威望。</p>
            <p style="text-indent: 2em">类似的事情也不少见，包括很多公众平台会员粉丝的内容传播都是通过朋友圈来实现的，还有很多人也在通过朋友圈进行众筹等商业合作。品牌同样是一个商品，而且溢价和增值非常的高。很多的顾问和咨询，让我了解了更多的行业和产品特点，最终在个人水平的提升上也非常明显。目前大熊会已经是国内朋友圈营销第一社群，流水已经和中型电商不相上下，每日成交单数也近万单，相信之后在我的运营下也会创造更多的奇迹。</p>
            <p style="text-indent: 2em">朋友圈营销其实并没有什么特别复杂的东西，只要你做以好产品，用微信做好客户服务，或快或慢都会取得一定的成绩，这里并没有什么成规可以去遵守。而产品品类也覆盖非常广泛，只要你能做好产品，找到你客户所在的地方，然后通过传播的手段去影响他，用微信来成交和管理，最终还是会有很大帮助的。没有必要对这个有什么成见，更多的去研究这些社会化营销手段，其实才是明智的。这里面有一些技巧，但也没有玄到那种地步，没必要参加太多的培训什么的，几块钱买个录音听听，自己摸索一下也没有什么问题。</p>
            <p style="text-indent: 2em">在过去的一年里，是朋友圈的红利期，而到了今年年底，会进入洗牌期和规范期，在这个时候，团队和平台的作用就会非常大，而单兵作战成功可能的几率就会小很多了。</p>
            ',
        ]);
        // attach categories
        $course05->categories()->attach(3);
        // attach tags
        $course05->tags()->attach(1);
        $course05->tags()->attach(2);


        $course06= Course::create([
            'title' => '学会电商数据分析',
            'published' => true,
            'published_at' => Carbon::now(),
            //'image' => '/courses/04.jpg',
            'user_Id' => 1,
            'files' => [],
            'videos' => [],
            'summary' => '说到数据分析，大家心里首先想到的是什么？UV，PV，点击率，跳失率，ROI 还是别的什么？这些数据的作用 大家可以说出一大堆，这些利用数据分析，推广引流效果，分析页面营销效果，分析顾客质量效果等等的数据分析，已经成了很多运营 和新手们的常规思路和操作了。',
            'content' => '
            <p style="text-indent: 2em">说到数据分析，大家心里首先想到的是什么？UV，PV，点击率，跳失率，ROI 还是别的什么？这些数据的作用 大家可以说出一大堆，这些利用数据分析，推广引流效果，分析页面营销效果，分析顾客质量效果等等的数据分析，已经成了很多运营 和新手们的常规思路和操作了。</p>
            <p style="text-indent: 2em">这个对吗？不能说不对，因为这些的确是要做的；但也不能说对，因为这些不是最重要的；那最重要的是什么？回答这个问题 之前，大家不妨换位思考下，如果你是老板或者是BOSS 来做这个项目，你最为关心的点是什么？最想利用数据分析知道什么？</p>
            <p style="text-indent: 2em">就三点；成本，效率，效果；打工者 和 老板的区别 也就在这里；打工者的心态 效果最重要，效率第二，成本第三；因为效果就是功劳，功劳就是存在感和成绩，就是身价；效率不重要，无非累点，功劳苦劳是一样的；成本反正是老板出钱，无关痛痒</p>
            <p style="text-indent: 2em">但老板的心态 就反过来了，成本是最重要的，要割肉总会谨慎点儿；其次是效果 这钱花的值不值的；最后才是效率，这个效果要多久才能看到。</p>
            <p style="text-indent: 2em">回到本文主题，我们数据分析 真正的要点，真正的根本 也是这三点，成本，效率，效果；那么围绕这个要点，我们该如何具体的操作了？具体分析哪些数据点了？</p>
            <h3>精准流量来源</h3>
            <p style="text-indent: 2em">生意谁都想好刚用在刀刃上，平白无故的损耗，不是傻大粗，就是富二代；客户，流量 哪儿来的最精准？对比每个流量来源的比例，和用户质量；通过流量来源 访问深度 停留时间，实际转化等等，来判断</p>
            <p style="text-indent: 2em">哪儿的流量最靠谱？其次是哪儿的？决定了 后期推广要点的主次</p>
            <p style="text-indent: 2em">实际运用：在没有经验和资源的背景下，需要试水各种渠道的引流效果，我们监控这些引流渠道的质量；如：哪儿来的客户成交转化率最高？哪儿来的客户 访问深度 停留时间都最好？</p>
            <h3>每个用户的获取成本</h3>
            <p style="text-indent: 2em">一个流量多少钱？一个客户多少钱？一个实际购物转化的精准客户多少钱？</p>
            <p style="text-indent: 2em">这样 就清晰落实了 计划目标；我需要实现500000的月销售额；一个成交的精准客户的成本是10元，客户人均消费5000块；那么你要实现50万的月销售额，起码要1000块以上的广告投入</p>
            <p style="text-indent: 2em">这样 不就清晰了吗？</p>
            <p style="text-indent: 2em">实际运用：花了多少钱？来了多少人？多少人付款了？量子后台都有具体的</p>
            <h3>每个用户能赚多少钱</h3>
            <p style="text-indent: 2em">跟第二个差不多，这个重点是 咱们能从每个用户手里赚多少钱？</p>
            <p style="text-indent: 2em">1000个人里面，有多少人是无意向用户？有多少人是潜在用户？有多少人高质量的成交用户？通过对引流渠道的监控排查，分析三者的比例；</p>
            <p style="text-indent: 2em">这对于咱们营销推广的支出，很有参考意义</p>
            <p style="text-indent: 2em">实际运用：来了多少人？多少人付款了？多少人没付款？销售额多少？销售额除以总人数，人均消费多少钱？除以成交用户数，质量用户 人均成交多少钱？</p>
            <h3>每个用户 你总共能赚多少钱</h3>
            <p style="text-indent: 2em">这里有两个意思，1，是习惯，用户习惯性在购物周期的反复消费购买你们家的产品；2，用户对你现在的产品，或者往后的产品都很感兴趣，持续关注后消费；如同苹果小米系列；</p>
            <p style="text-indent: 2em">实际运用：统计你店铺里反复消费人群，试着找出他们的消费周期；都是因为什么？因为什么时段 过来消费的？然后 针对其消费周期的原因 针对性的做营销活动，是不是 会事半功倍了？还有兴趣 针对其感兴趣的元素 来包装产品，是不是更容易让用户爱不释手了？</p>
            <p style="text-indent: 2em">比如：很喜欢漂亮衣服的OL，每个月 肯定会在发工资 和 周末约会等时候，发现衣服不够穿，想多买几件的冲动等等。</p>
            <h3>不是你的用户，但 是你的产品用户</h3>
            <p style="text-indent: 2em">听着很绕，其实意思很简单；用户在网上找他们心怡的某一款产品；但并不是找你，但如果你也有类似的 产品，那么这帮人 是不是可以吸引过来 为你所用了？</p>
            <p style="text-indent: 2em">实际运用：分析自己类目里流行的款式风格都有什么？喜欢他们的用户都多不多？自己是不是 可以针对这个用户喜欢多的产品，关键词属性等等，做下关键词优化，属性优化，然后再营销包装下了？效果肯定不会差</p>
            <h3>为什么没有付款？</h3>
            <p style="text-indent: 2em">不管是新老客户 下单购买转化；流程走到一半，忽然不买了；为什么花了钱引流，效果却没跟上？中间出了什么问题？因为系统原因，无法使用支付宝或网银？因为看到竞争对手比你价格低？等等</p>
            <p style="text-indent: 2em">实际运用：用户购买的通道 不仅要保障通畅，还要保障舒心舒适；</p>
            <h3>用户在那儿找到我们的？</h3>
            <p style="text-indent: 2em">这个跟第一个的意思差不多，但是偏向于用户调查了；其实也没那么麻烦；知道用户都是在那儿找到我们的，更有利于我们调整推广方向，提升效率，提升效果，降低成本。</p>
            <p style="text-indent: 2em">实际运用：可以做个简单的顾客调查；还可以在你店铺流量入口多了的情况下，让客户在客户咨询的时候，提问收集下。</p>
            <h3>移动端的趋势</h3>
            <p style="text-indent: 2em">移动端毫无疑问是下一个阶段的热点；当前有多少人是通过移动端访问你的网站店铺的？当前的移动端流量比例又有多少？分拆部分时间精力，优化下移动端的浏览和购物体验。</p>
            <p style="text-indent: 2em">实际运用：产品详情页，店铺移动端装修等等，适当优化下移动端的浏览和购物体验了。</p>
            
            ',
        ]);
        // attach categories
        $course06->categories()->attach(3);
        // attach tags
        $course06->tags()->attach(1);
        $course06->tags()->attach(2);


        $course07= Course::create([
            'title' => '教你如何掌握微信公众号互动内容设计',
            'published' => true,
            'published_at' => Carbon::now(),
            //'image' => '/courses/04.jpg',
            'user_Id' => 1,
            'files' => [],
            'videos' => [],
            'summary' => '最新数据表明，微信公众号数量已达800万个，虽然活跃公众号的数量在不断减少，但不得不承认，没有一个更好的产品可以替代公众号的位置。特别是对于企业而言，公众号仍然是企业与用户建立联系最好的渠道。所以运营好公众号，对企业来说依然非常重要。',
            'content' => '
            <p style="text-indent: 2em">最新数据表明，微信公众号数量已达800万个，虽然活跃公众号的数量在不断减少，但不得不承认，没有一个更好的产品可以替代公众号的位置。特别是对于企业而言，公众号仍然是企业与用户建立联系最好的渠道。所以运营好公众号，对企业来说依然非常重要。</p>
            <p>公众号的运营，核心是内容，重点是互动。内容是为了吸引用户、留住用户，互动是为了增加与用户的感情，让用户变成粉丝。之前坤鹏论已经写过几篇关于如何写好内容的文章，当然也有专门的训练营帮助大家提高写作能力，今天主要聊聊公众号如何才能增加互动性，与用户形成一个很好的互动，相信这也是很多企业迫切想了解的。</p>
            <h3>互动栏目</h3>
            <p>既然想提高互动性，那互动类的栏目是必不可少的。企业在策划公众号时，可以直接策划一些带有互动性质的栏目，比如“企业招聘”、“人才求职”这样的栏目。对于企业而言，招聘是长期需求，与其去智联招聘、58、拉勾、BOSS直聘等平台招聘，不如直接在微信公众号里也放一个招聘启示。</p>
            <p>关注企业公众号的，都是对企业有一定认知的，从企业公众号粉丝里招人，要比陌生招聘效果好的多。而且这也是企业与用户间很好的一次互动。</p>
            <p>如果想在这方面更进一步，还可以帮助用户找工作。坤鹏论知道有些个人自媒体的公众号就在做这件事情，效果还不错。比如某公众号聚焦网络营销领域，他就会帮自己粉丝留意一些网络营销相关的工作机会。对于企业而言，他帮企业找到了需要的人才； 对于用户而言，他帮自己找到了工作，两全其美。</p>
            <h3>内容互动</h3>
            <p>可以在公众号的内容中与用户互动，比如在文章中引用用户的评论、留言，或是调侃用户等。当用户发现自己的评论居然被写进正文里了，会有一种强烈的认同感。其他用户看到，也会有一种亲切感。当然，如果你的公众号有评论功能，经常回复一下评论也是很有必要的。坤鹏论一直觉得网易新闻的“新闻7点整”等栏目，在这方面做的就非常不错。</p>
            <h3>互动调查</h3>
            <p>调查、投票也是一种传统但却非常有效的方式，这种方式不但能与用户经常互动交流，还能搜集各种数据，了解用户习惯等。</p>
            <p>坤鹏论在之前进行的写作训练营作品评选时就使用了投票功能，公众号后台自带投票功能，效果非常不错。</p>
            <h3>有奖竞猜</h3>
            <p>竞猜的方式很传统，但却经久不衰，如猜歌名、猜谜语等，任何时候都能让用户乐此不疲。当然，前提最好是有些小奖品来刺激，效果更好。这个奖品不一定非得是企业自己花钱采购，也可以是与其他厂商通过合作的方式互换。如果公众号粉丝多，甚至可以直接寻求赞助，很多企业需要通过这种小礼品来增加品牌曝光度，多找这类企业合作。</p>
            <h3>有奖征文</h3>
            <p>如果公众号的影响力还可以，用户群基数够大，征文也是一个非常不错的方式。而且对于企业来说，营销推广都是需要新闻稿和软文的，对于大多数企业而言，这类事情要么是自己招文案人员，要么是找专业的写手，据坤鹏论了解，企业新闻稿和软文的价格可都不低，如果能利用公众号的粉丝完成这件事情，不仅起到了互动的效果，还能帮助企业挖掘有潜力的写手，一举两得。公众号粉丝对企业的了解程度，肯定要比外包的写手要多。</p>
            <h3>有奖征集</h3>
            <p>与有奖征文不同，设计有奖征集活动的门槛就要低多了。对于这类活动，参与门槛是个挺重要的因素，门槛越低，用户的参与度就会越高。我们可以推出一些比如征名、征宣传语类之的征集活动，靠谱不靠谱的，至少用户不用输入大段的文字。用户参与活动的成本低了，参与度就会高。当然，这其中肯定会有大量不靠谱的内容，但又有什么关系呢？我们主要的目的就是要与用户形成互动，再不靠谱的内容，互相也是一次成功的互动。</p>
            <h3>答疑解惑</h3>
            <p>实践证明，答疑类内容是最容易与用户形成互动的一种方式。之前坤鹏论还做过一段时间问答，当时每天给坤鹏论微信后台留言的人与日俱增，可惜的是，由于精力有限，没有把这个栏目做下去。但通过这段时间实践可以看出，答疑类内容是很受用户欢迎的，与是最容易与用户形成强互动的一种形式。</p>
            <h3>用户评比</h3>
            <p>对于微信公众号来说，可以周期性的推出一些用户评比活动，比如最活跃用户、转载量最高用户等，然后把这些都写成文章，推送出来。</p>
            <p>这么做的好处有几方面：</p>
            <ul>
                <li>能够与用户产生互动</li>
                <li>树立典型，培养核心粉丝</li>
                <li>让用户之间产生竞争感</li>
            </ul>
            <h3>游戏抽奖</h3>
            <p>抽奖类的活动或游戏，是用户非常喜欢参与的一种互动方式，比如常见的刮刮卡、大转盘等。不过做游戏抽奖要注意两点：</p>
            <h4>给用户一个抽奖的理由</h4>
            <p>说白了就是告诉用户我们为什么要做这次抽奖活动，不能今天脑袋一热就做一个抽奖，这样用户会有疑惑。抽奖的理由其实并不难想，可以参考各大商场的作法，或者如果怕麻烦，可以直接翻翻淘宝上各大卖家做活动的理由。</p>
            <h4>最好可以产生裂变</h4>
            <p>抽奖类活动最好的方式是能发动用户自主宣传，所以设置这类游戏时，最好设置那种需要拉朋友共同才能完成的游戏。一个粉丝拉三个朋友，三个朋友再拉三个朋友，这个活动的效果才能出来。</p>
            <p>不过通过游戏抽奖等吸引的粉丝，在活动结束以后会有很大比例取消关注，据坤鹏论之前的经验，单纯拆红包的游戏，一周内取消关注的人数大概会在30%，所以要有心理准备哟。</p>
            <h3>群辅助</h3>
            <p>除了公众号本身的互动外，我们应该学会借助一些其他的工具进行辅助。比如说建立QQ群、微信群，引导用户加入群，通过群的方式，辅助互动，培养用户。</p>
            <p>比起QQ群、微信群，公众号实际上并不是最好的互动平台，如果能把用户拉到QQ群、微信群里，通过长期运营，可以达到更好的互相效果，这也是目前很多公众号正在做的事情。不过要这么操作，需要有专人对QQ群、微信群进行维护，避免出现大家被拉进群以后没人管的情况发生。</p>
            ',
        ]);
        // attach categories
        $course07->categories()->attach(3);
        // attach tags
        $course07->tags()->attach(1);
        $course07->tags()->attach(2);

    }

}