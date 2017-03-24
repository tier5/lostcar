<?php

/* /var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/product/details/parts/page.related.twig */
class __TwigTemplate_3fee81f6c98b79b00aee993e8b4ac56e8a4711cbee9f1d6e96ded38a065f06f7 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div id=\"sidebar-second\" class=\"column sidebar\">
    <div class=\"section\">
        <div class=\"list-container\" data-group=\"sidebar\">
            ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "product.details.page.related"))), "html", null, true);
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/product/details/parts/page.related.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Product details information block*/
/*  #*/
/*  # @ListChild (list="product.details.page", weight="37")*/
/*  #}*/
/* <div id="sidebar-second" class="column sidebar">*/
/*     <div class="section">*/
/*         <div class="list-container" data-group="sidebar">*/
/*             {{ widget_list('product.details.page.related') }}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
