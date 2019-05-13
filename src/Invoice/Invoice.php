<?php
namespace Invoice;

class Invoice extends Pdf
{

    protected static $font = 'SourceHanSans';

    protected $columnOpacity = 0.06;

    protected $columnSpacing = 0.3;

    protected $referenceformat = [
        '.',
        ','
    ];

    protected $margins = [
        'l' => 20,
        't' => 20,
        'r' => 20
    ];

    protected static $l;

    protected $document;

    protected $type;

    protected $reference;

    protected $logo;

    protected $color;

    protected $date;

    protected $due;

    protected $from;

    protected $to;

    protected $items;

    protected $totals;

    protected $badge;

    protected $addText;

    protected $footernote;

    protected $dimensions;

    protected $title;

    protected $angle = 0;

    protected $language;

    protected $flipflop = false;

    protected $currencys = [
        'CNX' => 'CNX',
        'XRE' => 'XRE',
        'BTN' => 'BTN',
        'XCD' => 'EC$',
        'DDM' => 'DDM',
        'XAF' => 'FCFA',
        'DKK' => 'DKK',
        'UAK' => 'UAK',
        'UAH' => 'UAH',
        'UZS' => 'UZS',
        'UGX' => 'UGX',
        'UGS' => 'UGS',
        'UYU' => 'UYU',
        'UYP' => 'UYP',
        'UYI' => 'UYI',
        'UYW' => 'UYW',
        'GEK' => 'GEK',
        'YDD' => 'YDD',
        'YER' => 'YER',
        'AMD' => 'AMD',
        'CNY' => '￥',
        'CNH' => 'CNH',
        'ILS' => '₪',
        'ILR' => 'ILS',
        'ILP' => 'ILP',
        'IQD' => 'IQD',
        'IRR' => 'IRR',
        'BZD' => 'BZD',
        'CVE' => 'CVE',
        'RUR' => 'RUR',
        'RUB' => 'RUB',
        'BGN' => 'BGN',
        'BGO' => 'BGO',
        'BGL' => 'BGL',
        'BGM' => 'BGM',
        'HRK' => 'HRK',
        'HRD' => 'HRD',
        'GMD' => 'GMD',
        'ISK' => 'ISK',
        'ISJ' => 'ISJ',
        'GWP' => 'GWP',
        'GNF' => 'GNF',
        'GNS' => 'GNS',
        'CDF' => 'CDF',
        'LYD' => 'LYD',
        'LRD' => 'LRD',
        'CAD' => 'CA$',
        'GHS' => 'GHS',
        'GHC' => 'GHC',
        'HUF' => 'HUF',
        'YUN' => 'YUN',
        'YUR' => 'YUR',
        'YUM' => 'YUM',
        'YUD' => 'YUD',
        'SSP' => 'SSP',
        'ZAR' => 'ZAR',
        'ZAL' => 'ZAL',
        'BWP' => 'BWP',
        'QAR' => 'QAR',
        'RWF' => 'RWF',
        'LUC' => 'LUC',
        'LUF' => 'LUF',
        'LUL' => 'LUL',
        'INR' => '₹',
        'IDR' => 'IDR',
        'GTQ' => 'GTQ',
        'ECV' => 'ECV',
        'ECS' => 'ECS',
        'ERN' => 'ERN',
        'SYP' => 'SYP',
        'CUC' => 'CUC',
        'CUP' => 'CUP',
        'KGS' => 'KGS',
        'DJF' => 'DJF',
        'KZT' => 'KZT',
        'COU' => 'COU',
        'COP' => 'COP',
        'CRC' => 'CRC',
        'TMT' => 'TMT',
        'TMM' => 'TMM',
        'TRY' => 'TRY',
        'TRL' => 'TRL',
        'STN' => 'STN',
        'STD' => 'STD',
        'SHP' => 'SHP',
        'GYD' => 'GYD',
        'TZS' => 'TZS',
        'EGP' => 'EGP',
        'ETB' => 'ETB',
        'TJR' => 'TJR',
        'TJS' => 'TJS',
        'RSD' => 'RSD',
        'SLL' => 'SLL',
        'CYP' => 'CYP',
        'SCR' => 'SCR',
        'MXN' => 'MX$',
        'MXP' => 'MXP',
        'MXV' => 'MXV',
        'DOP' => 'DOP',
        'XPF' => 'CFPF',
        'ATS' => 'ATS',
        'VES' => 'VES',
        'VEB' => 'VEB',
        'VEF' => 'VEF',
        'BDT' => 'BDT',
        'AOA' => 'AOA',
        'AOK' => 'AOK',
        'AON' => 'AON',
        'AOR' => 'AOR',
        'ADP' => 'ADP',
        'NIO' => 'NIO',
        'NIC' => 'NIC',
        'NGN' => 'NGN',
        'NPR' => 'NPR',
        'BSD' => 'BSD',
        'PKR' => 'PKR',
        'BBD' => 'BBD',
        'PGK' => 'PGK',
        'PYG' => 'PYG',
        'PAB' => 'PAB',
        'BHD' => 'BHD',
        'BRZ' => 'BRZ',
        'BRE' => 'BRE',
        'BRR' => 'BRR',
        'BRC' => 'BRC',
        'BRN' => 'BRN',
        'BRB' => 'BRB',
        'BRL' => 'R$',
        'BIF' => 'BIF',
        'GRD' => 'GRD',
        'TPE' => 'TPE',
        'KYD' => 'KYD',
        'DEM' => 'DEM',
        'ITL' => 'ITL',
        'SBD' => 'SBD',
        'ZRZ' => 'ZRZ',
        'LVR' => 'LVR',
        'LVL' => 'LVL',
        'NOK' => 'NOK',
        'CZK' => 'CZK',
        'CSK' => 'CSK',
        'MDL' => 'MDL',
        'MDC' => 'MDC',
        'MAF' => 'MAF',
        'MAD' => 'MAD',
        'MCF' => 'MCF',
        'BND' => 'BND',
        'FJD' => 'FJD',
        'SZL' => 'SZL',
        'SKK' => 'SKK',
        'SIT' => 'SIT',
        'LKR' => 'LKR',
        'SGD' => 'SGD',
        'TWD' => 'NT$',
        'ZRN' => 'ZRN',
        'NZD' => 'NZ$',
        'JPY' => 'JP¥',
        'CSD' => 'CSD',
        'ROL' => 'ROL',
        'SDP' => 'SDP',
        'MZM' => 'MZM',
        'CLE' => 'CLE',
        'CLP' => 'CLP',
        'CLF' => 'CLF',
        'KPW' => 'KPW',
        'KHR' => 'KHR',
        'GEL' => 'GEL',
        'EUR' => '€',
        'CHE' => 'CHE',
        'XEU' => 'XEU',
        'BEF' => 'BEF',
        'BEC' => 'BEC',
        'BEL' => 'BEL',
        'MRU' => 'MRU',
        'MRO' => 'MRO',
        'MUR' => 'MUR',
        'TOP' => 'TOP',
        'SAR' => 'SAR',
        'FRF' => 'FRF',
        'XFU' => 'XFU',
        'XFO' => 'XFO',
        'CHW' => 'CHW',
        'PLN' => 'PLN',
        'PLZ' => 'PLZ',
        'BAN' => 'BAN',
        'BAD' => 'BAD',
        'BAM' => 'BAM',
        'THB' => 'THB',
        'ZWD' => 'ZWD',
        'ZWR' => 'ZWR',
        'ZWL' => 'ZWL',
        'HNL' => 'HNL',
        'HTG' => 'HTG',
        'HKD' => 'HK$',
        'AUD' => 'AU$',
        'MOP' => 'MOP',
        'IEP' => 'IEP',
        'EEK' => 'EEK',
        'JMD' => 'JMD',
        'TTD' => 'TTD',
        'BOV' => 'BOV',
        'BOP' => 'BOP',
        'BOB' => 'BOB',
        'BOL' => 'BOL',
        'SEK' => 'SEK',
        'CHF' => 'CHF',
        'VUV' => 'VUV',
        'BYN' => 'BYN',
        'BYR' => 'BYR',
        'BYB' => 'BYB',
        'BMD' => 'BMD',
        'GIP' => 'GIP',
        'FKP' => 'FKP',
        'KWD' => 'KWD',
        'KMF' => 'KMF',
        'PEI' => 'PEI',
        'PEN' => 'PEN',
        'PES' => 'PES',
        'TND' => 'TND',
        'LTT' => 'LTT',
        'LTL' => 'LTL',
        'SOS' => 'SOS',
        'JOD' => 'JOD',
        'NAD' => 'NAD',
        'BUK' => 'BUK',
        'MMK' => 'MMK',
        'RHD' => 'RHD',
        'RON' => 'RON',
        'USD' => 'US$',
        'USS' => 'USS',
        'USN' => 'USN',
        'LAK' => 'LAK',
        'KES' => 'KES',
        'FIM' => 'FIM',
        'SDD' => 'SDD',
        'SDG' => 'SDG',
        'SUR' => 'SUR',
        'SRD' => 'SRD',
        'SRG' => 'SRG',
        'GBP' => '£',
        'NLG' => 'NLG',
        'ANG' => 'ANG',
        'MZE' => 'MZE',
        'MZN' => 'MZN',
        'LSL' => 'LSL',
        'PHP' => 'PHP',
        'SVC' => 'SVC',
        'WST' => 'WST',
        'GWE' => 'GWE',
        'PTE' => 'PTE',
        'MNT' => 'MNT',
        'ESP' => 'ESP',
        'ESB' => 'ESB',
        'ESA' => 'ESA',
        'XOF' => 'CFA',
        'ZMW' => 'ZMW',
        'ZMK' => 'ZMK',
        'GQE' => 'GQE',
        'VND' => '₫',
        'VNN' => 'VNN',
        'AZN' => 'AZN',
        'AZM' => 'AZM',
        'AFN' => 'AFN',
        'AFA' => 'AFA',
        'DZD' => 'DZD',
        'ALL' => 'ALL',
        'ALK' => 'ALK',
        'OMR' => 'OMR',
        'ARA' => 'ARA',
        'ARS' => 'ARS',
        'ARM' => 'ARM',
        'ARP' => 'ARP',
        'ARL' => 'ARL',
        'AED' => 'AED',
        'AWG' => 'AWG',
        'KRW' => '￦',
        'KRO' => 'KRO',
        'KRH' => 'KRH',
        'MKD' => 'MKD',
        'MKN' => 'MKN',
        'MVP' => 'MVP',
        'MVR' => 'MVR',
        'MWK' => 'MWK',
        'MYR' => 'MYR',
        'MTL' => 'MTL',
        'MTP' => 'MTP',
        'MGF' => 'MGF',
        'MGA' => 'MGA',
        'MLF' => 'MLF',
        'LBP' => 'LBP'
    ];

    /**
     * 实例
     * @param string $currency
     *            货币代码
     * @param string $size
     *            纸张大小 A4 Letter Legal
     * @param string $language
     *            语言
     */
    function __construct($currency = 'CNY', $size = 'A4', $language = 'zh')
    {
        $this->columns = 5;
        $this->items = [];
        $this->totals = [];
        $this->addText = [];
        $this->firstColumnWidth = 70;
        $this->currency = $this->getCurrencySymbol($currency) ?: $this->getCurrencySymbol('CNY');
        $this->maxImageDimensions = [
            230,
            130
        ];

        $this->setLanguage($language);
        $this->setDocumentSize($size);
        $this->setColor("#222222");

        parent::__construct('P', 'mm', $size); // 'P', 'mm', [$this->document['w'], $this->document['h']]
        $this->AliasNbPages();
        $this->SetMargins($this->margins['l'], $this->margins['t'], $this->margins['r']);
    }

    /**
     * 获取货币符号
     *
     * @param string $code
     *            货币代码
     * @return string|null
     */
    public function getCurrencySymbol(string $code)
    {
        return $this->currencys[strtoupper($code)] ?? null;
    }

    /**
     * 判断货币是否可用
     *
     * @param string $code
     *            货币代码
     * @return bool
     */
    public function hasCurrency(string $code): bool
    {
        return isset($this->currencys[strtoupper($code)]);
    }

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
    public function setFontFamily(string $family, string $style = '', string $file = '')
    {
        if (is_null(self::$font)) {
            parent::AddFont($family, $style, $file);
            self::$font = $family;
        }
        return $this;
    }

    /**
     * 设置语言
     *
     * @param string $language
     * @return $this
     */
    public function setLanguage(string $language)
    {
        if (is_null(self::$l)) {
            $this->language = $language;
            $file = __DIR__ . '/../lang/' . $language . '.php';
            $file = is_file($file) ? $file : __DIR__ . '/../lang/zh.php';
            self::$l = require $file;
        }
        return $this;
    }

    /**
     * 设置要文档类型
     *
     * @param type $title
     * @return $this
     */
    public function setType(string $title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * 设置颜色
     *
     * @param string $rgbcolor
     *            十六进制颜色代码。红色示例：'＃FF0000'
     * @return $this
     */
    public function setColor(string $rgbcolor)
    {
        $this->color = $this->hex2rgb($rgbcolor);
        return $this;
    }

    /**
     * 设置文档日期
     *
     * @param string $date
     * @return $this
     */
    public function setDate(string $date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * 截止日期
     *
     * @param string $date
     * @return $this
     */
    public function setDue(string $date)
    {
        $this->due = $date;
        return $this;
    }

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
    public function setLogo($logo = 0, $maxWidth = 0, $maxHeight = 0)
    {
        if ($maxWidth and $maxHeight) {
            $this->maxImageDimensions = [
                $maxWidth,
                $maxHeight
            ];
        }
        $this->logo = $logo;
        $this->dimensions = $this->resizeToFit($logo);
        return $this;
    }

    /**
     * 设置公司详细信息
     *
     * @param array $data
     * @return $this
     */
    public function setFrom(array $data)
    {
        $this->from = $data;
        return $this;
    }

    /**
     * 客户信息
     *
     * @param array $data
     * @return $this
     */
    public function setTo(array $data)
    {
        $this->to = $data;
        return $this;
    }

    /**
     * 设置文档编号
     *
     * @param string $reference
     * @return $this
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * 设置数字格式
     *
     * @param string $decimals
     *            小数点的字符
     * @param string $thousands_sep
     *            千位分隔符的字符
     * @return $this
     */
    public function setNumberFormat($decimals, $thousands_sep)
    {
        $this->referenceformat = [
            $decimals,
            $thousands_sep
        ];
        return $this;
    }

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
    public function addItem($item, $description, $quantity, $vat, $price, $discount, $total)
    {
        $p['item'] = $item;
        $p['description'] = $this->br2nl($description);
        $p['vat'] = $vat;
        if (is_numeric($vat)) {
            $p['vat'] = $this->currency . ' ' . number_format($vat, 2, $this->referenceformat[0], $this->referenceformat[1]);
        }
        $p['quantity'] = $quantity;
        $p['price'] = $price;
        $p['total'] = $total;

        if ($discount !== false) {
            $this->firstColumnWidth = 58;
            $p['discount'] = $discount;
            if (is_numeric($discount)) {
                $p['discount'] = $this->currency . ' ' . number_format($discount, 2, $this->referenceformat[0], $this->referenceformat[1]);
            }
            $this->discountField = true;
            $this->columns = 6;
        }

        $this->items[] = $p;
        return $this;
    }

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
    public function addTotal($name, $value, $colored = false)
    {
        $t['name'] = $name;
        $t['value'] = $value;
        if (is_numeric($value)) {
            $t['value'] = $this->currency . ' ' . number_format($value, 2, $this->referenceformat[0], $this->referenceformat[1]);
        }
        $t['colored'] = $colored;
        $this->totals[] = $t;
        return $this;
    }

    /**
     * 添加标题
     *
     * @param string $title
     * @return $this
     */
    public function addTitle($title)
    {
        $this->addText[] = [
            'title',
            $title
        ];
        return $this;
    }

    /**
     * 添加段落
     *
     * @param string $paragraph
     * @return $this
     */
    public function addParagraph($paragraph)
    {
        $paragraph = $this->br2nl($paragraph);
        $this->addText[] = [
            'paragraph',
            $paragraph
        ];
        return $this;
    }

    /**
     * 添加徽章
     *
     * @param string $badge
     * @return $this
     */
    public function addBadge($badge)
    {
        $this->badge = $badge;
        return $this;
    }

    /**
     * 设置页脚
     *
     * @param string $note
     * @return $this
     */
    public function setFooternote($note)
    {
        $this->footernote = $note;
        return $this;
    }

    /**
     * 切换公司信息和客户信息的水平位置
     *
     * @return $this
     */
    public function flipflop()
    {
        $this->flipflop = true;
        return $this;
    }

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
    public function render($name = '', $destination = '')
    {
        $this->AddPage();
        $this->Body();
        $this->AliasNbPages();
        $this->Output($name, $destination);
        return $this;
    }

    public function Header()
    {
        if (isset($this->logo)) {
            $this->Image($this->logo, $this->margins['l'], $this->margins['t'], $this->dimensions[0], $this->dimensions[1]);
        }

        // Title
        $this->SetTextColor(0, 0, 0);
        $this->SetFont(self::$font, 'B', 20);
        $this->Cell(0, 5, $this->encoding($this->title, true), 0, 1, 'R');
        $this->SetFont(self::$font, '', 9);
        $this->Ln(5);

        $lineheight = 5;
        // Calculate position of strings
        $this->SetFont(self::$font, 'B', 9);
        $positionX = $this->document['w'] - $this->margins['l'] - $this->margins['r'] - max(strtoupper($this->GetStringWidth(self::$l['number'])), strtoupper($this->GetStringWidth(self::$l['date'])), strtoupper($this->GetStringWidth(self::$l['due']))) - 35;

        // Number
        $this->Cell($positionX, $lineheight);

        $this->SetTextColor($this->color[0], $this->color[1], $this->color[2]);
        $this->Cell(32, $lineheight, $this->encoding(self::$l['number'] . ':', true), 0, 0, 'L');
        $this->SetTextColor(50, 50, 50);
        $this->SetFont(self::$font, '', 9);
        $this->Cell(0, $lineheight, $this->reference, 0, 1, 'R');

        // Date
        $this->Cell($positionX, $lineheight);
        $this->SetFont(self::$font, 'B', 9);
        $this->SetTextColor($this->color[0], $this->color[1], $this->color[2]);
        $this->Cell(32, $lineheight, $this->encoding(self::$l['date'], true) . ':', 0, 0, 'L');
        $this->SetTextColor(50, 50, 50);
        $this->SetFont(self::$font, '', 9);
        $this->Cell(0, $lineheight, $this->date, 0, 1, 'R');

        // Due date
        if ($this->due) {
            $this->Cell($positionX, $lineheight);
            $this->SetFont(self::$font, 'B', 9);
            $this->SetTextColor($this->color[0], $this->color[1], $this->color[2]);
            $this->Cell(32, $lineheight, $this->encoding(self::$l['due'], true) . ':', 0, 0, 'L');
            $this->SetTextColor(50, 50, 50);
            $this->SetFont(self::$font, '', 9);
            $this->Cell(0, $lineheight, $this->due, 0, 1, 'R');
        }

        // First page
        if ($this->PageNo() == 1) {

            if (($this->margins['t'] + $this->dimensions[1]) > $this->GetY()) {
                $this->SetY($this->margins['t'] + $this->dimensions[1] + 10);
            } else {
                $this->SetY($this->GetY() + 10);
            }
            $this->Ln(5);
            $this->SetTextColor($this->color[0], $this->color[1], $this->color[2]);
            $this->SetDrawColor($this->color[0], $this->color[1], $this->color[2]);
            $this->SetFont(self::$font, 'B', 10);
            $width = ($this->document['w'] - $this->margins['l'] - $this->margins['r']) / 2;
            if (!empty($this->flipflop)) {
                $to = self::$l['to'];
                $from = self::$l['from'];
                self::$l['to'] = $from;
                self::$l['from'] = $to;
                $to = $this->to;
                $from = $this->from;
                $this->to = $from;
                $this->from = $to;
            }
            $this->Cell($width, $lineheight, $this->encoding(self::$l['from'], true), 0, 0, 'L');
            $this->Cell(0, $lineheight, $this->encoding(self::$l['to'], true), 0, 0, 'L');
            $this->Ln(7);
            $this->SetLineWidth(0.3);
            $this->Line($this->margins['l'], $this->GetY(), $this->margins['l'] + $width - 10, $this->GetY());
            $this->Line($this->margins['l'] + $width, $this->GetY(), $this->margins['l'] + $width + $width, $this->GetY());

            // Information
            $this->Ln(5);
            $this->SetTextColor(50, 50, 50);
            $this->SetFont(self::$font, 'B', 10);
            $this->Cell($width, $lineheight, $this->from[0], 0, 0, 'L');
            $this->Cell(0, $lineheight, $this->to[0], 0, 0, 'L');
            $this->SetFont(self::$font, '', 8);
            $this->SetTextColor(100, 100, 100);
            $this->Ln(7);
            for ($i = 1; $i < max(count((array)$this->from), count((array)$this->to)); $i++) {
                $this->Cell($width, $lineheight, $this->encoding($this->from[$i]), 0, 0, 'L');
                $this->Cell(0, $lineheight, $this->encoding($this->to[$i]), 0, 0, 'L');
                $this->Ln(5);
            }
            $this->Ln(-6);
        }
        $this->Ln(5);

        // Table header
        if (!isset($this->productsEnded)) {
            $width_other = ($this->document['w'] - $this->margins['l'] - $this->margins['r'] - $this->firstColumnWidth - ($this->columns * $this->columnSpacing)) / ($this->columns - 1);
            $this->SetTextColor(50, 50, 50);
            $this->Ln(12);
            $this->SetFont(self::$font, 'B', 9);
            $this->Cell(1, 10, '', 0, 0, 'L', 0);
            $this->Cell($this->firstColumnWidth, 10, $this->encoding(self::$l['product'], true), 0, 0, 'L', 0);
            $this->Cell($this->columnSpacing, 10, '', 0, 0, 'L', 0);
            $this->Cell($width_other, 10, $this->encoding(self::$l['amount'], true), 0, 0, 'C', 0);
            $this->Cell($this->columnSpacing, 10, '', 0, 0, 'L', 0);
            $this->Cell($width_other, 10, $this->encoding(self::$l['vat'], true), 0, 0, 'C', 0);
            $this->Cell($this->columnSpacing, 10, '', 0, 0, 'L', 0);

            $this->Cell($width_other, 10, $this->encoding(self::$l['price'], true), 0, 0, 'C', 0);
            if (isset($this->discountField)) {
                $this->Cell($this->columnSpacing, 10, '', 0, 0, 'L', 0);
                $this->Cell($width_other, 10, $this->encoding(self::$l['discount'], true), 0, 0, 'C', 0);
            }
            $this->Cell($this->columnSpacing, 10, '', 0, 0, 'L', 0);
            $this->Cell($width_other, 10, $this->encoding(self::$l['total'], true), 0, 0, 'C', 0);
            $this->Ln();
            $this->SetLineWidth(0.3);
            $this->SetDrawColor($this->color[0], $this->color[1], $this->color[2]);
            $this->Line($this->margins['l'], $this->GetY(), $this->document['w'] - $this->margins['r'], $this->GetY());
            $this->Ln(2);
        } else {
            $this->Ln(12);
        }
    }

    private function Body()
    {
        $width_other = ($this->document['w'] - $this->margins['l'] - $this->margins['r'] - $this->firstColumnWidth - ($this->columns * $this->columnSpacing)) / ($this->columns - 1);
        $cellHeight = 9;
        $bgcolor = (1 - $this->columnOpacity) * 255;
        if ($this->items) {
            foreach ($this->items as $item) {
                if ($item['description']) {
                    // Precalculate height
                    $calculateHeight = new Invoice();
                    $calculateHeight->addPage();
                    $calculateHeight->setXY(0, 0);
                    $calculateHeight->SetFont(self::$font, '', 7);
                    $calculateHeight->MultiCell($this->firstColumnWidth, 3, $this->encoding($item['description']), 0, 'L', 1);
                    $descriptionHeight = $calculateHeight->getY() + $cellHeight + 2;
                    $pageHeight = $this->document['h'] - $this->GetY() - $this->margins['t'] - $this->margins['t'];
                    if ($pageHeight < 0) {
                        $this->AddPage();
                    }
                }
                $cHeight = $cellHeight;
                $this->SetFont(self::$font, 'b', 8);
                $this->SetTextColor(50, 50, 50);
                $this->SetFillColor($bgcolor, $bgcolor, $bgcolor);
                $this->Cell(1, $cHeight, '', 0, 0, 'L', 1);
                $x = $this->GetX();
                $this->Cell($this->firstColumnWidth, $cHeight, $this->encoding($item['item']), 0, 0, 'L', 1);
                if ($item['description']) {
                    $resetX = $this->GetX();
                    $resetY = $this->GetY();
                    $this->SetTextColor(120, 120, 120);
                    $this->SetXY($x, $this->GetY() + 8);
                    $this->SetFont(self::$font, '', 7);
                    $this->MultiCell($this->firstColumnWidth, 3, $this->encoding($item['description']), 0, 'L', 1);
                    // Calculate Height
                    $newY = $this->GetY();
                    $cHeight = $newY - $resetY + 2;
                    // Make our spacer cell the same height
                    $this->SetXY($x - 1, $resetY);
                    $this->Cell(1, $cHeight, '', 0, 0, 'L', 1);
                    // Draw empty cell
                    $this->SetXY($x, $newY);
                    $this->Cell($this->firstColumnWidth, 2, '', 0, 0, 'L', 1);
                    $this->SetXY($resetX, $resetY);
                }
                $this->SetTextColor(50, 50, 50);
                $this->SetFont(self::$font, '', 8);
                $this->Cell($this->columnSpacing, $cHeight, '', 0, 0, 'L', 0);
                $this->Cell($width_other, $cHeight, $item['quantity'], 0, 0, 'C', 1);
                $this->Cell($this->columnSpacing, $cHeight, '', 0, 0, 'L', 0);
                $this->Cell($width_other, $cHeight, $this->encoding($item['vat']), 0, 0, 'C', 1);
                $this->Cell($this->columnSpacing, $cHeight, '', 0, 0, 'L', 0);
                $this->Cell($width_other, $cHeight, $this->encoding($this->currency . ' ' . number_format($item['price'], 2, $this->referenceformat[0], $this->referenceformat[1])), 0, 0, 'C', 1);
                if (isset($this->discountField)) {
                    $this->Cell($this->columnSpacing, $cHeight, '', 0, 0, 'L', 0);
                    if (isset($item['discount'])) {
                        $this->Cell($width_other, $cHeight, $this->encoding($item['discount']), 0, 0, 'C', 1);
                    } else {
                        $this->Cell($width_other, $cHeight, '', 0, 0, 'C', 1);
                    }
                }
                $this->Cell($this->columnSpacing, $cHeight, '', 0, 0, 'L', 0);
                $this->Cell($width_other, $cHeight, $this->encoding($this->currency . ' ' . number_format($item['total'], 2, $this->referenceformat[0], $this->referenceformat[1])), 0, 0, 'C', 1);
                $this->Ln();
                $this->Ln($this->columnSpacing);
            }
        }
        $badgeX = $this->getX();
        $badgeY = $this->getY();

        // Add totals
        if ($this->totals) {
            foreach ($this->totals as $total) {
                $this->SetTextColor(50, 50, 50);
                $this->SetFillColor($bgcolor, $bgcolor, $bgcolor);
                $this->Cell(1 + $this->firstColumnWidth, $cellHeight, '', 0, 0, 'L', 0);
                for ($i = 0; $i < $this->columns - 3; $i++) {
                    $this->Cell($width_other, $cellHeight, '', 0, 0, 'L', 0);
                    $this->Cell($this->columnSpacing, $cellHeight, '', 0, 0, 'L', 0);
                }
                $this->Cell($this->columnSpacing, $cellHeight, '', 0, 0, 'L', 0);
                if ($total['colored']) {
                    $this->SetTextColor(255, 255, 255);
                    $this->SetFillColor($this->color[0], $this->color[1], $this->color[2]);
                }
                $this->SetFont(self::$font, 'b', 8);
                $this->Cell(1, $cellHeight, '', 0, 0, 'L', 1);
                $this->Cell($width_other - 1, $cellHeight, $this->encoding($total['name']), 0, 0, 'L', 1);
                $this->Cell($this->columnSpacing, $cellHeight, '', 0, 0, 'L', 0);
                $this->SetFont(self::$font, 'b', 8);
                $this->SetFillColor($bgcolor, $bgcolor, $bgcolor);
                if ($total['colored']) {
                    $this->SetTextColor(255, 255, 255);
                    $this->SetFillColor($this->color[0], $this->color[1], $this->color[2]);
                }
                $this->Cell($width_other, $cellHeight, $this->encoding($total['value']), 0, 0, 'C', 1);
                $this->Ln();
                $this->Ln($this->columnSpacing);
            }
        }
        $this->productsEnded = true;
        $this->Ln();
        $this->Ln(3);

        // Badge
        if ($this->badge) {
            $badge = ' ' . $this->encoding($this->badge, true) . ' ';
            $resetX = $this->getX();
            $resetY = $this->getY();
            $this->setXY($badgeX, $badgeY + 15);
            $this->SetLineWidth(0.4);
            $this->SetDrawColor($this->color[0], $this->color[1], $this->color[2]);
            $this->setTextColor($this->color[0], $this->color[1], $this->color[2]);
            $this->SetFont(self::$font, 'b', 15);
            $this->Rotate(10, $this->getX(), $this->getY());
            $this->Rect($this->GetX(), $this->GetY(), $this->GetStringWidth($badge) + 2, 10);
            $this->Write(10, $badge);
            $this->Rotate(0);
            if ($resetY > $this->getY() + 20) {
                $this->setXY($resetX, $resetY);
            } else {
                $this->Ln(18);
            }
        }

        // Add information
        foreach ($this->addText as $text) {
            if ($text[0] == 'title') {
                $this->SetFont(self::$font, 'b', 9);
                $this->SetTextColor(50, 50, 50);
                $this->Cell(0, 10, $this->encoding($text[1], true), 0, 0, 'L', 0);
                $this->Ln();
                $this->SetLineWidth(0.3);
                $this->SetDrawColor($this->color[0], $this->color[1], $this->color[2]);
                $this->Line($this->margins['l'], $this->GetY(), $this->document['w'] - $this->margins['r'], $this->GetY());
                $this->Ln(4);
            }
            if ($text[0] == 'paragraph') {
                $this->SetTextColor(80, 80, 80);
                $this->SetFont(self::$font, '', 8);
                $this->MultiCell(0, 4, $this->encoding($text[1]), 0, 'L', 0);
                $this->Ln(4);
            }
        }
    }

    public function Footer()
    {
        $this->SetY(-$this->margins['t']);
        $this->SetFont(self::$font, '', 8);
        $this->SetTextColor(50, 50, 50);
        $this->Cell(0, 10, $this->footernote, 0, 0, 'L');
        $this->Cell(0, 10, self::$l['page'] . ' ' . $this->PageNo() . ' ' . self::$l['page_of'] . ' {nb}', 0, 0, 'R');
    }

    private function setDocumentSize($dsize)
    {
        switch ($dsize) {
            case 'A4':
                $document['w'] = 210;
                $document['h'] = 297;
                break;
            case 'letter':
                $document['w'] = 215.9;
                $document['h'] = 279.4;
                break;
            case 'legal':
                $document['w'] = 215.9;
                $document['h'] = 355.6;
                break;
            default:
                $document['w'] = 210;
                $document['h'] = 297;
                break;
        }

        $this->document = $document;
    }

    private function resizeToFit($image)
    {
        list($width, $height) = getimagesize($image);
        $newWidth = $this->maxImageDimensions[0] / $width;
        $newHeight = $this->maxImageDimensions[1] / $height;
        $scale = min($newWidth, $newHeight);
        return [
            round($this->pixelsToMM($scale * $width)),
            round($this->pixelsToMM($scale * $height))
        ];
    }

    private function pixelsToMM($val)
    {
        $mm_inch = 25.4;
        $dpi = 96;
        return $val * $mm_inch / $dpi;
    }

    private function hex2rgb($hex)
    {
        $hex = str_replace("#", "", $hex);

        if (strlen($hex) == 3) {
            $r = hexdec(substr($hex, 0, 1) . substr($hex, 0, 1));
            $g = hexdec(substr($hex, 1, 1) . substr($hex, 1, 1));
            $b = hexdec(substr($hex, 2, 1) . substr($hex, 2, 1));
        } else {
            $r = hexdec(substr($hex, 0, 2));
            $g = hexdec(substr($hex, 2, 2));
            $b = hexdec(substr($hex, 4, 2));
        }
        $rgb = [
            $r,
            $g,
            $b
        ];
        return $rgb;
    }

    private function br2nl($string)
    {
        return preg_replace('/\<br(\s*)?\/?\>/i', "\n", $string);
    }

    protected function Rotate($angle, $x = -1, $y = -1)
    {
        if ($x == -1)
            $x = $this->x;
        if ($y == -1)
            $y = $this->y;
        if ($this->angle != 0)
            $this->_out('Q');
        $this->angle = $angle;
        if ($angle != 0) {
            $angle *= M_PI / 180;
            $c = cos($angle);
            $s = sin($angle);
            $cx = $x * $this->k;
            $cy = ($this->h - $y) * $this->k;
            $this->_out(sprintf('q %.5F %.5F %.5F %.5F %.2F %.2F cm 1 0 0 1 %.2F %.2F cm', $c, $s, -$s, $c, $cx, $cy, -$cx, -$cy));
        }
    }

    function _endpage()
    {
        if ($this->angle != 0) {
            $this->angle = 0;
            $this->_out('Q');
        }
        parent::_endpage();
    }

    protected function encoding($str, $strtoupper = false)
    {

        // $str = mb_convert_encoding($str, 'utf-8');
        // $str = iconv('UTF-8', 'windows-1252', $str);
        return $str;
    }
}
