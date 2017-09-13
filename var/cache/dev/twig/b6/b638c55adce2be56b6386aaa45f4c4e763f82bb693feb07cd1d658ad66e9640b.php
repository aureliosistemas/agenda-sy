<?php

/* :reuniaodia:show.html.twig */
class __TwigTemplate_88e2b073f27fc2ade8a523eb37bdbeb1433fe8da6b2fae67a0b08e5139a1f72d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reuniaodia:show.html.twig", 1);
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
        $__internal_9183a31eba1091f9ea8c3fc35cf5bc835c8795f0123e04fa57eaa4b93378dc77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9183a31eba1091f9ea8c3fc35cf5bc835c8795f0123e04fa57eaa4b93378dc77->enter($__internal_9183a31eba1091f9ea8c3fc35cf5bc835c8795f0123e04fa57eaa4b93378dc77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reuniaodia:show.html.twig"));

        $__internal_7ae3f8aa4c871a436a11e61f490dffd6285465d4c51332c82cfa33aa3e7e883e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ae3f8aa4c871a436a11e61f490dffd6285465d4c51332c82cfa33aa3e7e883e->enter($__internal_7ae3f8aa4c871a436a11e61f490dffd6285465d4c51332c82cfa33aa3e7e883e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reuniaodia:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9183a31eba1091f9ea8c3fc35cf5bc835c8795f0123e04fa57eaa4b93378dc77->leave($__internal_9183a31eba1091f9ea8c3fc35cf5bc835c8795f0123e04fa57eaa4b93378dc77_prof);

        
        $__internal_7ae3f8aa4c871a436a11e61f490dffd6285465d4c51332c82cfa33aa3e7e883e->leave($__internal_7ae3f8aa4c871a436a11e61f490dffd6285465d4c51332c82cfa33aa3e7e883e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_998445027223b1bcfaa13a7479b7851d37e1595209ff119beb85d0f27d618f27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_998445027223b1bcfaa13a7479b7851d37e1595209ff119beb85d0f27d618f27->enter($__internal_998445027223b1bcfaa13a7479b7851d37e1595209ff119beb85d0f27d618f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3463d0b2bebf7ab8de4e38b77456db3d52c91f6326ac6b6b54a1a5a6e781fb28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3463d0b2bebf7ab8de4e38b77456db3d52c91f6326ac6b6b54a1a5a6e781fb28->enter($__internal_3463d0b2bebf7ab8de4e38b77456db3d52c91f6326ac6b6b54a1a5a6e781fb28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reuniaodium - Excluir</h1>
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reuniaoDium"] ?? $this->getContext($context, "reuniaoDium")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Reuniao</th>
                <td class=\"default\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reuniaoDium"] ?? $this->getContext($context, "reuniaoDium")), "reuniao", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Data</th>
                <td class=\"date\">";
        // line 19
        if ($this->getAttribute(($context["reuniaoDium"] ?? $this->getContext($context, "reuniaoDium")), "data", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["reuniaoDium"] ?? $this->getContext($context, "reuniaoDium")), "data", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>
    <div>
        <input class=\"btn btn-danger btn-excluir\" type=\"submit\" value=\"Confirmar\">
        <a class=\"btn btn-primary btn-voltar\" href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reuniaodia_index");
        echo "\">Voltar</a>
    </div>
    ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
";
        
        $__internal_3463d0b2bebf7ab8de4e38b77456db3d52c91f6326ac6b6b54a1a5a6e781fb28->leave($__internal_3463d0b2bebf7ab8de4e38b77456db3d52c91f6326ac6b6b54a1a5a6e781fb28_prof);

        
        $__internal_998445027223b1bcfaa13a7479b7851d37e1595209ff119beb85d0f27d618f27->leave($__internal_998445027223b1bcfaa13a7479b7851d37e1595209ff119beb85d0f27d618f27_prof);

    }

    public function getTemplateName()
    {
        return ":reuniaodia:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 27,  86 => 25,  75 => 19,  68 => 15,  61 => 11,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Reuniaodium - Excluir</h1>
    <hr/>
    {{ form_start(delete_form) }}
    <table class=\"table table-bordered table-responsive\">
        <tbody>
            <tr>
                <th>Id</th>
                <td class=\"default\">{{ reuniaoDium.id }}</td>
            </tr>
            <tr>
                <th>Reuniao</th>
                <td class=\"default\">{{ reuniaoDium.reuniao }}</td>
            </tr>
            <tr>
                <th>Data</th>
                <td class=\"date\">{% if reuniaoDium.data %}{{ reuniaoDium.data|date('Y-m-d') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>
    <div>
        <input class=\"btn btn-danger btn-excluir\" type=\"submit\" value=\"Confirmar\">
        <a class=\"btn btn-primary btn-voltar\" href=\"{{ path('reuniaodia_index') }}\">Voltar</a>
    </div>
    {{ form_end(delete_form) }}
{% endblock %}
", ":reuniaodia:show.html.twig", "C:\\xampp\\htdocs\\agenda-sy\\app/Resources\\views/reuniaodia/show.html.twig");
    }
}
