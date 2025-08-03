<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modular/hobby.html.twig */
class __TwigTemplate_e82a90d75b8cdaf4bdcf28cd664d12dfc5c9516521630ed73e35c14a56efffdd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["content"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "content", []);
        // line 2
        $context["slide_1"] = $this->getAttribute(($context["content"] ?? null), "slides_1", []);
        // line 3
        $context["slide_2"] = $this->getAttribute(($context["content"] ?? null), "slides_2", []);
        // line 4
        echo "


";
        // line 7
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = [])
    {
        // line 8
        echo "
    <section class=\"hobby_section\">
        <div class=\"container\">
            <div class=\"col-6 \">
                <div class=\"swiper hobby_slide\">
                    <div class=\"swiper-wrapper\">
                        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["slide_1"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item_p"]) {
            // line 15
            echo "                            <div class=\"swiper-slide\">
                                <div class=\"img_box\">
                                    <img src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["item_p"], "slide", []), [], "array"), "url", []), "html", null, true);
            echo "\">
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item_p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                    </div>
                </div>
            </div>
            <div class=\"col-6 \">
                <div class=\"swiper hobby_slide\">
                    <div class=\"swiper-wrapper\">
                        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["slide_2"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item_a"]) {
            // line 28
            echo "                            <div class=\"swiper-slide\">
                                <div class=\"img_box\">
                                    <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["item_a"], "slide", []), [], "array"), "url", []), "html", null, true);
            echo "\">
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item_a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                    </div>
                </div>
            </div>
           ";
        // line 50
        echo "        </div> 
    </section>

";
    }

    public function getTemplateName()
    {
        return "modular/hobby.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 50,  100 => 34,  90 => 30,  86 => 28,  82 => 27,  74 => 21,  64 => 17,  60 => 15,  56 => 14,  48 => 8,  42 => 7,  37 => 4,  35 => 3,  33 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set content = page.header.content %}
{% set slide_1 = content.slides_1 %}
{% set slide_2 = content.slides_2 %}



{% block content %}

    <section class=\"hobby_section\">
        <div class=\"container\">
            <div class=\"col-6 \">
                <div class=\"swiper hobby_slide\">
                    <div class=\"swiper-wrapper\">
                        {% for item_p in slide_1 %}
                            <div class=\"swiper-slide\">
                                <div class=\"img_box\">
                                    <img src=\"{{page.media[item_p.slide].url}}\">
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                </div>
            </div>
            <div class=\"col-6 \">
                <div class=\"swiper hobby_slide\">
                    <div class=\"swiper-wrapper\">
                        {% for item_a in slide_2 %}
                            <div class=\"swiper-slide\">
                                <div class=\"img_box\">
                                    <img src=\"{{page.media[item_a.slide].url}}\">
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                </div>
            </div>
           {# <div class=\"col-12 col-xl-6\">
                <div class=\"swiper mySwiper\">
                    <div class=\"swiper-wrapper\">
                    {% for slide1 in slide_1 %}
                        <div class=\"swiper-slide\">
                            <divL class=\"image_box\">
                                <img src=\"{{page.media[slide1.slide].url}}\" alt=\"slide1\">
                            </div>
                        </div>
                    {% endfor %}
                    </div>
                </div>
            </div> #}
        </div> 
    </section>

{% endblock %}", "modular/hobby.html.twig", "C:\\xampp\\htdocs\\grav-develop\\Project_3\\user\\themes\\theme4\\templates\\modular\\hobby.html.twig");
    }
}
