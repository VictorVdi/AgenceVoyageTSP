<?php

/* circuit/show.html.twig */
class __TwigTemplate_18c4f03b3d366200a13df28869a6d54e0475716be653546a8045357d19e58e1a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "circuit/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "circuit/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "circuit/show.html.twig"));

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
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Circuit</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["circuit"]) || array_key_exists("circuit", $context) ? $context["circuit"] : (function () { throw new Twig_Error_Runtime('Variable "circuit" does not exist.', 12, $this->source); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["circuit"]) || array_key_exists("circuit", $context) ? $context["circuit"] : (function () { throw new Twig_Error_Runtime('Variable "circuit" does not exist.', 16, $this->source); })()), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>PaysDepart</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["circuit"]) || array_key_exists("circuit", $context) ? $context["circuit"] : (function () { throw new Twig_Error_Runtime('Variable "circuit" does not exist.', 20, $this->source); })()), "paysDepart", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>VilleDepart</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["circuit"]) || array_key_exists("circuit", $context) ? $context["circuit"] : (function () { throw new Twig_Error_Runtime('Variable "circuit" does not exist.', 24, $this->source); })()), "villeDepart", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>VilleArrivee</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["circuit"]) || array_key_exists("circuit", $context) ? $context["circuit"] : (function () { throw new Twig_Error_Runtime('Variable "circuit" does not exist.', 28, $this->source); })()), "villeArrivee", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>DureeCircuit</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["circuit"]) || array_key_exists("circuit", $context) ? $context["circuit"] : (function () { throw new Twig_Error_Runtime('Variable "circuit" does not exist.', 32, $this->source); })()), "dureeCircuit", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>PaysArrivee</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["circuit"]) || array_key_exists("circuit", $context) ? $context["circuit"] : (function () { throw new Twig_Error_Runtime('Variable "circuit" does not exist.', 36, $this->source); })()), "paysArrivee", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("circuit_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("circuit_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["circuit"]) || array_key_exists("circuit", $context) ? $context["circuit"] : (function () { throw new Twig_Error_Runtime('Variable "circuit" does not exist.', 43, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">edit</a>

    ";
        // line 45
        echo twig_include($this->env, $context, "circuit/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "circuit/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 45,  135 => 43,  130 => 41,  122 => 36,  115 => 32,  108 => 28,  101 => 24,  94 => 20,  87 => 16,  80 => 12,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Circuit{% endblock %}

{% block body %}
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

    <a href=\"{{ path('circuit_index') }}\">back to list</a>

    <a href=\"{{ path('circuit_edit', {'id': circuit.id}) }}\">edit</a>

    {{ include('circuit/_delete_form.html.twig') }}
{% endblock %}
", "circuit/show.html.twig", "/home/asphox/Documents/TSP/CSC4101/project-agvoy/agvoy-app-03/templates/circuit/show.html.twig");
    }
}
