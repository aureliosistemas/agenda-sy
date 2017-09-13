<?php

/* reuniaodia/new.html.twig */
class __TwigTemplate_e39dd5c41ea2bf232434358b0170f7e4672ac2c2256b925bb9a3557aee4f4174 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reuniaodia/new.html.twig", 1);
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
        $__internal_ec014fe63581a6932be4182aab6122e42803b663705be0327c1b5c651fdd5919 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec014fe63581a6932be4182aab6122e42803b663705be0327c1b5c651fdd5919->enter($__internal_ec014fe63581a6932be4182aab6122e42803b663705be0327c1b5c651fdd5919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reuniaodia/new.html.twig"));

        $__internal_703752fad08026ebdda559f9036fa4699b9c51bd637b1f10dcc52d740c381ac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_703752fad08026ebdda559f9036fa4699b9c51bd637b1f10dcc52d740c381ac0->enter($__internal_703752fad08026ebdda559f9036fa4699b9c51bd637b1f10dcc52d740c381ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reuniaodia/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec014fe63581a6932be4182aab6122e42803b663705be0327c1b5c651fdd5919->leave($__internal_ec014fe63581a6932be4182aab6122e42803b663705be0327c1b5c651fdd5919_prof);

        
        $__internal_703752fad08026ebdda559f9036fa4699b9c51bd637b1f10dcc52d740c381ac0->leave($__internal_703752fad08026ebdda559f9036fa4699b9c51bd637b1f10dcc52d740c381ac0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf62d0b7e31a89b37e35a1d13fd3b6cd3353b89f8cc44cdcba6591d96d822f47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf62d0b7e31a89b37e35a1d13fd3b6cd3353b89f8cc44cdcba6591d96d822f47->enter($__internal_bf62d0b7e31a89b37e35a1d13fd3b6cd3353b89f8cc44cdcba6591d96d822f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_20f0cc9fdd800eaab2f56db80f7cdd6d18026025bc5bbed54fa873459502d59f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20f0cc9fdd800eaab2f56db80f7cdd6d18026025bc5bbed54fa873459502d59f->enter($__internal_20f0cc9fdd800eaab2f56db80f7cdd6d18026025bc5bbed54fa873459502d59f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reuniaodium - Novo</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <div class=\"btn-group\" role=\"group\">
            <input class=\"btn btn-success btn-salvar\" type=\"submit\" value=\"Salvar\" />
                            <a class=\"btn btn-primary btn-voltar\" href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reuniaodia_index");
        echo "\">Back to the list</a></div>
    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "


";
        
        $__internal_20f0cc9fdd800eaab2f56db80f7cdd6d18026025bc5bbed54fa873459502d59f->leave($__internal_20f0cc9fdd800eaab2f56db80f7cdd6d18026025bc5bbed54fa873459502d59f_prof);

        
        $__internal_bf62d0b7e31a89b37e35a1d13fd3b6cd3353b89f8cc44cdcba6591d96d822f47->leave($__internal_bf62d0b7e31a89b37e35a1d13fd3b6cd3353b89f8cc44cdcba6591d96d822f47_prof);

    }

    public function getTemplateName()
    {
        return "reuniaodia/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 11,  63 => 10,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Reuniaodium - Novo</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <div class=\"btn-group\" role=\"group\">
            <input class=\"btn btn-success btn-salvar\" type=\"submit\" value=\"Salvar\" />
                            <a class=\"btn btn-primary btn-voltar\" href=\"{{ path('reuniaodia_index') }}\">Back to the list</a></div>
    {{ form_end(form) }}


{% endblock %}
", "reuniaodia/new.html.twig", "C:\\xampp\\htdocs\\agenda-sy\\app\\Resources\\views\\reuniaodia\\new.html.twig");
    }
}
