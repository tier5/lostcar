<?php

/* button/addon/manage_modules_selected.twig */
class __TwigTemplate_745ad90b8788b29a829fa9960888e65bc5c8943261096ec44f168a982723957d extends \XLite\Core\Templating\Twig\Template
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
        echo "
<div class=\"manage-modules-comments\">
  <span class=\"info\">";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Will be deleted:")), "html", null, true);
        echo "</span>
  <span class=\"module-names\"></span>
</div>
";
    }

    public function getTemplateName()
    {
        return "button/addon/manage_modules_selected.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 6,  19 => 4,);
    }
}
/* {##*/
/*  # Manage modules form comments template*/
/*  #}*/
/* */
/* <div class="manage-modules-comments">*/
/*   <span class="info">{{ t('Will be deleted:') }}</span>*/
/*   <span class="module-names"></span>*/
/* </div>*/
/* */
