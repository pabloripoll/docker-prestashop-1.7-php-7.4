<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__30a38f75bd993880f5bc9c130b76a21b2097dba59ba421aac0ad8161a3354c6c */
class __TwigTemplate_0ab9d11c5dddbc23bf5aec0c0ca5596420820c0bb3094ed33c2427b21a26becc extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Orders • Presta Shop</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminOrders';
    var iso_user = 'en';
    var lang_is_rtl = '0';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'GB';
    var _PS_VERSION_ = '1.7.8.11';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your shop.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your shop.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your shop.';
    var see_msg = 'Read this message';
    var token = '7ba2a1cbb20ac37b242fbe9b888281ba';
    var token_admin_orders = tokenAdminOrders = '7ba2a1cbb20ac37b242fbe9b888281ba';
    var token_admin_customers = 'fb7097271c87a97264b21755dd1dc29b';
    var token_admin_customer_threads = tokenAdminCustomerThreads = '0a1bc98ac979d70ce88360d4affbe5f8';
    var currentIndex = 'index.php?controller=AdminOrders';
    var employee_token = '2c292024d192843b17de0ef45aa411a9';
    var choose_language_translate = 'Choose language:';
    var default_language = '1';
    var admin_modules_link = '/admin-dev/index.php/improve/modules/catalog/recommended?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0';
    var admin_notification_get_link = '/admin-dev/index.php/common/notifications?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0';
    var admin_notification_push_link = admi";
        // line 43
        echo "nNotificationPushLink = '/admin-dev/index.php/common/notifications/ack?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0';
    var tab_modules_list = '';
    var update_success_msg = 'Update successful';
    var errorLogin = 'PrestaShop was unable to log in to Addons. Please check your credentials and your Internet connection.';
    var search_product_msg = 'Search for a product';
  </script>

      <link href=\"/admin-dev/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin-dev/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/psgdpr/views/css/overrideAddress.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/catalog.css?v=3.0.2\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/recommended-modules-since-1.7.8.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_checkout/views/css/adminOrderView.css?version=3.6.0\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin-dev\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin-dev\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\";
var currency = {\"iso_code\":\"GBP\",\"sign\":\"\\u00a3\",\"name\":\"British Pound\",\"format\":null};
var currency_specifications =";
        // line 68
        echo " {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"GBP\",\"currencySymbol\":\"\\u00a3\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var psgdprNoAddresses = \"Customer data deleted by official GDPR module.\";
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin-dev/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.8.11\"></script>
<script type=\"text/javascript\" src=\"/admin-dev/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.8.11\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin-dev/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/psgdpr/views/js/overrideAddress.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/recommended-modules.js?v=3.0.2\"></script>
<script type=\"text/javascript\" src=\"/admin-dev/themes/default/js/bundle/module/";
        // line 88
        echo "module_card.js?v=1.7.8.11\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_checkout/views/js/adminOrderView.js?version=3.6.0\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>
<script type=\"text/javascript\" src=\"/modules/welcome/public/module.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/admin-dev/index.php/common/notifications?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 109
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-en adminorders\"
  data-base-url=\"/admin-dev/index.php\"  data-token=\"-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost:8888/admin-dev/index.php?controller=AdminDashboard&amp;token=b1eebcbc6443552fdd8a6edbf21b9c8b\"></a>
      <span id=\"shop_version\">1.7.8.11</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8888/admin-dev/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=966e224c6bf0afa0b659eb37c69544a0\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8888/admin-dev/index.php/improve/modules/manage?token=180afb01293834e8227c6868fdc33769\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8888/admin-dev/index.php/sell/catalog/categories/new?token=180afb01293834e8227c6868fdc33769\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8888/admin-dev/index.php/sell/catalog/products/new?token=180afb01293834e8227c6868fdc33769\"
                 data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost";
        // line 147
        echo ":8888/admin-dev/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=f7bff0473486efbf6405dbf7d4ff8940\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8888/admin-dev/index.php?controller=AdminOrders&amp;token=7ba2a1cbb20ac37b242fbe9b888281ba\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"102\"
        data-icon=\"icon-AdminParentOrders\"
        data-method=\"add\"
        data-url=\"index.php/sell/orders/?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\"
        data-post-link=\"http://localhost:8888/admin-dev/index.php?controller=AdminQuickAccesses&token=a63dd54d3e75299e0556b28955d85477\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Orders - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost:8888/admin-dev/index.php?controller=AdminQuickAccesses&token=a63dd54d3e75299e0556b28955d85477\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin-dev/index.php?controller=AdminSearch&amp;token=aa94b0a2ab73cf56c760e7d79fbc0bd5\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…)\" aria-label=\"Searchbar\">
    <div class=\"input-group-appen";
        // line 185
        echo "d\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Name\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carts</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search";
        // line 200
        echo "</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

      
      
              <div class=\"component\" id=\"header-shop-list-container\">
            <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost:8888/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my store</span>
    </a>
  </div>
        </div>
                    <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Orders<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Customers<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
";
        // line 261
        echo "              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Have you checked your <strong><a href=\"http://localhost:8888/admin-dev/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=bed597f6bdcebb439df5153ceaa8fb8c\">abandoned carts</a></strong>?<br>Your next order could be hiding there!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Are you active on social media these days?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              Seems like all your customers are happy :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_custo";
        // line 309
        echo "mer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">

      <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost:8888/img/pr/default.jpg\" /></span>
      <span class=\"employee_profile\">Welcome back Presta</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin-dev/index.php/configure/advanced/employees/1/edit?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">book</i> Resources</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">school</i> Training</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_";
        // line 342
        echo "content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">person_pin_circle</i> Find an Expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">extension</i> PrestaShop Marketplace</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">help</i> Help Center</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost:8888/admin-dev/index.php?controller=AdminLogin&amp;logout=1&amp;token=016438e753970a3eb4bbf9efb2ab42e8\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin-dev/index.php/configure/advanced/employees/toggle-navigation?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost:8888/admin-dev/index.php?controller=AdminDashboard&amp;token=b1eebcbc6443552fdd8a6edbf21b9c8b\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title link-a";
        // line 379
        echo "ctive\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin-dev/index.php/sell/orders/?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admin-dev/index.php/sell/orders/?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin-dev/index.php/sell/orders/invoices/?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\"> I";
        // line 410
        echo "nvoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin-dev/index.php/sell/orders/credit-slips/?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin-dev/index.php/sell/orders/delivery-slips/?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost:8888/admin-dev/index.php?controller=AdminCarts&amp;token=bed597f6bdcebb439df5153ceaa8fb8c\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-Admi";
        // line 444
        echo "nCatalog\">
                    <a href=\"/admin-dev/index.php/sell/catalog/products?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin-dev/index.php/sell/catalog/products?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin-dev/index.php/sell/catalog/categories?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                             ";
        // line 475
        echo "   <a href=\"/admin-dev/index.php/sell/catalog/monitoring/?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost:8888/admin-dev/index.php?controller=AdminAttributesGroups&amp;token=423e122c1792e12845ae6809aaf6eb19\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin-dev/index.php/sell/catalog/brands/?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin-dev/index.php/sell/attachments/?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
              ";
        // line 506
        echo "                <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost:8888/admin-dev/index.php?controller=AdminCartRules&amp;token=f7bff0473486efbf6405dbf7d4ff8940\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin-dev/index.php/sell/stocks/?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin-dev/index.php/sell/customers/?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                ";
        // line 537
        echo "              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin-dev/index.php/sell/customers/?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin-dev/index.php/sell/addresses/?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost:8888/admin-dev/index.php?controller=AdminCustomerThreads&amp;token=0a1bc98ac979d70ce88360d4affbe5f8\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                               ";
        // line 568
        echo "               <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost:8888/admin-dev/index.php?controller=AdminCustomerThreads&amp;token=0a1bc98ac979d70ce88360d4affbe5f8\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin-dev/index.php/sell/customer-service/order-messages/?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost:8888/admin-dev/index.php?controller=AdminReturn&amp;token=11d0000f9ce68da5df964671ee9dbad1\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id";
        // line 599
        echo "=\"subtab-AdminStats\">
                    <a href=\"/admin-dev/index.php/modules/metrics/legacy/stats?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"144\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/admin-dev/index.php/modules/metrics/legacy/stats?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\"> Stats
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"145\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/admin-dev/index.php/modules/metrics?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
       ";
        // line 632
        echo "             
          
            <li class=\"category-title\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin-dev/index.php/modules/addons/modules/catalog?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/admin-dev/index.php/modules/addons/modules/catalog?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin-dev/index.php/improve/modules/manage?_token=-n-4bsZTNwE8uOfKkZ";
        // line 665
        echo "PuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admin-dev/index.php/modules/addons/themes/catalog?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"139\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/admin-dev/index.php/modules/addons/themes/catalog?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\"> Theme Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
       ";
        // line 697
        echo "                       <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/admin-dev/index.php/improve/design/themes/?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin-dev/index.php/improve/design/mail_theme/?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin-dev/index.php/improve/design/cms-pages/?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin-dev/index.php/improve/design/modules/positions/?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\"> Positions
                                </a>
                              </li>

                                       ";
        // line 726
        echo "                                           
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost:8888/admin-dev/index.php?controller=AdminImages&amp;token=94b127eda2fe7d0ebf57225f416259ac\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"129\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin-dev/index.php/modules/link-widget/list?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\"> Link List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost:8888/admin-dev/index.php?controller=AdminCarriers&amp;token=eb5d116f5f895c13293582d87ea2e1d0\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                           ";
        // line 757
        echo " </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost:8888/admin-dev/index.php?controller=AdminCarriers&amp;token=eb5d116f5f895c13293582d87ea2e1d0\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin-dev/index.php/improve/shipping/preferences/?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin-dev/index.php/improve/payment/payment_methods?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
            ";
        // line 789
        echo "                                                </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/admin-dev/index.php/improve/payment/payment_methods?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin-dev/index.php/improve/payment/preferences?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin-dev/index.php/improve/international/localization/?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons s";
        // line 820
        echo "ub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin-dev/index.php/improve/international/localization/?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin-dev/index.php/improve/international/zones/?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin-dev/index.php/improve/international/taxes/?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                    ";
        // line 851
        echo "                                        
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin-dev/index.php/improve/international/translations/settings?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"146\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost:8888/admin-dev/index.php?controller=AdminPsfacebookModule&amp;token=39d5a45f5537e5e6ffda53791b27951a\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-146\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"147\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost:8888/admin-dev/index.php?controller=AdminPsfacebookModule&amp;token=39d5a45f5537e5e6ffda53791b27951a\" class=\"link\"> Facebook &amp; Instagram
                                </a>
            ";
        // line 880
        echo "                  </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"149\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost:8888/admin-dev/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=272bb9c83adda60c9362ba8542e277d2\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin-dev/index.php/configure/shop/preferences/preferences?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
 ";
        // line 918
        echo "                             
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin-dev/index.php/configure/shop/preferences/preferences?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin-dev/index.php/configure/shop/order-preferences/?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin-dev/index.php/configure/shop/product-preferences/?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin-dev/index.php/configure/shop/customer-preferences/?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\"> Customer Setting";
        // line 945
        echo "s
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin-dev/index.php/configure/shop/contacts/?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin-dev/index.php/configure/shop/seo-urls/?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost:8888/admin-dev/index.php?controller=AdminSearchConf&amp;token=d01469f8f91e7285fecf7b6505405ff8\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"sub";
        // line 979
        echo "tab-AdminAdvancedParameters\">
                    <a href=\"/admin-dev/index.php/configure/advanced/system-information/?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin-dev/index.php/configure/advanced/system-information/?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin-dev/index.php/configure/advanced/performance/?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
             ";
        // line 1009
        echo "                 <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin-dev/index.php/configure/advanced/administration/?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin-dev/index.php/configure/advanced/emails/?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/admin-dev/index.php/configure/advanced/import/?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin-dev/index.php/configure/advanced/employees/?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                         ";
        // line 1039
        echo "     
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin-dev/index.php/configure/advanced/sql-requests/?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin-dev/index.php/configure/advanced/logs/?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin-dev/index.php/configure/advanced/webservice-keys/?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"120\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin-dev/index.php/configure/advanced/feature-flags/?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\" class=\"lin";
        // line 1066
        echo "k\"> Experimental Features
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  <div class=\"onboarding-navbar bootstrap\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      Launch your shop!
    </div>
    <div class=\"col-md-4 text-right text-md-right\">0%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:0%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Resume</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Stop the OnBoarding</a>
  </div>
</div>

</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Orders</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
  
      <h1 class=\"title\">
      Orders    </h1>
  

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/admin-dev/index.php/sell/orders/new?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\"                  title=\"Add new order\"                >
                  <i class=\"material-icons\">add_circle_outline</i>                  Add new order
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
   ";
        // line 1132
        echo "                data-url=\"/admin-dev/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fen%252Fdoc%252FAdminOrders%253Fversion%253D1.7.8.11%2526country%253Den/Help?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\"
                   id=\"product_form_open_help\"
                >
                  Help
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item  pointer\"              id=\"page-header-desc-floating-configuration-add\"
              href=\"/admin-dev/index.php/sell/orders/new?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\"              title=\"Add new order\"            >
              Add new order
              <i class=\"material-icons\">add_circle_outline</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Help\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/admin-dev/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fen%252Fdoc%252FAdminOrders%253Fversion%253D1.7.8.11%2526country%253Den/Help?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\"
            >
              Help
            </a>
                        </div>
    </div>
  </div>
  <script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Boost sales',
        'description': \"Get new customers and keep them coming back.<br>\\n                Here\\'s a selection of modules,<\\strong> compatible with ";
        // line 1175
        echo "your store<\\/strong>, to help you achieve your goals.\",
        'Close': 'Close',
      },
      recommendedModulesUrl: '/admin-dev/index.php/modules/addons/modules/recommended?tabClassName=AdminOrders&_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 1,
      shouldUseLegacyTheme: 0,
    });
  }
</script>

</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        
<div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-groups\">
          <div class=\"group group-0\" style=\"width: 9.0909090909091%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 45.454545454545%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=\"group group-2\" style=\"width: 18.181818181818%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">3</div>
      </div>
          <div class=\"group group-3\" style=\"width: 9.0909090909091%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">4</div>
      </div>
          <div class=\"group group-4\" style=\"width: 18.181818181818%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">5</div>
      </div>
      </div>
  <div class=\"col-md-8\">
    <h4 class=\"group-title\"></h4>
    <div class=\"step-title step-title-1\"></div>
    <div class=\"step-title step-title-2\"></div>
  </div>
  <button class=\"btn btn-primary onboarding-button-next\">Continue</button>
  <a class=\"onboarding-button-shut-down\">Skip this tutorial</a>
</div>

<script type=\"text/javascript\">

  var onBoarding;

  \$(function(){
    onBoarding = new OnBoarding(0, {\"groups\":[{\"name\":\"dashboard\",\"steps\":[{\"type\":\"popup\",\"text\":\"<div class=\\\"onboarding-welcome\\\">\\n  <i class=\\";
        // line 1230
        echo "\"material-icons onboarding-button-shut-down\\\">close<\\/i>\\n  <p class=\\\"welcome\\\">Welcome to your shop!<\\/p>\\n  <div class=\\\"content\\\">\\n    <p>Hi! My name is Preston and I'm here to show you around.<\\/p>\\n    <p>You will discover a few essential steps before you can launch your shop:\\n    Create your first product, customize your shop, configure shipping and payments...<\\/p>\\n  <\\/div>\\n  <div class=\\\"started\\\">\\n    <p>Let's get started!<\\/p>\\n  <\\/div>\\n  <div class=\\\"buttons\\\">\\n    <button class=\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\">Later<\\/button>\\n    <button class=\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\">Start<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"http:\\/\\/localhost:8888\\/admin-dev\\/index.php?controller=AdminDashboard&token=b1eebcbc6443552fdd8a6edbf21b9c8b\"}]},{\"name\":\"product\",\"title\":\"Let's create your first product\",\"subtitle\":{\"1\":\"What do you want to tell about it? Think about what your customers want to know.\",\"2\":\"Add clear and attractive information. Don't worry, you can edit it later :)\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Give your product a catchy name.\",\"options\":[\"savepoint\"],\"page\":[\"\\/admin-dev\\/index.php\\/sell\\/catalog\\/products\\/new?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\",\"admin-dev\\/index.php\\/sell\\/catalog\\/products\\/.+\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Fill out the essential details in this tab. The other tabs are for more advanced information.\",\"page\":\"admin-dev\\/index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Add one or more pictures so your product looks tempting!\",\"page\":\"admin-dev\\/index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"How much do you want to sell it for?\",\"page\":\"admin-dev\\/index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\".right-";
        echo "column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"Yay! You just created your first product. Looks good, right?\",\"page\":\"admin-dev\\/index.php\\/sell\\/catalog\\/products\",\"selector\":\"#product_catalog_list table tr:first-child td:nth-child(3)\",\"position\":\"left\"}]},{\"name\":\"theme\",\"title\":\"Give your shop its own identity\",\"subtitle\":{\"1\":\"How do you want your shop to look? What makes it so special?\",\"2\":\"Customize your theme or choose the best design from our theme catalog.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"A good way to start is to add your own logo here!\",\"options\":[\"savepoint\"],\"page\":\"\\/admin-dev\\/index.php\\/improve\\/design\\/themes\\/?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\",\"selector\":\"#form_shop_logos_header_logo, #form_header_logo\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"If you want something really special, have a look at the theme catalog!\",\"page\":\"\\/admin-dev\\/index.php\\/improve\\/design\\/themes-catalog\\/?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"name\":\"payment\",\"title\":\"Get your shop ready for payments\",\"subtitle\":{\"1\":\"How do you want your customers to pay you?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"These payment methods are already available to your customers.\",\"options\":[\"savepoint\"],\"page\":\"\\/admin-dev\\/index.php\\/improve\\/payment\\/payment_methods?_token=-n-4bsZTNwE8uOfKkZPuT4IL8_5BIPfWJKTU562EBl0\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted, .card:eq(0) .text-muted:eq(0)\",\"position\":\"right\"}]},{\"name\":\"shipping\",\"title\":\"Choose your shipping solutions\",\"subtitle\":{\"1\":\"How do you want to deliver your products?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Here are the shipping methods available on your shop today.\",\"options\":[\"savepoint\"],\"page\":\"http:\\/\\/localhost:8888\\/adm";
        echo "in-dev\\/index.php?controller=AdminCarriers&token=eb5d116f5f895c13293582d87ea2e1d0\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"<div id=\\\"onboarding-welcome\\\" class=\\\"modal-body\\\">\\n    <div class=\\\"col-12\\\">\\n        <button class=\\\"onboarding-button-next pull-right close\\\" type=\\\"button\\\">&times;<\\/button>\\n        <h2 class=\\\"text-center text-md-center\\\">Over to you!<\\/h2>\\n    <\\/div>\\n    <div class=\\\"col-12\\\">\\n        <p class=\\\"text-center text-md-center\\\">\\n          You've seen the essential, but there's a lot more to explore.<br \\/>\\n          Some resources can help you go further:\\n        <\\/p>\\n        <div class=\\\"container-fluid\\\">\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6  justify-content-center text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"http:\\/\\/doc.prestashop.com\\/display\\/PS17\\/Getting+Started\\\" target=\\\"_blank\\\">\\n                <div class=\\\"starter-guide\\\"><\\/div>\\n                <span class=\\\"link\\\">Starter Guide<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/forums\\/\\\" target=\\\"_blank\\\">\\n                <div class=\\\"forum\\\"><\\/div>\\n                <span class=\\\"link\\\">Forum<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/en\\/training-prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"training\\\"><\\/div>\\n                <span class=\\\"link\\\">Training<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.youtube.com\\/user";
        echo "\\/prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"video-tutorial\\\"><\\/div>\\n                <span class=\\\"link\\\">Video tutorial<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n        <\\/div>\\n    <\\/div>\\n    <div class=\\\"modal-footer\\\">\\n        <div class=\\\"col-12\\\">\\n            <div class=\\\"text-center text-md-center\\\">\\n                <button class=\\\"btn btn-primary onboarding-button-next\\\">I'm ready<\\/button>\\n            <\\/div>\\n        <\\/div>\\n    <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"http:\\/\\/localhost:8888\\/admin-dev\\/index.php?controller=AdminDashboard&token=b1eebcbc6443552fdd8a6edbf21b9c8b\"}]}]}, 1, \"http://localhost:8888/admin-dev/index.php?controller=AdminWelcome&token=85d910b5a9802ff697e3a6945b52de99\", baseAdminDir);

          onBoarding.addTemplate('lost', '<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>Hey! Are you lost?</p>    <p>To continue, click here:</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Continue</button>    </div>    <p>If you want to stop the tutorial for good, click here:</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Quit the Welcome tutorial</button>    </div>  </div></div>');
          onBoarding.addTemplate('popup', '<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>');
          onBoarding.addTemplate('tooltip', '<div class=\"onboarding-tooltip\">  <div class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">Step <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">Next</button></div>');
    
    onBoarding.showCurrentStep();

    var body = \$(\"body\");

    body.delegate(\".onboarding-button-next\", \"click\", function(){
      if (\$(this).is('.with-spinner')) {
        if (!\$(this).is('.animated'))";
        // line 1242
        echo " {
          \$(this).addClass('animated');
          onBoarding.gotoNextStep();
        }
      } else {
        onBoarding.gotoNextStep();
      }
    }).delegate(\".onboarding-button-shut-down\", \"click\", function(){
      onBoarding.setShutDown(true);
    }).delegate(\".onboarding-button-resume\", \"click\", function(){
      onBoarding.setShutDown(false);
    }).delegate(\".onboarding-button-goto-current\", \"click\", function(){
      onBoarding.gotoLastSavePoint();
    }).delegate(\".onboarding-button-stop\", \"click\", function(){
      onBoarding.stop();
    });

  });

</script>


                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1270
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"http://localhost:8888/admin-dev/index.php?controller=AdminDashboard&amp;token=b1eebcbc6443552fdd8a6edbf21b9c8b\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-EN&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/en/login?email=admin%40example.com&amp;firstname=Presta&amp;lastname=Shop&amp;website=http%3A%2F%2Flocalhost%3A8888%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin-dev/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connect your shop to PrestaShop's marketplace in order to automatically import all your Addons purchases.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>";
        // line 1321
        echo "Don't have an account?</h4>
\t\t\t\t\t\t<p class='text-justify'>Discover the Power of PrestaShop Addons! Explore the PrestaShop Official Marketplace and find over 3 500 innovative modules and themes that optimize conversion rates, increase traffic, build customer loyalty and maximize your productivity</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connect to PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/en/forgot-your-password\">I forgot my password</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/en/login?email=admin%40example.com&amp;firstname=Presta&amp;lastname=Shop&amp;website=http%3A%2F%2Flocalhost%3A8888%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCreate an Account
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Sign in
";
        // line 1360
        echo "\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1378
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 109
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1270
    public function block_content_header($context, array $blocks = [])
    {
    }

    public function block_content($context, array $blocks = [])
    {
    }

    public function block_content_footer($context, array $blocks = [])
    {
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1378
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__30a38f75bd993880f5bc9c130b76a21b2097dba59ba421aac0ad8161a3354c6c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1543 => 1378,  1526 => 1270,  1517 => 109,  1508 => 1378,  1488 => 1360,  1447 => 1321,  1390 => 1270,  1360 => 1242,  1343 => 1230,  1286 => 1175,  1241 => 1132,  1173 => 1066,  1144 => 1039,  1112 => 1009,  1080 => 979,  1044 => 945,  1015 => 918,  975 => 880,  944 => 851,  911 => 820,  878 => 789,  844 => 757,  811 => 726,  780 => 697,  746 => 665,  711 => 632,  676 => 599,  643 => 568,  610 => 537,  577 => 506,  544 => 475,  511 => 444,  475 => 410,  442 => 379,  403 => 342,  368 => 309,  318 => 261,  255 => 200,  238 => 185,  198 => 147,  155 => 109,  132 => 88,  110 => 68,  83 => 43,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__30a38f75bd993880f5bc9c130b76a21b2097dba59ba421aac0ad8161a3354c6c", "");
    }
}
