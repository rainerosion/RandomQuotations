/*
 Navicat Premium Data Transfer

 Source Server         : word.rainss.cn
 Source Server Type    : MySQL
 Source Server Version : 50637
 Source Host           : word.rainss.cn
 Source Schema         : word_rainss_cn

 Target Server Type    : MySQL
 Target Server Version : 50637
 File Encoding         : 65001

 Date: 06/08/2020 19:50:39
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for rains_lyb
-- ----------------------------
DROP TABLE IF EXISTS `rains_lyb`;
CREATE TABLE `rains_lyb`  (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `txt` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `time` datetime(0) NOT NULL,
  `userid` int(10) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of rains_lyb
-- ----------------------------

-- ----------------------------
-- Table structure for rains_notice
-- ----------------------------
DROP TABLE IF EXISTS `rains_notice`;
CREATE TABLE `rains_notice`  (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `time` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of rains_notice
-- ----------------------------
INSERT INTO `rains_notice` VALUES (1, '雨落凋殇旗下语录系统正式启用～', '2017-03-11 16:01:05');
INSERT INTO `rains_notice` VALUES (2, '网站正式启用HTTPS，接口支持HTTPS了~~~', '2017-05-29 01:45:17');
INSERT INTO `rains_notice` VALUES (4, '请务必不要出现或涉及黄赌毒等的语录条目，如果出现将会被删除。！', '2019-09-30 20:49:03');

-- ----------------------------
-- Table structure for rains_own
-- ----------------------------
DROP TABLE IF EXISTS `rains_own`;
CREATE TABLE `rains_own`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `txt` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `author` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `kind` int(1) NOT NULL,
  `userid` int(10) NULL DEFAULT NULL,
  `time` datetime(0) NULL DEFAULT NULL,
  `share` int(1) NULL DEFAULT 0,
  `sharetime` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of rains_own
-- ----------------------------

-- ----------------------------
-- Table structure for rains_sjyl
-- ----------------------------
DROP TABLE IF EXISTS `rains_sjyl`;
CREATE TABLE `rains_sjyl`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `txt` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 391 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of rains_sjyl
-- ----------------------------
INSERT INTO `rains_sjyl` VALUES (1, '无法舍弃两个方中的任何一方，那不是温柔，那不过是软弱罢了。——神代利世《东京食尸鬼》');
INSERT INTO `rains_sjyl` VALUES (2, '这世上所有的不公平都是因为当事人能力的不足。——石田スイ《东京食尸鬼》');
INSERT INTO `rains_sjyl` VALUES (3, '如果我闭上了双眼，看到的是黑暗的话，那么当我睁开眼睛去看这个世界的时候，是否会是一片光明？——《东京食尸鬼》');
INSERT INTO `rains_sjyl` VALUES (4, '你觉得被圈养的鸟儿为什么无法自由地翱翔天际？是因为鸟笼不是属于它的东西。——《东京食尸鬼》');
INSERT INTO `rains_sjyl` VALUES (5, '人的生存只有俩种：“美丽的活着”，亦或“为美丽的人活着”。——尼克《东京食尸鬼》');
INSERT INTO `rains_sjyl` VALUES (6, '要么变强改变一切，要么一直做被伤害的人。——《东京食尸鬼》');
INSERT INTO `rains_sjyl` VALUES (7, '世上根本没有运气 ，所谓的运气不过就是情况与情况的结合 。——神代利世《东京食尸鬼》');
INSERT INTO `rains_sjyl` VALUES (8, '只要我尚存一丝气息，你便是我永生难忘的梦。——《东京食尸鬼》');
INSERT INTO `rains_sjyl` VALUES (9, '真正重要的东西，不管痛苦也好、悲伤也好。都要努力到底，就算失去生命，也要用双手来保护到底。——金木《东京喰种》');
INSERT INTO `rains_sjyl` VALUES (10, '比起做伤害别人的人，做一个被伤害的人，善良的人这样便很幸福。——《东京食尸鬼》');
INSERT INTO `rains_sjyl` VALUES (11, '是天使借给魔鬼他的面容，还是魔鬼借给天使他的镰刀。——《东京食尸鬼》');
INSERT INTO `rains_sjyl` VALUES (12, '或许前路永夜，即便如此我也要前进，因为星光即使微弱也会为我照亮前路——宫园薰《四月是你的谎言》');
INSERT INTO `rains_sjyl` VALUES (13, '你的所言所行，全都闪烁着光芒，太过刺目，于是我闭上双眼，但内心还是无法停止对你的憧憬。——有马公生《四月是你的谎言》');
INSERT INTO `rains_sjyl` VALUES (14, '你驻足于春色中，于那独一无二的春色之中——有马公生《四月是你的谎言》');
INSERT INTO `rains_sjyl` VALUES (15, '在美丽的谎言中，一个走出了深渊，一个走向了天堂。——《四月是你的谎言》');
INSERT INTO `rains_sjyl` VALUES (16, '仿佛要消失般的羸弱，但是，仍旧拼命绽放着光芒。怦怦，怦怦，如同心跳一般，这就是生命之灯。——《四月是你的谎言》');
INSERT INTO `rains_sjyl` VALUES (17, '星星在你的头顶上闪耀着，与你交互诉说的话语，一句一句地，如同星点般翩然落至眼前。——有马公生《四月是你的谎言》');
INSERT INTO `rains_sjyl` VALUES (18, '正因为有了音乐，才有了相遇的瞬间，有了相会的感动，有了相逢的人们，有了邂逅的思念。——有马公生《四月是你的谎言》');
INSERT INTO `rains_sjyl` VALUES (19, '就算悲伤难抑，遍体鳞伤地处于谷底，也不能停止演奏！——宫园薰《四月是你的谎言》');
INSERT INTO `rains_sjyl` VALUES (20, '你既然已经做出了选择，又何必去问为什么选择。——《秦时明月》');
INSERT INTO `rains_sjyl` VALUES (21, '星星为什么看起来如此渺小，是因为它把自己放得太高。——《秦时明月》');
INSERT INTO `rains_sjyl` VALUES (22, '要想成为强者，就不要回避心里的恐惧，恐惧并不是弱点。强者，是要让你的敌人比你更恐惧 。——盖聂《秦时明月》');
INSERT INTO `rains_sjyl` VALUES (23, '有些梦想虽然遥不可及，但不是不可能实现。只要我足够的强。——盖聂《秦时明月》');
INSERT INTO `rains_sjyl` VALUES (24, '失败的人只有一种。就是在抵达成功之前放弃的人——盖聂《秦时明月》');
INSERT INTO `rains_sjyl` VALUES (25, '勇敢，不是靠别人为他担心而证明的，强者，要能够使亲人和朋友感觉到安全和放心。——盖聂《秦时明月》');
INSERT INTO `rains_sjyl` VALUES (26, '弱者没有资格要求公平。——卫庄《秦时明月》');
INSERT INTO `rains_sjyl` VALUES (27, '浮舟相随：京洛雪浅，阡陌千灯，恍然一梦，长歌命中。——少司命《秦时明月》');
INSERT INTO `rains_sjyl` VALUES (28, '从来没有想过这个背影我会用一辈子去眺望。——赤练《秦时明月》');
INSERT INTO `rains_sjyl` VALUES (29, '天下皆白，唯我独黑；非攻墨门，兼爱平生。——《秦时明月》');
INSERT INTO `rains_sjyl` VALUES (30, '有些时候后悔本身就是一种无法偿还的代价。——《秦时明月》');
INSERT INTO `rains_sjyl` VALUES (31, '得到了不该得到的，就会失去不该失去的。——韩信《秦时明月》');
INSERT INTO `rains_sjyl` VALUES (32, '秦时古梦情犹在，明月皓空情正浓。羽兰相伴情相随，雪高执手情难离。——《秦时明月》');
INSERT INTO `rains_sjyl` VALUES (33, '身锁樊笼凭遗落，飞琼清影曲无弦。弹指尘梦空山语，真意何妨我共兼。——《秦时明月》');
INSERT INTO `rains_sjyl` VALUES (34, '记忆在时间中尘封，往事如流水匆匆逝去，生命花瓣在冬夜飘零，犹如停留在叶面的晨露。——《秦时明月》');
INSERT INTO `rains_sjyl` VALUES (35, '我们仰望著同一片天空却看著不同的地方。——新海诚《秒速5厘米》');
INSERT INTO `rains_sjyl` VALUES (36, '一朵花坠落的速度,连时间都放慢了脚步。——《秒速五厘米》');
INSERT INTO `rains_sjyl` VALUES (37, '秒速5厘米，那是樱花飘落的速度，那么怎样的速度，才能走完我与你之间的距离？——新海诚《秒速五厘米》');
INSERT INTO `rains_sjyl` VALUES (38, '总在不停寻觅你的踪影，无论十字路口抑或梦境之中，明知你不在，却依然不停地找寻。——《秒速5厘米》');
INSERT INTO `rains_sjyl` VALUES (39, '只顾仰望着星空的人注定不会留意到自己下一步是否会跨入深渊。——《秒速五厘米》');
INSERT INTO `rains_sjyl` VALUES (40, '如果愿望能够实现，我愿马上去到你身边，已经没有什么是我做不到的了，我会放下一切抱紧你。——新海诚《秒速5厘米》');
INSERT INTO `rains_sjyl` VALUES (41, '如果，樱花掉落的速度是每秒5厘米，那么两颗心需要多久才能靠近？我要用什么样的速度，才能与你相遇？——《秒速5厘米》');
INSERT INTO `rains_sjyl` VALUES (42, '我想成为一个温柔的人，因为曾被温柔的人那样对待，深深了解那种被温柔相待的感觉。——绿川幸《夏目友人帐》');
INSERT INTO `rains_sjyl` VALUES (43, '记忆是一种相聚的方式，放下是一种自由的形式。不必悲伤，不必忧愁，邂逅的回忆都是美好的故事。——《夏目友人帐》');
INSERT INTO `rains_sjyl` VALUES (44, '最近的烦恼是小小的离别带来的寂寞，一瞬间的邂逅与分别，这一个一个的刹那，我想好好珍惜起来。——绿川幸《夏目友人帐》');
INSERT INTO `rains_sjyl` VALUES (45, '即使这样，我也觉得能遇上你真的太好了。——《夏目友人帐》');
INSERT INTO `rains_sjyl` VALUES (46, '我想要变强。因为我遇到了许多的邂逅、有了想要守护的事物。——《夏目友人帐》');
INSERT INTO `rains_sjyl` VALUES (47, '无论如何思念，也有些东西终究无法企及，那么，忘了就好。——《夏目友人帐》');
INSERT INTO `rains_sjyl` VALUES (48, '若结局非你所愿，就在尘埃落定前奋力一搏。——《夏目友人帐》');
INSERT INTO `rains_sjyl` VALUES (49, '看得见交错的存在，听得见想要沟通的话语，而在今天也细细地品味，名为“邂逅”的那项奇迹。——绿川幸《夏目友人帐》');
INSERT INTO `rains_sjyl` VALUES (50, '一旦被爱过，去爱过，就无法忘记了。——绿川幸《夏目友人帐》');
INSERT INTO `rains_sjyl` VALUES (51, '就算有一天，离别的时刻来临，但那也不一定意味着永别。——《夏目友人帐》');
INSERT INTO `rains_sjyl` VALUES (52, '无意义的理想,迟早会在现实面前崩溃。——《fate zero》');
INSERT INTO `rains_sjyl` VALUES (53, '趁着黑暗逃跑的话只是匹夫的夜盗而已。高奏凯歌离去的话，那就是征服王的掠夺。——RIDER《fate zero》');
INSERT INTO `rains_sjyl` VALUES (54, '梦存高远 志在争霸 这股热情确实值得赞许 但所谓梦 终有一天是要醒来的。——金闪闪《Fate/Zero》');
INSERT INTO `rains_sjyl` VALUES (55, '不过傲慢分为两种。一种是能力过于低下，还有一种是志向异常远大的。前者显得非常愚蠢，后者是难得一见的珍贵种类。——吉尔伽美什《Fate/Zero》');
INSERT INTO `rains_sjyl` VALUES (56, '想要救谁，就意味着救不了其他人。听好，人类能救的，只有自己一方的事物。虽然是理所当然，但这就是正义的伙伴的定义。——卫宫切嗣《Fate/Zero》');
INSERT INTO `rains_sjyl` VALUES (57, '此世原即如此，面对如斯常事何需悲叹？何须惊讶？——吉尔伽美什《Fate/Zero》');
INSERT INTO `rains_sjyl` VALUES (58, '真正的恐惧，不是安静的状态，而是变化的动态，指的就是从希望变成绝望的那一瞬间。——《Fate/Zero》');
INSERT INTO `rains_sjyl` VALUES (59, '伤害别人的人，就有要被伤害的觉悟。——《罪恶王冠》');
INSERT INTO `rains_sjyl` VALUES (60, '就算是对我抱有敌意的人，也是被某个人深爱着而降生在这个世界上的。——集《罪恶王冠》');
INSERT INTO `rains_sjyl` VALUES (61, '我愿为你戴上罪之王冠，即使背负上所有的罪恶与孤独，绝不让你受伤。——《罪恶王冠》');
INSERT INTO `rains_sjyl` VALUES (62, '最深的痛苦，莫过于回忆幸福的时光。——《罪恶王冠》');
INSERT INTO `rains_sjyl` VALUES (63, '当我无计可施，驻足不前时；当我被黑暗覆盖，被绝望淹没时 谁是我的照明灯？——《罪恶王冠》');
INSERT INTO `rains_sjyl` VALUES (64, '我们总是在注意错过太多，却不注意自己拥有多少。——《未闻花名》');
INSERT INTO `rains_sjyl` VALUES (65, '时光再美，怎如初见。——《未闻花名》');
INSERT INTO `rains_sjyl` VALUES (66, '花就算凋零了只剩下淡淡的香味，也会向着太阳散发出香气。——《未闻花名》');
INSERT INTO `rains_sjyl` VALUES (67, '岁月的暖，漫过时间的河，抚过久闭的心扉，我在时光斑驳深处，聆听到花开的声音。——《未闻花名》');
INSERT INTO `rains_sjyl` VALUES (68, '夏之忆，泣凋零，彼日花未名。——《未闻花名》');
INSERT INTO `rains_sjyl` VALUES (69, '只能在回忆里看着你，希望记忆中的你不要离我远去。——《未闻花名》');
INSERT INTO `rains_sjyl` VALUES (70, '所谓道别啊，单方面是不作数的。——《未闻花名》');
INSERT INTO `rains_sjyl` VALUES (71, '隐约雷鸣 阴霾天空 但盼风雨来 能留你在此。——《言叶之庭》');
INSERT INTO `rains_sjyl` VALUES (72, '隐约雷鸣 阴霾天空 即使天无雨 我亦留此地。——《言叶之庭》');
INSERT INTO `rains_sjyl` VALUES (73, '但原来你一直都注视着别的世界。——雪野·百香里《言叶之庭》');
INSERT INTO `rains_sjyl` VALUES (74, '正因为生来什么都没有，因此我们能拥有一切。——《游戏人生》');
INSERT INTO `rains_sjyl` VALUES (75, '比起不做而后悔，不如做了再后悔。——空白《游戏人生》');
INSERT INTO `rains_sjyl` VALUES (76, '正因为是最弱，所以才理解智慧之强——《游戏人生》');
INSERT INTO `rains_sjyl` VALUES (77, '哪里会有在真正的战争中等待对方回合的蠢货啊。——《游戏人生》');
INSERT INTO `rains_sjyl` VALUES (78, '输了不感到悔恨的人，没资格当游戏玩家，不过正因为如此，才会第一次觉得快乐。——《游戏人生》');
INSERT INTO `rains_sjyl` VALUES (79, '把该尽的责任都尽完，才能叫真正的结束。——《游戏人生》');
INSERT INTO `rains_sjyl` VALUES (80, '已经发生了的事情是命中注定无法改变的，重要的是，不能被悲惨的现实击垮，要坚信自己必能克服这样的悲剧。——《游戏人生》');
INSERT INTO `rains_sjyl` VALUES (81, '未知绝不会转变成已知，因为已知又会转变成未知，那里没有终点，昨日的常识并非今日的常识。——阿兹莉尔《游戏人生》');
INSERT INTO `rains_sjyl` VALUES (82, '自己勇敢的做自己，找到超越自己的手段。用不能飞的身体，找出飞上天空的方法。——克拉米·杰尓《游戏人生》');
INSERT INTO `rains_sjyl` VALUES (83, '当你的眼睛一直看着天空，永远不要忘记你的脚始终沾着尘土！——墨鸦《空山鸟语》');
INSERT INTO `rains_sjyl` VALUES (84, '其实牢笼处处都有，有些很美，有些很丑，有些看的见，有些看不见。——《空山鸟语》');
INSERT INTO `rains_sjyl` VALUES (85, '自从厌倦于追寻，我已学会一觅即中；自从一股逆风袭来，我已能抵御八面来风，驾舟而行。——冥王《仁者无敌》');
INSERT INTO `rains_sjyl` VALUES (86, '我并没有说这个世界可怕 只是他真实 而真实绝不会美。——冥王《超兽武装》');
INSERT INTO `rains_sjyl` VALUES (87, '已有的事，后必再有，已行的事，后必再行。——玄易子《仁者无敌》');
INSERT INTO `rains_sjyl` VALUES (88, '当你经过七重的孤独，才能够成为真正的强者。——《超兽武装》');
INSERT INTO `rains_sjyl` VALUES (89, '一个卑鄙的朋友远比一个正直的仇敌要可怕得多。——天羽《超兽武装》');
INSERT INTO `rains_sjyl` VALUES (90, '人的欲望，就如同高山滚石一般，一旦开始，就再也停不下来了。——泰雷《超兽武装》');
INSERT INTO `rains_sjyl` VALUES (91, '每个人都有彷徨的时候，彷徨并不可怕，可怕的是在彷徨中不做抉择。因为一旦有抉择，就不会再彷徨，就会按照既定的方向去行事。——火麟飞《超兽武装》');
INSERT INTO `rains_sjyl` VALUES (92, '真正的强者是不会改变自己的原则的，更不会在胁迫的情况下改变自己的原则。——夜凌云《超兽武装》');
INSERT INTO `rains_sjyl` VALUES (93, '生命的目的，并不是为了存在，而是为了燃烧。燃烧才会有光亮，哪怕只有一瞬的光亮也好。——风耀《超兽武装》');
INSERT INTO `rains_sjyl` VALUES (94, '如果爱,请深爱,千万不要松手； 若不爱,请放开,千万不要回头。——市丸银《死神》');
INSERT INTO `rains_sjyl` VALUES (95, '有时候，我们需要的，只是一颗平静下来的心，因为有了人海，所以我们的相遇才显得那么意外。——死神《死神》');
INSERT INTO `rains_sjyl` VALUES (96, '如果我手上没有剑，我就无法保护你；如果我一直握着剑，我就无法抱紧你。——茶渡泰虎《死神》');
INSERT INTO `rains_sjyl` VALUES (97, '樱花的掉落只是为了死亡，他们绽放出绚丽的花朵只是不愿被树枝束缚住。——朽木露琪亚《死神》');
INSERT INTO `rains_sjyl` VALUES (98, '天空呢，其实是无色的，它并没有欺骗你，你只是自己的眼睛欺骗了自己。——蓝染惣右介《死神》');
INSERT INTO `rains_sjyl` VALUES (99, '光芒是不可能照遍所有的地方的，有光的地方就一定有影子。——更木剑八《死神》');
INSERT INTO `rains_sjyl` VALUES (100, '我只是在练习和你说永别。——久保带人《死神》');
INSERT INTO `rains_sjyl` VALUES (101, '心，并不在身体里。当你在思考什么的时候，当你在思念谁的时候，心就会在那里产生。——志波海燕《死神》');
INSERT INTO `rains_sjyl` VALUES (102, '笑是对身边的事物感到一瞬间的幸福而表现出来的东西。——朋也《Clannad》');
INSERT INTO `rains_sjyl` VALUES (103, '我们就如同花儿的种子从今以后就要在风儿的吹拂下展开旅行了，为了在新的地方，迎接新的相遇。——宫泽有纪宁《Clannad》');
INSERT INTO `rains_sjyl` VALUES (104, '平静与痛苦，你觉得它们之中的哪一个才是爱所带来的真正感觉呢。——春原阳平《Clannad》');
INSERT INTO `rains_sjyl` VALUES (105, '最初的一步，泪水之后再一次，雕刻的风景线，消逝在黄昏中的风，直到梦的最后。——一枝赖琴美《Clannad》');
INSERT INTO `rains_sjyl` VALUES (106, '人生在外一定会遭遇到各种各样的事物，但等到恰当的时机，又会像潮汐一样承载着各种各样的收获回到我们身边，像大海一样有着宽广的温柔。——冈崎渚《Clannad》');
INSERT INTO `rains_sjyl` VALUES (107, '这一切并非所愿，但我们从不悲伤。——《Clannad》');
INSERT INTO `rains_sjyl` VALUES (108, '比起真正的拿在手上，只是看看会更加有乐趣哦，把所有的东西都想象成自己的，那样不是更加有趣吗。——藤林杏《Clannad》');
INSERT INTO `rains_sjyl` VALUES (109, '每一个人，只要活着，就会不停的失去。——冈崎汐《Clannad》');
INSERT INTO `rains_sjyl` VALUES (110, '什么都无所谓，只想在你身边。什么都无所谓，只想和你说话。什么都无所谓，所以请你不要逃避。——风早翔太《好想告诉你》');
INSERT INTO `rains_sjyl` VALUES (111, '我曾以为我早已习惯这些，但应太过高兴，以致忘了如何去习惯。——黑沼爽子《好想告诉你》');
INSERT INTO `rains_sjyl` VALUES (112, '刚才一直在想重要的人为什么不重视我，不跟着我的步调，不触碰我的身体，我什么时候变得这样拘泥了。——桃园奈奈生《元气少女缘结神》');
INSERT INTO `rains_sjyl` VALUES (113, '我爱她，这个世界最重要的，就算拿任何东西交换也好，也想共度此生。——《元气少女缘结神》');
INSERT INTO `rains_sjyl` VALUES (114, '只要你待在我能看的见的地方就好了。——《元气少女缘结神》');
INSERT INTO `rains_sjyl` VALUES (115, '我会永远爱你 直到你厌烦为止 所以永远呆在我身边吧。——巴卫《元气少女缘结神》');
INSERT INTO `rains_sjyl` VALUES (116, '如果你的选择是地狱的尽头，那么我愿意陪你一起堕落！——四月《偷星九月天》');
INSERT INTO `rains_sjyl` VALUES (117, '是金子总会发光，但我不是金子，我只是块铁。但即使如此，我也要发出属于铁的光芒！——琉星《偷星九月天》');
INSERT INTO `rains_sjyl` VALUES (118, '讨厌一个人很快就会忘记，为一个人伤心，却会难过很久吧。——琉星《偷星九月天》');
INSERT INTO `rains_sjyl` VALUES (119, '即使我们的世界被分开，但记忆却已超越时空。——《偷星九月天》');
INSERT INTO `rains_sjyl` VALUES (120, '死在完美的梦中，比活在痛苦的现实中要幸福。——莉莉丝《偷星九月天》');
INSERT INTO `rains_sjyl` VALUES (121, '没有人可以改变逝去的历史，也没有人可以限定无穷的未来。——玄月《偷星九月天》');
INSERT INTO `rains_sjyl` VALUES (122, '没有未来的未来不是我想要的未来。——《境界的彼方》');
INSERT INTO `rains_sjyl` VALUES (123, '正因为没有意义才有其存在的意义。——亡城《命运石之门》');
INSERT INTO `rains_sjyl` VALUES (124, '如果全世界都否定你的话，那么我就要超过他们更加的肯定你!——五河士道《约会大作战》');
INSERT INTO `rains_sjyl` VALUES (125, '明明想要杀死某种生物，自己却没有做好被杀死的准备，你不觉得这种想法很奇怪吗？——时崎狂三《约会大作战》');
INSERT INTO `rains_sjyl` VALUES (126, '这是我最后一次哭泣，同时这也是我最后一次露出笑容。——鸢一折纸《约会大作战》');
INSERT INTO `rains_sjyl` VALUES (127, '我在死之前已经度过了一个释然的人生，因为那段记忆消失了，所以才误入了这个世界。因为想起了那段记忆，所以才能在这个世界里体会到释然的人生的感觉。——音无《angel beats》');
INSERT INTO `rains_sjyl` VALUES (128, '无论在哪里遇到你，我都会喜欢你的。如果在六十六亿分之一的概率下再次遇到你的话，即使那时候你的身体也依旧还是无法动弹，我也会和你结婚的。——日向秀树《angel beats》');
INSERT INTO `rains_sjyl` VALUES (129, '要拿去的东西只有记忆和作为职人的自尊，仅此而已。——查亚《angel beats》');
INSERT INTO `rains_sjyl` VALUES (130, '“活着是一件很美好的事”。——立华奏《angel beats》');
INSERT INTO `rains_sjyl` VALUES (131, '既无神佛，亦无天使。——由理《angel beats》');
INSERT INTO `rains_sjyl` VALUES (132, '我可能不是最爱你的人，但我最爱的人一定是你。——白井黑子《某科学的超电磁炮》');
INSERT INTO `rains_sjyl` VALUES (133, '究竟是要有多可悲，把别人的好扭曲成这样？——御坂美琴《某科学的超电磁炮》');
INSERT INTO `rains_sjyl` VALUES (134, '就算容身之处改变了，我的心意始终是如一的。——固法美伟《某科学的超电磁炮》');
INSERT INTO `rains_sjyl` VALUES (135, '记忆或会消失，但我的心会记着承诺。——《穿越时空的少女》');
INSERT INTO `rains_sjyl` VALUES (136, '“我在未来等你”');
INSERT INTO `rains_sjyl` VALUES (137, '“嗯，我马上去，我会用跑的！”——《穿越时空的少女》');
INSERT INTO `rains_sjyl` VALUES (138, '奇迹不是免费的，如果你祈求了希望，也会散播出同等的绝望。——佐仓杏子《魔法少女小圆》');
INSERT INTO `rains_sjyl` VALUES (139, '比希望更炽热，比绝望更深邃的，是爱啊！——晓美焰《魔法少女小圆》');
INSERT INTO `rains_sjyl` VALUES (140, '要是别人说怀有希望是错误的事，不管几次我都一定会否定这句话，不管到什么时候。——鹿目圆《魔法少女小圆》');
INSERT INTO `rains_sjyl` VALUES (141, '如果失去你，会有人伤心的，为什么你就是察觉不到呢？想要保护你的人又该怎么办呢？——晓美焰《魔法少女小圆》');
INSERT INTO `rains_sjyl` VALUES (142, '我会一直陪伴在焰身边，看着你们的哦。说不定哪一天，还会再次相遇呢。——鹿目圆香《魔法少女小圆》');
INSERT INTO `rains_sjyl` VALUES (143, '幸福的回忆，美满的回忆不一定会成为救赎，有时候，回忆越是美满便越痛苦，也有时候，会越害怕，无论是对于将要离开的人来说，还是对于被留下的人来说，都不可能会成为一种救赎。——艾拉《可塑性记忆》');
INSERT INTO `rains_sjyl` VALUES (144, '因为悲伤，所以一直微笑。——艾拉《可塑性记忆》');
INSERT INTO `rains_sjyl` VALUES (145, '当一次坏人，并不代表她以后永远都是坏人。——上条当麻《魔法禁书目录》');
INSERT INTO `rains_sjyl` VALUES (146, '即使与世界为敌,我也会保护她和她所在的世界。——镰池和马《魔法禁书目录》');
INSERT INTO `rains_sjyl` VALUES (147, '一个人，不会因为所在位置的不同，灵魂就因此而受到玷污。——一方通行《魔法禁书目录》');
INSERT INTO `rains_sjyl` VALUES (148, '你愿意跟我一起到地狱深处吗？——茵蒂克丝《魔法禁书目录》');
INSERT INTO `rains_sjyl` VALUES (149, '我不想下地狱呢，那么，只好把她从地狱拉上来。——上条当麻《魔法禁书目录》');
INSERT INTO `rains_sjyl` VALUES (150, '让我们不要把过去的不幸重压在我们的记忆上。——不破爱花《绝园的暴风雨》');
INSERT INTO `rains_sjyl` VALUES (151, '黎明之神披着嫣红的衣裳，已踏上了东边的山麓。——吉野《绝园的暴风雨》');
INSERT INTO `rains_sjyl` VALUES (152, '眼前所见，并非己所知。——不破爱花《绝园的暴风雨》');
INSERT INTO `rains_sjyl` VALUES (153, '坚强不是结果，是朝某个目标努力的过程！——朝田诗乃《刀剑神域2》');
INSERT INTO `rains_sjyl` VALUES (154, '人生不仅仅是为了自己而不停向前冲刺，把某人的幸福当成自己的幸福，还有这样的生活方式。——亚丝娜《刀剑神域2》');
INSERT INTO `rains_sjyl` VALUES (155, '没必要的事就不做，必要的事就尽快做。——折木奉太郎《冰菓》');
INSERT INTO `rains_sjyl` VALUES (156, '玩笑限于即兴，留下误会就成了谎言。——福部里志《冰菓》');
INSERT INTO `rains_sjyl` VALUES (157, '避免受诡计欺骗的最好方法,就是弄清诡计的所有手法。——折木奉太郎《冰菓》');
INSERT INTO `rains_sjyl` VALUES (158, '就算一切徒劳无功，就算结果不过如此，我仍然选择我自己认为最好的决定。——吉田一美《灼眼的夏娜》');
INSERT INTO `rains_sjyl` VALUES (159, '喜欢一个人就是单纯想接近她。。——坂井悠二《灼眼的夏娜》');
INSERT INTO `rains_sjyl` VALUES (160, '在死的彼端，一定会是生的道路吗？——大地四神《灼眼的夏娜》');
INSERT INTO `rains_sjyl` VALUES (161, '理所当然的人，理所当然地在一起，这种时光究竟还有多久。——佐藤《灼眼的夏娜》');
INSERT INTO `rains_sjyl` VALUES (162, '梦里不觉秋已深，余情岂是为他人。——冬马和纱《白色相簿2》');
INSERT INTO `rains_sjyl` VALUES (163, '我，已经背叛了，接下来，就只剩你了。——北原春希《白色相簿2》');
INSERT INTO `rains_sjyl` VALUES (164, '即便在迷离的时光流逝中你改变了最初的模样，我也一定会找到你的灵魂。——路卡《无法逃离的背叛》');
INSERT INTO `rains_sjyl` VALUES (165, '只有我懂得，你的痛楚，你的不安，还有你的孤独。——鲁卡·库洛斯桀利亚《无法逃离的背叛》');
INSERT INTO `rains_sjyl` VALUES (166, '不要忘记 无论发生了什么 无论转世多少次……我都深爱你。——由夕《无法逃离的背叛》');
INSERT INTO `rains_sjyl` VALUES (167, '所有人同样受到厚待的平等世界不可能存在。无视于天分与专长的平等世界，是所有人同样受到冷遇的世界。——佐岛勤《魔法科高校的劣等生》');
INSERT INTO `rains_sjyl` VALUES (168, '真正的危机不是机器人像人一样思考，而是人像机器一样思考。——长门有希《凉宫春日的忧郁》');
INSERT INTO `rains_sjyl` VALUES (169, '你曾经意识到过，自己在这地球上是多么渺小的存在吗？我曾经意识到过，而且永远都忘不了。——谷川流《凉宫春日的忧郁》');
INSERT INTO `rains_sjyl` VALUES (170, '在虚构的故事当中追求真实感的人脑袋一定有问题.——阿虚《凉宫春日的忧郁》');
INSERT INTO `rains_sjyl` VALUES (171, '对于虚伪而言，真实的光芒好像过于耀眼了。——拉普拉斯《蔷薇少女》');
INSERT INTO `rains_sjyl` VALUES (172, '这世上没有奇迹，有的是偶然和必然，还有谁做了什么而已！——火村夕《悠久之翼》');
INSERT INTO `rains_sjyl` VALUES (173, '如果忘记了，就请沉默直到记起来为止。——雨宫优子《悠久之翼》');
INSERT INTO `rains_sjyl` VALUES (174, '为他人幸福而撒的谎，就不再是谎言。——羽山瑞希《悠久之翼》');
INSERT INTO `rains_sjyl` VALUES (175, '怀着梦想不放弃是实现梦想的第一步。——新藤千寻《悠久之翼》');
INSERT INTO `rains_sjyl` VALUES (176, '在盲目追寻奇迹的人的身上，是不会发生奇迹的，只有试图用自己的双手创造奇迹的人，才会得到上帝的救赎。——雨宫优子《悠久之翼》');
INSERT INTO `rains_sjyl` VALUES (177, '既然选择了就要负相应的责任，把曾经扯上关系的事情当作什么都没发生就逃避一切，是做不到的。——广野纮《悠久之翼》');
INSERT INTO `rains_sjyl` VALUES (178, '已经失去的事物是不会再回来的。——亚德雷特《六花的勇者》');
INSERT INTO `rains_sjyl` VALUES (179, '我这份不断涌现的思念之情，不想让你知道，但却又不能停止。——贵月一歌《在盛夏等待》');
INSERT INTO `rains_sjyl` VALUES (180, '毕竟人生是有限的。既然如此，哪怕是错觉，也该以本人能满意的方式活着的吧。——妮娜·亚迪拉德《噬血狂袭》');
INSERT INTO `rains_sjyl` VALUES (181, '无论什么人都应该飞向天空，不管什么人，都有一对看不见的翅膀。——守形英四郎《天降之物》');
INSERT INTO `rains_sjyl` VALUES (182, '所谓的命运不过是早已注定的未来！——伊卡洛斯《天降之物》');
INSERT INTO `rains_sjyl` VALUES (183, '忘记是为了再一次义无反顾的眷恋。——血猫《星空club》');
INSERT INTO `rains_sjyl` VALUES (184, '生于黑暗，因而黑暗。——岳徽《星空club》');
INSERT INTO `rains_sjyl` VALUES (185, '现世皆梦，夜梦唯真——浪越《乱步奇谭》');
INSERT INTO `rains_sjyl` VALUES (186, '什么都不知道，不是好事。我就是因为什么都不知道，才会伤害了人。——石动·乃绘《真实之泪》');
INSERT INTO `rains_sjyl` VALUES (187, '充满绝望的深邃黑暗的前方，我看到了闪烁的光辉。——石动·乃绘《真实之泪》');
INSERT INTO `rains_sjyl` VALUES (188, '有时必须破坏原有的一切，受尽伤害，才有办法了解某些事，见到某些风景，体会到某些心情。——天野远子《文学少女》');
INSERT INTO `rains_sjyl` VALUES (189, '灵魂的一半已经因为罪过而落入地狱，剩下的另一半还需要继续留着吗？怎么可以只有一半获救而进入天堂呢？——井上心叶《文学少女》');
INSERT INTO `rains_sjyl` VALUES (190, '正是在对未来没有任何希望的时候，一个人能坚持到什么地步，才真正体现出这个人有多坚强。——贵志祐介《来自新世界》');
INSERT INTO `rains_sjyl` VALUES (191, '当你站的够高，看得够远的时候，就不会被眼前的任何障碍所阻。——风恋晚《风起苍岚》');
INSERT INTO `rains_sjyl` VALUES (192, '世界上不存在无法获得幸福的人，你之所以不幸，只是因为你不希望自己变得幸福而已！——阿良良木历《终物语》');
INSERT INTO `rains_sjyl` VALUES (193, '就算风吹散了冰雪，想念也会留存下来。——羽衣狐《滑头鬼之孙》');
INSERT INTO `rains_sjyl` VALUES (194, '神也好，佛也好，妖怪也好，都不可以遭遇，见到的话，只要静静地等着它过去。——椎桥宽《滑头鬼之孙》');
INSERT INTO `rains_sjyl` VALUES (195, '虚伪的眼泪，会伤害别人，虚伪的笑容，会伤害自己。——玖兰枢《吸血鬼骑士》');
INSERT INTO `rains_sjyl` VALUES (196, '谁都无法成为谁的替代，所以心痛，总是伴随着离别的人。——玖兰枢《吸血鬼骑士》');
INSERT INTO `rains_sjyl` VALUES (197, '因为想见到你，所以我会活着回来，然后，告诉你一句明明早该说的话。——久城一弥《gosick》');
INSERT INTO `rains_sjyl` VALUES (198, '只有在童话里，自我牺牲才能传为佳话而现实中只是逃避的手段。——亚里亚《绯弹的亚里亚》');
INSERT INTO `rains_sjyl` VALUES (199, '能够轻易就放弃的梦想，有存在的价值么？——月咏歌呗《守护甜心》');
INSERT INTO `rains_sjyl` VALUES (200, '就算被厚厚的云层给遮住了，星星依旧存在于那里。但是你明知如此却不抬头仰望天空…——边里唯世《守护甜心》');
INSERT INTO `rains_sjyl` VALUES (201, '人一旦对自己的不足妥协的话，就再也踏不出新的一步了。——佐伯俊《食戟之灵》');
INSERT INTO `rains_sjyl` VALUES (202, '一个人脸上有太多笑，是因为心中有太多泪。——法伊·D·佛罗莱特《翼年代记》');
INSERT INTO `rains_sjyl` VALUES (203, '不想说的话可以不用说，不想笑时……就不要笑了。——小樱《翼年代记》');
INSERT INTO `rains_sjyl` VALUES (204, '因为很坚强，所以也很脆弱！——黑钢《翼年代记》');
INSERT INTO `rains_sjyl` VALUES (205, '有思念你的人在的地方，就是你的归处。——《火影》');
INSERT INTO `rains_sjyl` VALUES (206, '人生就是一列开往坟墓的列车，路途上会有很多站，很难有人可以至始至终陪着走完。当陪你的人要下车时，即使不舍也该心存感激，然后挥手道别。——《千与千寻》');
INSERT INTO `rains_sjyl` VALUES (207, '这世上有一条路无论如何也不能走，那就是歧途，只要走错一步结果都会是粉身碎骨。——《千与千寻》');
INSERT INTO `rains_sjyl` VALUES (208, '知道雪为什么是白色的吗？因为它忘记了自己曾经的颜色。——《叛逆的鲁鲁修》');
INSERT INTO `rains_sjyl` VALUES (209, '许多时候，让我们放不下的，其实并不是对方，而是那些逝去的共同回忆。——《借东西的小人阿莉埃蒂》');
INSERT INTO `rains_sjyl` VALUES (210, '有一天，蓦然回首，你会发现，那个给你许多痛苦的人，却也是你的救赎。——《借东西的小人阿莉埃蒂》');
INSERT INTO `rains_sjyl` VALUES (211, '不请自来而又不告而别的事物，然而即使彼此之交汇过一次，即使微弱得不会被人注意，那也是能够支撑心灵的，重要的邂逅。——《夏目友人帐》');
INSERT INTO `rains_sjyl` VALUES (212, '一举一动，都是承诺，会被另一个人看在眼里，记在心上的。——《悬崖上的金鱼公主》');
INSERT INTO `rains_sjyl` VALUES (213, '也许我所失去的，正是我生命中绝不该放手的东西。——《云之彼端》');
INSERT INTO `rains_sjyl` VALUES (214, '不管你曾经被伤害得有多深，总会有一个人的出现，让你原谅之前生活对你所有的刁难。——《幽灵公主》');
INSERT INTO `rains_sjyl` VALUES (215, '到不了的地方都叫做远方，回不去的世界都叫做家乡，我一直向往的却是比远更远的地方。——《幽灵公主》');
INSERT INTO `rains_sjyl` VALUES (216, '我认为你很幸福，因为你可以选择爱或不爱我。而我只能选择爱或更爱你。——《草莓100%》');
INSERT INTO `rains_sjyl` VALUES (217, '我们也许再也不会见面了吧，因此我绝对不会忘了你的声音，你的眼眸，与你一起看到过的所有的景色，以及，与你一起度过的那个耀眼的夏天。——《草莓100%》');
INSERT INTO `rains_sjyl` VALUES (218, '对不起，我对活一千年没有兴趣，我只要今天能活着就好。——《海贼王》');
INSERT INTO `rains_sjyl` VALUES (219, '人什么时候才会死？被子弹贯穿心脏的时候？不对！得了不治之症的时候？不对！喝下毒蘑菇汤的时候？不对！是被人遗忘的时候。——《海贼王》');
INSERT INTO `rains_sjyl` VALUES (220, '能原谅女人谎言的才是真正的男人。——《海贼王》');
INSERT INTO `rains_sjyl` VALUES (221, '我渴望得到幸福，得到你的幸福，成为你的幸福。——《NANA》');
INSERT INTO `rains_sjyl` VALUES (222, '人们要是没有回忆就活不下去。但是只有回忆的话也活不下去。——《AIR》');
INSERT INTO `rains_sjyl` VALUES (223, '不要被恐怖和愤怒迷住双眼，所有生物只是依借其存在方式而存在的。——《虫师》');
INSERT INTO `rains_sjyl` VALUES (224, '我对这个世界绝望过，但从未对自己绝望过。——《只有神知道的世界》');
INSERT INTO `rains_sjyl` VALUES (225, '多年后，再回想这样的迷茫或许连执著的原因都记不得了，青春就是让你张扬的笑，也给你莫名的痛。——《虞美人盛开的山坡 》');
INSERT INTO `rains_sjyl` VALUES (226, '有些烦恼，丢掉了，才有云淡风轻的机会。——《龙猫》');
INSERT INTO `rains_sjyl` VALUES (227, '只有阳光而无阴影，只有欢乐而无痛苦，那就不是人生。——《岁月的童话》');
INSERT INTO `rains_sjyl` VALUES (228, '虚伪的眼泪会伤害别人，虚伪的笑容会伤害自己。——《叛逆的鲁鲁修》');
INSERT INTO `rains_sjyl` VALUES (229, '有些事不是我不在意，而是我在意了又能怎样。——《樱桃小丸子》');
INSERT INTO `rains_sjyl` VALUES (230, '时间对于人来说，是最温柔的，也是最残酷的要想愈合受伤很深的心，只能转移对你的思念，你所祈求的永遥。——《君望永遥》');
INSERT INTO `rains_sjyl` VALUES (231, '我们不应该流泪，因为那是对心而言肉体的败北，也是我们无法违心而存在的证明。——《死神》');
INSERT INTO `rains_sjyl` VALUES (232, '因为你们都不哭啊，所以我才代替你们哭。——《钢之炼金术师》');
INSERT INTO `rains_sjyl` VALUES (233, '我们的孤独就像天空中漂浮的城市，仿佛是一个秘密，却无从述说。——《天空之城》');
INSERT INTO `rains_sjyl` VALUES (234, '“忘记”本身就是一件不可能的事，别妄想了。——《我们的存在》');
INSERT INTO `rains_sjyl` VALUES (235, '我们一直在一起，所以最后也想在你身旁。就算时间回不到最初，我也希望能走到最后。——《火影》');
INSERT INTO `rains_sjyl` VALUES (236, '自由不是无法无天，而是遵循自己的规则而活。——《银魂》');
INSERT INTO `rains_sjyl` VALUES (237, '如果你是魔女，那我只要变成魔王就好了。——《叛逆的鲁鲁修》');
INSERT INTO `rains_sjyl` VALUES (238, '如果我是那雨滴的话。那么，我能够像把不曾交会的天空与大地连接起来那样，把某人的心串联起来吗？——《死神》');
INSERT INTO `rains_sjyl` VALUES (239, '这世界上是没有一条路能让所有人都得到幸福的。——《X战记》');
INSERT INTO `rains_sjyl` VALUES (240, '没有人只属于自己，每个人都与他人相连，与他人分享着某些东西。这就是为什么人始终无法自由，为什么人会有喜悦，悲伤，以及爱。——《xxxholic》');
INSERT INTO `rains_sjyl` VALUES (241, '有些人视你为对他来说很重要的人，你却没有察觉出这份情感，还一味地不关心自己。你不愿意看到别人被伤害，却不介意伤到自己，你甚至不了解那些认为你很重要的人，看到你受伤时会有多么痛苦。——《xxxholic》');
INSERT INTO `rains_sjyl` VALUES (242, '日出日落，朝颜花只一日。日落日出，附近花开一片。但已非昨日之花。然，艳丽不改。——《虫师》');
INSERT INTO `rains_sjyl` VALUES (243, '突然之间，我还想再在这个世上多活几天。——《死亡笔记》');
INSERT INTO `rains_sjyl` VALUES (244, '只要是活着的东西，就算是神，我也杀给你看——两仪式《空之境界》');
INSERT INTO `rains_sjyl` VALUES (245, '我认为，为了什么事而哭泣是非常特别的行为，那是会替周围带来阴影的悲伤表现。即使自己再怎样悲伤，也不会因为什么而落泪，如果落泪的话，他就等于成为某人的特别之人。——《空之境界》');
INSERT INTO `rains_sjyl` VALUES (246, '永往直前的努力是好事，偶尔也得回眸走过的路。——《浜虎》');
INSERT INTO `rains_sjyl` VALUES (247, '真正强大的人不会在意周围的眼光，靠自己就能毅力不倒。——《浜虎》');
INSERT INTO `rains_sjyl` VALUES (248, '就算活着感受到痛苦，也要重视起生存下去的重量。——《野良神》');
INSERT INTO `rains_sjyl` VALUES (249, '我失去归宿的现实才是我真正的归宿。——《妄想代理人》');
INSERT INTO `rains_sjyl` VALUES (250, '如果与你相遇是我的好运，那么其他的事情也一定不坏。——《邻座的怪同学》');
INSERT INTO `rains_sjyl` VALUES (251, '你重要的东西，也是我要去珍惜的。——《邻座的怪同学》');
INSERT INTO `rains_sjyl` VALUES (252, '如果你死了,我会用我的死来复活你。——《东京暗鸦》');
INSERT INTO `rains_sjyl` VALUES (253, '真正让我难受的，大概是因为让你看到如此狼狈的自己。——《元气少女缘结神》');
INSERT INTO `rains_sjyl` VALUES (254, '对于我来说，只要能守护你，就已足矣。——《元气少女缘结神》');
INSERT INTO `rains_sjyl` VALUES (255, '我早就闭上了双眼，我的目的只在于黑暗之中。——宇智波佐助《火影》');
INSERT INTO `rains_sjyl` VALUES (256, '要是喜欢一个人，就要连那个人脏的地方一起喜欢。——坂田银时《银魂》');
INSERT INTO `rains_sjyl` VALUES (257, '一定要保护自己的梦想，即使牺牲一切。——大崎娜娜《NANA》 ');
INSERT INTO `rains_sjyl` VALUES (258, '正因为我们看不见，那才可怕。——黑崎一护《死神》');
INSERT INTO `rains_sjyl` VALUES (259, '不幸的人总是在创造比自己更不幸的人。——露西·哈特菲利亚《妖精的尾巴》');
INSERT INTO `rains_sjyl` VALUES (260, '梦总是有会醒来的时候，不会醒的梦总有一天会变成悲伤。——小满《AIR》');
INSERT INTO `rains_sjyl` VALUES (261, '对于世界末日的传说，我不会特别在意。只要喜欢的人在身边，就无所谓……——西野司《草莓100%》');
INSERT INTO `rains_sjyl` VALUES (262, '我一直都想证明：努力是能够超越天才的!——李洛克《火影》');
INSERT INTO `rains_sjyl` VALUES (263, '想哭的时候能哭出来，也是一种坚强。——法伊·D·佛罗莱特《翼·年代记》');
INSERT INTO `rains_sjyl` VALUES (264, '不相信自己的人， 连努力的价值都没有。——凯《火影忍者》');
INSERT INTO `rains_sjyl` VALUES (265, '憧憬是距离理解最遥远的感情。——蓝染惣右介《死神》');
INSERT INTO `rains_sjyl` VALUES (266, '请不要对我温柔……因为我无以回报……——宵风《隐王》');
INSERT INTO `rains_sjyl` VALUES (267, '其实...根本就没有什么天堂和地狱吧....——夜神月《死亡笔记》');
INSERT INTO `rains_sjyl` VALUES (268, '闭上眼睛想象世界，我能看到什么？——亚连·沃克《驱魔少年》');
INSERT INTO `rains_sjyl` VALUES (269, '没有任何回忆是可以遗忘的。——本田透《水果篮子》');
INSERT INTO `rains_sjyl` VALUES (270, '有些事情，可以理解但无法接受！——阿斯兰·萨拉《机动战士高达Seed》');
INSERT INTO `rains_sjyl` VALUES (271, '为了所爱的人，就连星星的轨迹我也要改变！——帝释天《圣传》');
INSERT INTO `rains_sjyl` VALUES (272, '痛苦可以成为两人间的某种牵绊。——我妻草灯《LOVELESS》');
INSERT INTO `rains_sjyl` VALUES (273, '正因为不会发生，所以才叫奇迹。——美坂栞《Kanon》');
INSERT INTO `rains_sjyl` VALUES (274, '当你想做一件事，却无能为力的时候，是最痛苦的。——基拉·大和《高达SEED》');
INSERT INTO `rains_sjyl` VALUES (275, '无论谁的心中，都有自己的歌。——月咏歌呗《守护甜心》');
INSERT INTO `rains_sjyl` VALUES (276, '无论身边围着多少人，我永远都是那么孤独。——鸣海步《推理之绊》');
INSERT INTO `rains_sjyl` VALUES (277, '迷茫不仅会害了自己，甚至会害了自己想要守护的人。——相泽虹一《隐之王》');
INSERT INTO `rains_sjyl` VALUES (278, '此时此刻，我竟不知究竟是悲伤，还是快乐。——端木蓉《秦时明月》');
INSERT INTO `rains_sjyl` VALUES (279, '不管夜晚多么黑暗，黎明总是会到来。——夏莉·菲内特《反叛的鲁路修》');
INSERT INTO `rains_sjyl` VALUES (280, '世界上有些事，还是让它永远成为谜比较好。——黑羽快斗《名侦探柯南》');
INSERT INTO `rains_sjyl` VALUES (281, '什么都无所谓只想在你身边，什么都无所谓只想和你说话，什么都无所谓所以请你不要逃避。——风早翔太《好想告诉你》');
INSERT INTO `rains_sjyl` VALUES (282, '我不会让任何人看到我软弱的一面。——桔梗《犬夜叉》 ');
INSERT INTO `rains_sjyl` VALUES (283, '人的怨恨是无止尽的。——阎魔爱《地狱少女》');
INSERT INTO `rains_sjyl` VALUES (284, '梦想是否无聊并不是别人来决定的，不管是什么样的梦想，自己拼命努力去追寻才是最重要的！——日奈森亚梦《守护甜心》');
INSERT INTO `rains_sjyl` VALUES (285, '我总觉得，他在我身边呢。——毛利兰《名侦探柯南》');
INSERT INTO `rains_sjyl` VALUES (286, '对别人抱有期待，只能让自己受伤。——松前绪花《花开伊吕波》');
INSERT INTO `rains_sjyl` VALUES (287, '堕落是不需要理由的。——坂上智代《CLANNAD》');
INSERT INTO `rains_sjyl` VALUES (288, '在走廊里摔倒会流鼻血，在人生中摔倒会流眼泪。——栉枝实乃梨《龙与虎》');
INSERT INTO `rains_sjyl` VALUES (289, '没有你在的天界，就算我活着也没有任何意义。——干打婆王《圣传》 ');
INSERT INTO `rains_sjyl` VALUES (290, '每个人做任何事,都只是为了自己,虽然有人会说,我希望能为哪个人做些什么,但事实上,也只不过是希望看到别人幸福时,自己也有份幸福感罢了。——皇昴流《东京巴比伦》');
INSERT INTO `rains_sjyl` VALUES (291, '优姬，我想告诉你，美的不是这个世界，而是承载这个世界的美丽的你的眼神。——玖兰枢《吸血鬼骑士》');
INSERT INTO `rains_sjyl` VALUES (292, '比起牺牲自己的圣人,我更愿意成为不明事理的勇者，而且救你也要救的彻底。——逆回十六夜《问题儿童都来自异世界》');
INSERT INTO `rains_sjyl` VALUES (293, '重要的，珍惜的，一直在身边，一旦成为理所当然，就难以发现。——《轻音少女》');
INSERT INTO `rains_sjyl` VALUES (294, '不动声色，无以言表，扮演温柔。——《言叶之庭》');
INSERT INTO `rains_sjyl` VALUES (295, '时间会刺破青春的华美精致，会把平行线刻上美人的额角；它会吞噬稀世珍宝、天生丽质。没有什么能逃过它横扫的镰刀。 ——莎士比亚');
INSERT INTO `rains_sjyl` VALUES (296, '嫉妒让我们看清自己，自己的敌意，自己丑恶的企图心和自己“所应得”的。 ——帕鲁尔·赛加尔《嫉妒的颂歌》');
INSERT INTO `rains_sjyl` VALUES (297, '所有的伟人都是从艰苦中脱颖而出的。 ——爱默生');
INSERT INTO `rains_sjyl` VALUES (298, '人的心只容得下一定程度的绝望，海绵已经吸够了水，即使大海从它上面流过，也不能再给它增添一滴水了。 ——维克多·雨果《巴黎圣母院》');
INSERT INTO `rains_sjyl` VALUES (299, 'Faith: not wanting to know what the truth is. 信仰就是不想知道真相是什么。——尼采');
INSERT INTO `rains_sjyl` VALUES (300, '只有今天会服从的人，明天才可以指挥。——希特勒');
INSERT INTO `rains_sjyl` VALUES (301, '对敌人来说没有什么地方比坟墓更好了。——希特勒');
INSERT INTO `rains_sjyl` VALUES (302, '很多时候，一个人选择了行走，不是因为欲望，也并非诱惑，他仅仅是听到了自己内心的声音。——安妮宝贝《蔷薇岛屿》');
INSERT INTO `rains_sjyl` VALUES (303, '死并非生的对立面，而作为生的一部分永存。——村上春树《挪威的森林》');
INSERT INTO `rains_sjyl` VALUES (304, '真正的精神强者必是宽容的，因为他足够富裕。嫉妒是弱者的品质。——周国平《周国平论人生》');
INSERT INTO `rains_sjyl` VALUES (305, '人生如逆旅，我亦是行人。——苏轼《临江仙》');
INSERT INTO `rains_sjyl` VALUES (306, '人类从历史学到的唯一的教训,就是人类没有从历史中吸取任何教训。——黑格尔');
INSERT INTO `rains_sjyl` VALUES (307, '世界上最伟大的事，是一个人懂得如何作自己的主人。——蒙田《蒙田随笔全集》');
INSERT INTO `rains_sjyl` VALUES (308, '若我会见到你，事隔经年。我如何和你招呼，以眼泪，以沉默。——拜伦《春逝》');
INSERT INTO `rains_sjyl` VALUES (309, '人生最遗憾的，莫过于轻易地放弃了不该放弃的，固执地坚持了不该坚持的。 ——柏拉图');
INSERT INTO `rains_sjyl` VALUES (310, '不拼一把，你怎么知道自己是人物还是废物！');
INSERT INTO `rains_sjyl` VALUES (311, '热情和欲望可以突破一切难关。');
INSERT INTO `rains_sjyl` VALUES (312, '没用的东西，再便宜也不要买；不爱的人，再寂寞也不要依赖。');
INSERT INTO `rains_sjyl` VALUES (313, '工欲善其事，必先利其器。——孔子');
INSERT INTO `rains_sjyl` VALUES (314, '我们要追求那真实的功业，要追求对宇宙人生更深远的了解；要追求永远超过狭小生活圈子之外的更有用的东西。——罗曼·罗兰');
INSERT INTO `rains_sjyl` VALUES (315, '当两个人果然在一起后，爱情就会由蜜糖化为口香糖，愈嚼愈淡，淡到后来竟是涩涩苦苦的，不由得你不吐掉。——朵拉');
INSERT INTO `rains_sjyl` VALUES (316, '你们这些生在今日的人，你们这些青年，现在要轮到你们了。踏实在我们的身体上面向前吧。但愿你们比我们更伟大、更幸福。——罗曼·罗兰');
INSERT INTO `rains_sjyl` VALUES (317, '盛年不重来，一日难再晨。及时当勉励，岁月不待人。——陶渊明');
INSERT INTO `rains_sjyl` VALUES (318, '我的人生哲学是工作，我要揭示大自然的奥秘，并以此为人类服务。我们在世的短暂的一生中，我不知道还有什么比这种服务更好的了。——爱迪生');
INSERT INTO `rains_sjyl` VALUES (319, '无论鸟的翅膀是多么完美，如果不凭借着空气，它是永远不会飞翔高空的。事实就是科学家的空气。——巴甫洛夫');
INSERT INTO `rains_sjyl` VALUES (320, '儿童集体里的舆论力量，完全是一种物质的实际可以感触到的教育力量。 ——马卡连柯');
INSERT INTO `rains_sjyl` VALUES (321, '以信接人，天下信人；不以信接人，妻子疑之。——杨泉');
INSERT INTO `rains_sjyl` VALUES (322, '想要有空余时间，就不要浪费时间。');
INSERT INTO `rains_sjyl` VALUES (323, '一言之美，贵于千金。——葛洪');
INSERT INTO `rains_sjyl` VALUES (324, '民无信不立。——孔子');
INSERT INTO `rains_sjyl` VALUES (325, '君子忧道不忧贫。——孔子');
INSERT INTO `rains_sjyl` VALUES (326, '人而无信，不知其可也。——孔子');
INSERT INTO `rains_sjyl` VALUES (327, '言不信者，行不果。——墨子');
INSERT INTO `rains_sjyl` VALUES (328, '诚信者，天下之结也。——墨子');
INSERT INTO `rains_sjyl` VALUES (329, '侈而惰者贫，而力而俭者富。——韩非子');
INSERT INTO `rains_sjyl` VALUES (330, '贫而无谄，富而无骄。——子贡');
INSERT INTO `rains_sjyl` VALUES (331, '强本而节用，则天不能贫。——荀况');
INSERT INTO `rains_sjyl` VALUES (332, '善气迎人，亲如弟兄；恶气迎人，害于戈兵。——管仲');
INSERT INTO `rains_sjyl` VALUES (333, '人背信则名不达。——刘向');
INSERT INTO `rains_sjyl` VALUES (334, '以诚感人者，人亦诚而应。——程颐');
INSERT INTO `rains_sjyl` VALUES (335, '内不欺已，外不欺人。——弘一大师');
INSERT INTO `rains_sjyl` VALUES (336, '人无忠信，不可立于世。——程颐');
INSERT INTO `rains_sjyl` VALUES (337, '勇敢的人随遇而安，所到之处都是故乡。——马辛杰·菲利普');
INSERT INTO `rains_sjyl` VALUES (338, '没有什么比今天更有价值。——歌德');
INSERT INTO `rains_sjyl` VALUES (339, '如永生般逐梦，如末日般生存。——詹姆斯·迪恩');
INSERT INTO `rains_sjyl` VALUES (340, '别哭泣，别叹息，别呻吟；悲伤唤不回流逝的时光。——弗莱彻');
INSERT INTO `rains_sjyl` VALUES (341, '夸大，是伟大不可或缺的伙伴。——伏尔泰');
INSERT INTO `rains_sjyl` VALUES (342, '要真正了解一个人，需在不幸中考察他。——拿破仑');
INSERT INTO `rains_sjyl` VALUES (343, '我走得很慢，但是我从来不会后退。——林肯');
INSERT INTO `rains_sjyl` VALUES (344, '人生重要的事情就是确定一个伟大的目标，并决心实现它。——歌德');
INSERT INTO `rains_sjyl` VALUES (345, '成功由大量的失误铸就。——肖伯纳');
INSERT INTO `rains_sjyl` VALUES (346, '爱所有人，相信一部分人，不对不起任何人。——莎士比亚');
INSERT INTO `rains_sjyl` VALUES (348, '不要为成功而努力，要为作一个有价值的人而努力。——爱因斯坦');
INSERT INTO `rains_sjyl` VALUES (349, '想象力比知识更为重要。——爱因斯坦');
INSERT INTO `rains_sjyl` VALUES (350, '那些不能牢记着自己的过去的人，命中注定要一再地重复自己的过去。——桑塔雅娜');
INSERT INTO `rains_sjyl` VALUES (351, '人应该先做他应该做的事情，再做他喜欢做的事。');
INSERT INTO `rains_sjyl` VALUES (352, '受苦的人，没有悲观的权利。——尼采');
INSERT INTO `rains_sjyl` VALUES (353, '路再长也有终点，夜再黑也有尽头。——桑给巴尔谚语');
INSERT INTO `rains_sjyl` VALUES (354, '我们要消除这个暗礁，就必须等待时间、机会和有利条件。——狄更斯');
INSERT INTO `rains_sjyl` VALUES (355, '生活中唯一乐趣就是忘却。——托尔斯泰');
INSERT INTO `rains_sjyl` VALUES (356, '暂时的是现实，永生的是理想。——罗曼·罗兰');
INSERT INTO `rains_sjyl` VALUES (357, '幸福越与人共享，它的价值越增加。——森村诚一');
INSERT INTO `rains_sjyl` VALUES (358, '把你的马车拴到星星上(要志向远大)。——爱默生');
INSERT INTO `rains_sjyl` VALUES (359, '进步是今天的活动、明天的保证。——爱默生');
INSERT INTO `rains_sjyl` VALUES (360, '无论你怎样喂狼，它的心总是向着森林的。——屠格涅夫');
INSERT INTO `rains_sjyl` VALUES (361, '对于人类来说，生存本身就是旅行。——东山魁夷');
INSERT INTO `rains_sjyl` VALUES (362, '骤然的幸运造成一个活动家或躁动者，但是经过磨练的幸运却造成了天才。——培根');
INSERT INTO `rains_sjyl` VALUES (363, '成功的道路就是做你能做好的工作，做好你所做的工作，并且丝毫不贪图功名。——朗费罗');
INSERT INTO `rains_sjyl` VALUES (364, '健康为最好的天赋，知足为最大的财富，信任为最佳的品德。——释迦牟尼');
INSERT INTO `rains_sjyl` VALUES (365, '智慧，比知识的内涵丰富得多。——泰戈尔评传');
INSERT INTO `rains_sjyl` VALUES (366, '虽然紫菀草越被人践踏越长得快，可是青春越是浪费，越容易消失。——莎士比亚');
INSERT INTO `rains_sjyl` VALUES (367, '读书愈多，精神就愈健壮勇敢。——高尔基');
INSERT INTO `rains_sjyl` VALUES (368, '巨人的巨著战胜群众的庸俗。——罗曼·罗兰');
INSERT INTO `rains_sjyl` VALUES (369, '在学问上每前进一步，就更接近这真理一步。——托尔斯泰');
INSERT INTO `rains_sjyl` VALUES (370, '人的知识越广，人的本身也越臻完善。——高尔基');
INSERT INTO `rains_sjyl` VALUES (371, '每教好一个孩子，就减少一个败类。——雨果');
INSERT INTO `rains_sjyl` VALUES (372, '春天吹得纷飞的花瓣，并非为了将来的果实而生，只是为了一时的兴会。——泰戈尔');
INSERT INTO `rains_sjyl` VALUES (373, '一个年轻人，心情冷下来时，头脑会变得健全。——巴尔扎克');
INSERT INTO `rains_sjyl` VALUES (374, '使生命变得麻木，这决不是享受。——雨果');
INSERT INTO `rains_sjyl` VALUES (375, '天才寻找障碍，障碍创造天才。——罗曼·罗兰传');
INSERT INTO `rains_sjyl` VALUES (376, '我好比一个筛子，随便你把什么垃圾倒到我身上来，我总能给你筛出歌来。——高尔基');
INSERT INTO `rains_sjyl` VALUES (377, '没有单纯、善良和真实，就没有伟大。——托尔斯泰');
INSERT INTO `rains_sjyl` VALUES (378, '生与死只是脚下的奴仆。——泰戈尔');
INSERT INTO `rains_sjyl` VALUES (379, '即使渴望落空，感觉到渴望的痛苦依然是甜蜜的。——泰戈尔');
INSERT INTO `rains_sjyl` VALUES (380, '不论前途如何，不管发生什么事情，我们都不失去希望：希望是一种美德。——雨果');
INSERT INTO `rains_sjyl` VALUES (381, '神从创造中找到他自己。——泰戈尔');
INSERT INTO `rains_sjyl` VALUES (382, '我创造，所以我生存。——罗曼·罗兰');
INSERT INTO `rains_sjyl` VALUES (383, '人类的真正区别是这样的：光明中人和黑暗中人。——雨果');
INSERT INTO `rains_sjyl` VALUES (384, '社会是一个泥坑，我们得站在高地上。——巴尔扎克');
INSERT INTO `rains_sjyl` VALUES (385, '事业是栏杆，我们扶着它在深渊的边沿上走路。——高尔基');
INSERT INTO `rains_sjyl` VALUES (386, '能够把我们的才能使用到现实上面，这就是幸福。——巴尔扎克');
INSERT INTO `rains_sjyl` VALUES (387, '要想战胜它，就得先了解它。——雨果');
INSERT INTO `rains_sjyl` VALUES (388, '名气就像某些特别的鲜艳的花儿一样含有毒性物质。——巴尔扎克');
INSERT INTO `rains_sjyl` VALUES (389, '青春就像这夕阳一样，离我们越来越远了。  ——花羊羊《喜羊羊与灰太狼》');
INSERT INTO `rains_sjyl` VALUES (390, '真正的强者是不会改变自己的原则的，更不会在胁迫的情况下改变自己的原则。——夜凌云《超兽武装》');

-- ----------------------------
-- Table structure for rains_users
-- ----------------------------
DROP TABLE IF EXISTS `rains_users`;
CREATE TABLE `rains_users`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `passwd` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `mail` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `time` datetime(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `name`(`name`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of rains_users
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
