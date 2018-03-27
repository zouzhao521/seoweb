-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2018-03-27 05:02:42
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `boyou`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL COMMENT '登陆用户名',
  `password` varchar(255) NOT NULL DEFAULT '' COMMENT '密码',
  `realname` varchar(255) DEFAULT NULL COMMENT '真实姓名',
  `email` varchar(640) DEFAULT NULL COMMENT '邮箱',
  `phone` varchar(255) DEFAULT NULL COMMENT '电话',
  `address` varchar(255) DEFAULT NULL COMMENT '企业中文地址',
  `time` datetime DEFAULT NULL COMMENT '注册时间',
  `show` tinyint(5) NOT NULL DEFAULT '1' COMMENT '1显示 0 隐藏',
  `department` int(20) DEFAULT NULL COMMENT '部门',
  `root` tinyint(20) NOT NULL COMMENT '权限等级',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='后台用户表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `realname`, `email`, `phone`, `address`, `time`, `show`, `department`, `root`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', NULL, NULL, NULL, NULL, 1, NULL, 1);

-- --------------------------------------------------------

--
-- 表的结构 `alink`
--

CREATE TABLE IF NOT EXISTS `alink` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL COMMENT '封面图',
  `adimg` varchar(255) DEFAULT NULL COMMENT '广告图',
  `link` varchar(999) DEFAULT NULL COMMENT '链接地址',
  `dd` int(11) NOT NULL DEFAULT '1',
  `ad` int(11) NOT NULL DEFAULT '1',
  `aid` int(11) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='友情链接' AUTO_INCREMENT=20 ;

--
-- 转存表中的数据 `alink`
--

INSERT INTO `alink` (`id`, `title`, `img`, `adimg`, `link`, `dd`, `ad`, `aid`, `type`) VALUES
(2, '测试', '2018-01-06/5a503949196af.jpg', '2018-01-05/5a4ee81450746.jpg', 'http://www.baidu.com', 1, 1, 2, NULL),
(3, '测试2', '2018-01-06/5a50394085927.jpg', '2018-01-05/5a4f0d33cc9e0.jpg', 'http://www.baidu.com', 1, 0, 1, NULL),
(5, '前期', '2018-01-06/5a5039371e251.jpg', '', 'http://www.baidu.com', 1, 1, 0, NULL),
(6, '杨庄镇扎实开展主题党日活动', '2018-01-06/5a50a128182d5.jpg', '', 'https://www.meipian.cn/10wm0f0u?utm_source=singlemessage&amp;from=singlemessage&amp;v=4.2.5&amp;user_id=17407999&amp;uuid=dec5df624e9d12ef6d354a38a8d46954&amp;utm_medium=meipian_android', 0, 1, 4, NULL),
(7, '白面阿飞', '', '', 'https://qr.alipay.com/tsx09848slezfhvengogw73', 1, 1, 4, NULL),
(8, '博友彩票', NULL, NULL, 'www.boyou.cn', 1, 1, 0, NULL),
(9, '犀牛云官网', NULL, NULL, 'http://www.xx.com', 1, 1, 0, NULL),
(10, '彩票软件', NULL, NULL, '', 1, 1, 0, NULL),
(11, '博友安全小贷系统', NULL, NULL, '', 1, 1, 0, NULL),
(12, '博友棋牌游戏系统', NULL, NULL, '', 1, 1, 0, NULL),
(13, '博友彩票销售系统', NULL, NULL, '', 1, 1, 0, NULL),
(14, '博友安全众筹系统', NULL, NULL, 'http://www.ccc.com', 1, 1, 0, NULL),
(15, '牛人众包平台', NULL, NULL, '', 1, 1, 0, NULL),
(16, '犀牛云解决方案', NULL, NULL, '', 1, 1, 0, NULL),
(17, '希光农业', NULL, NULL, '', 1, 1, 0, NULL),
(18, '彩票软件', NULL, NULL, '', 1, 1, 0, NULL),
(19, '彩票资讯', NULL, NULL, 'http://www.ifeng.com', 1, 1, 0, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` mediumtext,
  `writer` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `link` varchar(999) DEFAULT NULL,
  `des` text COMMENT '简单描述',
  `type` varchar(225) DEFAULT NULL,
  `dd` varchar(255) NOT NULL DEFAULT '1' COMMENT '是否删除',
  `img` varchar(999) DEFAULT NULL,
  `aid` int(11) DEFAULT NULL,
  `ad` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=47 ;

--
-- 转存表中的数据 `article`
--

INSERT INTO `article` (`id`, `title`, `content`, `writer`, `time`, `link`, `des`, `type`, `dd`, `img`, `aid`, `ad`) VALUES
(1, '第一篇文章', '&lt;p&gt;&lt;span style=&quot;word-wrap: break-word; color: rgb(67, 74, 84); font-family: &amp;quot;Microsoft YaHei&amp;quot;, SimHei, Verdana, Arial, sans-serif; background-color: rgb(255, 255, 255);&quot;&gt;&lt;span style=&quot;word-wrap: break-word; font-weight: 700;&quot;&gt;NBA投注技巧 助力彩民玩转NBA彩票&lt;/span&gt;&lt;/span&gt;&lt;br style=&quot;word-wrap: break-word; color: rgb(67, 74, 84); font-family: &amp;quot;Microsoft YaHei&amp;quot;, SimHei, Verdana, Arial, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;word-wrap: break-word; color: rgb(67, 74, 84); font-family: &amp;quot;Microsoft YaHei&amp;quot;, SimHei, Verdana, Arial, sans-serif; background-color: rgb(255, 255, 255);&quot;&gt;　　新赛季NBA的临近，NBA竞彩篮球火热起来，其中篮球让分胜负以及大小分最受彩民热捧，另外胜分差由于赔率高，目前也有越来越多的彩民涉足。那么现在就介绍nba竞彩篮球大小分及让分胜负玩法还有胜分差的一些投注技巧和心得，希望对各彩民有用。&lt;/span&gt;&lt;br style=&quot;word-wrap: break-word; color: rgb(67, 74, 84); font-family: &amp;quot;Microsoft YaHei&amp;quot;, SimHei, Verdana, Arial, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;word-wrap: break-word; color: rgb(67, 74, 84); font-family: &amp;quot;Microsoft YaHei&amp;quot;, SimHei, Verdana, Arial, sans-serif; background-color: rgb(255, 255, 255);&quot;&gt;　　这里注意介绍几种玩法和投注方式，免得得不偿失。&lt;/span&gt;&lt;br style=&quot;word-wrap: break-word; color: rgb(67, 74, 84); font-family: &amp;quot;Microsoft YaHei&amp;quot;, SimHei, Verdana, Arial, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;word-wrap: break-word; color: rgb(67, 74, 84); font-family: &amp;quot;Microsoft YaHei&amp;quot;, SimHei, Verdana, Arial, sans-serif; background-color: rgb(255, 255, 255);&quot;&gt;&lt;span style=&quot;word-wrap: break-word; font-weight: 700;&quot;&gt;　　大小分：不懂篮球也能玩&lt;/span&gt;&lt;/span&gt;&lt;br style=&quot;word-wrap: break-word; color: rgb(67, 74, 84); font-family: &amp;quot;Microsoft YaHei&amp;quot;, SimHei, Verdana, Arial, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;word-wrap: break-word; color: rgb(67, 74, 84); font-family: &amp;quot;Microsoft YaHei&amp;quot;, SimHei, Verdana, Arial, sans-serif; background-color: rgb(255, 255, 255);&quot;&gt;　　猜大小分在篮彩中是非常流行的玩法，这种玩法最容易上手，简单来说只要猜大小，命中率高达50%。但如果想玩好大小分也是需要花点工夫的，比如球队的打法，主客场因素等都需要考虑。不过竞彩网开出的预设分值有时候会和境外网站的分值有出入，彩民可以利用这之间的“分差”寻找投注的捷径。&lt;/span&gt;&lt;br style=&quot;word-wrap: break-word; color: rgb(67, 74, 84); font-family: &amp;quot;Microsoft YaHei&amp;quot;, SimHei, Verdana, Arial, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;word-wrap: break-word; color: rgb(67, 74, 84); font-family: &amp;quot;Microsoft YaHei&amp;quot;, SimHei, Verdana, Arial, sans-serif; background-color: rgb(255, 255, 255);&quot;&gt;　　投注心得：大小分别迷信跑轰球队。不少彩民错误地认为跑轰球队比较容易打出大分，但从前几个赛季各支球队大小分盘路走势来看，跑轰球队打出大分的几率非常低。因为竞彩公司给跑轰球队预设的总分数也相对较高，打出大分其实并不容易。比如纳什时代的太阳队可以说是跑轰球队的最佳代表，竞彩经常给太阳开出220分以上的大分盘口，只要太阳在比赛中间有一段时间陷入得分荒，球队就很难打出大分。相比较而言，当预设总分数很大时，双方打出大分的难度增加了不少，因为投篮手感很难得到保证，而且现在的NBA比赛越来越重视防守，要想打出大比分并不容易。&lt;/span&gt;&lt;br style=&quot;word-wrap: break-word; color: rgb(67, 74, 84); font-family: &amp;quot;Microsoft YaHei&amp;quot;, SimHei, Verdana, Arial, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;word-wrap: break-word; color: rgb(67, 74, 84); font-family: &amp;quot;Microsoft YaHei&amp;quot;, SimHei, Verdana, Arial, sans-serif; background-color: rgb(255, 255, 255);&quot;&gt;&lt;span style=&quot;word-wrap: break-word; font-weight: 700;&quot;&gt;　　让分胜负：胜负之间有规律&lt;/span&gt;&lt;/span&gt;&lt;br style=&quot;word-wrap: break-word; color: rgb(67, 74, 84); font-family: &amp;quot;Microsoft YaHei&amp;quot;, SimHei, Verdana, Arial, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;word-wrap: break-word; color: rgb(67, 74, 84); font-family: &amp;quot;Microsoft YaHei&amp;quot;, SimHei, Verdana, Arial, sans-serif; background-color: rgb(255, 255, 255);&quot;&gt;　　和胜负游戏一样，都是竞猜两支球队的比赛胜负结果。强队通过让分给弱队，从而平衡了两支球队的实力，同时提高了竞猜的乐趣。换个思路考虑此玩法，通过让分实际上是平衡了两支球队的固定奖金分配，投注在“让分游戏”中球队实力强的球队，比投注在“胜负游戏”中同一支球队而获得的固定奖金要高;反之，相对冷门的一方就会降低固定奖金，对整个游戏的把握就是对预设让分数的研究。&lt;/span&gt;&lt;br style=&quot;word-wrap: break-word; color: rgb(67, 74, 84); font-family: &amp;quot;Microsoft YaHei&amp;quot;, SimHei, Verdana, Arial, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;word-wrap: break-word; color: rgb(67, 74, 84); font-family: &amp;quot;Microsoft YaHei&amp;quot;, SimHei, Verdana, Arial, sans-serif; background-color: rgb(255, 255, 255);&quot;&gt;　　投注心得：预设让分数根据球队的实力来确定的，笔者将所有球队按实力划分为四档，通过笔者多年对于预设让分数的观察，篮球比赛实力在同一档次的球队，让分为1~3分，实力相差一个档次让5~7分，差两个档次8~12分，差三个档次13~16分;所以不难发现，若长期研究几支球队的话还是可以看出一些规律和技巧。&lt;/span&gt;&lt;br style=&quot;word-wrap: break-word; color: rgb(67, 74, 84); font-family: &amp;quot;Microsoft YaHei&amp;quot;, SimHei, Verdana, Arial, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;word-wrap: break-word; color: rgb(67, 74, 84); font-family: &amp;quot;Microsoft YaHei&amp;quot;, SimHei, Verdana, Arial, sans-serif; background-color: rgb(255, 255, 255);&quot;&gt;&lt;span style=&quot;word-wrap: break-word; font-weight: 700;&quot;&gt;　　胜分差：难度大回报率高&lt;/span&gt;&lt;/span&gt;&lt;br style=&quot;word-wrap: break-word; color: rgb(67, 74, 84); font-family: &amp;quot;Microsoft YaHei&amp;quot;, SimHei, Verdana, Arial, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;word-wrap: break-word; color: rgb(67, 74, 84); font-family: &amp;quot;Microsoft YaHei&amp;quot;, SimHei, Verdana, Arial, sans-serif; background-color: rgb(255, 255, 255);&quot;&gt;　　这种玩法又称为篮球波胆，因为难度大，中奖有时又需要一定的运气，所以回报率也比较高。专家说，在胜分差中赢或输6-10分是最不容易出现的。因为比赛如果打得胶着，最容易出现胜负在1-5分的情况。如果强弱分明，分差往往在11-15这个区间，有时甚至更大。 投注心得：首先判定胜负，然后在剩下的6个选项中，再一步分析，假如双方实力相差较大，则可以将小分值的结果1~5，6~10这两种再去掉，剩下四种11~15，16~20，21~25及26+。通常情况下26+的分差也比较少见，如果不是双方相差太过悬殊，就可以将这项也去掉。这样就只剩下了三种，相当于3选1，可以直接复选这三项，能够最大限度中奖。&lt;/span&gt;&lt;/p&gt;', '文章', '2018-03-24', 'www.aa.com', '彩票地方', NULL, '1', '2018-03-24/5ab6044535fa6.jpg', 2, 1),
(46, '参差错落绿绿绿绿绿离开考虑考虑考虑考虑考虑考虑考虑考虑考虑考虑考虑考虑考虑考虑考虑考虑考虑考虑', '&lt;p&gt;宣传册深V司法部得分不是不是我歌手V字形重大啊啊&lt;br/&gt;&lt;/p&gt;', '擦擦擦', '2018-03-16', '', '看见快乐建立健康来了考虑进来进来聊聊看。两节课了进来看见了看见。。jll./,/;', NULL, '1', '2018-03-26/5ab85f3af0e68.jpg', 2, 0),
(42, '买彩票系统', '&lt;p&gt;&lt;span id=&quot;ShoveWebControl_Text81&quot;&gt;　晓风彩票软件的源代码基于 ASP.NET+MsSQL \r\n开发，业务逻辑架构采用ShoveCut技术，存储过程不放在数据库中，web服务器与数据库服务器的完整分离，支持大型彩票网站项目部署时的VPN数据库同步、DNS分流；页面架构采用ReWriteUrl\r\n 技术，以及 Ajax \r\n延时加载和网页静态化技术，提升页面加载速度，动态数据采用后加载、延时加载的方式，增强用户体验，降低服务器瞬间并发压力，提升整体性能。&lt;br style=&quot;white-space: normal;&quot;/&gt;　　&lt;br style=&quot;white-space: normal;&quot;/&gt;　　晓风彩票源代码包含彩票代购合买模块、彩票会员中心模块、彩票开奖派奖模块、彩票走势图管理模块、彩票资讯管理模块、彩票CPS推广模块，是一套安全、高效、易用的彩票在线营销解决方案。晓风彩票源代码内置56种彩票玩法，支持自建福彩、体彩、足彩、进球彩、竞彩等多个彩种的彩票玩法、预测信息和中奖规则。&lt;br style=&quot;white-space: normal;&quot;/&gt;　　&lt;br style=&quot;white-space: normal;&quot;/&gt;　　晓风彩票源代码可以实现彩票代购、彩票合买、彩票方案置顶、彩票方案排序、彩票自动追号、追号跟单保底、彩票招股对象设置、方案保密设置、方案延后上传、方案金额下限设置、旋转矩阵科学选号、在线方案编辑、专家计划、彩票自动跟单、彩票系统撤单、会员撤单、自动核对金额、自动开奖、自动对奖、自动返奖、自动更新期号、管理员分级机制、彩票投注报表、发起人提成机制、在线支付等众多功能。&lt;br style=&quot;white-space: normal;&quot;/&gt;　　&lt;br style=&quot;white-space: normal;&quot;/&gt;　　晓风彩票源代码可生成整站静态页面，适应彩票门户推广、彩票网络营销的需要。晓风彩票CPS联盟推广系统源码，能帮助客户快速发展彩票网站推广分级代理商，构建共赢的彩票网站运营环境，提升彩票运营商竞争力。彩票网站源码预留有api接口，有条件的彩票运营商可以根据开发文档二次自行研发所需要的彩票玩法和彩票投注功能。&lt;br style=&quot;white-space: normal;&quot;/&gt;　　&lt;br style=&quot;white-space: normal;&quot;/&gt;　　&lt;span style=&quot;color: rgb(102, 102, 102);&quot;&gt;&lt;strong&gt;购买晓风彩票源代码的理由&lt;/strong&gt;&lt;/span&gt;&lt;br style=&quot;white-space: normal;&quot;/&gt;　　&lt;br style=&quot;white-space: normal;&quot;/&gt;　　1、晓风彩票是中国最大的彩票外包开发服务商，公司营业执照：440306103654921，并且拥有彩票软件着作权，著作权号：2013SR008045，彩票源码质量有保证，彩票源码售后服务有保证。&lt;br style=&quot;white-space: normal;&quot;/&gt;　　&lt;br style=&quot;white-space: normal;&quot;/&gt;　　2、晓风彩票源代码历经5年市场验证。4年来，晓风彩票为客户部署过几百套彩票网络系统，无一失败案例，用户口碑是最好的市场营销。&lt;br style=&quot;white-space: normal;&quot;/&gt;　　&lt;br style=&quot;white-space: normal;&quot;/&gt;　　3、晓风彩票源代码为完全开源项目，客户可以找任何软件检测机构检测彩票源码的安全性和合法性。晓风彩票提醒：彩票业务涉及到大量的资金流动，安全性应作为彩票网站建设的重中之重。&lt;br style=&quot;white-space: normal;&quot;/&gt;　　&lt;br style=&quot;white-space: normal;&quot;/&gt;　　4、晓风彩票源代码可以为彩票运营商节省大量的人力、财力和时间成本。彩票运营商雇佣高级程序员（一般程序员无法胜任彩票程序的开发）参与彩票项目的研发，从项目立项开始到程序研发、程序调试再到程序发布，都需要漫长的过程，而采用晓风彩票源程序一步到位，能快速抢占市场份额，并且晓风彩票支持7×24小时售后服务，保证彩票项目的可持续性。&lt;br style=&quot;white-space: normal;&quot;/&gt;　　&lt;br style=&quot;white-space: normal;&quot;/&gt;　　&lt;strong&gt;&lt;span style=&quot;color: rgb(102, 102, 102);&quot;&gt;晓风彩票源码版权声明&lt;/span&gt;&lt;/strong&gt;&lt;br style=&quot;white-space: normal;&quot;/&gt;　　&lt;br style=&quot;white-space: normal;&quot;/&gt;　　晓风自开放彩票源码开源合作以来深受资本偏爱，晓风彩票源码的开放性、安全性、易部署、易操作、编码规范、实地指导、二次开发容易等特点让投资者省却了大量复杂的开发、测试、运营流程，从而提高了他们投资回报率。但是令人遗憾的是，目前一些非法网站公然出售“晓风彩票源码破解版”、“晓风彩票软件破解版”，严重干扰了彩票行业的经济秩序。而且经过晓风彩票深入核实，这些“晓风彩票源码破解版”、“晓风彩票软件破解版”的贩卖者竟然在彩票源代码中植入木马后门，暗中窃取彩票运营者的经营成果，严重侵害了彩票从业者的经济利益！&lt;br style=&quot;white-space: normal;&quot;/&gt;　　&lt;br style=&quot;white-space: normal;&quot;/&gt;　　在此，晓风彩票提醒广大用户切勿轻信晓风彩票破解版的说辞，因为彩票网上经销管理系统涉及到一整套的安全权限控制，通过非法渠道、未经安全证明的彩票网站源码可能潜藏着巨大的危险，售后利益无法得到保证。&lt;br style=&quot;white-space: normal;&quot;/&gt;　　&lt;br style=&quot;white-space: normal;&quot;/&gt;　　晓风彩票软件现已开通全国免费400电话，接受广大用户的投诉举报。在此感谢消费者对晓风彩票源码的支持！&lt;/span&gt;&lt;/p&gt;', '系统', '2018-03-04', '', '分词', NULL, '1', '2018-03-24/5ab6041d1e743.jpg', 4, 0),
(40, '彩票', '&lt;p&gt;彩票&lt;br/&gt;&lt;/p&gt;', '彩票', '2018-03-24', 'www.baidu.com', '啊啊', NULL, '1', '2018-03-24/5ab604371fec0.jpg', 1, 1),
(41, '博彩', '&lt;p&gt;&lt;span style=&quot;font-size:24px;word-wrap: break-word; color: rgb(67, 74, 84); font-family: &amp;quot;Microsoft YaHei&amp;quot;, SimHei, Verdana, Arial, sans-serif; background-color: rgb(255, 255, 255);&quot;&gt;&lt;span style=&quot;color:#ff0000;word-wrap: break-word;&quot;&gt;&lt;span style=&quot;word-wrap: break-word; font-weight: 700;&quot;&gt;爆啦!爆啦&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;span style=&quot;font-size:18px;word-wrap: break-word; color: rgb(67, 74, 84); font-family: &amp;quot;Microsoft YaHei&amp;quot;, SimHei, Verdana, Arial, sans-serif; background-color: rgb(255, 255, 255);&quot;&gt;!&lt;/span&gt;&lt;img src=&quot;/work/news/hyadmin/ueditor/php/upload/image/20180324/1521873419199968.gif&quot; smilieid=&quot;37&quot; border=&quot;0&quot; alt=&quot;&quot; style=&quot;word-wrap: break-word; border: 0px; color: rgb(67, 74, 84); font-family: &amp;quot;Microsoft YaHei&amp;quot;, SimHei, Verdana, Arial, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;img src=&quot;/work/news/hyadmin/ueditor/php/upload/image/20180324/1521873419199968.gif&quot; smilieid=&quot;37&quot; border=&quot;0&quot; alt=&quot;&quot; style=&quot;word-wrap: break-word; border: 0px; color: rgb(67, 74, 84); font-family: &amp;quot;Microsoft YaHei&amp;quot;, SimHei, Verdana, Arial, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;img src=&quot;/work/news/hyadmin/ueditor/php/upload/image/20180324/1521873419199968.gif&quot; smilieid=&quot;37&quot; border=&quot;0&quot; alt=&quot;&quot; style=&quot;word-wrap: break-word; border: 0px; color: rgb(67, 74, 84); font-family: &amp;quot;Microsoft YaHei&amp;quot;, SimHei, Verdana, Arial, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;br style=&quot;word-wrap: break-word; color: rgb(67, 74, 84); font-family: &amp;quot;Microsoft YaHei&amp;quot;, SimHei, Verdana, Arial, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;br style=&quot;word-wrap: break-word; color: rgb(67, 74, 84); font-family: &amp;quot;Microsoft YaHei&amp;quot;, SimHei, Verdana, Arial, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;word-wrap: break-word; color: rgb(67, 74, 84); font-family: &amp;quot;Microsoft YaHei&amp;quot;, SimHei, Verdana, Arial, sans-serif; background-color: rgb(255, 255, 255);&quot;&gt;　&lt;span style=&quot;color:#48d1cc;word-wrap: break-word;&quot;&gt;&amp;nbsp; &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;span style=&quot;font-size:18px;word-wrap: break-word; color: rgb(67, 74, 84); font-family: &amp;quot;Microsoft YaHei&amp;quot;, SimHei, Verdana, Arial, sans-serif; background-color: rgb(255, 255, 255);&quot;&gt;&lt;span style=&quot;color:#48d1cc;word-wrap: break-word;&quot;&gt;&lt;span style=&quot;word-wrap: break-word; font-weight: 700;&quot;&gt;仅仅过去5天!360彩票双色球又传来惊天大奖喜讯!&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;br style=&quot;word-wrap: break-word; color: rgb(67, 74, 84); font-family: &amp;quot;Microsoft YaHei&amp;quot;, SimHei, Verdana, Arial, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;font-size:18px;word-wrap: break-word; color: rgb(67, 74, 84); font-family: &amp;quot;Microsoft YaHei&amp;quot;, SimHei, Verdana, Arial, sans-serif; background-color: rgb(255, 255, 255);&quot;&gt;&lt;br style=&quot;word-wrap: break-word;&quot;/&gt;&lt;/span&gt;&lt;span style=&quot;font-size:18px;word-wrap: break-word; color: rgb(67, 74, 84); font-family: &amp;quot;Microsoft YaHei&amp;quot;, SimHei, Verdana, Arial, sans-serif; background-color: rgb(255, 255, 255);&quot;&gt;　　&lt;span style=&quot;color:#ff0000;word-wrap: break-word;&quot;&gt;&lt;span style=&quot;word-wrap: break-word; font-weight: 700;&quot;&gt;好事成双!双色球15005期本站彩民同时中了2注双色球一等奖!每注奖金1025万!&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;br style=&quot;word-wrap: break-word; color: rgb(67, 74, 84); font-family: &amp;quot;Microsoft YaHei&amp;quot;, SimHei, Verdana, Arial, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;font-size:18px;word-wrap: break-word; color: rgb(67, 74, 84); font-family: &amp;quot;Microsoft YaHei&amp;quot;, SimHei, Verdana, Arial, sans-serif; background-color: rgb(255, 255, 255);&quot;&gt;&lt;br style=&quot;word-wrap: break-word;&quot;/&gt;&lt;/span&gt;&lt;span style=&quot;font-size:18px;word-wrap: break-word; color: rgb(67, 74, 84); font-family: &amp;quot;Microsoft YaHei&amp;quot;, SimHei, Verdana, Arial, sans-serif; background-color: rgb(255, 255, 255);&quot;&gt;　&lt;span style=&quot;color:#f4a460;word-wrap: break-word;&quot;&gt;　&lt;/span&gt;&lt;span style=&quot;word-wrap: break-word; font-weight: 700;&quot;&gt;&lt;span style=&quot;color:#f4a460;word-wrap: break-word;&quot;&gt;恭喜两位幸运儿&lt;/span&gt;&lt;span style=&quot;color:#ff0000;word-wrap: break-word;&quot;&gt;[F***]&lt;/span&gt;&lt;span style=&quot;color:#f4a460;word-wrap: break-word;&quot;&gt;和&lt;/span&gt;&lt;span style=&quot;color:#ff0000;word-wrap: break-word;&quot;&gt;[魅***]&lt;/span&gt;&lt;span style=&quot;color:#f4a460;word-wrap: break-word;&quot;&gt;!&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;br style=&quot;word-wrap: break-word; color: rgb(67, 74, 84); font-family: &amp;quot;Microsoft YaHei&amp;quot;, SimHei, Verdana, Arial, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;br style=&quot;word-wrap: break-word; color: rgb(67, 74, 84); font-family: &amp;quot;Microsoft YaHei&amp;quot;, SimHei, Verdana, Arial, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;font-size:18px;word-wrap: break-word; color: rgb(67, 74, 84); font-family: &amp;quot;Microsoft YaHei&amp;quot;, SimHei, Verdana, Arial, sans-serif; background-color: rgb(255, 255, 255);&quot;&gt;&lt;span style=&quot;color:#ff00ff;word-wrap: break-word;&quot;&gt;&lt;span style=&quot;word-wrap: break-word; font-weight: 700;&quot;&gt;　　恭喜他们成为360彩票2015年第2、3位千万大奖得主!&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;br style=&quot;word-wrap: break-word; color: rgb(67, 74, 84); font-family: &amp;quot;Microsoft YaHei&amp;quot;, SimHei, Verdana, Arial, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;color: rgb(67, 74, 84); font-family: &amp;quot;Microsoft YaHei&amp;quot;, SimHei, Verdana, Arial, sans-serif; background-color: rgb(255, 255, 255);&quot;&gt;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&lt;/span&gt;&lt;br style=&quot;word-wrap: break-word; color: rgb(67, 74, 84); font-family: &amp;quot;Microsoft YaHei&amp;quot;, SimHei, Verdana, Arial, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;color: rgb(67, 74, 84); font-family: &amp;quot;Microsoft YaHei&amp;quot;, SimHei, Verdana, Arial, sans-serif; background-color: rgb(255, 255, 255);&quot;&gt;&amp;nbsp; &amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;/span&gt;&lt;/p&gt;&lt;ignore_js_op style=&quot;word-wrap: break-word; display: block; color: rgb(67, 74, 84); font-family: &amp;quot;Microsoft YaHei&amp;quot;, SimHei, Verdana, Arial, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); width: 852px;&quot;&gt;&lt;img id=&quot;aimg_2687029&quot; aid=&quot;2687029&quot; src=&quot;http://bbs.360.cn/attachment.php?key=bbs_safe_2687029&quot; zoomfile=&quot;http://bbs.360.cn/attachment.php?key=bbs_safe_2687029&quot; file=&quot;http://bbs.360.cn/attachment.php?key=bbs_safe_2687029&quot; class=&quot;zoom&quot; width=&quot;750&quot; inpost=&quot;1&quot; lazyloaded=&quot;true&quot; height=&quot;440&quot; initialized=&quot;true&quot; style=&quot;word-wrap: break-word; border: 0px; cursor: pointer;&quot;/&gt;&lt;/ignore_js_op&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '博彩', '2018-03-10', '', '储层', NULL, '1', '2018-03-24/5ab60429793b9.jpg', 3, 0),
(45, '彩票', '&lt;p&gt;码结果来看，；联发科萨科技和感慨&lt;/p&gt;', '试试', '2018-03-03', '', '记录卡进来看见了', NULL, '1', '2018-03-24/5ab61b61895c8.jpg', 3, 0),
(43, '博彩', '&lt;p&gt;的撒翻空间很积极努力&lt;br/&gt;&lt;/p&gt;', '储层', '2018-03-02', '', NULL, NULL, '1', '2018-03-24/5ab601b5f40b0.jpg', 1, 0),
(44, '打算', '&lt;p&gt;立刻从哪里看来看你了&lt;/p&gt;', '试试', '2018-03-03', '', '发发发', NULL, '1', '2018-03-24/5ab602554b396.jpg', 3, 0);

-- --------------------------------------------------------

--
-- 表的结构 `bigad`
--

CREATE TABLE IF NOT EXISTS `bigad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) DEFAULT NULL,
  `link` varchar(9999) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL COMMENT '类型',
  `title` varchar(999) DEFAULT NULL COMMENT '描述',
  `dd` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='全屏广告' AUTO_INCREMENT=27 ;

--
-- 转存表中的数据 `bigad`
--

INSERT INTO `bigad` (`id`, `img`, `link`, `type`, `title`, `dd`) VALUES
(1, '2017-12-24/5a3f07dd9306d.gif', 'https://difeilige.tmall.com/?spm=a1z10.1-b-s.w5001-16774771932.2.5a1cf24cCfgLsy&amp;scene=taobao_shop', '产品集', '产品集', 1),
(2, '2017-11-24/5a17d7a3f2749.jpg', 'www.baidu.com', '母婴', '纸尿布半价', 1),
(3, '2017-11-21/5a13ce48c6905.jpg', 'www.baidu.com', '数码', '华为手机狂降500元！', 1),
(4, '2017-12-03/5a23a3b7a646a.jpg', 'www.baidu.com', '测试', '产品测试', 1),
(23, '2017-12-03/5a23a5595c9dc.jpg', '19', '测试', '19', 1),
(25, '2017-12-24/5a3f082e3bf5a.gif', 'https://hao.360.cn/?h_lnk', '宜华地板', '宜华地板', 1),
(26, '2017-12-16/5a34eaee6fea2.jpg', '123', '123', '123', 0);

-- --------------------------------------------------------

--
-- 表的结构 `bigad2`
--

CREATE TABLE IF NOT EXISTS `bigad2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) DEFAULT NULL,
  `link` varchar(9999) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL COMMENT '类型',
  `title` varchar(999) DEFAULT NULL COMMENT '描述',
  `dd` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='全屏广告' AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `bigad2`
--

INSERT INTO `bigad2` (`id`, `img`, `link`, `type`, `title`, `dd`) VALUES
(1, '2017-12-19/5a38df9f298f2.png', '123', '彩票网站系统', '彩票网站系统', 1),
(2, '2017-12-19/5a38e06789218.jpg', '', '移动APP购彩版', '移动APP购彩版', 1),
(3, NULL, NULL, '彩票全网解决方案', '彩票全网解决方案', 1),
(4, NULL, NULL, '彩票源码开源合作', '彩票源码开源合作', 1),
(7, NULL, NULL, '博友彩票', '博友彩票', 0);

-- --------------------------------------------------------

--
-- 表的结构 `bigad3`
--

CREATE TABLE IF NOT EXISTS `bigad3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) DEFAULT NULL,
  `link` varchar(9999) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL COMMENT '类型',
  `title` varchar(999) DEFAULT NULL COMMENT '描述',
  `dd` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='支付页全屏广告' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `bigad3`
--

INSERT INTO `bigad3` (`id`, `img`, `link`, `type`, `title`, `dd`) VALUES
(1, '2018-01-06/5a5037a4223d0.jpg', '', '测试', '测试', 1);

-- --------------------------------------------------------

--
-- 表的结构 `bigad4`
--

CREATE TABLE IF NOT EXISTS `bigad4` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) DEFAULT NULL,
  `link` varchar(9999) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL COMMENT '类型',
  `title` varchar(999) DEFAULT NULL COMMENT '描述',
  `dd` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='友情链接全屏广告' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `bigad4`
--

INSERT INTO `bigad4` (`id`, `img`, `link`, `type`, `title`, `dd`) VALUES
(1, '2018-01-06/5a50391b70802.jpg', '', 'link', 'link', 1),
(2, '2018-01-06/5a503924a44e3.jpg', '', '2018再创辉煌', '2018再创辉煌', 1),
(3, '2018-01-06/5a509d1e5b8f3.jpg', '', '杨庄镇', '杨庄镇', 0),
(4, '2018-01-06/5a50a13e4d198.jpg', '', '杨庄镇', '杨庄镇', 1);

-- --------------------------------------------------------

--
-- 表的结构 `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(999) DEFAULT NULL COMMENT '图集',
  `title` varchar(999) DEFAULT NULL COMMENT '小标题',
  `desc` varchar(9999) DEFAULT NULL COMMENT '描述',
  `link` varchar(999) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `tid` varchar(255) DEFAULT NULL COMMENT '图集id',
  `dd` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

--
-- 转存表中的数据 `images`
--

INSERT INTO `images` (`id`, `img`, `title`, `desc`, `link`, `price`, `tid`, `dd`) VALUES
(1, '2017-11-22/5a153117ba7c8.JPG', '图一', '产品一dfssdfs阿斯利的科技司带来快捷方式漏洞可分解落实扩大飞机圣诞快乐放假快乐sad立刻反击上篮得分记录上看到解放路迪斯科解放塑料袋可分解落实的解放了倒计时', 'https://difeilige.tmall.com/p/rd286028.htm?spm=a1z10.1-b-s.w5003-16775613153.2.7817e79ancIloY&amp;scene=taobao_shop', '79.00', '1', 1),
(2, '2017-11-24/5a17c33dcde8f.jpg', '测试2', '123', '123', '89.00', '1', 0),
(3, '2017-11-24/5a17c858bef50.JPG', '图二', '产品二', 'http://www.baidu.com', '79.00', '1', 1),
(4, '2017-11-24/5a17c8772e9b3.JPG', '图三', '产品三', 'http://www.baidu.com', '79.00', '1', 1),
(5, '2017-11-25/5a190d4b5873c.jpg', '鲁山县育英学校', '北京化工大学创办于1958年，原名北京化工学院，是新中国为“培养尖端科学技术所需求的高级化工人才”而创建的一所高水平大学。作为教育部直属的全国重点大学，', '', '1', '4', 1),
(6, '2017-11-25/5a190d7185892.jpg', '鲁山县育英学校', '北京化工大学经过半个多世纪的建设，已经发展成为理科基础坚实，工科实力雄厚，管理学、经济学、法学、文学、教育学、哲学、医学等学科富有特色的多科性重点大学，形成了从本科生教育到硕士研究生、博士研究生、博士后流动站以及留学生教育等多层次人才培养格局。建校以来，北京化工大学已为国家输送了10万余名各类人才。', '', '', '4', 1),
(7, '2017-11-30/5a1fc4b750004.jpg', '主持人开幕致辞', '阳新县首届小学校园体育文化艺术节......', 'http://xw.mpic100.com/index.php?s=/Home/Article/index/id/25.html', '', '5', 1),
(8, '2017-11-30/5a1fc0bc8cde4.jpg', '大眼睛', '阳新县首届小学校园体育文化艺术节......表演单位：二年级', 'http://xw.mpic100.com/index.php?s=/Home/Article/index/id/20.html', '', '5', 1),
(9, '2017-11-30/5a1fc7055c88b.jpg', '红星闪闪', '阳新县首届小学校园体育文化艺术节......\r\n表演单位：校队', 'http://xw.mpic100.com/index.php?s=/Home/Article/index/id/17.html', '', '5', 1),
(10, '2017-11-30/5a1fc723cc3bb.jpg', '得波得波得', '阳新县首届小学校园体育文化艺术节......\r\n表演单位：一年级', 'http://xw.mpic100.com/index.php?s=/Home/Article/index/id/23.html', '', '5', 1),
(11, '2017-11-30/5a1fc734330a8.jpg', '街舞', '阳新县首届小学校园体育文化艺术节......\r\n表演单位：五年级', 'http://xw.mpic100.com/index.php?s=/Home/Article/index/id/24.html', '', '5', 1),
(12, '2017-11-30/5a1fc74089631.jpg', '妈妈咪呀', '阳新县首届小学校园体育文化艺术节......\r\n表演单位：教师', 'http://xw.mpic100.com/index.php?s=/Home/Article/index/id/22.html', '', '5', 1),
(13, '2017-11-30/5a1fc74fc6772.jpg', '青春修炼手册', '阳新县首届小学校园体育文化艺术节......\r\n表演单位：四年级', 'http://xw.mpic100.com/index.php?s=/Home/Article/index/id/27.html', '', '5', 1),
(14, '2017-11-30/5a1fc75b6129c.jpg', '我们是鲜花', '', '', '', '5', 0),
(15, '2017-11-30/5a1fc76ba209e.jpg', '闭幕', '', '', '', '5', 0),
(16, '2017-11-30/5a1fd21ec18c4.jpg', '亲亲我的小树', '阳新县首届小学校园体育文化艺术节......\r\n表演单位：校队', 'http://xw.mpic100.com/index.php?s=/Home/Article/index/id/18.html', '', '5', 1),
(17, '2017-11-30/5a1fd2213e871.jpg', '亲亲我的小树', '', '', '', '5', 0),
(18, '2017-11-30/5a1fd24e72cf5.jpg', '青春修炼手册', '', '', '', '5', 0),
(19, '2017-11-30/5a1fd26c50527.jpg', '我们是鲜花', '阳春县首届小学校园体育文化艺术节......\r\n表演单位：六年级', 'http://xw.mpic100.com/index.php?s=/Home/Article/index/id/21.html', '', '5', 1),
(20, '2017-11-30/5a1fd26dee9b3.jpg', '我们是鲜花', '', '', '', '5', 0),
(21, '2017-11-30/5a1fd27f3da1e.jpg', '主持人闭幕致辞', '阳新县首届小学校园体育文化艺术......', 'http://xw.mpic100.com/index.php?s=/Home/Article/index/id/26.html', '', '5', 1),
(22, '2017-12-03/5a23ad383a65c.jpg', '2017秋冬新款女慵懒麻花高领毛衣外套', '粗毛线加厚针织衫，休闲的版型，款式很是特别，尤其是针法，简单中的时尚复古，下摆的小开叉，修身上身的线条，麻花拼接平针的和钩针，时尚和精湛工艺相得益彰，美翻。', 'http://xw.mpic100.com/index.php?s=/Home/Article/index/id/32.html', '399', '6', 1),
(23, '2017-12-03/5a23ad8c06982.jpg', '时尚红色圆领毛衣针织打底衫女潮', '几何图案的时尚红色毛衣，是今年秋冬的潮品，国际明星们偶读在穿的新颖款，赵丽颖参加时装周和唐嫣都是钟爱于它，亲柔质感，羊毛保暖，时尚的圣诞红，搭半身裙很赞。', 'http://xw.mpic100.com/index.php?s=/Home/Article/index/id/32.html', '489', '6', 1),
(24, '2017-12-03/5a23ae293691e.jpg', '2017秋冬新款女装彩条纹毛衣外套', '长袖加厚保暖针织开衫，彩条拼接色，欧范十足，百搭潮款，粗毛线连门襟领子，简单大方，廓形的线条感，搭靴子还是小白鞋，都很青春减龄，有型有气质，秋冬保暖高级范。', 'http://xw.mpic100.com/index.php?s=/Home/Article/index/id/32.html', '499', '6', 1),
(25, '2017-12-03/5a23ae7b6f1b9.jpg', '2017秋冬新款女装百搭无袖高领毛衣', '修身羊毛马甲背心针织衫，红色的针织马甲，搭打底衫，彰显穿衣层次感，马甲护心，羊毛高领保暖，更时尚，针法精密，手工很精湛，拼接针，大方时尚，穿出高级感和优雅范', 'http://xw.mpic100.com/index.php?s=/Home/Article/index/id/32.html', '359', '6', 1),
(26, '2017-12-03/5a23aef552fe7.jpg', '欧货钉珠V领时尚毛衣', '椭圆的V领简约优美，钉珠装饰着全身，纯手工，优雅灵动，落落大方，宽松的版型，微喇叭袖造型设计，易搭配，凸显个性时尚之美，细密紧凑的针织法更具造型感。', 'http://xw.mpic100.com/index.php?s=/Home/Article/index/id/32.html', '549', '6', 1),
(27, '2017-12-03/5a23af74d3f2c.jpg', '2017秋冬新款欧货时尚圆领红色毛衣', '套头长袖羊毛，卡通狐狸图案装饰在胸前，高贵别致，长袖宽松显瘦，百搭潮款，红色很显白，秋冬很有气质感，搭修身的长袖衬衫内搭，甜美的休闲减龄气质，显高级。', 'http://xw.mpic100.com/index.php?s=/Home/Article/index/id/32.html', '399', '6', 1),
(28, '2017-12-03/5a23afe6e4bdb.jpg', '2017秋冬新款百搭修身V领毛衣', '女纯色长袖羊毛衫，修身的版型，亲肤的羊毛材质，含量很高的羊毛，针织衫的保暖性挺括性展现了高级感，搭半身皮裙或者皮裤，个性简单范，彰显女性穿衣时尚的秋冬保暖单品。', 'http://xw.mpic100.com/index.php?s=/Home/Article/index/id/32.html', '399', '6', 1),
(29, '2017-12-03/5a23b037ab619.jpg', '2017秋冬新款慵懒风红色高领毛衣', '加厚保暖针织衫，粗毛线的线条设计，复古文艺，减龄保暖，是年轻人的styel，有型有朝气，廓形的版型穿上也是很显瘦的，单穿搭百褶的呢子裙，尽显高级穿衣品质时尚。', 'http://xw.mpic100.com/index.php?s=/Home/Article/index/id/32.html', '499', '6', 1),
(30, '2017-12-03/5a23b07e78bf6.jpg', '2017秋冬新款欧货蓝色套头钉珠毛衣', '欧货修身复古打底羊毛针织衫，亲肤舒适，吸汗排湿，钉珠的胸前设计，如花开一新充满了品质感，孔雀蓝很精致，正色，不是一般的单品，做工很精细，穿出高级感。', 'http://xw.mpic100.com/index.php?s=/Home/Article/index/id/32.html', '399', '6', 1),
(31, '2017-12-03/5a23b0cb20721.jpg', '2017秋冬新款女装百搭V领钉珠长袖毛衣', '宽松粗毛线针织开衫，V领修饰脖颈的曲线，美感十足，前置的大口袋，实穿性很强，有层次感，休闲的版型，廓形的线条感，穿出优雅搭档的欧范，搭靴子还是阔腿裤都很有型。', 'http://xw.mpic100.com/index.php?s=/Home/Article/index/id/32.html', '549', '6', 1),
(32, '2017-12-10/5a2cfb0559571.jpg', '宜华地板', '茶马古道系列：ROO5-H产品规格1222*169*12', '', '198-250', '7', 1),
(33, '2017-12-11/5a2e154170148.jpg', '123', '', '', '', '7', 0);

-- --------------------------------------------------------

--
-- 表的结构 `imglist`
--

CREATE TABLE IF NOT EXISTS `imglist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aid` int(11) DEFAULT NULL COMMENT '全屏广告id',
  `btitle` varchar(255) DEFAULT NULL COMMENT '大标题',
  `time` varchar(255) DEFAULT NULL,
  `writer` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL COMMENT '封面（选填）',
  `type` varchar(255) DEFAULT NULL,
  `dd` varchar(255) NOT NULL DEFAULT '1',
  `ad` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='图集列表' AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `imglist`
--

INSERT INTO `imglist` (`id`, `aid`, `btitle`, `time`, `writer`, `img`, `type`, `dd`, `ad`) VALUES
(1, 2, 'test', '2017-11-24', 'admin', '2017-11-24/5a17c9723be0b.JPG', NULL, '1', 0),
(2, 2, 'test2', '2017-11-24', 'admin', '2017-11-24/5a17c53e1d784.jpg', NULL, '0', 1),
(3, 1, '测试', '2017-11-25', '', '2017-11-25/5a19030ab4c5c.jpg', NULL, '1', 1),
(4, 1, '学校欣赏', '2017-11-25', '育英学校', '2017-11-25/5a190cfa74229.jpg', NULL, '1', 0),
(5, 1, '阳新县第二实验小学', '2017-11-30', '阳新县第二实验小学', '2017-11-30/5a1fbf09b6938.jpg', NULL, '1', 1),
(6, 1, '迪菲丽格旗舰店', '2017-12-02', '', '2017-12-03/5a23a9c92bd07.jpg', NULL, '1', 1),
(7, 25, '宜华地板', '2017-12-02', '', '2017-12-10/5a2cfa888e2d4.jpg', NULL, '1', 1);

-- --------------------------------------------------------

--
-- 表的结构 `inner_ad`
--

CREATE TABLE IF NOT EXISTS `inner_ad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) DEFAULT NULL,
  `img` varchar(999) DEFAULT NULL,
  `link` varchar(999) DEFAULT NULL,
  `desc` varchar(999) DEFAULT NULL,
  `dd` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `inner_ad`
--

INSERT INTO `inner_ad` (`id`, `tid`, `img`, `link`, `desc`, `dd`) VALUES
(1, 1, '2017-11-24/5a17c8865bfc0.JPG', 'http://www.baidu.com', '测试广告', 1),
(2, 1, '2017-11-24/5a17c2fe38571.jpg', 'www.taobao.com', '测试广告', 0),
(3, 4, '2017-11-29/5a1e0b9ab0794.jpg', '', '测试', 1);

-- --------------------------------------------------------

--
-- 表的结构 `lianxi`
--

CREATE TABLE IF NOT EXISTS `lianxi` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `des` text,
  `key` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `lianxi`
--

INSERT INTO `lianxi` (`Id`, `des`, `key`, `title`) VALUES
(2, '彩票1', '彩票', '彩票');

-- --------------------------------------------------------

--
-- 表的结构 `link`
--

CREATE TABLE IF NOT EXISTS `link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link` varchar(999) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `link`
--

INSERT INTO `link` (`id`, `link`) VALUES
(1, 'http://www.baidu.com');

-- --------------------------------------------------------

--
-- 表的结构 `pay`
--

CREATE TABLE IF NOT EXISTS `pay` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `link` varchar(999) DEFAULT NULL,
  `type` varchar(225) DEFAULT NULL,
  `dd` varchar(255) NOT NULL DEFAULT '1' COMMENT '是否删除',
  `img` varchar(999) DEFAULT NULL,
  `aid` int(11) DEFAULT NULL,
  `ad` int(11) NOT NULL DEFAULT '0',
  `img2` varchar(255) DEFAULT NULL COMMENT '小广告',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `pay`
--

INSERT INTO `pay` (`id`, `title`, `time`, `link`, `type`, `dd`, `img`, `aid`, `ad`, `img2`) VALUES
(1, '支付测试', NULL, '123', NULL, '0', '2017-12-25/5a4068a253ff6.png', 1, 1, '2017-12-25/5a4068a253ff6.png'),
(2, '123', NULL, '213', NULL, '0', '2017-12-25/5a4082a4d3283.png', 1, 0, '2017-12-25/5a4082a4d3283.png'),
(3, '支付测试', NULL, 'http://www.baidu.com', NULL, '1', '2017-12-25/5a4092b63cf4c.png', 1, 1, '2017-12-25/5a4092b63d0ff.jpg'),
(4, '01', NULL, '', NULL, '1', '2017-12-28/5a4480977f942.jpg', 1, 0, ''),
(5, '44', NULL, '', NULL, '1', '2017-12-29/5a45b657569cf.jpg', 0, 0, '');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`Id`, `name`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
