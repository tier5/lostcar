<?php

/* product/details/parts/common.product-added.twig */
class __TwigTemplate_daa1bb0924b1488aaf3cb84d804654f7cea975798f58e570d364b0fbac9e6d9f extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isProductAdded", array(), "method")) {
            // line 5
            echo "<p class=\"product-added-note\">
  <i class=\"icon-ok-mark\"></i>
</p>
";
        }
    }

    public function getTemplateName()
    {
        return "product/details/parts/common.product-added.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Product details buttons block*/
/*  #}*/
/* {% if this.isProductAdded() %}*/
/* <p class="product-added-note">*/
/*   <i class="icon-ok-mark"></i>*/
/* </p>*/
/* {% endif %}*/
/* */
