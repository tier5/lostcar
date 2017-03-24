<?php

/* /var/www/html/lostcar/skins/customer/modules/CDev/GoSocial/product/details/parts/common.share.twig */
class __TwigTemplate_b537826b2c14f63060075df02a68e42ef746c1f65960af7af2e3d0705139509f extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"share clearfix\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "buttons.share"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/CDev/GoSocial/product/details/parts/common.share.twig";
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
/*  # Facebook LIKE button*/
/*  #*/
/*  # @ListChild (list="product.details.page.info", weight="110")*/
/*  #}*/
/* <div class="share clearfix">*/
/*   {{ widget_list('buttons.share') }}*/
/* </div>*/
/* */
