<?php

/* /var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/product/details/parts/page.image.twig */
class __TwigTemplate_be9dae20d320f260cc522987e45ff2e733527eea0e7afa673b1f611b5f076242 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "product.details.page.image"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/product/details/parts/page.image.twig";
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
/*  # @ListChild (list="product.details.page", weight="20")*/
/*  #}*/
/* <div class="image{% if not this.product.hasImage() %} empty{% endif %}">*/
/*   {{ widget_list('product.details.page.image') }}*/
/* </div>*/
/* */
