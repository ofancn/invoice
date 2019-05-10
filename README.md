# Invoice

[English Document](README.en.md) 

[港澳台繁體文档](README.hk.md)

只需几行代码即可生成设计精美的报价单或订单。使用您自己的徽标和主题颜色进行品牌化，使用自动分页添加无限制的项目和总行数。您可以在用户的​​浏览器中传送PDF输出，保存在服务器上或强制下载文件
Invoice内置了中文简体、中文繁体、英语的翻译，您可以设置每个文档所需的货币。

项目已集成[ 思源黑体(Source Han Sans)](https://github.com/Pal3love/Source-Han-TrueType)中文版


## 安装Invoice

Invoice利用Composer来管理其依赖关系。 因此，在使用Invoice之前，请确保在您的计算机上安装了Composer

~~~php
composer require invoice/invoice
~~~

## 演示

[苹果报价表](https://invoice.ofan.cn/)


## 货币

[货币代码](document/Currency.cn.md)


## 文档

### 实例
~~~php
use Invoice\Invoice;
$invoice=new Invoice();
~~~
or 
~~~php
$invoice=get_invoice();
~~~
### 例
~~~PHP
$invoice = new Invoice('CNY','A4');
//Set number formatting
$invoice->setNumberFormat('.',',')
//设置LOGO
->setLogo("images/apple.png",100,88)
//设置颜色
->setColor("#ed4014")
//设置要文档类型
->setType("报价表")
//设置文档编号
->setReference(date('Ymd').'001')
//报价日期
->setDate(date('Y-m-d'))
//截止日期
->setDue(date('Y-m-d',strtotime('+3 months')))
//报价人
->setFrom(["Apple Inc","1 Infinite Loop","Cupertino, CA 95014","United States of America","IE9700053D"])
//客户
->setTo(["京东商城 刘强东","北京市","北京经济技术开发区科创","十四街99号2号楼B168室","400-6065500 "])
//新增产品
->addItem("Apple iPhone X","64G 红色",1,"21%",299,'5%',284.05)
->addItem("Apple iPhone X","158G 红色",1,"21%",299,0,299)
//增加合计
->addTotal("合计",583.05)
->addTotal("折扣 21%",122.44)
->addTotal("总计",705.5,true)
//增加李老师
->addTitle("声明")
//添加段落
->addParagraph("只需几行代码即可生成设计精美的报价单或订单\nInvoice利用Composer来管理其依赖关系。 因此，在使用Invoice之前，请确保在您的计算机上安装了Composer\ncomposer require invoice/invoice")
//设置页脚
->setFooternote("http://www.apple.com")
//设置徽章
->addBadge('A级机密')
//切换公司信息和客户信息的水平位置
->flipflop()
//交付PDF
->render('Apple.pdf','I');

~~~

![演示](images/demo.png)