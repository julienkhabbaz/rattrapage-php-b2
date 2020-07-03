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

/* app/fiche_produit.html.twig */
class __TwigTemplate_e63640a5833111bd7207a6129312371ab251bdbb4f51b8401c37f2cf0b781197 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "app/fiche_produit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "app/fiche_produit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "app/fiche_produit.html.twig", 1);
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

        echo "Produit";
        
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
        echo "\t<div class=\"card\">
\t\t\t<div class=\"container-fliud\">
\t\t\t\t<div class=\"wrapper row\">
\t\t\t\t\t<div class=\"preview col-md-6\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"preview-pic tab-content\">
\t\t\t\t\t\t";
        // line 12
        if (twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 12, $this->source); })()), "picture", [], "any", false, false, false, 12)) {
            // line 13
            echo "\t\t\t\t\t\t  <div class=\"tab-pane active\" id=\"pic-1\"><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 13, $this->source); })()), "picture", [], "any", false, false, false, 13), "html", null, true);
            echo "\" /></div>
\t\t\t\t\t\t  ";
        } else {
            // line 15
            echo "\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"pic-1\"><img src=\"";
            echo "/images/empty.png";
            echo "\" /></div>
\t\t\t\t\t\t";
        }
        // line 17
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"preview-thumbnail nav nav-tabs\">
\t\t\t\t\t\t";
        // line 19
        if (twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 19, $this->source); })()), "picture", [], "any", false, false, false, 19)) {
            // line 20
            echo "\t\t\t\t\t\t  <li class=\"active\"><a data-target=\"#pic-1\" data-toggle=\"tab\"><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 20, $this->source); })()), "picture", [], "any", false, false, false, 20), "html", null, true);
            echo "\" /></a></li>
 \t\t\t\t\t\t";
        } else {
            // line 22
            echo "\t\t\t\t\t\t  <li class=\"active\"><a data-target=\"#pic-1\" data-toggle=\"tab\"><img src=\"";
            echo "/images/empty.png";
            echo "\"  /></a></li>

\t\t\t\t\t\t ";
        }
        // line 24
        echo "\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"details col-md-6\">
\t\t\t\t\t\t<h3 class=\"product-title\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 29, $this->source); })()), "name", [], "any", false, false, false, 29), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t<div class=\"stars\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p class=\"product-description\">";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 39, $this->source); })()), "description", [], "any", false, false, false, 39), "html", null, true);
        echo "</p>
\t\t\t\t\t\t<h4 class=\"price\">Prix <span>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 40, $this->source); })()), "prix", [], "any", false, false, false, 40), "html", null, true);
        echo " € 
\t\t\t\t\t\t</span></h4>

                   \t\t ";
        // line 43
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 43, $this->source); })()), "promo", [], "any", false, false, false, 43), 1)) {
            // line 44
            echo "                   \t\t <h6  class=\"text-danger float-left\">
                        -50
                        <i class=\"fas fa-percentage ml-1\"></i>
   
                   \t\t </h6>
                     \t";
        }
        // line 50
        echo "\t\t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t\t<a  href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51)]), "html", null, true);
        echo "\" class=\"add-to-cart btn btn-default\" type=\"button\"><i class=\"fas fa-shopping-cart mr-1\"></i>Ajouter au panier</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "app/fiche_produit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 51,  169 => 50,  161 => 44,  159 => 43,  153 => 40,  149 => 39,  136 => 29,  129 => 24,  122 => 22,  116 => 20,  114 => 19,  110 => 17,  104 => 15,  98 => 13,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Produit{% endblock %}

{% block body %}
\t<div class=\"card\">
\t\t\t<div class=\"container-fliud\">
\t\t\t\t<div class=\"wrapper row\">
\t\t\t\t\t<div class=\"preview col-md-6\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"preview-pic tab-content\">
\t\t\t\t\t\t{% if produit.picture %}
\t\t\t\t\t\t  <div class=\"tab-pane active\" id=\"pic-1\"><img src=\"{{produit.picture}}\" /></div>
\t\t\t\t\t\t  {% else %}
\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"pic-1\"><img src=\"{{ '/images/empty.png' }}\" /></div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"preview-thumbnail nav nav-tabs\">
\t\t\t\t\t\t{% if produit.picture %}
\t\t\t\t\t\t  <li class=\"active\"><a data-target=\"#pic-1\" data-toggle=\"tab\"><img src=\"{{produit.picture}}\" /></a></li>
 \t\t\t\t\t\t{% else %}
\t\t\t\t\t\t  <li class=\"active\"><a data-target=\"#pic-1\" data-toggle=\"tab\"><img src=\"{{ '/images/empty.png' }}\"  /></a></li>

\t\t\t\t\t\t {% endif %}\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"details col-md-6\">
\t\t\t\t\t\t<h3 class=\"product-title\">{{ produit.name }}</h3>
\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t<div class=\"stars\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p class=\"product-description\">{{ produit.description }}</p>
\t\t\t\t\t\t<h4 class=\"price\">Prix <span>{{ produit.prix }} € 
\t\t\t\t\t\t</span></h4>

                   \t\t {% if produit.promo == 1 %}
                   \t\t <h6  class=\"text-danger float-left\">
                        -50
                        <i class=\"fas fa-percentage ml-1\"></i>
   
                   \t\t </h6>
                     \t{% endif %}
\t\t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t\t<a  href=\"{{ path('cart_add',{'id': produit.id})}}\" class=\"add-to-cart btn btn-default\" type=\"button\"><i class=\"fas fa-shopping-cart mr-1\"></i>Ajouter au panier</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
{% endblock %}", "app/fiche_produit.html.twig", "/home/hicham/Documents/Fiverr work/produit-app/templates/app/fiche_produit.html.twig");
    }
}
