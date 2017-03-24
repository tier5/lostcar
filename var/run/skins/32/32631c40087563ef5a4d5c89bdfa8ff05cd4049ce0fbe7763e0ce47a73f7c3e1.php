<?php

/* /var/www/html/lostcar/skins/customer/modules/XC/Reviews/reviews_page/parts/review.review.twig */
class __TwigTemplate_09f5f89ef552afc4c36e30a618201600ca1c9b4039c818bd1e21aa781ff7bffe extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"text\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "review", array()), "getReview", array(), "method"), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/XC/Reviews/reviews_page/parts/review.review.twig";
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
/*  # Review block*/
/*  #*/
/*  # @ListChild (list="reviews.review", weight="300")*/
/*  #}*/
/* <div class="text">*/
/*   {{ this.review.getReview() }}*/
/* </div>*/
/* */
