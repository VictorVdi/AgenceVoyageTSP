<?php

/* back/etape/show.html.twig */
class __TwigTemplate_6c3c2f7ea93458d7b3b5b73432469264cce484c1c4fa0ec4ee5548d94e2f7fbc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "back/etape/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "back/etape/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "back/etape/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Etape";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
    <link href=\"../../css/circuit.css\" rel=\"stylesheet\">

</head>
<body id=\"page-top\">

<!-- NavBar Menu -->
<nav class=\"navbar navbar-expand-lg navbar-light fixed-top\" id=\"mainNav\">
    <div class=\"container\">
        <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_etape_index");
        echo "\">back to list</a>

        <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_etape_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["etape"]) || array_key_exists("etape", $context) ? $context["etape"] : (function () { throw new Twig_Error_Runtime('Variable "etape" does not exist.', 28, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">edit</a>


    </div>
    ";
        // line 32
        echo twig_include($this->env, $context, "back/etape/_delete_form.html.twig");
        echo "
</nav>

<section id=\"container-table\" class=\"about-section text-center\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-10 mx-auto\">
                    <h1>Etape</h1>

                    <table class=\"table\">
                        <tbody>
                            <tr>
                                <th>Id</th>
                                <td>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etape"]) || array_key_exists("etape", $context) ? $context["etape"] : (function () { throw new Twig_Error_Runtime('Variable "etape" does not exist.', 45, $this->source); })()), "id", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>NumeroEtape</th>
                                <td>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etape"]) || array_key_exists("etape", $context) ? $context["etape"] : (function () { throw new Twig_Error_Runtime('Variable "etape" does not exist.', 49, $this->source); })()), "numeroEtape", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>VilleEtape</th>
                                <td>";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etape"]) || array_key_exists("etape", $context) ? $context["etape"] : (function () { throw new Twig_Error_Runtime('Variable "etape" does not exist.', 53, $this->source); })()), "villeEtape", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>NombreJours</th>
                                <td>";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etape"]) || array_key_exists("etape", $context) ? $context["etape"] : (function () { throw new Twig_Error_Runtime('Variable "etape" does not exist.', 57, $this->source); })()), "nombreJours", array()), "html", null, true);
        echo "</td>
                            </tr>
                        </tbody>
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

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "back/etape/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 57,  138 => 53,  131 => 49,  124 => 45,  108 => 32,  101 => 28,  96 => 26,  72 => 4,  63 => 3,  45 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Etape{% endblock %}
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
    <link href=\"../../css/circuit.css\" rel=\"stylesheet\">

</head>
<body id=\"page-top\">

<!-- NavBar Menu -->
<nav class=\"navbar navbar-expand-lg navbar-light fixed-top\" id=\"mainNav\">
    <div class=\"container\">
        <a href=\"{{ path('admin_etape_index') }}\">back to list</a>

        <a href=\"{{ path('admin_etape_edit', {'id': etape.id}) }}\">edit</a>


    </div>
    {{ include('back/etape/_delete_form.html.twig') }}
</nav>

<section id=\"container-table\" class=\"about-section text-center\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-10 mx-auto\">
                    <h1>Etape</h1>

                    <table class=\"table\">
                        <tbody>
                            <tr>
                                <th>Id</th>
                                <td>{{ etape.id }}</td>
                            </tr>
                            <tr>
                                <th>NumeroEtape</th>
                                <td>{{ etape.numeroEtape }}</td>
                            </tr>
                            <tr>
                                <th>VilleEtape</th>
                                <td>{{ etape.villeEtape }}</td>
                            </tr>
                            <tr>
                                <th>NombreJours</th>
                                <td>{{ etape.nombreJours }}</td>
                            </tr>
                        </tbody>
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
", "back/etape/show.html.twig", "/home/victor/Documents/csc4101/AgenceVoyageTSP/templates/back/etape/show.html.twig");
    }
}
