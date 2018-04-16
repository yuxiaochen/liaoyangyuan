# liaoyangyuan
1一个首页一个后台
2 首页展示标题 及其他信息 后台负责发布新闻
3数据库信息  一张表 时间标题文章链接
4 
CREATE TABLE `news` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `author` varchar(255) DEFAULT NULL COMMENT '作者',
  `url` varchar(255) DEFAULT NULL COMMENT '文章地址',
  `title` varchar(255) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `text` text,
  `pic` varchar(255) DEFAULT NULL COMMENT '图片地址',
  `update_time` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
