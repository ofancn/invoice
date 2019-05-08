<?php

use Invoice\Invoice;

if (!function_exists('get_invoice')) {

    /**
     * 实例Invoice
     * @param string $currency 货币代码
     * @param string $size 纸张大小 A4Default Letter Legal
     * @param string $language 语言
     */
    function get_invoice($currency = 'CNY', $size = 'A4', $language = 'zh'): Invoice {
        return new Invoice($currency, $size, $language);
    }

}
