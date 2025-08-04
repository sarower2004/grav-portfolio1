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

/* partials/base.html.twig */
class __TwigTemplate_bdf1681f271cbebb87f86ded6d01c1047cb462c6107507e0636a710ed148faf8 extends \Twig\Template
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
        echo "<!doctype html>
<html lang=\"en\">
  <head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- Bootstrap CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">

    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css\">

    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css\" integrity=\"sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />

    
     <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://assets/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

      <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
      <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
      <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Overpass:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Vollkorn:ital,wght@0,400..900;1,400..900&display=swap\" rel=\"stylesheet\">

      <!-- Link Swiper's CSS -->
      <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css\" />
      
    <title>Oyee</title>
  </head>
  <body>
      
        ";
        // line 29
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 29)->display($context);
        // line 30
        echo "
        ";
        // line 31
        $this->displayBlock('content', $context, $blocks);
        // line 35
        echo "      

    


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\" 
    integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\"></script>
    
    <script src=\"https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js\"></script>
    
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://assets/js/script.js"), "html", null, true);
        echo "\"> </script>

     <!-- Swiper JS -->
    <script src=\"https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js\"></script>

     <!-- Initialize Swiper -->
    <script type=\"text/javascript\">
       var swiper = new Swiper(\".card_slider\", {
        slidesPerView: 1,
        spaceBetween: 15,
        loop: true,
        speed: 1000,
        autoplay:{
          delay: 2000,
        },
        pagination: {
          el: \".swiper-pagination\",
          clickable: true,
        },
        navigation: {
        nextEl: \".swiper-button-next\",
        prevEl: \".swiper-button-prev\",
      },
      }); 

    var swiper = new Swiper(\".hobby_slide\", {
      effect: \"cards\",
      grabCursor: true,
      
      
    });

    var swiper = new Swiper(\".window_slide\", {
      effect: \"coverflow\",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: \"auto\",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      loop: true,
      speed: 1000,
      autoplay: {
        delay: 2000,
      },
    });
    </script>

   
  </body>
</html>";
    }

    // line 31
    public function block_content($context, array $blocks = [])
    {
        // line 32
        echo "

        ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 32,  143 => 31,  84 => 46,  71 => 35,  69 => 31,  66 => 30,  64 => 29,  48 => 16,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
  <head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- Bootstrap CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">

    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css\">

    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css\" integrity=\"sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />

    
     <link href=\"{{url(\"theme://assets/css/custom.css\")}}\" rel=\"stylesheet\"/>

      <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
      <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
      <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Overpass:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Vollkorn:ital,wght@0,400..900;1,400..900&display=swap\" rel=\"stylesheet\">

      <!-- Link Swiper's CSS -->
      <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css\" />
      
    <title>Oyee</title>
  </head>
  <body>
      
        {% include 'partials/navigation.html.twig' %}

        {% block content %}


        {% endblock %}
      

    


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\" 
    integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\"></script>
    
    <script src=\"https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js\"></script>
    
    <script src=\"{{url(\"theme://assets/js/script.js\")}}\"> </script>

     <!-- Swiper JS -->
    <script src=\"https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js\"></script>

     <!-- Initialize Swiper -->
    <script type=\"text/javascript\">
       var swiper = new Swiper(\".card_slider\", {
        slidesPerView: 1,
        spaceBetween: 15,
        loop: true,
        speed: 1000,
        autoplay:{
          delay: 2000,
        },
        pagination: {
          el: \".swiper-pagination\",
          clickable: true,
        },
        navigation: {
        nextEl: \".swiper-button-next\",
        prevEl: \".swiper-button-prev\",
      },
      }); 

    var swiper = new Swiper(\".hobby_slide\", {
      effect: \"cards\",
      grabCursor: true,
      
      
    });

    var swiper = new Swiper(\".window_slide\", {
      effect: \"coverflow\",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: \"auto\",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      loop: true,
      speed: 1000,
      autoplay: {
        delay: 2000,
      },
    });
    </script>

   
  </body>
</html>", "partials/base.html.twig", "C:\\xampp\\htdocs\\gravcms\\grav-portfolio1\\user\\themes\\theme4\\templates\\partials\\base.html.twig");
    }
}
