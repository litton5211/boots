

ALTER TABLE
    meizhuang.post ADD (post_type TINYINT DEFAULT '0');
ALTER TABLE
    meizhuang.post ADD (video_url VARCHAR(512));
    
    
    
 CREATE TABLE
    mz_user_login
    (
        id INT NOT NULL AUTO_INCREMENT,
        user_id int(11) not null,
        user_name VARCHAR(60) NOT NULL,
        login_time INT(10) unsigned,
        token  CHAR(32) NOT NULL,
        expire_time INT(10) unsigned,
        last_login_ip VARCHAR(15),
        status TINYINT(1),
 
        PRIMARY KEY (id)
    )
    ENGINE=MyISAM DEFAULT CHARSET=utf8;
    
    
    CREATE TABLE
    mz_spider_site
    (
        id INT NOT NULL AUTO_INCREMENT,
        site_name VARCHAR(255),
        list_format VARCHAR(255),
        page_format VARCHAR(255),
        homepage VARCHAR(225),
        last_update_time INT,
        PRIMARY KEY (id)
    )
    ENGINE=InnoDB DEFAULT CHARSET=utf8;
    
    CREATE TABLE
    mz_spider_page
    (
        id INT NOT NULL AUTO_INCREMENT,
        site_id VARCHAR(255),
        list_id VARCHAR(255),
        page_name VARCHAR(255),
        page_url VARCHAR(255),
        last_update_time INT,
        status TINYINT,
        PRIMARY KEY (id)
    )
    ENGINE=InnoDB DEFAULT CHARSET=utf8;
    
    
    
    CREATE TABLE
    mz_spider_list
    (
        id INT NOT NULL AUTO_INCREMENT,
        site_id VARCHAR(255),
        list_url VARCHAR(255),
        list_name VARCHAR(255),
        cata_name VARCHAR(255),
        last_update_time INT,
        PRIMARY KEY (id)
    )
    ENGINE=InnoDB DEFAULT CHARSET=utf8;
    
    
    
    CREATE TABLE
    mz_product_type
    (
        id INT NOT NULL AUTO_INCREMENT,
        type_name  VARCHAR(255),
        parent_id int(11),
        PRIMARY KEY (id)
    )
    ENGINE=InnoDB DEFAULT CHARSET=utf8;
    
    
    
      create table  mz_product_sort
    (
        id INT NOT NULL AUTO_INCREMENT,
        type_id   int(11),
        product_id int(11),
        PRIMARY KEY (id)
    )
    ENGINE=InnoDB DEFAULT CHARSET=utf8;
    
    ALTER TABLE
    meizhuang.mz_product CHANGE brand_id brand VARCHAR(255) DEFAULT '0' NOT NULL;
    
    
    
    CREATE TABLE `mz_user_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `login_time` int(10) unsigned DEFAULT NULL,
  `token` char(32) NOT NULL,
  `expire_time` int(10) unsigned DEFAULT NULL,
  `last_login_ip` varchar(15) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `accessToken` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;


CREATE TABLE `mz_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(60) NOT NULL,
  `user_pwd` char(32) NOT NULL,
    `gender` tinyint(4) DEFAULT '0',
  `email` varchar(255) NOT NULL,
  `create_time` int(10) unsigned DEFAULT NULL,
  `update_time` int(10) unsigned DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `role_id` smallint(5) unsigned DEFAULT NULL,

  `token` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;


ALTER TABLE
    meizhuang.mz_user ADD (profile_pic VARCHAR(255));
ALTER TABLE
    meizhuang.mz_user ADD (home_bg_pic VARCHAR(255));
    
    
    CREATE TABLE
    mz_messge
    (
        id INT(10) unsigned NOT NULL AUTO_INCREMENT,
        f_userid INT NOT NULL,
        t_userid INT NOT NULL,
        content text NOT NULL,
        create_time INT(10),
        PRIMARY KEY (id)
    )
    ENGINE=MyISAM DEFAULT CHARSET=utf8;
    
    
    CREATE TABLE
    mz_join_activity
    (
        id INT unsigned NOT NULL AUTO_INCREMENT,
        userid INT NOT NULL,
        activity_id INT NOT NULL,
        name VARCHAR(255) ,
        adress VARCHAR(255) ,
        tel VARCHAR(24) ,
        create_time INT(10),
        PRIMARY KEY (id)
    
    )
    ENGINE=MyISAM DEFAULT CHARSET=utf8;
    
    ALTER TABLE
    meizhuang.mz_messge ADD (status TINYINT);
    
    
    CREATE TABLE `mz_share` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `create_time` int(10) DEFAULT NULL,
  `pic` varchar(512) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;





CREATE TABLE `mz_activity` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `op_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `create_time` int(10) DEFAULT NULL,
  `begin_time` int(10) DEFAULT NULL,
  `end_time` int(10) DEFAULT NULL,
  `quota_num` int(4) default 0,
  `pic_url` varchar(255) ,
  `product_id` int(11) ,
  `like_count` int(11) default 0,
  `collect_count` int(11) default 0,
  `comment_count` int(11) default 0,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

ALTER TABLE
    meizhuang.mz_join_activity ADD (status TINYINT DEFAULT '0');
    
    
    ALTER TABLE
    meizhuang.mz_user ADD (roles VARCHAR(12))
    