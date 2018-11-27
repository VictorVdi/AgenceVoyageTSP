<?php

/* front/circuit_show.html.twig */
class __TwigTemplate_a346d5986131055b5a1eb02398fe16404744bfa98463687cfe6298cbdde32a60 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "front/circuit_show.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/circuit_show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/circuit_show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "<html lang=\"fr\">

<head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"Auteur\" content=\"Dylan Soton & Victor Védie\">

    <!-- Quelques polices d'écritures plus jolies :) -->
    <link href=\"/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Varela+Round\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">

    <!-- Un Css modifié :) -->
    <link href=\"../css/circuit.css\" rel=\"stylesheet\">

</head>
<body id=\"page-top\">

<!-- NavBar Menu -->
<nav class=\"navbar navbar-expand-lg navbar-light fixed-top\" id=\"mainNav\">
    <div class=\"container\">
        <a class=\"navbar-brand js-scroll-trigger\" href=\"#page-top\">Circuit ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["circuit"]) || array_key_exists("circuit", $context) ? $context["circuit"] : (function () { throw new Twig_Error_Runtime('Variable "circuit" does not exist.', 26, $this->source); })()), "description", array()), "html", null, true);
        echo "</a>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link js-scroll-trigger\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["circuit"]) || array_key_exists("circuit", $context) ? $context["circuit"] : (function () { throw new Twig_Error_Runtime('Variable "circuit" does not exist.', 30, $this->source); })()), "id", array()), "html", null, true);
        echo "\"></a>
                </li>
            </ul>

        </div>
        <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front");
        echo "\">Liste des circuits</a>
    </div>
</nav>

<section id=\"container-table\" class=\"about-section text-center\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-10 mx-auto\">
                <h2 class=\"text-white mb-4\">Le circuit </h2>
                <table class=\"table\">
                    <tr>
                        <th scope=\"col\">Id</th>
                        <th scope=\"col\">Ville</th>
                        <th scope=\"col\">Durée</th>
                    </tr>
                ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["circuit"]) || array_key_exists("circuit", $context) ? $context["circuit"] : (function () { throw new Twig_Error_Runtime('Variable "circuit" does not exist.', 50, $this->source); })()), "etapes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["etape"]) {
            // line 51
            echo "                    <tr>
                        <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etape"], "numeroEtape", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etape"], "getVilleEtape", array(), "method"), "html", null, true);
            echo "</td>
                        <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etape"], "getNombreJours", array(), "method"), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etape'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo " ";
        // line 57
        echo "                </table>

            </div>
        </div>
    </div>
</section>

</body>

<!-- Petit CopyRight Inutile Donc Indispensable ! -->
<footer class=\"bg-black small text-center text-white-50\">
    <div class=\"container\">
        Copyright &copy; Dylan Soton & Victor Védie
    </div>
</footer>

<!-- bootstrap.min & JavaScript -->
<script src=\"/js/bootstrap.min.bundle.js\"></script>
<script src=\"/js/bootstrap.min.js\"></script>

<script src=\"js/accueil.js\"></script>

</html>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/circuit_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 57,  134 => 56,  125 => 54,  121 => 53,  117 => 52,  114 => 51,  110 => 50,  92 => 35,  84 => 30,  77 => 26,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block main %}
<html lang=\"fr\">

<head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"Auteur\" content=\"Dylan Soton & Victor Védie\">

    <!-- Quelques polices d'écritures plus jolies :) -->
    <link href=\"/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Varela+Round\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">

    <!-- Un Css modifié :) -->
    <link href=\"../css/circuit.css\" rel=\"stylesheet\">

</head>
<body id=\"page-top\">

<!-- NavBar Menu -->
<nav class=\"navbar navbar-expand-lg navbar-light fixed-top\" id=\"mainNav\">
    <div class=\"container\">
        <a class=\"navbar-brand js-scroll-trigger\" href=\"#page-top\">Circuit {{circuit.description}}</a>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link js-scroll-trigger\" href=\"{{ circuit.id }}\"></a>
                </li>
            </ul>

        </div>
        <a href=\"{{ path('front') }}\">Liste des circuits</a>
    </div>
</nav>

<section id=\"container-table\" class=\"about-section text-center\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-10 mx-auto\">
                <h2 class=\"text-white mb-4\">Le circuit </h2>
                <table class=\"table\">
                    <tr>
                        <th scope=\"col\">Id</th>
                        <th scope=\"col\">Ville</th>
                        <th scope=\"col\">Durée</th>
                    </tr>
                {% for etape in circuit.etapes %}
                    <tr>
                        <td>{{ etape.numeroEtape }}</td>
                        <td>{{ etape.getVilleEtape() }}</td>
                        <td>{{ etape.getNombreJours() }}</td>
                    </tr>
                {% endfor %} {# etapes #}
                </table>

            </div>
        </div>
    </div>
</section>

</body>

<!-- Petit CopyRight Inutile Donc Indispensable ! -->
<footer class=\"bg-black small text-center text-white-50\">
    <div class=\"container\">
        Copyright &copy; Dylan Soton & Victor Védie
    </div>
</footer>

<!-- bootstrap.min & JavaScript -->
<script src=\"/js/bootstrap.min.bundle.js\"></script>
<script src=\"/js/bootstrap.min.js\"></script>

<script src=\"js/accueil.js\"></script>

</html>

{% endblock %} {# main #}
", "front/circuit_show.html.twig", "/home/victor/Documents/csc4101/AgenceVoyageTSP/templates/front/circuit_show.html.twig");
    }
}
