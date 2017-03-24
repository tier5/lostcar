<?php

/* /var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/items_list/product/parts/buttons.container.twig */
class __TwigTemplate_6c3363260d11ceec2d084f430a5b23c0396d194acab05c0dc388ff094eba2181 extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "
<div class=\"product-buttons-contaner\">
    ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "bcontainer", "type" => "nested", "product" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array())))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/items_list/product/parts/buttons.container.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 9,  19 => 7,);
    }
}
/* {##*/
/*  # Products list (list variant)*/
/*  #*/
/*  # @ListChild (list="itemsList.product.grid.customer.info", weight="50")*/
/*  # @ListChild (list="itemsList.product.list.customer.info", weight="50")*/
/*  #}*/
/* */
/* <div class="product-buttons-contaner">*/
/*     {{ widget_list('bcontainer', type='nested', product=this.product) }}*/
/* </div>*/
/* */
