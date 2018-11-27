<?php

/* back/circuit/show.html.twig */
class __TwigTemplate_a373b67f05fa1c662667227c210a85bcd1f92f70f442c602db304904ba4e1f6f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "back/circuit/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "back/circuit/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "back/circuit/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Circuit";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
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
<body>
<!-- NavBar Menu -->
<nav class=\"navbar navbar-expand-lg navbar-light fixed-top\" id=\"mainNav\">
    <div class=\"container\">
        <a href=\"/\">Menu Principal</a>
        <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_circuit_index");
        echo "\">Revenir a la liste</a>
        <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_circuit_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["circuit"]) || array_key_exists("circuit", $context) ? $context["circuit"] : (function () { throw new Twig_Error_Runtime('Variable "circuit" does not exist.', 29, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        ";
        // line 30
        echo twig_include($this->env, $context, "back/circuit/_delete_form.html.twig");
        echo "
    </div>
</nav>

<section id=\"container-table\" class=\"about-section text-center\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-10 mx-auto\">
                <h1>Circuit</h1>

                <table class=\"table\">
                    <tbody>
                        <tr>
                            <th>Id</th>
                            <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["circuit"]) || array_key_exists("circuit", $context) ? $context["circuit"] : (function () { throw new Twig_Error_Runtime('Variable "circuit" does not exist.', 44, $this->source); })()), "id", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["circuit"]) || array_key_exists("circuit", $context) ? $context["circuit"] : (function () { throw new Twig_Error_Runtime('Variable "circuit" does not exist.', 48, $this->source); })()), "description", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>PaysDepart</th>
                            <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["circuit"]) || array_key_exists("circuit", $context) ? $context["circuit"] : (function () { throw new Twig_Error_Runtime('Variable "circuit" does not exist.', 52, $this->source); })()), "paysDepart", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>VilleDepart</th>
                            <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["circuit"]) || array_key_exists("circuit", $context) ? $context["circuit"] : (function () { throw new Twig_Error_Runtime('Variable "circuit" does not exist.', 56, $this->source); })()), "villeDepart", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>VilleArrivee</th>
                            <td>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["circuit"]) || array_key_exists("circuit", $context) ? $context["circuit"] : (function () { throw new Twig_Error_Runtime('Variable "circuit" does not exist.', 60, $this->source); })()), "villeArrivee", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>DureeCircuit</th>
                            <td>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["circuit"]) || array_key_exists("circuit", $context) ? $context["circuit"] : (function () { throw new Twig_Error_Runtime('Variable "circuit" does not exist.', 64, $this->source); })()), "dureeCircuit", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>PaysArrivee</th>
                            <td>";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["circuit"]) || array_key_exists("circuit", $context) ? $context["circuit"] : (function () { throw new Twig_Error_Runtime('Variable "circuit" does not exist.', 68, $this->source); })()), "paysArrivee", array()), "html", null, true);
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
<script src=\"../js/bootstrap.min.bundle.js\"></script>
<script src=\"../js/bootstrap.min.js\"></script>

<script src=\"../js/accueil.js\"></script>

</html>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "back/circuit/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 68,  156 => 64,  149 => 60,  142 => 56,  135 => 52,  128 => 48,  121 => 44,  104 => 30,  100 => 29,  96 => 28,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Circuit{% endblock %}

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
<body>
<!-- NavBar Menu -->
<nav class=\"navbar navbar-expand-lg navbar-light fixed-top\" id=\"mainNav\">
    <div class=\"container\">
        <a href=\"/\">Menu Principal</a>
        <a href=\"{{ path('admin_circuit_index') }}\">Revenir a la liste</a>
        <a href=\"{{ path('admin_circuit_edit', {'id': circuit.id}) }}\">Edit</a>
        {{ include('back/circuit/_delete_form.html.twig') }}
    </div>
</nav>

<section id=\"container-table\" class=\"about-section text-center\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-10 mx-auto\">
                <h1>Circuit</h1>

                <table class=\"table\">
                    <tbody>
                        <tr>
                            <th>Id</th>
                            <td>{{ circuit.id }}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{{ circuit.description }}</td>
                        </tr>
                        <tr>
                            <th>PaysDepart</th>
                            <td>{{ circuit.paysDepart }}</td>
                        </tr>
                        <tr>
                            <th>VilleDepart</th>
                            <td>{{ circuit.villeDepart }}</td>
                        </tr>
                        <tr>
                            <th>VilleArrivee</th>
                            <td>{{ circuit.villeArrivee }}</td>
                        </tr>
                        <tr>
                            <th>DureeCircuit</th>
                            <td>{{ circuit.dureeCircuit }}</td>
                        </tr>
                        <tr>
                            <th>PaysArrivee</th>
                            <td>{{ circuit.paysArrivee }}</td>
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
<script src=\"../js/bootstrap.min.bundle.js\"></script>
<script src=\"../js/bootstrap.min.js\"></script>

<script src=\"../js/accueil.js\"></script>

</html>

{% endblock %} {# main #}", "back/circuit/show.html.twig", "/home/victor/Documents/csc4101/AgenceVoyageTSP/templates/back/circuit/show.html.twig");
    }
}
