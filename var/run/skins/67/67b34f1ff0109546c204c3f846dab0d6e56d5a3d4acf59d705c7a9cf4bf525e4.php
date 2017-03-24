<?php

/* /var/www/html/lostcar/skins/customer/modules/Amazon/PayWithAmazon/header/parts/amazon_config.twig */
class __TwigTemplate_04a81d5c253f4a4406a65910661390aaa2d6aae1a50db66315e09f9f3aceba55 extends \XLite\Core\Templating\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 6
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isAmazonConfigured", array(), "method")) {
            // line 7
            echo "  ";
            $context["amazonConfig"] = $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAmazonConfig", array(), "method");
            // line 8
            echo "  <script type=\"text/javascript\">
    var amazonConfig = {
      sid: '";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["amazonConfig"]) ? $context["amazonConfig"] : null), "merchant_id", array()), "html", null, true);
            echo "',
      mode: '";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["amazonConfig"]) ? $context["amazonConfig"] : null), "mode", array()), "html", null, true);
            echo "',
      clientId: '";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["amazonConfig"]) ? $context["amazonConfig"] : null), "client_id", array()), "html", null, true);
            echo "'
    };

    window.onAmazonLoginReady = function() {
      amazon.Login.setSandboxMode(";
            // line 16
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isSandboxMode", array(), "method"), "html", null, true);
            echo ");
      amazon.Login.setClientId(amazonConfig.clientId);
      amazon.Login.setRegion('";
            // line 18
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["amazonConfig"]) ? $context["amazonConfig"] : null), "region", array()), "html", null, true);
            echo "');
      amazon.Login.setUseCookie(true);

      ";
            // line 21
            if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isLogged", array(), "method")) {
                // line 22
                echo "      if (xliteConfig.target !== 'amazon_checkout') {
        amazon.Login.logout();
      }
      ";
            }
            // line 26
            echo "    };
  </script>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/Amazon/PayWithAmazon/header/parts/amazon_config.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 26,  56 => 22,  54 => 21,  48 => 18,  43 => 16,  36 => 12,  32 => 11,  28 => 10,  24 => 8,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Template*/
/*  #*/
/*  # @ListChild (list="head", weight="1310")*/
/*  #}*/
/* {% if this.isAmazonConfigured() %}*/
/*   {% set amazonConfig = this.getAmazonConfig() %}*/
/*   <script type="text/javascript">*/
/*     var amazonConfig = {*/
/*       sid: '{{ amazonConfig.merchant_id }}',*/
/*       mode: '{{ amazonConfig.mode }}',*/
/*       clientId: '{{ amazonConfig.client_id }}'*/
/*     };*/
/* */
/*     window.onAmazonLoginReady = function() {*/
/*       amazon.Login.setSandboxMode({{ this.isSandboxMode() }});*/
/*       amazon.Login.setClientId(amazonConfig.clientId);*/
/*       amazon.Login.setRegion('{{ amazonConfig.region }}');*/
/*       amazon.Login.setUseCookie(true);*/
/* */
/*       {% if not this.isLogged() %}*/
/*       if (xliteConfig.target !== 'amazon_checkout') {*/
/*         amazon.Login.logout();*/
/*       }*/
/*       {% endif %}*/
/*     };*/
/*   </script>*/
/* {% endif %}*/
/* */
