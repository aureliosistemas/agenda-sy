<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_1406c706aafb1d29637c02dc07b8308c8d1175e94ef470af301598ed8fc617a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3d43a8c5d9b23185fe5d4a2b708b3f7af1b692ca6a084934c0a2063c9a7e70c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3d43a8c5d9b23185fe5d4a2b708b3f7af1b692ca6a084934c0a2063c9a7e70c->enter($__internal_a3d43a8c5d9b23185fe5d4a2b708b3f7af1b692ca6a084934c0a2063c9a7e70c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_d701bfb5dda4c094ac9c59619618717f80c5da1cda14c8483f6fdeeb39055a8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d701bfb5dda4c094ac9c59619618717f80c5da1cda14c8483f6fdeeb39055a8f->enter($__internal_d701bfb5dda4c094ac9c59619618717f80c5da1cda14c8483f6fdeeb39055a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3d43a8c5d9b23185fe5d4a2b708b3f7af1b692ca6a084934c0a2063c9a7e70c->leave($__internal_a3d43a8c5d9b23185fe5d4a2b708b3f7af1b692ca6a084934c0a2063c9a7e70c_prof);

        
        $__internal_d701bfb5dda4c094ac9c59619618717f80c5da1cda14c8483f6fdeeb39055a8f->leave($__internal_d701bfb5dda4c094ac9c59619618717f80c5da1cda14c8483f6fdeeb39055a8f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_839d05d7b6ccb02fe2146dcf0f4384137b6179aa79b7f797b96eebcf6d85e276 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_839d05d7b6ccb02fe2146dcf0f4384137b6179aa79b7f797b96eebcf6d85e276->enter($__internal_839d05d7b6ccb02fe2146dcf0f4384137b6179aa79b7f797b96eebcf6d85e276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b18b108ba02ce00fa9b3db3e27e3b0be63ac246e82d10f98b0fb948e0754fac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b18b108ba02ce00fa9b3db3e27e3b0be63ac246e82d10f98b0fb948e0754fac3->enter($__internal_b18b108ba02ce00fa9b3db3e27e3b0be63ac246e82d10f98b0fb948e0754fac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_b18b108ba02ce00fa9b3db3e27e3b0be63ac246e82d10f98b0fb948e0754fac3->leave($__internal_b18b108ba02ce00fa9b3db3e27e3b0be63ac246e82d10f98b0fb948e0754fac3_prof);

        
        $__internal_839d05d7b6ccb02fe2146dcf0f4384137b6179aa79b7f797b96eebcf6d85e276->leave($__internal_839d05d7b6ccb02fe2146dcf0f4384137b6179aa79b7f797b96eebcf6d85e276_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c16ecb021aad19b5e20b279b27ae83d3c51bab5c81658bb5279018b348c2c90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c16ecb021aad19b5e20b279b27ae83d3c51bab5c81658bb5279018b348c2c90->enter($__internal_5c16ecb021aad19b5e20b279b27ae83d3c51bab5c81658bb5279018b348c2c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a1149047e2b2d996e546887d10c962e38cfccffbc821468ce1ccf22265b72ca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1149047e2b2d996e546887d10c962e38cfccffbc821468ce1ccf22265b72ca1->enter($__internal_a1149047e2b2d996e546887d10c962e38cfccffbc821468ce1ccf22265b72ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_a1149047e2b2d996e546887d10c962e38cfccffbc821468ce1ccf22265b72ca1->leave($__internal_a1149047e2b2d996e546887d10c962e38cfccffbc821468ce1ccf22265b72ca1_prof);

        
        $__internal_5c16ecb021aad19b5e20b279b27ae83d3c51bab5c81658bb5279018b348c2c90->leave($__internal_5c16ecb021aad19b5e20b279b27ae83d3c51bab5c81658bb5279018b348c2c90_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
