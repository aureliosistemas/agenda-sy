<?php

/* :reuniao:show.html.twig */
class __TwigTemplate_8b33d4e53c3cc00fc0bf2e2b2793fda8b81cc4c0b96b5352b9db080f850c9d46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reuniao:show.html.twig", 1);
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
        $__internal_24a0e4723a37655453485b36035244d860ac427c5a804530d01b0dbd25e6a0bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24a0e4723a37655453485b36035244d860ac427c5a804530d01b0dbd25e6a0bd->enter($__internal_24a0e4723a37655453485b36035244d860ac427c5a804530d01b0dbd25e6a0bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reuniao:show.html.twig"));

        $__internal_ccdd956cd9fa308c98b1e9a2522d4770ecdc17da015f3dcdb0ec67e89444d27e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccdd956cd9fa308c98b1e9a2522d4770ecdc17da015f3dcdb0ec67e89444d27e->enter($__internal_ccdd956cd9fa308c98b1e9a2522d4770ecdc17da015f3dcdb0ec67e89444d27e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reuniao:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24a0e4723a37655453485b36035244d860ac427c5a804530d01b0dbd25e6a0bd->leave($__internal_24a0e4723a37655453485b36035244d860ac427c5a804530d01b0dbd25e6a0bd_prof);

        
        $__internal_ccdd956cd9fa308c98b1e9a2522d4770ecdc17da015f3dcdb0ec67e89444d27e->leave($__internal_ccdd956cd9fa308c98b1e9a2522d4770ecdc17da015f3dcdb0ec67e89444d27e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7d499cf7191b650fc033f16ca2730f2bc683507915a11c11651257a31301b3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7d499cf7191b650fc033f16ca2730f2bc683507915a11c11651257a31301b3d->enter($__internal_b7d499cf7191b650fc033f16ca2730f2bc683507915a11c11651257a31301b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_29c3940b128d9240ae7d2cd42394eea58d900748de79fd7fbbdcc5d5cc4de197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29c3940b128d9240ae7d2cd42394eea58d900748de79fd7fbbdcc5d5cc4de197->enter($__internal_29c3940b128d9240ae7d2cd42394eea58d900748de79fd7fbbdcc5d5cc4de197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reuniao - Excluir</h1>
    <hr/>
    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
    <table class=\"table table-bordered table-responsive\">
        <tbody>
            <tr>
                <th>Id</th>
                <td class=\"default\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reuniao"] ?? $this->getContext($context, "reuniao")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nome</th>
                <td class=\"default\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reuniao"] ?? $this->getContext($context, "reuniao")), "nome", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descricao</th>
                <td class=\"default\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reuniao"] ?? $this->getContext($context, "reuniao")), "descricao", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Local</th>
                <td class=\"default\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reuniao"] ?? $this->getContext($context, "reuniao")), "local", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Status</th>
                <td class=\"default\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reuniao"] ?? $this->getContext($context, "reuniao")), "status", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    <div>
        <input class=\"btn btn-danger btn-excluir\" type=\"submit\" value=\"Confirmar\">
        <a class=\"btn btn-primary btn-voltar\" href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reuniao_index");
        echo "\">Voltar</a>
    </div>
    ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
";
        
        $__internal_29c3940b128d9240ae7d2cd42394eea58d900748de79fd7fbbdcc5d5cc4de197->leave($__internal_29c3940b128d9240ae7d2cd42394eea58d900748de79fd7fbbdcc5d5cc4de197_prof);

        
        $__internal_b7d499cf7191b650fc033f16ca2730f2bc683507915a11c11651257a31301b3d->leave($__internal_b7d499cf7191b650fc033f16ca2730f2bc683507915a11c11651257a31301b3d_prof);

    }

    public function getTemplateName()
    {
        return ":reuniao:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 35,  98 => 33,  89 => 27,  82 => 23,  75 => 19,  68 => 15,  61 => 11,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Reuniao - Excluir</h1>
    <hr/>
    {{ form_start(delete_form) }}
    <table class=\"table table-bordered table-responsive\">
        <tbody>
            <tr>
                <th>Id</th>
                <td class=\"default\">{{ reuniao.id }}</td>
            </tr>
            <tr>
                <th>Nome</th>
                <td class=\"default\">{{ reuniao.nome }}</td>
            </tr>
            <tr>
                <th>Descricao</th>
                <td class=\"default\">{{ reuniao.descricao }}</td>
            </tr>
            <tr>
                <th>Local</th>
                <td class=\"default\">{{ reuniao.local }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td class=\"default\">{{ reuniao.status }}</td>
            </tr>
        </tbody>
    </table>
    <div>
        <input class=\"btn btn-danger btn-excluir\" type=\"submit\" value=\"Confirmar\">
        <a class=\"btn btn-primary btn-voltar\" href=\"{{ path('reuniao_index') }}\">Voltar</a>
    </div>
    {{ form_end(delete_form) }}
{% endblock %}
", ":reuniao:show.html.twig", "C:\\xampp\\htdocs\\agenda-sy\\app/Resources\\views/reuniao/show.html.twig");
    }
}
