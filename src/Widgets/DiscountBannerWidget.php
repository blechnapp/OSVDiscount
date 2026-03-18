<?php

namespace OSVDiscount\Widgets;

use Ceres\Widgets\Helper\BaseWidget;

class DiscountBannerWidget extends BaseWidget
{
    protected $template = "OSVDiscount::Widgets.DiscountBannerWidget";

    protected function getTemplateData($widgetSettings, $isPreview)
    {
        return [
            "isPreview" => $isPreview,
        ];
    }
}
