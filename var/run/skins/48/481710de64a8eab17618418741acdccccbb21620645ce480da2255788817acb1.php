<?php

/* /var/www/html/lostcar/skins/customer/items_list/product/parts/small-thumbnails.details.twig */
class __TwigTemplate_1afb6c54b228a70f2114b1fe7fb43d328ca05c71a018f7c3f6f541e98e633027 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"details\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "details", "type" => "inherited", "product" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array())))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/items_list/product/parts/small-thumbnails.details.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Item name*/
/*  #*/
/*  # @ListChild (list="itemsList.product.small_thumbnails.customer.info", weight="20")*/
/*  #}*/
/* <div class="details">*/
/*   {{ widget_list('details', type='inherited', product=this.product) }}*/
/* </div>*/
/* */
