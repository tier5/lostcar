<?php

/* /var/www/html/lostcar/skins/customer/modules/XC/Reviews/review/parts/field.rating.twig */
class __TwigTemplate_39cce40fbde4af8af12ed8d5cd7056a7a88abd925e600ca403ab471148a3db9c extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"form-item clearfix\">
  <label for=\"rating\" class=\"rating\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("How do you rate this item?")), "html", null, true);
        echo "</label>

  ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\XC\\Reviews\\View\\FormField\\Input\\Rating", "fieldName" => "rating", "fieldOnly" => "true", "rate" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "review", array()), "rating", array()), "is_editable" => "true", "max" => "5"))), "html", null, true);
        echo "

</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/XC/Reviews/review/parts/field.rating.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Rating*/
/*  #*/
/*  # @ListChild (list="review.add.fields", weight="100")*/
/*  #}*/
/* <div class="form-item clearfix">*/
/*   <label for="rating" class="rating">{{ t('How do you rate this item?') }}</label>*/
/* */
/*   {{ widget('\\XLite\\Module\\XC\\Reviews\\View\\FormField\\Input\\Rating', fieldName='rating', fieldOnly='true', rate=this.review.rating, is_editable='true', max='5') }}*/
/* */
/* </div>*/
/* */
