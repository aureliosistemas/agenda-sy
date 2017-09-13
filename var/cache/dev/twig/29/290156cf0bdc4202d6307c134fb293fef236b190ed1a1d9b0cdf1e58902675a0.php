<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_13d6abe4db688889006e99abf49b08cb6f14902caa17f0ae6661938f4a855ade extends Twig_Template
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
        $__internal_889c3b71755ebbf57739e6de5317a0b1478f42b08a956537297654cb509fd770 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_889c3b71755ebbf57739e6de5317a0b1478f42b08a956537297654cb509fd770->enter($__internal_889c3b71755ebbf57739e6de5317a0b1478f42b08a956537297654cb509fd770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_641d56283bf57f54f670b39fc6d9527093bd8b526bab82a98698925246a3e800 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_641d56283bf57f54f670b39fc6d9527093bd8b526bab82a98698925246a3e800->enter($__internal_641d56283bf57f54f670b39fc6d9527093bd8b526bab82a98698925246a3e800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_889c3b71755ebbf57739e6de5317a0b1478f42b08a956537297654cb509fd770->leave($__internal_889c3b71755ebbf57739e6de5317a0b1478f42b08a956537297654cb509fd770_prof);

        
        $__internal_641d56283bf57f54f670b39fc6d9527093bd8b526bab82a98698925246a3e800->leave($__internal_641d56283bf57f54f670b39fc6d9527093bd8b526bab82a98698925246a3e800_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\xampp\\htdocs\\agenda-sy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
