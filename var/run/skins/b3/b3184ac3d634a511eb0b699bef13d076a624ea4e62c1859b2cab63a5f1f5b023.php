<?php

/* /var/www/html/lostcar/skins/admin/file_selector/parts/local_server_label.twig */
class __TwigTemplate_f5a2933be89f9b9d6397e68b32874511acedc0d9db94d584108771e38567938d extends \XLite\Core\Templating\Twig\Template
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
<li class=\"local-server-label label-field\">
  <input type=\"radio\" id=\"file_select_local\" name=\"file_select\" value=\"local\" />
  <label for=\"file_select_local\">";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("from local server")), "html", null, true);
        echo "</label>
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/file_selector/parts/local_server_label.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # ____file_title____*/
/*  #*/
/*  # @ListChild (list="file_select_dialog.file_selections", weight="300")*/
/*  #}*/
/* */
/* <li class="local-server-label label-field">*/
/*   <input type="radio" id="file_select_local" name="file_select" value="local" />*/
/*   <label for="file_select_local">{{ t('from local server') }}</label>*/
/* </li>*/
/* */
