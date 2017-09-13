<?php

/* reuniao/index.html.twig */
class __TwigTemplate_9f40fa78f0a8c4b473829a34175f2fa9747fc0fe33d34064146ee28ec1e1dfae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reuniao/index.html.twig", 1);
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
        $__internal_1a65f6c3358d17a39732351738622809f932f2d3b3f5f879c3eeff13cf687e8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a65f6c3358d17a39732351738622809f932f2d3b3f5f879c3eeff13cf687e8c->enter($__internal_1a65f6c3358d17a39732351738622809f932f2d3b3f5f879c3eeff13cf687e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reuniao/index.html.twig"));

        $__internal_301f50e0d39c633f6d410b9ffe6b6612c47fa22f72b1972c37abe3fd7731027e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_301f50e0d39c633f6d410b9ffe6b6612c47fa22f72b1972c37abe3fd7731027e->enter($__internal_301f50e0d39c633f6d410b9ffe6b6612c47fa22f72b1972c37abe3fd7731027e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reuniao/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a65f6c3358d17a39732351738622809f932f2d3b3f5f879c3eeff13cf687e8c->leave($__internal_1a65f6c3358d17a39732351738622809f932f2d3b3f5f879c3eeff13cf687e8c_prof);

        
        $__internal_301f50e0d39c633f6d410b9ffe6b6612c47fa22f72b1972c37abe3fd7731027e->leave($__internal_301f50e0d39c633f6d410b9ffe6b6612c47fa22f72b1972c37abe3fd7731027e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f74a4a1c21466d6f18ffa034829261fa936ff77cc7ecbaf597300c457b34be2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f74a4a1c21466d6f18ffa034829261fa936ff77cc7ecbaf597300c457b34be2->enter($__internal_6f74a4a1c21466d6f18ffa034829261fa936ff77cc7ecbaf597300c457b34be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_62ab6cda6b1e87754ff7b214260897cc0c428c74d8cc03112f98842fa97e4583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62ab6cda6b1e87754ff7b214260897cc0c428c74d8cc03112f98842fa97e4583->enter($__internal_62ab6cda6b1e87754ff7b214260897cc0c428c74d8cc03112f98842fa97e4583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\">Reuniões
            <a class=\"btn-novo btn btn-success btn-sm\" href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reuniao_new");
        echo "\">Novo</a>
       
  </div>
    <table class=\"table table-bordered table-responsive\">
        <thead>
            <tr>
                <th width=\"60\">Id</th>
                <th>Nome</th>
                <th>Descricao</th>
                <th>Local</th>
                <th width=\"70\">Status</th>
                <th width=\"70\">Dias</th>
                <th width=\"100\"></th>
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
                    <a class=\"btn btn-primary\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reuniaodia_index", array("reuniao" => $this->getAttribute($context["reuniao"], "id", array()))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-calendar\" aria-hidden=\"true\"></span>
                        <span class=\"badge\">";
            // line 32
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["reuniao"], "datas", array())), "html", null, true);
            echo "</span>
                    </a>                           
                   
                </td>
                <td>
                    <div class=\"btn-group\" role=\"group\">                           
                        <a class=\"btn btn-primary\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reuniao_show", array("id" => $this->getAttribute($context["reuniao"], "id", array()))), "html", null, true);
            echo "\">
                            <span class=\"glyphicon glyphicon-th-list\" aria-hidden=\"true\"></span>
                        </a>                           
                        <a class=\"btn btn-primary\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reuniao_edit", array("id" => $this->getAttribute($context["reuniao"], "id", array()))), "html", null, true);
            echo "\">
                            <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                        </a>
                    </div>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reuniao'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </tbody>
    </table>
    </div>
";
        
        $__internal_62ab6cda6b1e87754ff7b214260897cc0c428c74d8cc03112f98842fa97e4583->leave($__internal_62ab6cda6b1e87754ff7b214260897cc0c428c74d8cc03112f98842fa97e4583_prof);

        
        $__internal_6f74a4a1c21466d6f18ffa034829261fa936ff77cc7ecbaf597300c457b34be2->leave($__internal_6f74a4a1c21466d6f18ffa034829261fa936ff77cc7ecbaf597300c457b34be2_prof);

    }

    public function getTemplateName()
    {
        return "reuniao/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 48,  120 => 41,  114 => 38,  105 => 32,  100 => 30,  95 => 28,  91 => 27,  87 => 26,  83 => 25,  79 => 24,  76 => 23,  72 => 22,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
<div class=\"panel panel-default\">
  <div class=\"panel-heading\">Reuniões
            <a class=\"btn-novo btn btn-success btn-sm\" href=\"{{ path('reuniao_new') }}\">Novo</a>
       
  </div>
    <table class=\"table table-bordered table-responsive\">
        <thead>
            <tr>
                <th width=\"60\">Id</th>
                <th>Nome</th>
                <th>Descricao</th>
                <th>Local</th>
                <th width=\"70\">Status</th>
                <th width=\"70\">Dias</th>
                <th width=\"100\"></th>
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
                    <a class=\"btn btn-primary\" href=\"{{ path('reuniaodia_index', { 'reuniao': reuniao.id }) }}\">
                        <span class=\"glyphicon glyphicon-calendar\" aria-hidden=\"true\"></span>
                        <span class=\"badge\">{{ reuniao.datas|length  }}</span>
                    </a>                           
                   
                </td>
                <td>
                    <div class=\"btn-group\" role=\"group\">                           
                        <a class=\"btn btn-primary\" href=\"{{ path('reuniao_show', { 'id': reuniao.id }) }}\">
                            <span class=\"glyphicon glyphicon-th-list\" aria-hidden=\"true\"></span>
                        </a>                           
                        <a class=\"btn btn-primary\" href=\"{{ path('reuniao_edit', { 'id': reuniao.id }) }}\">
                            <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                        </a>
                    </div>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    </div>
{% endblock %}
", "reuniao/index.html.twig", "C:\\xampp\\htdocs\\agenda-sy\\app\\Resources\\views\\reuniao\\index.html.twig");
    }
}
