<?php

/* /var/www/html/lostcar/skins/admin/modules/CDev/Paypal/welcome/parts/block.footer.twig */
class __TwigTemplate_61a058276f9b25dd973d675318c236938fd5685b28e4471ffe6af9afb2261255 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"welcome-footer\">

  <div class=\"bg\"></div>

  <div class=\"do-not-show\">
    <input type=\"checkbox\" name=\"hide_welcome_block_paypal\" id=\"hide_welcome_block_paypal\" class=\"hide-welcome-block\" />
    <label for=\"hide_welcome_block_paypal\">";
        // line 13
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Do not show at startup anymore")), "html", null, true);
        echo "</label>
  </div>
  <div class=\"close-button\">";
        // line 15
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("CLOSE")), "html", null, true);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/modules/CDev/Paypal/welcome/parts/block.footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 15,  28 => 13,  19 => 6,);
    }
}
/* {##*/
/*  # Block content : footer*/
/*  #*/
/*  # @ListChild (list="paypal.welcome.content", weight="20")*/
/*  #}*/
/* */
/* <div class="welcome-footer">*/
/* */
/*   <div class="bg"></div>*/
/* */
/*   <div class="do-not-show">*/
/*     <input type="checkbox" name="hide_welcome_block_paypal" id="hide_welcome_block_paypal" class="hide-welcome-block" />*/
/*     <label for="hide_welcome_block_paypal">{{ t('Do not show at startup anymore') }}</label>*/
/*   </div>*/
/*   <div class="close-button">{{ t('CLOSE') }}</div>*/
/* </div>*/
/* */
