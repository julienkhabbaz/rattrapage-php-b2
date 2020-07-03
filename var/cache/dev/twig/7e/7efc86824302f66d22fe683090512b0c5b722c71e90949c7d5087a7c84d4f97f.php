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

/* app/produits.html.twig */
class __TwigTemplate_2c260de9cfaac5401228e4ae6f8190076e2b59299533a5c4b5b30e52ee7984a1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "app/produits.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "app/produits.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "app/produits.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Les produits";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "\t\t<div class=\"alert alert-success\">
\t\t\t";
            // line 12
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "<div class = \"row\">
<div class=\"col-md-9\">
  ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start');
        echo "
  ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "nom", [], "any", false, false, false, 19), 'row');
        echo "
</div>   
<div class=\"col-md-3 \">
<button class=\"btn btn-success\">Rechercher</button>
</div>
  ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form_end');
        echo "

</div>
          
    <div class=\"bg-light p-3\">
        <h1>Les produits</h1>
    </div>

    <div class=\"row\">
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 34
            echo "            <div class=\"col-4 mt-4\">
                <div class=\"border border-dark rounded p-2 clearfix\">
                    <h2 >
                       <a  style=\"color:#333;\"href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\" > ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "name", [], "any", false, false, false, 37), "html", null, true);
            echo "</a>
                        
                      
                    </h2>
                    \t";
            // line 41
            if (twig_get_attribute($this->env, $this->source, $context["produit"], "picture", [], "any", false, false, false, 41)) {
                // line 42
                echo "\t\t             <a style=\"color:#333;\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 42)]), "html", null, true);
                echo "\" >   <img   href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 42)]), "html", null, true);
                echo "\"  src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "picture", [], "any", false, false, false, 42), "html", null, true);
                echo "\" alt=\"card-img-top\" class=\"img-fluid rounded\"></a>
\t                     ";
            } else {
                // line 44
                echo "\t\t           <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 44)]), "html", null, true);
                echo "\" > <img src=\"";
                echo "/images/empty.png";
                echo "\" alt=\"card-img-top\" class=\"img-fluid rounded\"></a>


\t                ";
            }
            // line 48
            echo "                    <hr>
                    <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\" class=\"btn btn-warning text-light float-right\">
                        <i class=\"fas fa-shopping-cart mr-1\"></i>
                        Ajouter au panier
                    </a>

                    ";
            // line 54
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["produit"], "promo", [], "any", false, false, false, 54), 1)) {
                // line 55
                echo "                    <h6  class=\"text-danger float-left\">
                        -50
                        <i class=\"fas fa-percentage ml-1\"></i>
   
                    </h6>
                     ";
            }
            // line 61
            echo "                </div>

            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "app/produits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 65,  197 => 61,  189 => 55,  187 => 54,  179 => 49,  176 => 48,  166 => 44,  156 => 42,  154 => 41,  145 => 37,  140 => 34,  136 => 33,  124 => 24,  116 => 19,  112 => 18,  108 => 16,  98 => 12,  95 => 11,  91 => 10,  88 => 9,  78 => 8,  59 => 6,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}




{% block title %}Les produits{% endblock %}

{% block body %}

\t{% for message in app.flashes('success')  %}
\t\t<div class=\"alert alert-success\">
\t\t\t{{ message }}
\t\t
\t\t</div>
\t{% endfor %}
<div class = \"row\">
<div class=\"col-md-9\">
  {{ form_start(form)}}
  {{ form_row(form.nom) }}
</div>   
<div class=\"col-md-3 \">
<button class=\"btn btn-success\">Rechercher</button>
</div>
  {{ form_end(form)}}

</div>
          
    <div class=\"bg-light p-3\">
        <h1>Les produits</h1>
    </div>

    <div class=\"row\">
        {% for produit in produits %}
            <div class=\"col-4 mt-4\">
                <div class=\"border border-dark rounded p-2 clearfix\">
                    <h2 >
                       <a  style=\"color:#333;\"href=\"{{ path('produit_detail', {id: produit.id}) }}\" > {{ produit.name }}</a>
                        
                      
                    </h2>
                    \t{% if produit.picture %}
\t\t             <a style=\"color:#333;\" href=\"{{ path('produit_detail', {id: produit.id}) }}\" >   <img   href=\"{{ path('produit_detail', {id: produit.id}) }}\"  src=\"{{ produit.picture}}\" alt=\"card-img-top\" class=\"img-fluid rounded\"></a>
\t                     {% else %}
\t\t           <a href=\"{{ path('produit_detail', {id: produit.id}) }}\" > <img src=\"{{ '/images/empty.png' }}\" alt=\"card-img-top\" class=\"img-fluid rounded\"></a>


\t                {% endif %}
                    <hr>
                    <a href=\"{{ path('cart_add',{'id': produit.id})}}\" class=\"btn btn-warning text-light float-right\">
                        <i class=\"fas fa-shopping-cart mr-1\"></i>
                        Ajouter au panier
                    </a>

                    {% if produit.promo == 1 %}
                    <h6  class=\"text-danger float-left\">
                        -50
                        <i class=\"fas fa-percentage ml-1\"></i>
   
                    </h6>
                     {% endif %}
                </div>

            </div>
        {% endfor %}
    </div>
{% endblock %}", "app/produits.html.twig", "/home/hicham/Documents/Fiverr work/produit-app/templates/app/produits.html.twig");
    }
}
