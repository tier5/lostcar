<?php

/* /var/www/html/lostcar/skins/customer/modules/XC/Reviews/reviews_page/parts/review.rating.twig */
class __TwigTemplate_2e8fe2cf334dbb5b046347dd6203244ec0fdd91b05b993d1a4923549d1b26f99 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"rating clearfix\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\XC\\Reviews\\View\\VoteBar", "rate" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "review", array()), "getRating", array(), "method"), "max" => "5"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/XC/Reviews/reviews_page/parts/review.rating.twig";
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
/*  # @ListChild (list="reviews.review", weight="200")*/
/*  #}*/
/* <div class="rating clearfix">*/
/*   {{ widget('\\XLite\\Module\\XC\\Reviews\\View\\VoteBar', rate=this.review.getRating(), max='5') }}*/
/* </div>*/
/* */
