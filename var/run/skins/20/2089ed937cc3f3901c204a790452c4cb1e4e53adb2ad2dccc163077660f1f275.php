<?php

/* /var/www/html/lostcar/skins/customer/product/details/parts/quicklook.image.twig */
class __TwigTemplate_5d8e44a2c5a32c9d005bbe73d5ead2c1a068d9ba1d8ea7e71429b648a708244f extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"image";
        if ( !$this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "hasImage", array(), "method")) {
            echo " empty";
        }
        echo "\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "product.details.quicklook.image"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/product/details/parts/quicklook.image.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Product details image block*/
/*  #*/
/*  # @ListChild (list="product.details.quicklook", weight="20")*/
/*  #}*/
/* <div class="image{% if not this.product.hasImage() %} empty{% endif %}">*/
/*   {{ widget_list('product.details.quicklook.image') }}*/
/* </div>*/
/* */
