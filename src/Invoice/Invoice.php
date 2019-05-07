<?php
namespace Invoice;

class Invoice
{
    /**
     * Chinese People’s Bank Dollar
     * Chinese People’s Bank Dollar
     */
    const CNX = ['CNX', 'CNX'];
    /**
     * RINET 基金
     * RINET Funds
     */
    const XRE = ['XRE', 'XRE'];
    /**
     * 不丹努尔特鲁姆
     * Bhutanese Ngultrum
     */
    const BTN = ['BTN', 'BTN'];
    /**
     * 东加勒比元
     * East Caribbean Dollar
     */
    const XCD = ['XCD', 'EC$'];
    /**
     * 东德奥斯特马克
     * East German Mark
     */
    const DDM = ['DDM', 'DDM'];
    /**
     * 中非法郎
     * Central African CFA Franc
     */
    const XAF = ['XAF', 'FCFA'];
    /**
     * 丹麦克朗
     * Danish Krone
     */
    const DKK = ['DKK', 'DKK'];
    /**
     * 乌克兰币
     * Ukrainian Karbovanets
     */
    const UAK = ['UAK', 'UAK'];
    /**
     * 乌克兰格里夫纳
     * Ukrainian Hryvnia
     */
    const UAH = ['UAH', 'UAH'];
    /**
     * 乌兹别克斯坦苏姆
     * Uzbekistani Som
     */
    const UZS = ['UZS', 'UZS'];
    /**
     * 乌干达先令
     * Ugandan Shilling
     */
    const UGX = ['UGX', 'UGX'];
    /**
     * 乌干达先令 (1966–1987)
     * Ugandan Shilling (1966–1987)
     */
    const UGS = ['UGS', 'UGS'];
    /**
     * 乌拉圭比索
     * Uruguayan Peso
     */
    const UYU = ['UYU', 'UYU'];
    /**
     * 乌拉圭比索 (1975–1993)
     * Uruguayan Peso (1975–1993)
     */
    const UYP = ['UYP', 'UYP'];
    /**
     * 乌拉圭比索（索引单位）
     * Uruguayan Peso (Indexed Units)
     */
    const UYI = ['UYI', 'UYI'];
    /**
     * 乌拉圭票面工资指数单位
     * Uruguayan Nominal Wage Index Unit
     */
    const UYW = ['UYW', 'UYW'];
    /**
     * 乔治亚库蓬拉瑞特
     * Georgian Kupon Larit
     */
    const GEK = ['GEK', 'GEK'];
    /**
     * 也门第纳尔
     * Yemeni Dinar
     */
    const YDD = ['YDD', 'YDD'];
    /**
     * 也门里亚尔
     * Yemeni Rial
     */
    const YER = ['YER', 'YER'];
    /**
     * 亚美尼亚德拉姆
     * Armenian Dram
     */
    const AMD = ['AMD', 'AMD'];
    /**
     * 人民币
     * Chinese Yuan
     */
    const CNY = ['CNY', '￥'];
    /**
     * 人民币（离岸）
     * Chinese Yuan (offshore)
     */
    const CNH = ['CNH', 'CNH'];
    /**
     * 以色列新谢克尔
     * Israeli New Shekel
     */
    const ILS = ['ILS', '₪'];
    /**
     * 以色列谢克尔(1980–1985)
     * Israeli Shekel (1980–1985)
     */
    const ILR = ['ILR', 'ILS'];
    /**
     * 以色列镑
     * Israeli Pound
     */
    const ILP = ['ILP', 'ILP'];
    /**
     * 伊拉克第纳尔
     * Iraqi Dinar
     */
    const IQD = ['IQD', 'IQD'];
    /**
     * 伊朗里亚尔
     * Iranian Rial
     */
    const IRR = ['IRR', 'IRR'];
    /**
     * 伯利兹元
     * Belize Dollar
     */
    const BZD = ['BZD', 'BZD'];
    /**
     * 佛得角埃斯库多
     * Cape Verdean Escudo
     */
    const CVE = ['CVE', 'CVE'];
    /**
     * 俄国卢布 (1991–1998)
     * Russian Ruble (1991–1998)
     */
    const RUR = ['RUR', 'RUR'];
    /**
     * 俄罗斯卢布
     * Russian Ruble
     */
    const RUB = ['RUB', 'RUB'];
    /**
     * 保加利亚列弗
     * Bulgarian Lev
     */
    const BGN = ['BGN', 'BGN'];
    /**
     * 保加利亚列弗 (1879–1952)
     * Bulgarian Lev (1879–1952)
     */
    const BGO = ['BGO', 'BGO'];
    /**
     * 保加利亚硬列弗
     * Bulgarian Hard Lev
     */
    const BGL = ['BGL', 'BGL'];
    /**
     * 保加利亚社会党列弗
     * Bulgarian Socialist Lev
     */
    const BGM = ['BGM', 'BGM'];
    /**
     * 克罗地亚库纳
     * Croatian Kuna
     */
    const HRK = ['HRK', 'HRK'];
    /**
     * 克罗地亚第纳尔
     * Croatian Dinar
     */
    const HRD = ['HRD', 'HRD'];
    /**
     * 冈比亚达拉西
     * Gambian Dalasi
     */
    const GMD = ['GMD', 'GMD'];
    /**
     * 冰岛克朗
     * Icelandic Króna
     */
    const ISK = ['ISK', 'ISK'];
    /**
     * 冰岛克朗(1918–1981)
     * Icelandic Króna (1918–1981)
     */
    const ISJ = ['ISJ', 'ISJ'];
    /**
     * 几内亚比绍比索
     * Guinea-Bissau Peso
     */
    const GWP = ['GWP', 'GWP'];
    /**
     * 几内亚法郎
     * Guinean Franc
     */
    const GNF = ['GNF', 'GNF'];
    /**
     * 几内亚西里
     * Guinean Syli
     */
    const GNS = ['GNS', 'GNS'];
    /**
     * 刚果法郎
     * Congolese Franc
     */
    const CDF = ['CDF', 'CDF'];
    /**
     * 利比亚第纳尔
     * Libyan Dinar
     */
    const LYD = ['LYD', 'LYD'];
    /**
     * 利比里亚元
     * Liberian Dollar
     */
    const LRD = ['LRD', 'LRD'];
    /**
     * 加拿大元
     * Canadian Dollar
     */
    const CAD = ['CAD', 'CA$'];
    /**
     * 加纳塞地
     * Ghanaian Cedi
     */
    const GHS = ['GHS', 'GHS'];
    /**
     * 加纳塞第
     * Ghanaian Cedi (1979–2007)
     */
    const GHC = ['GHC', 'GHC'];
    /**
     * 匈牙利福林
     * Hungarian Forint
     */
    const HUF = ['HUF', 'HUF'];
    /**
     * 南斯拉夫可兑换第纳尔 (1990–1992)
     * Yugoslavian Convertible Dinar (1990–1992)
     */
    const YUN = ['YUN', 'YUN'];
    /**
     * 南斯拉夫改良第纳尔 (1992–1993)
     * Yugoslavian Reformed Dinar (1992–1993)
     */
    const YUR = ['YUR', 'YUR'];
    /**
     * 南斯拉夫新第纳尔 (1994–2002)
     * Yugoslavian New Dinar (1994–2002)
     */
    const YUM = ['YUM', 'YUM'];
    /**
     * 南斯拉夫硬第纳尔 (1966–1990)
     * Yugoslavian Hard Dinar (1966–1990)
     */
    const YUD = ['YUD', 'YUD'];
    /**
     * 南苏丹镑
     * South Sudanese Pound
     */
    const SSP = ['SSP', 'SSP'];
    /**
     * 南非兰特
     * South African Rand
     */
    const ZAR = ['ZAR', 'ZAR'];
    /**
     * 南非兰特 (金融)
     * South African Rand (financial)
     */
    const ZAL = ['ZAL', 'ZAL'];
    /**
     * 博茨瓦纳普拉
     * Botswanan Pula
     */
    const BWP = ['BWP', 'BWP'];
    /**
     * 卡塔尔里亚尔
     * Qatari Rial
     */
    const QAR = ['QAR', 'QAR'];
    /**
     * 卢旺达法郎
     * Rwandan Franc
     */
    const RWF = ['RWF', 'RWF'];
    /**
     * 卢森堡可兑换法郎
     * Luxembourgian Convertible Franc
     */
    const LUC = ['LUC', 'LUC'];
    /**
     * 卢森堡法郎
     * Luxembourgian Franc
     */
    const LUF = ['LUF', 'LUF'];
    /**
     * 卢森堡金融法郎
     * Luxembourg Financial Franc
     */
    const LUL = ['LUL', 'LUL'];
    /**
     * 印度卢比
     * Indian Rupee
     */
    const INR = ['INR', '₹'];
    /**
     * 印度尼西亚盾
     * Indonesian Rupiah
     */
    const IDR = ['IDR', 'IDR'];
    /**
     * 危地马拉格查尔
     * Guatemalan Quetzal
     */
    const GTQ = ['GTQ', 'GTQ'];
    /**
     * 厄瓜多尔 (UVC)
     * Ecuadorian Unit of Constant Value
     */
    const ECV = ['ECV', 'ECV'];
    /**
     * 厄瓜多尔苏克雷
     * Ecuadorian Sucre
     */
    const ECS = ['ECS', 'ECS'];
    /**
     * 厄立特里亚纳克法
     * Eritrean Nakfa
     */
    const ERN = ['ERN', 'ERN'];
    /**
     * 叙利亚镑
     * Syrian Pound
     */
    const SYP = ['SYP', 'SYP'];
    /**
     * 古巴可兑换比索
     * Cuban Convertible Peso
     */
    const CUC = ['CUC', 'CUC'];
    /**
     * 古巴比索
     * Cuban Peso
     */
    const CUP = ['CUP', 'CUP'];
    /**
     * 吉尔吉斯斯坦索姆
     * Kyrgystani Som
     */
    const KGS = ['KGS', 'KGS'];
    /**
     * 吉布提法郎
     * Djiboutian Franc
     */
    const DJF = ['DJF', 'DJF'];
    /**
     * 哈萨克斯坦坚戈
     * Kazakhstani Tenge
     */
    const KZT = ['KZT', 'KZT'];
    /**
     * 哥伦比亚币
     * Colombian Real Value Unit
     */
    const COU = ['COU', 'COU'];
    /**
     * 哥伦比亚比索
     * Colombian Peso
     */
    const COP = ['COP', 'COP'];
    /**
     * 哥斯达黎加科朗
     * Costa Rican Colón
     */
    const CRC = ['CRC', 'CRC'];
    /**
     * 土库曼斯坦马纳特
     * Turkmenistani Manat
     */
    const TMT = ['TMT', 'TMT'];
    /**
     * 土库曼斯坦马纳特 (1993–2009)
     * Turkmenistani Manat (1993–2009)
     */
    const TMM = ['TMM', 'TMM'];
    /**
     * 土耳其里拉
     * Turkish Lira
     */
    const TRY = ['TRY', 'TRY'];
    /**
     * 土耳其里拉 (1922–2005)
     * Turkish Lira (1922–2005)
     */
    const TRL = ['TRL', 'TRL'];
    /**
     * 圣多美和普林西比多布拉
     * São Tomé & Príncipe Dobra
     */
    const STN = ['STN', 'STN'];
    /**
     * 圣多美和普林西比多布拉 (1977–2017)
     * São Tomé & Príncipe Dobra (1977–2017)
     */
    const STD = ['STD', 'STD'];
    /**
     * 圣赫勒拿群岛磅
     * St. Helena Pound
     */
    const SHP = ['SHP', 'SHP'];
    /**
     * 圭亚那元
     * Guyanaese Dollar
     */
    const GYD = ['GYD', 'GYD'];
    /**
     * 坦桑尼亚先令
     * Tanzanian Shilling
     */
    const TZS = ['TZS', 'TZS'];
    /**
     * 埃及镑
     * Egyptian Pound
     */
    const EGP = ['EGP', 'EGP'];
    /**
     * 埃塞俄比亚比尔
     * Ethiopian Birr
     */
    const ETB = ['ETB', 'ETB'];
    /**
     * 塔吉克斯坦卢布
     * Tajikistani Ruble
     */
    const TJR = ['TJR', 'TJR'];
    /**
     * 塔吉克斯坦索莫尼
     * Tajikistani Somoni
     */
    const TJS = ['TJS', 'TJS'];
    /**
     * 塞尔维亚第纳尔
     * Serbian Dinar
     */
    const RSD = ['RSD', 'RSD'];
    /**
     * 塞拉利昂利昂
     * Sierra Leonean Leone
     */
    const SLL = ['SLL', 'SLL'];
    /**
     * 塞浦路斯镑
     * Cypriot Pound
     */
    const CYP = ['CYP', 'CYP'];
    /**
     * 塞舌尔卢比
     * Seychellois Rupee
     */
    const SCR = ['SCR', 'SCR'];
    /**
     * 墨西哥比索
     * Mexican Peso
     */
    const MXN = ['MXN', 'MX$'];
    /**
     * 墨西哥银比索 (1861–1992)
     * Mexican Silver Peso (1861–1992)
     */
    const MXP = ['MXP', 'MXP'];
    /**
     * 墨西哥（资金）
     * Mexican Investment Unit
     */
    const MXV = ['MXV', 'MXV'];
    /**
     * 多米尼加比索
     * Dominican Peso
     */
    const DOP = ['DOP', 'DOP'];
    /**
     * 太平洋法郎
     * CFP Franc
     */
    const XPF = ['XPF', 'CFPF'];
    /**
     * 奥地利先令
     * Austrian Schilling
     */
    const ATS = ['ATS', 'ATS'];
    /**
     * 委内瑞拉玻利瓦尔
     * Venezuelan Bolívar
     */
    const VES = ['VES', 'VES'];
    /**
     * 委内瑞拉玻利瓦尔 (1871–2008)
     * Venezuelan Bolívar (1871–2008)
     */
    const VEB = ['VEB', 'VEB'];
    /**
     * 委内瑞拉玻利瓦尔 (2008–2018)
     * Venezuelan Bolívar (2008–2018)
     */
    const VEF = ['VEF', 'VEF'];
    /**
     * 孟加拉塔卡
     * Bangladeshi Taka
     */
    const BDT = ['BDT', 'BDT'];
    /**
     * 安哥拉宽扎
     * Angolan Kwanza
     */
    const AOA = ['AOA', 'AOA'];
    /**
     * 安哥拉宽扎 (1977–1990)
     * Angolan Kwanza (1977–1991)
     */
    const AOK = ['AOK', 'AOK'];
    /**
     * 安哥拉新宽扎 (1990–2000)
     * Angolan New Kwanza (1990–2000)
     */
    const AON = ['AON', 'AON'];
    /**
     * 安哥拉重新调整宽扎 (1995–1999)
     * Angolan Readjusted Kwanza (1995–1999)
     */
    const AOR = ['AOR', 'AOR'];
    /**
     * 安道尔比塞塔
     * Andorran Peseta
     */
    const ADP = ['ADP', 'ADP'];
    /**
     * 尼加拉瓜科多巴
     * Nicaraguan Córdoba
     */
    const NIO = ['NIO', 'NIO'];
    /**
     * 尼加拉瓜科多巴 (1988–1991)
     * Nicaraguan Córdoba (1988–1991)
     */
    const NIC = ['NIC', 'NIC'];
    /**
     * 尼日利亚奈拉
     * Nigerian Naira
     */
    const NGN = ['NGN', 'NGN'];
    /**
     * 尼泊尔卢比
     * Nepalese Rupee
     */
    const NPR = ['NPR', 'NPR'];
    /**
     * 巴哈马元
     * Bahamian Dollar
     */
    const BSD = ['BSD', 'BSD'];
    /**
     * 巴基斯坦卢比
     * Pakistani Rupee
     */
    const PKR = ['PKR', 'PKR'];
    /**
     * 巴巴多斯元
     * Barbadian Dollar
     */
    const BBD = ['BBD', 'BBD'];
    /**
     * 巴布亚新几内亚基那
     * Papua New Guinean Kina
     */
    const PGK = ['PGK', 'PGK'];
    /**
     * 巴拉圭瓜拉尼
     * Paraguayan Guarani
     */
    const PYG = ['PYG', 'PYG'];
    /**
     * 巴拿马巴波亚
     * Panamanian Balboa
     */
    const PAB = ['PAB', 'PAB'];
    /**
     * 巴林第纳尔
     * Bahraini Dinar
     */
    const BHD = ['BHD', 'BHD'];
    /**
     * 巴西克鲁塞罗 (1942–1967)
     * Brazilian Cruzeiro (1942–1967)
     */
    const BRZ = ['BRZ', 'BRZ'];
    /**
     * 巴西克鲁塞罗 (1990–1993)
     * Brazilian Cruzeiro (1990–1993)
     */
    const BRE = ['BRE', 'BRE'];
    /**
     * 巴西克鲁塞罗 (1993–1994)
     * Brazilian Cruzeiro (1993–1994)
     */
    const BRR = ['BRR', 'BRR'];
    /**
     * 巴西克鲁扎多 (1986–1989)
     * Brazilian Cruzado (1986–1989)
     */
    const BRC = ['BRC', 'BRC'];
    /**
     * 巴西新克鲁扎多 (1989–1990)
     * Brazilian New Cruzado (1989–1990)
     */
    const BRN = ['BRN', 'BRN'];
    /**
     * 巴西新克鲁赛罗 (1967–1986)
     * Brazilian New Cruzeiro (1967–1986)
     */
    const BRB = ['BRB', 'BRB'];
    /**
     * 巴西雷亚尔
     * Brazilian Real
     */
    const BRL = ['BRL', 'R$'];
    /**
     * 布隆迪法郎
     * Burundian Franc
     */
    const BIF = ['BIF', 'BIF'];
    /**
     * 希腊德拉克马
     * Greek Drachma
     */
    const GRD = ['GRD', 'GRD'];
    /**
     * 帝汶埃斯库多
     * Timorese Escudo
     */
    const TPE = ['TPE', 'TPE'];
    /**
     * 开曼元
     * Cayman Islands Dollar
     */
    const KYD = ['KYD', 'KYD'];
    /**
     * 德国马克
     * German Mark
     */
    const DEM = ['DEM', 'DEM'];
    /**
     * 意大利里拉
     * Italian Lira
     */
    const ITL = ['ITL', 'ITL'];
    /**
     * 所罗门群岛元
     * Solomon Islands Dollar
     */
    const SBD = ['SBD', 'SBD'];
    /**
     * 扎伊尔 (1971–1993)
     * Zairean Zaire (1971–1993)
     */
    const ZRZ = ['ZRZ', 'ZRZ'];
    /**
     * 拉脱维亚卢布
     * Latvian Ruble
     */
    const LVR = ['LVR', 'LVR'];
    /**
     * 拉脱维亚拉特
     * Latvian Lats
     */
    const LVL = ['LVL', 'LVL'];
    /**
     * 挪威克朗
     * Norwegian Krone
     */
    const NOK = ['NOK', 'NOK'];
    /**
     * 捷克克朗
     * Czech Koruna
     */
    const CZK = ['CZK', 'CZK'];
    /**
     * 捷克硬克朗
     * Czechoslovak Hard Koruna
     */
    const CSK = ['CSK', 'CSK'];
    /**
     * 摩尔多瓦列伊
     * Moldovan Leu
     */
    const MDL = ['MDL', 'MDL'];
    /**
     * 摩尔多瓦库邦
     * Moldovan Cupon
     */
    const MDC = ['MDC', 'MDC'];
    /**
     * 摩洛哥法郎
     * Moroccan Franc
     */
    const MAF = ['MAF', 'MAF'];
    /**
     * 摩洛哥迪拉姆
     * Moroccan Dirham
     */
    const MAD = ['MAD', 'MAD'];
    /**
     * 摩纳哥法郎
     * Monegasque Franc
     */
    const MCF = ['MCF', 'MCF'];
    /**
     * 文莱元
     * Brunei Dollar
     */
    const BND = ['BND', 'BND'];
    /**
     * 斐济元
     * Fijian Dollar
     */
    const FJD = ['FJD', 'FJD'];
    /**
     * 斯威士兰里兰吉尼
     * Swazi Lilangeni
     */
    const SZL = ['SZL', 'SZL'];
    /**
     * 斯洛伐克克朗
     * Slovak Koruna
     */
    const SKK = ['SKK', 'SKK'];
    /**
     * 斯洛文尼亚托拉尔
     * Slovenian Tolar
     */
    const SIT = ['SIT', 'SIT'];
    /**
     * 斯里兰卡卢比
     * Sri Lankan Rupee
     */
    const LKR = ['LKR', 'LKR'];
    /**
     * 新加坡元
     * Singapore Dollar
     */
    const SGD = ['SGD', 'SGD'];
    /**
     * 新台币
     * New Taiwan Dollar
     */
    const TWD = ['TWD', 'NT$'];
    /**
     * 新扎伊尔 (1993–1998)
     * Zairean New Zaire (1993–1998)
     */
    const ZRN = ['ZRN', 'ZRN'];
    /**
     * 新西兰元
     * New Zealand Dollar
     */
    const NZD = ['NZD', 'NZ$'];
    /**
     * 日元
     * Japanese Yen
     */
    const JPY = ['JPY', 'JP¥'];
    /**
     * 旧塞尔维亚第纳尔
     * Serbian Dinar (2002–2006)
     */
    const CSD = ['CSD', 'CSD'];
    /**
     * 旧罗马尼亚列伊
     * Romanian Leu (1952–2006)
     */
    const ROL = ['ROL', 'ROL'];
    /**
     * 旧苏丹镑
     * Sudanese Pound (1957–1998)
     */
    const SDP = ['SDP', 'SDP'];
    /**
     * 旧莫桑比克美提卡
     * Mozambican Metical (1980–2006)
     */
    const MZM = ['MZM', 'MZM'];
    /**
     * 智利埃斯库多
     * Chilean Escudo
     */
    const CLE = ['CLE', 'CLE'];
    /**
     * 智利比索
     * Chilean Peso
     */
    const CLP = ['CLP', 'CLP'];
    /**
     * 智利（资金）
     * Chilean Unit of Account (UF)
     */
    const CLF = ['CLF', 'CLF'];
    /**
     * 朝鲜元
     * North Korean Won
     */
    const KPW = ['KPW', 'KPW'];
    /**
     * 柬埔寨瑞尔
     * Cambodian Riel
     */
    const KHR = ['KHR', 'KHR'];
    /**
     * 格鲁吉亚拉里
     * Georgian Lari
     */
    const GEL = ['GEL', 'GEL'];
    /**
     * 欧元
     * Euro
     */
    const EUR = ['EUR', '€'];
    /**
     * 欧元 (WIR)
     * WIR Euro
     */
    const CHE = ['CHE', 'CHE'];
    /**
     * 欧洲货币单位
     * European Currency Unit
     */
    const XEU = ['XEU', 'XEU'];
    /**
     * 比利时法郎
     * Belgian Franc
     */
    const BEF = ['BEF', 'BEF'];
    /**
     * 比利时法郎（可兑换）
     * Belgian Franc (convertible)
     */
    const BEC = ['BEC', 'BEC'];
    /**
     * 比利时法郎（金融）
     * Belgian Franc (financial)
     */
    const BEL = ['BEL', 'BEL'];
    /**
     * 毛里塔尼亚乌吉亚
     * Mauritanian Ouguiya
     */
    const MRU = ['MRU', 'MRU'];
    /**
     * 毛里塔尼亚乌吉亚 (1973–2017)
     * Mauritanian Ouguiya (1973–2017)
     */
    const MRO = ['MRO', 'MRO'];
    /**
     * 毛里求斯卢比
     * Mauritian Rupee
     */
    const MUR = ['MUR', 'MUR'];
    /**
     * 汤加潘加
     * Tongan Paʻanga
     */
    const TOP = ['TOP', 'TOP'];
    /**
     * 沙特里亚尔
     * Saudi Riyal
     */
    const SAR = ['SAR', 'SAR'];
    /**
     * 法国法郎
     * French Franc
     */
    const FRF = ['FRF', 'FRF'];
    /**
     * 法国法郎 (UIC)
     * French UIC-Franc
     */
    const XFU = ['XFU', 'XFU'];
    /**
     * 法国金法郎
     * French Gold Franc
     */
    const XFO = ['XFO', 'XFO'];
    /**
     * 法郎 (WIR)
     * WIR Franc
     */
    const CHW = ['CHW', 'CHW'];
    /**
     * 波兰兹罗提
     * Polish Zloty
     */
    const PLN = ['PLN', 'PLN'];
    /**
     * 波兰兹罗提 (1950–1995)
     * Polish Zloty (1950–1995)
     */
    const PLZ = ['PLZ', 'PLZ'];
    /**
     * 波士尼亚-赫塞哥维纳新第纳尔 (1994–1997)
     * Bosnia-Herzegovina New Dinar (1994–1997)
     */
    const BAN = ['BAN', 'BAN'];
    /**
     * 波士尼亚-赫塞哥维纳第纳尔 (1992–1994)
     * Bosnia-Herzegovina Dinar (1992–1994)
     */
    const BAD = ['BAD', 'BAD'];
    /**
     * 波斯尼亚-黑塞哥维那可兑换马克
     * Bosnia-Herzegovina Convertible Mark
     */
    const BAM = ['BAM', 'BAM'];
    /**
     * 泰铢
     * Thai Baht
     */
    const THB = ['THB', 'THB'];
    /**
     * 津巴布韦元 (1980–2008)
     * Zimbabwean Dollar (1980–2008)
     */
    const ZWD = ['ZWD', 'ZWD'];
    /**
     * 津巴布韦元 (2008)
     * Zimbabwean Dollar (2008)
     */
    const ZWR = ['ZWR', 'ZWR'];
    /**
     * 津巴布韦元 (2009)
     * Zimbabwean Dollar (2009)
     */
    const ZWL = ['ZWL', 'ZWL'];
    /**
     * 洪都拉斯伦皮拉
     * Honduran Lempira
     */
    const HNL = ['HNL', 'HNL'];
    /**
     * 海地古德
     * Haitian Gourde
     */
    const HTG = ['HTG', 'HTG'];
    /**
     * 港元
     * Hong Kong Dollar
     */
    const HKD = ['HKD', 'HK$'];
    /**
     * 澳大利亚元
     * Australian Dollar
     */
    const AUD = ['AUD', 'AU$'];
    /**
     * 澳门币
     * Macanese Pataca
     */
    const MOP = ['MOP', 'MOP'];
    /**
     * 爱尔兰镑
     * Irish Pound
     */
    const IEP = ['IEP', 'IEP'];
    /**
     * 爱沙尼亚克朗
     * Estonian Kroon
     */
    const EEK = ['EEK', 'EEK'];
    /**
     * 牙买加元
     * Jamaican Dollar
     */
    const JMD = ['JMD', 'JMD'];
    /**
     * 特立尼达和多巴哥元
     * Trinidad & Tobago Dollar
     */
    const TTD = ['TTD', 'TTD'];
    /**
     * 玻利维亚 Mvdol（资金）
     * Bolivian Mvdol
     */
    const BOV = ['BOV', 'BOV'];
    /**
     * 玻利维亚比索
     * Bolivian Peso
     */
    const BOP = ['BOP', 'BOP'];
    /**
     * 玻利维亚诺
     * Bolivian Boliviano
     */
    const BOB = ['BOB', 'BOB'];
    /**
     * 玻利维亚诺 (1863–1963)
     * Bolivian Boliviano (1863–1963)
     */
    const BOL = ['BOL', 'BOL'];
    /**
     * 瑞典克朗
     * Swedish Krona
     */
    const SEK = ['SEK', 'SEK'];
    /**
     * 瑞士法郎
     * Swiss Franc
     */
    const CHF = ['CHF', 'CHF'];
    /**
     * 瓦努阿图瓦图
     * Vanuatu Vatu
     */
    const VUV = ['VUV', 'VUV'];
    /**
     * 白俄罗斯卢布
     * Belarusian Ruble
     */
    const BYN = ['BYN', 'BYN'];
    /**
     * 白俄罗斯卢布 (2000–2016)
     * Belarusian Ruble (2000–2016)
     */
    const BYR = ['BYR', 'BYR'];
    /**
     * 白俄罗斯新卢布 (1994–1999)
     * Belarusian Ruble (1994–1999)
     */
    const BYB = ['BYB', 'BYB'];
    /**
     * 百慕大元
     * Bermudan Dollar
     */
    const BMD = ['BMD', 'BMD'];
    /**
     * 直布罗陀镑
     * Gibraltar Pound
     */
    const GIP = ['GIP', 'GIP'];
    /**
     * 福克兰群岛镑
     * Falkland Islands Pound
     */
    const FKP = ['FKP', 'FKP'];
    /**
     * 科威特第纳尔
     * Kuwaiti Dinar
     */
    const KWD = ['KWD', 'KWD'];
    /**
     * 科摩罗法郎
     * Comorian Franc
     */
    const KMF = ['KMF', 'KMF'];
    /**
     * 秘鲁印第
     * Peruvian Inti
     */
    const PEI = ['PEI', 'PEI'];
    /**
     * 秘鲁索尔
     * Peruvian Sol
     */
    const PEN = ['PEN', 'PEN'];
    /**
     * 秘鲁索尔 (1863–1965)
     * Peruvian Sol (1863–1965)
     */
    const PES = ['PES', 'PES'];
    /**
     * 突尼斯第纳尔
     * Tunisian Dinar
     */
    const TND = ['TND', 'TND'];
    /**
     * 立陶宛塔咯呐司
     * Lithuanian Talonas
     */
    const LTT = ['LTT', 'LTT'];
    /**
     * 立陶宛立特
     * Lithuanian Litas
     */
    const LTL = ['LTL', 'LTL'];
    /**
     * 索马里先令
     * Somali Shilling
     */
    const SOS = ['SOS', 'SOS'];
    /**
     * 约旦第纳尔
     * Jordanian Dinar
     */
    const JOD = ['JOD', 'JOD'];
    /**
     * 纳米比亚元
     * Namibian Dollar
     */
    const NAD = ['NAD', 'NAD'];
    /**
     * 缅元
     * Burmese Kyat
     */
    const BUK = ['BUK', 'BUK'];
    /**
     * 缅甸元
     * Myanmar Kyat
     */
    const MMK = ['MMK', 'MMK'];
    /**
     * 罗得西亚元
     * Rhodesian Dollar
     */
    const RHD = ['RHD', 'RHD'];
    /**
     * 罗马尼亚列伊
     * Romanian Leu
     */
    const RON = ['RON', 'RON'];
    /**
     * 美元
     * US Dollar
     */
    const USD = ['USD', 'US$'];
    /**
     * 美元（当日）
     * US Dollar (Same day)
     */
    const USS = ['USS', 'USS'];
    /**
     * 美元（次日）
     * US Dollar (Next day)
     */
    const USN = ['USN', 'USN'];
    /**
     * 老挝基普
     * Laotian Kip
     */
    const LAK = ['LAK', 'LAK'];
    /**
     * 肯尼亚先令
     * Kenyan Shilling
     */
    const KES = ['KES', 'KES'];
    /**
     * 芬兰马克
     * Finnish Markka
     */
    const FIM = ['FIM', 'FIM'];
    /**
     * 苏丹第纳尔 (1992–2007)
     * Sudanese Dinar (1992–2007)
     */
    const SDD = ['SDD', 'SDD'];
    /**
     * 苏丹镑
     * Sudanese Pound
     */
    const SDG = ['SDG', 'SDG'];
    /**
     * 苏联卢布
     * Soviet Rouble
     */
    const SUR = ['SUR', 'SUR'];
    /**
     * 苏里南元
     * Surinamese Dollar
     */
    const SRD = ['SRD', 'SRD'];
    /**
     * 苏里南盾
     * Surinamese Guilder
     */
    const SRG = ['SRG', 'SRG'];
    /**
     * 英镑
     * British Pound
     */
    const GBP = ['GBP', '£'];
    /**
     * 荷兰盾
     * Dutch Guilder
     */
    const NLG = ['NLG', 'NLG'];
    /**
     * 荷属安的列斯盾
     * Netherlands Antillean Guilder
     */
    const ANG = ['ANG', 'ANG'];
    /**
     * 莫桑比克埃斯库多
     * Mozambican Escudo
     */
    const MZE = ['MZE', 'MZE'];
    /**
     * 莫桑比克美提卡
     * Mozambican Metical
     */
    const MZN = ['MZN', 'MZN'];
    /**
     * 莱索托洛蒂
     * Lesotho Loti
     */
    const LSL = ['LSL', 'LSL'];
    /**
     * 菲律宾比索
     * Philippine Piso
     */
    const PHP = ['PHP', 'PHP'];
    /**
     * 萨尔瓦多科朗
     * Salvadoran Colón
     */
    const SVC = ['SVC', 'SVC'];
    /**
     * 萨摩亚塔拉
     * Samoan Tala
     */
    const WST = ['WST', 'WST'];
    /**
     * 葡萄牙几内亚埃斯库多
     * Portuguese Guinea Escudo
     */
    const GWE = ['GWE', 'GWE'];
    /**
     * 葡萄牙埃斯库多
     * Portuguese Escudo
     */
    const PTE = ['PTE', 'PTE'];
    /**
     * 蒙古图格里克
     * Mongolian Tugrik
     */
    const MNT = ['MNT', 'MNT'];
    /**
     * 西班牙比塞塔
     * Spanish Peseta
     */
    const ESP = ['ESP', 'ESP'];
    /**
     * 西班牙比塞塔（兑换帐户）
     * Spanish Peseta (convertible account)
     */
    const ESB = ['ESB', 'ESB'];
    /**
     * 西班牙比塞塔（帐户 A）
     * Spanish Peseta (A account)
     */
    const ESA = ['ESA', 'ESA'];
    /**
     * 西非法郎
     * West African CFA Franc
     */
    const XOF = ['XOF', 'CFA'];
    /**
     * 赞比亚克瓦查
     * Zambian Kwacha
     */
    const ZMW = ['ZMW', 'ZMW'];
    /**
     * 赞比亚克瓦查 (1968–2012)
     * Zambian Kwacha (1968–2012)
     */
    const ZMK = ['ZMK', 'ZMK'];
    /**
     * 赤道几内亚埃奎勒
     * Equatorial Guinean Ekwele
     */
    const GQE = ['GQE', 'GQE'];
    /**
     * 越南盾
     * Vietnamese Dong
     */
    const VND = ['VND', '₫'];
    /**
     * 越南盾 (1978–1985)
     * Vietnamese Dong (1978–1985)
     */
    const VNN = ['VNN', 'VNN'];
    /**
     * 阿塞拜疆马纳特
     * Azerbaijani Manat
     */
    const AZN = ['AZN', 'AZN'];
    /**
     * 阿塞拜疆马纳特 (1993–2006)
     * Azerbaijani Manat (1993–2006)
     */
    const AZM = ['AZM', 'AZM'];
    /**
     * 阿富汗尼
     * Afghan Afghani
     */
    const AFN = ['AFN', 'AFN'];
    /**
     * 阿富汗尼 (1927–2002)
     * Afghan Afghani (1927–2002)
     */
    const AFA = ['AFA', 'AFA'];
    /**
     * 阿尔及利亚第纳尔
     * Algerian Dinar
     */
    const DZD = ['DZD', 'DZD'];
    /**
     * 阿尔巴尼亚列克
     * Albanian Lek
     */
    const ALL = ['ALL', 'ALL'];
    /**
     * 阿尔巴尼亚列克(1946–1965)
     * Albanian Lek (1946–1965)
     */
    const ALK = ['ALK', 'ALK'];
    /**
     * 阿曼里亚尔
     * Omani Rial
     */
    const OMR = ['OMR', 'OMR'];
    /**
     * 阿根廷奥斯特拉尔
     * Argentine Austral
     */
    const ARA = ['ARA', 'ARA'];
    /**
     * 阿根廷比索
     * Argentine Peso
     */
    const ARS = ['ARS', 'ARS'];
    /**
     * 阿根廷比索 (1881–1970)
     * Argentine Peso (1881–1970)
     */
    const ARM = ['ARM', 'ARM'];
    /**
     * 阿根廷比索 (1983–1985)
     * Argentine Peso (1983–1985)
     */
    const ARP = ['ARP', 'ARP'];
    /**
     * 阿根廷法定比索 (1970–1983)
     * Argentine Peso Ley (1970–1983)
     */
    const ARL = ['ARL', 'ARL'];
    /**
     * 阿联酋迪拉姆
     * United Arab Emirates Dirham
     */
    const AED = ['AED', 'AED'];
    /**
     * 阿鲁巴弗罗林
     * Aruban Florin
     */
    const AWG = ['AWG', 'AWG'];
    /**
     * 韩元
     * South Korean Won
     */
    const KRW = ['KRW', '￦'];
    /**
     * 韩元 (1945–1953)
     * South Korean Won (1945–1953)
     */
    const KRO = ['KRO', 'KRO'];
    /**
     * 韩元 (1953–1962)
     * South Korean Hwan (1953–1962)
     */
    const KRH = ['KRH', 'KRH'];
    /**
     * 马其顿第纳尔
     * Macedonian Denar
     */
    const MKD = ['MKD', 'MKD'];
    /**
     * 马其顿第纳尔 (1992–1993)
     * Macedonian Denar (1992–1993)
     */
    const MKN = ['MKN', 'MKN'];
    /**
     * 马尔代夫卢比(1947–1981)
     * Maldivian Rupee (1947–1981)
     */
    const MVP = ['MVP', 'MVP'];
    /**
     * 马尔代夫卢菲亚
     * Maldivian Rufiyaa
     */
    const MVR = ['MVR', 'MVR'];
    /**
     * 马拉维克瓦查
     * Malawian Kwacha
     */
    const MWK = ['MWK', 'MWK'];
    /**
     * 马来西亚林吉特
     * Malaysian Ringgit
     */
    const MYR = ['MYR', 'MYR'];
    /**
     * 马耳他里拉
     * Maltese Lira
     */
    const MTL = ['MTL', 'MTL'];
    /**
     * 马耳他镑
     * Maltese Pound
     */
    const MTP = ['MTP', 'MTP'];
    /**
     * 马达加斯加法郎
     * Malagasy Franc
     */
    const MGF = ['MGF', 'MGF'];
    /**
     * 马达加斯加阿里亚里
     * Malagasy Ariary
     */
    const MGA = ['MGA', 'MGA'];
    /**
     * 马里法郎
     * Malian Franc
     */
    const MLF = ['MLF', 'MLF'];
    /**
     * 黎巴嫩镑
     * Lebanese Pound
     */
    const LBP = ['LBP', 'LBP'];

    //const SIZE_A4 = [210, 297];

    private $currency = null;
    private $language = null;
    private $size = null;
    /**
     * 实例Invoice
     * @param array $currency 货币 默认 ['CNY', '￥']
     * @param string $size 文档大小 默认 A4
     * @param string $language 语言 默认 zh
     */
    public function __construct(array $currency = null, string $size = null, string $language = null)
    {
        $this->currency = $currency ?: self::CNY;
        $this->size = strtoupper($size ?: 'A4');
        $this->language = $language ?: 'zh';
    }
}
