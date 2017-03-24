<?php

/* modules/XC/Reviews/reviews_tab/parts/average_rating.twig */
class __TwigTemplate_f752f5ddae2a4230851eeee56da694aaac753f1bb282e7751013dcbfba16ac29 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isVisibleAverageRatingOnPage", array(), "method")) {
            // line 5
            echo "  <div class=\"product-average-rating clearfix\">
    <input type=\"hidden\" name=\"target_widget\" value=\"\\XLite\\Module\\XC\\Reviews\\View\\Customer\\ReviewsTab\\AverageRating\" />
    <div class=\"comment\">";
            // line 7
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Average rating")), "html", null, true);
            echo ":</div>
    ";
            // line 8
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "reviews.product.rating", "place" => "tab"))), "html", null, true);
            echo "
    <div class=\"comment\">
      ";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Score: X. Votes: Y", array("score" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAverageRating", array(), "method"), "votes" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getVotesCount", array(), "method")))), "html", null, true);
            echo "
    </div>
    ";
            // line 12
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isVisibleAverageRating", array(), "method")) {
                // line 13
                echo "    <input type=\"button\" value=\"Average rating\" name=\"showRating\" id=\"btnAverageRating\" class=\"button-average-rating\" />
  
    <div class=\"product-average-rating-container\">
      <div class=\"product-average-rating summary\">
        ";
                // line 17
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "reviews.rating.details"))), "html", null, true);
                echo "
      </div>
    </div>
    ";
            }
            // line 21
            echo "  
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/XC/Reviews/reviews_tab/parts/average_rating.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 21,  47 => 17,  41 => 13,  39 => 12,  34 => 10,  29 => 8,  25 => 7,  21 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Average product rating widget in reviews tab*/
/*  #}*/
/* {% if this.isVisibleAverageRatingOnPage() %}*/
/*   <div class="product-average-rating clearfix">*/
/*     <input type="hidden" name="target_widget" value="\XLite\Module\XC\Reviews\View\Customer\ReviewsTab\AverageRating" />*/
/*     <div class="comment">{{ t('Average rating') }}:</div>*/
/*     {{ widget_list('reviews.product.rating', place='tab') }}*/
/*     <div class="comment">*/
/*       {{ t('Score: X. Votes: Y', {'score': this.getAverageRating(), 'votes': this.getVotesCount()}) }}*/
/*     </div>*/
/*     {% if this.isVisibleAverageRating() %}*/
/*     <input type="button" value="Average rating" name="showRating" id="btnAverageRating" class="button-average-rating" />*/
/*   */
/*     <div class="product-average-rating-container">*/
/*       <div class="product-average-rating summary">*/
/*         {{ widget_list('reviews.rating.details') }}*/
/*       </div>*/
/*     </div>*/
/*     {% endif %}*/
/*   */
/*   </div>*/
/* {% endif %}*/
/* */
