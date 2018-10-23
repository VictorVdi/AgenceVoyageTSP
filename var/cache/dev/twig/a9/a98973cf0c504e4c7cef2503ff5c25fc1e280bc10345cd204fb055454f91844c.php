<?php

/* front/home.html.twig */
class __TwigTemplate_e9464661fcefefa0902f9e9513363b4291fa8f8c3d065f4315f9d512c7562ef5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "front/home.html.twig", 1);
        $this->blocks = array(
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Liste des circuits</h1>

    <table class=\"table\">
        <thead>
        <tr>
            <th>Id</th>
            <th>Description</th>
            <th>Depart</th>
            <th>Arrivee</th>
            <th>Duree (jours)</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["circuits"]) || array_key_exists("circuits", $context) ? $context["circuits"] : (function () { throw new Twig_Error_Runtime('Variable "circuits" does not exist.', 17, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["circuit"]) {
            // line 18
            echo "            <tr>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["circuit"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_circuit_show", array("id" => twig_get_attribute($this->env, $this->source, $context["circuit"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["circuit"], "description", array()), "html", null, true);
            echo "</a>
                </td>
                <td>
                    ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["circuit"], "getPaysDepart", array(), "method"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["circuit"], "getVilleDepart", array(), "method"), "html", null, true);
            echo " </td>
                <td>
                    ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["circuit"], "getPaysArrivee", array(), "method"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["circuit"], "getVilleArrivee", array(), "method"), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["circuit"], "getDureeCircuit", array(), "method"), "html", null, true);
            echo "
                </td>
                <td>
                    <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_circuit_like", array("id" => twig_get_attribute($this->env, $this->source, $context["circuit"], "id", array()))), "html", null, true);
            echo "\">
                        ";
            // line 33
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["circuit"], "id", array()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 33, $this->source); })()), "session", array()), "get", array(0 => "likes"), "method"))) {
                // line 34
                echo "                            unlike
                        ";
            } else {
                // line 36
                echo "                            like
                        ";
            }
            // line 38
            echo "                    </a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            echo "            <tr>
                <td colspan=\"2\">no circuits found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['circuit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </tbody>
    </table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 46,  132 => 42,  124 => 38,  120 => 36,  116 => 34,  114 => 33,  110 => 32,  104 => 29,  96 => 26,  89 => 24,  81 => 21,  76 => 19,  73 => 18,  68 => 17,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Liste des circuits</h1>

    <table class=\"table\">
        <thead>
        <tr>
            <th>Id</th>
            <th>Description</th>
            <th>Depart</th>
            <th>Arrivee</th>
            <th>Duree (jours)</th>
        </tr>
        </thead>
        <tbody>
        {% for circuit in circuits %}
            <tr>
                <td>{{ circuit.id }}</td>
                <td>
                    <a href=\"{{ path('front_circuit_show', {id: circuit.id}) }}\">{{ circuit.description }}</a>
                </td>
                <td>
                    {{ circuit.getPaysDepart() }}/{{ circuit.getVilleDepart() }} </td>
                <td>
                    {{ circuit.getPaysArrivee() }}/{{ circuit.getVilleArrivee() }}
                </td>
                <td>
                    {{ circuit.getDureeCircuit() }}
                </td>
                <td>
                    <a href=\"{{ path('front_circuit_like',{id: circuit.id }) }}\">
                        {% if  circuit.id in app.session.get('likes') %}
                            unlike
                        {% else %}
                            like
                        {% endif %}
                    </a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"2\">no circuits found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

{% endblock %} {# body #}
", "front/home.html.twig", "/home/asphox/Documents/TSP/CSC4101/project-agvoy/agvoy-app-03/templates/front/home.html.twig");
    }
}
