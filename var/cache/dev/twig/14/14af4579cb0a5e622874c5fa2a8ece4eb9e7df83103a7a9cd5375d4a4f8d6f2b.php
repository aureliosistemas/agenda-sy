<?php

/* :reuniaopessoa:index.html.twig */
class __TwigTemplate_80a471364524d66bb4e126c6cbe0a8774dc4f12ad58a455bd335e365a1e96769 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reuniaopessoa:index.html.twig", 1);
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
        $__internal_3d74b620141498566b2acc1e9ea3c0d050958fb04458ebd34c2c00dd0503b236 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d74b620141498566b2acc1e9ea3c0d050958fb04458ebd34c2c00dd0503b236->enter($__internal_3d74b620141498566b2acc1e9ea3c0d050958fb04458ebd34c2c00dd0503b236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reuniaopessoa:index.html.twig"));

        $__internal_76b0aef12193059514d7c82cfdd9879995ab27a4263f8bc91299028ce5385d52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76b0aef12193059514d7c82cfdd9879995ab27a4263f8bc91299028ce5385d52->enter($__internal_76b0aef12193059514d7c82cfdd9879995ab27a4263f8bc91299028ce5385d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reuniaopessoa:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d74b620141498566b2acc1e9ea3c0d050958fb04458ebd34c2c00dd0503b236->leave($__internal_3d74b620141498566b2acc1e9ea3c0d050958fb04458ebd34c2c00dd0503b236_prof);

        
        $__internal_76b0aef12193059514d7c82cfdd9879995ab27a4263f8bc91299028ce5385d52->leave($__internal_76b0aef12193059514d7c82cfdd9879995ab27a4263f8bc91299028ce5385d52_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1fa079961fd19622cb14bb8418f9579c32ea69aea1cbab0e8bf60d6ef862f00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1fa079961fd19622cb14bb8418f9579c32ea69aea1cbab0e8bf60d6ef862f00->enter($__internal_a1fa079961fd19622cb14bb8418f9579c32ea69aea1cbab0e8bf60d6ef862f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3315e0b91cee33ee9381e7e51916f59dda9a68b8ba1edc16195b3922937efc9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3315e0b91cee33ee9381e7e51916f59dda9a68b8ba1edc16195b3922937efc9c->enter($__internal_3315e0b91cee33ee9381e7e51916f59dda9a68b8ba1edc16195b3922937efc9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        <h3 class=\"col-md-12\">Reuniaopessoas  <a class=\"btn-novo btn btn-success btn-sm\" href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reuniaopessoa_new");
        echo "\">Novo</a></h3>
    </div>


    <table class=\"table table-bordered table-responsive\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Reuniao</th>
                <th width=\"60px\"></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reuniaoPessoas"] ?? $this->getContext($context, "reuniaoPessoas")));
        foreach ($context['_seq'] as $context["_key"] => $context["reuniaoPessoa"]) {
            // line 20
            echo "            <tr>
                <td class=\"primary\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["reuniaoPessoa"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["reuniaoPessoa"], "nome", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["reuniaoPessoa"], "reuniao", array()), "html", null, true);
            echo "</td>
                <td>
                    <div class=\"btn-group\" role=\"group\">                            <a class=\"btn btn-primary\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reuniaopessoa_show", array("id" => $this->getAttribute($context["reuniaoPessoa"], "id", array()))), "html", null, true);
            echo "\">show</a>                            <a class=\"btn btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reuniaopessoa_edit", array("id" => $this->getAttribute($context["reuniaoPessoa"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </div>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reuniaoPessoa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </tbody>
    </table>
";
        
        $__internal_3315e0b91cee33ee9381e7e51916f59dda9a68b8ba1edc16195b3922937efc9c->leave($__internal_3315e0b91cee33ee9381e7e51916f59dda9a68b8ba1edc16195b3922937efc9c_prof);

        
        $__internal_a1fa079961fd19622cb14bb8418f9579c32ea69aea1cbab0e8bf60d6ef862f00->leave($__internal_a1fa079961fd19622cb14bb8418f9579c32ea69aea1cbab0e8bf60d6ef862f00_prof);

    }

    public function getTemplateName()
    {
        return ":reuniaopessoa:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 30,  89 => 25,  84 => 23,  80 => 22,  76 => 21,  73 => 20,  69 => 19,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
        <h3 class=\"col-md-12\">Reuniaopessoas  <a class=\"btn-novo btn btn-success btn-sm\" href=\"{{ path('reuniaopessoa_new') }}\">Novo</a></h3>
    </div>


    <table class=\"table table-bordered table-responsive\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Reuniao</th>
                <th width=\"60px\"></th>
            </tr>
        </thead>
        <tbody>
        {% for reuniaoPessoa in reuniaoPessoas %}
            <tr>
                <td class=\"primary\">{{ reuniaoPessoa.id }}</td>
                <td>{{ reuniaoPessoa.nome }}</td>
                <td>{{ reuniaoPessoa.reuniao }}</td>
                <td>
                    <div class=\"btn-group\" role=\"group\">                            <a class=\"btn btn-primary\" href=\"{{ path('reuniaopessoa_show', { 'id': reuniaoPessoa.id }) }}\">show</a>                            <a class=\"btn btn-primary\" href=\"{{ path('reuniaopessoa_edit', { 'id': reuniaoPessoa.id }) }}\">edit</a>
                    </div>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}
", ":reuniaopessoa:index.html.twig", "C:\\xampp\\htdocs\\agenda-sy\\app/Resources\\views/reuniaopessoa/index.html.twig");
    }
}
