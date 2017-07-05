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

    }

}