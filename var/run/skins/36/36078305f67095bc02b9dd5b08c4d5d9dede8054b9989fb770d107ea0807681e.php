<?php

/* /var/www/html/lostcar/skins/customer/modules/CDev/SocialLogin/parts/social_login.widget.twig */
class __TwigTemplate_06e7e69ef39d955d5892a4e40f88910aa0addbdfeb2e69082da636d561e1853f extends \XLite\Core\Templating\Twig\Template
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
<div class=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getStyleClass", array(), "method"), "html", null, true);
        echo "\">
  <ul class=\"social-login\">
  ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "buttons", "type" => "nested", "widgetStyle" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getButtonStyle", array(), "method")))), "html", null, true);
        echo "
  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/CDev/SocialLogin/parts/social_login.widget.twig";
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
/*  # SocialLogin widget*/
/*  #*/
/*  # @ListChild (list="social.login", weight="100")*/
/*  #}*/
/* */
/* <div class="{{ this.getStyleClass() }}">*/
/*   <ul class="social-login">*/
/*   {{ widget_list('buttons', type='nested', widgetStyle=this.getButtonStyle()) }}*/
/*   </ul>*/
/* </div>*/
/* */
