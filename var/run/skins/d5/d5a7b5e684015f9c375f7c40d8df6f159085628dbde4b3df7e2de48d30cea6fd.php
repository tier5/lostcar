<?php

/* modules/XC/Reviews/reviews_tab/body.twig */
class __TwigTemplate_e598473c37e32812d346821c889892834da44f674230f42351483458bbbbd723 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"product-reviews\">
  ";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "product.reviews.tab"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/XC/Reviews/reviews_tab/body.twig";
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
/*  # Reviews tab*/
/*  #}*/
/* <div class="product-reviews">*/
/*   {{ widget_list('product.reviews.tab') }}*/
/* </div>*/
/* */
