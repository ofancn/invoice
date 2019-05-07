<?php
use Invoice\Invoice;


if (!function_exists('newInvoice')) {
    /**
     * 实例Invoice
     * @param array $currency 货币 默认 ['CNY', '￥']
     * @param string $size 文档大小 默认A4
     * @param string $language 语言 默认zh
     * @return Invoice\Invoice
     */
    function newInvoice(array $currency = null, string $size = null, string $language = null)
    {
        return new Invoice($currency, $size, $language);
    }
}
