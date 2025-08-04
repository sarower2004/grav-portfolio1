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
class __TwigTemplate_5754da3fa7f395574947d27c8da8c25f7f7bc1001a0591cfc7577dc1d2275f33 extends \Twig\Template
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
            <div class=\"hobby_responsive\"> 
                <div class=\"col-6 \">
                    <div class=\"hobby_title\">
                        <h2>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["content"] ?? null), "heading_1", []), "html", null, true);
        echo "</h2>
                    </div>
                    <div class=\"swiper hobby_slide\">
                        <div class=\"swiper-wrapper\">
                            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["slide_1"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item_p"]) {
            // line 19
            echo "                                <div class=\"swiper-slide\">
                                    <div class=\"img_box\">
                                        <img src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["item_p"], "slide", []), [], "array"), "url", []), "html", null, true);
            echo "\">
                                    </div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item_p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                        </div>
                    </div>
                </div>
                <div class=\"col-6 \">
                    <div class=\"hobby_title\">
                        <h2>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["content"] ?? null), "heading_2", []), "html", null, true);
        echo "</h2>
                    </div>
                    <div class=\"swiper hobby_slide\">
                        <div class=\"swiper-wrapper\">
                            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["slide_2"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item_a"]) {
            // line 35
            echo "                                <div class=\"swiper-slide\">
                                    <div class=\"img_box\">
                                        <img src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["item_a"], "slide", []), [], "array"), "url", []), "html", null, true);
            echo "\">
                                    </div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item_a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                        </div>
                    </div>
                </div>
            </div>
            <div class=\"\">
                    <div class=\"hobby_title\">
                        <h2>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute(($context["content"] ?? null), "heading_2", []), "html", null, true);
        echo "</h2>
                    </div>
                    <div class=\"swiper window_slide\">
                        <div class=\"swiper-wrapper\">
                            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["slide_2"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item_a"]) {
            // line 52
            echo "                                <div class=\"swiper-slide window_swiper\">
                                    <div class=\"img_box1\">
                                        <img src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["item_a"], "slide", []), [], "array"), "url", []), "html", null, true);
            echo "\">
                                    </div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item_a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                        </div>
                    </div>
            </div>
        </div> 
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
        return array (  146 => 58,  136 => 54,  132 => 52,  128 => 51,  121 => 47,  113 => 41,  103 => 37,  99 => 35,  95 => 34,  88 => 30,  81 => 25,  71 => 21,  67 => 19,  63 => 18,  56 => 14,  48 => 8,  42 => 7,  37 => 4,  35 => 3,  33 => 2,  31 => 1,);
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
            <div class=\"hobby_responsive\"> 
                <div class=\"col-6 \">
                    <div class=\"hobby_title\">
                        <h2>{{ content.heading_1 }}</h2>
                    </div>
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
                    <div class=\"hobby_title\">
                        <h2>{{ content.heading_2 }}</h2>
                    </div>
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
            </div>
            <div class=\"\">
                    <div class=\"hobby_title\">
                        <h2>{{ content.heading_2 }}</h2>
                    </div>
                    <div class=\"swiper window_slide\">
                        <div class=\"swiper-wrapper\">
                            {% for item_a in slide_2 %}
                                <div class=\"swiper-slide window_swiper\">
                                    <div class=\"img_box1\">
                                        <img src=\"{{page.media[item_a.slide].url}}\">
                                    </div>
                                </div>
                            {% endfor %}
                        </div>
                    </div>
            </div>
        </div> 
    </section>

{% endblock %}", "modular/hobby.html.twig", "C:\\xampp\\htdocs\\gravcms\\grav-portfolio1\\user\\themes\\theme4\\templates\\modular\\hobby.html.twig");
    }
}
