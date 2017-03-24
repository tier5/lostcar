<?php

/* /var/www/html/lostcar/skins/customer/modules/XC/CanadaPost/products_return/create/parts/main.info.twig */
class __TwigTemplate_87a34c7c2e947512adce5168902ff111eb47b7582b9072088812f79012bc1910 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"section-text\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("To request a return please fill the form below")), "html", null, true);
        echo "
</div>
 
<hr size=\"1\" />
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/XC/CanadaPost/products_return/create/parts/main.info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Create return :: form*/
/*  #*/
/*  # @ListChild (list="capost_create_return", weight="100")*/
/*  #}*/
/* */
/* <div class="section-text">*/
/*   {{ t('To request a return please fill the form below') }}*/
/* </div>*/
/*  */
/* <hr size="1" />*/
/* */
