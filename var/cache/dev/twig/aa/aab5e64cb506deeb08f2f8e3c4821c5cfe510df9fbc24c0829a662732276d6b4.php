<?php

/* back/circuit/index.html.twig */
class __TwigTemplate_c3bf88d2acf1e43f4828be271ef8098616d48e3f15ffa02e7da3720b2ef50abe extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "back/circuit/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "back/circuit/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "back/circuit/index.html.twig"));

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

        echo "Circuit index";
        
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_circuit_new");
        echo "\">Create new</a>
</nav>

<section id=\"container-table\" class=\"about-section text-center\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-10 mx-auto\">
                <h1>Circuit index</h1>

                <table class=\"table\">
                    <thead>
                        <tr>
                            <th scope=\"col\">Id</th>
                            <th scope=\"col\">Description</th>
                            <th scope=\"col\">PaysDepart</th>
                            <th scope=\"col\">VilleDepart</th>
                            <th scope=\"col\">VilleArrivee</th>
                            <th scope=\"col\">DureeCircuit</th>
                            <th scope=\"col\">PaysArrivee</th>
                            <th scope=\"col\">actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["circuits"]) || array_key_exists("circuits", $context) ? $context["circuits"] : (function () { throw new Twig_Error_Runtime('Variable "circuits" does not exist.', 51, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["circuit"]) {
            // line 52
            echo "                        <tr>
                            <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["circuit"], "id", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["circuit"], "description", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["circuit"], "paysDepart", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["circuit"], "villeDepart", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["circuit"], "villeArrivee", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["circuit"], "dureeCircuit", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["circuit"], "paysArrivee", array()), "html", null, true);
            echo "</td>
                            <td>
                                <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_circuit_show", array("id" => twig_get_attribute($this->env, $this->source, $context["circuit"], "id", array()))), "html", null, true);
            echo "\">show</a>
                                <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_circuit_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["circuit"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 66
            echo "                        <tr>
                            <td colspan=\"8\">no records found</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['circuit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                    </tbody>
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
        return "back/circuit/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 70,  172 => 66,  163 => 62,  159 => 61,  154 => 59,  150 => 58,  146 => 57,  142 => 56,  138 => 55,  134 => 54,  130 => 53,  127 => 52,  122 => 51,  96 => 28,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Circuit index{% endblock %}

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
        <a href=\"{{ path('admin_circuit_new') }}\">Create new</a>
</nav>

<section id=\"container-table\" class=\"about-section text-center\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-10 mx-auto\">
                <h1>Circuit index</h1>

                <table class=\"table\">
                    <thead>
                        <tr>
                            <th scope=\"col\">Id</th>
                            <th scope=\"col\">Description</th>
                            <th scope=\"col\">PaysDepart</th>
                            <th scope=\"col\">VilleDepart</th>
                            <th scope=\"col\">VilleArrivee</th>
                            <th scope=\"col\">DureeCircuit</th>
                            <th scope=\"col\">PaysArrivee</th>
                            <th scope=\"col\">actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for circuit in circuits %}
                        <tr>
                            <td>{{ circuit.id }}</td>
                            <td>{{ circuit.description }}</td>
                            <td>{{ circuit.paysDepart }}</td>
                            <td>{{ circuit.villeDepart }}</td>
                            <td>{{ circuit.villeArrivee }}</td>
                            <td>{{ circuit.dureeCircuit }}</td>
                            <td>{{ circuit.paysArrivee }}</td>
                            <td>
                                <a href=\"{{ path('admin_circuit_show', {'id': circuit.id}) }}\">show</a>
                                <a href=\"{{ path('admin_circuit_edit', {'id': circuit.id}) }}\">edit</a>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"8\">no records found</td>
                        </tr>
                    {% endfor %}
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

{% endblock %} {# main #}", "back/circuit/index.html.twig", "/home/victor/Documents/csc4101/AgenceVoyageTSP/templates/back/circuit/index.html.twig");
    }
}
