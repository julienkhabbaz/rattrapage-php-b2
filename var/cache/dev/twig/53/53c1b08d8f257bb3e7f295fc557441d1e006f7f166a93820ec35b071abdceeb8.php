<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* app/accueil.html.twig */
class __TwigTemplate_45937e268d4f37ef2b14b521fea46e2eca7e1d11bae2324763990760d6ce6aa0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "app/accueil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "app/accueil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "app/accueil.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

<div id=\"myCarouselMain\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">
    <div class=\"carousel-inner\">
        <div class=\"carousel-item active\">
            <div class=\"mask flex-center\">
                <div class=\"container\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-md-7 col-12 order-md-1 order-2\">
\t\t\t\t\t\t ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lastProduits"]) || array_key_exists("lastProduits", $context) ? $context["lastProduits"] : (function () { throw new RuntimeError('Variable "lastProduits" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 16
            echo "                            <h4> <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 16)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "name", [], "any", false, false, false, 16), "html", null, true);
            echo "</a></h4>
                            <p>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 17), "html", null, true);
            echo "</p> <br> <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\">Ajouter au panier</a>
\t\t\t\t\t\t\t
                        </div>
                        <div class=\"col-md-5 col-12 order-md-2 order-1\"><img src=\"";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "picture", [], "any", false, false, false, 20), "html", null, true);
            echo "\" class=\"mx-auto\" alt=\"slide\"></div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                    </div>
                </div>
            </div>
        </div>
     
    </div> <a class=\"carousel-control-prev\" href=\"#myCarouselMain\" role=\"button\" data-slide=\"prev\"> <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span> <span class=\"sr-only\">Previous</span> </a> <a class=\"carousel-control-next\" href=\"#myCarouselMain\" role=\"button\" data-slide=\"next\"> <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span> <span class=\"sr-only\">Suivant</span> </a>
</div>

\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<h2>Produits en <b>Promotion</b></h2>
\t\t\t<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"0\">
\t\t\t<!-- Carousel indicators -->
\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
\t\t\t</ol>   
\t\t\t<!-- Wrapper for carousel items -->
\t\t\t<div class=\"carousel-inner\">
\t\t\t\t<div class=\"item active\">
\t\t\t\t\t<div class=\"row\">
           ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 45
            echo "\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t<div class=\"thumb-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"img-box\">

                  ";
            // line 49
            if (twig_get_attribute($this->env, $this->source, $context["produit"], "picture", [], "any", false, false, false, 49)) {
                // line 50
                echo "                  <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 50)]), "html", null, true);
                echo "\">\t<img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "picture", [], "any", false, false, false, 50), "html", null, true);
                echo "\" class=\"img-responsive\" alt=\"img\"></a>
    \t\t\t\t\t\t  ";
            } else {
                // line 52
                echo "                  <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 52)]), "html", null, true);
                echo "\"><img src=\"";
                echo "/images/empty.png";
                echo "\" class=\"img-responsive\" alt=\"img\"></a>
      \t\t\t\t\t\t";
            }
            // line 54
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"thumb-content\">
\t\t\t\t\t\t\t\t\t<h4><a style=\"color:#333;\" href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "name", [], "any", false, false, false, 56), "html", null, true);
            echo "</a></h4>
\t\t\t\t\t\t\t\t\t<p class=\"item-price\"><strike>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 57), "html", null, true);
            echo " € </strike> <span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 57), "html", null, true);
            echo " € </span></p>
\t\t\t\t\t\t\t\t\t<div class=\"star-rating\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a  href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 67)]), "html", null, true);
            echo "\" class=\"add-to-cart btn btn-default\">Ajouter au Panier</a>
\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Carousel controls -->
\t\t\t<a class=\"carousel-control left\" href=\"#myCarousel\" data-slide=\"prev\">
\t\t\t\t<i class=\"fa fa-angle-left\"></i>
\t\t\t</a>
\t\t\t<a class=\"carousel-control right\" href=\"#myCarousel\" data-slide=\"next\">
\t\t\t\t<i class=\"fa fa-angle-right\"></i>
\t\t\t</a>
\t\t</div>
\t\t</div>
\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "app/accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 72,  203 => 67,  188 => 57,  182 => 56,  178 => 54,  170 => 52,  162 => 50,  160 => 49,  154 => 45,  150 => 44,  126 => 22,  118 => 20,  110 => 17,  103 => 16,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block body %}


<div id=\"myCarouselMain\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">
    <div class=\"carousel-inner\">
        <div class=\"carousel-item active\">
            <div class=\"mask flex-center\">
                <div class=\"container\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-md-7 col-12 order-md-1 order-2\">
\t\t\t\t\t\t {% for produit in lastProduits %}
                            <h4> <a href=\"{{ path('produit_detail', {id: produit.id}) }}\">{{produit.name}}</a></h4>
                            <p>{{produit.description}}</p> <br> <a href=\"{{ path('cart_add',{'id': produit.id})}}\">Ajouter au panier</a>
\t\t\t\t\t\t\t
                        </div>
                        <div class=\"col-md-5 col-12 order-md-2 order-1\"><img src=\"{{produit.picture}}\" class=\"mx-auto\" alt=\"slide\"></div>
\t\t\t\t\t\t{% endfor %}
                    </div>
                </div>
            </div>
        </div>
     
    </div> <a class=\"carousel-control-prev\" href=\"#myCarouselMain\" role=\"button\" data-slide=\"prev\"> <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span> <span class=\"sr-only\">Previous</span> </a> <a class=\"carousel-control-next\" href=\"#myCarouselMain\" role=\"button\" data-slide=\"next\"> <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span> <span class=\"sr-only\">Suivant</span> </a>
</div>

\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<h2>Produits en <b>Promotion</b></h2>
\t\t\t<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"0\">
\t\t\t<!-- Carousel indicators -->
\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
\t\t\t</ol>   
\t\t\t<!-- Wrapper for carousel items -->
\t\t\t<div class=\"carousel-inner\">
\t\t\t\t<div class=\"item active\">
\t\t\t\t\t<div class=\"row\">
           {% for produit in produits %}
\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t<div class=\"thumb-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"img-box\">

                  {% if produit.picture %}
                  <a href=\"{{ path('produit_detail', {id: produit.id}) }}\">\t<img src=\"{{produit.picture}}\" class=\"img-responsive\" alt=\"img\"></a>
    \t\t\t\t\t\t  {% else %}
                  <a href=\"{{ path('produit_detail', {id: produit.id}) }}\"><img src=\"{{ '/images/empty.png' }}\" class=\"img-responsive\" alt=\"img\"></a>
      \t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"thumb-content\">
\t\t\t\t\t\t\t\t\t<h4><a style=\"color:#333;\" href=\"{{ path('produit_detail', {id: produit.id}) }}\">{{produit.name}}</a></h4>
\t\t\t\t\t\t\t\t\t<p class=\"item-price\"><strike>{{ produit.prix }} € </strike> <span>{{ produit.prix }} € </span></p>
\t\t\t\t\t\t\t\t\t<div class=\"star-rating\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a  href=\"{{ path('cart_add',{'id': produit.id})}}\" class=\"add-to-cart btn btn-default\">Ajouter au Panier</a>
\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Carousel controls -->
\t\t\t<a class=\"carousel-control left\" href=\"#myCarousel\" data-slide=\"prev\">
\t\t\t\t<i class=\"fa fa-angle-left\"></i>
\t\t\t</a>
\t\t\t<a class=\"carousel-control right\" href=\"#myCarousel\" data-slide=\"next\">
\t\t\t\t<i class=\"fa fa-angle-right\"></i>
\t\t\t</a>
\t\t</div>
\t\t</div>
\t</div>

{% endblock %}
", "app/accueil.html.twig", "/home/hicham/Documents/Fiverr work/produit-app/templates/app/accueil.html.twig");
    }
}
