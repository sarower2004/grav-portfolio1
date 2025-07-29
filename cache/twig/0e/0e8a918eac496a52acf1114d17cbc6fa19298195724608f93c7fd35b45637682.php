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

/* modular/banner.html.twig */
class __TwigTemplate_9dfb06472210125a85d02da73747f02e9d56543d21a3d699b3aa35c97cd42c30 extends \Twig\Template
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
        $context["content"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "content", []);
        // line 2
        echo "
<div class=\"d-flex align-items-center justify-content-start w-lg-100 hero_part\" style=\"background: url('";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/banner.png"), "html", null, true);
        echo "') center/cover no-repeat; min-height: 100vh;\">
  <div class=\"text-center text-white p-5\" >
  <h1 class=\"text-white\" > ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["content"] ?? null), "owner_name", []), "html", null, true);
        echo " </h1>
   <h3 class=\"text-white\"> I’m a <span id=\"rotating-text\"></span><span class=\"cursor\">|</span> </h>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  35 => 3,  32 => 2,  30 => 1,);
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

<div class=\"d-flex align-items-center justify-content-start w-lg-100 hero_part\" style=\"background: url('{{ url('theme://images/banner.png') }}') center/cover no-repeat; min-height: 100vh;\">
  <div class=\"text-center text-white p-5\" >
  <h1 class=\"text-white\" > {{content.owner_name}} </h1>
   <h3 class=\"text-white\"> I’m a <span id=\"rotating-text\"></span><span class=\"cursor\">|</span> </h>
  </div>
</div>
", "modular/banner.html.twig", "C:\\xampp\\htdocs\\grav-develop\\Project_3\\user\\themes\\theme99\\templates\\modular\\banner.html.twig");
    }
}
