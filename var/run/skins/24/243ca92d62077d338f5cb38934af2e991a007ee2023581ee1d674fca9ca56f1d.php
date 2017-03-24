<?php

/* /var/www/html/lostcar/skins/customer/modules/XC/Reviews/review/parts/field.email.twig */
class __TwigTemplate_fbad0415ca02e1f28dc1bd5e58bebad4f41c430ce684cf008772f77dacf46be2 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"form-item clearfix\">
  <div class=\"email-label\">
    <label for=\"email\">
      ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Your email")), "html", null, true);
        echo "
    </label>
  </div>

  <div class=\"email-value\">
    <span>";
        // line 15
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "review", array()), "email", array()), "html", null, true);
        echo "</span>
  </div>

  <div class=\"tooltip-main\">
      <i class=\"tooltip-caption fa fa-question-circle help-icon\"></i>
      <div class=\"help-text\" style=\"display: none;\">";
        // line 20
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("We use this email in case we need additional information on your review. We do not use it for any kind of mailing lists or spam subscriptions")), "html", null, true);
        echo "</div>
  </div>
  <div class=\"clear\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/XC/Reviews/review/parts/field.email.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 20,  33 => 15,  25 => 10,  19 => 6,);
    }
}
/* {##*/
/*  # E-mail*/
/*  #*/
/*  # @ListChild (list="review.add.fields", weight="300")*/
/*  #}*/
/* */
/* <div class="form-item clearfix">*/
/*   <div class="email-label">*/
/*     <label for="email">*/
/*       {{ t('Your email') }}*/
/*     </label>*/
/*   </div>*/
/* */
/*   <div class="email-value">*/
/*     <span>{{ this.review.email }}</span>*/
/*   </div>*/
/* */
/*   <div class="tooltip-main">*/
/*       <i class="tooltip-caption fa fa-question-circle help-icon"></i>*/
/*       <div class="help-text" style="display: none;">{{ t('We use this email in case we need additional information on your review. We do not use it for any kind of mailing lists or spam subscriptions') }}</div>*/
/*   </div>*/
/*   <div class="clear"></div>*/
/* </div>*/
/* */
