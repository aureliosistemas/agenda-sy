<?php

/* reuniao/new.html.twig */
class __TwigTemplate_7e832b38fdcd7626a502d5ce5088ad623147d03baa5dd31d24002edeb9dbccf1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reuniao/new.html.twig", 1);
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
        $__internal_aebac4772161b60e218e6ee7b9388f99bb82d647684b18fd74ab9bf3eab4e574 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aebac4772161b60e218e6ee7b9388f99bb82d647684b18fd74ab9bf3eab4e574->enter($__internal_aebac4772161b60e218e6ee7b9388f99bb82d647684b18fd74ab9bf3eab4e574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reuniao/new.html.twig"));

        $__internal_c6efbc8e8b95c7e175ea8a6cedf2b3d3474aa4e75443a6d255af6f44dbea3066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6efbc8e8b95c7e175ea8a6cedf2b3d3474aa4e75443a6d255af6f44dbea3066->enter($__internal_c6efbc8e8b95c7e175ea8a6cedf2b3d3474aa4e75443a6d255af6f44dbea3066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reuniao/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aebac4772161b60e218e6ee7b9388f99bb82d647684b18fd74ab9bf3eab4e574->leave($__internal_aebac4772161b60e218e6ee7b9388f99bb82d647684b18fd74ab9bf3eab4e574_prof);

        
        $__internal_c6efbc8e8b95c7e175ea8a6cedf2b3d3474aa4e75443a6d255af6f44dbea3066->leave($__internal_c6efbc8e8b95c7e175ea8a6cedf2b3d3474aa4e75443a6d255af6f44dbea3066_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d3f35c54bb211bc882abe66959e721a0372435e97034f15911030d2e82752a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d3f35c54bb211bc882abe66959e721a0372435e97034f15911030d2e82752a8->enter($__internal_6d3f35c54bb211bc882abe66959e721a0372435e97034f15911030d2e82752a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_340c9d0e242eef457d631c37964cc2af76e53b482f9290ef3155b8ee4b4bc195 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_340c9d0e242eef457d631c37964cc2af76e53b482f9290ef3155b8ee4b4bc195->enter($__internal_340c9d0e242eef457d631c37964cc2af76e53b482f9290ef3155b8ee4b4bc195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reuniao - Novo</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reuniao_index");
        echo "\">Back to the list</a></div>
    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "


";
        
        $__internal_340c9d0e242eef457d631c37964cc2af76e53b482f9290ef3155b8ee4b4bc195->leave($__internal_340c9d0e242eef457d631c37964cc2af76e53b482f9290ef3155b8ee4b4bc195_prof);

        
        $__internal_6d3f35c54bb211bc882abe66959e721a0372435e97034f15911030d2e82752a8->leave($__internal_6d3f35c54bb211bc882abe66959e721a0372435e97034f15911030d2e82752a8_prof);

    }

    public function getTemplateName()
    {
        return "reuniao/new.html.twig";
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
    <h1>Reuniao - Novo</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <div class=\"btn-group\" role=\"group\">
            <input class=\"btn btn-success btn-salvar\" type=\"submit\" value=\"Salvar\" />
                            <a class=\"btn btn-primary btn-voltar\" href=\"{{ path('reuniao_index') }}\">Back to the list</a></div>
    {{ form_end(form) }}


{% endblock %}
", "reuniao/new.html.twig", "C:\\xampp\\htdocs\\agenda-sy\\app\\Resources\\views\\reuniao\\new.html.twig");
    }
}
