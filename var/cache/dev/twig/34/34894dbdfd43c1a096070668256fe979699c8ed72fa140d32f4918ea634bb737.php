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

/* base.html.twig */
class __TwigTemplate_827a60ff212a8340258efe9a308d7fa146306eee5a2898e733455146b2a1d3a3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"/docs/4.0/assets/img/favicons/favicon.ico\">

    <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    
          ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 31
        echo "  </head>

  <body>
    <nav class=\"site-header sticky-top py-1\">
      <div class=\"container d-flex flex-column flex-md-row justify-content-between\">
        <a class=\"py-2\" href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"d-block mx-auto\"><circle cx=\"12\" cy=\"12\" r=\"10\"></circle><line x1=\"14.31\" y1=\"8\" x2=\"20.05\" y2=\"17.94\"></line><line x1=\"9.69\" y1=\"8\" x2=\"21.17\" y2=\"8\"></line><line x1=\"7.38\" y1=\"12\" x2=\"13.12\" y2=\"2.06\"></line><line x1=\"9.69\" y1=\"16\" x2=\"3.95\" y2=\"6.06\"></line><line x1=\"14.31\" y1=\"16\" x2=\"2.83\" y2=\"16\"></line><line x1=\"16.62\" y1=\"12\" x2=\"10.88\" y2=\"21.94\"></line></svg>
        </a>
        <a class=\"py-2 d-none d-md-inline-block\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">Accueil</a>
        <a class=\"py-2 d-none d-md-inline-block\" href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_liste");
        echo "\">Produits</a>
        <a class=\"py-2 d-none d-md-inline-block\" href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_new");
        echo "\">Contact</a>
        <a class=\"py-2 d-none d-md-inline-block\" href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_index");
        echo "\">Panier</a>
      </div>
    </nav>

   

        <div class=\"container pt-3\"> ";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        echo "</div>

    <footer class=\"container py-5\">
      <div class=\"row\">
        <div class=\"col-12 col-md\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"d-block mb-2\"><circle cx=\"12\" cy=\"12\" r=\"10\"></circle><line x1=\"14.31\" y1=\"8\" x2=\"20.05\" y2=\"17.94\"></line><line x1=\"9.69\" y1=\"8\" x2=\"21.17\" y2=\"8\"></line><line x1=\"7.38\" y1=\"12\" x2=\"13.12\" y2=\"2.06\"></line><line x1=\"9.69\" y1=\"16\" x2=\"3.95\" y2=\"6.06\"></line><line x1=\"14.31\" y1=\"16\" x2=\"2.83\" y2=\"16\"></line><line x1=\"16.62\" y1=\"12\" x2=\"10.88\" y2=\"21.94\"></line></svg>
          <small class=\"d-block mb-3 text-muted\">&copy; 2020</small>
        </div>
        <div class=\"col-6 col-md\">
          <h5>Features</h5>
          <ul class=\"list-unstyled text-small\">
            <li><a class=\"text-muted\" href=\"#\">Cool stuff</a></li>
            <li><a class=\"text-muted\" href=\"#\">Random feature</a></li>
            <li><a class=\"text-muted\" href=\"#\">Team feature</a></li>
            <li><a class=\"text-muted\" href=\"#\">Stuff for developers</a></li>
            <li><a class=\"text-muted\" href=\"#\">Another one</a></li>
            <li><a class=\"text-muted\" href=\"#\">Last time</a></li>
          </ul>
        </div>
        <div class=\"col-6 col-md\">
          <h5>Resources</h5>
          <ul class=\"list-unstyled text-small\">
            <li><a class=\"text-muted\" href=\"#\">Resource</a></li>
            <li><a class=\"text-muted\" href=\"#\">Resource name</a></li>
            <li><a class=\"text-muted\" href=\"#\">Another resource</a></li>
            <li><a class=\"text-muted\" href=\"#\">Final resource</a></li>
          </ul>
        </div>
        <div class=\"col-6 col-md\">
          <h5>Resources</h5>
          <ul class=\"list-unstyled text-small\">
            <li><a class=\"text-muted\" href=\"#\">Business</a></li>
            <li><a class=\"text-muted\" href=\"#\">Education</a></li>
            <li><a class=\"text-muted\" href=\"#\">Government</a></li>
            <li><a class=\"text-muted\" href=\"#\">Gaming</a></li>
          </ul>
        </div>
        <div class=\"col-6 col-md\">
          <h5>About</h5>
          <ul class=\"list-unstyled text-small\">
            <li><a class=\"text-muted\" href=\"#\">Team</a></li>
            <li><a class=\"text-muted\" href=\"#\">Locations</a></li>
            <li><a class=\"text-muted\" href=\"#\">Privacy</a></li>
            <li><a class=\"text-muted\" href=\"#\">Terms</a></li>
          </ul>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <script>window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery-slim.min.js\"><\\/script>')</script>
    <script src=\"../../assets/js/vendor/popper.min.js\"></script>
    <script src=\"../../dist/js/bootstrap.min.js\"></script>
    <script src=\"../../assets/js/vendor/holder.min.js\"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    \$(document).ready(function(){

    \$('#myCarousel').carousel({
    interval: 3000,
  })

});
    </script>
  </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "
          <link rel=\"canonical\" href=\"https://getbootstrap.com/docs/4.0/examples/product/\">

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<!-- FA-->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css\" integrity=\"sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=\" crossorigin=\"anonymous\"/>
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,700\" rel=\"stylesheet\">


<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans\">
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 48
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 48,  224 => 21,  218 => 18,  212 => 14,  202 => 13,  183 => 10,  99 => 48,  90 => 42,  86 => 41,  82 => 40,  78 => 39,  72 => 36,  65 => 31,  63 => 13,  57 => 10,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"/docs/4.0/assets/img/favicons/favicon.ico\">

    <title>{% block title %}Bienvenue{% endblock %}</title>

    
          {% block stylesheets %}

          <link rel=\"canonical\" href=\"https://getbootstrap.com/docs/4.0/examples/product/\">

    <!-- Bootstrap core CSS -->
    <link href=\"{{ asset('style/bootstrap.min.css') }}\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"{{ asset('style/style.css') }}\" rel=\"stylesheet\">
<!-- FA-->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css\" integrity=\"sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=\" crossorigin=\"anonymous\"/>
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,700\" rel=\"stylesheet\">


<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans\">
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">

        {% endblock %}
  </head>

  <body>
    <nav class=\"site-header sticky-top py-1\">
      <div class=\"container d-flex flex-column flex-md-row justify-content-between\">
        <a class=\"py-2\" href=\"{{ path('accueil') }}\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"d-block mx-auto\"><circle cx=\"12\" cy=\"12\" r=\"10\"></circle><line x1=\"14.31\" y1=\"8\" x2=\"20.05\" y2=\"17.94\"></line><line x1=\"9.69\" y1=\"8\" x2=\"21.17\" y2=\"8\"></line><line x1=\"7.38\" y1=\"12\" x2=\"13.12\" y2=\"2.06\"></line><line x1=\"9.69\" y1=\"16\" x2=\"3.95\" y2=\"6.06\"></line><line x1=\"14.31\" y1=\"16\" x2=\"2.83\" y2=\"16\"></line><line x1=\"16.62\" y1=\"12\" x2=\"10.88\" y2=\"21.94\"></line></svg>
        </a>
        <a class=\"py-2 d-none d-md-inline-block\" href=\"{{ path('accueil') }}\">Accueil</a>
        <a class=\"py-2 d-none d-md-inline-block\" href=\"{{ path('produit_liste') }}\">Produits</a>
        <a class=\"py-2 d-none d-md-inline-block\" href=\"{{ path('contact_new') }}\">Contact</a>
        <a class=\"py-2 d-none d-md-inline-block\" href=\"{{ path('cart_index') }}\">Panier</a>
      </div>
    </nav>

   

        <div class=\"container pt-3\"> {% block body %}{% endblock %}</div>

    <footer class=\"container py-5\">
      <div class=\"row\">
        <div class=\"col-12 col-md\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"d-block mb-2\"><circle cx=\"12\" cy=\"12\" r=\"10\"></circle><line x1=\"14.31\" y1=\"8\" x2=\"20.05\" y2=\"17.94\"></line><line x1=\"9.69\" y1=\"8\" x2=\"21.17\" y2=\"8\"></line><line x1=\"7.38\" y1=\"12\" x2=\"13.12\" y2=\"2.06\"></line><line x1=\"9.69\" y1=\"16\" x2=\"3.95\" y2=\"6.06\"></line><line x1=\"14.31\" y1=\"16\" x2=\"2.83\" y2=\"16\"></line><line x1=\"16.62\" y1=\"12\" x2=\"10.88\" y2=\"21.94\"></line></svg>
          <small class=\"d-block mb-3 text-muted\">&copy; 2020</small>
        </div>
        <div class=\"col-6 col-md\">
          <h5>Features</h5>
          <ul class=\"list-unstyled text-small\">
            <li><a class=\"text-muted\" href=\"#\">Cool stuff</a></li>
            <li><a class=\"text-muted\" href=\"#\">Random feature</a></li>
            <li><a class=\"text-muted\" href=\"#\">Team feature</a></li>
            <li><a class=\"text-muted\" href=\"#\">Stuff for developers</a></li>
            <li><a class=\"text-muted\" href=\"#\">Another one</a></li>
            <li><a class=\"text-muted\" href=\"#\">Last time</a></li>
          </ul>
        </div>
        <div class=\"col-6 col-md\">
          <h5>Resources</h5>
          <ul class=\"list-unstyled text-small\">
            <li><a class=\"text-muted\" href=\"#\">Resource</a></li>
            <li><a class=\"text-muted\" href=\"#\">Resource name</a></li>
            <li><a class=\"text-muted\" href=\"#\">Another resource</a></li>
            <li><a class=\"text-muted\" href=\"#\">Final resource</a></li>
          </ul>
        </div>
        <div class=\"col-6 col-md\">
          <h5>Resources</h5>
          <ul class=\"list-unstyled text-small\">
            <li><a class=\"text-muted\" href=\"#\">Business</a></li>
            <li><a class=\"text-muted\" href=\"#\">Education</a></li>
            <li><a class=\"text-muted\" href=\"#\">Government</a></li>
            <li><a class=\"text-muted\" href=\"#\">Gaming</a></li>
          </ul>
        </div>
        <div class=\"col-6 col-md\">
          <h5>About</h5>
          <ul class=\"list-unstyled text-small\">
            <li><a class=\"text-muted\" href=\"#\">Team</a></li>
            <li><a class=\"text-muted\" href=\"#\">Locations</a></li>
            <li><a class=\"text-muted\" href=\"#\">Privacy</a></li>
            <li><a class=\"text-muted\" href=\"#\">Terms</a></li>
          </ul>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <script>window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery-slim.min.js\"><\\/script>')</script>
    <script src=\"../../assets/js/vendor/popper.min.js\"></script>
    <script src=\"../../dist/js/bootstrap.min.js\"></script>
    <script src=\"../../assets/js/vendor/holder.min.js\"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    \$(document).ready(function(){

    \$('#myCarousel').carousel({
    interval: 3000,
  })

});
    </script>
  </body>
</html>
", "base.html.twig", "/home/hicham/Documents/Fiverr work/produit-app/templates/base.html.twig");
    }
}
