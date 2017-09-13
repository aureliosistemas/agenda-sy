<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_aaa33a75cf7a0988a5bf811895e3e5ef98796ae4f1bbec179c245af3c83f74b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6ee08c3111fcd96f92eb2f83da28319807da9542ac8fb3c899092b2b7add41b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6ee08c3111fcd96f92eb2f83da28319807da9542ac8fb3c899092b2b7add41b->enter($__internal_c6ee08c3111fcd96f92eb2f83da28319807da9542ac8fb3c899092b2b7add41b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_bb2a2ec051751ed3b25e4a4e867f46093b27940dc6407b155ecab3943203c1e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb2a2ec051751ed3b25e4a4e867f46093b27940dc6407b155ecab3943203c1e0->enter($__internal_bb2a2ec051751ed3b25e4a4e867f46093b27940dc6407b155ecab3943203c1e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_c6ee08c3111fcd96f92eb2f83da28319807da9542ac8fb3c899092b2b7add41b->leave($__internal_c6ee08c3111fcd96f92eb2f83da28319807da9542ac8fb3c899092b2b7add41b_prof);

        
        $__internal_bb2a2ec051751ed3b25e4a4e867f46093b27940dc6407b155ecab3943203c1e0->leave($__internal_bb2a2ec051751ed3b25e4a4e867f46093b27940dc6407b155ecab3943203c1e0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
