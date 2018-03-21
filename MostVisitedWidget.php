<?php

namespace Statamic\Addons\GoogleAnalytics;

use Statamic\Extend\Widget;

class MostVisitedWidget extends Widget {
  /**
   * The HTML that should be shown in the widget
   *
   * @return string
   */
  public function html() {
    return $this->view('widget-most-visited');
  }
}