<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>当当网站导航部分</title>
<link href="/xiaoyi/ThinkPHP3.2/Public/book/css/global.css" rel="stylesheet" type="text/css" />
<link href="/xiaoyi/ThinkPHP3.2/Public/book/css/template.css" rel="stylesheet" type="text/css" />
<script src="/xiaoyi/ThinkPHP3.2/Public/book/js/menu_tree.js" type="text/javascript"></script>
</head>

<body>
<!--顶部开始-->
<div class="header_top">
   <div class="header_top_left">您好！欢迎光临当当网 [<a href="/xiaoyi/ThinkPHP3.2/Public/book/login.html" target="_parent">登录</a> | <a href="/xiaoyi/ThinkPHP3.2/Public/book/register.html" target="_parent">免费注册</a>]</div>
   <div class="header_top_right">
   <ul>
      <li><a href="/xiaoyi/ThinkPHP3.2/Public/book/#" target="_self">帮助</a></li>
      <li>|</li>
      <li onmouseover="myddang_show('dd_menu_top_down')" onmouseout="myddang_hidden('dd_menu_top_down')"><a href="/xiaoyi/ThinkPHP3.2/Public/book/#" target="_self">我的当当</a> <img src="/xiaoyi/ThinkPHP3.2/Public/book/images/dd_arrow_down.gif" alt="arrow" />
      <div id="dd_menu_top_down">
        <a href="/xiaoyi/ThinkPHP3.2/Public/book/#" target="_self">我的订单</a><br />
           <a href="/xiaoyi/ThinkPHP3.2/Public/book/#" target="_self">账户余额</a><br />
          <a href="/xiaoyi/ThinkPHP3.2/Public/book/#" target="_self">购物礼券</a><br />
           <a href="/xiaoyi/ThinkPHP3.2/Public/book/#" target="_self">我的会员积分</a><br />
       </div>
       </li>
      <li>|</li>
      <li><a href="/xiaoyi/ThinkPHP3.2/Public/book/#" target="_self">团购</a></li>
      <li>|</li>
      <li><a href="/xiaoyi/ThinkPHP3.2/Public/book/#" target="_self">礼品卡</a></li>
      <li>|</li> 
      <li><a href="/xiaoyi/ThinkPHP3.2/Public/book/#" target="_self">个性化推荐</a></li>
      <li>|</li>
      <li><a href="/xiaoyi/ThinkPHP3.2/Public/book/shopping.html" target="_parent">购物车</a></li>
      <li><img src="/xiaoyi/ThinkPHP3.2/Public/book/images/dd_header_shop.gif" alt="shopping"/></li>
   </ul>
   </div>
</div>
<!--导航开始-->
<div class="header_middle">
<div class="logo"><img src="/xiaoyi/ThinkPHP3.2/Public/book/images/dd_logo.gif" alt="logo"/></div>
<div class="menu_left">
  <dl>
   <dd class="menu_left_first"></dd>
   </dl>
   <ul id="menu_left_bold">
   <li><a href="/xiaoyi/ThinkPHP3.2/Public/book/index.html" target="_parent" class="bold">首页</a></li>
   <li>|</li>
   <li><a href="/xiaoyi/ThinkPHP3.2/Public/book/product.html" target="_parent" class="bold">图书</a></li>
   <li>|</li>
   <li><a href="/xiaoyi/ThinkPHP3.2/Public/book/#" target="_self" class="bold">音乐</a></li>
   <li>|</li>
   <li><a href="/xiaoyi/ThinkPHP3.2/Public/book/#" target="_self" class="bold">影视</a></li>
   <li>|</li>
   <li><a href="/xiaoyi/ThinkPHP3.2/Public/book/#" target="_self" class="bold">运动</a></li>
   <li>|</li>
   <li><a href="/xiaoyi/ThinkPHP3.2/Public/book/#" target="_self" class="bold">服饰</a></li>
   <li>|</li>
   <li><a href="/xiaoyi/ThinkPHP3.2/Public/book/#" target="_self" class="bold">家居</a></li>
   <li>|</li>
   <li><a href="/xiaoyi/ThinkPHP3.2/Public/book/#" target="_self" class="bold">美妆</a></li>
   <li>|</li>
   <li><a href="/xiaoyi/ThinkPHP3.2/Public/book/#" target="_self" class="bold">母婴</a></li>
   <li>|</li>
   <li><a href="/xiaoyi/ThinkPHP3.2/Public/book/#" target="_self" class="bold">食品</a></li>
   <li>|</li>
   <li><a href="/xiaoyi/ThinkPHP3.2/Public/book/#" target="_self" class="bold">数码家电</a></li>
   </ul>
   <dl>
   <dd class="menu_left_end"></dd>
 </dl>
</div>
<div class="menu_right" id="menu_dull_red">
 <ul>
   <li class="menu_right_1"><a href="/xiaoyi/ThinkPHP3.2/Public/book/#" target="_self">商店街</a></li>
   <li class="menu_right_2"><a href="/xiaoyi/ThinkPHP3.2/Public/book/#" target="_self">促销</a></li>
   <li class="menu_right_3"><a href="/xiaoyi/ThinkPHP3.2/Public/book/#" target="_self">当当<img src="/xiaoyi/ThinkPHP3.2/Public/book/images/dd_header_top.png" alt="榜" /></a>
   </li>
   <li class="menu_right_2"><a href="/xiaoyi/ThinkPHP3.2/Public/book/#" target="_self">社区</a></li>
   <li class="menu_right_3"><a href="/xiaoyi/ThinkPHP3.2/Public/book/#" target="_self">在线读书</a></li>
 </ul>
</div>
<div class="menu">
<div class="menu_first"></div>
<div id="menu_white">
     <a href="/xiaoyi/ThinkPHP3.2/Public/book/#" target="_self" class="menu_mid_white">小说</a>|
     <a href="/xiaoyi/ThinkPHP3.2/Public/book/#" target="_self" class="menu_mid_white">青春</a>|
     <a href="/xiaoyi/ThinkPHP3.2/Public/book/#" target="_self" class="menu_mid_white">历史</a>|
     <a href="/xiaoyi/ThinkPHP3.2/Public/book/#" target="_self" class="menu_mid_white">保健</a>|
     <a href="/xiaoyi/ThinkPHP3.2/Public/book/#" target="_self" class="menu_mid_white">少儿</a>|
     <a href="/xiaoyi/ThinkPHP3.2/Public/book/#" target="_self" class="menu_mid_white">旅游</a>|
     <a href="/xiaoyi/ThinkPHP3.2/Public/book/#" target="_self" class="menu_mid_white">期刊</a>|
     <a href="/xiaoyi/ThinkPHP3.2/Public/book/#" target="_self" class="menu_mid_white">图书畅销榜</a>|
     <a href="/xiaoyi/ThinkPHP3.2/Public/book/#" target="_self" class="menu_mid_white">新书热卖榜</a>|
     <a href="/xiaoyi/ThinkPHP3.2/Public/book/#" target="_self" class="menu_mid_white">特价书</a>|
     <a href="/xiaoyi/ThinkPHP3.2/Public/book/#" target="_self" class="menu_mid_white">图书促销</a>|
     <a href="/xiaoyi/ThinkPHP3.2/Public/book/#" target="_self" class="menu_mid_white">所有图书分类</a>
     </div>
<div class="menu_end"></div>
</div>
</div>
<!--搜索开始-->
<div class="header_search">
 <div class="header_serach_left"></div>
 <div class="header_serach_mid">
 <ul id="header_serach_mid_menu">
   <li><input id="header_serach" type="text" class="header_input_search" /></li>
   <li><input type="image" class="header_secrch_btn" src="/xiaoyi/ThinkPHP3.2/Public/book/images/dd_header_search_btn.jpg" /></li>
   <li><img src="/xiaoyi/ThinkPHP3.2/Public/book/images/dd_arrow_right.gif" alt="arrow"/> <a href="/xiaoyi/ThinkPHP3.2/Public/book/#" target="_self">高级搜索</a></li>
   <li>|</li>
   <li><img src="/xiaoyi/ThinkPHP3.2/Public/book/images/dd_header_search_top.jpg" alt="搜索风云榜"/></li>
   <li><a href="/xiaoyi/ThinkPHP3.2/Public/book/#" target="_self">雅思</a></li>
   <li>|</li>
   <li><a href="/xiaoyi/ThinkPHP3.2/Public/book/#" target="_self">建造师</a></li>
   <li>|</li>
   <li><a href="/xiaoyi/ThinkPHP3.2/Public/book/#" target="_self">中里巴人</a></li>
   <li>|</li>
   <li><a href="/xiaoyi/ThinkPHP3.2/Public/book/#" target="_self">注会</a></li>
   <li>|</li>
   <li><a href="/xiaoyi/ThinkPHP3.2/Public/book/#" target="_self">新概念英语</a></li>
   <li>|</li>
   <li><a href="/xiaoyi/ThinkPHP3.2/Public/book/#" target="_self">更多>></a></li>
  </ul>
 
   
 </div>
 <div class="header_serach_right"></div>
</div>
</body>
</html>