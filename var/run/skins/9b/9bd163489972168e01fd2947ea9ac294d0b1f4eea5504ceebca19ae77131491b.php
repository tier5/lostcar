<?php

/* product/quantity_box/body.twig */
class __TwigTemplate_67b95b0d2bb588bec3d86e6ccfc694bdaf011c5ec13478907faa7b78ca1e95cd extends \XLite\Core\Templating\Twig\Template
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
        // line 4
        echo "<span class=\"quantity-box-container\">
  ";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "product.quantity-box"))), "html", null, true);
        echo "
</span>
";
    }

    public function getTemplateName()
    {
        return "product/quantity_box/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Product quantity box (for customer area)*/
/*  #}*/
/* <span class="quantity-box-container">*/
/*   {{ widget_list('product.quantity-box') }}*/
/* </span>*/
/* */
