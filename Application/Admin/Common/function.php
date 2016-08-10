<?php
function checkStatus($status)
{
    switch ($status) {
        case 0:
            return "  <div class='am-text-success'><span class='am-icon-check'>启用</span></div>        ";
            break;
        case 1:
            return " <div class='am-text-warning'><span class='am-icon-times'>禁用</span></div>  ";
            break;
        case 2:
            return "未知";
            break;
        default:
            return "未知";
            break;

    }



}

?>