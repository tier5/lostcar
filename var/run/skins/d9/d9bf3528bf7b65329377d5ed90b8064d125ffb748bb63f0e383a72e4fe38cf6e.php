<?php

/* /var/www/html/lostcar/skins/customer/modules/XC/Reviews/reviews_tab/parts/tab.all_reviews_link.twig */
class __TwigTemplate_ce0ed3207bf5fe0f8dcdc5667777f40e7c9b74622671b09e97aa4cbc0e29b1a0 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getReviewsCount", array(), "method") > 0)) {
            // line 8
            echo "  <div class=\"link\">
    <div class=\"line\"></div>
    <a href=\"";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "product_reviews", "", array("product_id" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getProductId", array(), "method"), "category_id" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getCategoryId", array(), "method")))), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Read all reviews about the product")), "html", null, true);
            echo "</a>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/XC/Reviews/reviews_tab/parts/tab.all_reviews_link.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Read all reviews link*/
/*  #*/
/*  # @ListChild (list="product.reviews.tab", weight="500")*/
/*  #}*/
/* */
/* {% if this.product.getReviewsCount() > 0 %}*/
/*   <div class="link">*/
/*     <div class="line"></div>*/
/*     <a href="{{ url('product_reviews', '', {'product_id': this.product.getProductId(), 'category_id': this.product.getCategoryId()}) }}">{{ t('Read all reviews about the product') }}</a>*/
/*   </div>*/
/* {% endif %}*/
/* */
