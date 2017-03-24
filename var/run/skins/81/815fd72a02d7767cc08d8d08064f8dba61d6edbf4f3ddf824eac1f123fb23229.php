<?php

/* /var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/footer/bottom_text_info/parts/instagram.feed.container.twig */
class __TwigTemplate_6eec16a908d8a3097ca872d626387613c0122e7754557bb402a90e671a6c0a3c extends \XLite\Core\Templating\Twig\Template
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
        echo "
";
        // line 7
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "JThemesStudio", array()), "The80sMod", array()), "typeC_instagramm_feed_enable", array())) {
            // line 8
            echo "<div class=\"footer_instagram_feed\">
    <h3>";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Instagram Feed")), "html", null, true);
            echo "</h3>
    ";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "store.instagram.footer"))), "html", null, true);
            echo "
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/footer/bottom_text_info/parts/instagram.feed.container.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 10,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Footer*/
/*  #*/
/*  # @ListChild (list="footer.textinfo.block", weight="300")*/
/*  #}*/
/* */
/* {% if this.config.JThemesStudio.The80sMod.typeC_instagramm_feed_enable %}*/
/* <div class="footer_instagram_feed">*/
/*     <h3>{{ t('Instagram Feed') }}</h3>*/
/*     {{ widget_list('store.instagram.footer') }}*/
/* </div>*/
/* {% endif %}*/
/* */
