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
            'conntent' => [$this, 'block_conntent'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["content"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "content", []);
        // line 2
        $context["title"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []);
        // line 3
        echo "

";
        // line 5
        $this->displayBlock('conntent', $context, $blocks);
    }

    public function block_conntent($context, array $blocks = [])
    {
        // line 6
        echo "    <section class=\"about_section\">
        <div class\"container\">
            <div class=\"row\">
                <div class=\"col-6\">
                    <h2> ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
        echo " </h2>
                    <div class=\"title_underline\"></div>
                    <div class=\"about_text\">
                        <h1> ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["content"] ?? null), "heading", []), "html", null, true);
        echo " </h1>
                        <p> ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["content"] ?? null), "description", []), "html", null, true);
        echo " </p>
                        <a class=\"btn\"> ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["content"] ?? null), "btn", []), "html", null, true);
        echo " </a>
                    </div>
                </div>
                <div class=\"col-6\">
                    <div class=\"slider_container\">
                        <div class=\"swiper card_slider\">
                            <div class=\"swiper-wrapper\">
                                <div class=\"swiper-slide\">
                                    <div class=\"image_box\">
                                    <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute(($context["content"] ?? null), "slide1", []), [], "array"), "url", []), "html", null, true);
        echo "\" alt=\"demo.png\"/>
                                    </div>
                                </div>
                                <div class=\"swiper-slide\">
                                    <div class=\"image_box\">
                                    <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute(($context["content"] ?? null), "slide2", []), [], "array"), "url", []), "html", null, true);
        echo "\" alt=\"demo.png\"/>
                                    </div>
                                </div>
                                <div class=\"swiper-slide\">
                                    <div class=\"image_box\">
                                    <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute(($context["content"] ?? null), "slide3", []), [], "array"), "url", []), "html", null, true);
        echo "\" alt=\"demo.png\"/>
                                    </div>
                                </div>
                                <div class=\"swiper-slide\">
                                    <div class=\"image_box\">
                                    <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute(($context["content"] ?? null), "slide4", []), [], "array"), "url", []), "html", null, true);
        echo "\" alt=\"demo.png\"/>
                                    </div>
                                </div>
                                <div class=\"swiper-slide\">
                                    <div class=\"image_box\">
                                    <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute(($context["content"] ?? null), "slide5", []), [], "array"), "url", []), "html", null, true);
        echo "\" alt=\"demo.png\"/>
                                    </div>
                                </div>
                                <div class=\"swiper-slide\">
                                    <div class=\"image_box\">
                                    <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute(($context["content"] ?? null), "slide6", []), [], "array"), "url", []), "html", null, true);
        echo "\" alt=\"demo.png\"/>
                                    </div>
                                </div>
                                <div class=\"swiper-slide\">
                                    <div class=\"image_box\">
                                    <img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute(($context["content"] ?? null), "slide7", []), [], "array"), "url", []), "html", null, true);
        echo "\" alt=\"demo.png\"/>
                                    </div>
                                </div>
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
        return array (  125 => 54,  117 => 49,  109 => 44,  101 => 39,  93 => 34,  85 => 29,  77 => 24,  65 => 15,  61 => 14,  57 => 13,  51 => 10,  45 => 6,  39 => 5,  35 => 3,  33 => 2,  31 => 1,);
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


{% block conntent %}
    <section class=\"about_section\">
        <div class\"container\">
            <div class=\"row\">
                <div class=\"col-6\">
                    <h2> {{page.title}} </h2>
                    <div class=\"title_underline\"></div>
                    <div class=\"about_text\">
                        <h1> {{content.heading}} </h1>
                        <p> {{content.description}} </p>
                        <a class=\"btn\"> {{content.btn}} </a>
                    </div>
                </div>
                <div class=\"col-6\">
                    <div class=\"slider_container\">
                        <div class=\"swiper card_slider\">
                            <div class=\"swiper-wrapper\">
                                <div class=\"swiper-slide\">
                                    <div class=\"image_box\">
                                    <img src=\"{{page.media[content.slide1].url}}\" alt=\"demo.png\"/>
                                    </div>
                                </div>
                                <div class=\"swiper-slide\">
                                    <div class=\"image_box\">
                                    <img src=\"{{page.media[content.slide2].url}}\" alt=\"demo.png\"/>
                                    </div>
                                </div>
                                <div class=\"swiper-slide\">
                                    <div class=\"image_box\">
                                    <img src=\"{{page.media[content.slide3].url}}\" alt=\"demo.png\"/>
                                    </div>
                                </div>
                                <div class=\"swiper-slide\">
                                    <div class=\"image_box\">
                                    <img src=\"{{page.media[content.slide4].url}}\" alt=\"demo.png\"/>
                                    </div>
                                </div>
                                <div class=\"swiper-slide\">
                                    <div class=\"image_box\">
                                    <img src=\"{{page.media[content.slide5].url}}\" alt=\"demo.png\"/>
                                    </div>
                                </div>
                                <div class=\"swiper-slide\">
                                    <div class=\"image_box\">
                                    <img src=\"{{page.media[content.slide6].url}}\" alt=\"demo.png\"/>
                                    </div>
                                </div>
                                <div class=\"swiper-slide\">
                                    <div class=\"image_box\">
                                    <img src=\"{{page.media[content.slide7].url}}\" alt=\"demo.png\"/>
                                    </div>
                                </div>
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
