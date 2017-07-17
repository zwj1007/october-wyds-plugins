<?php namespace Buuug7\Location\Updates;

use Buuug7\Location\Models\County;
use October\Rain\Database\Updates\Seeder;

class SeedAllTables extends Seeder
{
    public function run()
    {
        //
        // 县城
        //
        $c1 = County::create([
            'name' => '渭源县',
            'code' => '621123000000',
        ]);

        //
        // 乡镇
        //
        $t1 = $c1->towns()->create([
            'name' => '清源镇',
            'code' => '621123100000',
        ]);

        // 清源镇所有村
        // start
        $t1->villages()->create([
            'name' => '新地村',
            'code' => '620602102200',
        ]);

        $t1->villages()->create([
            'name' => '新东村',
            'code' => '620602102201',
        ]);

        $t1->villages()->create([
            'name' => '清泉村',
            'code' => '620602102202',
        ]);

        $t1->villages()->create([
            'name' => '新西村',
            'code' => '	620602102203',
        ]);

        $t1->villages()->create([
            'name' => '发展村',
            'code' => '620602102204',
        ]);

        $t1->villages()->create([
            'name' => '王庄村',
            'code' => '620602102205',
        ]);

        $t1->villages()->create([
            'name' => '羊庄村',
            'code' => '620602102206	',
        ]);

        $t1->villages()->create([
            'name' => '中沙村',
            'code' => '620602102207',
        ]);

        $t1->villages()->create([
            'name' => '东槽村',
            'code' => '620602102208',
        ]);

        $t1->villages()->create([
            'name' => '宣庄村',
            'code' => '620602102209',
        ]);

        $t1->villages()->create([
            'name' => '清源村',
            'code' => '620602102210',
        ]);

        $t1->villages()->create([
            'name' => '曾家堡村',
            'code' => '620602102211',
        ]);

        $t1->villages()->create([
            'name' => '刘广村',
            'code' => '620602102212',
        ]);

        $t1->villages()->create([
            'name' => '周府庄村',
            'code' => '620602102213	',
        ]);

        $t1->villages()->create([
            'name' => '蔡寨村',
            'code' => '620602102214',
        ]);
        // 清源镇所有村
        // end

        $t2 = $c1->towns()->create([
            'name' => '莲峰镇',
            'code' => '621123101000',
        ]);

        // 莲峰镇所有村
        // start
        $t2->villages()->create([
            'name' => '杨家咀村',
            'code' => '621123101201',
        ]);
        $t2->villages()->create([
            'name' => '下街村',
            'code' => '621123101202',
        ]);
        $t2->villages()->create([
            'name' => '上街村',
            'code' => '621123101203',
        ]);
        $t2->villages()->create([
            'name' => '幸福村',
            'code' => '621123101204',
        ]);
        $t2->villages()->create([
            'name' => '何家湾村',
            'code' => '621123101205',
        ]);
        $t2->villages()->create([
            'name' => '孔家坪村',
            'code' => '621123101206',
        ]);
        $t2->villages()->create([
            'name' => '首阳村',
            'code' => '621123101207',
        ]);
        $t2->villages()->create([
            'name' => '张家滩村',
            'code' => '621123101208',
        ]);
        $t2->villages()->create([
            'name' => '古迹坪村',
            'code' => '621123101209',
        ]);
        $t2->villages()->create([
            'name' => '菜子坡村',
            'code' => '621123101210',
        ]);
        $t2->villages()->create([
            'name' => '簸箕湾村',
            'code' => '621123101211',
        ]);
        $t2->villages()->create([
            'name' => '下寨村',
            'code' => '621123101212',
        ]);
        $t2->villages()->create([
            'name' => '岔口村',
            'code' => '621123101213',
        ]);
        $t2->villages()->create([
            'name' => '坡儿村',
            'code' => '621123101214',
        ]);
        $t2->villages()->create([
            'name' => '团结村',
            'code' => '621123101215',
        ]);
        $t2->villages()->create([
            'name' => '绽坡村',
            'code' => '621123101216',
        ]);
        $t2->villages()->create([
            'name' => '老庄村',
            'code' => '621123101217',
        ]);
        $t2->villages()->create([
            'name' => '刘营村',
            'code' => '621123101218',
        ]);
        $t2->villages()->create([
            'name' => '元明村',
            'code' => '621123101219',
        ]);
        $t2->villages()->create([
            'name' => '蒲河村',
            'code' => '621123101220',
        ]);
        $t2->villages()->create([
            'name' => '石门村',
            'code' => '621123101221',
        ]);
        $t2->villages()->create([
            'name' => '选道村',
            'code' => '621123101222',
        ]);
        $t2->villages()->create([
            'name' => '天池村',
            'code' => '621123101223',
        ]);
        // 莲峰镇所有村
        // end

        $t3 = $c1->towns()->create([
            'name' => '会川镇',
            'code' => '	621123102000',
        ]);

        // 会川镇所有村
        // start
        $t3->villages()->create([
            'name' => '会川镇居',
            'code' => '621123102001',
        ]);
        $t3->villages()->create([
            'name' => '罗家磨村',
            'code' => '621123102201	',
        ]);
        $t3->villages()->create([
            'name' => '沈家滩村',
            'code' => '621123102202',
        ]);
        $t3->villages()->create([
            'name' => '本庙村',
            'code' => '621123102203',
        ]);
        $t3->villages()->create([
            'name' => '新城村',
            'code' => '621123102204',
        ]);
        $t3->villages()->create([
            'name' => '上集村',
            'code' => '621123102205',
        ]);
        $t3->villages()->create([
            'name' => '南沟村',
            'code' => '621123102206',
        ]);
        $t3->villages()->create([
            'name' => '西关村',
            'code' => '621123102207',
        ]);
        $t3->villages()->create([
            'name' => '东关村',
            'code' => '621123102208',
        ]);
        $t3->villages()->create([
            'name' => '醋那村',
            'code' => '621123102209',
        ]);
        $t3->villages()->create([
            'name' => '河里庄村',
            'code' => '621123102210',
        ]);
        $t3->villages()->create([
            'name' => '常家湾村',
            'code' => '621123102211',
        ]);
        $t3->villages()->create([
            'name' => '王家咀村	',
            'code' => '621123102212',
        ]);
        $t3->villages()->create([
            'name' => '李家崖村',
            'code' => '621123102213',
        ]);
        $t3->villages()->create([
            'name' => '大庄村',
            'code' => '621123102214',
        ]);
        $t3->villages()->create([
            'name' => '梁家坡村',
            'code' => '621123102215',
        ]);
        $t3->villages()->create([
            'name' => '杨庄村',
            'code' => '621123102216',
        ]);
        $t3->villages()->create([
            'name' => '哈地窝村',
            'code' => '621123102217',
        ]);
        $t3->villages()->create([
            'name' => '半阴坡村',
            'code' => '621123102218',
        ]);
        $t3->villages()->create([
            'name' => '棉柳坪村',
            'code' => '621123102219',
        ]);
        $t3->villages()->create([
            'name' => '元寺滩村',
            'code' => '621123102220',
        ]);
        $t3->villages()->create([
            'name' => '干乍村',
            'code' => '621123102221',
        ]);
        $t3->villages()->create([
            'name' => '和平村',
            'code' => '621123102222',
        ]);
        // 会川镇所有村
        // end

        $t4 = $c1->towns()->create([
            'name' => '五竹镇',
            'code' => '621123103000',
        ]);

        // 五竹镇所有村
        // start
        $t4->villages()->create([
            'name' => '鹿鸣村',
            'code' => '621123103201',
        ]);
        $t4->villages()->create([
            'name' => '郭家沟村',
            'code' => '621123103202',
        ]);
        $t4->villages()->create([
            'name' => '渭河源村',
            'code' => '621123103203',
        ]);
        $t4->villages()->create([
            'name' => '五竹村',
            'code' => '621123103204',
        ]);
        $t4->villages()->create([
            'name' => '苏家口村',
            'code' => '621123103205',
        ]);
        $t4->villages()->create([
            'name' => '路麻滩村',
            'code' => '621123103206',
        ]);
        $t4->villages()->create([
            'name' => '黑鹰沟村',
            'code' => '621123103207',
        ]);
        // 五竹镇所有村
        // end

        $t5 = $c1->towns()->create([
            'name' => '路园镇',
            'code' => '621123104000',
        ]);
        // 路园镇所有村
        // start
        $t5->villages()->create([
            'name' => '王家山村',
            'code' => '621123104201',
        ]);
        $t5->villages()->create([
            'name' => '东湾村',
            'code' => '621123104202',
        ]);
        $t5->villages()->create([
            'name' => '峪岭村',
            'code' => '621123104203',
        ]);
        $t5->villages()->create([
            'name' => '三合口村',
            'code' => '621123104204',
        ]);
        $t5->villages()->create([
            'name' => '胜利村',
            'code' => '621123104205',
        ]);
        $t5->villages()->create([
            'name' => '双轮磨村',
            'code' => '621123104206',
        ]);
        $t5->villages()->create([
            'name' => '大路村',
            'code' => '621123104207',
        ]);
        $t5->villages()->create([
            'name' => '锹甲铺村',
            'code' => '621123104208',
        ]);
        $t5->villages()->create([
            'name' => '盛家坪村',
            'code' => '621123104209',
        ]);
        $t5->villages()->create([
            'name' => '潘家岔村',
            'code' => '621123104210',
        ]);
        $t5->villages()->create([
            'name' => '陆家湾村',
            'code' => '621123104211',
        ]);
        $t5->villages()->create([
            'name' => '小园子村',
            'code' => '621123104212',
        ]);
        // 路园镇所有村
        // end

        $t6 = $c1->towns()->create([
            'name' => '北寨镇',
            'code' => '621123105000',
        ]);

        // 北寨镇所有村
        // start
        $t6->villages()->create([
            'name' => '前进村',
            'code' => '621123105201',
        ]);
        $t6->villages()->create([
            'name' => '张家堡村',
            'code' => '621123105202',
        ]);
        $t6->villages()->create([
            'name' => '暖阳村',
            'code' => '621123105203',
        ]);
        $t6->villages()->create([
            'name' => '麻地湾村',
            'code' => '621123105204',
        ]);
        $t6->villages()->create([
            'name' => '陈家渠村',
            'code' => '621123105205',
        ]);
        $t6->villages()->create([
            'name' => '阳坡村',
            'code' => '621123105206',
        ]);
        $t6->villages()->create([
            'name' => '马莲村',
            'code' => '621123105207',
        ]);
        $t6->villages()->create([
            'name' => '郑家川村',
            'code' => '621123105208',
        ]);
        $t6->villages()->create([
            'name' => '丁家湾村',
            'code' => '621123105209',
        ]);
        $t6->villages()->create([
            'name' => '祁坪村',
            'code' => '621123105210',
        ]);
        $t6->villages()->create([
            'name' => '盐滩村',
            'code' => '621123105211',
        ]);
        $t6->villages()->create([
            'name' => '阳山村',
            'code' => '621123105212',
        ]);
        $t6->villages()->create([
            'name' => '小寨村',
            'code' => '621123105213',
        ]);
        // 北寨镇所有村
        // end

        $t7 = $c1->towns()->create([
            'name' => '新寨镇',
            'code' => '621123106000',
        ]);
        // 新寨镇所有村
        // start
        $t7->villages()->create([
            'name' => '新寨村',
            'code' => '621123106201',
        ]);
        $t7->villages()->create([
            'name' => '三合村',
            'code' => '621123106202',
        ]);
        $t7->villages()->create([
            'name' => '姚集村',
            'code' => '621123106203',
        ]);
        $t7->villages()->create([
            'name' => '东坡村',
            'code' => '621123106204',
        ]);
        $t7->villages()->create([
            'name' => '柳林村',
            'code' => '621123106205',
        ]);
        $t7->villages()->create([
            'name' => '联盟村',
            'code' => '621123106206',
        ]);
        $t7->villages()->create([
            'name' => '中寨村',
            'code' => '621123106207',
        ]);
        $t7->villages()->create([
            'name' => '大坪村',
            'code' => '621123106208',
        ]);
        $t7->villages()->create([
            'name' => '寺坪村',
            'code' => '621123106209',
        ]);
        $t7->villages()->create([
            'name' => '闫家沟村',
            'code' => '621123106210',
        ]);
        $t7->villages()->create([
            'name' => '剪子岔村',
            'code' => '621123106211',
        ]);
        $t7->villages()->create([
            'name' => '冯家庄村',
            'code' => '621123106212',
        ]);
        $t7->villages()->create([
            'name' => '康家山村',
            'code' => '621123106213',
        ]);
        $t7->villages()->create([
            'name' => '泉湾村',
            'code' => '621123106214',
        ]);
        $t7->villages()->create([
            'name' => '黎家湾村',
            'code' => '621123106215',
        ]);
        $t7->villages()->create([
            'name' => '马鹿沟村',
            'code' => '621123106216',
        ]);
        $t7->villages()->create([
            'name' => '宽川村',
            'code' => '621123106217',
        ]);
        $t7->villages()->create([
            'name' => '田家岔村',
            'code' => '621123106218',
        ]);
        $t7->villages()->create([
            'name' => '廖家寨村',
            'code' => '621123106219',
        ]);
        // 新寨镇所有村
        // end

        $t8 = $c1->towns()->create([
            'name' => '麻家集镇',
            'code' => '	621123107000',
        ]);

        // 麻家集镇所有村
        // start
        $t8->villages()->create([
            'name' => '楞坎村',
            'code' => '621123107201',
        ]);
        $t8->villages()->create([
            'name' => '毗达村',
            'code' => '621123107202',
        ]);
        $t8->villages()->create([
            'name' => '袁家河村',
            'code' => '621123107203',
        ]);
        $t8->villages()->create([
            'name' => '路西村',
            'code' => '621123107204',
        ]);
        $t8->villages()->create([
            'name' => '麻家集村',
            'code' => '621123107205',
        ]);
        $t8->villages()->create([
            'name' => '漆家沟村',
            'code' => '621123107206',
        ]);
        $t8->villages()->create([
            'name' => '宗丹村',
            'code' => '621123107207',
        ]);
        $t8->villages()->create([
            'name' => '乔家滩村',
            'code' => '621123107208',
        ]);
        $t8->villages()->create([
            'name' => '四沟村',
            'code' => '621123107209',
        ]);
        $t8->villages()->create([
            'name' => '土牌湾村',
            'code' => '621123107210',
        ]);
        // 麻家集镇所有村
        // end

        $t9 = $c1->towns()->create([
            'name' => '锹峪乡',
            'code' => '621123200000',
        ]);

        // 锹峪乡所有村
        // start
        $t9->villages()->create([
            'name' => '裕丰村',
            'code' => '621123200201',
        ]);
        $t9->villages()->create([
            'name' => '毛窑村',
            'code' => '621123200202',
        ]);
        $t9->villages()->create([
            'name' => '古树村',
            'code' => '621123200203',
        ]);
        $t9->villages()->create([
            'name' => '乔阳村',
            'code' => '621123200204',
        ]);
        $t9->villages()->create([
            'name' => '石咀村',
            'code' => '621123200205',
        ]);
        $t9->villages()->create([
            'name' => '贯子口村',
            'code' => '621123200206',
        ]);
        $t9->villages()->create([
            'name' => '曹家庄村',
            'code' => '621123200207',
        ]);
        $t9->villages()->create([
            'name' => '锹峪村',
            'code' => '621123200208',
        ]);
        $t9->villages()->create([
            'name' => '新丰村',
            'code' => '621123200209',
        ]);
        $t9->villages()->create([
            'name' => '永丰村',
            'code' => '621123200210',
        ]);
        $t9->villages()->create([
            'name' => '峡口村',
            'code' => '621123200211',
        ]);
        // 锹峪乡所有村
        // end

        $t10 = $c1->towns()->create([
            'name' => '大安乡',
            'code' => '621123203000',
        ]);

        // 大安乡所有村
        // start
        $t10->villages()->create([
            'name' => '张家川村',
            'code' => '621123203201	',
        ]);
        $t10->villages()->create([
            'name' => '中庄村',
            'code' => '621123203202	',
        ]);
        $t10->villages()->create([
            'name' => '潘家湾村',
            'code' => '621123203203	',
        ]);
        $t10->villages()->create([
            'name' => '大石岔村',
            'code' => '621123203204	',
        ]);
        $t10->villages()->create([
            'name' => '大涝子村',
            'code' => '621123203205	',
        ]);
        $t10->villages()->create([
            'name' => '杜家铺村',
            'code' => '621123203206',
        ]);
        $t10->villages()->create([
            'name' => '红堡子村',
            'code' => '621123203207',
        ]);
        $t10->villages()->create([
            'name' => '方家庄村',
            'code' => '621123203208	',
        ]);
        $t10->villages()->create([
            'name' => '井儿山村',
            'code' => '621123203209	',
        ]);
        $t10->villages()->create([
            'name' => '邱家川村',
            'code' => '621123203210	',
        ]);
        // 大安乡所有村
        // end

        $t11 = $c1->towns()->create([
            'name' => '秦祁乡',
            'code' => '621123204000',
        ]);
        // 秦祁乡所有村
        // start
        $t11->villages()->create([
            'name' => '白土坡村',
            'code' => '621123204201	',
        ]);
        $t11->villages()->create([
            'name' => '武家山村',
            'code' => '621123204202	',
        ]);
        $t11->villages()->create([
            'name' => '糜川村',
            'code' => '621123204203	',
        ]);
        $t11->villages()->create([
            'name' => '铜钱村',
            'code' => '621123204204	',
        ]);
        $t11->villages()->create([
            'name' => '豹子沟村',
            'code' => '621123204205	',
        ]);
        $t11->villages()->create([
            'name' => '西坪村',
            'code' => '621123204206	',
        ]);
        $t11->villages()->create([
            'name' => '秦祁村',
            'code' => '621123204207	',
        ]);
        $t11->villages()->create([
            'name' => '中坪村',
            'code' => '621123204208',
        ]);
        $t11->villages()->create([
            'name' => '岗家岔村',
            'code' => '621123204209	',
        ]);
        $t11->villages()->create([
            'name' => '芨芨沟村',
            'code' => '621123204210	',
        ]);
        $t11->villages()->create([
            'name' => '杨川村',
            'code' => '621123204211	',
        ]);
        // 秦祁乡所有村
        // end

        $t12 = $c1->towns()->create([
            'name' => '庆坪乡',
            'code' => '621123206000	',
        ]);

        // 庆坪乡所有村
        // start
        $t12->villages()->create([
            'name' => '庆坪村',
            'code' => '621123206201',
        ]);
        $t12->villages()->create([
            'name' => '关山根村',
            'code' => '621123206202',
        ]);
        $t12->villages()->create([
            'name' => '李家堡村',
            'code' => '621123206203',
        ]);
        $t12->villages()->create([
            'name' => '姚坡村',
            'code' => '621123206204',
        ]);
        $t12->villages()->create([
            'name' => '龚家沟村',
            'code' => '621123206205',
        ]);
        $t12->villages()->create([
            'name' => '线家沟村',
            'code' => '621123206206',
        ]);
        $t12->villages()->create([
            'name' => '王家川村',
            'code' => '621123206207',
        ]);
        $t12->villages()->create([
            'name' => '松树村',
            'code' => '621123206208',
        ]);
        $t12->villages()->create([
            'name' => '梁家沟村',
            'code' => '621123206209',
        ]);
        $t12->villages()->create([
            'name' => '李家窑村',
            'code' => '621123206210',
        ]);
        $t12->villages()->create([
            'name' => '樊家湾村',
            'code' => '621123206211',
        ]);
        $t12->villages()->create([
            'name' => '老王沟村',
            'code' => '621123206212',
        ]);
        $t12->villages()->create([
            'name' => '潘家沟村',
            'code' => '621123206213',
        ]);
        $t12->villages()->create([
            'name' => '清泉村',
            'code' => '621123206214',
        ]);
        // 庆坪乡所有村
        // end

        $t13 = $c1->towns()->create([
            'name' => '祁家庙乡',
            'code' => '621123207000',
        ]);
        // 祁家庙乡所有村
        // end
        $t13->villages()->create([
            'name' => '官路村',
            'code' => '621123207201',
        ]);
        $t13->villages()->create([
            'name' => '边家堡村',
            'code' => '621123207202',
        ]);
        $t13->villages()->create([
            'name' => '露巴村',
            'code' => '621123207203',
        ]);
        $t13->villages()->create([
            'name' => '红土庄村',
            'code' => '621123207204',
        ]);
        $t13->villages()->create([
            'name' => '祁家沟村',
            'code' => '621123207205',
        ]);
        $t13->villages()->create([
            'name' => '石家营村',
            'code' => '621123207206',
        ]);
        $t13->villages()->create([
            'name' => '川套村',
            'code' => '621123207207',
        ]);
        $t13->villages()->create([
            'name' => '乔家沟村',
            'code' => '621123207208',
        ]);
        $t13->villages()->create([
            'name' => '金家坪村',
            'code' => '621123207209',
        ]);
        $t13->villages()->create([
            'name' => '烟雾沟村',
            'code' => '621123207210',
        ]);
        $t13->villages()->create([
            'name' => '瓦楼村',
            'code' => '621123207211',
        ]);
        $t13->villages()->create([
            'name' => '大寨子村',
            'code' => '621123207212',
        ]);
        $t13->villages()->create([
            'name' => '郭家山村',
            'code' => '621123207213',
        ]);
        // 祁家庙乡所有村
        // end

        $t14 = $c1->towns()->create([
            'name' => '上湾乡',
            'code' => '621123208000',
        ]);
        // 上湾乡所有村
        // start
        $t14->villages()->create([
            'name' => '水家窑村',
            'code' => '621123208201',
        ]);
        $t14->villages()->create([
            'name' => '上湾村',
            'code' => '621123208202',
        ]);
        $t14->villages()->create([
            'name' => '元树村',
            'code' => '621123208203',
        ]);
        $t14->villages()->create([
            'name' => '尖山村',
            'code' => '621123208204',
        ]);
        $t14->villages()->create([
            'name' => '杨家寺村',
            'code' => '621123208205',
        ]);
        $t14->villages()->create([
            'name' => '侯家寺村',
            'code' => '621123208206',
        ]);
        $t14->villages()->create([
            'name' => '朱堤村',
            'code' => '621123208207',
        ]);
        $t14->villages()->create([
            'name' => '周家窑村',
            'code' => '621123208208',
        ]);
        $t14->villages()->create([
            'name' => '常家坪村',
            'code' => '621123208209',
        ]);
        $t14->villages()->create([
            'name' => '凡家洼村',
            'code' => '621123208210',
        ]);
        $t14->villages()->create([
            'name' => '大庄村',
            'code' => '621123208211',
        ]);
        // 上湾乡所有村
        // end

        $t15 = $c1->towns()->create([
            'name' => '峡城乡',
            'code' => '	621123209000',
        ]);

        // 峡城乡所有村
        // start
        $t15->villages()->create([
            'name' => '脱甲山村',
            'code' => '621123209201',
        ]);
        $t15->villages()->create([
            'name' => '大林村',
            'code' => '621123209202',
        ]);
        $t15->villages()->create([
            'name' => '杨庄村',
            'code' => '621123209203',
        ]);
        $t15->villages()->create([
            'name' => '峡城村',
            'code' => '621123209204',
        ]);
        $t15->villages()->create([
            'name' => '康家村',
            'code' => '621123209205',
        ]);
        $t15->villages()->create([
            'name' => '祁家寨村',
            'code' => '621123209206',
        ]);
        $t15->villages()->create([
            'name' => '门楼寺村',
            'code' => '621123209207',
        ]);
        $t15->villages()->create([
            'name' => '秋池湾村',
            'code' => '621123209208',
        ]);
        // 峡城乡所有村
        // end

        $t16 = $c1->towns()->create([
            'name' => '田家河乡',
            'code' => '	621123210000',
        ]);

        // 田家河乡所有村
        // start
        $t16->villages()->create([
            'name' => '香卜路村',
            'code' => '	621123210201',
        ]);
        $t16->villages()->create([
            'name' => '元古堆村',
            'code' => '	621123210202',
        ]);
        $t16->villages()->create([
            'name' => '田家河村',
            'code' => '	621123210203',
        ]);
        $t16->villages()->create([
            'name' => '新集村',
            'code' => '	621123210204',
        ]);
        $t16->villages()->create([
            'name' => '西沟村',
            'code' => '	621123210205',
        ]);
        $t16->villages()->create([
            'name' => '汤尕沟村',
            'code' => '	621123210206',
        ]);
        $t16->villages()->create([
            'name' => '韦家河村',
            'code' => '	621123210207',
        ]);
        $t16->villages()->create([
            'name' => '高石崖村',
            'code' => '	621123210208',
        ]);
        // 田家河乡所有村
        // end
    }
}

