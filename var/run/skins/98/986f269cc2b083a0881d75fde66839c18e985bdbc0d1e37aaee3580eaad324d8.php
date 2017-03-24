<?php

/* left_menu/marketplace/node.twig */
class __TwigTemplate_b25ccbaa0f6b7da6c68ec92ae3bbfdc1bd992a480a22b62f3893691680aad3f6 extends \XLite\Core\Templating\Twig\Template
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
        echo "<li ";
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "printTagAttributes", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getContainerTagAttributes", array(), "method")), "method");
        echo " sds='sas'>
  ";
        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($this->getAttribute(        // line 5
(isset($context["this"]) ? $context["this"] : null), "getLinkTemplate", array(), "method"));        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
        if ($templateWrapperText) {
echo $templateWrapperStart;
}

        $this->loadTemplate($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getLinkTemplate", array(), "method"), "left_menu/marketplace/node.twig", 5)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
        // line 6
        echo "  ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Menu\\Admin\\LeftMenu\\Marketplace\\LazyLoad"))), "html", null, true);
        echo "
</li>
";
    }

    public function getTemplateName()
    {
        return "left_menu/marketplace/node.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  24 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Left side menu info node*/
/*  #}*/
/* <li {{ this.printTagAttributes(this.getContainerTagAttributes())|raw }} sds='sas'>*/
/*   {% include this.getLinkTemplate() %}*/
/*   {{ widget('XLite\\View\\Menu\\Admin\\LeftMenu\\Marketplace\\LazyLoad') }}*/
/* </li>*/
/* */
