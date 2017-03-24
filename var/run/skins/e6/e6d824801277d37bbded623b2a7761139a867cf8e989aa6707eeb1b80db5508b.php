<?php

/* product/details/parts/page.image.photo.twig */
class __TwigTemplate_4ced9f9ca4a56c793be8a4e3ac1cbedc72fb9e318cde7c71c9f247dd6260136a extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isViewListVisible", array(0 => "product.details.page.image.photo"), "method")) {
            // line 5
            echo "  <div class=\"product-photo-box\">
    ";
            // line 6
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "product.details.page.image.photo"))), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "product/details/parts/page.image.photo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 6,  21 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Product details image box*/
/*  #}*/
/* {% if this.isViewListVisible('product.details.page.image.photo') %}*/
/*   <div class="product-photo-box">*/
/*     {{ widget_list('product.details.page.image.photo') }}*/
/*   </div>*/
/* {% endif %}*/
/* */
