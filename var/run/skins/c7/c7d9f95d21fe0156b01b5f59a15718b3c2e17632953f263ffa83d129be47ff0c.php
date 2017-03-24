<?php

/* /var/www/html/lostcar/skins/admin/browse_server/parts/buttons.twig */
class __TwigTemplate_1fc3ea3a03469d93dff7d587269fd61296d9d14d7ed1564efa9b6ae823081923 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"browse-selector-actions\">
  <button class=\"back-button\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Back to file select")), "html", null, true);
        echo "</button>
  <button class=\"choose-file-button main-button\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Choose file")), "html", null, true);
        echo "</button>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/browse_server/parts/buttons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Browser server dialog : buttons*/
/*  #*/
/*  # @ListChild (list="browseServer", zone="admin", weight="200")*/
/*  #}*/
/* <div class="browse-selector-actions">*/
/*   <button class="back-button">{{ t('Back to file select') }}</button>*/
/*   <button class="choose-file-button main-button">{{ t('Choose file') }}</button>*/
/* </div>*/
/* */
