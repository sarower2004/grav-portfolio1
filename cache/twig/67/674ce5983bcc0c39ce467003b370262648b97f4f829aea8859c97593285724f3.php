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

/* partials/footer.html.twig */
class __TwigTemplate_74a6d8ab9d0c0be0dc4015ea3ed4fadeac9a722ee952a69fc16e6ac26c442deb extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<footer id=\"footer\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"d-flex flex-column align-items-center gap-3\">
                ";
        // line 6
        echo "                <div class=\"footer-logo\">
                    <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('base_url')->getCallable(), []), "html", null, true);
        echo "\">
                       <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "theme://images/flogo.png", [], "array"), "url", []), "html", null, true);
        echo "\" />
                    </a>
                </div>
                <div class=\"\">
                    ";
        // line 13
        echo "                    <div class=\"footer-menu d-flex gap-3\">
                        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 15
            echo "                        <li class=\"footer-link ";
            if (($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) {
                echo " active";
            }
            echo "\">
                        <a class=\" menu\" href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "url", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "menu", []), "html", null, true);
            echo "</a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                    </div>
                </div>
                
                <div class=\"footer-social\">
                           <a href=\"#\" class=\"link\"> <i class=\"fa-brands fa-skype\"></i> </a>
                           <a href=\"#\" class=\"link\"> <i class=\"fa-brands fa-instagram\"></i></i> </a>
                           <a href=\"#\" class=\"link\"> <i class=\"fa-brands fa-linkedin\"></i> </a>
                </div>

                <div class=\"col-12 text-center footer-copyright pt-4\">
                    >&copy; ";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html", null, true);
        echo ". All rights reserved.</p>
                </div>
            </div>
        </div>
        <div class=\"row\">
            
        </div>
    </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 29,  75 => 19,  64 => 16,  57 => 15,  53 => 14,  50 => 13,  43 => 8,  39 => 7,  36 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<footer id=\"footer\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"d-flex flex-column align-items-center gap-3\">
                {# Logo Section #}
                <div class=\"footer-logo\">
                    <a href=\"{{ base_url() }}\">
                       <img src=\"{{page.media['theme://images/flogo.png'].url}}\" />
                    </a>
                </div>
                <div class=\"\">
                    {# Menu Links Section #}
                    <div class=\"footer-menu d-flex gap-3\">
                        {% for page in pages.children.visible %}
                        <li class=\"footer-link {% if page.active or page.activeChild %} active{% endif %}\">
                        <a class=\" menu\" href=\"{{ page.url }}\">{{ page.menu }}</a>
                        </li>
                    {% endfor %}
                    </div>
                </div>
                
                <div class=\"footer-social\">
                           <a href=\"#\" class=\"link\"> <i class=\"fa-brands fa-skype\"></i> </a>
                           <a href=\"#\" class=\"link\"> <i class=\"fa-brands fa-instagram\"></i></i> </a>
                           <a href=\"#\" class=\"link\"> <i class=\"fa-brands fa-linkedin\"></i> </a>
                </div>

                <div class=\"col-12 text-center footer-copyright pt-4\">
                    >&copy; {{ \"now\"|date(\"Y\") }} {{ site.title }}. All rights reserved.</p>
                </div>
            </div>
        </div>
        <div class=\"row\">
            
        </div>
    </div>
</footer>
", "partials/footer.html.twig", "C:\\xampp\\htdocs\\grav-develop\\Project_3\\user\\themes\\bullet\\templates\\partials\\footer.html.twig");
    }
}
