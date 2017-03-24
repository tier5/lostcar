<?php

/* /var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/footer/bottom_text_info/parts/store.info.twig */
class __TwigTemplate_ee411b89b420e0741c0d11460bece6180e57bf70b9310121d23a3ddbc19225ea extends \XLite\Core\Templating\Twig\Template
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
<div class=\"footer_store_info\">
    ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "store.info.footer"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/layout/footer/bottom_text_info/parts/store.info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Footer*/
/*  #*/
/*  # @ListChild (list="footer.textinfo.block", weight="50")*/
/*  #}*/
/* */
/* <div class="footer_store_info">*/
/*     {{ widget_list('store.info.footer') }}*/
/* </div>*/
/* */
