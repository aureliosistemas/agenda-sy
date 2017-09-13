<?php

/* :reuniao:index.html.twig */
class __TwigTemplate_1ffa344868f55c575edbfd0b054da61ef75469438007de9dbf44e1662a74a18f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reuniao:index.html.twig", 1);
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
        $__internal_4ba6f0fcc39f2f3adc6e7cc85d82b0c8fbcac3fea675a74726c578fbd98625b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ba6f0fcc39f2f3adc6e7cc85d82b0c8fbcac3fea675a74726c578fbd98625b7->enter($__internal_4ba6f0fcc39f2f3adc6e7cc85d82b0c8fbcac3fea675a74726c578fbd98625b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reuniao:index.html.twig"));

        $__internal_ae75cc990969aec9eabe00049f7d740f8b2f1eda62650e1590f932f153eee7d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae75cc990969aec9eabe00049f7d740f8b2f1eda62650e1590f932f153eee7d7->enter($__internal_ae75cc990969aec9eabe00049f7d740f8b2f1eda62650e1590f932f153eee7d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reuniao:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ba6f0fcc39f2f3adc6e7cc85d82b0c8fbcac3fea675a74726c578fbd98625b7->leave($__internal_4ba6f0fcc39f2f3adc6e7cc85d82b0c8fbcac3fea675a74726c578fbd98625b7_prof);

        
        $__internal_ae75cc990969aec9eabe00049f7d740f8b2f1eda62650e1590f932f153eee7d7->leave($__internal_ae75cc990969aec9eabe00049f7d740f8b2f1eda62650e1590f932f153eee7d7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_57ab5ca07c52fbd9e2ec13f96f1695eaf37e56707f0b90b671af755a19dc1819 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57ab5ca07c52fbd9e2ec13f96f1695eaf37e56707f0b90b671af755a19dc1819->enter($__internal_57ab5ca07c52fbd9e2ec13f96f1695eaf37e56707f0b90b671af755a19dc1819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6ed60ed55245f15527925da2f09b1ef45a639ef676111458f8c0b1b910ea55a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ed60ed55245f15527925da2f09b1ef45a639ef676111458f8c0b1b910ea55a1->enter($__internal_6ed60ed55245f15527925da2f09b1ef45a639ef676111458f8c0b1b910ea55a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        <h3 class=\"col-md-12\">Reuniaos  <a class=\"btn-novo btn btn-success btn-sm\" href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reuniao_new");
        echo "\">Novo</a></h3>
    </div>

    

    <table class=\"table table-bordered table-responsive\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Descricao</th>
                <th>Local</th>
                <th>Status</th>
                <th width=\"60px\"></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reuniaos"] ?? $this->getContext($context, "reuniaos")));
        foreach ($context['_seq'] as $context["_key"] => $context["reuniao"]) {
            // line 23
            echo "            <tr>
                <td class=\"primary\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["reuniao"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["reuniao"], "nome", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["reuniao"], "descricao", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["reuniao"], "local", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["reuniao"], "status", array()), "html", null, true);
            echo "</td>
                <td>
                    <div class=\"btn-group\" role=\"group\">                            <a class=\"btn btn-primary\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reuniao_show", array("id" => $this->getAttribute($context["reuniao"], "id", array()))), "html", null, true);
            echo "\">show</a>                            <a class=\"btn btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reuniao_edit", array("id" => $this->getAttribute($context["reuniao"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </div>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reuniao'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>
";
        
        $__internal_6ed60ed55245f15527925da2f09b1ef45a639ef676111458f8c0b1b910ea55a1->leave($__internal_6ed60ed55245f15527925da2f09b1ef45a639ef676111458f8c0b1b910ea55a1_prof);

        
        $__internal_57ab5ca07c52fbd9e2ec13f96f1695eaf37e56707f0b90b671af755a19dc1819->leave($__internal_57ab5ca07c52fbd9e2ec13f96f1695eaf37e56707f0b90b671af755a19dc1819_prof);

    }

    public function getTemplateName()
    {
        return ":reuniao:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 35,  100 => 30,  95 => 28,  91 => 27,  87 => 26,  83 => 25,  79 => 24,  76 => 23,  72 => 22,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"row\">
        <h3 class=\"col-md-12\">Reuniaos  <a class=\"btn-novo btn btn-success btn-sm\" href=\"{{ path('reuniao_new') }}\">Novo</a></h3>
    </div>

    

    <table class=\"table table-bordered table-responsive\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Descricao</th>
                <th>Local</th>
                <th>Status</th>
                <th width=\"60px\"></th>
            </tr>
        </thead>
        <tbody>
        {% for reuniao in reuniaos %}
            <tr>
                <td class=\"primary\">{{ reuniao.id }}</td>
                <td>{{ reuniao.nome }}</td>
                <td>{{ reuniao.descricao }}</td>
                <td>{{ reuniao.local }}</td>
                <td>{{ reuniao.status }}</td>
                <td>
                    <div class=\"btn-group\" role=\"group\">                            <a class=\"btn btn-primary\" href=\"{{ path('reuniao_show', { 'id': reuniao.id }) }}\">show</a>                            <a class=\"btn btn-primary\" href=\"{{ path('reuniao_edit', { 'id': reuniao.id }) }}\">edit</a>
                    </div>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}
", ":reuniao:index.html.twig", "C:\\xampp\\htdocs\\agenda-sy\\app/Resources\\views/reuniao/index.html.twig");
    }
}
