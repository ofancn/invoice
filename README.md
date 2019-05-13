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

//设置字体
//->setFontFamily('SourceHanSans', '', '~/font/sourcehansans.ttf')
//->setFontFamily('SourceHanSans','b', '~/font/sourcehansansb.ttf')

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


### 类说明
~~~php
/**
     * 实例
     * @param string $currency
     *            货币代码
     * @param string $size
     *            纸张大小 A4 Letter Legal
     * @param string $language
     *            语言
     */
    function __construct($currency = 'CNY', $size = 'A4', $language = 'zh');

    /**
     * 获取货币符号
     *
     * @param string $code
     *            货币代码
     * @return string|null
     */
    public function getCurrencySymbol(string $code);

    /**
     * 判断货币是否可用
     *
     * @param string $code
     *            货币代码
     * @return bool
     */
    public function hasCurrency(string $code);

    /**
     * 设置字体
     *
     * @param string $family
     *            字体名称
     * @param string $style
     *            字体样式 至少包含两种字体样式 ''和'b'
     * @param string $file
     *            字体文件
     * @return $this
     */
    public function setFontFamily(string $family, string $style = '', string $file = '');

    /**
     * 设置语言
     *
     * @param string $language
     * @return $this
     */
    public function setLanguage(string $language);

    /**
     * 设置要文档类型
     *
     * @param type $title
     * @return $this
     */
    public function setType(string $title);

    /**
     * 设置颜色
     *
     * @param string $rgbcolor
     *            十六进制颜色代码。红色示例：'＃FF0000'
     * @return $this
     */
    public function setColor(string $rgbcolor);

    /**
     * 设置文档日期
     *
     * @param string $date
     * @return $this
     */
    public function setDate(string $date);

    /**
     * 截止日期
     *
     * @param string $date
     * @return $this
     */
    public function setDue(string $date);

    /**
     * 设置logo
     *
     * @param string $logo
     *            要使用的图像文件的本地路径或远程URL
     * @param int $maxWidth
     *            宽度 毫米为单位
     * @param int $maxHeight
     *            高度 毫米为单位
     * @return $this
     */
    public function setLogo($logo = 0, $maxWidth = 0, $maxHeight = 0);

    /**
     * 设置公司详细信息
     *
     * @param array $data
     * @return $this
     */
    public function setFrom(array $data);

    /**
     * 客户信息
     *
     * @param array $data
     * @return $this
     */
    public function setTo(array $data);

    /**
     * 设置文档编号
     *
     * @param string $reference
     * @return $this
     */
    public function setReference($reference);

    /**
     * 设置数字格式
     *
     * @param string $decimals
     *            小数点的字符
     * @param string $thousands_sep
     *            千位分隔符的字符
     * @return $this
     */
    public function setNumberFormat($decimals, $thousands_sep);

    /**
     * 新增商品
     *
     * @param string $item
     *            产品或服务名称
     * @param string $description
     *            描述 使用<br>或\ n添加换行符
     * @param decimal $quantity
     *            数量
     * @param decimal|string $vat
     *            金额
     * @param decimal $price
     *            单价
     * @param string|decimal|boolean $discount
     *            折扣 没有请填 false
     * @param int $total
     *            总计
     * @return $this
     */
    public function addItem($item, $description, $quantity, $vat, $price, $discount, $total);

    /**
     * 设置总计
     *
     * @param string $name
     *            名称
     * @param decimal $value
     *            值
     * @param boolean $colored
     *            背景色 true 则背景色
     * @return $this
     */
    public function addTotal($name, $value, $colored = false);

    /**
     * 添加标题
     *
     * @param string $title
     * @return $this
     */
    public function addTitle($title);

    /**
     * 添加段落
     *
     * @param string $paragraph
     * @return $this
     */
    public function addParagraph($paragraph);

    /**
     * 添加徽章
     *
     * @param string $badge
     * @return $this
     */
    public function addBadge($badge);

    /**
     * 设置页脚
     *
     * @param string $note
     * @return $this
     */
    public function setFooternote($note);

    /**
     * 切换公司信息和客户信息的水平位置
     *
     * @return $this
     */
    public function flipflop();

    /**
     * 渲染交付
     *
     * @param string $name
     *            名称
     * @param string $destination
     *            交付方式
     *            I（将文件内联发送到浏览器）
     *            D（发送到浏览器并强制使用名称给出的名称下载文件）
     *            F（保存到本地文件。确保在name参数中设置传递路径）
     *            S（将文档作为字符串返回）
     * @return $this
     */
    public function render($name = '', $destination = '');
~~~
