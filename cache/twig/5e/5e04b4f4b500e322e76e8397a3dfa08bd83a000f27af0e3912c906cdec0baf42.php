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

/* modular/about.html.twig */
class __TwigTemplate_17d9236f3059c0ceaf918e36f17ef41f0ba06215e767a24ac167bf81a0f45df3 extends \Twig\Template
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
        $context["title"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []);
        // line 3
        $context["slides"] = $this->getAttribute(($context["content"] ?? null), "slides", []);
        // line 4
        echo "

";
        // line 6
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = [])
    {
        // line 7
        echo "    <section class=\"about_section\">
        <div class\"container\">
            <div class=\"row responsive_about\">
                <div class=\"col-12 col-xl-6 md-4\">
                    <h2> ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
        echo " </h2>
                    <div class=\"title_underline\"></div>
                    <div class=\"about_text\">
                        <h1> ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["content"] ?? null), "heading", []), "html", null, true);
        echo " </h1>
                        <p> ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["content"] ?? null), "description", []), "html", null, true);
        echo " </p>
                        <a class=\"btn\"> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["content"] ?? null), "btn", []), "html", null, true);
        echo " </a>
                    </div>
                </div>
                <div class=\"col-12 col-xl-6 md-4\">
                    <div class=\"slider_container\">
                        <div class=\"swiper card_slider\">
                            <div class=\"swiper-wrapper\">
                            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["slides"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 24
            echo "                                <div class=\"swiper-slide\">
                                    <div class=\"image_box\">
                                    <img src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["item"], "slide", []), [], "array"), "url", []), "html", null, true);
            echo "\" alt=\"demo.png\"/>
                                    </div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                            </div>
                                <div class=\"swiper-button-next\"></div>
                                 <div class=\"swiper-button-prev\"></div>
                                 <div class=\"swiper-pagination\"></div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>

        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "modular/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 30,  85 => 26,  81 => 24,  77 => 23,  67 => 16,  63 => 15,  59 => 14,  53 => 11,  47 => 7,  41 => 6,  37 => 4,  35 => 3,  33 => 2,  31 => 1,);
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
{% set title = page.header.title %}
{% set slides = content.slides %}


{% block content %}
    <section class=\"about_section\">
        <div class\"container\">
            <div class=\"row responsive_about\">
                <div class=\"col-12 col-xl-6 md-4\">
                    <h2> {{page.title}} </h2>
                    <div class=\"title_underline\"></div>
                    <div class=\"about_text\">
                        <h1> {{content.heading}} </h1>
                        <p> {{content.description}} </p>
                        <a class=\"btn\"> {{content.btn}} </a>
                    </div>
                </div>
                <div class=\"col-12 col-xl-6 md-4\">
                    <div class=\"slider_container\">
                        <div class=\"swiper card_slider\">
                            <div class=\"swiper-wrapper\">
                            {% for item in slides %}
                                <div class=\"swiper-slide\">
                                    <div class=\"image_box\">
                                    <img src=\"{{page.media[item.slide].url}}\" alt=\"demo.png\"/>
                                    </div>
                                </div>
                            {% endfor %}
                            </div>
                                <div class=\"swiper-button-next\"></div>
                                 <div class=\"swiper-button-prev\"></div>
                                 <div class=\"swiper-pagination\"></div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>

        </div>
    </section>
{% endblock %}", "modular/about.html.twig", "C:\\xampp\\htdocs\\grav-develop\\Project_3\\user\\themes\\theme4\\templates\\modular\\about.html.twig");
    }
}
